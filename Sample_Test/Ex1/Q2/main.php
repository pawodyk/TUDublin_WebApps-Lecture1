<?php
require_once 'Book.php';

$s = new Book(30, "Joe Doe");

print $s->getNumPages();
print $s->author;


