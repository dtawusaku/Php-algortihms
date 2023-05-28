<?php
echo "Hello World";

$t = "3"."5";
$students = array('Bisola','Funke','Folashade');
var_dump($students);

unset($students[1]);

printf($t);

$_office_hours = array(	"Monday" => "2:45 PM to 3:45 PM",	"Tuesday" => "2:15 PM to 4:15 PM",	"Wednesday" => "2:45 PM to 3:45 PM",	"Thursday" => "2:15 PM to 4:15 PM",	"Friday" => "By appointment");

foreach ($_office_hours as $day => $time){
    echo "From ". $day . " the time is ". $time."\n";
}

var_dump(array_key_exists('Friday',$_office_hours));

$new_array = range("a", "e");
$new_array2 = range(1, 10);
if(in_array(4, $new_array2))print "4". "is a valid user.";

$merge = array_merge($new_array2,$new_array);

print_r($merge);
print_r(array_reverse($merge));
print_r ($new_array2);