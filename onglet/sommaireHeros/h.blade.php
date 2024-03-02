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
    <li><a href="/heros/hawkeye">Hawkeye</a></li>
    <li><a href="/heros/hazmat">Hazmat</a></li>
    <li><a href="/heros/heimdall">Heimdall</a></li>
    <li><a href="/heros/hela">Hela</a></li>
    <li><a href="/heros/helicarrier">Helicarrier</a></li>
    <li><a href="/heros/highEvolutionary">High Evolutionary</a></li>
    <li><a href="/heros/hitMonkey">Hit Monkey</a></li>
    <li><a href="/heros/hobgoblin">Hobgoblin</a></li>
    <li><a href="/heros/hood">Hood</a></li>
    <li><a href="/heros/howardTheDuck">Howard The Duck</a></li>
    <li><a href="/heros/hulk">Hulk</a></li>
    <li><a href="/heros/hulkbuster">Hulkbuster</a></li>
    <li><a href="/heros/humanTorch">Human Torch</a></li><br><br>
  </ul>
</div>
</div>
</body>

</html>
