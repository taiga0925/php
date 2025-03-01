<?php

for( $i= 1 ; $i <= 50 ; $i++ ){

    if($i %3 ===0 && $i %5 ===0){
        echo "FizzBuzz"."<br/>";
        $i++;
    }

    if($i %3 === 0){
        echo "Fizz"."<br/>";
        $i++;
    }
    if($i %5 === 0){
        echo "Buzz"."<br/>";
        $i++;
    }
    

    echo $i."<br/>";

} 