<html>
    <head>
    </head>
    <body>
        <?php
            session_start();

            if($_SESSION['status'] == 'login') {
                echo "Selamat Datang " . $_SESSION['username'];
                ?>
                <br><a href="sessionLogout.php">Log out</a>
                <?php
            } else {
                echo "Anda belum login. Silakan "?>
                <a href="sessionLoginForm.html">Log in</a>
                <?php
            }
        ?>
    </body>
</html>