<?php
    $aplikasi[1] = 'gtAkademik';
    $aplikasi[2] = 'gtFinansi';
    $aplikasi[3] = 'gtPerizinan';
    $aplikasi[4] = 'eCampuz';
    $aplikasi[5] = 'e0viz';

    $n = count($aplikasi);
    $a = 1;
    while ($a <= $n) {
        echo $aplikasi[$a];
        echo "<br>";
        $a++;
    }
?>