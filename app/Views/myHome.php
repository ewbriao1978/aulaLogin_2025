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

    <a href="/adicionar">Adicionar Produto</a>


        <table border="1">
        <tr>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th> </th>
            <th> </th>
        </tr>
        <?php foreach ($produtos_do_usuario as $product): ?>
        <tr>
            <td><?= esc($product['description']) ?></td>
            <td><?= esc($product['quantity']) ?></td>
            <td><?= esc($product['price']) ?></td>
            <td><a href="/excluir/<?= esc($product['id']) ?>">Excluir</a></td>
            <td><a href="/editar/<?= esc($product['id']) ?>">Editar</a></td>
        </tr>
    
        <?php endforeach; ?>
     </table>

     <a href="/logout">Logout</a>

</body>
</html>