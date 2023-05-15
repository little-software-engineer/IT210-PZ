<?php
require_once('povezi.php');
$con = povezi();
$username = $_POST["username"];
$password = $_POST["password"];
$password = md5($password);
$tip_korisnika = $_POST["tip_korisnika"];

if (isset($_POST['username']) && isset($_POST['password'])) {
    $stmt = $con->prepare("SELECT * FROM registracija WHERE username=:username AND password=:password ");
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);

    $stmt->execute();

    $row = $stmt->fetch();
    if ($row) {
        session_start();
        $_SESSION["username"] = $row["username"];
        $_SESSION["email"] = $row["email"];

        header('Location: index.php');
    } else {
        header('Location: login.php');
    }
}
