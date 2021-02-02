<?php 

require_once("config.php");

/*
CARREGA UM USUÁRIO
$user = new Usuario();

$user->loadById(3);

echo $user;
*/

//CARREGA UMA LISTA DE USUÁRIO
/*
$lista = Usuario::getList();
echo json_encode($lista);
*/

//CARREGA UMA LISTA DE USUARIO BUSCANDO PELO LOGIN 

/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

//CARREGA UM USUÁRIO AUTENTICADO

/*
$usuario = new Usuario();
$usuario->login("josé", "12345678");
echo $usuario;
*/

//CRIAÇÃO DE PROCEDURE NO MYSQL JUNTO COM A AUTOMATIZAÇÃO DA FORMA DE LOGAR
/*
$aluno = new Usuario("aluno", "@1un0"); 
$aluno->insert();
echo $aluno;
*/

//ALTERAR UM USUARIO 
/*
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("professor", "@#$@!@!");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(30);

$usuario->delete();

echo $usuario;

?>