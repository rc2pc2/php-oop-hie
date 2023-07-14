<?php

include_once __DIR__ .'/classes/Address.php';
include_once __DIR__ .'/classes/Person.php';

$newAddress = new Address('via Napoli 12', 'Torino', 'TO', '00223', 'Italy');
$gina = new Person('Gina', new DateTime(), $newAddress);
echo $gina->getName();
var_dump($gina);

$johnny = new Person('Johnny', new DateTime(), new Address('via Roma 1', 'Napoli', 'NA', '11223', 'Italy'));
echo $johnny->getName();
// echo $johnny->breathe();
echo $johnny->eat();

var_dump($johnny);