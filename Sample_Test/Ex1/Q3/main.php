<?php

require_once 'Module.php';

$m = new Module();

print "Module: $m" . "\n";

$m->setTitle("test");
$m->setCredits(10);
$m->setTitle(20);

print "Module: $m" . "\n";

print $m->getTitle() . "\n";
print $m->getCredits() . "\n";
print $m->getYear() . "\n";