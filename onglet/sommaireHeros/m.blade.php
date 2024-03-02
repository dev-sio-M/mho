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
    <li><a href="/heros/mBaku">M'Baku</a></li>
    <li><a href="/heros/modok">M.O.D.O.k</a></li>
    <li><a href="/heros/magik">Magik</a></li>
    <li><a href="/heros/magneto">Magneto</a></li>
    <li><a href="/heros/mantis">Mantis</a></li>
    <li><a href="/heros/mariaHill">Maria Hill</a></li>
    <li><a href="/heros/masterMold">Master Mold</a></li>
    <li><a href="/heros/maximus">Maximus</a></li>
    <li><a href="/heros/medusa">Médusa</a></li>
    <li><a href="/heros/mightyThor">Mighty Thor</a></li>
    <li><a href="/heros/milesMorales">Miles Morales</a></li>
    <li><a href="/heros/misterFantastic">Mister Fantastic</a></li>
    <li><a href="/heros/misterSinister">Mister Sinister</a></li>
    <li><a href="/heros/mistyNight">Misty Night</a></li>
    <li><a href="/heros/mojo">Mojo</a></li>
    <li><a href="/heros/moonGirl">Moon Girl</a></li>
    <li><a href="/heros/moonKnight">Moon Knight</a></li>
    <li><a href="/heros/morbius">Morbius</a></li>
    <li><a href="/heros/morph">Morph</a></li>
    <li><a href="/heros/multiplMan">Multiple Man</a></li>
    <li><a href="/heros/mysterio">Mysterio</a></li>
    <li><a href="/heros/mystique">Mysterio</a></li>
    <li><a href="/heros/mystique">Mystique</a></li><br><br>
  </ul>
</div>
</div>
</body>

</html>
