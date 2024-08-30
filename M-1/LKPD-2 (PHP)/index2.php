<?php
$hari = date("l");
$total_belanja = 130000;

if ($hari == "Tuesday" && $total_belanja > 100000) {
    $diskon = $total_belanja * (7/100 + 5/100);
    $total_bayar = $total_belanja - $diskon;
} else if ($hari == "Tuesday") {
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