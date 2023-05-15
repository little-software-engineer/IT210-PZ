<?php include('skripta.php') ?>
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
            <h2>Register</h2>
        </div>

        <form method="post" action="register.php">
            <?php include('errors.php'); ?>
            <div>
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div>
                <label>Confirm password</label>
                <input type="password" name="password_2">
            </div>
            <div>
                <button type="submit" name="reg_user">Register</button>
            </div>
            <p>
                Prijavi se <a href="login.php">Sign in</a>
            </p>
        </form>
    </body>

    </html>