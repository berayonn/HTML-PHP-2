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
    <caption>Tabel Pendeteksi Bilangan Prima atau Bukan Prima</caption>
        <tr><td>Masukkan Bilangan Bulat</td>
        <td><input type="text" name="prima" id="prima"></td></tr>
        <tr><td colspan="2"><input type="submit"></td></tr>
    </form>
    <?php

    function isPrime($prima) {
      if($prima < 2) {
        return false;
      }
      for($i=2; $i<=sqrt($prima); $i++) {
        if($prima % $i == 0) {
          return false;
        }
      }
      return true;
    }

    if(isset($_POST['prima'])) {
      $prima = $_POST['prima'];
      if(isPrime($prima)) {
        echo "<tr><td colspan=\"2\">$prima adalah Bilangan Prima </td></tr>";
      } else {
        echo "<tr><td colspan=\"2\">$prima bukan Bilangan Prima</td></tr>";
        $_SESSION['prima'] = 0;
      }
    }
    ?>

</body>
</html>