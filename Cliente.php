<?php

class Cliente
{
    protected static $nome;
    protected static $endereco;
    protected static $telefone;
    protected static $email;
    protected static $tipo;

    protected function __construct($nome, $endereco, $telefone, $email, $tipo)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->tipo = $tipo;
    }

}

