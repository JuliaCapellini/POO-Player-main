<?php

class Item
{
    protected string $nome;
    protected int $tamanho;
    protected string $classe;
    
    public function __construct(string $nome) {
        $this->setNome($nome);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getTamanho(): int
    {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void
    {
        $this->tamanho = $tamanho;
    }

    public function getClasse(): string
    {
        return $this->classe;
    }

    public function setClasse(string $classe): void
    {
        $this->classe = $classe;
    }
    
}