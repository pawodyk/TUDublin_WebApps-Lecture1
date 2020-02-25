<?php

require_once __DIR__ . '/../src/myFunctions.php';

$action = 'hello';
// $action = 'age';
// $action = 'rubbish';

switch ($action) {
    case 'hello':
        printHello('Pawel');
        break;
    
    case 'age':
        printNextAge(28);
        break;

    default:
        print 'Unknown action';
        break;
}

?>