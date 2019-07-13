<?php
function multiarray($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}

echo multiarray(array(1,3,5,7,9));