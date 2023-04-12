<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculado</title>
</head>
<body>
    <?php
        $valor = $_GET["valor"];
        $raiz = sqrt($valor);//sqrt é a raiz quadrada

        echo "A raiz quadrada de $valor é igual a: " . number_format($raiz,2);//number_format deixa o resultado com apenas 2 casas decimais
    ?>
     <a href="./variaveis.php">Voltar</a>
</body>
</html>