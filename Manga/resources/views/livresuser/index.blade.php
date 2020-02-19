<!DOCTYPE html>
<html>
<head>
    <!-- custom -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!-- Google font -->
    <link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
</head>

<body class="book_page">
@extends('pages.base')

@section('main')
<link rel="stylesheet" type="text/css" href="style.css">
<div class="row">
  <div class="col-sm-12">
    <!-- Header -->
    <header class="header_auth">
        <a href="{{ route('home')}}" class="header_auth">MANGA++</a>
        <a href="{{ route('home')}}" class="return">Retour à l'accueil</a>
    </header>
    <!-- End Header -->
    <h1 class="display-3">Livres</h1>

    <div class="book_container">
    @foreach($livresuser as $livreuser)
    <div class="book">
      <div class="book_image">
        <img src="../public/images/{{$livreuser->name}}_n1.jpg" alt="Book image">
      </div>
      <h2>{{$livreuser->name}}</h2>
      <h3>Genre: {{$livreuser->kind}}</h3>
      <h3>Auteur: {{$livreuser->author}}</h3>
      <h4>Date d'édition: {{$livreuser->dated}}</h4>
      <a href="{{ route('reservationsuser.index',$livreuser->name)}}" class="btn btn-primary">Réserver</a>
    </div>
    @endforeach
    </div>
  <div>
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
  </div>
@endsection
</div>
</div>
</body>
</html>
