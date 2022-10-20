<?php
$n = 10;
// $sum = 0;
function sum_row($n) {
    global $sum;
    for ($i=0; $i < $n; $i++) { 
        echo $i * $i;
        echo "</br>\n";
        $sum += $i * $i;
    }
    return $sum;
}
sum_row($n);
echo "$sum";