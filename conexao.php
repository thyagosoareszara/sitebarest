<?php
$servidor = 'sitebarest.mysql.dbaas.com.br'; // Host
$usuario = 'sitebarest'; // Usuário
$senha = 'adm/BDb4r3st#'; // Senha
$banco = 'sitebarest'; // Banco de dados

//conexão com o servidor
$con = new mysqli($servidor, $usuario, $senha, $banco);
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

?>