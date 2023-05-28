<?php
 echo "Hello World";

// PHP ARRAY ARE ACTUALLY HASHMAPS - It is actually an ordered map
$mixedArray = [];
$mixedArray[0] = 200;
$mixedArray['name'] = "Mixed array";
$mixedArray[1] = 10.65;
$mixedArray[2] = ['I', 'am', 'another', 'array'];

/*Types of Arrays
- Numeric array
- Associative array
- Multidimensional array
*/

//Numeric Array-When array indexes are only numbers. This is the type array we use by default. Auto-generated indexes.
$array = [10,20,30,40,50];
$array[] = 70;
$array[] = 80;
$arraySize = count($array);
for($i = 0;$i<$arraySize;$i++) {
    echo "Position ".$i." holds the value ".$array[$i]."\n";
}

//Multidimensional array - An array inside another array.
$players = [];
$players[] = ["Name" => "Ronaldo", "Age" => 31, "Country" => "Portugal", "Team"
=> "Real Madrid"];
$players[] = ["Name" => "Messi", "Age" => 27, "Country" => "Argentina", "Team"
=> "Barcelona"];
$players[] = ["Name" => "Neymar", "Age" => 24, "Country" => "Brazil", "Team" =>
    "Barcelona"];
$players[] = ["Name" => "Rooney", "Age" => 30, "Country" => "England", "Team" =>
    "Man United"];
foreach($players as $index => $playerInfo) {
    echo "Info of player # ".($index+1)."\n";
    foreach($playerInfo as $key => $value) {
        echo $key.": ".$value."\n";
    }
    echo "\n";
}

//Array Built-in functionalities -
/*array_intersect, array_merge, array_diff, array_push,
array_pop, prev, next, current, end, */
