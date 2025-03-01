<?php

function text($score1,$score2,$score3)
{
    $Value =$score1+$score2+$score3;

    if($Value > 210){
        echo "合計点は".$Value."なので合格です";
    }else{
        echo "合計点は".$Value."なので不合格です";
    }
    
    return $Value;
}

$total =text(100,30,80);



