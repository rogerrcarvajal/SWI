<div class="content-header">
    <h2>Reportes y Análisis</h2>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">Historial de Movimientos</div>
        <div class="card-body">
            <div class="form-grid">
                <div class="form-group">
                    <label for="fechaDesde">Fecha Desde</label>
                    <input id="fechaDesde" type="date" required>
                </div>
                <div class="form-group">
                    <label for="fechaHasta">Fecha Hasta</label>
                    <input id="fechaHasta" type="date" required>
                </div>
                <div class="form-group">
                    <label for="filtroTipo">Filtrar por Tipo</label>
                    <select id="filtroTipo">
                        <option value="">Todos los movimientos</option>
                        <option value="INGRESO">Solo Ingresos</option>
                        <option value="SALIDA">Solo Salidas</option>
                        <option value="AJUSTE_POSITIVO">Solo Ajustes Positivos</option>
                        <option value="AJUSTE_NEGATIVO">Solo Ajustes Negativos</option>
                    </select>
                </div>
            </div>
            <div class="actions">
                <button class="btn btn-primary" onclick="mostrarHistorial()">
                    Generar Reporte
                </button>
                <button class="btn btn-success" onclick="exportarReporte()">
                    Exportar Reporte
                </button>
            </div>
            <div class="table-container">
                <div id="historialTable"></div>
            </div>
        </div>
    </div>
</div>
