<?php
session_start();
if (isset($_POST["submit"])) {
    $id = $_POST["id"];


    if (
        !empty($_POST["id"])
        && !empty($_POST["voornaam"])
        && !empty($_POST["achternaam"])
        && !empty($_POST["email"])
        && !empty($_POST["wachtwoord"])
        && !empty($_POST["telefoonnummer"])
        && !empty($_POST["geboortedatum"])
        && !empty($_POST["adres"])
        && !empty($_POST["postcode"])

    ) {
        //allemaal moeten ze true zijn
        $id = $_POST["id"];
        $voornaam = $_POST["voornaam"];
        $achternaam = $_POST["achternaam"];
        $email = $_POST["email"];
        $wachtwoord = $_POST["wachtwoord"];
        $telefoonnummer = $_POST["telefoonnummer"];
        $geboortedatum = $_POST["geboortedatum"];
        $adres = $_POST["adres"];
        $postcode = $_POST["postcode"];
        //database connectie
        
        require '../database/database.php';
        
        $sql = "UPDATE users SET 
        id = '$id',
        voornaam = '$voornaam',
        achternaam = '$achternaam',
        email = '$email',
        wachtwoord = '$wachtwoord',
        telefoonnummer = '$telefoonnummer',
        geboortedatum = '$geboortedatum',
        adres = '$adres',
        postcode = '$postcode'
        WHERE id = '$id' ";

        // Voer de INSERT INTO STATEMENT uit
        if (mysqli_query($mysqli, $sql)) {
            header("location: ../forms/account.php");
        }

        echo "Inserted successfully";
        mysqli_close($mysqli); // Sluit de database verbinding

    }
}
