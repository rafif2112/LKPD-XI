<?php
$hari = date("D");
$total_belanja = 130000;

switch ($hari) {
    case 'Sun':
        $hari = "Minggu";
        break;
    case 'Mon':
        $hari = "Senin";
        break;
    case 'Tue':
        $hari = "Selasa";
        break;
    case 'Wed':
        $hari = "Rabu";
        break;
    case 'Thu':
        $hari = "Kamis";
        break;
    case 'Fri';
        $hari = "Jumat";
        break;
    case 'Sat':
        $hari = "Sabtu";
        break;  
}

if ($hari == "Selasa" && $total_belanja > 100000) {
    $diskon = $total_belanja * (7/100 + 5/100);
    $total_bayar = $total_belanja - $diskon;
} else if ($hari == "Selasa") {
    $diskon = $total_belanja * 5/100;
    $total_bayar = $total_belanja - $diskon;
} else if ($total_belanja > 100000) {
    $diskon = $total_belanja * 7/100;
    $total_bayar = $total_belanja - $diskon;
} else {
    $diskon = 0;
}

echo "Hari ini hari : " . $hari;
echo "<br>";
echo "Total pembelanjaan : " . $total_belanja;
echo "<br>";
echo "Total Yang Harus Dibayar : " . $total_bayar;
?>