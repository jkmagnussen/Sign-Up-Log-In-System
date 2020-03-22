<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li><a style="text-decoration: none; color: black;  font-weight: 600; font-family: Arial; margin: 20px; font-size: 30px;"
                            href="index.php">Home</a></li>
                </ul>
                <div class="nav-login">
                    <?php if (isset($_SESSION['u_id'])) {
                        echo '
                        <form action="./includes/logout.inc.php" method="POST">
                        <button type="submit" name="submit">Logout</button>
                        </form>';
                    }else {
                        echo'                    <form action="./includes/login.inc.php" method="POST">
                        <input type="text" name="uid" placeholder=" Username/ e-mail">
                        <input type="password" name="pwd" placeholder=" Password">
                        <button type="submit" name="submit">Login</button>
                    </form>
                    <a style="text-decoration: none; color: black;  font-weight: 600; font-family: Arial; margin: 20px; font-size: 30px;"
                        href="signup.php">Sign up</a>';
                    }

                    ?>
                </div>
            </div>
        </nav>
    </header>