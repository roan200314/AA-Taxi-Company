<?php
require "../database/database.php";
$sql = "SELECT * FROM users ";

if ($result = mysqli_query($mysqli, $sql)) {
    $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
session_abort();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/klanten-overzicht.css">
    <link rel="stylesheet" href="../css/header.css">
    <title>Fake Taxi: klanten Overzicht</title>
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
            <div class="middle">
                <div class="card-1">
                    <div class="accounts">
                        <?php foreach ($user as $user) : ?>
                            <tr>
                                Account name: <?php echo $user["voornaam"] ?>
                                <a href="../deleteFunctions/medewerker-delete-klant.php?id=<?php echo $user["id"] ?>" class="btn-danger">Delete</a><br>
                            </tr>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>