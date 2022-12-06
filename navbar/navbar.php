<?php
session_start();
?>
<nav class="navMenu">
    <a href="../pagina/index.php">Home</a>
    <a href="../forms/bestellen.php">Bestellen</a>
    <a href="../forms/contact.php">Contact</a>
    <a href="../forms/inloggen.php">Login</a>
    <a href="../forms/registreren.php">registreren</a>
    <a href="../forms/Account.php">Account</a>
    <?php
    if (!empty($_SESSION['userData'])) {
        if ($_SESSION["userData"]["rol"] == "medewerker") {
    ?>
            <a href="../forms/klanten-overzicht.php">Klanten Overzicht</a> <?php
                                                                        }
                                                                    } ?>
    <div class="dot"></div>
</nav>