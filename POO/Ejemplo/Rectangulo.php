<?php

declare(strict_types=1); // Activar tipado fuerte

class RectanguloException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct($message);
    }
}

// Clase Rectangulo       
class Rectangulo
{
    private float $base;
    private float $altura;
    public function __construct(float $base, float $altura)
    {
        if ($base <= 0 || $altura <= 0) {
            throw new RectanguloException("La base y la altura deben ser valores positivos.");
        }
        $this->base = $base;
        $this->altura = $altura;
    }
    public function getBase(): float
    {
        return $this->base;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }
    public function setBase(float $base): void
    {
        if ($base <= 0) {
            throw new RectanguloException("La base debe ser un valor positivo.");
        }
        $this->base = $base;
    }
    public function setAltura(float $altura): void
    {
        if ($altura <= 0) {
            throw new RectanguloException("La altura debe ser un valor positivo.");
        }
        $this->altura = $altura;
    }
    public function calcularArea(): float
    {
        return $this->base * $this->altura;
    }

    // Ejemplo de método estático
    public static function ejemplo(): void
    {
        echo "Este es un método estático de la clase Rectangulo.\n";
    }
    public function __toString(): string
    {
        return "Rectángulo de base " . $this->base . " y altura " . $this->altura .
            ". Área: " . $this->calcularArea();
    }
}

// Uso de la clase Rectangulo
try {
    $rectangulo = new Rectangulo(10.5, 5.2);
    echo "<p>Base: " . $rectangulo->getBase() . "</p>";
    echo "<p>Altura: " . $rectangulo->getAltura() . "</p>";
    echo "<p>Área: " . $rectangulo->calcularArea() . "</p>";
    // Probando método estático
    Rectangulo::ejemplo();
    $rectangulo->setBase(15.0);
    $rectangulo->setAltura(10.0);
    // Probar toString
    echo "<p>" . $rectangulo . "</p>";
    // Lanzar excepción con datos inválidos
    $rectangulo->setAltura(-5.0); // Esto generará una excepción
} catch (RectanguloException $e) {
    echo "<p> Excepción capturada: " . $e->getMessage() . "</p>";
}
