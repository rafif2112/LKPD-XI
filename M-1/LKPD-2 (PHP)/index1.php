<?php 
    $text1 = "Selamat Ulang Tahun yang ke-17!";
    echo "<h2>Teks : " . $text1 . "</h2>";

    if (preg_match_all('/[\'^£$%&*()}{@#~?><>!,|=_+¬-]/', $text1, $simbol)) {
        echo "Karakter yang terdapat pada kalimat: " . implode(", ", $simbol[0]);
    } else {
        echo "Tidak terdapat simbol pada kalimat";
    }
?>