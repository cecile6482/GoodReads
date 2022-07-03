<?php
  session_start()
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoodReads</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
    include_once './settings/db.php';

    // $sqlConnect = "SELECT * FROM User WHERE id = 3";
    // $result = $pdo->query($sqlConnect);
    // $user = $result->fetch();


    // echo "je suis " . $user['login'];


    if (isset($_POST['connexion'])) {
        // traitement du formulaire
        // echo "vous avez saisie le login : " . $_POST['login'] . " et le mot de passe : " . $_POST['pass'];

        // vérification de l'existence du login et du mot de passe dans la base de données
        $sql = 'SELECT * FROM `User` 
        WHERE `login` = "' . $_POST["login"] . '"
        AND `pass` = "'. $_POST["pass"] .'";'; 
        
        $result = $pdo->query($sql);
        
        if ($result->rowCount() > 0) {
            // si le login et le mot de passe existent dans la base de données
            echo "<p>Vous avez le bon login et le bon mot de passe</p>";
            $_SESSION['Connexion'] = true;
        } else {
            // si le login et le mot de passe ne sont pas dans la base de données
            // on affiche un message d'erreur
            echo "<p>Le login " . $_POST['login'] . " et/ou le mot de passe " . $_POST['pass']. " ne sont pas bons</p>";
        }

    // } else {
    //     echo "Veuillez vous identifier";
    };


    if (isset($_POST['deconnexion'])) {
        echo "Vous êtes déconnecté";

        session_unset();
        session_destroy();
    }



    if (isset($_SESSION['Connexion'])) {
        echo "<p>Vous êtes déjà connecté</p>";
        // lien vers la page privée
        echo "<a href='./page2.php'>Page privée</a>";
        echo "<br><br>";
        
        // bouton deconnexion
        include_once './includes/deconnexion.php';

    } else {
        echo "<p>Veuillez vous identifier</p>";
        include_once './includes/form.php';
    }

    


?>
<script src="./js/script.js"></script>
</body>
</html>