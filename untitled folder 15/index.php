<?php
function num($a){
    if($a > 0){
        echo $a+1;
    }elseif($a < 0){
        echo $a + 2;
    } elseif($a === 0) {
        echo 10;
    }
}
num(0);