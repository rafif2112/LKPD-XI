<?php 
$uang = 1750;
$nilai_koin = [500, 200];
$koin = 0;

echo "Jenis koin untuk Uang Rp. " . number_format($uang, 0, ',', '.') . " : <br>";
?>
<ul>
<?php
foreach ($nilai_koin as $nilai) : ?>
    <?php 
    $koin = intdiv($uang, $nilai);
    $uang = $uang % $nilai;
    ?>
    <li><?php echo $koin . " Koin Rp. " . number_format($nilai, 0, ',', '.') . "<br>"; ?></li>
<?php endforeach; ?>
</ul>