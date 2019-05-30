<? include 'conexao.php'; ?>
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

    $InsertPesquisa = "INSERT INTO tbpesquisa (nome, email, sexo, frequenci_bares, internet, vantagens, sugestao, app, data_cadastro ) VALUES('$nome','$email', '$sexo', '$frequencia_bares', '$internet', '$vantagens', '$sugestao', '$app', '$data_cadastro')";

    $insert = mysql_query($InsertPesquisa);

    echo($InsertPesquisa); exit;

    if (isset($_POST['email'])){ 
        $InsertNew = "INSERT INTO tbnewsletter (nome, email,data_cadastro ) VALUES('$nome','$email', '$data_cadastro')";  
        
        mysql_query($InsertNew,$conect);
    
    }
    
    if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        $sucesso = 'Obrigada por nos ajudar!!';
        echo '<script>alert ("' .$sucesso .'");</script>';
        header('location: /');
    } else {
        $error = 'Erro, não possível inserir no banco de dados!';
        echo '<script>alert ("' .$error .'");</script>';
        header('location: /');
    }   
    
    mysql_close($conect); //fecha conexão com banco de dados 

 
};

?>