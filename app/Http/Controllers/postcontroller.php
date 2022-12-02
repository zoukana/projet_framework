<?php

namespace App\Http\Controllers;

use App\Models\assane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class postcontroller extends Controller
{
    //controle du formulaire

    public function inscription(Request $request){
        $u = new assane();
     /*    dd($u::all()); */

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
        foreach ($u::all() as $user) {
          /*   dd($email); */
            if($user->email === $email){

                return ('email existant');
            }else{

                $res = new assane();

                $res->$prenom;
                $res->$nom;
                $res->$email;
                $res->$password=bcrypt($password);
                $res->$role;
                $res->date_inscription=date('y-m-d');
                $res->date_modification=null;
                $res->date_archivage=null;
                $res->save();
            }
        }


      return $validation;


    }


}
