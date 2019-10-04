@extends('layout.master')

@section('content')
  <div class="container">
      <h1 class="titre">{{ __('layout.titrePerso') }}</h1>
        <form action="{{ route('personnages.store') }}" method="POST">
          {{ csrf_field() }}

          @include('layout.errors')

          <div class="form-group">
            <label for="nomPerso">{{ __('layout.nomPerso') }}</label>
            <input type="text" name="nomPerso" class="form-control" value="{{ old('nomPerso') }}" placeholder="Nom du personnage">
          </div>
          <div class="form-row">
            <div class="form-group col-sm-4">
              <label for="forcePerso">{{ __('layout.forcePerso') }}</label>
              <input type="text" name="forcePerso" class="form-control" value="{{ old('forcePerso') }}"   placeholder="Force">
            </div>
            <div class="form-group col-sm-4">
              <label for="dexteritePerso">{{ __('layout.dexteritePerso') }}</label>
              <input type="text" name="dexteritePerso" class="form-control" value="{{ old('dexteritePerso') }}"  placeholder="Dextérité">
            </div>
            <div class="form-group col-sm-4">
              <label for="constitutionPerso">{{ __('layout.constitutionPerso') }}</label>
              <input type="text" name="constitutionPerso" class="form-control" value="{{ old('constitutionPerso') }}"  placeholder="Constitution">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="intelligencePerso">{{ __('layout.intelligencePerso') }}</label>
              <input type="text" name="intelligencePerso" class="form-control" value="{{ old('intelligencePerso') }}"  placeholder="Intelligence">
            </div>
            <div class="form-group col-md-4">
              <label for="sagessePerso">{{ __('layout.sagessePerso') }}</label>
              <input type="text" name="sagessePerso" class="form-control" value="{{ old('sagessePerso') }}"  placeholder="Sagesse">
            </div>
            <div class="form-group col-md-4">
                <label for="charismePerso">{{ __('layout.charismePerso') }}</label>
                <input type="text" name="charismePerso" class="form-control" value="{{ old('charismePerso') }}"   placeholder="Charisme">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">{{ __('layout.bouttonSave') }}</button>
        </form>
  </div>
@endsection
