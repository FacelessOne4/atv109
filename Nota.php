<?php

$nota = $_POST["nota"] ?? null;

if ($_POST) {

    switch (true) {

        case ($nota < 0 || $nota > 10):
            echo "Nota inválida!";
            break;

        case ($nota <= 4):
            echo "Insuficiente";
            break;

        case ($nota <= 6):
            echo "Regular";
            break;

        case ($nota <= 8):
            echo "Bom";
            break;

        case ($nota <= 10):
            echo "Excelente";
            break;
    }
}

?>

<form method="post">

    Digite a nota:
    <input type="number" name="nota" step="0.1">

    <br><br>

    <button type="submit">Classificar</button>

</form>
