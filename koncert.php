<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koncert</title>
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
            <a href="pocetna.php">
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
            <a href="koncert.php">
                <li>
                    <div class="work-icon">

                        <div class="paper"></div>
                        <div class="lines"></div>
                        <div class="lines"></div>
                        <div class="lines"></div>
                    </div>
                </li>
            </a>
            <a href="kontakt.php">
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
        <h1>Koncert</h1>
        <h1>Tequila Sunrise Tickets</h1>
    </section>

    <form action="ulaznicascript.php" method="post">
        <p>Kupite ulaznicu! <br></p>
        <div>
            <label for="broj_reda" ;>Izaberite broj reda:</label>
            <select name="broj_reda" id="broj_reda" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>


            </select>
        </div>
        <div>
            <label for="broj_mesta" ;>Izaberite broj mesta:</label>
            <select name="broj_mesta" id="broj_mesta" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">12</option>
                <option value="12">12</option>

            </select>
        </div>
        <div>
            <label for="tip_mesta" ;>Izaberite tip mesta:</label>
            <select name="tip_mesta" id="tip_mesta" required>
                <option value="Fan-pit">Fan-pit</option>
                <option value="VIP">VIP</option>
                <option value="Obicno">Obicno

                </option>
                <option value="Business">Mesta za novinare i zaposlene</option>

            </select>
        </div>
        <div>
            <label for="izvođač" ;>Izaberite izvođača:</label>
            <select name="izvođač" id="izvođač" required>
                <option value="Duran Duran">Duran Duran</option>
                <option value="The Weeknd">The Weeknd</option>
                <option value="Travis Scott">Travis Scott</option>
                <option value="Hurricane">Hurricane</option>


            </select> <br>

        </div>
        <input type="Submit" value="Kupi">
    </form> <br>






</body>

</html>



<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=tequila_sunrise", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

require_once('skripta.php');


$sql = "SELECT * FROM koncert";
$result = $con->query($sql);

while ($row = $result->fetch()) {
    echo "<div id='pattern' class='pattern'>
                <ul class='list img-list'>
                    <li>
                        <div class='li-text'>
                            <h4 class='li-head'>" . $row["mesto"] . "</h4>
                            <p class='li-sub'>" . $row["država"] . " </p>
                            <p class='li-sub'>" . $row["datum"] . " </p>
                            <p class='li-sub'>" . $row["vreme"] . " </p>
                            <p class='li-sub'>" . $row["idIzvodjac"] . " </p>
                            <p class='li-sub'>" . $row["ime_izvođač"] . " </p>
                            
                        </div>
                    </li>
                </ul>
            </div>
        </div>";
}
?>


<?php

include "skripta.php";

$id = $_GET['idIzvodjac'];

$qry = mysqli_query($db, "select * from koncert where idIzvodjac ='$id'");

$data = mysqli_fetch_array($qry);

if (isset($_POST['update'])) {
    $mesto = $_POST['mesto'];
    $država = $_POST['država'];
    $datum = $_POST['datum'];
    $vreme = $_POST['vreme'];
    $idIzvodjac = $_POST['idIzvodjac'];
    $izvodjac = $_POST['ime_izvođač'];


    $edit = mysqli_query($db, "update koncert set mesto='$mesto', država='$država',datum='$datum',vreme='$vreme',ime_izvođač='$izvodjac' where idIzvodjac='$idIzvodjac'");

    if ($edit) {
        mysqli_close($db);

        exit;
    } else {
        echo "Error";
    }
}
?>