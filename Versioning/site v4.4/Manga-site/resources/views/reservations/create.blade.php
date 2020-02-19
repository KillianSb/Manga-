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
    <form method="post" action="{{ route('reservations.store') }}">
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
                <select size="2" multiple="multiple" name="kind">
                    <option value="not-available">Manga</option>
                    <option value="free">BD</option>
                    <input type="text" class="form-control" name="kind"/>
                </select>
          </div>
          <div class="form-group">
              <label for="availability">Disponibilité:</label>
                <select size="2" multiple="multiple" name="availability">
                    <option value="not-available">Non disponible</option>
                    <option value="free">Disponible</option>
                    <input type="text" class="form-control" name="availability"/>
                </select>
          </div>
          <button type="submit" class="btn btn-primary-outline">Ajout de la réservations</button>
      </form>
  </div>
</div>
</div>
@endsection
