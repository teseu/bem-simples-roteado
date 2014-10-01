<?php

class ClientePJ {

    private $cnpj;

    private function __construct($nome, $cnpj, $endereco, $telefone, $email, $tipo){

        $this->cnpj = $cnpj;
        $this->nome = parent::__contruct($nome);
        $this->endereco = parent::__construct($endereco);
        $this->telefone = parent::__construct($telefone);
        $this->email = parent::__construct($email);
        $this->tipo = parent::_contruct($tipo);

    }

}

$clientespj = array( array("Casas Espírito Santo", 100934567000122 , 'CNA 05 Bloco A Loja 34', '3456-9876', 'espiritosanto@email.com', '2'),
    array("Ponto Quente", 100937867000123 , 'CLN 412 Bloco B Loja 34', '33479023', 'pontoquente@email.com', '2'),
    array("Lojas Colombinanas", 100939287000166 , 'Quadra 3 Conjunto G Casa 35', '4509-2134', 'colombianas@email.com', '2')
);