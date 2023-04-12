<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebimento de dados</title>
</head>
<body>
    <form method="get" action="receba.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome">
        <br>

        <label for="nascimento">Data de nascimento:</label>
        <input type="date" name="nascimento">
        <br>

        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem" checked>
            <label for="masc">Masculino</label>

            <input type="radio" name="sexo" id="fem" value="feminino">
            <label for="fem">Feminino</label>
            <br>
        </fieldset>

        <input type="submit" name="entrada">
    </form>
</body>
</html>