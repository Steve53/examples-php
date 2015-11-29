<?php

$name = "Steve";
$age = 62;
$dates = array("March 28", "March 30", "April 4");
$people = array("Steve"=>"63", "Nick"=>23); 
$name = "Bob";

echo $name, " is ", $age, "\n";
print $name . " is " . $age . "\n";

echo $dates[0], " ", $dates[2], "\n";

echo $people["Nick"], "\n";

echo count($dates), "\n";
echo count($people), "\n";

?>
