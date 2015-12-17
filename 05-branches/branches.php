<?php
print "Enter your age: ";
fscanf(STDIN, "%d\n", $age);

if($age <= 12) {
  $price = 5;
} elseif($age < 21) {
  $price = 8;
} else {
  $price = 10;
}

print $price . "\n";

print "Enter the season: ";
fscanf(STDIN, "%s\n", $season);

switch($season) {
  case "summer":
    print "Go to the beach.\n";
    break;
  case "fall":
    print "Carve a pumpkin.\n";
    break;
  case "winter":
    print "Go skiing.\n";
    break;
  case "spring":
    print "Hope for sun.\n";
    break;
  default:
    print "Not a season.\n";
}
?>
