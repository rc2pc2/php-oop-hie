<?php
include_once __DIR__ . '/LivingBeing.php';

class Person extends LivingBeing {
    protected $name;
    protected $address;
    protected $isAdult;
    public static $staticProperty = 'VERSION 1.0';

    function __construct(String $_name, DateTime $_dateOfBirth, Address $_address){
        parent::__construct($_dateOfBirth);
        $this->setName($_name);
        $this->setAddress($_address);
        $this->setAdult();
    }

    private function setName(String $name){
        $this->name = $name;
    }

    private function setAddress(Address $address){
        $this->address = $address;
    }

    private function setAdult(){
        if ( $this->getAge() >= 18){
            $this->isAdult = true;
        } else {
            $this->isAdult = false;
        }
    }

    public function getName(){
        return $this->name;
    }

    public function getAddress(){
        return $this->address;
    }

    protected function eat(){
        return parent::eat() . ' crunch, crunch, crunch...';
    }
}