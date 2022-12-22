<?php
require "../database/database.php";
session_start();
$sql = "SELECT * FROM users ";

if (!empty($_SESSION['userData'])) {
    if ($_SESSION["userData"]["rol"] == "medewerker" || "klant") {
        $id = $_SESSION["user_id"];
        $sql = "SELECT * FROM users WHERE id = $id LIMIT 1";
        if ($result = mysqli_query($mysqli, $sql)) {
            $user = mysqli_fetch_assoc($result);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/account.css">
    <title>Fake Taxi: Account</title>
</head>

<body>
    <div class="parent">
        <div class="logo">
            <img class="Logo" id="logo" src="../images/fake_taxi_logo.png" alt="">
        </div>
        <div class="Navbar">
            <?php session_abort();
            include "../navbar/navbar.php" ?>
        </div>
        <div class="order-informatie">
                <h1>Bestel informatie</h1>
        </div>
        <div class="vak-c">
            <h1>Info</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum expedita reprehenderit, magnam unde deleniti cumque eveniet. Aspernatur cum asperiores ex, voluptates ut esse soluta voluptatum qui, porro autem nostrum tenetur.</p>
        </div>
        <div class="account-informatie">
                <thead>
                    <?php
                    if (!empty($_SESSION['userData'])) {
                        if ($_SESSION["userData"]["rol"] == "medewerker" || "klant") {  ?>
                </thead>
                <tbody>
                    <tr>
                        <h1>Gegevens</h1>
                        <h3>
                            Voornaam: <?php echo $user["voornaam"] ?><br>
                            Achternaam: <?php echo $user["achternaam"] ?><br>
                            E-mail: <?php echo $user["email"] ?><br>
                            Wachtwoord: <td><?php echo $user["wachtwoord"] ?><br>
                                Geboortedatum: <?php echo $user["geboortedatum"] ?><br>
                                Telefoonnummer:
                            <td><?php echo $user["telefoonnummer"] ?><br>
                                Adres:
                            <td><?php echo $user["adres"] ?><br>
                                Postcode:
                            <td><?php echo $user["postcode"] ?><br>
                                <br>
                            <button class="button button1"><a href="../deleteFunctions/account-delete.php?id=<?php echo $user["id"] ?>">Verwijder</a></button>
                            <button class="button button2"><a href="../logout/logout.php">Log uit</a></td></button>
                            <button class="button button3"><a href="account-update.php?id=<?php echo $user["id"] ?>" class="btn btn-warning">Bewerk</a></td></button>
                        </h3>
                        </td> 
                    </tr>
                </tbody>
            <?php }
            } else {
                ?>
                <p class="txt"><?php
                echo "Je bent nog niet ingelogt,";
                ?>
                <a href="registreren.php">registreer</a>
                <?php echo "of";?>
                <a href="inloggen.php">login</a>
                <?php echo "om hier informatie te zien.";?>
            <?php }  ?></p>
        </div>
    </div>
</body>

</html>