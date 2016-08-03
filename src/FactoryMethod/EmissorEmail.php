<?php

namespace FactoryMethod;

class EmissorEmail implements EmissorInterface
{
    public function envia(string $mensagem)
    {
        echo "enviado por email \n";
        echo $mensagem;
    }
}