<?php

require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Magia.php');
require_once('./class/Defesa.php');
require_once('./class/Inventario.php');
require_once('./class/Player.php');

$player1 = new Player('JujuGameplays');
$player2 = new Player('GabiGameplays');

$ataque1 = new Ataque("Espada de Ferro");
$ataque2 = new Ataque("Lança de Cobre");
$ataque3 = new Ataque("Adaga de Irídio");
$ataque4 = new Ataque("Arco de Bétula");

$defesa1 = new Defesa("Escurdo de Carvalho");
$defesa2 = new Defesa("Armadura de Platina");

$magia1 = new Magia("Cajado Cintilante");
$magia2 = new Magia("Pó de Fada");

$player1->coletarItem($ataque1);
$player1->coletarItem($defesa1);
$player1->coletarItem($magia1);

echo "<br>";

echo "Seu inventário possui {$player1->getInventario()->capacidadeLivre()} espaços livres <br>";

echo "<br>";

$player2->coletarItem($ataque2);
$player2->coletarItem($defesa2);
$player2->coletarItem($magia2);

echo "<br>";

echo "Seu inventário possui {$player2->getInventario()->capacidadeLivre()} espaços livres <br>";

echo "<br>";

$player2->coletarItem($ataque3);
$player2->coletarItem($ataque4);

echo "<br>";

echo "Seu inventário possui {$player2->getInventario()->capacidadeLivre()} espaços livres <br>";

echo "<br>";

$player2->subirNivel();

echo "<br>";

echo "Seu inventário possui {$player2->getInventario()->capacidadeLivre()} espaços livres <br>";