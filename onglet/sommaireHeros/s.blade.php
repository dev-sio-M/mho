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
    <li><a href="/heros/sabretooth">Sabretooh</a></li>
    <li><a href="/heros/sandman">Sandman</a></li>
    <li><a href="/heros/sauron">Sauron</a></li>
    <li><a href="/heros/scarletWitch">Scarlet wtich</a></li>
    <li><a href="/heros/scorpion">Scorpion</a></li>
    <li><a href="/heros/sentinel">Sentinel</a></li>
    <li><a href="/heros/sentry">Sentry</a></li>
    <li><a href="/heros/sera">Sera</a></li>
    <li><a href="/heros/shadowKing">Shadow King</a></li>
    <li><a href="/heros/shangChi">Shang-Chi</a></li>
    <li><a href="/heros/shanna">Shanna</a></li>
    <li><a href="/heros/sheHulk">She-Hulk</a></li>
    <li><a href="/heros/shocker">Shocker</a></li>
    <li><a href="/heros/shuri">Shuri</a></li>
    <li><a href="/heros/silk">Silk</a></li>
    <li><a href="/heros/silverSurfer">Silver Surfer</a></li>
    <li><a href="/heros/snowguard">Snowguard</a></li>
    <li><a href="/heros/spectrum">Spectrum</a></li>
    <li><a href="/heros/spiderMan">Spider-Man</a></li>
    <li><a href="/heros/spiderWoman">Spider-Woman</a></li>
    <li><a href="/heros/squirrelGirl">Squirrel Girl</a></li>
    <li><a href="/heros/starLord">Star-Lord</a></li>
    <li><a href="/heros/stature">Stature</a></li>
    <li><a href="/heros/stegron">Stregron</a></li>
    <li><a href="/heros/storm">Storm</a></li>
    <li><a href="/heros/strongGuy">Strong Guy</a></li>
    <li><a href="/heros/sunspot">Sunspot</a></li>
    <li><a href="/heros/superSkrull">Super-Skrull</a></li>
    <li><a href="/heros/swarm">Swarm</a></li>
    <li><a href="/heros/swordMaster">Sword Master</a></li><br><br>
  </ul>
</div>
</div>
</body>

</html>
