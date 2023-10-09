<?php
declare(strict_types = 1);

class Employee extends MyWorker {
    private int $horasTrabajadas;
    private float $precioPorHora;

    public function __construct(string $nombre, string $apellidos, int $edad, int $horasTrabajadas, float $precioPorHora)
    {
        parent::__construct(nom: $nombre, cognoms: $apellidos, edad: $edad);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioPorHora = $precioPorHora;
        parent::setSou($this->calcularSueldo());
    }

    public function getHorasTrabajadas(): int
    {
        return $this->horasTrabajadas;
    }

    public function setHorasTrabajadas(int $horasTrabajadas): void
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function getPrecioPorHora(): float
    {
        return $this->precioPorHora;
    }

    public function setPrecioPorHora(float $precioPorHora): void
    {
        $this->precioPorHora = $precioPorHora;
    }

    public function calcularSueldo(): float {
        return $this->getHorasTrabajadas() * $this->getPrecioPorHora();
    }
}