<?php

require_once __DIR__ . '/../Core/Database.php';

class Producto {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getConnection();
    }

    /**
     * Get all products with their unit and group names.
     * @return array
     */
    public function getAll() {
        $query = "
            SELECT 
                p.id, p.codigo, p.nombre, 
                u.nombre as unidad, 
                g.nombre as grupo, 
                p.stock_minimo, p.stock_actual
            FROM productos p
            JOIN unidades u ON p.id_unidad = u.id
            JOIN grupos g ON p.id_grupo = g.id
            ORDER BY p.nombre ASC;
        ";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            // Handle exception
            error_log($e->getMessage());
            return [];
        }
    }

    // Other methods like findByCode, create, update, delete will be implemented here.
}
