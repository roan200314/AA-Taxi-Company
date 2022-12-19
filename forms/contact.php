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

        <div class="Contact-Vak">
            <form method="POST" action="../behandel/contactCheck.php">
                <h1>Contact Formulier</h1>
                <label for="email">Email : </label>
                <input type="text" id="email" name="email" value="" placeholder="Voer jouw email in..."> <br>
                <label for="bericht">Bericht : </label>
                <textarea id="bericht" name="bericht" placeholder="Bericht..."></textarea>
                <button type="submit" class="button">Stuur</button>
            </form>
        </div>
    </div>
</body>

</html>