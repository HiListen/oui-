<?php
// Initialiser la session
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
$username = $_SESSION["username"];
if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <a href="logout.php">Déconnexion</a>
    <p> Bien joué ! Ton Babyfoot est maintenant réservé !  </p>
</div>


<?php
require('config.php');
$query = "INSERT into `reservation` (username, date, time)
VALUES ('$username', 'Lundi', '15')";
// Exécuter la requête sur la base de données
$res = mysqli_query($conn, $query);

?>
