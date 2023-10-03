<?php
class Empleado extends Persona8 {
    const LIMIT_IMPOSTOS = 3333;
    public function __construct(
        private float $sou,
        private array $telefons,
        string $nom,
        string $cognoms,
        int $edat = null)
    {
        parent::__construct($nom, $cognoms, $edat);
    }

    public function getSou(): float
    {
        return $this->sou;
    }

    public function setSou(float $sou): void
    {
        $this->sou = $sou;
    }

    public function getTelefons(): array
    {
        return $this->telefons;
    }

    public function setTelefons(array $telefons): void
    {
        $this->telefons = $telefons;
    }

    public function anyadirTelefono(int $telefono) : void {
        $this->telefons[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(',', $this->telefons);
    }

    public function vaciarTelefonos(): void {
        $this->telefons = array();
    }

    public function debePagarImpuestos(): bool {
        return $this->sou > self::LIMIT_IMPOSTOS;
    }

    public static function toHtml(Empleado $emp): string {
        $cadena = '';
        $nom = $emp->getNom();
        $cognoms = $emp->getCognoms();

        $cadena.= "<p>$nom $cognoms</p>";

        $cadena .= PHP_EOL . "<ul>" . PHP_EOL;
        foreach ($emp->getTelefons() as $telefon) {
            $cadena .= "<li>$telefon</li>" . PHP_EOL;
        }
        $cadena .= '</ul>';

        return $cadena;
    }
}