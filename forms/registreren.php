<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/registreren.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Fake Taxi: Registreren</title>
</head>

<body>

    <div class="parent">
        <div class="logo">
            <img class="Logo" id="logo" src="../images/fake_taxi_logo.png" alt="">
        </div>
        <div class="Navbar">
            <?php include '../navbar/navbar.php' ?>
        </div>
        <div class="Main">
            <div class="middle">
                <div class="box">
                    <form action="../behandel/registrerenCheck.php" method="post">
                        <div class="form">

                            <div class="form-left">
                                <div class="inputBox">
                                    <input type="text" name="voornaam" required>
                                    <span>Voornaam</span>
                                    <i></i>
                                </div>

                                <div class="inputBox">
                                    <input type="text" name="achternaam" required>
                                    <span>achternaam</span>
                                    <i></i>
                                </div>
                                <div class="inputBox">
                                    <input type="text" name="email" required>
                                    <span>email</span>
                                    <i></i>
                                </div>
                                <div class="inputBox">
                                    <input type="password" name="wachtwoord" required>
                                    <span>wachtwoord</span>
                                    <i></i>
                                </div>
                            </div>

                            <div class="form-right">
                                <div class="inputBox">
                                    <input type="date" name="geboortedatum" required>
                                    <label>geboortedatum</label>
                                    <i></i>
                                </div>
                                <div class="inputBox">
                                    <input type="text" name="adres" required>
                                    <span>adres</span>
                                    <i></i>
                                </div>
                                <div class="inputBox">
                                    <input type="text" name="postcode" required>
                                    <span>postcode</span>
                                    <i></i>
                                </div>

                                <div class="button">
                                    <button id="buttonBestel" type="submit" id="reg-button">Registreren</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../javascript/register.js"></script>

</html>