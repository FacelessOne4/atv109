<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Menu de Cores</title>
</head>
<body>

<h2>Menu de cores</h2>

<form method="post">
    <select name="opcao">
        <option value="">Escolha uma cor</option>
        <option value="1">Vermelho</option>
        <option value="2">Amarelo</option>
        <option value="3">Verde</option>
    </select>

    <button type="submit">Escolher</button>
</form>

<?php

if (isset($_POST["opcao"])) {

    $opcao = $_POST["opcao"];

    switch ($opcao) {
        case "1":
            echo "<p>Pare!</p>";
            break;

        case "2":
            echo "<p>Atenção!</p>";
            break;

        case "3":
            echo "<p>Siga!</p>";
            break;

        default:
            echo "<p>Erro: opção inválida!</p>";
            break;
    }
}

?>

</body>
</html>
