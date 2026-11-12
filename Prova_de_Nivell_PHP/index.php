<?php
declare(strict_types=1);

require_once 'Web_Historium.php';

$web1 = new Web("Historium");

$periodo1 = new Periodo("Monarquía", -753, -509, ["Rómulo", "Numa Pompilio"], "Primera etapa de Roma, gobernada por reyes.");
$periodo2 = new Periodo("República", -509, -27, ["Cicerón", "Julio César"], "Gobierno de cónsules y senado.");
$periodo3 = new Periodo("Alto Imperio", -27, 284, ["Augusto", "Tiberio", "Trajano"], "Apogeo y expansión del imperio.");
$periodo4 = new Periodo("Bajo Imperio", 284, 476, ["Diocleciano", "Constantino"], "Crisis y caída del imperio de occidente.");

$web1->addPeriodo($periodo1);
$web1->addPeriodo($periodo2);
$web1->addPeriodo($periodo3);
$web1->addPeriodo($periodo4);

echo "Periodo más largo: <br>";
echo $web1->saberPeriodoMasLargo();

echo "<br>Periodos de Rómulo: <br>";
$encontrados = $web1->saberPeriodosPorEmperador("Rómulo");
if (empty($encontrados)) {
    echo "Este emperador no gobierna en ningún periodo.<br>";
} else {
    foreach ($encontrados as $periodo) {
        echo $periodo;
    }
}