<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Créer un compte</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <script>
       function togglePassword(id) {
            var passwordField = document.getElementById(id);
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
        <h1>Créer un compte</h1>
        <div class="imagedefond3">
            <label class="toggle-icon" onclick="toggleAdditionalFields()">☰</label>
            <div class="container">
                <ul class="additional-fields">
                    <th><a href="/">Accueil</a></th>
                    <th><a href="/onglet/sommaire">Sommaire</a></th>
                    <th><a href="/onglet/monCompte">Mon compte</a></th> 
                    <th><a href="/onglet/mesReseaux">Réseaux sociaux</a></th> 
                    <th><a href="/onglet/seConnecter">Se connecter</a></th>
                    <th><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Se déconnecter
                    </a></th>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
            <script src="{{ asset('js/script2.js') }}"></script>
            <div class="child3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <fieldset>
                    <form action="{{ route('register') }}" method="post">
                        @csrf 
                        <label>Nom :</label><br>
                        <input type="text" name="nom" placeholder="Votre nom" autocomplete="off" required><br>
                        <label>Prénom :</label><br>
                        <input type="text" name="prenom" placeholder="Votre prénom" autocomplete="off" required><br>
                        <label>Login :</label><br>
                        <input type="text" name="login" placeholder="login" autocomplete="off" required><br>
                        <label>Mot de passe :</label><br>
                        <input type="password" name="mdp" id="password" placeholder="Mot de passe" required><br>
                        <input type="checkbox" onclick="togglePassword('password')"> Afficher le mot de passe
                        <ul>
                            <button type="submit"> Valider </button>
                            <input type="reset" value="Annuler" />
                            <input type="button" value="Retour" onclick="history.back()">
                        </ul>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>
