<?php 

require_once('Item.php');

class Defesa extends Item
{
    public function __construct($nome) {
        parent::__construct($nome);
        $this->tamanho = 4;
        $this->classe = 'Defesa';
    }
}