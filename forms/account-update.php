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
    <title>Document</title>
</head>

<body>



    <div class="main">
        <h1 id="kop-tekst">Bewerk je account</h1>
        <form action="../behandel/accountCheck.php" method="post" class='login'>
            <label for="id">id</label>
            <input type="hidden" name="id" value="<?php echo $user["id"] ?>">

            <div class=" form-group">
                <label for="name">name</label>
                <input type="text" name="voornaam" value="<?php echo $user["voornaam"] ?>">
            </div>
            <div class=" form-group">
                <label for="naam">lastname</label>
                <input type="text" name="achternaam" value="<?php echo $user["achternaam"] ?>">
            </div>
            <div class=" form-group">
                <label for="naam">email</label>
                <input type="text" name="email" value="<?php echo $user["email"] ?>">
            </div>
            <div class=" form-group">
                <label for="naam">password</label>
                <input type="text" name="wachtwoord" value="<?php echo $user["wachtwoord"] ?>">
            </div>
            <div class=" form-group">
                <label for="naam">phonenumber</label>
                <input type="text" name="telefoonnummer" value="<?php echo $user["telefoonnummer"] ?>">
            </div>
            <div class=" form-group">
                <label for="naam">phonenumber</label>
                <input type="text" name="geboortedatum" value="<?php echo $user["geboortedatum"] ?>">
            </div>
            <div class=" form-group">
                <label for="naam">address</label>
                <input type="text" name="adres" value="<?php echo $user["adres"] ?>">
            </div>
            <div class=" form-group">
                <label for="naam">zipcode</label>
                <input type="text" name="postcode" value="<?php echo $user["postcode"] ?>">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-info" name="submit">Update je account!</button>

            </div>
        </form>
    </div>

</body>

</html>