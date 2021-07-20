<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model                         // user tem um profile e o profile pertence a um user
{                                                   //com a FUMÇÃO user() nos criamos a RELAÇÃo entre 
    public function user()                          //profile e user, sendo o profile DO user
    {
        return $this->belongsTo(User::class);
    }
}
