<?php
$mhs = array("72210477" => array("Nama"=>"Bryan", "Alamat"=>"Yogya"),
             "72210467" => array("Nama"=>"Lexi", "Alamat"=>"Papua")
            );
/*        
echo $mhs["72210477"]["Nama"] . "<br>";
echo $mhs["72210477"]["Alamat"] . "<br>";
echo $mhs["72210467"]["Nama"] . "<br>";
echo $mhs["72210467"]["Alamat"] . "<br>";
*/
echo "<hr>";

foreach($mhs as $idx=>$isi){
    foreach($isi as $idx1=>$isi1)
        echo "$idx $idx1 = $isi1<br>";
}
