<?php
function num($a,$b,$c){
    if($a > $b and $c){
        echo $a;
    }elseif($b > $a and $c){
        echo $b ;
    }elseif($c > $a and $b) {
        echo $c;
    }else{
        echo "sonlar teng";
    }
}
num(34,34,35);