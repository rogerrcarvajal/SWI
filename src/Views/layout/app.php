
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
    <base target="_top">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="app-container">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h1>SWI</h1>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a class="nav-link active" href="?page=dashboard">
                        <span class="nav-icon">📊</span> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=inventario">
                        <span class="nav-icon">📦</span> Inventario
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=movimientos">
                        <span class="nav-icon">📋</span> Movimientos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=reportes">
                        <span class="nav-icon">📈</span> Reportes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=buscar">
                        <span class="nav-icon">🔍</span> Buscar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=configuracion">
                        <span class="nav-icon">⚙️</span> Configuración
                    </a>
                </li>
            </ul>
        </nav>

        <div class="main-content">
            <?php include $content; ?>
            <footer class="app-footer">
                <p>&copy; 2025 SWI. Todos los derechos reservados.</p>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>
</html>
