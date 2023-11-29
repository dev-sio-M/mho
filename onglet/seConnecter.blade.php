<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Se connecter</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="lineaire-simple">
        <h1>Se connecter</h1>
        <div class="imagedefond1">
            <div class="child1">
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

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf <!-- Ajoutez cette ligne pour la protection CSRF -->
                        <label>Login :</label><br>
                        <input type="text" name="login" placeholder="Login" required="required"><br>
                        
                        <br><label>Mot de passe :</label><br>
                        <input type="password" name="mdp" placeholder="Mot de passe" required="required"><br><br>
    
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
