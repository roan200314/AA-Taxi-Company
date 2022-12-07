<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/logo.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/logo.css">
    <title>Fake Taxi: Home</title>
</head>

<body>
    <div class="parent">
        <div>
            <img class="Logo" id="logo" src="../images/fake_taxi_logo.png" alt="">
        </div>
        <div id="nav-vakje">
            <?php
            include "../navbar/navbar.php";
            ?>
        </div>
        <div class="Main">
            <div class="title">
                <h1>Onze Chauffeurs</h1>
            </div>
            <div class="card-1"><img id="img1" src="../images/sins.jpg" alt="">
                <div class="card-1text">
                    <p><b>Naam:</b> Johnny Sins</p><br>
                    <p><b>Beschrijving:</b> Johnny Sins is een zeer ervaren chauffeur die lang bij ons in dienst is. Zo is Johnny een echte praatjesmaker die ervoor zal zorgen dat jouw rit zeer vermakelijk eindigd.</p>
                    <br>
                    <div class="part">
                        <div class="stars" data-percent="90"></div><br>
                    </div>
                    <button class="button-73" role="button">Bestel</button>
                </div>
            </div>
            <div class="card-2"><img id="img2" src="../images/abella.jfif" alt="">
                <div class="card-2text">
                    <p>dadadad</p>
                    <button>Bestel!</button>
                </div>
            </div>
            <div class="card-3"><img id="img3" src="../images/mia.jpg" alt="">
                <div class="card-3text">
                    <p>dadadad</p>
                    <button>Bestel!</button>
                </div>
            </div>
            <div class="order"></div>
        </div>
    </div>
</body>

</html>