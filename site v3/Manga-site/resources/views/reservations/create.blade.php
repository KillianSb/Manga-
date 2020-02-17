@extends('pages.base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Réserver</h1>
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
      <form method="post" action="{{ route('livres.store') }}">
          @csrf
          <div class="form-group">
              <label for="name">Nom:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="code">Code:</label>
              <input type="number" class="form-control" name="code"/>
          </div>

          <div class="form-group">
              <label for="author">Auteur</label>
              <input type="text" class="form-control" name="author"/>
          </div>
          <div class="form-group">
              <label for="dated">Date:</label>
              <input type="date" class="form-control" name="dated"/>
          </div>
          <div class="form-group">
              <label for="kind">Genre:</label>
              <input type="text" class="form-control" name="kind"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Ajout du livre</button>
      </form>
  </div>
</div>
</div>
@endsection
