<?php

namespace Tulio\Cliente\Tipos;

use \Tulio\Cliente\Utils\Clienteinterface;
use \Tulio\Cliente\Cliente;

//require_once(__DIR__ . '/Clienteinterface.php');
class Clientepf extends Cliente implements Clienteinterface
{

    private $cpf;
    protected $rank;
    protected $enderecoCobranca;

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

    public function getId()
    {
        return $this->cpf;
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
