<?php
declare(strict_types = 1);

class Persona8 {
    public const LIMITE_EDAT = 66;
    private static int $limite_edat = self::LIMITE_EDAT;

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
        return $this->getNom() . ' ' . $this->getCognoms();
    }

    public function estaJubilado(): bool {
        return $this->getEdat() >= self::$limite_edat;
    }

    public static function modificaLimite(int $nouLimitEdat): void {
        self::$limite_edat = $nouLimitEdat;
    }

    public static function toHtml(Persona8 $persona): string {
        $cadena = '';
        $nom = $persona->getNom();
        $cognoms = $persona->getCognoms();

        $cadena.= "<p>$nom $cognoms</p>";
        return $cadena;
    }
}