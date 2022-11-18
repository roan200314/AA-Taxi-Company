<?php

print_r($_POST);
if (
    $_POST['email'] != '' && $_POST['bericht'] != '' 
) {


    $email = $_POST['email'];
    $bericht = $_POST['bericht'];


    require "../database/database.php";

    $sql = "INSERT INTO contact (email, bericht, tijd, behandeld)
    VALUES ('$email', '$bericht', NOW(), 'open')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: contact.php");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli->close();
}
