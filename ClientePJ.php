<?php
require_once(__DIR__.'/ClienteInterface.php');
class ClientePJ extends Cliente implements ClienteInterface
{

    private $cnpj;
    protected $rank;
    protected $enderecoCobranca;

    public  function __construct($nome, $cnpj, $endereco, $telefone, $email, $tipo){

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

    public function getId()
    {
        return $this->cnpj;
    }

    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

}

