<?php
session_start();
$correctWachtwoord = "ff"; // Kies hier je wachtwoord

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["password"] === $correctWachtwoord) {
        $_SESSION["toegang"] = true;
        header("Location: beveiligd.php");
        exit();
    } else {
        echo "Fout wachtwoord! <a href='index.html'>Probeer opnieuw</a>.";
    }
} else {
    echo "Geen toegang!";
}
?>
