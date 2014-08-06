<?php

class cliente {
    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;
    public $email;

    public function __construct($nome, $cpf, $endereco, $telefone, $email)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
    }

}

