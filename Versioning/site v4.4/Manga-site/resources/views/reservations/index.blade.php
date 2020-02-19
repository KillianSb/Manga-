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
        @foreach($reservations as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->name}}</td>
            <td>{{$reservation->author}}</td>
            <td>{{$reservation->kind}}</td>
            <td>{{$reservation->availability}}</td>
            <td>{{$reservation->created_at}}</td>
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
