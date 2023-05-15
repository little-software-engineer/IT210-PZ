<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
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

        <h1>Kontakt</h1>
        <h1>Tequila Sunrise Tickets</h1>
    </section>

    <div id="informacije">
        <h2><br>Naš telefon: +381 62-5364-31</h2>
        <h2>Naš mail: tequilasunriseoffice@gmail.com</h2><br>

        <h2>Naša lokacija: <br></h2>
        <div class="lokacija">
            <div class="gmap_canvas"><iframe width="400" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Rodeo%20Dr&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>

            </div>
        </div>

        <div id="kontaktiranje">
            <h2 style="color: white;">Kontaktirajte Nas!</h2>
            <form id="kontakt" onsubmit="validateIme(ime); validatePrezime(prezime);">
                <div class="ime">
                    <label for="ime" style="color: white;">Ime:</label><br />
                    <input id="ime" class="input" name="ime" type="text" required value="" onchange="proveraBroja(this);" /><br />
                </div>
                <div class="prezime">
                    <label for="prezime" style="color: white;">Prezime:</label><br />
                    <input id="prezime" class="input" name="prezime" required type="text" value="" onchange="proveraBroja(this);" /><br />
                </div>
                <div class="telefon">
                    <label for="telefon" style="color: white;">Broj telefona:</label><br />
                    <input id="telefon" class="input" name="telefon" required type="number" value="" onchange="validacijaTelefona(this);" /><br />
                </div>
                <div>
                    <label for="tipPoruke" style="color: white;">Izaberite tip poruke:</label>

                    <select name="tipPoruke" id="tipPoruke" required>
                        <option value="Predlog izvođača">Predlog izvođača</option>
                        <option value="Recenzija">Recenzija</option>
                        <option value="Predlozi kako da se unapredimo i poboljšamo">Predlozi kako da se unapredimo i
                            poboljšamo
                        </option>
                        <option value="Ostalo">Ostalo</option>

                    </select>
                </div>
                <div class="naslov">
                    <label for="naslov" style="color: white;">Naslov poruke:</label><br />
                    <input id="naslov" class="input" name="naslovPoruke" required type="text" value="" /><br />
                </div>
                <div class="tekst">
                    <label for="tekst" style="color: white;">Tekst poruke:</label><br />
                    <textarea id="tekst" class="input" name="tekstPoruke" onchange="duzinaTeksta(this);"></textarea><br />
                </div>

                <input id="posaljite" type="submit" value="Pošaljite poruku" />
            </form>
        </div>

</body>

</html>