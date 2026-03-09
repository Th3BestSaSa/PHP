<?php
declare(strict_types=1);

class Usuario {
    private string $nombre;
    private string $password;

    public function __construct(string $nombre, string $password) {
        $this->nombre = $nombre;
        $this->password = $password;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    // Método para validar si la contraseña coincide
    public function validarPassword(string $password): bool {
        return $this->password === $password;
    }

   
    public function __toString() {
        return "Usuario {$this->nombre}";
    }
}