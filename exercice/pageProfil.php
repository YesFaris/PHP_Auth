<?php
session_start();
if (empty($_SESSION['login'])) {
    header("Location:/pageAccueil.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <div class="container">
 
        <h1>Profil de <?= $_SESSION['login'] ?? "...." ?></h1>
        <header>
            <img src="#" alt="Logo">
            <nav>
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="pageAccueil.php">Déconnexion</a></li>
                </ul>
            </nav>
            <form action=" <?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <fieldset>
                <legend>Identifiez-vous</legend>
                <?php  if(!empty($errorMessage)):?>
                <p>
                    <?= $errorMessage ?>
                </p>
                <?php endif; ?>
                <p>
                    <label for="login">Login: </label>
                    <input type="text" name="login" id="login">
                </p>
                <p>
                    <label for="pwd">Mot de passe :</label>
                    <input type="password" name="pwd" id="pwd">
                </p>
                <p>
                    <button type="submit" name="submit">Se connecter</button>
                </p>
            </fieldset>
        </form>
            <p>Informations de l'utilisateur <?= $_SESSION['login'] ?? "...." ?></p>

        </header>
    </div>
</body>
</html>