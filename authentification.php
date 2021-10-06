<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
	<link href="https://bootswatch.com/5/quartz/bootstrap.min.css" rel="stylesheet">
        <title>Top securité</title>
    </head>

    <body>

    <h1>Bienvenu sur le site web de top sécurité.</h1>

<?php
    $nom = $_GET['username']; 
    $pass = $_GET['password'];

    if ($nom=="admin" && password=="password")
       $auth="Bienvenu maître";
    else
      if ($nom=="user" && password=="password")
         $auth="Bienvenu utilisateur";
      else
         if ($nom=="root" && password=="toor")
             $auth="Le login n'est pas si simple !!!!";
         else
             $auth="Mauvais mot de passe.";

    echo $auth;
?>

    </body>
</html>
