<?php

session_start(); 

//cadastrar aluno
//limpar o buffer de saída
ob_start();

//incluir conexao com banco de dados

include_once "conexao.php";

//receber dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);


//verificar se o usuário clicou no botão
if(!empty($dados['cadUsuario'])){

//cadastrar usuario
    $query_cadastro="INSERT INTO cadastro
                (nome, cpf, senha, nivel) VALUES
                (:nome, :cpf, :senha, :nivel)";
    
    $cad_usuario = $conn->prepare($query_cadastro);
    $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':nivel', $dados['nivel'], PDO::PARAM_STR);

    $cad_usuario->execute();
    //var_dump($conn->lastInsertId());
    //recuperar o ultimo inserido
    $usuario_id = $conn->lastInsertId();

    $query_treino = "INSERT INTO treino
                    (seg, ter, qua, qui, sex, sab, usuario_id) VALUES
                    (:seg, :ter, :qua, :qui, :sex, :sab, :usuario_id)";

    $cad_treino = $conn->prepare($query_treino);
    $cad_treino->bindParam(':seg', $dados['seg'], PDO::PARAM_STR);
    $cad_treino->bindParam(':ter', $dados['ter'], PDO::PARAM_STR);
    $cad_treino->bindParam(':qua', $dados['qua'], PDO::PARAM_STR);
    $cad_treino->bindParam(':qui', $dados['qui'], PDO::PARAM_STR);
    $cad_treino->bindParam(':sex', $dados['sex'], PDO::PARAM_STR);
    $cad_treino->bindParam(':sab', $dados['sab'], PDO::PARAM_STR);
    $cad_treino->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
    $cad_treino->execute();

    //mensagem de sucesso
    $_SESSION['msg'] = "<p style='color: green;>Usuário cadastrado com sucesso!</p>";

    //redirecionar o usuário
    header("Location: cadastro-aluno.php");
}else{
       //mensagem de erro
       $_SESSION['msg'] = "<p style='color: #f00;>Erro: Usuário não cadastrado com sucesso!</p>";

       //redirecionar o usuário
       header("Location: cadastro-aluno.php");
};

///////////////////////////////////////////////////////////////
//cadastrar professor
//limpar o buffer de saída
ob_start();

//incluir conexao com banco de dados

include_once "conexao.php";

//receber dados do formulário
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

//var_dump($dados);


//verificar se o usuário clicou no botão
if(!empty($dados['cadProf'])){

//cadastrar usuario
    $query_cadastro="INSERT INTO cadastro
                (nome, cpf, senha, nivel) VALUES
                (:nome, :cpf, :senha, :nivel)";
    
    $cad_usuario = $conn->prepare($query_cadastro);
    $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':senha', $dados['senha'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':nivel', $dados['nivel'], PDO::PARAM_STR);

    $cad_usuario->execute();
    //var_dump($conn->lastInsertId());
    //recuperar o ultimo inserido
    $usuario_id = $conn->lastInsertId();

    //mensagem de sucesso
    $_SESSION['msg'] = "<p style='color: green;>Usuário cadastrado com sucesso!</p>";

    //redirecionar o usuário
    header("Location: cadastro-admin.php");
}else{
       //mensagem de erro
       $_SESSION['msg'] = "<p style='color: #f00;>Erro: Usuário não cadastrado com sucesso!</p>";

       //redirecionar o usuário
       header("Location: cadastro-admin.php");
};