<?php

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios); */

/* Carrega um usuário
$root = new Usuario();
$root->loadById(3);
echo $root; */

/* Carrega uma lista de usuários, como getList() é um método estatico não precisa ser instanciado
$lista = Usuario::getList();
echo json_encode($lista); */

/* Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("o");
echo json_encode($search); */

/* Carrega usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("percy", "anaklusmos");
echo $usuario; */

/* Criando um novo usuário
$aluno = new Usuario("Peeta", "l@r@nja");
*	$aluno->setDeslogin("aluno"); esses dois são outro jeito
*	$aluno->setDessenha("@lun0");
$aluno->insert();
echo $aluno; */

/* Alterar um usuário
$usuario = new Usuario();
$usuario->loadById(6);
$usuario->update("professor", "qu1r0n");
echo $usuario; */

$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();
echo $usuario;

?>