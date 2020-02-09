<?php

require_once 'Module.php';

$m1 = new Module();
$m2 = new Module();

$m1->setTitle("OOAD");
$m1->setCredits(5);
$m1->setYear(2);

$m2->setTitle("Intro Programming");
$m2->setCredits(10);
$m2->setYear(1);

print "$m1" . "\n";
print "$m2" . "\n";
