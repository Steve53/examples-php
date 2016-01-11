<?php

switch( parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)  ){

  case "/":
    print "Hello (09-web-templates)";
    break;

  case "/cars":
    $cars = array("ford", "bmw", "honda");
    include "template_cars.html";
    break;

  case "/bikes":
    $bikes = array("fuji", "diamondback", "trek", "bianchi");
    include "template_bikes.html";
    break;

  default:
    print "That page doesn't exist.";
}
 
?>
