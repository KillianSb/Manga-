@extends('layouts.app')
@extends('pages.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <span>
                <div style="margin: 19px;" class="card-header">Connecter !</div>
                </span>

                <div class="card-body">
                    @if (session('status'))
                        <div style="margin: 25px;" class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Styles -->
<style>
div {
    font-family: 'Jim Nightshade', cursive;
    top: 5px;

}

span div {
    color: #5DC808;
    font-family: 'Jim Nightshade', cursive;
    top: 5px;

}
</style>
