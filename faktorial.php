<?php
function faktorial($vstup) {
    $temp = 1;
    for ($i = 1; $i <= $vstup ; $i++){
        $temp = $temp*$i;
    }
    return $temp;
}

echo faktorial(5);
