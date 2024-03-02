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
    <li><a href="/heros/cable">Cable</a></li>
    <li><a href="/heros/captainAmerica">Captain America</a></li>
    <li><a href="/heros/capatinMarvel">Captain Marvel</a></li>
    <li><a href="/heros/carnage">Carnage</a></li>
    <li><a href="/heros/cerebro">Cerebro</a></li>
    <li><a href="/heros/cloak">Cloak</a></li>
    <li><a href="/heros/coleenWing">Coleen Wing</a></li>
    <li><a href="/heros/collector">Collector</a></li>
    <li><a href="/heros/colosus">Colosus</a></li>
    <li><a href="/heros/cosmo">Cosmo</a></li>
    <li><a href="/heros/crossbones">Crossbones</a></li>
    <li><a href="/heros/crystal">Crystal</a></li>
    <li><a href="/heros/cyclops">Cyclops</a></th><br><br>
  </ul>
</div>
</div>
</body>

</html>
