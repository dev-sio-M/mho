<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Créer un compte</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <script>
        function validatePasswords() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                alert("Les mots de passe ne correspondent pas !");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="lineaire-simple">
        <h1>Créer un compte</h1>
        <div class="imagedefond3">
            <div class="child3">
                <fieldset>
                    <form action="{{ route('register') }}" method="post" onsubmit="return validatePasswords()">
                        @csrf <!-- Ajoutez cette ligne pour la protection CSRF -->
                        <label>Nom :</label><br>
                        <input type="text" name="nom" placeholder="Votre nom" required><br>
                        <label>Prénom :</label><br>
                        <input type="text" name="prenom" placeholder="Votre prénom" required><br>
                        <label>E-mail :</label><br>
                        <input type="email" name="login" placeholder="Adresse e-mail" required><br>
                        <label>Mot de passe :</label><br>
                        <input type="password" name="mdp" id="password" placeholder="Mot de passe" required><br><br>
                        <label>Confirmation de votre mot de passe :</label><br>
                        <input type="password" name="password_confirmation" id="confirmPassword" placeholder="Mot de passe" required><br><br>
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
