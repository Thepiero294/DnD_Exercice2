@extends('layout.master')

@section('content')
    <div class="container">
        <h1 class="titre">Personnages</h1>
        <br>
        {{ $personnage->nom }}
    </div>
@endsection
