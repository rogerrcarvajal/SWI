<div class="content-header">
    <h2>Registro de Movimientos</h2>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">Nuevo Movimiento</div>
        <div class="card-body">
            <form id="formMovimiento" onsubmit="registrarMovimiento(event)">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="codigoMov">Código del Producto *</label>
                        <div class="autocomplete-container">
                            <input id="codigoMov" type="text" placeholder="Código del producto" required 
                                   onkeyup="buscarProductoAutocompletado()" 
                                   onblur="ocultarAutocompletado()" 
                                   onfocus="mostrarAutocompletado()">
                            <div id="autocompleteDropdown" class="autocomplete-dropdown"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fechaMov">Fecha *</label>
                        <input id="fechaMov" type="date" required>
                    </div>
                    <div class="form-group">
                        <label for="tipoMov">Tipo de Movimiento *</label>
                        <select id="tipoMov" required onchange="handleTipoChange()">
                            <option value="INGRESO">Ingreso</option>
                            <option value="SALIDA">Salida</option>
                            <option value="AJUSTE_POSITIVO">Ajuste Positivo</option>
                            <option value="AJUSTE_NEGATIVO">Ajuste Negativo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cantMov">Cantidad *</label>
                        <input id="cantMov" type="number" min="0.01" step="0.01" placeholder="Cantidad" required>
                    </div>
                    <div class="form-group">
                        <label for="obsMov">Observaciones</label>
                        <textarea id="obsMov" placeholder="Observaciones opcionales" rows="3"></textarea>
                    </div>
                </div>
                <div class="actions">
                    <button type="submit" class="btn btn-success">
                        Guardar Movimiento
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="limpiarFormMovimiento()">
                        Limpiar
                    </button>
                </div>
            </form>
            <div id="msgMov"></div>
        </div>
    </div>
</div>
