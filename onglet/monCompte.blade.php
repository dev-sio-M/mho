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
  <label class="toggle-icon" onclick="toggleAdditionalFields()">☰</label>
  <div class="container">
  <ul class="additional-fields">
	<th><a href="/">Accueil</a></th>
    <th><a href="/onglet/sommaire">Sommaire</a></th>
    <th><a href="/onglet/mesReseaux">Réseaux sociaux</a></th> 
    <th><a href="/onglet/seConnecter">Se connecter</a></th>
	<th><a href="/onglet/creerCompte">Créer un compte</a></th>
<th><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Se déconnecter
</a></th>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
  </ul>
</div>
  <script src="{{ asset('js/script2.js') }}"></script>
<div class="child4">
  
<fieldset> 
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <h2>Paramètre</h2> 
   @if(Auth::check())
    <h2>Informations personnelles</h2>
    <p>Nom: {{ Auth::user()->nom }}</p>
    <p>Prénom: {{ Auth::user()->prenom }}</p>
    <p>Login: {{ Auth::user()->login }}</p>
@else
    <a href="{{ route('seConnecter') }}">Se connecter</a>
    <a href="{{ route('creerCompte') }}">Créer un compte</a>
@endif
<form action="{{ route('destroy') }}" method="post">
    @csrf

    @method('DELETE')
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required><br>
    <button type="submit">Supprimer mon compte</button>
</form>

  </fieldset>
</div>
</div>
    </div>
</body>

</html>
