<?php 


require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sideaux");
$cad->setEmail("djalmadelas@gmail.com.br");
$cad->setSenha("djaslminhabb");

$cad->registrarVenda();
