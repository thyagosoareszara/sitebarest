<?php

//conexão com o servidor
$conect = mysql_connect("sitebarest.mysql.dbaas.com.br", "sitebarest", "adm/BDb4r3st#");
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conect) die ("<h1>Falha na coneco com o Banco de Dados!</h1>");
// Caso a conexão seja aprovada, então conecta o Banco de Dados.    
$db = mysql_select_db("sitebarest");

?>