<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Taxi: Login</title>
</head>

<body>

    <?php
    include "../navbar/navbar.php"
    ?>

    <form action="../behandel/inloggenCheck.php" method="post">

        <div class="container">
            <label for="mail"><b>E-Mail</b></label>
            <input type="text" placeholder="Vul E-mail in.." name="email" required><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Vul wachtwoord in.." name="wachtwoord" required><br>


            <?php
            if (!empty($_SESSION["wrong_pas"])) {
                if ($_SESSION["wrong_pas"] == true) {
                    echo "<p style=color:red>Gegevens kloppen niet</p>";
                }
            } ?>


            <button id="buttonBestel" type="submit" value="submit">Login</button>
        </div>


    </form>
</body>

</html>