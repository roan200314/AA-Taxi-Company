<?php

print_r($_POST);
if (
    $_POST['naam'] != '' && $_POST['email'] != '' && $_POST['check1'] != ''
) {


    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $check1 = $_POST['check1'];


    require "../database/database.php";

    $sql = "INSERT INTO orders (naam, email, chauffeur, ophaaltijd)
    VALUES ('$naam', '$email', '$check1', now())";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../forms/bestellen.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
