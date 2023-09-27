<?php
function num($x){
    for($i = 1; $i < 10; $i++){
       if($x < 50){
       echo $i % 3 ==0 ;
    }  else{
        echo $i % 5 and 8 == 0 . "<br>";
    }   
    }

}
num(45);