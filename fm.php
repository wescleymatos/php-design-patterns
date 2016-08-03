<?php

include 'bootstrap.php';

use FactoryMethod\EmissorFactory;

$sms = EmissorFactory::create('sms');
$sms->envia("teste factory method \n");

$email = EmissorFactory::create('email');
$email->envia("teste factory method \n");

$fax = EmissorFactory::create('fax');
$fax->envia("teste factory method \n");