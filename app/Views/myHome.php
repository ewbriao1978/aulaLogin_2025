<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Bem-vindo ao meu site</h1>
    <p>Esta é a página inicial.</p>
    <p>Você está logado como: <?= session()->get('nome') ?></p>
</body>
</html>