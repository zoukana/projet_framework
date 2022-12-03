<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<body>

@extends('layouts.commun')
@section('content')
    <div class="container " style="border: 1px solid black; display:flex;justify-content:center;margin-top:200px; border-radius:10px;background-color:#D9D9D9">
    <form action="/connexion" methode="POST" class="container" >
        @csrf
        <div>
            <h2 class="d-flex justify-content-center mt-5">FORMULAIRE DE CONNECTION</h2>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">EMAIL</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="email">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword" class="form-label">PASSWORD</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" id="password" placeholder="password">
            @error('password')
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-4">

            <input type="submit" name="submit" class="btn btn-primary ">
            <a href="/post"><span style="margin-left: 30px;color:black">s'inscrire?</span></a>
        </div>
    </form>

</div>
@endsection
