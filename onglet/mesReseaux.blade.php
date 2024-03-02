<!DOCTYPE html>
<html>

<head>

    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Nos réseaux</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head

  <body>


    <div class="lineaire-simple"> 
<h1>Mes réseaux</h1>

  <div class="imagedefond6">     
  <label class="toggle-icon" onclick="toggleAdditionalFields()">☰</label>
  <div class="container">
  <ul class="additional-fields">	
	<th><a href="/">Accueil</a></th>
    <th><a href="/onglet/sommaire">Sommaire</a></th>
    <th><a href="/onglet/monCompte">Mon compte</a></th> 
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
  <div class="centrerBoutonReseaux">

<div id="widget ">
  <div class="btn-o bg" data-scribe="component:button" style="width: 100%;"><a href="https://www.instagram.com/math.is93000?igshid=ZDc4ODBmNjlmNQ==/" class="btn" id="b"><i class="fa fa-instagram ft14"></i> 
  </div>
  
</div>
  </div>
</div>
</body>
</html>
