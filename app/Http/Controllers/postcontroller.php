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


    public function index()
    {
        $user = new assane();
        $user = assane::all();
        return view("tableau",['users'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\assane  $user
     * @return \Illuminate\Http\Response
     */
    public function show(assane $assane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(assane $assane)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, assane $assane)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(assane $assane)
    {
        //
    }

}
