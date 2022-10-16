<?php
$n = 10;
function sum_row($n) {
    for ($i=0; $i < $n; $i++) { 
        echo $i * $i;
        echo "</br>\n";
    }
}
sum_row($n);