<?php

switch( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)  ){

  case "/":
    print "Hello (08-web-hello)";
    break;

  case "/goodbye":
    print "Goodbye (08-web-hello).";
    break;

  case "/info":

    $keys = array_keys($_SERVER);
    foreach($keys as $k) {
      print $k . "=>" . $_SERVER[$k]  . "<br>";
    }

    print "<hr>";

    $keys = array_keys($_REQUEST);
    foreach($keys as $k) {
      print $k . "=>" . $_REQUEST[$k]  . "<br>";
    }

    print "<hr>";

    $keys = array_keys($_ENV);
    foreach($keys as $k) {
      print $k . "=>" . $_ENV[$k]  . "<br>";
    }

    break;

  default:
    print "That page doesn't exist.";
}
 
?>
