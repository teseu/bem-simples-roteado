<?php

try {
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","");
}
catch(\PDOException $erro) {
    die("Código do erro: ".$erro->getCode().": ".$erro->getMessage());
}




