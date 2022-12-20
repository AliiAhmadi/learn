<?php


require_once "vendor/autoload.php";
$factory = new RandomLib\Factory;


$generator = $factory->getGenerator(new SecurityLib\Strength(SecurityLib\Strength::MEDIUM));
