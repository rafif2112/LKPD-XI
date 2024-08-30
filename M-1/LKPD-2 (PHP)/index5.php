<?php 
    $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
    $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

    $bil_merge = array_merge($bil1, $bil2);
    $bil_unique = array_unique($bil_merge);
    rsort($bil_unique);

    echo "Hasil : " . implode(", ", $bil_unique);
?>