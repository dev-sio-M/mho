<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Se connecter</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</head>
<body>
    <div class="lineaire-simple">
        <h1>Se connecter</h1>
        <div class="imagedefond1">
  <label class="toggle-icon" onclick="toggleAdditionalFields()">☰</label>
  <div class="container">
  <ul class="additional-fields">
	<th><a href="/">Accueil</a></th>
    <th><a href="/onglet/sommaire">Sommaire</a></th>
    <th><a href="/onglet/monCompte">Mon compte</a></th> 
    <th><a href="/onglet/mesReseaux">Réseaux sociaux</a></th> 
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
			
            <div class="child1">
                <fieldset>
					   <fieldset> 
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf 
                        <label>Login :</label><br>
                        <input type="text" name="login" placeholder="Login" required="required" autocomplete="off"><br>
                        
                        <br><label>Mot de passe :</label><br>
                        <input type="password" name="mdp" id="password" placeholder="Mot de passe" required="required"><br>
                        <input type="checkbox" onclick="togglePassword()"> Afficher le mot de passe<br><br>
    
                        <ul>
                            <button type="submit"> Valider </button>    
                            <input type="reset" value="Annuler" /><br><br>
                        </ul>
                    </form>
                </fieldset>
            </div>
        </div> 
    </div>
</body>
</html>
