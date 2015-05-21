<?php

namespace Tulio\Cliente\Tipos;

    //define('CLASS_DIR', 'src/');

    spl_autoload_register(function($class) {
        $className = CLASS_DIR . str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
        include($className);
    });
//    set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
//    spl_autoload_register();
    //use Tulio\Cliente\Tipos\ClientePF;

$pf = array( array("Alberto Luis", '98745632101' , 'QNL 05 Casa 34', '3456-9876', 'alberto@email.com', '1'),
    array("Carlos Caetano", '98745632102' , 'QE 09 Conjunto A Casa 34', '35683467', 'caetano@email.com', '1'),
    array("Virgínia Almeida", '98745632103' , 'SQS 214 Bloco A Apartamento 305', '42173245', 'virgina@email.com', '1'),
    array("Tadeu Oscar", '98745632104' , 'SQSW 301 Bloco G Apartamento 201', '23341043', 'tadeu@email.com', '1'),
    array("Frederico João", '98745632105' , 'SHIS QI 05 Conjunto 03 Casa 05', '23460984', 'fred@email.com', '1'),
    array("Davi Miranda", '98745632106' , 'SQN 314 Bloco A Apartamento 406', '33479823', 'davi@email.com', '1'),
    array("Felipe Augusto", '98745632107' , 'CLN 412 Bloco B Apartamento 101', '33479023', 'felipe@email.com', '1'),
    array("Helena Renata", '98745632108' , 'Condominio Mansões Entrelagos Quadra 2 Conjunto K Casa 23', '34087631', 'helena@email.com', '1'),
    array("Natália Farias", '98745632109' , 'SHIN QL 08 Coinjunto 01 Casa 03', '3368-9029', 'natalia@email.com', '1'),
    array("Susana Ramos", '98745632110' , 'Quadra 3 Conjunto G Casa 35', '4509-2134', 'susana@email.com', '1')
);

//$i = 1;
$clientespf = array();

foreach ($pf as $cliente ) {
        //$num = $i++;
    $cliente = new Clientepf($cliente[0], $cliente[1], $cliente[2], $cliente[3], $cliente[4], $cliente[5]);
    array_push($clientespf, $cliente);
}