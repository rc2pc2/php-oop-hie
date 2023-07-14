<?php


class Address{
    public $street;
    public $city;
    public $state;
    public $zipcode;
    public $country;

    function __construct(
        String $street,
        String $city,
        String $state,
        String $zipcode,
        String $country
    ){
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zipcode = $zipcode;
        $this->country = $country;
    }
}

?>