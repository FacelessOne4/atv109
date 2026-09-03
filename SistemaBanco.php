<?php

$saldo = 2000;
$limite = 500;

$opcao = $_POST["opcao"] ?? 0;
$valor = $_POST["valor"] ?? 0;

switch ($opcao) {

    case 1:
        echo "Seu saldo é: R$ $saldo";
        break;

    case 2:
        if ($valor <= 0) {
            echo "O valor do depósito deve ser maior que zero!";
        } else {
            $saldo = $saldo + $valor;
            echo "Depósito realizado!<br>";
            echo "Novo saldo: R$ $saldo";
        }
        break;

    case 3:
        if ($valor <= 0) {
            echo "O valor do saque deve ser maior que zero!";
        } elseif ($valor > ($saldo + $limite)) {
            echo "Saldo e limite insuficientes!";
        } else {
            $saldo = $saldo - $valor;
            echo "Saque realizado!<br>";
            echo "Novo saldo: R$ $saldo";
        }
        break;

    case 4:
        echo "Seu limite disponível é: R$ $limite";
        break;

    case 5:
        if ($valor <= 0) {
            echo "O valor da conta deve ser maior que zero!";
        } elseif ($valor > ($saldo + $limite)) {
            echo "Saldo e limite insuficientes!";
        } else {
            $saldo = $saldo - $valor;
            echo "Conta paga com sucesso!<br>";
            echo "Novo saldo: R$ $saldo";
        }
        break;

    case 6:
        echo "Obrigado por utilizar o sistema bancário!";
        break;

    default:
        echo "Opção inválida!";
}

?>

<form method="post">

    <h3>Sistema Bancário</h3>

    <select name="opcao">
        <option value="1">1 - Consultar saldo</option>
        <option value="2">2 - Depositar</option>
        <option value="3">3 - Sacar</option>
        <option value="4">4 - Consultar limite</option>
        <option value="5">5 - Pagar conta</option>
        <option value="6">6 - Sair</option>
    </select>

    <br><br>

    Valor:
    <input type="number" name="valor" step="0.01">

    <br><br>

    <button type="submit">Confirmar</button>

</form>
