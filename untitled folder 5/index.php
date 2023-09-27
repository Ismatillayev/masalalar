<?php
function num($a){
    for($i=2 ; $i<=10; $i++){
        echo floor($i / $a) . "<br>";
    }
}
num(5);