<? include 'conexao.php'; ?>
<?php
// RECEBE VARIAVEIS NESCESSARIAS 
if (isset($_POST['acao']) && ($_POST['acao'] == 'save')){ 
    $nome = $_POST['nome'];
    $email =  $_POST['email'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $relacionamento = $_POST['relacionamento'];
    $proximidade = $_POST['proximidade'];
    $frequencia_bares = $_POST['frequencia_bares'];
    $pagamento = $_POST['pagamento'];
    $gasto = $_POST['gasto'];
    $internet = $_POST['internet'];
    $vantagens = $_POST['vantagens'];
    $sugestao = implode (",", $_POST['sugestao']);
    $app = $_POST['app'];
    
    $InsertPesquisa = $con->query ("INSERT INTO tbpesquisa (nome, email, sexo, frequencia_bares, internet, vantagens, sugestao, app, data_cadastro, relacionamento, idade, proximidade, gasto, pagamento) VALUES('$nome','$email', '$sexo', '$frequencia_bares', '$internet', '$vantagens', '$sugestao', '$app', now(), '$relacionamento', '$idade', '$proximidade', '$gasto', '$pagamento')");
    

    if (isset($_POST['email'])){ 
        $InsertNew = $con->query ("INSERT INTO tbnewsletter (nome, email,data_cadastro ) VALUES('$nome','$email', '$data_cadastro')");  
  
    }
    
    if($InsertPesquisa){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        $sucesso = 'Obrigada por nos ajudar!!';
        echo '<script>alert ("' .$sucesso .'");</script>';
        header('location: /');
    } else {
        $error = 'Erro, não possível inserir no banco de dados!';
        echo '<script>alert ("' .$error .'");</script>';
        header('location: /');
    }   
    
    //mysqli_close($conect); //fecha conexão com banco de dados 

 
};

?>