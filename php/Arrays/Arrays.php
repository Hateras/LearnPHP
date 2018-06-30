#!/usr/bin/php
<?php

function initArray() {
    $newArray = array();
    for ($i = 0; $i < 5; $i++) {
        $newArray[] = $i;
    }
    return $newArray;
}

function listArray($theArray) {
    echo "--------------------------------------------------\n";
    $count = count($theArray);
    echo "Count: $count\n";
    foreach($theArray as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value . "\n";
    }
}

function ModifyLocaly($theArray) {
    $theArray[] = "modified localy";
}

function ModifyReference(&$theArray) {
    $theArray[] = "modified by ref";
}

function ModifyAndReturn($theArray) {
    $theArray[] = "modified localy";
    return $theArray;
}

//call back for array_walk
function WalkCallback(&$value, $key, $param1) {
    $value = "$param1-$value";
    echo "$key : $value\n";
}

//main script

//new array
$anArray = initArray();
listArray($anArray);

//add
$anArray[] = 42;
listArray($anArray);

//modify inside function
ModifyLocaly($anArray);
listArray($anArray);

ModifyReference($anArray);
listArray($anArray);

$anArray = ModifyAndReturn($anArray);
listArray($anArray);

//element access
echo "First element: " . $anArray[0] . "\n";
$elementsCount = count($anArray);
echo "Last element: " . $anArray[$elementsCount - 1] . "\n";

//mixed key data types
$anArray["7"] = "ops"; //implicit conversion!! SUX!
listArray($anArray);
$elementsCount = count($anArray);
echo "Last element: " . $anArray[$elementsCount - 1] . "\n";

$anArray["7k"] = "ops2"; //will raise an error when accessed by $anArray[elements_count - 1]
listArray($anArray);
$elementsCount = count($anArray);
//echo "Last element: " . $anArray[$elementsCount - 1] . "\n"; //error, key is not an number
//use array_keys to get the last key
$anArrayKeys = array_keys($anArray);
echo "Last element: " . $anArray[$anArrayKeys[$elementsCount - 1]] . "\n";
 
 //array_walk
 array_walk($anArray, 'WalkCallback', 'param1');
 listArray($anArray);
?>
