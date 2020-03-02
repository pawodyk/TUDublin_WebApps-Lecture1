<?php

function printHello($name)
{
    print "Hello $name";
}

function printNextAge($age)
{
    if (getType($age) == 'integer') {
        print "you are $age years old";
    } else {
        print "invalid value : $age";
    }
}

