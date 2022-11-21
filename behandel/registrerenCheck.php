<?php

print_r($_POST);
if (
    $_POST['voornaam'] != '' && $_POST['achternaam'] != '' && $_POST['email'] != '' && $_POST['wachtwoord'] != ''
    && $_POST['geboortedatum'] != '' && $_POST['telefoonnummer'] != '' && $_POST['adres'] != '' && $_POST['postcode'] != ''
) {


    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $geboortedatum = $_POST['geboortedatum'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $adres = $_POST['adres'];
    $postcode = $_POST['postcode'];


    require "../database/database.php";

    $sql = "INSERT INTO users (voornaam, achternaam, email, wachtwoord, geboortedatum, telefoonnummer, adres, postcode, rol)
    VALUES ('$voornaam', '$achternaam', '$email', '$wachtwoord', '$geboortedatum', '$telefoonnummer', '$adres', '$postcode', 'klant')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: ../forms/registreren.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
