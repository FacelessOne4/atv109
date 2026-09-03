<?php

$num1 = $_POST["num1"] ?? 0;
$num2 = $_POST["num2"] ?? 0;
$opcao = $_POST["opcao"] ?? 0;

if ($_POST) {

    switch ($opcao) {

        case 1:
            echo "Resultado: " . ($num1 + $num2);
            break;

        case 2:
            echo "Resultado: " . ($num1 - $num2);
            break;

        case 3:
            echo "Resultado: " . ($num1 * $num2);
            break;

        case 4:
            if ($num2 == 0) {
                echo "Não pode dividir por zero!";
            } else {
                echo "Resultado: " . ($num1 / $num2);
            }
            break;

        default:
            echo "Opção inválida!";
    }
}
?>

<form method="post">

    Primeiro número:
    <input type="number" name="num1"><br><br>

    Segundo número:
    <input type="number" name="num2"><br><br>

    <select name="opcao">
        <option value="1">Soma</option>
        <option value="2">Subtração</option>
        <option value="3">Multiplicação</option>
        <option value="4">Divisão</option>
    </select>

    <br><br>

    <button type="submit">Calcular</button>

</form>
