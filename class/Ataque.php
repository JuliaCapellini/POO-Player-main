<?php 

require_once('Item.php');

class Ataque extends Item
{
    public function __construct($nome) {
        parent::__construct($nome);
        $this->tamanho = 7;
        $this->classe = 'Ataque';
    }
}

