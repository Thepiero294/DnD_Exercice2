@extends('layout.master')

@section('content')
  <div class="container">
      <h1 class="titre">Création d'un personnage</h1>

        <form action="{{ route('personnages.store') }}" method="post">
          {{ csrf_field() }}

          @include('layout.errors')
          <div class="form-group">
            <label for="inputNom">Nom</label>
            <input type="text" name="nomPersonnage" class="form-control" placeholder="Nom du personnage">
          </div>
          <div class="form-row">
            <div class="form-group col-sm-4">
              <label for="inputForce">Force</label>
              <input type="text" name="forcePersonnage" class="form-control"  placeholder="Force">
            </div>
            <div class="form-group col-sm-4">
              <label for="inputDexterite">Dextérité</label>
              <input type="text" name="dexteritePersonnage" class="form-control"placeholder="Dextérité">
            </div>
            <div class="form-group col-sm-4">
              <label for="inputConstitution">Constitution</label>
              <input type="text" name="constitutionPersonnage" class="form-control" placeholder="Constitution">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputIntelligence">Intelligence</label>
              <input type="text" name="intelligencePersonnage" class="form-control" placeholder="Intelligence">
            </div>
            <div class="form-group col-md-4">
              <label for="inputSagesse">Sagesse</label>
              <input type="text" name="sagessePersonnage" class="form-control" placeholder="Sagesse">
            </div>
            <div class="form-group col-md-4">
                <label for="inputCharisme">Charisme</label>
                <input type="text" name="charismePersonnage" class="form-control"  placeholder="Charisme">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
  </div>
@endsection
