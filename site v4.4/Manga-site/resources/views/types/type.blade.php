<!doctype html>
<html lang="{{ config('app.locale') }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Types</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
   </head>
   @section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Films</p>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <tbody>
                        @foreach($types as $type)
                            <tr>
                                <td>{{ $type->id }}</td>
                                <td><strong>{{ $type->kind }}</strong></td>
                                <td><a class="button is-primary" href="{{ route('type.show', $type->id) }}">Voir</a></td>
                                <td><a class="button is-warning" href="{{ route('type.edit', $type->id) }}">Modifier</a></td>
                                <td>
                                    <form action="{{ route('types.destroy', $type->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</html>
