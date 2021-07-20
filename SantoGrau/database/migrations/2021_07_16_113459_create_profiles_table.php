<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()                                            //criar TABELA profiles, que tem
    {                                                               //ROW id e ROW FOREIGN KEY user_id
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');          //aqui voce relaciona o id do usuario com o profile
            $table->string('title')->nullable();            //é uma referencia do id do usuario q diz que
            $table->text('description')->nullable();        //determinado profile pertence a tal usuario
            $table->string('url')->nullable();
            $table->timestamps();

            $table->index('user_id');       //pra melhor procurabilidade e consultas mais rapidas
        });                                 //ele diz pra sempre criar um index em foreign keys(primary keys de outras tabelas)
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
