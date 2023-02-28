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
                <input name="nome" id="nome" type="text" placeholder="Nome do aluno">
            </div><br>
            <div id="CPF">
                <label>CPF:</label>
                <input name="cpf" id="cpf" type="text" placeholder="CPF do aluno">
            </div><br>
            <div id="idade">
                <label>Idade:</label>
                <input name="idade" id="idade" type="text" placeholder="Idade do aluno">
            </div><br>
            <div id="estatura">
                <label>Estatura:</label>
                <input name="estatura" id="estatura" type="text" placeholder="Estatura do aluno">
            </div><br>
            <div id="peso">
                <label>Peso:</label>
                <input name="peso" id="peso" type="text" placeholder="Peso do aluno">
            </div><br>
            <div id="objetivo">
                <label>Objetivo:</label>
                <input name="objetivo" id="objetivo" type="text" placeholder="Objetivo do aluno">
            </div><br>
            <div id="professor">
                <label>Professor:</label>
                <input name="professor" id="professor" type="text" placeholder="Professor do aluno">
            </div><br>
            <div id="anamnese">
                <label>Anamnese:</label>
                <input name="anamnese" id="anamnese" type="text" placeholder="Anamnese do aluno">
            </div><br>
            <div id="senha">
                <label>Senha:</label>
                <input name="senha" id="senha" type="password" placeholder="Senha do aluno">
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
        <div class="fisico">
            <span>Avaliação física:</span><br>
            <span>Perimetria:</span><br><br>
            <div id="fisico">
                <label>Tórax:</label>
                <input name="torax" type="text" placeholder="Centímetros">
            </div><br>
            <div id="fisico">
                <label>Abdomen:</label>
                <input name="adbomen" type="text" placeholder="Centímetros">
            </div><br>
            <div id="fisico">
                <label>Cintura:</label>
                <input name="centira" type="text" placeholder="Centímetros">
            </div><br>
            <div id="fisico">
                <label>Braço dir:</label>
                <input name="braco-dir" type="text" placeholder="Centímetros">
            </div><br>
            <div id="fisico">
                <label>Braço esq:</label>
                <input name="braco-esq" type="text" placeholder="Centímetros">
            </div><br>
            <div id="fisico">
                <label>Coxa dir:</label>
                <input name="coxa-dir" type="text" placeholder="Centímetros">
            </div><br>
            <div id="fisico">
                <label>Coxa esq:</label>
                <input name="coxa-esq" type="text" placeholder="Centímetros">
            </div><br>
            <div id="fisico">
                <label>Ombro:</label>
                <input name="ombro" type="text" placeholder="Centímetros">
            </div><br>
            <div id="fisico">
                <label>Quadril:</label>
                <input name="quadril" type="text" placeholder="Centímetros">
            </div><br><br>
            <span>Dobras:</span>
            <br><br>
            <div id="fisico">
                <label>Tríceps:</label>
                <input name="triceps" type="text" placeholder="% de gordura">
            </div><br>
            <div id="fisico">
                <label>Abd:</label>
                <input name="abd" type="text" placeholder="% de gordura">
            </div><br>
            <div id="fisico">
                <label>Ilíaca:</label>
                <input name="ombro" type="text" placeholder="% de gordura">
            </div><br>
            <div id="fisico">
                <label>Ombro:</label>
                <input name="ombro" type="text" placeholder="% de gordura">
            </div><br>
            <div id="fisico">
                <label>Ombro:</label>
                <input name="ombro" type="text" placeholder="% de gordura">
            </div><br><br>
            <div id="fisico">
                <label>Perc. de gordura(%):</label>
                <input name="gordura-total" type="text" placeholder="% de gordura total"><br><br>
            <div id="fisico">
                <label>Próxima reavaliação:</label>
                <input name="prox-reavaliacao" type="text" placeholder="Próxima reavaliação">
            </div><br><br>
        </div>
        <div class="footer">
            <button class="full-rounded"><span><input type="submit" value="Cadastrar" name="cadUsuario"></span>
            </button>
            <a href="/home-admin.php" target="_self"><button class="full-rounded">
                    <span>Voltar</span>
                    <div class="border full-rounded"></div>
                </button></a>
        </div>
    </form>
</body>

</html>