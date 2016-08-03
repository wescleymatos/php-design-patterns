<?php

namespace FactoryMethod;

class EmissorFax implements EmissorInterface
{
    public function envia(string $mensagem)
    {
        echo "enviado por fax \n";
        echo $mensagem;
    }
}