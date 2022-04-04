    <?php

    function calcularINSS($bruto, $dependentes)
    {
        $desc = 0;
        $inss = 0;
        if ($bruto <= 1212) {
            $desc = 7.5 / 100;
            $inss = $bruto * $desc;
        } elseif (($bruto > 1212) and ($bruto <= 2427.35)) {
            $desc = 9 / 100;
            $inss = $bruto * $desc;
        } elseif ($bruto > 2427.35 and $bruto <= 3641.03) {
            $desc = 12 / 100;
            $inss = $bruto * $desc;
        } elseif (($bruto > 3641.03) and ($bruto <= 7087.22)) {
            $desc = 14 / 100;
            $inss = $bruto * $desc;
        } else {
            $desc = 828.39;
            $inss = $bruto - $desc;
        }
        echo "Salário bruto: ", $bruto;
        echo "<br>";
        echo "Desconto: ", $desc;
        echo "<br>";
        echo "INSS: ", $inss;
        echo "<br>";
        calculaIRRF($inss, $bruto, $dependentes);
    }



    function calculaIRRF($inss, $bruto, $dependentes)
    {
        $valor = 189.59;
        $baseIR2 = $bruto - ($inss + ($dependentes * $valor));
        $aliquota = 0;
        $deducao = 0;
        $irrf = 0;

        switch ($baseIR2) {
            case $baseIR2 <= 1903.98:
                $aliquota = 0;
                $deducao = 0;
                $irrf = $baseIR2  * $aliquota - $deducao;
                break;
            case $baseIR2 >= 1903.99 and  $baseIR2 <= 2826.65:
                $aliquota = 7.5 / 100;
                $deducao = 142.80;
                $irrf = $baseIR2  * $aliquota - $deducao;
                break;
            case $baseIR2 >= 2826.66 and  $baseIR2 <= 3751.05:
                $aliquota = 15 / 100;
                $deducao = 354.80;
                $irrf = $baseIR2  * $aliquota - $deducao;
                break;
            case $baseIR2 >= 2826.66 and  $baseIR2 <= 3751.05:
                $aliquota = 15 / 100;
                $deducao = 354.80;
                $irrf = $baseIR2  * $aliquota - $deducao;
                break;
            case $baseIR2 >= 3751.06 and  $baseIR2 <= 4664.68:
                $aliquota = 22.5 / 100;
                $deducao = 636.13;
                $irrf = $baseIR2  * $aliquota - $deducao;
                break;
            case $baseIR2 >= 4664.69:
                $aliquota = 27.5 / 100;
                $deducao = 869.36;
                $irrf = $baseIR2  * $aliquota - $deducao;

                break;
        }
        echo "Quantidade dependentes: ", $dependentes;
        echo "<br>";
        echo "Base IR 2: ", $baseIR2;
        echo "<br>";
        echo "Aliquota: ", $aliquota;
        echo "<br>";
        echo "Dedução: ", $deducao;
        echo "<br>";
        echo "IRRF: ", $irrf;
        echo "<br>";
    }
    ?>
