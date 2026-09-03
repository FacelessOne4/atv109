<?php

$produto = $_POST["produto"] ?? 0;
$quantidade = $_POST["quantidade"] ?? 0;
$opcao = $_POST["opcao"] ?? 0;

$preco = 0;
$nome = "";
$total = 0;
$desconto = 0;

switch ($opcao) {

    case 1:
        switch ($produto) {

            case 1:
                $nome = "Camiseta";
                $preco = 50;
                break;

            case 2:
                $nome = "Calça";
                $preco = 100;
                break;

            case 3:
                $nome = "Tênis";
                $preco = 250;
                break;

            case 4:
                $nome = "Mochila";
                $preco = 150;
                break;

            case 5:
                $nome = "Boné";
                $preco = 40;
                break;

            default:
                echo "Produto inválido!";
        }

        echo "Produto escolhido: $nome<br>";
        echo "Preço: R$ $preco";
        break;


    case 2:
        echo "Quantidade informada: $quantidade";
        break;


    case 3:
        $total = $preco * $quantidade;

        echo "Valor da compra: R$ $total";
        break;


    case 4:
        if ($total < 100) {
            $desconto = 0;
        } elseif ($total < 300) {
            $desconto = $total * 0.05;
        } elseif ($total < 500) {
            $desconto = $total * 0.10;
        } else {
            $desconto = $total * 0.15;
        }

        echo "Desconto: R$ $desconto";
        break;


    case 5:
        echo "Total da compra: R$ $total";
        break;


    case 6:
        if ($total < 100) {
            $desconto = 0;
        } elseif ($total < 300) {
            $desconto = $total * 0.05;
        } elseif ($total < 500) {
            $desconto = $total * 0.10;
        } else {
            $desconto = $total * 0.15;
        }

        $final = $total - $desconto;

        echo "Valor original: R$ $total<br>";
        echo "Desconto: R$ $desconto<br>";
        echo "Valor final: R$ $final";
        break;


    default:
        echo "Opção inválida!";
}

?>

<form method="post">

    <h3>Sistema de Loja</h3>

    <select name="opcao">
        <option value="1">1 - Escolher produto</option>
        <option value="2">2 - Informar quantidade</option>
        <option value="3">3 - Calcular compra</option>
        <option value="4">4 - Aplicar desconto</option>
        <option value="5">5 - Consultar total</option>
        <option value="6">6 - Finalizar compra</option>
    </select>

    <br><br>

    Produto:

    <select name="produto">
        <option value="1">Camiseta - R$ 50</option>
        <option value="2">Calça - R$ 100</option>
        <option value="3">Tênis - R$ 250</option>
        <option value="4">Mochila - R$ 150</option>
        <option value="5">Boné - R$ 40</option>
    </select>

    <br><br>

    Quantidade:
    <input type="number" name="quantidade">

    <br><br>

    <button type="submit">Confirmar</button>

</form>
