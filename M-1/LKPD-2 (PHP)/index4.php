<?php 
for ($a = 1; $a <= 2; $a++) {
    for ($b = 1; $b <= 32; $b++) {
        echo "*";
        if ($b % 8 == 0) {
            echo "<br>";
        }
    }
    echo "<br>";
}
?>