<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Bienvenue</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
  
  <div class="lineaire-simple"> 
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
  <div class="imagedefond5">
  </div>
         <form action="/" method=" get">
              <button type="submit">Continuer</button>
         </form>
    </div>
</body>

</html>
