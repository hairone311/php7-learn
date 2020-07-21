<?php

require_once "config.php";

/* Carrega um usuário pelo ID
$hairone = new Usuario();
$hairone->loadById(7);
echo $hairone;
 */

/* Carrega uma lista com todos usuários
$lista = Usuario::getList();
echo json_encode($lista);
 */

/* Carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("s");
echo json_encode($search);
 */

// Carrega um usuario usando login e senha
$usuario = new Usuario();
$usuario->login("hairone", "123456");

echo $usuario;