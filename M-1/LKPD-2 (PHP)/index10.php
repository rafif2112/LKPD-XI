<?php 
    $nama = "Putri";
    $jawaban = ["A", "A", "C", "E", "B", "A", "C", "B", "D", "E"];
    $jawaban_benar = ["A", "D", "C", "C", "B", "A", "E", "B", "A", "E"];

    $benar = 0;
    $salah = 0;

    for ($i = 0; $i < count($jawaban_benar); $i++) {
        if ($jawaban[$i] == $jawaban_benar[$i]) {
            $benar++;
        } else {
            $salah++;
        }
    }

    echo "Nama : " . $nama . "<br>";
    echo "Jumlah Jawaban Benar : <b>" . $benar . "</b><br>";
    echo "Jumlah Jawaban Salah : <b>" . $salah . "</b>";
?>