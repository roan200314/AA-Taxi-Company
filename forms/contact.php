<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Fake Taxi: Contact</title>
</head>

<body>
    <?php
    include "../navbar/navbar.php"
    ?>
    <form action="../behandel/contactCheck.php" method="post">

        <div class="container">
            <label for="E-mail"><b>E-mail</b></label>
            <input type="text" placeholder=" Vul E-mail in.." name="email" required><br>
            <br>
            <label for="bericht"><b>Bericht</b></label>
            <textarea id="subject" name="bericht" placeholder="schrijf bericht.."></textarea>

            <button id="contactButton" type="submit" id="reg-button">Verstuur</button>
    </form>
</body>

</html>