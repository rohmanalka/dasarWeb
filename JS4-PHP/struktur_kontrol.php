<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}

echo "<br><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

echo "<br><br>";
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

echo "<br><br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";

echo "<br><br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus)<br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus)<br>";
}

echo "<br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

rsort($nilaiSiswa);
array_splice($nilaiSiswa, 0, 2);
array_splice($nilaiSiswa, -2);
$nilaiTotal = 0;

foreach ($nilaiSiswa as $nilai) {
    $nilaiTotal += $nilai;
}
if (count($nilaiSiswa) > 0) {
    echo "Total nilai dari siswa setelah mengabaikan dua nilai tertinggi dan dua terendah adalah: $nilaiTotal<br>";
    echo "Nilai rata-rata adalah: " . $nilaiTotal / count($nilaiSiswa);
} else {
    echo "Tidak ada nilai siswa yang tersisa setelah pemotongan.";
}

echo "<br><br>";
$hargaProduk = 120000;
$totalHarga = $hargaProduk;
$hargaSetelahDiskon = 0;

if ($totalHarga > 100000) {
    $hargaSetelahDiskon = $totalHarga - (($totalHarga * 20) / 100);
    echo "Anda mendapat diskon sebesar 20% <br>";
    echo "Total belanjaan anda adalah: Rp. {$hargaSetelahDiskon}";
}

echo "<br><br>";
$totalSkor = 510;
echo "Total skor pemain adalah: $totalSkor <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? <br>";
echo $totalSkor > 500 ? "YA" : "TIDAK";
?>