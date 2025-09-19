<div class="content-header">
    <h2>Dashboard General</h2>
</div>
<div class="content-body">
    <div class="stats-grid" id="statsGrid"></div>
    <div class="card">
        <div class="card-header">Alertas de Stock</div>
        <div class="card-body">
            <div class="actions">
                <button class="btn btn-primary" onclick="loadDashboard()">
                    Actualizar Dashboard
                </button>
                <button class="btn btn-warning" onclick="showStockAlerts()">
                    Ver Alertas de Stock
                </button>
            </div>
            <div id="alertsContainer"></div>
        </div>
    </div>
</div>
