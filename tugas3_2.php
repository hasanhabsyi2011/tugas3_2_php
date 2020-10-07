<?php 

$tabAwal = 150000;
$bunga = 12.5;

$jmlBunga = ($tabAwal * $bunga) / 100;
$jmlTab = $tabAwal + $jmlBunga;


echo "Tabungan Awal = Rp ", $tabAwal, "<br>";
echo "Bunga Setahun = ", $bunga, "% <br>";
echo "Total Tabungan Setahun = ?<br>";
echo "Jawaban : Rp ", $jmlTab;
 ?>