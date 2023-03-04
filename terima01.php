<?php
    extract($_POST);
    setcookie("User", $user, time()+10);
    print "Kiriman Sudah Diterima <br>";
    if($pass=="123123"){
        echo "Selamat Datang $user";
        echo "<br><a href=\"welcome.php\">Silahkan Masuk</a>";
    }
    else
        echo "Access Denied";
?>