<?php

require_once("config.php");

/* $sql = new sql();
$usuarios = $sql->select("SELECT * FROM  tb_usuarios");
echo json_encode($usuarios); */


/*Carrega um usuario
$root = new Usuario();
$root->loadById(3);
echo $root;*/

/*Carrega uma lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);*/

/*Carrega uma lista de usuarios pelo login
$search = Usuario::search("jo");
echo json_encode($search);*/

//Carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("root", "98765");
echo $usuario;

?>