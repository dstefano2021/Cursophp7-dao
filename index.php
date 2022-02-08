<?php


require_once("config.php");

//Carrega um usuário
//$dstefano = new Usuario();
//$dstefano->loadbyId(3);
//echo $dstefano;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários, buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","!@#$");
//echo $usuario;
/*
//Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/
/* Alterando um usuário
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor" , "2021");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;


?>

