<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class postcontroller extends Controller
{
    //controle du formulaire

    public function inscription(Request $request){

        $nom = $request->get('nom');
        $prenom = $request->get('prenom');
        $email = $request->get('email');
        $password= $request->get('password');
        $password_confirmation=$request->get('password1');
        $validation = $request->validate([
            'nom' => ['required', ],
            'prenom' => ['required', ],
            'role' => ['required', ],
            'email' => ['required', 'min:10','email'],
          
        ]);
/*         $user = new User();
     $user->matricule=null;
     $user->prenom=$prenom;
     $user->nom=$nom;
     $user->email=$email;
     $user->password=$password;
     $user->date_inscription=date('y-m-d');
     $user->date_modification=null;
     $user->photo=null;
     $user->date_archivage=null; */
     
      return $validation;
    }

    //auto_générer matricule
    
  /*   function autogenerate($u=1)
    {
  $carac="12345678900987654321";
  $randomString='';
  for($i=0; $i<$u; $i++)
  {
      $index=rand(0, strlen($carac)-1);
      $randomString=$carac($index);
  }
  return"KANA".$randomString;
    } */

 //ajouter utilisateur a la base de donnée
 
}
