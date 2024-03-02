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
	<th><a href="/">Accueil</a></th>
    <th><a href="/onglet/monCompte">Mon compte</a></th> 
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
  <div class="container">
  <ul>
    <li><a href="/onglet/sommaireHeros/a">A</a></li>
    <li><a href="/onglet/sommaireHeros/b">B</a></li>  
    <li><a href="/onglet/sommaireHeros/c">C</a></li>
    <li><a href="/onglet/sommaireHeros/d">D</a></li>
    <li><a href="/onglet/sommaireHeros/e">E</a></li>
    <li><a href="/onglet/sommaireHeros/f">F</a></li>
    <li><a href="/onglet/sommaireHeros/g">G</a></li>
    <li><a href="/onglet/sommaireHeros/h">H</a></li>
    <li><a href="/onglet/sommaireHeros/i">I</a></li>
    <li><a href="/onglet/sommaireHeros/j">J</a></li>
    <li><a href="/onglet/sommaireHeros/k">K</a></li>
    <li><a href="/onglet/sommaireHeros/l">L</a></li>
    <li><a href="/onglet/sommaireHeros/m">M</a></li>
    <li><a href="/onglet/sommaireHeros/n">N</a></li>
    <li><a href="/onglet/sommaireHeros/o">O</a></li>
    <li><a href="/onglet/sommaireHeros/p">P</a></li>
    <li><a href="/onglet/sommaireHeros/q">Q</a></li>
    <li><a href="/onglet/sommaireHeros/r">R</a></li>
    <li><a href="/onglet/sommaireHeros/s">S</a></li>
    <li><a href="/onglet/sommaireHeros/t">T</a></li>
    <li><a href="/onglet/sommaireHeros/u">U</a></li>
    <li><a href="/onglet/sommaireHeros/v">V</a></li>
    <li><a href="/onglet/sommaireHeros/W">W</a></li>
    <li><a href="/onglet/sommaireHeros/x">X</a></li>
    <li><a href="/onglet/sommaireHeros/y">Y</a></li>
    <li><a href="/onglet/sommaireHeros/z">Z</a></li>
  </ul>
 
</div>
</div>
</div>
</body>

</html>
