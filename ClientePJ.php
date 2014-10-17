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

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

}

$clientespj = array( array("Casas Espírito Santo", 100934567000122 , 'CNA 05 Bloco A Loja 34', '3456-9876', 'espiritosanto@email.com', '2'),
    array("Ponto Quente", 100937867000123 , 'CLN 412 Bloco B Loja 34', '33479023', 'pontoquente@email.com', '2'),
    array("Lojas Colombinanas", 100939287000166 , 'Quadra 3 Conjunto G Casa 35', '4509-2134', 'colombianas@email.com', '2')
);

foreach ($clientespj as $cliente ) {
        $num = $i++;
    $cliente = new ClientePF($cliente[0], $cliente[1], $cliente[2], $cliente[3], $cliente[4], $cliente[5]);
}