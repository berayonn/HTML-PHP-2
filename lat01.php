<?php
$mhs = array("Bryan", "Candra", "Fano", "Varel", "Brian", "Kocak");
echo "\$mhs[0] = $mhs[0]<br>";
echo "\$mhs[2] = $mhs[2]<br><hr>";

for($count=0 ; $count <count($mhs); $count++){
    if($count==3)
        break;
    echo "\$mhs[$count] = $mhs[$count]<br>";
}

echo "<hr>Foreach<br>";
foreach($mhs as $elemen)
    echo "$elemen<br>";

echo "Menampilkan Index / Kunci Array<br><br>";
foreach($mhs as $idx=>$isi)
    echo "\$mhs[$idx] = $isi<br>";