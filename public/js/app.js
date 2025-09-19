let currentTab = 'dashboard';
let searchTimeout;
let autocompleteTimeout;

document.addEventListener('DOMContentLoaded', () => {
    initializeApp();
});

function initializeApp() {
    setDefaultDates();
    // loadListas(); // Will be replaced with API call
    
    const urlParams = new URLSearchParams(window.location.search);
    const page = urlParams.get('page') || 'dashboard';
    
    updateActiveNav(page);

    // Load data for the current page
    if (page === 'inventario') {
        mostrarStock();
    } else if (page === 'dashboard') {
        // loadDashboard(); // To be implemented
    }
}

function updateActiveNav(page) {
    document.querySelectorAll('.nav-link').forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').includes(`page=${page}`)) {
            link.classList.add('active');
        }
    });
}

function setDefaultDates() {
  const today = new Date();
  const monthAgo = new Date();
  monthAgo.setMonth(monthAgo.getMonth() - 1);

  const fechaMov = document.getElementById("fechaMov");
  const fechaDesde = document.getElementById("fechaDesde");
  const fechaHasta = document.getElementById("fechaHasta");

  if(fechaMov) fechaMov.valueAsDate = today;
  if(fechaDesde) fechaDesde.valueAsDate = monthAgo;
  if(fechaHasta) fechaHasta.valueAsDate = today;
}

// The following functions will be adapted to use fetch() to call the new PHP API

function loadDashboard() {
  console.log("loadDashboard() called. To be implemented with API call.");
}

function loadListas() {
  console.log("loadListas() called. To be implemented with API call.");
}

function buscarProductoAutocompletado() {
  console.log("buscarProductoAutocompletado() called. To be implemented with API call.");
}

function mostrarAutocompletado(productos = []) {
  console.log("mostrarAutocompletado() called.");
}

function seleccionarProducto(codigo, nombre) {
  console.log(`seleccionarProducto(${codigo}, ${nombre}) called.`);
}

function ocultarAutocompletado() {
  console.log("ocultarAutocompletado() called.");
}

function registrarProducto(event) {
  event.preventDefault();
  console.log("registrarProducto() called. To be implemented with API call.");
}

function registrarMovimiento(event) {
  event.preventDefault();
  console.log("registrarMovimiento() called. To be implemented with API call.");
}

function handleTipoChange() {
  console.log("handleTipoChange() called.");
}

function buscarProducto() {
  console.log("buscarProducto() called. To be implemented with API call.");
}

function buscarEnTiempoReal() {
  console.log("buscarEnTiempoReal() called.");
}

function displaySearchResults(data) {
  console.log("displaySearchResults() called.");
}

function mostrarStock() {
    const loading = document.getElementById("loading");
    const container = document.getElementById("stockTable");

    if (!container) return; // Don't run if the element doesn't exist

    loading.style.display = "block";
    container.innerHTML = "";

    fetch('../api/productos.php')
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            loading.style.display = "none";
            displayStockTable(data, container);
        })
        .catch(error => {
            loading.style.display = "none";
            container.innerHTML = `<div class="message error">Error al cargar stock: ${error.message}</div>`;
            console.error('Error fetching stock:', error);
        });
}

function displayStockTable(data, container) {
    if (!data || data.length === 0) {
        container.innerHTML = '<div class="message warning">No hay productos registrados</div>';
        return;
    }

    let html = `
        <table>
          <thead>
            <tr>
              <th>Código</th>
              <th>Nombre</th>
              <th>Unidad</th>
              <th>Grupo</th>
              <th>Stock Mín.</th>
              <th>Stock Actual</th>
              <th>Estado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
      `;

    data.forEach(producto => {
        let statusClass = 'status-normal';
        let estado = 'Normal';
        
        const stockActual = parseFloat(producto.stock_actual);
        const stockMinimo = parseFloat(producto.stock_minimo);

        if (stockActual <= 0) {
            statusClass = 'status-zero';
            estado = 'Sin Stock';
        } else if (stockActual <= stockMinimo && stockMinimo > 0) {
            statusClass = 'status-low';
            estado = 'Stock Bajo';
        }

        html += `
          <tr class="${statusClass}">
            <td>${producto.codigo}</td>
            <td>${producto.nombre}</td>
            <td>${producto.unidad}</td>
            <td>${producto.grupo}</td>
            <td>${stockMinimo.toFixed(2)}</td>
            <td>${stockActual.toFixed(2)}</td>
            <td>${estado}</td>
            <td>
              <button class="btn btn-info" onclick="verDetalleProducto('${producto.codigo}')" title="Ver detalle">
                Ver
              </button>
            </td>
          </tr>
        `;
    });

    html += '</tbody></table>';
    container.innerHTML = html;
}

function mostrarAlertas() {
  console.log("mostrarAlertas() called. To be implemented with API call.");
}

function showStockAlerts() {
  console.log("showStockAlerts() called. To be implemented with API call.");
}

function mostrarHistorial() {
  console.log("mostrarHistorial() called. To be implemented with API call.");
}

function displayHistorialTable(data) {
  console.log("displayHistorialTable() called.");
}

function validarIntegridad() {
  console.log("validarIntegridad() called. To be implemented with API call.");
}

function inicializarSistema() {
  console.log("inicializarSistema() called. To be implemented with API call.");
}

function exportarStock() {
  console.log("exportarStock() called. To be implemented with API call.");
}

function limpiarFormProducto() {
  console.log("limpiarFormProducto() called.");
}

function limpiarFormMovimiento() {
  console.log("limpiarFormMovimiento() called.");
}

function limpiarBusqueda() {
  console.log("limpiarBusqueda() called.");
}

function limpiarTodosFormularios() {
  console.log("limpiarTodosFormularios() called.");
}

function showMessage(containerId, message, type) {
  console.log(`showMessage(${containerId}, ${message}, ${type}) called.`);
}

function verDetalleProducto(codigo) {
  alert(`Funcionalidad de detalle para producto: ${codigo}\nEsta función se implementará próximamente.`);
}

function confirmarReset() {
  alert('Funcionalidad de reset no implementada por seguridad.');
}

function exportarReporte() {
  console.log("exportarReporte() called. To be implemented with API call.");
}
