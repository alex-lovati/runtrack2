<?php

for($i=2; $i<=1000; $i++){
    for($j = 1;$j <= $i; $j++){
        $x=0;
        if($i % $j == 0){
            $x++; }
    }
    if($x==2){
        echo $i; }
}

?>