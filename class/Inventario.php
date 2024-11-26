<?php

require_once('Item.php');
require_once('Ataque.php');
require_once('Magia.php');
require_once('Defesa.php');

class Inventario
{
    private int $capacidadeMaxima;
    private array $itens;

    public function __construct() {
        $this->capacidadeMaxima = 20;
        $this->itens = [];
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function getItens(): array {
        return $this->itens;
    }

    public function setItens(array $itens): void {
        $this->itens = $itens;
    }

    public function adicionar($item) {
        if ($item->getTamanho() <= $this->capacidadeLivre()) {
            $this->itens[] = $item;
            return true;
        }
    }

    public function remover($nome) {
        foreach ($this->itens as $key => $item) {
            if ($item->getNome() == $nome) {
                unset($this->itens[$key]);
                echo "Item {$item->getNome()} removido do seu inventário. <br>";
                return true;
            }
        }
    }

    public function capacidadeLivre() {
        $capacidadeLivre = $this->capacidadeMaxima;
        foreach ($this->itens as $item) {
            $capacidadeLivre -= $item->getTamanho();
        }
        return $capacidadeLivre;
    }
}

// $inventario1 = new Inventario();
// $ataque1 = new Ataque("Espada de Ferro");
// $defesa1 = new Defesa("Escudo de Carvalho");
// $magia1 = new Magia("Cajado Cintilante");
// echo "Seu inventário possui {$inventario1->capacidadeLivre()} espaços livres <br>";
// if ($inventario1->adicionar($ataque1)) {
//     echo "Item {$ataque1->getNome()} adicionado com sucesso no seu inventário <br>";
//     } else {
//     echo "Item {$ataque1->getNome()} não adicionado <br>";
// };
// echo "Seu inventário possui {$inventario1->capacidadeLivre()} espaços livres <br>";
// if ($inventario1->adicionar($magia1)) {
//     echo "Item {$magia1->getNome()} adicionado com sucesso no seu inventário <br>";
//     } else {
//     echo "Item {$magia1->getNome()} não adicionado <br>";
// };
// echo "Seu inventário possui {$inventario1->capacidadeLivre()} espaços livres <br>";
// if ($inventario1->adicionar($defesa1)) {
//     echo "Item {$defesa1->getNome()} adicionado com sucesso no seu inventário <br>";
//     } else {
//     echo "Item {$defesa1->getNome()} não adicionado <br>";
// };
// echo "Seu inventário possui {$inventario1->capacidadeLivre()} espaços livres <br>";
// $inventario1->remover("Escudo de Carvalho");
// echo "Seu inventário possui {$inventario1->capacidadeLivre()} espaços livres <br>";
// $ataque2 = new Ataque("Machado de Ouro");
// if ($inventario1->adicionar($ataque2)) {
//     echo "Item {$ataque2->getNome()} adicionado com sucesso no seu inventário <br>";
//     } else {
//     echo "Item {$ataque2->getNome()} não adicionado <br>";
// };
// echo "Seu inventário possui {$inventario1->capacidadeLivre()} espaços livres <br>";
// $defesa2 = new Defesa("Armadura de Malha");
// if ($inventario1->adicionar($defesa2)) {
//     echo "Item {$defesa2->getNome()} adicionado com sucesso no seu inventário <br>";
//     } else {
//     echo "Item {$defesa2->getNome()} não adicionado <br>";
// };
// echo "Seu inventário possui {$inventario1->capacidadeLivre()} espaços livres <br>";
// $ataque3 = new Ataque("Adaga de Irídio");
// if ($inventario1->adicionar($ataque3)) {
//     echo "Item {$ataque3->getNome()} adicionado com sucesso no seu inventário <br>";
//     } else {
//     echo "Item {$ataque3->getNome()} não adicionado <br>";
// };
// echo "Seu inventário possui {$inventario1->capacidadeLivre()} espaços livres <br>";

