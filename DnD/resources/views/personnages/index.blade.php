<!-- Fichier d'une page d'index

@author Pier-Olivier Fontaine et Marc-Antoine Fournier
-->
@extends('layout.master')

@section('content')
        <title>Laravel</title>
    <div class="container">
        <h1 class="titre">Personnages</h1>
        <ul>
            @foreach ($personnages as $personnage)
                <li>
                    <a class="nomPerso" href="{{ route('personnages.show', $personnage->id) }}}">
                        {{ $personnage->nom }}
                        ( {{ $personnage->created_at->toFormattedDateString() }} )  </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
