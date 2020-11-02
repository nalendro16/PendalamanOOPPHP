<?php
require_once 'App/init.php';

// 1. instanisasi harimau
$harimau = new Harimau("Harimau", "", 4, "Lari Cepat", 10, 5);
// 2. instanisai elang
$elang = new Elang("Elang", "", 2, "Terbang Tinggi", 7, 8);

// echo-ing method yg ada didalam kelas Hewan
echo $harimau->artraksi();
echo "<br>";
echo $elang->artraksi();
echo "
<hr>";

//serang
echo $elang->serang($harimau);
echo "<br>";
echo $harimau->serang($elang);
echo "<br>";
echo "<br>";

// diserang
echo $elang->diserang($harimau);
echo "<br>";
echo $harimau->diserang($elang);
echo "
<hr>";

//getinfoHewan
echo $elang->getInfoHewan();
echo "<br>";
echo $harimau->getInfoHewan();
