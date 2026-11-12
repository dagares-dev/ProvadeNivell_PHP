<?php
declare(strict_types=1);

require_once 'Periodo.php';


class Web {

private array $periodos = [];

public function __construct(
    private string $nombre,
){}

public function getNombre(): string{
    return $this->nombre;
}

public function addPeriodo(Periodo $periodo): void {
    $this->periodos[] = $periodo;
}

public function saberPeriodoMasLargo(): Periodo {
    $masLargo = $this->periodos[0];
    foreach ($this->periodos as $periodo) {
        if ($periodo->getDuracion() > $masLargo->getDuracion()) {
            $masLargo = $periodo;
        }
    }
    return $masLargo;
}

public function saberPeriodosPorEmperador(string $emperador): array {
    $emperadorPeriodo = [];
    foreach ($this->periodos as $periodo) {
        if (in_array($emperador, $periodo->getEmperadores())) {
            $emperadorPeriodo[] = $periodo;
        }
    }
    return $emperadorPeriodo;
}
}
