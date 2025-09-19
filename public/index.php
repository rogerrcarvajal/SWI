<?php

// Simple router
$page = $_GET['page'] ?? 'dashboard';

// Whitelist of allowed pages
$allowedPages = [
    'dashboard',
    'productos',
    'movimientos',
    'inventario',
    'reportes',
    'buscar',
    'configuracion'
];

if (!in_array($page, $allowedPages)) {
    $page = 'dashboard'; // Default to dashboard if page not found
}

// Path to the view file
$content = __DIR__ . '/../src/Views/' . $page . '/index.php';

// If the specific view doesn't exist, you might want to default to a 404 page or the dashboard
if (!file_exists($content)) {
    $content = __DIR__ . '/../src/Views/dashboard/index.php';
}

// Include the main layout
require __DIR__ . '/../src/Views/layout/app.php';

