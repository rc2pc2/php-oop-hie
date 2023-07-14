<?php

class LivingBeing{
    public $dateOfBirth;

    function __construct( DateTime $dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getAge(){
        return $this->dateOfBirth->diff(new DateTime('now'))->format('%y years, %m months');
    }

    public function breathe(){
        return ' breathing...';
    }

    public function eat(){
        return ' eating...';
    }

    public function sleep(){
        return ' zzzzz...';
    }
}