<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <title>Cálculo INSS e IRRF</title>

</head>

<body>

    <h1>Cálculo do custo com INSS sobre o Salário<h1>
            <hr>
            <form>
                <input type="text" name="salario" placeholder="Digite o seu salário bruto" required><br>
                <input type="text" name="dependentes" placeholder="Digite a qtd de dependentes" required><br>
                <button type="submit">Calcular</button>
            </form>



</body>

</html>

<?php
include 'C:\xampp\htdocs\CP1\codeyo_calculosalario.php';
if (isset($_GET["salario"]) && isset($_GET["dependentes"])) :
    $bruto = $_GET["salario"];
    $dependentes = $_GET["dependentes"];

    echo "" . calcularINSS($bruto, $dependentes);
endif;
?>