<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);          //nessa parte ele joga na variável $user o usuario do profile
        return view('profiles.index', [               //entao manda pra home com 'user'(que vai ser a variavel na pagina)
            'user' => $user,                //com o valor de $user que tinha o usuario do profile
        ]);                                 //dai pode usar a tag no bigode e usar as variáveis
    }
}
