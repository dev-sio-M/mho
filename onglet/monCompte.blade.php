<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Mon compte</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
  
    <div class="lineaire-simple"> 

  <h1>Mon compte</h1>

<div class="imagedefond4">

<div class="child3">
  
<fieldset> 

  <h2>Paramètre</h2> 
   @if(Auth::check())
    <h2>Informations personnelles</h2>
    <p>Nom: {{ Auth::user()->nom }}</p>
    <p>Prénom: {{ Auth::user()->prenom }}</p>
    <p>Email: {{ Auth::user()->login }}</p>
@else
    <a href="{{ route('seConnecter') }}">Se connecter</a>
    <a href="{{ route('creerCompte') }}">Créer un compte</a>
@endif

  </fieldset>
</div>
</div>
    </div>
</body>

</html>
