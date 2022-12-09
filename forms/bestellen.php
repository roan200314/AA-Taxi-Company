<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bestellen.css">
    <link rel="stylesheet" href="../css/logo.css">
    <link rel="stylesheet" href="../css/navbar.css">

    <title>Fake Taxi: Bestellen</title>
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
            <form action="../behandel/bestellenCheck.php" method="post">

                <div class="bestel">
                    <label for="naam"><b>Naam</b></label>
                    <input type="text" placeholder=" Vul Naam in.." name="naam" required><br>

                    <label for="Last name"><b>Telefoonnummer</b></label>
                    <input type="text" placeholder="Vul telefoonnummer in.." name="telefoonnummer" required><br>

                    <label for="email"><b>E-mail</b></label>
                    <input type="text" placeholder="Vul E-mail in.." name="email" required><br>

                    <label for="Password"><b>Adres</b></label>
                    <input type="text" placeholder="Vul adres in.." name="adres" required><br>

                    <div class="dropdown">
                        <button class="dropbtn">Chauffeur</button>
                        <div class="dropdown-content">
                            <input type="radio" name="check1" value="Khalifa"> Mia Khalifa<br>
                            <input type="radio" name="check1" value="Sins"> Johnny Sins<br>
                            <input type="radio" name="check1" value="Danger"> Abella Danger
                        </div>
                    </div>

                    <button id="buttonBestel" type="submit" id="reg-button">Bestellen</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>