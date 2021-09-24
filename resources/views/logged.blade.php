<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logged</title>
</head>
<body>
    <h1>Vous êtes connectés</h1>
    <p><a href="{{ route('home') }}">Retour Accueil</a></p>
    <p><a href="{{ route('azure.logout') }}">Se déconnecter</a></p>
    {{ dd($user) }}
</body>
</html>