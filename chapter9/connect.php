<?php

function getDb(){
  $dsn = 'mysql:dbname=selfphp; host=localhost; charset=utf8';
  $usr = 'root';
  $passwd = '';
  
  $db = new PDO($dsn, $usr, $passwd);
  return $db;
}
