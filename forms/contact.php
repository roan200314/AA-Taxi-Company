<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Fake Taxi: Contact</title>
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
            <form class="middle" action="../behandel/contactCheck.php" method="post">
                <div class="card-1">
                    <label class="text"><b>E-mail:</b></label><br>
                    <input id="emailVak" type="text" name="email" required><br>
                    <label class="text"><b>Vraag:</b></label>
                    <textarea id="berichtVak" name="bericht"></textarea>
                    <button class="buttonContact" role="button"><span class="text">Verstuur</span></button>
                </div>
        </div>
    </div>
    </form>
    </div>
    </div>
</body>

</html>