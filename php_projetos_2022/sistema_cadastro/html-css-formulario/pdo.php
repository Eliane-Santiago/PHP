<?php

$nome = $_POST['campo-nome'];

$rg_cnh = $_POST['campo-rg'];
$cpf = $_POST['campo-cpf'];
$telefone = $_POST['campo-telefone'];
$email = $_POST['campo-email'];

//Instaciando Construtor PDO
$pdo = new PDO('mysql:localhost;dbname=cadastro', 'root', '');

$query = " INSERT INTO CLIENTE (CLI_COD, CLI_NOME, CLI_RG_CNH, CLI_CPF, CLI_TELEFONE, CLI_EMAIL) VALUES('',$nome, $rg_cnh, $cpf, $telefone, $email )";



$statement = $pdo->query($query);
$statement->execute();

//criandoObjdoTipoPDO = new classePDO('driveBD:endereçoBD;dbname=NomeBD', 'usuarioBD', 'senhaBD')