<?php

class ClientePF extends Cliente
{

    private $cpf;

    public function __construct($nome, $cpf, $endereco, $telefone, $email, $tipo){

        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->tipo = $tipo;

    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf()
    {
        return $this->cpf;
    }



}
