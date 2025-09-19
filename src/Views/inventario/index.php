<div class="content-header">
    <h2>Control de Inventario</h2>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">Stock Actual</div>
        <div class="card-body">
            <div class="actions">
                <button class="btn btn-primary" onclick="mostrarStock()">
                    Actualizar Stock
                </button>
                <button class="btn btn-success" onclick="exportarStock()">
                    Exportar CSV
                </button>
                <button class="btn btn-warning" onclick="mostrarAlertas()">
                    Solo Alertas
                </button>
            </div>
            <div id="loading" class="loading">Cargando inventario...</div>
            <div class="table-container">
                <div id="stockTable"></div>
            </div>
        </div>
    </div>
</div>
