<?php
class ClassA {
    private $field1;
    
    function __construct() {
        echo "a new ClassA object is created\n";
    }
    
    function __destruct() {
        echo "an object of ClassA is destroyed\n";
    }
    
    function setField1($value) {
        $this->field1 = $value;
    }
    
    function getField1() {
        return $this->field1;
    }
    
    function toString() {
        $local = $this->field1;
        return "field1: $local";
    }
}
?>
