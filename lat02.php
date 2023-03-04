<?php
$mhs = array("Nim"=>"72210477", "Nama"=>"Bryan Nicholas", "Kota"=>"Yogyakarta");
$mhs["Prodi"] = "Sistem Informasi";

echo "$mhs[Nim]<br>";
echo "$mhs[Nama]<br>";
echo "$mhs[Kota]<br>";

echo "<hr>";
echo "Dibaca Memakai Foreach, tampilkan indeksnya:<br>";
foreach($mhs as $idx=>$isi)
    echo "$idx : $isi<br>";