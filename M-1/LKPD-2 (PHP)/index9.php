<?php
$uang = 10600;
$nilai_koin = [1000, 500, 200, 100];
$koin = 0;

echo "Jenis koin untuk Uang Rp. " . number_format($uang, 0, ',', '.') . " : <br>";
?>
<?php
foreach ($nilai_koin as $nilai) {
    $koin = intdiv($uang, $nilai);
    $uang = $uang % $nilai;
    if ($koin > 0) {
        echo "<li>" . $koin . " Koin Rp. " . number_format($nilai, 0, ',', '.') . "<br></li>";
    }
}