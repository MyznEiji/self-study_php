<?php
$data = ["hoge", "fuga", "piyo"];
foreach ($data as $value) {
  print "my name is {$value} <br />";
}

$data = ["hoge" => "a", "fuga" => "b", "piyo" => "a"];
foreach ($data as $key => $value){
  print  "{$key} : {$value}<br />";
}



$data = ['hoge','fuga', 'piyo'];
foreach ($data as &$value) {
  $value = "new" . $value;
}

print_r($data);

