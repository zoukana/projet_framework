<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnecxionController extends Controller
{
   public function formulaire(){
    return view('connexion');
   }
   public function traitement(){
    return'traitement formulaire connecxion';
   }
}
