#!/usr/bin/php
<?php
require_once('ClassA.php');
require_once('ClassB.php');

function updateField1($obj) {
    $obj->setField1("updated!");
}

$objA = new ClassA();
$objA->setField1("A.field1");
echo $objA->getField1() . "\n";
echo $objA->toString() . "\n";
echo "---------------------------\n";
$objB = new ClassB();
$objB->setField1("B.field1");
$objB->setField2("B.field2");
echo $objB->getField1() . "\n";
echo $objB->getField2() . "\n";
echo $objB->toString() . "\n";

updateField1($objB);
echo $objB->toString() . "\n";

echo "---------------------------\n";

$objC = $objA; //assign, two pointers, one object
$objC->setField1("C.field1");

$objD = &$objB; //reference, one poiner, one object
$objD->setField1("D.field1");

var_dump($objA);
var_dump($objB);
var_dump($objC);
var_dump($objD);

$objA = NULL; //destroy objA, objC remains, destructor is not invoked
$objB = NULL; //both objB and objD are destroyed, destructor is caled once

var_dump($objA); //NULL
var_dump($objB); //NULL
var_dump($objC); //objC
var_dump($objD); //NULL
?>
