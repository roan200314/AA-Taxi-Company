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
    <link rel="stylesheet" href="../css/Header.css">
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
        <div class="Main">
        <thead>
            <?php
            if (!empty($_SESSION['userData'])) {
                if ($_SESSION["userData"]["rol"] == "medewerker" || "klant") {  ?>
        </thead>
        <tbody>
            <tr>
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
                    <a href="../deleteFunctions/account-delete.php?id=<?php echo $user["id"] ?>" class="btn btn-danger">Delete</a>
                </td>
                <a href="../logout/logout.php">Logout</a></td>
                <a href="account-update.php?id=<?php echo $user["id"] ?>" class="btn btn-warning">Update</a></td>
            </tr>
        </tbody>

            <?php }
            } else {
                echo "U bent nog niet ingelogt, registreer of log in om wat te zien.";  ?>
                <li><a href="registreren.php">Registreren</a></li>
                <li><a href="inloggen.php">Inloggen</a></li>
            <?php }  ?>
        </div>
    </div>
</body>

</html>