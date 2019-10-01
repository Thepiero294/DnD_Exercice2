<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="/css/app.css" rel="stylesheet">

        <title>Laravel</title>

    </head>
    <body>
    <div class="container">
    @include('layout.header')
            <h1>Création d'un personnage</h1>

            <form>
 
  <div class="form-group">
    <label for="inputAddress">Nom</label>
    <input type="text" class="form-control" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="inputEmail4">Force</label>
      <input type="email" class="form-control"  placeholder="Email">
    </div>
    <div class="form-group col-sm-4">
      <label for="inputPassword4">Dextérité</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group col-sm-4">
      <label for="inputPassword4">Constitution</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group col-md-4">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
    </div>
    </body>
</html>