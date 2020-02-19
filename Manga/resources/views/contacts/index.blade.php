<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!-- custom -->
  <link rel="stylesheet" href="css/templatemo-style.css">
  <!-- Google font -->
  <link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Chewy' rel='stylesheet' type='text/css'>
</head>

<body class="contact_page">
@extends('pages.base')

@section('main')
  <!-- Header -->
  <header class="header_auth">
    <a href="{{ route('home')}}" class="header_auth">MANGA++</a>
    <a href="{{ route('admin')}}" class="return">Retour à l'accueil</a>
  </header>
  <!-- End Header -->
  <div class="row">
    <div class="col-sm-12">
      <h1 class="display-3">Contacts</h1>
        <nspan>
          <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="contact_newContact">Nouveau contact</a>
        </nspan>
      <table class="contact_table">
        <thead>
          <tr>
            <td class="contact_id">ID</td>
            <td class="contact_name">Nom</td>
            <td class="contact_email">Email</td>
            <td class="contact_user_job">Travail</td>
            <td class="contact_user_city">Ville</td>
            <td class="contact_user_country">Pays</td>
            <td colspan = 2 class="contact_actions_title">Actions</td>
          </tr>
        </thead>
      <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->first_name}} {{$contact->last_name}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->job_title}}</td>
            <td>{{$contact->city}}</td>
            <td>{{$contact->country}}</td>
            <td class="contact_actions">
                <a href="{{ route('contacts.edit',$contact->id)}}" class="contact_edit">Modifier</a>
            </td>
            <td class="contact_actions">
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="contact_remove" type="submit">Supprimer</button>
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
</div>
</div>
<!-- Start footer -->
    <footer class="contact_page_footer">
        <div class="contact_footer_container">
            <p>Copyright &copy; 2020 Manga++</p>
            <a href="{{ route('legal') }}" class="legal_notice">Mentions légales</a>
        </div>
    </footer>
<!-- End footer -->
</body>
</html>