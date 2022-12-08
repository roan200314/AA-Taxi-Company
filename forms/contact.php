<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/logo.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Fake Taxi: Contact</title>
</head>

<body class="parent">
    <div>
        <img class="Logo" id="logo" src="../images/fake_taxi_logo.png" alt="">
    </div>
    <div id="nav-vakje">
        <?php
        include "../navbar/navbar.php";
        ?>
    </div>
    <div class="Main">
        <div class="container">
            <form action="../behandel/contactCheck.php" method="post">
                <div class="form-rij">
                    <div>
                        <input type="text" name="naam" required><br>
                        <label><b>E-mail</b></label>
                    </div>
                    <div>
                        <input type="text" name="achternaam" required><br>
                        <label><b>E-mail</b></label>
                    </div>
                    <div>
                        <input type="text" name="email" required><br>
                        <label><b>E-mail</b></label>
                    </div>
                </div>
                <div class="form-rij-textarea">
                    <div>
                        <textarea id="subject" name="bericht"></textarea>
                        <label><b>Bericht</b></label>
                    </div>
                </div>
                <div class="form-rij submit-knop">
                    <div class="input-data">
                        <div class="inner"></div>
                        <input type="submit" value="Sturen">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>