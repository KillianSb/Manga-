@extends('pages.base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Mis a jour du livre</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('livres.update', $livre->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="name">Nom:</label>
                <input type="text" class="form-control" name="name" value={{ $livre->name }} />
            </div>

            <div class="form-group">
                <label for="code">Code:</label>
                <input type="number" class="form-control" name="code" value={{ $livre->code }} />
            </div>

            <div class="form-group">
                <label for="author">Auteur:</label>
                <input type="text" class="form-control" name="author" value={{ $livre->author }} />
            </div>
            <div class="form-group">
                <label for="dated">Date:</label>
                <input type="date" class="form-control" name="dated" value={{ $livre->dated }} />
            </div>
            <div class="form-group">
                <label for="kind">Genre:</label>
                <input type="text" class="form-control" name="kind" value={{ $livre->kind }} />
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
</div>
@endsection
