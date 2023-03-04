<?php
    session_start();
    extract($_POST);
    $_SESSION["User"] = $user;
    print "Kiriman Sudah Diterima <br>";
    if($pass=="123123"){
        echo "Selamat Datang $user";
        echo "<br><a href=\"welcome2.php\">Silahkan Masuk</a>";
    }
    else
        echo "Access Denied";
?>