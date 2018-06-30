<?php
require_once('ClassA.php');

class ClassB extends ClassA {
    private $field2;
    
    function __construct() {
        echo "a new ClassB object is created\n";
    }
    
    function __destruct() {
        echo "an object of ClassB is destroyed\n";
    }
    
    function setField2($value) {
        $this->field2 = $value;
    }
    
    function getField2() {
        return $this->field2;
    }
    
    //override
    function toString() {
        return "field1: " . $this->getField1() . "\tfield2: " . $this->field2;
    }
}
?>
