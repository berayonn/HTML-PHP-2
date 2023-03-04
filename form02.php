<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <table border="5">
    <caption>Tabel Pendeteksi Bilangan Genap atau Ganjil</caption>
        <tr><td>Masukkan Sebuah Bilangan Bulat</td>
        <td><input type="text" name="bilangan"></td></tr>
        <tr><td colspan="2"><input type="submit"></td></tr>
        
    </form>

    <?php
        if(!empty($_POST)){
            $bil = $_POST["bilangan"];
            if($bil % 2 == 0)
                $jenis = "Genap";
            else
                $jenis = "Ganjils";
            echo "<tr><td colspan=\"2\">Bilangan itu : $jenis</td></tr>";
        }
    ?>
    </table>
</body>
</html>