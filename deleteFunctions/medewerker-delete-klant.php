<?php
require '../database/database.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";

if (mysqli_query($mysqli, $sql)) {
    header("location: ../forms/klanten-overzicht.php ");
}
