<?php

require '../database/database.php';

$id = $_GET["id"];

$sql = "SELECT * FROM users WHERE id = $id";

if ($result = mysqli_query($mysqli, $sql)) {

    $user = mysqli_fetch_assoc($result);

    if (is_null($user)) {
        header("location: account.php");
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
    <link rel="stylesheet" href="../css/account-update.css">

    <title>Fake Taxi: Account Update</title>
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


        <div class="b">
            <form action="../behandel/accountCheck.php" method="post" class='login'>
                <input type="hidden" name="id" value="<?php echo $user["id"] ?>">

                <div class=" form-group">
                    <label for="name">voornaam</label>
                    <input type="text" name="voornaam" value="<?php echo $user["voornaam"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">achternaam</label>
                    <input type="text" name="achternaam" value="<?php echo $user["achternaam"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">email</label>
                    <input type="text" name="email" value="<?php echo $user["email"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">wachtwoord</label>
                    <input type="text" name="wachtwoord" value="<?php echo $user["wachtwoord"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">telefoonnummer</label>
                    <input type="text" name="telefoonnummer" value="<?php echo $user["telefoonnummer"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">geboortedatum</label>
                    <input type="text" name="geboortedatum" value="<?php echo $user["geboortedatum"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">adres</label>
                    <input type="text" name="adres" value="<?php echo $user["adres"] ?>">
                </div>
                <div class=" form-group">
                    <label for="naam">postcode</label>
                    <input type="text" name="postcode" value="<?php echo $user["postcode"] ?>">
                </div>


                <div class="form-group">
                    <button type="submit" class="buttonBewerk" name="submit">Update je account!</button>

                </div>
            </form>
        </div>
    </div>

</body>

</html>