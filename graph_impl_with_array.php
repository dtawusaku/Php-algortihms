<?php
//Sample way of implementing a graph using an array. It wasn't used
$graph = []; //Two dimensional array
$nodes = ['A','B','C','D','E']; //nodes


//Set up the two-dimensional array with nodes available.
foreach($nodes as $xNode){
    foreach($nodes as $yNode){
        $graph[$xNode][$yNode] = 0;
    }
}

//Prints $graph
foreach($nodes as $xNode){
    foreach($nodes as $yNode){
        echo $graph[$xNode][$yNode]  . "\t";
    }
    echo "\n";
}

///Enter for particular nodes
$graph["A"]["A"] = 1;
$graph["B"]["B"] = 1;
$graph["C"]["C"] = 1;
$graph["D"]["D"] = 1;
$graph["E"]["E"] = 1;

echo "\n";

//Print
foreach($nodes as $xNode){
    foreach($nodes as $yNode){
        echo $graph[$xNode][$yNode]  . "\t";
    }
    echo "\n";
}
