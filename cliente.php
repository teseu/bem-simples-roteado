<?php

class cliente
{
    protected $nome;
    protected $endereco;
    protected $telefone;
    protected $email;
    protected $tipo;

    protected function __construct($nome, $cpf, $endereco, $telefone, $email, $tipo)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->tipo = $tipo;
    }

}

