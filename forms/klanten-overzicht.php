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
                    <table class="table">
                            <thead>
                                <tr>
                                    
                                    <th>id</th>
                                    <th>Voornaam</th>
                                    <th>Achternaam</th>
                                    <th>email</th>
                                    <th>Rol</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($user as $user) : ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $user["id"] ?></td>
                                        <td><?php echo $user["voornaam"] ?></td>
                                        <td><?php echo $user["achternaam"] ?></td>
                                        <td><?php echo $user["email"] ?></td>
                                        <td><?php echo $user["rol"] ?></td>
                                        <td><a style="color: red;" href="user-delete.php?id=<?php echo $user["id"] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>  
        </div>
    </div>
</body>

</html>