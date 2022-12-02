<?php

namespace App\Http\Controllers;

use App\Models\assane;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    //controle du formulaire

    public function inscription(Request $request){
        $nom = $request->get('nom');
        $prenom = $request->get('prenom');
        $email = $request->get('email');
        $password= $request->get('password');
        $role=$request->get('role');
        $password_confirmation=$request->get('password1');

        $validation = $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required','email'],
            'role'=>['required'],
            'password'=>['required'],
        ]);

        $res = new assane();

        $res->prenom=$request->get('prenom');
        $res->nom=$request->get('nom');
        $res->email=$request->get('email');
        $res->password=$request->get('password');
        $res->role=$request->get('role');
        $res->date_inscription=date('y-m-d');
        $res->date_modification=null;
        $res->date_archivage=null;
        $res->save();
      return $validation;


    }


}