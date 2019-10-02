@extends('layout.master')

@section('content')
    <div class="container">
        <h1>Personnages</h1>
                <br>
                {{$personnage->nom}}
    </div>
@endsection