@extends('pages.base')

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
          <td>Code</td>
          <td>Auteur</td>
          <td>Date</td>
          <td>Genre</td>
          <td colspan = 2>Actions</td>
        </tr>

        <div>
        <span>
        <a style="margin: 19px;" href="{{ route('home')}}" class="btn btn-primary">Retour home</a>
        </span>
        </div>
    </thead>
    <tbody>
        @foreach($reservations as $livre)
        <tr>
            <td>{{$livre->id}}</td>
            <td>{{$livre->name}} {{$livre->kind}}</td>
            <td>{{$livre->code}}</td>
            <td>{{$livre->author}}</td>
            <td>{{$livre->dated}}</td>
            <td>
                <a href="{{ route('reservations.edit',$livre->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('reservations.destroy', $livre->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
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
