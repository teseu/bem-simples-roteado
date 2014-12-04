<?php

class ClientePJ extends Cliente
{

    private $cnpj;

    private function __construct($nome, $cnpj, $endereco, $telefone, $email, $tipo){

        $this->cnpj = $cnpj;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->tipo = $tipo;

    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }



}

