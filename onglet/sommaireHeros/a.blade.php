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
    <th><a href="/onglet/sommaire">Sommaire</a></th>
    <th><a href="/onglet/monCompte">Mon compte</a></th> 
    <th><a href="/onglet/mesReseaux">Réseaux sociaux</a></th> 
    <th><a href="/onglet/seConnecter">Se connecter</a></th>
	<th><a href="/onglet/creerCompte">Créer un compte</a></th>
<th><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se déconnecter</a></th>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
  </ul>
</div>
  <script src="{{ asset('js/script2.js') }}"></script>
  <ul>
    <li><a href="/heros/abomination">Abomination</a></li>
    <li><a href="/heros/absorbingMan">Absorbing Man</a></li>
    <li><a href="/heros/adamWarlock">Adam Warlock</a></li>
    <li><a href="/heros/aero">Aero</a></li>
    <li><a href="/heros/agathaHarkness">Agatha Arkness</a></li>
    <li><a href="/heros/agent13">Agent 13</a></li>
    <li><a href="/heros/agentCoulson">Agent Coulson</a></li>
    <li><a href="/heros/americaChavez">America Chavez</a></li>
    <li><a href="/heros/angel">Angel</a></li>
    <li><a href="/heros/angela">Angela</a></li>
    <li><a href="/heros/antMan">Ant Man</a></li>
    <li><a href="/heros/apocalypse">Apocalypse</a></li>
    <li><a href="/heros/armor">Armor</a></li>
    <li><a href="/heros/arnimZola">Arnim Zola</a></li>
    <li><a href="/heros/attuma">Attuma</a></th><br><br>
  </ul>
</div>
</div>
</body>

</html>
