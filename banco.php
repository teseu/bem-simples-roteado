<?php

//require_once("conexao.php");

/*$cria_db = "CREATE DATABASE 'pdo' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
$stmt = $conexao->prepare($cria_db);
$stmt->execute();*/


require_once("cria.php");
require_once("conexao.php");

$verifica_produtos = "DROP TABLE IF EXISTS `produtos`;";
$stmt = $conexao->prepare($verifica_produtos);
$stmt->execute();

$verifica_paginas = "DROP TABLE IF EXISTS `paginas`;";
$stmt = $conexao->prepare($verifica_paginas);
$stmt->execute();

$verifica_usuarios = "DROP TABLE IF EXISTS `usuarios`;";
$stmt = $conexao->prepare($verifica_usuarios);
$stmt->execute();

$cria_produtos = "CREATE TABLE `produtos` (
  `idproduto` int(10) NOT NULL,
  `nomeproduto` varchar(45) DEFAULT NULL,
  `descproduto` varchar(200) DEFAULT NULL,
  `imgprodutoi` varchar(25) DEFAULT NULL,
  `imgprodutoii` varchar(25) DEFAULT NULL,
  `imgproduto` varchar(25) DEFAULT NULL,
  `preco` varchar(25) DEFAULT NULL,
  `condicao` varchar(50) DEFAULT NULL
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$stmt2 = $conexao->prepare($cria_produtos);
$stmt2->execute();

$cria_paginas = "CREATE TABLE `paginas` (
  `idpagina` int(10) NOT NULL,
  `nomepagina` varchar(45) DEFAULT NULL,
  `titulopagina` varchar(45) DEFAULT NULL,
  `conteudopagina` text DEFAULT NULL
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$stmt2 = $conexao->prepare($cria_paginas);
$stmt2->execute();

$cria_usuarios = "CREATE TABLE `usuarios` (
  `idusuario` int(10) NOT NULL,
  `nomeusuario` varchar(100) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
$stmt2 = $conexao->prepare($cria_usuarios);
$stmt2->execute();

$insere_produtos = "INSERT INTO `produtos` VALUES
(1,'Cadeado Inox','Cadeado em aço inoxidável de qualidade com segurança','cadeadoi.png','cadeadoii.png','cadeado.png','R$ 19,00','2x de R$ 9,50'),
(2,'Carteira de couro','Carteira de couro legítimo, preta com slots para documentos','carteirai.png','carteiraii.png','carteira.png','R$ 89,00','4x de R$ 22,25'),
(3,'Celular retrô','Aparelho celular inspirado nos antigos modelos do final dos anos 90','celulari.png','celularii.png','celular.png','R$ 469,00','10x de R$ 46,90'),
(4,'PC desktop','PC Desktop completo, com monitor, teclado e mouse','computadori.png','computadorii.png','computador.png','R$ 2.300,00','12x de R$ 191,67'),
(5,'Fax','Aparelho de fac-símile e telefone, como antigamente','faxi.png','faxii.png','fax.png','R$ 260,00','5x de R$ 52,00'),
(6,'Headset','Fones de ouvido com microfone para conversação na internet','fonei.png','foneii.png','fone.png','R$ 59,00','3x de R$ 19,67'),
(7,'Ipod Nano','Ipod Nano com HD de 64 GB','ipodi.png','ipodii.png','ipod.png','R$ 320,00','6x de R$ 53,33'),
(8,'Jornal Correio Braziliense','Assinatura do Correio Braziliense de 12 meses','jornali.png','jornalii.png','jornal.png','R$ 210,00','5x de R$ 42,00'),
(9,'Controle de PS4','Joystick para PS4 com dualshock','joysticki.png','joystickii.png','joystick.png','R$ 280,00','8x de R$ 35,00'),
(10,'Notebook','Notebook Samsung com Nvidia Optimus','laptopi.png','laptopii.png','laptop.png','R$ 2.419,00','12x de R$ 201,58'),
(11,'Mouse óptico','Mouse óptico sem fio com bluetooth','mousei.png','mouseii.png','mouse.png','R$ 69,00','4x de R$ 17,25'),
(12,'Miniatura de caça','Miniatura de caça Jedi do Anakin Skywalker','navei.png','naveii.png','nave.png','R$ 340,00','8x de R$ 42,50'),
(13,'Palm','Palmtop com caneta Styllus','palmi.png','palmii.png','palm.png','R$ 42,00','2x de R$ 21,00'),
(14,'Pilhas D','Pacote com 2 pilhas tamanho D','pilhai.png','pilhaii.png','pilha.png','R$ 13,00','2x de R$ 6,50'),
(15,'Scanner','Scanner HP com resolução de 2600 dpi','scanneri.png','scannerii.png','scanner.png','R$ 199,00','6x de R$ 31,17'),
(16,'Telescópio Toya','Telescópio Toya com abertura de 105mm','telescopioi.png','telescopioii.png','telescopio.png','R$ 954,00','10x de R$ 9,54')";
$stmt3 = $conexao->prepare($insere_produtos);
$stmt3->execute();

$insere_paginas = "INSERT INTO `paginas` VALUES
(1, 'empresa', 'Empresa', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <p><a href=\"#\" class=\"btn btn-primary btn-large\">Saiba mais &raquo;</a></p>'),
(2, 'servicos', 'Serviços', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
    <p><a href=\"#\" class=\"btn btn-primary btn-large\">Saiba mais &raquo;</a></p>'),
(3, 'contato', 'Contato', 'Envie sua mensagem')";

$stmt3 = $conexao->prepare($insere_paginas);
$stmt3->execute();

$hash = password_hash('admin', PASSWORD_DEFAULT);

$insere_usuarios = "INSERT INTO `usuarios` VALUES
(1, 'Tulio Macedo', 'admin', '$hash')";
$stmt3 = $conexao->prepare($insere_usuarios);
$stmt3->execute();

