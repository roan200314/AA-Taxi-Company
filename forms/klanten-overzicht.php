<?php
require "../database/database.php";
$sql = "SELECT * FROM users ";

if ($result = mysqli_query($mysqli, $sql)) {
    $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Taxi: klanten Overzicht</title>
</head>

<body>
    <?php
    session_abort();
    include "../navbar/navbar.php"
    ?>

    <?php foreach ($user as $user) : ?>
        <tr>
            Account name: <?php echo $user["voornaam"] ?>
            <a href="../deleteFunctions/medewerker-delete-klant.php?id=<?php echo $user["id"] ?>" class="btn-danger">Delete</a><br>
        </tr>
    <?php endforeach; ?>
</body>

</html>