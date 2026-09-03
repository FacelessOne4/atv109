<?php

$produto = $_POST["produto"] ?? 0;
$quantidade = $_POST["quantidade"] ?? 0;

if ($_POST) {

    switch ($produto) {

        case 1:
            $nome = "Arroz";
            $preco = 20;
            break;

        case 2:
            $nome = "Feijão";
            $preco = 10;
            break;

        case 3:
            $nome = "Macarrão";
            $preco = 5;
            break;

        case 4:
            $nome = "Leite";
            $preco = 6;
            break;

        case 5:
            $nome = "Café";
            $preco = 15;
            break;

        default:
            echo "Produto inválido!";
            exit;
    }

    $total = $preco * $quantidade;

    echo "Produto: $nome<br>";
    echo "Preço: R$ $preco<br>";
    echo "Quantidade: $quantidade<br>";
    echo "Total: R$ $total";
}
?>

<form method="post">

    <h3>Escolha um produto:</h3>

    <select name="produto">
        <option value="1">1 - Arroz</option>
        <option value="2">2 - Feijão</option>
        <option value="3">3 - Macarrão</option>
        <option value="4">4 - Leite</option>
        <option value="5">5 - Café</option>
    </select>

    <br><br>

    Quantidade:
    <input type="number" name="quantidade">

    <br><br>

    <button type="submit">Comprar</button>

</form>
