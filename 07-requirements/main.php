<?php

require "./vendor/nubs/vectorix/src/Vector.php";
use \Nubs\Vectorix\Vector;

$v = new Vector([2, 5]);

$ary= $v->components();

print $ary[0] . "  " . $ary[1] . "\n";

$w = $v->multiplyByScalar(3);

$ary = $w->components();

print $ary[0] . "  " . $ary[1] . "\n";

?>
