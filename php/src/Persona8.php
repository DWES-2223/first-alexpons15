<?php
class Persona8 {
    const LIMITE_EDAT = 66;
    public static int $limite_edat = 66;
    //public static int $limite_edat = LIMITE_EDAT;

    public function __construct(
        private string $nom,
        private string $cognoms,
        private int $edat = 25)
    {}

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
        return $this->edat >= self::LIMITE_EDAT;
    }

    public static function modificaLimite(int $nouLimitEdat): void {
        self::$limite_edat = $nouLimitEdat;
    }
}