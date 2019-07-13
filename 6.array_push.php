<?php
// array_push => 配列の末尾に要素を追加する
// array_push(操作対象の配列,"追加する要素");
$fruits = array("りんご","ぶどう","いちご");
array_push($fruits,"メロン","レモン");
print_r($fruits);