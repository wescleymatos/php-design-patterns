<?php

namespace FactoryMethod;

class EmissorSms implements EmissorInterface
{
    public function envia(string $mensagem)
    {
        echo "enviado por sms \n";
        echo $mensagem;
    }
}