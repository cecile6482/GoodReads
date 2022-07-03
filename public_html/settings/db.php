<?php 

try {
    // -----------------Connexion à la base de données et récupération et traitement du formulaire-----------------
    $host = 'database';
    $dbname = 'goodreads';
    $user = 'user';
    $mdp = 'mdp';
    
    // $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $mdp);
    // echo "<p>Connexion à la base de données réussie</p>";
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.'', $user, $mdp);
    
} catch (Exception $error) {
    $error->getMessage();
}

?>