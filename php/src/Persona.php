<?php
declare(strict_types = 1);

class Persona {
    private string $nom;
    private string $cognoms;
    private int $edat;

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getCognoms(): string
    {
        return $this->cognoms;
    }

    public function setCognoms(string $cognoms): void
    {
        $this->cognoms = $cognoms;
    }

    public function getEdat(): int
    {
        return $this->edat;
    }

    public function setEdat(int $edat): void
    {
        $this->edat = $edat;
    }

    public function getNombreCompleto(): string {
        return $this->getNom() . ' ' . $this->getCognoms();
    }
    
    public function estaJubilado(): bool {
        return $this->getEdat() >= 67;
    }
}