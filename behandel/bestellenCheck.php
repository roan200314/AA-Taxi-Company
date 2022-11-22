<?php

print_r($_POST);
if (
    $_POST['naam'] != '' && $_POST['telefoonnummer'] != '' && $_POST['email'] != '' && $_POST['adres'] != ''
    && $_POST['check1'] != '' 
) {


    $naam = $_POST['naam'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $adres = $_POST['adres'];
    $check1 = $_POST['check1'];


    require "../database/database.php";

    $sql = "INSERT INTO orders (naam, telefoonnummer, email, adres, chauffeur)
    VALUES ('$naam', '$telefoonnummer', '$email', '$adres', '$check1')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../forms/bestellen.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
