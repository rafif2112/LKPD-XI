<?php 
$number = 90;
$max = 30;
for ($i = 1; $i <= $max; $i++) {
    if ($number % $i == 0) {
        echo 90 . " : " . $i . " = " . $number / $i . "<br>";
    }
}
?>