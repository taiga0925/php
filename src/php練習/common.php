<?php

for($i=1; $i <=4; $i++){
    for($a=3 ; $a >=$i ; $a--){
        echo "*";
    }
    for($b=1; $b <$i*2; $b++){
        echo $b;
    }
    echo "</br>";
}