<?php
// array_merge => 指定した配列要素を連結した結果を返す
// array_merge(連結対象の配列要素1,連結対象の配列要素2);
$arr1 = array(1,2,3,4,5);
$arr2 = array(6,7,8,9,10);
$result = array_merge($arr1,$arr2);
print_r($result);