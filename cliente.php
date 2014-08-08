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

$clientes = array( array("Alberto Luis", 98745632101 , 'QNL 05 Casa 34', '3456-9876', 'alberto@email.com'),
    array("Carlos Caetano", 98745632102 , 'QE 09 Conjunto A Casa 34', '35683467', 'caetano@email.com'),
    array("Virgínia Almeida", 98745632103 , 'SQS 214 Bloco A Apartamento 305', '42173245', 'virgina@email.com'),
    array("Tadeu Oscar", 98745632104 , 'SQSW 301 Bloco G Apartamento 201', '23341043', 'tadeu@email.com'),
    array("Frederico João", 98745632105 , 'SHIS QI 05 Conjunto 03 Casa 05', '23460984', 'fred@email.com'),
    array("Davi Miranda", 98745632106 , 'SQN 314 Bloco A Apartamento 406', '33479823', 'davi@email.com'),
    array("Felipe Augusto", 98745632107 , 'CLN 412 Bloco B Apartamento 101', '33479023', 'felipe@email.com'),
    array("Helena Renata", 98745632108 , 'Condominio Mansões Entrelagos Quadra 2 Conjunto K Casa 23', '34087631', 'helena@email.com'),
    array("Natália Farias", 98745632109 , 'SHIN QL 08 Coinjunto 01 Casa 03', '3368-9029', 'natalia@email.com'),
    array("Susana Rafael", 98745632110 , 'Quadra 3 Conjunto G Casa 35', '4509-2134', 'susana@email.com')
);