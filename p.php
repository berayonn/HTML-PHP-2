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
    <table border="1"> 
        <caption>Konversi Bilangan Desimal ke Biner</caption> 
        <tr><td>Masukkan bilangan bulat :</td> 
        <td><input type="text" name="bil"></td></tr> 
        <tr><td colspan=2 align="right"> 
        <input type="submit" value="Konversi"> 
        <input type="reset"></td></tr> 
        
        <?php 
        if(!empty($_POST)){ 
            if(is_numeric($_POST["bil"])){ 
                $bil = (int) $_POST["bil"]; 
                $biner = ""; 
                do{ 
                    $biner = ($bil%2) . $biner; 
                    $bil = (int) ($bil / 2); 
                    } while($bil>0); 
                    echo "<tr><td>Bilangan Biner :</td> 
                        <td>$biner</td></tr>"; 
                } else 
                echo "<tr><td colspan=\"2\">Bukan bilangan...</td></tr>"; 
                } 
                ?> 
                </table>
            </form>
</body>
</html>