@extends('layout.master')

@section('content')
<div class="title m-b-md">
    <ul>
        @foreach ($personnages as $personnage)
            <li>
                <a href="{{ route('taches.show', $tache->id) }}"> {{ $personnage->nom }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
