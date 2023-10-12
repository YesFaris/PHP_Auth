<?php
define("LOGIN", "toto");
define('PASSWORD', "nicolas");
$errorMessage = " ";
if (!empty($_POST)) {
   if (!empty($_POST["login"]) && !empty ($_POST["pwd"])) {

   }
   if ($_POST["login"] !== LOGIN) {
        $errorMessage = "Mauvais login !";

   }else if ($_POST['pwd'] !== PASSWORD){

   }else {
        session_start();
        $_SESSION["login"] = LOGIN;
        header("Location:/admin.php");
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
    <title>Formulaire d'authenfication</title>
</head>
<body>
    <div class="container">
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
                    <button type="submit" name="submit">S'authentifier</button>
                </p>
            </fieldset>
        </form>
    </div>
</body>
</html>
