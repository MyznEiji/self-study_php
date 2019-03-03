<?php

$hoge = [
  'hoge' => "ほげ",
  'fuga' => "ふが",
  "piyo" => "ぴよ",
];

$name = [
  "eiji" => "miyazono",
  "tanaka" => "koji",
  "kimura" => "takuya",
];

$result = $hoge + $name;
print_r($result);

$ary1 = [1,3,5];
$ary2 = [2,3,6];
$result = $ary1 + $ary2;
print_r($result);
