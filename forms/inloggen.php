<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/logo.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/inloggen.css">
    <title>Login Pagina</title>
</head>

<body>
    hi
    <div class="parent">
        <div class="logo">
            <img class="Logo" id="logo" src="../images/fake_taxi_logo.png" alt="">
        </div>
        <div class="Navbar">
            <?php include '../navbar/navbar.php' ?>
        </div>
        <div class="Main" >
            <div class="box" >
                <form action="" method="POST">
                <div class="form">
                    <h2>Login</h2>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="wachtwoord" id="wachtwoord" required="required">
                        <span>Wachtwoord</span>
                        <i></i>
                    </div>
                    <?php
                    if (!empty($_SESSION["wrong_pas"])) {
                        if ($_SESSION["wrong_pas"] == true) {
                            echo "<p style=color:red>Gegevens kloppen niet</p>";
                        }
                    } ?>
                    <div class="links">
                        <a href="#">Wachtwoord vergeten?</a>
                        <a href="#">Account maken</a>
                    </div>
                    <input type="submit" value="Login">
                </div>
                </form>
            </div>
        </div> 
    </div>
</body>

</html>