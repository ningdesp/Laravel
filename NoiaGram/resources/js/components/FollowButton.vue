<template>
  <div>
    <button
      class="btn btn-primary ml-4"
      @click="followUser"
      v-text="buttonText"
    ></button>
  </div>
</template>

<script>
export default {
  props: ["userId", "follows"],

  mounted() {
    console.log("Component mounted.");
  },

  data: function () {
    return {
      status: this.follows,
    };
  },

  methods: {
    followUser() {
      axios
        .post("/follow/" + this.userId)
        .then((response) => {
          this.status = !this.status; // ele adicionou essa linha.... se a resposta for sucesso..pega o statuss... e !(tóggla) ele
          console.log(response.data);
        })
        .catch((errors) => {
          if (errors.response.status == 401) {
            //agr asim se der esse erro..ele manda o cara pra pagina de login
            window.location = "/login";
          }
        });
    },
  },

  computed: {
    buttonText() {
      return this.status ? "Unfollow" : "Follow";
    },
  },
};
</script>
