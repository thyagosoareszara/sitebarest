<?php
// RECEBE VARIAVEIS NESCESSARIAS 
 
if (isset($_POST['acao']) && ($_POST['acao'] == 'save')){ 
    $nome = $_POST['nome'];
    $email =  $_POST['email'];
    $sexo = $_POST['sexo'];
    $frequencia_bares = $_POST['frequencia_bares'];
    $internet = $_POST['internet'];
    $vantagens = $_POST['vantagens'];
    $sugestao = $_POST['sugestao'];
    $app = $_POST['app'];
    $data_cadastro = getdate();

    $InsertPesquisa = $pdo->prepare("INSERT INTO tbpesquisa (nome, email, sexo, frequenci_bares, internet, vantagens, sugestao, app, data_cadastro ) VALUES('$nome','$email', '$sexo', '$frequencia_bares', '$internet', '$vantagens', '$sugestao', '$app', '$data_cadastro')");

    $InsertPesquisa->execute();

    if (isset($_POST['email'])){ 
        $InsertNew = $pdo->prepare("INSERT INTO tbnewsletter (nome, email,data_cadastro ) VALUES('$nome','$email', '$data_cadastro')");    

        $InsertNew->execute();
    
    }

    $sucesso = 'Obrigada por nos ajudar!!';
    echo '<script>alert ("' .$sucesso .'");</script>';
    header('location: /');
 
};

?>