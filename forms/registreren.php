<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Taxi: Registreren</title>
</head>

<body>

    <?php
    include "../navbar/navbar.php"
    ?>

    <form action="../behandel/registrerenCheck.php" method="post">

        <div class="container">
            <label for="First name"><b>Voornaam</b></label>
            <input type="text" placeholder=" Vul Voornaam in.." name="voornaam" required><br>

            <label for="Last name"><b>Achternaam</b></label>
            <input type="text" placeholder="Vul Achternaam in.." name="achternaam" required><br>

            <label for="email"><b>E-mail</b></label>
            <input type="text" placeholder="Vul E-mail in.." name="email" required><br>

            <label for="Password"><b>Wachtwoord</b></label>
            <input type="password" placeholder="Vul Wachtwoord in.." name="wachtwoord" required><br>

            <label for="Birthdate"><b>Geboortedatum</b></label>
            <input type="date" placeholder="Birthdate" name="geboortedatum" required><br>

            <label for="Phonenumber"><b>Telefoonnummer</b></label>
            <input type="phonenumber" placeholder="Vul Telefoonnummer in.." name="telefoonnummer" required><br>

            <label for="Address"><b>Adres</b></label>
            <input type="text" placeholder="Vul Adres in.." name="adres" required><br>

            <label for="Zipcode"><b>Postcode</b></label>
            <input type="text" placeholder="Vul Postcode in.." name="postcode" required><br>

            <button id="buttonBestel" type="submit" id="reg-button">Registreren</button>
        </div>
    </form>
</body>

</html>