<?php
class Persona7 {
    private string $nom;
    private string $cognoms;
    private int $edat;

    public function __construct(string $nom, string $cognoms, int $edat = 25) {
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->edat = $edat;
    }

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
        return $this->nom . ' ' . $this->cognoms;
    }
    
    public function estaJubilado(): bool {
        return $this->edat >= 67;
    }
}