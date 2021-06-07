<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="habillage/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="index.php"> 
    <label for="name"> Nom : </label>
    <input type="texte" id="name" name="name"/>


    <label for="email"> Email : </label>
        <input type="email" id="email" name="email"/>


    <label for="mdp"> Mot de passe : </label>
    <input type="password" id="mdp" name="mdp"/>


    <label for="cmdp"> confirmation du mot de passe : </label>
    <input type="password" id="cmdp" name="cmdp"/>

    <input type="submit" id="submit" value="inscription">
    </form>
</body>
</html>