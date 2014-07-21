<?php

$config = array(
    'type' => 'mysql',
    'host' => 'localhost',
    'dbname' => 'pdo',
    'user' => 'root'
);

try {
    $conexao = new \PDO($config['type'].":host=".$config['host'].";dbname=".$config['dbname'],$config['user'],"");
}
catch(\PDOException $erro) {
    die("Código do erro: ".$erro->getCode().": ".$erro->getMessage());
}
