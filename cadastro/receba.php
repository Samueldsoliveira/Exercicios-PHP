<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";//isset vai trazer a ideia do IF (se ele não receber o nome, vai receber texto "Não informado")

        $nascimento = isset($_GET["nascimento"])?$_GET["nascimento"]:"[Não informado]";

        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não informado]";
        
        $idadeAtual = date("Y") - $nascimento;//date("Y") é para referenciar o ano atual que estamos

        echo "Nome: $nome <br>";
        echo "Data de nascimento: $nascimento <br>";
        echo "Sexo: $sexo <br>";
        echo "Idade Atual: $idadeAtual <br>";
        
    ?>
    <a href="./index.php">Voltar</a>
</body>
</html>