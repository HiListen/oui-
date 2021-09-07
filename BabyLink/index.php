<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
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
    <p> Reserve ici ton accés au Babyfoot ! </p>
    <a href="logout.php">Déconnexion</a>
</div>

<div class="calendar">
    <table>
        <caption>RESERVATION</caption>
        <thead>
        <tr>
            <th scope="col">Lundi</th>
            <th scope="col">Mardi</th>
            <th scope="col">Mercredi</th>
            <th scope="col">Jeudi</th>
            <th scope="col">Vendredi</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"> <a href=""> 8h </a> </th>
            <th scope="row"> <a href=""> 8h </a> </th>
            <th scope="row"> <a href=""> 8h </a> </th>
            <th scope="row"> <a href=""> 8h </a> </th>
            <th scope="row"> <a href=""> 8h </a> </th>

        </tr>
        <tr>
            <th scope="row"> <a href=""> 9h </a> </th>
            <th scope="row"> <a href=""> 9h </a> </th>
            <th scope="row"> <a href=""> 9h </a> </th>
            <th scope="row"> <a href=""> 9h </a> </th>
            <th scope="row"> <a href=""> 9h </a> </th>

        </tr>
        <tr>
            <th scope="row"> <a href=""> 10h </a> </th>
            <th scope="row"> <a href=""> 10h </a> </th>
            <th scope="row"> <a href=""> 10h </a> </th>
            <th scope="row"> <a href=""> 10h </a> </th>
            <th scope="row"> <a href=""> 10h </a> </th>
        </tr>
        <tr>
            <th scope="row"> <a href=""> 11h </a> </th>
            <th scope="row"> <a href=""> 11h </a> </th>
            <th scope="row"> <a href=""> 11h </a> </th>
            <th scope="row"> <a href=""> 11h </a> </th>
            <th scope="row"> <a href=""> 11h </a> </th>

        </tr>
        <tr>
            <th scope="row"> <a href=""> 12h </a> </th>
            <th scope="row"> <a href=""> 12h </a> </th>
            <th scope="row"> <a href=""> 12h </a> </th>
            <th scope="row"> <a href=""> 12h </a> </th>
            <th scope="row"> <a href=""> 12h </a> </th>

        </tr>
        <tr>
            <th scope="row"> <a href=""> 13h </a> </th>
            <th scope="row"> <a href=""> 13h </a> </th>
            <th scope="row"> <a href=""> 13h </a> </th>
            <th scope="row"> <a href=""> 13h </a> </th>
            <th scope="row"> <a href=""> 13h </a> </th>

        </tr>
        <tr>
            <th scope="row"> <a href=""> 14h </a> </th>
            <th scope="row"> <a href=""> 14h </a> </th>
            <th scope="row"> <a href=""> 14h </a> </th>
            <th scope="row"> <a href=""> 14h </a> </th>
            <th scope="row"> <a href=""> 14h </a> </th>

        </tr>
        <tr>
            <th scope="row"> <a href=""> 15h </a> </th>
            <th scope="row"> <a href=""> 15h </a> </th>
            <th scope="row"> <a href=""> 15h </a> </th>
            <th scope="row"> <a href=""> 15h </a> </th>
            <th scope="row"> <a href=""> 15h </a> </th>
        </tr>


        </tbody>

    </table>

</div>
</body>
</html>
