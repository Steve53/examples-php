<?php

$balance = 500;

for($year = 0; $year <= 10; $year++) {
  $balance = $balance*1.08;
  print $year . "  " . $balance . "\n";
}

$prices = array(5, 6, 3, 20, 18, 150);

foreach($prices as $p) {
  print $p . "\n";
}

foreach($prices as &$p) {
  $p*= 1.2;
}
print_r($prices);

$balance = 1000;
while($balance < 2000) {
  print $balance . "\n";
  $balance *= 1.09;
}

?>
