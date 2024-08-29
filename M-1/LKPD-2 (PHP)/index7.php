<?php
    $awal = "<b>Kalimat Awal : </b>";
    echo $awal;
    
    $text2 = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat tempora ipsum dolor nesciunt suscipit autem ipsa, delectus, vel dolore eum dolorem vitae soluta, alias aspernatur temporibus expedita sint accusamus eveniet?';

    $length = strlen($text2);
    if ($length > 50) {
        echo substr($text2, 0, 50) . '...';
    }
?>