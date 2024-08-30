<?php 
$uang = 1750;
$nilai_koin = [500, 200, 100];
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
    <?php if ($koin > 0) : ?>
    <li><?php echo $koin . " Koin Rp. " . number_format($nilai, 0, ',', '.') . "<br>"; ?></li>
    <?php endif; ?>
<?php endforeach; ?>
</ul>