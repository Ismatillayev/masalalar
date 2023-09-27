<?php
function num($a,$b){
    if($a > $b){
        echo $a;
    }elseif($b > $a){
        echo $b ;
    }else{
        echo "sonlar teng";
    }
}
num(34,34);