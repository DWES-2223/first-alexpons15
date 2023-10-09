<?php
declare(strict_types = 1);

class Manager extends MyWorker {
    private float $salario;

    public function __construct(string $nombre, string $apellidos, int $edat, float $salari) {
        parent::__construct(nom: $nombre, cognoms: $apellidos, edad: $edat);
        $this->salario = $salari;
        parent::setSou($this->calcularSueldo());
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function calcularSueldo(): float
    {
        return $this->getSalario() + ($this->getSalario() * $this->getEdat()/100);
    }
}