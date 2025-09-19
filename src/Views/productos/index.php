<div class="content-header">
    <h2>Gestión de Productos</h2>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">Registrar Nuevo Producto</div>
        <div class="card-body">
            <form id="formProducto" onsubmit="registrarProducto(event)">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="codigoProd">Código *</label>
                        <input id="codigoProd" type="text" placeholder="Código único del producto" required>
                    </div>
                    <div class="form-group">
                        <label for="nombreProd">Nombre *</label>
                        <input id="nombreProd" type="text" placeholder="Nombre del producto" required>
                    </div>
                    <div class="form-group">
                        <label for="unidadProd">Unidad de Medida</label>
                        <select id="unidadProd" required></select>
                    </div>
                    <div class="form-group">
                        <label for="grupoProd">Grupo</label>
                        <select id="grupoProd" required></select>
                    </div>
                    <div class="form-group">
                        <label for="stockMinProd">Stock Mínimo</label>
                        <input id="stockMinProd" type="number" min="0" value="0">
                    </div>
                </div>
                <div class="actions">
                    <button type="submit" class="btn btn-success">
                        Registrar Producto
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="limpiarFormProducto()">
                        Limpiar
                    </button>
                </div>
            </form>
            <div id="msgProd"></div>
        </div>
    </div>
</div>
