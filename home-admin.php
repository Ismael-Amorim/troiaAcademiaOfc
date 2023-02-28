<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home-admin.css">
    <script src="/js/script.js" defer></script>
</head>

<body>
    <div class="rodape">
        <div id="logo">
            <img src="logo.png" alt="logo">
        </div>
    </div>
    <div class="boas-vindas">
        <span>Bem vindo, Ismael!</span><br>
        <span>O que você deseja fazer?</span>
    </div>
    <div id="opcoes-admin">
        <a href="cadastro-aluno.php"><button class="full-rounded">
                <span>Cadastrar aluno</span>
                <div class="border full-rounded"></div>
            </button></a>
        <a href="cadastro-admin.php"><button class="full-rounded">
                <span>Cadastrar professor</span>
                <div class="border full-rounded"></div>
            </button></a>
        <button class="full-rounded">
            <a href="consultar-alunos.html"><span>Consultar alunos</span>
                <div class="border full-rounded"></div>
        </button></a>
        <a href="editar-alunos.html"><button class="full-rounded">
                <span>Editar aluno</span>
                <div class="border full-rounded"></div>
            </button></a>
    </div>
    <div class="footer">
        <a href="login.html" target="_self"><button class="full-rounded">
                <span>Sair</span>
                <div class="border full-rounded"></div>
            </button></a>
    </div>
</body>

</html>