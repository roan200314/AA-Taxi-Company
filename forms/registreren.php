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
                <div class="card-1">
                    <div class="register">
                        <form action="../behandel/registrerenCheck.php" method="post">


                            <label for="Voornaam"><b>Voornaam</b></label>
                            <input type="text" placeholder="Vul Voornaam in.." name="voornaam" required><br>

                            <label for="achternaam"><b>achternaam</b></label>
                            <input type="text" placeholder="Vul achternaam in.." name="achternaam" required><br>

                            <label for="email"><b>email</b></label>
                            <input type="text" placeholder="Vul E-mail in.." name="email" required><br>

                            <label for="wachtwoord"><b>wachtwoord</b></label>
                            <input type="password" placeholder="Vul wachtwoord in.." name="wachtwoord" required><br>

                            <label for="telefoonnummer"><b>telefoonnummer</b></label>
                            <input type="text" placeholder="Vul telefoonnummer in.." name="telefoonnummer" required><br>

                            <label for="geboortedatum"><b>geboortedatum</b></label>
                            <input type="date" placeholder="Vul geboortedatum in.." name="geboortedatum" required><br>

                            <label for="adres"><b>adres</b></label>
                            <input type="text" placeholder="Vul adres in.." name="adres" required><br>

                            <label for="postcode"><b>postcode</b></label>
                            <input type="text" placeholder="Vul postcode in.." name="postcode" required><br>

                            <button id="buttonBestel" type="submit" id="reg-button">Registreren</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../javascript/register.js"></script>

</html>