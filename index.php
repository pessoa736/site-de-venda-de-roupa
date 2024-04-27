<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pudding Store</title>
        <link rel="stylesheet" type="text/css" href="src/css/style.css">
    </head>
    <body>
        <header class="header">
            <a href="index.php" class="logo">Pudding Store</a>
        </header>
        <button class="btn_left_bar" id="btn_left_bar"></button>
        <div class="space"></div>
        
        <?php
            include 'src/php/produtos.php'; 
        ?>
        <script src="src/javascript/aba_lateral.js"></script>

    </body>
</html>
