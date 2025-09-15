<?php
// Cardápio organizado por categorias
$cardapio = [
    "Cafés" => [
        ["nome" => "Café Expresso", "preco" => 5.00, "descricao" => "Café forte e aromático, feito na hora."],
        ["nome" => "Cappuccino", "preco" => 7.50, "descricao" => "Mistura equilibrada de café, leite e espuma cremosa."],
        ["nome" => "Latte Macchiato", "preco" => 8.50, "descricao" => "Leite vaporizado com toque de café expresso."],
        ["nome" => "Mocha", "preco" => 9.00, "descricao" => "Café, chocolate e leite vaporizado em perfeita harmonia."]
    ],
    "Doces" => [
        ["nome" => "Bolo de Cenoura", "preco" => 6.00, "descricao" => "Com cobertura de chocolate."],
        ["nome" => "Torta de Limão", "preco" => 7.00, "descricao" => "Sobremesa refrescante com base crocante e creme de limão."],
        ["nome" => "Chocolate Quente", "preco" => 6.50, "descricao" => "Cremoso, feito com chocolate meio amargo."]
    ],
    "Salgados" => [
        ["nome" => "Pão de Queijo", "preco" => 4.00, "descricao" => "Tradicional e quentinho, direto do forno."],
        ["nome" => "Croissant", "preco" => 5.50, "descricao" => "Folhado amanteigado, macio por dentro e crocante por fora."],
        ["nome" => "Sanduíche Natural", "preco" => 10.00, "descricao" => "Pão integral com frango, alface, cenoura e maionese leve."],
        ["nome" => "Empada de Frango", "preco" => 6.00, "descricao" => "Massa leve e recheio cremoso de frango desfiado."]
    ],
    "Bebidas Frias" => [
        ["nome" => "Suco Natural", "preco" => 8.00, "descricao" => "Sabores variados e 100% naturais."],
        ["nome" => "Chá Gelado", "preco" => 7.00, "descricao" => "Chá refrescante de limão ou pêssego."],
        ["nome" => "Milkshake de Morango", "preco" => 12.00, "descricao" => "Batido com leite gelado, morangos frescos e sorvete."],
        ["nome" => "Smoothie de Frutas", "preco" => 11.00, "descricao" => "Manga, banana e laranja batidos, cheio de energia."]
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sweet Morning - Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="img/sweetmorning.jpeg" alt="Sweet Morning" class="logo">
        <h1>☕ Sweet Morning</h1>
        <h2>Bem-vindo(a) à nossa cafeteria!</h2>
        <p>Confira nossas delícias por categoria:</p>

        <!-- Loop pelas categorias -->
        <?php foreach($cardapio as $categoria => $itens): ?>
            <h3 class="categoria-titulo"><?php echo $categoria; ?></h3>
            <div class="cardapio">
                <?php foreach($itens as $item): ?>
                    <div class="cardapio-item">
                        <strong class="item-nome"><?php echo $item['nome']; ?></strong>
                        <span class="item-preco">R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></span>
                        <p class="item-desc"><?php echo $item['descricao']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

        <!-- Links de login e cadastro -->
        <p><a href="CarrinhoDeCompras.php">Ir para o CARRINHO DE COMPRAS</a></p>
    </div>
</body>
</html>
