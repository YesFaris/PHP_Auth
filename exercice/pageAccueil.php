<?php 

define("LOGIN", "john");
define('PASSWORD', "motdepasse123");
$errorMessage = " ";
if (!empty($_POST)) {
   if (!empty($_POST["login"]) && !empty ($_POST["pwd"])) {

   }
   if ($_POST["login"] !== LOGIN) {
        $errorMessage = "Nom d'utilisateur incorrect !";

   }elseif ($_POST['pwd'] !== PASSWORD){

   }else {
        session_start();
        $_SESSION["login"] = LOGIN;
        header("Location:/pageProfil.php");
        exit();
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h1>Page d'Accueil </h1>
        <header>
            <img src="#" alt="Logo">
            <nav>
                <ul>
                    <li><a href="pageAccueil.php">Accueil</a></li>
                    <li><a href="pageProfil.php">Connexion</a></li>
                </ul>
            </nav>
            <p>Bienvenu sur votre profil  <?= $_SESSION['login'] ?? "..." ?></p>
        </header>
    </div>
</body>
</html>