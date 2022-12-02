<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postscontroller extends Controller
{
        //controle du formulaire

        public function connexion(Request $request){
            $email=$request->get('email');
            $password=$request->get('password');
            $validation=$request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
            
            ]);
                 
                  return $validation;
                }


   public function _construct()
   {
   $this-> middleware( middleware:'auth');
   }
   public function index(){
      return view('inscription');
   }
}
