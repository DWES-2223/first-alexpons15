<?php
declare(strict_types = 1);

class Empleado extends Persona8 {
    public const LIMIT_IMPOSTOS = 3333;

    public function __construct(
        string $nom,
        string $cognoms,
        private float $sou = 0.0,
        private array $telefons = [],
        int $edat = null)
    {
        if ($edat != null) {
            parent::__construct($nom, $cognoms, $edat);
        } else {
            parent::__construct($nom, $cognoms);
        }
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
        return implode(',', $this->getTelefons());
    }

    public function vaciarTelefonos(): void {
        $this->telefons = [];
    }

    public function debePagarImpuestos(): bool {
        return $this->getSou() > self::LIMIT_IMPOSTOS;
    }

    public function __toString(): string
    {
        $cadena = parent::__toString();
        $cadena .= PHP_EOL . "<ul>" . PHP_EOL;
        foreach ($this->getTelefons() as $telefon) {
            $cadena .= "<li>$telefon</li>" . PHP_EOL;
        }
        $cadena .= '</ul>';

        return $cadena;
    }

    public static function toHtml(Persona8 $persona): string {
        if ($persona instanceof Empleado) {
            return $persona->__toString();
        } else {
            return Persona8::toHtml($persona);
        }
    }
}