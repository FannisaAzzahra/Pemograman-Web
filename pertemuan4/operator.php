<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a: $a <br>";
echo "Nilai b: $b <br><br>";

echo "Hasil Penambahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Operasi Perbandingan: <br>";
echo "a == b : " . var_export($hasilSama, true) . "<br>";
echo "a != b : " . var_export($hasilTidakSama, true) . "<br>";
echo "a < b  : " . var_export($hasilLebihKecil, true) . "<br>";
echo "a > b  : " . var_export($hasilLebihBesar, true) . "<br>";
echo "a <= b : " . var_export($hasilLebihKecilSama, true) . "<br>";
echo "a >= b : " . var_export($hasilLebihBesarSama, true) . "<br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil Operasi AND (a && b): " . var_export($hasilAnd, true) . "<br>";
echo "Hasil Operasi OR (a || b): " . var_export($hasilOr, true) . "<br>";
echo "Hasil Operasi NOT (!a): " . var_export($hasilNotA, true) . "<br>";
echo "Hasil Operasi NOT (!b): " . var_export($hasilNotB, true) . "<br><br>";

$a += $b;
echo "a += b = $a <br>";
$a -= $b;
echo "a -= b = $a <br>";
$a *= $b;
echo "a *= b = $a <br>";
$a /= $b;
echo "a /= b = $a <br>";
$a %= $b;
echo "a %= b = $a <br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik (a == b): ";
var_dump($hasilIdentik);
echo "<br>";

echo "Hasil Tidak Identik (a != b): ";
var_dump($hasilTidakIdentik);
echo "<br><br>";

$jumlahKursi = 45;
$kursiTerpakai = 28;
$presentaseKursiKosong = ($jumlahKursi - $kursiTerpakai) / $jumlahKursi * 100;

echo "Diketahui terdapat $jumlahKursi kursi di sebuah restoran dan $kursiTerpakai diantaranya terpakai. <br>";
echo "Presentase kursi yang masih kosong adalah $presentaseKursiKosong%";
