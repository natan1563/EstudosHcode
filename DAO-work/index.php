<?php 

require_once("config.php");

//Carrega um usuário
//$user = new Usuario();
//$user->loadById(3);
//echo $user;


//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login 
//$search = Usuario::search("na");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha 

$usuario = new Usuario();
$usuario->login('asdada', '!@#$%'); 

echo $usuario;
?>