#!/usr/bin/php
<?php
#a global variable
$globalvar = 5;

#double the param, global variable's value is NOT modified, no result is returned
function DoubleTheParamNoResult($val) {
    echo "Param: $val\n";
    $val *= 2;
    echo "Double the param: $val\n";
}

#double the param, global variable's value is NOT modified, result is doubled value
function DoubleTheParam($val) {
    $val *= 2;
    return $val;
}

#modify globa variables
function DoubleGlobals() {
    global $globalvar, $val;
    $globalvar *= 2;
    $val *= 2;
}

//modify params passed by reference
function DoubleByRef(&$val) {
    $val *= 2;
}

#main script
#another global variable
$val = 3;
echo "Initial value: $val\n";
echo "Result of DoubleTheParamNoResult: " . DoubleTheParamNoResult($val) . "\n";
echo "Value after function call: $val\n";

echo "Function result: " . DoubleTheParam($val) . "\n";
echo "Value after function call: $val\n";

#global variables
echo "Initial value of globalvar: $globalvar\n";
echo "Initial value of val: $val\n";
DoubleGlobals();
echo "Value of globalvar after function call: $globalvar\n";
echo "Value of val after function call: $val\n";

//ByRef params
DoubleByRef($globalvar);
echo "Value of globalvar after function call: $globalvar\n";
?>
