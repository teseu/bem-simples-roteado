<?php

class ClientePJ {

    private $cnpj;

    private function __construct($nome, $cnpj, $endereco, $telefone, $email, $tipo){

        $this->cnpj = $cnpj;
        $this->nome = parent::$nome;
        $this->endereco = parent::$endereco;
        $this->telefone = parent::$telefone;
        $this->email = parent::$email;
        $this->tipo = parent::$tipo;

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

