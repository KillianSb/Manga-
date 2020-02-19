<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
</head>

<body class="create_contact_page">
@extends('pages.base')

@section('main')
<!-- Header -->
  <header class="header_auth">
    <a href="{{ route('home')}}" class="header_auth">MANGA++</a>
    <a href="{{ route('home')}}" class="return">Retour à l'accueil</a>
  </header>
  <!-- End Header -->
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Ajouter un contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name" class="first_name">Nom:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name" class="last_name">Prenom:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="email" class="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="city" class="city">Ville:</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="country" class="country">Pays:</label>
              <input type="text" class="form-control" name="country"/>
          </div>
          <div class="form-group">
              <label for="job_title" class="job_title">Travail:</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>
          <button type="submit" class="add_contact">Ajout d'un contact</button>
      </form>
  </div>
</div>
</div>
@endsection
</body>
</html>