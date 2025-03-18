<?php

require __DIR__ . '/vendor/autoload.php';

$dev = new Ramday\Phpstan\Developer("Stan", 5, "PHP");

echo $dev->getName() . " has " . $dev->getExperience() . " years of experience with " . $dev->getSkills() . PHP_EOL;
