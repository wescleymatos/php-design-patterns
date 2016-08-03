<?php

namespace FactoryMethod;

use FactoryMethod\EmissorEmail;
use FactoryMethod\EmissorFax;
use FactoryMethod\EmissorSms;

class EmissorFactory
{
    public static function create(string $emissor)
    {
        switch ($emissor) {
            case 'sms':
                return new EmissorSms();
                break;
            
            case 'email':
                return new EmissorEmail();
                break;
            
            case 'fax':
                return new EmissorFax();
                break;

            default:
                # code...
                break;
        }
    }
}