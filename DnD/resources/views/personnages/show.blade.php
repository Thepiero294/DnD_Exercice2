@extends('layout.master')

@section('content')
    <div class="container">
        <h1 class="titre">Personnages</h1>
        <p class="nomPerso">{{ $personnage->nom }}</p>
        <div class="row">
            <div class="col-sm-4 nomPerso">
                {{ __('layout.forcePerso') }}
                {{ $personnage->force }}
            </div>
            <div class="col-sm-4 nomPerso">
                {{ __('layout.dexteritePerso') }}
                {{ $personnage->dexterite }}
            </div>
            <div class="col-sm-4 nomPerso">
                {{ __('layout.constitutionPerso') }}
                {{ $personnage->constitution }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 nomPerso">
                {{ __('layout.intelligencePerso') }}
                {{ $personnage->intelligence }}
            </div>
            <div class="col-sm-4 nomPerso">
                {{ __('layout.sagessePerso') }}
                {{ $personnage->sagesse }}
            </div>
            <div class="col-sm-4 nomPerso">
                {{ __('layout.charismePerso') }}
                {{ $personnage->charisme }}
            </div>
        </div>

        <br>

        <h2 class="titre">{{ __('layout.titreEquipement') }}</h2>
        <form action="{{ route('personnages.update', $personnage) }}" method="POST">
            {{ csrf_field() }}

            @include('layout.errors')

            <div class="form-group">
                <label class="titre" for="nomEquipement">{{ __('layout.nomEquipement') }}</label>
                <input type="text" name="nomEquipement" class="form-control" value="{{ old('nomEquipement') }}" placeholder="Nom de l'équipement">
            </div>
            <button type="submit" class="btn btn-primary">{{ __('layout.bouttonSave') }}</button>
        </form>
    </div>
@endsection
