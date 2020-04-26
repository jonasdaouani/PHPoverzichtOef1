<?php namespace util;

require_once './Date.php';

// 2. a
//$date = new Date();
//print $date->print();
//echo "\n";
//print $date->printMonth();


// 2.b en exceptions
$date = Date::make(2,122,1996);
print $date->print();
echo "\n";
print $date->printMonth();
$date2=$date->changeDay(14);
echo "\n";
//print $date2->printMonth();