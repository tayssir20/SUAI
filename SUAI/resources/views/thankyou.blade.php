<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau formulaire soumis</title>
</head>
<body>
    <h1>Nouveau formulaire soumis</h1>
    <p>Voici les détails du formulaire :</p>

    <ul>
        <li><strong>Type de client :</strong> {{ $formData['typeClient'] }}</li>
        <li><strong>Email :</strong> {{ $formData['email'] }}</li>
        <li><strong>Nom :</strong> {{ $formData['nom'] }}</li>
        <li><strong>Prénom :</strong> {{ $formData['prenom'] }}</li>
        <li><strong>Adresse :</strong> {{ $formData['adresse'] }}</li>
        <li><strong>Services :</strong>{{$formData['services']}}</li>
    </ul>
</body>
</html>
