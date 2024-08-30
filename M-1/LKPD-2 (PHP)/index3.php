<?php 
$number = 90;
for ($i = 1; $i <= 30; $i++) {
    if ($number % $i == 0) {
        echo 90 . " : " . $i . " = " . $number / $i . "<br>";
    }
}
?>