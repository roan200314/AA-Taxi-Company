<?php

require "../database/database.php";
session_start();
$_SESSION["wrong_pas"] = true;


$email = $_POST["email"];
$password = $_POST["password"];

$result = $mysqli->query("SELECT * FROM users WHERE email = '$email' LIMIT 1");
$user = $result->fetch_assoc();


if (!empty($user)) {

    if ($user['password'] == $password) {
        $_SESSION["userData"] = $user;
        $_SESSION["wrong_pas"] = false;
        $_SESSION["user_id"] = $user['id'];

        // var_dump($_SESSION);die;
        header("Location: registreren.php");


        exit();
    } else {
        $_SESSION["wrong_pas"] = true;
        header("Location: inloggen.php");
        exit();
    }
} else {
    header("Location: ../forms/inloggen.php");
    exit();
}




if ($_SESSION["userData"]["rol"] == "klant") {
    echo "is een klant";
} elseif ($_SESSION["userData"]["rol"] == "medewerker") {
    echo "is een medewerker";
}
