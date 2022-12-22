<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bestellen.css">
    <link rel="stylesheet" href="../css/header.css">
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
            <div class="box">
                <form action="../behandel/bestellenCheck.php" method="POST">
                    <div class="form">
                        <h2>Bestellen</h2>
                        <div class="inputBox">
                            <label for="naam"><b>Naam</b></label>
                            <input type="text" placeholder=" Vul Naam in.." name="naam" required><br>
                            <i></i>
                        </div>
                        <div class="inputBox">
                            <label for="email"><b>email</b></label>
                            <input type="text" placeholder="Vul email in.." name="email" required><br>
                            <i></i>
                        </div>

                        <div class="inputBox">
                            <div class="dropdown">
                                <button class="dropbtn">Chauffeur</button>
                                <div class="dropdown-content">
                                    <input type="radio" name="check1" value="Khalifa"> Mia Khalifa<br>
                                    <input type="radio" name="check1" value="Sins"> Johnny Sins<br>
                                    <input type="radio" name="check1" value="Danger"> Abella Danger
                                </div>
                            </div>
                            <i></i>
                        </div>
                        <input type="submit" value="Bestel">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>