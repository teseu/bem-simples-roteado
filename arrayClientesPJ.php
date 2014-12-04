<?php

$pj = array( array("Casas Espírito Santo", 100934567000122 , 'CNA 05 Bloco A Loja 34', '3456-9876', 'espiritosanto@email.com', '2'),
    array("Ponto Quente", 100937867000123 , 'CLN 412 Bloco B Loja 34', '33479023', 'pontoquente@email.com', '2'),
    array("Lojas Colombinanas", 100939287000166 , 'Quadra 3 Conjunto G Casa 35', '4509-2134', 'colombianas@email.com', '2')
);

$i = 1;
$clientespj = array();

foreach ($pj as $cliente ) {
    $num = $i++;
    $cliente = new ClientePJ($cliente[0], $cliente[1], $cliente[2], $cliente[3], $cliente[4], $cliente[5]);
     array_push($clientespj, $cliente);
}