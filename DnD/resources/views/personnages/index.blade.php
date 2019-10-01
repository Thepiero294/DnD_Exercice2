@extends('layout.master')

@section('content')
        <title>Laravel</title>
    <div class="container">
        <h1>Personnages</h1>
        <ul>
            @foreach ($personnages as $personnage) 
                <li>
                    <a href="{{ route('personnages.show', $personnages->id) }}}"> {{ $personnage->nom }} </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
