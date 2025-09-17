<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário Simples</title>
</head>
<body>
    <h2>Formulário de Cadastro</h2>
    <form action="receber.php" method="post">
        <label for="nome">Nome:</label><br>
        <br><input type="text" id="nome" name="nome" required ><br><br>

        <label for="email">E-mail:</label><br>
        <br><input type="email" id="email" name="email" required > <br> <br>

        <label for="idade">idade </label><br>
        <br><input type="number" id="idade" name="idade" min="0" required ><br> <br>

        <button  >Enviar</button>
    </form>
</body>
</html>