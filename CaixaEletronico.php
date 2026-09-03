<?php

$saldo = 1500;

$opcao = $_POST["opcao"] ?? 0;
$valor = $_POST["valor"] ?? 0;

switch ($opcao) {

    case 1:
        echo "Seu saldo é: R$ " . $saldo;
        break;

    case 2:
        if ($valor <= 0) {
            echo "O valor do depósito deve ser maior que zero!";
        } else {
            $saldo = $saldo + $valor;
            echo "Depósito realizado!<br>";
            echo "Novo saldo: R$ " . $saldo;
        }
        break;

    case 3:
        if ($valor <= 0) {
            echo "O valor do saque deve ser maior que zero!";
        } elseif ($valor > $saldo) {
            echo "Saldo insuficiente!";
        } else {
            $saldo = $saldo - $valor;
            echo "Saque realizado!<br>";
            echo "Novo saldo: R$ " . $saldo;
        }
        break;

    case 4:
        echo "Obrigado por utilizar o caixa eletrônico!";
        break;

    default:
        echo "Opção inválida!";
}

?>

<form method="post">

    <h3>Caixa Eletrônico</h3>

    <select name="opcao">
        <option value="1">1 - Consultar saldo</option>
        <option value="2">2 - Depositar</option>
        <option value="3">3 - Sacar</option>
        <option value="4">4 - Sair</option>
    </select>

    <br><br>

    Valor:
    <input type="number" name="valor" step="0.01">

    <br><br>

    <button type="submit">Confirmar</button>

</form>
