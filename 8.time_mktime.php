<?php
// time => 現在のUNIXタイムスタンプを取得する time()；
// mktime => 指定日時のUNIXタイムスタンプを取得する
// mktime(時,分,秒,月,日,年)；
$now = time();
$nextweek = time() + (7 * 24 * 60 *60);
echo $now;
echo "\n";
echo $nextweek;

$birthday = mktime(12,0,0,12,15,1986);
echo "\n";
echo $birthday;