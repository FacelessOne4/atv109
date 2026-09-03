<?php

$produto = $_POST["produto"] ?? 0;
$quantidade = $_POST["quantidade"] ?? 0;

if ($_POST) {

    switch ($produto) {

        case 1:
            $nome = "Hambúrguer";
            $preco = 15;
            break;

        case 2:
            $nome = "X-Salada";
            $preco = 18;
            break;

        case 3:
            $nome = "Batata Frita";
            $preco = 10;
            break;

        case 4:
            $nome = "Refrigerante";
            $preco = 7;
            break;

        case 5:
            $nome = "Suco";
            $preco = 8;
            break;

        default:
            echo "Produto inválido!";
            exit;
    }

    $valor = $preco * $quantidade;

    if ($quantidade <= 2) {
        $desconto = 0;
    } elseif ($quantidade <= 5) {
        $desconto = $valor * 0.05;
    } else {
        $desconto = $valor * 0.10;
    }

    $total = $valor - $desconto;

    echo "Produto: $nome <br>";
    echo "Quantidade: $quantidade <br>";
    echo "Valor da compra: R$ $valor <br>";
    echo "Desconto: R$ $desconto <br>";
    echo "Valor final: R$ $total";
}

?>

<form method="post">

    <h3>Lanchonete</h3>

    <select name="produto">
        <option value="1">1 - Hambúrguer - R$ 15</option>
        <option value="2">2 - X-Salada - R$ 18</option>
        <option value="3">3 - Batata Frita - R$ 10</option>
        <option value="4">4 - Refrigerante - R$ 7</option>
        <option value="5">5 - Suco - R$ 8</option>
    </select>

    <br><br>

    Quantidade:
    <input type="number" name="quantidade">

    <br><br>

    <button type="submit">Comprar</button>

</form>
