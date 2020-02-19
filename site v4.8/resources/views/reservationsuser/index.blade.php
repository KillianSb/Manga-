@extends('pages.base')
@include('cookieConsent::index')

@section('main')
<link rel="stylesheet" type="text/css" href="style.css">
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">reservations</h1>
    <nspan>
    <a style="margin: 19px;" href="{{ route('reservations.create')}}" class="btn btn-primary">Nouvelle reservation</a>
    </nspan>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Auteur</td>
          <td>Genre</td>
          <td>Disponibilité</td>
          <td>Date</td>
          <td>Nom</td>
        </tr>

        <div>
        <span>
        <a href="{{ route('home')}}" class="btn btn-primary">Retour à l'accueil</a>
        </span>
        </div>
    </thead>
    <tbody>
        @foreach($reservationsuser as $reservationuser)
        <tr>
            <td>{{$reservationuser->id}}</td>
            <td>{{$reservationuser->name}}</td>
            <td>{{$reservationuser->author}}</td>
            <td>{{$reservationuser->kind}}</td>
            <td>{{$reservationuser->availability}}</td>
            <td>{{$reservationuser->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>
@endsection
