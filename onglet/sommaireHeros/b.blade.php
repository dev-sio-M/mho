<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Sommaire</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="lineaire-simple"> 

  <h1>Sommaire</h1>
      <div class="imagedefond7">
		    <label class="toggle-icon" onclick="toggleAdditionalFields()">☰</label>
  <div class="container">
  <ul class="additional-fields">
	<li><a href="/">Accueil</a></li>
    <li><a href="/onglet/sommaire">Sommaire</a></li>
    <li><a href="/onglet/monCompte">Mon compte</a></li> 
    <li><a href="/onglet/mesReseaux">Réseaux sociaux</a></li> 
    <li><a href="/onglet/seConnecter">Se connecter</a></li>
	<li><a href="/onglet/creerCompte">Créer un compte</a></li>
<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Se déconnecter
</a></li>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
  </ul>
</div>
  <script src="{{ asset('js/script2.js') }}"></script>
  <ul>
    <li><a href="/heros/baronMordo">Baron Mordo</a></li>
    <li><a href="/heros/bast">Bast</a></li>
    <li><a href="/heros/beast">Beast</a></li>
    <li><a href="/heros/bishop">Bishop</a></li>
    <li><a href="/heros/blackBolt">Black Bolt</a></li>
    <li><a href="/heros/blackCat">Black Cat</a></th>
    <li><a href="/heros/blackPanther">Black Panther</a></li>
    <li><a href="/heros/blackWidow">Black Widow</a></li>
    <li><a href="/heros/blade">Blade</a></li>
    <li><a href="/heros/blueMarvel">Blue Marvel</a></li>
    <li><a href="/heros/brood">Brood</a></li>
    <li><a href="/heros/buckyBarnes">Bucky Barnes</a></th><br><br>
  </ul>
</div>
</div>
</body>

</html>
