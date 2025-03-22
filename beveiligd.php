<?php
session_start();
if (!isset($_SESSION["toegang"]) || $_SESSION["toegang"] !== true) {
    die("Geen toegang! <a href='index.html'>Ga terug</a>.");
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geheime Pagina</title>
</head>
<body>
    <h1>Welkom op de geheime pagina!</h1>
    <p>Je hebt het juiste wachtwoord ingevuld.</p>
</body>
</html>
