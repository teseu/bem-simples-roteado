<?php

//require_once("conexao.php");

/*$cria_db = "CREATE DATABASE 'pdo' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
$stmt = $conexao->prepare($cria_db);
$stmt->execute();*/


require_once("cria.php");
require_once("conexao.php");

$verifica_tabela = "DROP TABLE IF EXISTS `produtos`";
$stmt = $conexao->prepare($verifica_tabela);
$stmt->execute();

$cria_tabela = "CREATE TABLE `produtos` (
  `idproduto` int(10) NOT NULL,
  `nomeproduto` varchar(45) DEFAULT NULL,
  `descproduto` varchar(200) DEFAULT NULL,
  `imgproduto` varchar(25) DEFAULT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$stmt2 = $conexao->prepare($cria_tabela);
$stmt2->execute();

$insere_dados = "INSERT INTO `produtos` VALUES (1,'Cadeado Inox','Cadeado em aço inoxidável de qualidade com segurança','cadeado.png'),
(2,'Carteira de couro','Carteira de couro legítimo, preta com slots para documentos','carteira.png'),
(3,'Celular retrô','Aparelho celular inspirado nos antigos modelos do final dos anos 90','celular.png'),
(4,'PC desktop','PC Desktop completo, com monitor, teclado e mouse','computador.png'),
(5,'Fax','Aparelho de fac-símile e telefone, como antigamente','fax.png'),
(6,'Headset','Fones de ouvido com microfone para conversação na internet','fone.png'),
(7,'Ipod Nano','Ipod Nano com HD de 64 GB','ipod.png'),
(8,'Jornal Correio Braziliense','Assinatura do Correio Braziliense de 12 meses','jornal.png'),
(9,'Controle de PS4','Joystick para PS4 com dualshock','joystick.png'),
(10,'Notebook','Notebook Samsung com Nvidia Optimus','laptop.png'),
(11,'Mouse óptico','Mouse óptico sem fio com bluetooth','mouse.png'),
(12,'Miniatura de caça','Miniatura de caça Jedi do Anakin Skywalker','nave.png'),
(13,'Palm','Palmtop com caneta Styllus','palm.png'),
(14,'Pilhas D','Pacote com 2 pilhas tamanho D','pilha.png'),
(15,'Scanner','Scanner HP com resolução de 2600 dpi','scanner.png'),
(16,'Telescópio Toya','Telescópio Toya com abertura de 105mm','telescopio.png')";
$stmt3 = $conexao->prepare($insere_dados);
$stmt3->execute();