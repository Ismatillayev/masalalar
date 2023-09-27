<?php
function tub($a,$b){
    for($i = $a;$i<$b;$i++){
       if($i % $i and 1 == 0){
        echo $i;
       }
    }
}
tub(1,10);