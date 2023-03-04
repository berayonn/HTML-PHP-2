<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>72210477</title>
</head>
<body>
    <form method="post">
    <table border="5">
    <caption>Perhitungan Data Statistik</caption>
        <tr><td>Tambahkan Data</td>
        <td><input type="text" name="data"></td></tr>
        <tr><td colspan="2"><input type="submit"> <input type="reset"></td></tr>

    </form>
    <?php
        session_start();
        if(!empty($_POST)){
            $cacah = ++$_SESSION["cacah"];
            $_SESSION["jum"] += $_POST["data"];
            $rata = $_SESSION["jum"]/$_SESSION["cacah"];

            if ($_SESSION["min"] > $_POST["data"]){
                $_SESSION["min"] = $_POST["data"];
            }

            if ($_SESSION["max"] < $_POST["data"]){
                $_SESSION["max"] = $_POST["data"];
            }

            echo "<tr><td>Banyak Data</td><td>$cacah</td></tr>";
            echo "<tr><td>Jumlah Data</td><td>".$_SESSION["jum"]."</td></tr>";
            echo "<tr><td>Rata Rata</td><td>$rata</td></tr>";
            echo "<tr><td>Min Value</td><td>".$_SESSION["min"]."</td></tr>";
            echo "<tr><td>Max Value</td><td>".$_SESSION["max"]."</td></tr>";
        }else{
            echo "Dokumen Dibuka Pertama, dimanfaatkan untuk inisialisasi<br>";
            $_SESSION["cacah"] = 0;
            $_SESSION["jum"] = 0;
            $_SESSION["rata"] = 0;
            $_SESSION["min"] = 5;
            $_SESSION["max"] = 0;
            
        }
    ?>
    </table>
</body>
</html>