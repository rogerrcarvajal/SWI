<div class="content-header">
    <h2>Búsqueda de Productos</h2>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">Buscar Productos</div>
        <div class="card-body">
            <div class="form-grid">
                <div class="form-group">
                    <label for="buscarTexto">Buscar por código, nombre o grupo</label>
                    <input id="buscarTexto" type="text" placeholder="Escriba para buscar..." onkeyup="buscarEnTiempoReal()">
                </div>
            </div>
            <div class="actions">
                <button class="btn btn-primary" onclick="buscarProducto()">
                    Buscar
                </button>
                <button class="btn btn-secondary" onclick="limpiarBusqueda()">
                    Limpiar
                </button>
            </div>
            <div class="table-container">
                <div id="resultadosBusqueda"></div>
            </div>
        </div>
    </div>
</div>
