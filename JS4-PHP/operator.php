<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "===HASIL OPERATOR ARITMATIKA=== <br>";
echo "Hasil Tambah : {$hasilTambah} <br>";
echo "Hasil Kurang :{$hasilKurang} <br>";
echo "Hasil Kali : {$hasilKali} <br>";
echo "Hasil Bagi : {$hasilBagi} <br>";
echo "Hasil Sisa Bagi : {$sisaBagi} <br>";
echo "Hasil Pangkat : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "===HASIL OPERATOR PEMBANDING===<br>";
echo "Hasil sama : {$hasilSama} <br>";
echo "Hasil tidak sama : {$hasilTidakSama} <br>";
echo "Hasil lebih kecil : {$hasilLebihKecil} <br>";
echo "Hasil lebih besar : {$hasilLebihBesar} <br>";
echo "Hasil lebih kecil sama : {$hasilLebihKecilSama} <br>";
echo "Hasil lebih besar sama : {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br>";
echo "===HASIL OPERATOR LOGIKA=== <br>";
echo "Hasil AND : {$hasilAnd} <br>";
echo "Hasil OR : {$hasilOr} <br>";
echo "Hasil NOT A : {$hasilNotA} <br>";
echo "Hasil NOT B : {$hasilNotB} <br>";

echo "<br>";
echo "===HASIL OPERATOR PENUGASAN=== <br>";
$a += $b;
echo "Hasil +=: $a <br>";
$a -= $b;
echo "Hasil -=: $a <br>";
$a *= $b;
echo "Hasil *=: $a <br>";
$a /= $b;
echo "Hasil /=: $a <br>";
$a %= $b;
echo "Hasil %=: $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "<br>";

echo "===HASIL OPERATOR IDENTIK <br>";
echo "Hasil Identik : {$hasilIdentik} <br>";
echo "Hasil tidak Identik : {$hasilTidakIdentik} <br>";
?>