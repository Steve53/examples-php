<?php

function moviePrice($age) {
  if($age <= 12) {
    $price = 10;
  }
  else {
    $price = 15;
  }

  return $price;
}

print "Enter your age: ";
fscanf(STDIN, "%d\n", $a);

$p = moviePrice($a);

print $p . "\n";

?>
