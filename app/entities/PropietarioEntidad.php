<?php

class PropietarioEntidad
{
    private int $idpropietario;
    private string $apellidos;
    private string $nombres;

    public function __construct(int $idpropietario = 0, string $apellidos = '', string $nombres = '')
    {
        $this->idpropietario = $idpropietario;
        $this->apellidos = $apellidos;
        $this->nombres = $nombres;
    }

    // Getters
    public function getIdpropietario(): int
    {
        return $this->idpropietario;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function getNombres(): string
    {
        return $this->nombres;
    }

    // Setters
    public function setIdpropietario(int $idpropietario): void
    {
        $this->idpropietario = $idpropietario;
    }

    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function setNombres(string $nombres): void
    {
        $this->nombres = $nombres;
    }

    // Método para obtener nombre completo
    public function getNombreCompleto(): string
    {
        return $this->apellidos . ' ' . $this->nombres;
    }
}
