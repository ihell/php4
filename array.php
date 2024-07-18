<?php
// array
// variabel yang dapat memiliki banyak nila
// elemen pada array boleh memiliki tipe data yang berbeda
// pasanagn antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "febuari", "maret"];
$arr1 = [123, "tulisan", false];

// manampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// manampilkan 1 elemen pada array
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// membahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);


?>