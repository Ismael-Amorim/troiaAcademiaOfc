<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/cadastro-admin.css">
</head>

<body>
    <div class="rodape">
        <div id="logo">
            <img src="logo.png" alt="logo">
        </div>
    </div>
    <div class="boas-vindas">
        <span>Cadastrar professor</span><br>
        <span>Preencha as informações solicitadas:</span>
    </div><br>
    <form method="POST" action="processa.php">
        <div class="infos">
            <span>Informações:</span>
            <div id="nome">
                <label>Nome:</label>
                <input name="nome" id="nome" type="text" placeholder="Digite o nome do professor">
            </div><br>
            <div id="CPF">
                <label>CPF:</label>
                <input name="cpf" id="cpf" type="text" placeholder="Digite o CPF do professor">
            </div><br>
            <div id="senha">
                <label>Senha:</label>
                <input name="senha" id="senha" type="password" placeholder="Digite a senha do professor">
            </div><br>
            <div id="nivel">
                <label>Nível:</label>
                <input name="nivel" id="nivel" type="text" placeholder="Digite o nível do professor">
            </div><br>
        </div>
        <div class="footer">
            <button class="full-rounded"><span><input type="submit" value="Cadastrar" name="cadProf"></span>
            </button><br>
            <a href="home-admin.php" target="_blank"><button class="full-rounded">
                    <span>Voltar</span>
                    <div class="border full-rounded"></div>
            </button></a>
        </div>
    </form>
</body>

</html>