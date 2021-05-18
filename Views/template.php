<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo Ucfirst($nomeView).' - Nome do Projeto'; ?></title>
</head>
<body>
    <!--Aqui ficara o header do site-->
    <?php
        $this->carregarViewNoTemplate($nomeView, $dadosModel);
    ?>
    <!--Aqui ficara o rodape-->
    <!--Aqui ficara o layout do seu site tudo aquilo que se repetir em todas as paginas devera ficar aqui-->    
</body>
</html>