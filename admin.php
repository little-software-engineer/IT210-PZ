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

    <form action="koncertscript.php" method="post" name="form">
        <p>Dodajte nov koncert u bazu podataka!</p>
        Unesite ime izvođača: <input type="text" name="ime_izvođač" required><br />
        Unesite mesto: <input type="text" name="mesto" required><br /><br />
        Unesite datum: <input type="date" name="datum" required><br /><br />
        Unesite vreme koncerta: <input type="time" name="vreme" required><br /><br />
        Unesite državu: <input type="text" name="država" required><br /><br />
        <input type="Submit" value="Unos">
    </form>

    <div>
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>

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
try {
    $con = new PDO("mysql:host=localhost;dbname=tequila_sunrise", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

require_once('skripta.php');


$sql = "SELECT * FROM registracija";
$result = $con->query($sql);

while ($row = $result->fetch()) {
    echo "<div id='pattern' class='pattern'>
                <ul class='list img-list'>
                    <li>
                        <div class='li-text'>
                            <h4 class='li-head'>" . $row["username"] . "</h4>
                            <p class='li-sub'>" . $row["password"] . " </p>
                            <p class='li-sub'>" . $row["email"] . " </p>
                          
                            
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

<?php

include "skripta.php";

$id = $_GET['idIzvodjac'];

$qry = mysqli_query($db, "select * from koncert where idIzvodjac ='$id'");

$data = mysqli_fetch_array($qry);

if (isset($_POST['delete'])) {
    $mesto = $_POST['mesto'];
    $država = $_POST['država'];
    $datum = $_POST['datum'];
    $vreme = $_POST['vreme'];
    $idIzvodjac = $_POST['idIzvodjac'];
    $izvodjac = $_POST['ime_izvođač'];


    $edit = mysqli_query($db, "DELETE FROM koncert where idIzvodjac='$idIzvodjac'");

    if ($edit) {
        mysqli_close($db);

        exit;
    } else {
        echo "Error";
    }
}
?>

<h3>Izmeni podatke o koncertu</h3>

<form method="POST">
    <input type="text" name="mesto" value="<?php echo $data['mesto'] ?>" placeholder="Mesto" Required>
    <input type="text" name="država" value="<?php echo $data['država'] ?>" placeholder="Država" Required>
    <input type="date" name="datum" value="<?php echo $data['datum'] ?>" placeholder="Datum" Required>
    <input type="time" name="vreme" value="<?php echo $data['vreme'] ?>" placeholder="Vreme" Required>
    <input type="number" name="idIzvodjac" value="<?php echo $data['idIzvodjac'] ?>" placeholder="ID" Required>
    <input type="text" name="ime_izvođač" value="<?php echo $data['ime_izvođač'] ?>" placeholder="Ime izvođača" Required>
    <input type="submit" name="update" value="Update">
</form>

<h3>Izbriši podatke o koncertu</h3>

<form method="POST">
    <input type="text" name="mesto" value="<?php echo $data['mesto'] ?>" placeholder="Mesto" Required>
    <input type="text" name="država" value="<?php echo $data['država'] ?>" placeholder="Država" Required>
    <input type="date" name="datum" value="<?php echo $data['datum'] ?>" placeholder="Datum" Required>
    <input type="time" name="vreme" value="<?php echo $data['vreme'] ?>" placeholder="Vreme" Required>
    <input type="number" name="idIzvodjac" value="<?php echo $data['idIzvodjac'] ?>" placeholder="ID" Required>
    <input type="text" name="ime_izvođač" value="<?php echo $data['ime_izvođač'] ?>" placeholder="Ime izvođača" Required>
    <input type="submit" name="delete" value="Delete">
</form>