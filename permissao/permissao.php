<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        $texto = isset($_GET["t"])?$_GET["t"]:"Texto genérico";

        $tamanho = isset($_GET["tam"])?$_GET["tam"]:"Tamanho não informado";

        $cor = isset($_GET["cor"])?$_GET["cor"]:"Cor não informada";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permissão</title>
    <style>
        .texto{ /*ATENÇÃO PARA O CSS LOCAL COM PARâMETROS PHP */
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$texto</span>";
        ?>
    </div>
    
</body>
</html>