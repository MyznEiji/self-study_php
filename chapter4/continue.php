<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
  if ($i % 2 !== 0) {continue;}
  $sum += $i;
}

print "合計値は{$sum}です。";



$sum = 0;
for ($i = 1; $i < 10; $i++) {
  print "<br />";
  for ($j = 1; $j < 10; $j++) {
    $sum = $i * $j;
    if ($sum > 41) {break;}
    print $sum . "&nbsp;";
  }
}
