<?php
try {
    $dbh = new \PDO("mysql:host=localhost", "root", "");

    $dbh->exec("CREATE DATABASE IF NOT EXISTS `pdo`")
    or die(print_r($dbh->errorInfo(), true));

} catch (\PDOException $e) {
    die("DB ERROR: ". $e->getMessage());
}