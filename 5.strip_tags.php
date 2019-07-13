<?php
// strip_tags => 指定した文字列からhtmlタグおよびphpタグを取り除く
// strip_tags(指定した文字列,'取り除かないタグ') <= 第２引数で取り除かないタグを指定できる
$str = "<p>テスト<br>テスト</p>";
echo strip_tags($str,"<p>");