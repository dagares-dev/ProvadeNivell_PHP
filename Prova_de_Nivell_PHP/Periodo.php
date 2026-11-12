<?php
declare(strict_types=1);

class Periodo {

    public function __construct(
        private string $nombre,
        private int $any_inicio,
        private int $any_final,
        private array $emperadores,
        private string $descripcion,
    ) {}

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getAnyInicio(): int {
        return $this->any_inicio;
    }

    public function getAnyFinal(): int {
        return $this->any_final;
    }

    public function getEmperadores(): array {
        return $this->emperadores;
    }

    public function getDescripcion(): string {
        return $this->descripcion;
    }

    public function getDuracion(): int {
        return $this->any_final - $this->any_inicio;
    }

    public function __toString(): string {
        return "Periodo: " . $this->nombre . " | " . "(" . $this->any_inicio . ")" . " - " . "(" . $this->any_final . ")" . " | " . "Emperadores: " . join(", ", $this->emperadores) . " | " . $this->descripcion . "<br>";
    }
}