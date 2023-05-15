<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}

?>
<?php
session_start();
require_once('povezi.php');
$con = povezi();
$stmt = $con->prepare('SELECT * FROM registracija WHERE username=:username');
$stmt->bindParam(":username", $_SESSION['username']);

$stmt->execute();
$USER = $stmt->fetch();
$is_mod = (intval($USER["admin"]) == 1 ? true : false);

?>
<html>

<head>
</head>

<body>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tequila Sunrise Concert Tickets</title>
        <link rel="stylesheet" href="css.css?v=<?php echo time(); ?>">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="script.js"></script>


    </head>

    <body>


        <footer>
            <p>Instagram: @tsconcerts <br> All rights reserved.® & Copyright® 2021 <br>Bojana Stajic</p>
        </footer>

        <nav>

            <ul>
                <a href="http://localhost/pocetna.php">
                    <li>
                        <div class="home-icon">


                            <div class="roof">

                                <div class="roof-edge"></div>

                            </div>
                            <div class="front"></div>

                        </div>
                    </li>
                </a>
                <a href="login.php">
                    <li>
                        <div class="about-icon">
                            <div class="head">
                                <div class="eyes"></div>
                                <div class="beard"></div>
                            </div>
                        </div>
                    </li>
                </a>
                <a href="http://localhost/koncert.php">
                    <li>
                        <div class="work-icon">

                            <div class="paper"></div>
                            <div class="lines"></div>
                            <div class="lines"></div>
                            <div class="lines"></div>
                        </div>
                    </li>
                </a>
                <a href="http://localhost/kontakt.php">
                    <li>
                        <div class="mail-icon">
                            <div class="mail-base">
                                <div class="mail-top"></div>
                            </div>
                        </div>
                    </li>
                </a>
            </ul>
        </nav>

        <section>
            <h1>Tequila Sunrise Tickets</h1>
        </section>

        <div>
            <h2>Home Page</h2>
        </div>
        <div>
            <?php

            echo ($is_mod ? '<li><a href="admin.php">Dodaj u bazu(admin opcija) </a></li>' : '');



            ?>
            <?php if (isset($_SESSION['username'])) : ?>
                <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
        </div>

    </body>

    </html>