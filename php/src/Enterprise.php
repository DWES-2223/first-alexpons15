<?php
declare(strict_types = 1);

class Enterprise implements JSerializable {
    private string $nom;
    private string $direccio;
    private array $treballadors;

    public function __construct(string $nom, string $direccio)
    {
        $this->nom = $nom;
        $this->direccio = $direccio;
        $this->treballadors = [];
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getDireccio(): string
    {
        return $this->direccio;
    }

    public function setDireccio(string $direccio): void
    {
        $this->direccio = $direccio;
    }

    public function addWorker(MyWorker $t): void
    {
        $this->treballadors[] = $t;
    }

    public function listWorkersHtml() : string {
        $cadena = '';
        foreach ($this->treballadors as $treballador) {
            $cadena .= MyWorker::toHtml($treballador) . PHP_EOL;
        }
        return rtrim($cadena);
    }

    public function getCosteNominas(): float {
        $total = 0.0;
        foreach ($this->treballadors as $treballador) {
            $total += $treballador->calcularSueldo();
        }
        return $total;
    }

    public function toJSON(): string
    {
        $mapa = [];
        foreach ($this as $clave => $valor) {
            if (is_array($valor)) {
                foreach ($valor as $worker) {
                    $mapa[$clave][] = $worker->toJSON();
                }
            }
            $mapa[$clave] = $valor;
        }
        return json_encode($mapa);
    }

    public function toSerialize(): string
    {
        return serialize($this);
    }
}