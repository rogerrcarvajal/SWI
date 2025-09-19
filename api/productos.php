<?php

header('Content-Type: application/json');

require_once __DIR__ . '/../src/Models/Producto.php';

// Simple error handling
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

try {
    $productoModel = new Producto();
    $productos = $productoModel->getAll();
    echo json_encode($productos);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'An error occurred on the server.', 'details' => $e->getMessage()]);
}
