<?php
$data01 = [1,2,3];
$data02 = [1,5];
var_dump($data01 < $data02);


$data01 = [1,2,3];
$data02 = [1,5,1];
var_dump($data01 < $data02);



$data01 = [1,2,3];
$data02 = [1,2,"3"];
var_dump($data01 == $data02);
var_dump($data01 === $data02);


