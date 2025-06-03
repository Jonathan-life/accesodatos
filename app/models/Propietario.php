<?php

require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../entities/PropietarioEntidad.php';

class Propietario {

    private $pdo = null;

    public function __construct() {
        $this->pdo = Database::getConexion();
    }

    public function getAll(): array {
        $sql = "
            SELECT 
                idpropietario,
                apellidos,
                nombres
            FROM propietario
            ORDER BY apellidos, nombres
        ";
        $query = $this->pdo->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll(PDO::FETCH_ASSOC);

        $lista = [];
        foreach ($rows as $row) {
            $lista[] = new PropietarioEntidad(
                (int)$row['idpropietario'], 
                $row['apellidos'], 
                $row['nombres']
            );
        }
        return $lista;
    }
}
