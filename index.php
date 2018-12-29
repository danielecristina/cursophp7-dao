<?php

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

/*Carrega um usuário
$root = new Usuario();
$root->loadById(3);
echo $root; */

/*Carrega uma lista de usuários, como getList() é um método estatico não precisa ser instanciado
$lista = Usuario::getList();
echo json_encode($lista);*/

/* Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("o");
echo json_encode($search);*/

// Carrega usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("percy", "anaklusmos");

echo $usuario;

// https://www.youtube.com/watch?v=aF5IjX4zvRs&index=13&list=PLVOaFkNst_AAmvDFVls5DhCnvzvlHd6Fn

?>