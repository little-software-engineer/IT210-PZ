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


        <?php
        $ime_izvođač = $_POST['ime_izvođač'];
        $mesto = $_POST['mesto'];
        $datum = $_POST['datum'];
        $vreme = $_POST['vreme'];
        $država = $_POST['država'];


        try {
            $con = new PDO("mysql:host=localhost;dbname=tequila_sunrise", "root", "");
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $sql = "INSERT INTO koncert (mesto, država, datum, vreme, ime_izvođač ) VALUES ('$mesto','$država','$datum','$vreme','$ime_izvođač')";
        $exc = $con->query($sql);

        if ($exc) {
            print "Podaci su uspešno uneti u bazu.";
        } else {
            print "Greska prilikom unosa.";
        };

        ?>