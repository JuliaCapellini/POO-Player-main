<?php

require_once('Item.php');
require_once('Ataque.php');
require_once('Magia.php');
require_once('Defesa.php');
require_once('Inventario.php');

class Player
{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname) {
        $this->nickname = $nickname;
        $this->nivel = 1;
        $this->inventario = new Inventario();
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void {
        $this->nickname = $nickname;
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void {
        $this->nivel = $nivel;
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }

    public function setInventario(Inventario $inventario): void {
        $this->inventario = $inventario;
    }

    public function coletarItem($item) {
        if ($this->inventario->adicionar($item)) {
            echo "Item {$item->getNome()} adicionado ao inventário do Player {$this->nickname}. <br> ";
        } else {
            echo "Inventário do Player {$this->nickname} não tem espaço para esse item. <br>";
        }
    }

    public function soltarItem($nome) {
        if ($this->inventario->remover($nome)) {
            return true;
        }
    }
    
    public function subirNivel() {
        $this->nivel ++;
        $capacidadeNova = $this->inventario->getCapacidadeMaxima() + ($this->nivel * 3);
        $this->inventario->setCapacidadeMaxima($capacidadeNova);
        echo "Player {$this->nickname} subiu para o nível {$this->nivel}. <br>";
    }
}

// $player1 = new Player('CalangaGameplays');
// $ataque1 = new Ataque("Espada de Ferro");
// $defesa1 = new Defesa("Escudo de Carvalho");
// $magia1 = new Magia("Cajado Cintilante");

// echo "Seu inventário possui {$player1->getInventario()->capacidadeLivre()} espaços livres <br>";

// $player1->coletarItem($ataque1);
// $player1->coletarItem($defesa1);
// $player1->coletarItem($magia1);

// echo "Seu inventário possui {$player1->getInventario()->capacidadeLivre()} espaços livres <br>";

// $player1->subirNivel();

// echo "Seu inventário possui {$player1->getInventario()->capacidadeLivre()} espaços livres <br>";

// $player1->soltarItem('Cajado Cintilante');

// echo "Seu inventário possui {$player1->getInventario()->capacidadeLivre()} espaços livres <br>";










