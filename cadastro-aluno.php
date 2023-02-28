<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/cadastro-aluno.css">
</head>

<body>
    <div class="rodape">
        <div id="logo">
            <img src="logo.png" alt="logo">
        </div>
    </div>
    <div class="boas-vindas">
        <span>Cadastrar aluno</span><br>
        <span>Preencha as informações solicitadas:</span>
    </div><br>
    <form method="POST" action="processa.php">
        <div class="infos">
            <span>Informações:</span>
            <div id="nome">
                <label>Nome:</label>
                <input name="nome" id="nome" type="text" placeholder="Digite o nome do aluno">
            </div><br>
            <div id="CPF">
                <label>CPF:</label>
                <input name="cpf" id="cpf" type="text" placeholder="Digite o CPF do aluno">
            </div><br>
            <div id="senha">
                <label>Senha:</label>
                <input name="senha" id="senha" type="password" placeholder="Digite a senha do aluno">
            </div><br>
        </div>
        <div class="treinos">
            <span>Treinos:</span>
            <div id="treino">
                <label>Segunda:</label>
                <input name="seg" type="text" placeholder="Treino segunda-feira">
            </div><br>
            <div id="treino">
                <label>Terça:</label>
                <input name="ter" type="text" placeholder="Treino terça-feira">
            </div><br>
            <div id="treino">
                <label>Quarta:</label>
                <input name="qua" type="text" placeholder="Treino quarta-feira">
            </div><br>
            <div id="treino">
                <label>Quinta:</label>
                <input name="qui" type="text" placeholder="Treino quinta-feira">
            </div><br>
            <div id="treino">
                <label>Sexta:</label>
                <input name="sex" type="text" placeholder="Treino sexta-feira">
            </div><br>
            <div id="treino">
                <label>Sábado:</label>
                <input name="sab" type="text" placeholder="Treino sábado">
            </div><br>
        </div>
        <div class="footer">
            <button class="full-rounded"><span><input type="submit" value="Cadastrar" name="cadUsuario"></span>
            </button>
            <a href="home-admin.php" target="_self"><button class="full-rounded">
                    <span>Voltar</span>
                    <div class="border full-rounded"></div>
                </button></a>
        </div>
    </form>
</body>

</html>