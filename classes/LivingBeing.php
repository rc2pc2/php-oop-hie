<?php

class LivingBeing{
    public $dateOfBirth;

    function __construct( DateTime $dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getAge(){
        return intval($this->dateOfBirth->diff(new DateTime('now'))->format('%y'));
    }

    public function breathe(){
        return ' breathing...';
    }

    protected function eat(){
        return ' eating...';
    }

    public function sleep(){
        return ' zzzzz...';
    }
}