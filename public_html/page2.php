<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suite...</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <h1>
        <?php
            echo "Bonjour " . $_SESSION['login'];
        ?>
    </h1>

    <div>
        <p>
            <?php
                echo "Vous êtes sur une page privée";

                include_once './includes/deconnexion.php';

                // if (isset($_POST['deconnexion'])) {
                //     //retour à l'index
                //     header('Location: ./index.php');
                // }
            ?>
        </p>
    </div>

</body>
</html>