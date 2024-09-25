<?php
$totalKursi = 45;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total Kursi : {$totalKursi} <br>";
echo "Kursi diTempati : {$kursiDitempati} <br>";
echo "Kursi Kosong : {$kursiKosong} <br>";
echo "Persentase kursi kosong = {$persentKosong}%<br>";
echo "<br>";
?>