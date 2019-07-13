<?php
// date タイムスタンプ値を指定フォーマットで表示する
// date(指定フォーマット,タイムスタンプ値) <= タイムスタンプ値はtime()がデフォルト値に設定されている。
$now = time();
$nextweek = time() + (7 * 24 * 60 *60);
$nowdate = date("Y/m/d",$now);
$nextweekdate = date("Y/m/d",$nextweek);

echo $nowdate;
echo "\n";
echo $nextweekdate;