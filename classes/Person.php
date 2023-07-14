<?php
include_once __DIR__ . '/LivingBeing.php';

class Person extends LivingBeing {
    public $name;
    public $address;
    public static $staticProperty = 'VERSION 1.0';

    function __construct(String $_name, DateTime $_dateOfBirth, Address $_address){
        parent::__construct($_dateOfBirth);
        $this->name = $_name;
        $this->address = $_address;
    }

    public function getName(){
        return $this->name;
    }

    public function eat(){
        return parent::eat() . ' crunch, crunch, crunch...';
    }
}