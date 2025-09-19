-- PostgreSQL Schema for the Inventory System

-- Drop tables if they exist to start fresh
DROP TABLE IF EXISTS movimientos;
DROP TABLE IF EXISTS productos;
DROP TABLE IF EXISTS grupos;
DROP TABLE IF EXISTS unidades;

-- Table for product groups
CREATE TABLE grupos (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL UNIQUE
);

-- Table for units of measure
CREATE TABLE unidades (
    id SERIAL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE
);

-- Table for products
CREATE TABLE productos (
    id SERIAL PRIMARY KEY,
    codigo VARCHAR(50) NOT NULL UNIQUE,
    nombre VARCHAR(255) NOT NULL,
    id_unidad INTEGER NOT NULL,
    id_grupo INTEGER NOT NULL,
    stock_minimo NUMERIC(10, 2) DEFAULT 0,
    stock_actual NUMERIC(10, 2) DEFAULT 0,
    fecha_creacion TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_unidad FOREIGN KEY (id_unidad) REFERENCES unidades(id),
    CONSTRAINT fk_grupo FOREIGN KEY (id_grupo) REFERENCES grupos(id)
);

-- Table for stock movements
CREATE TABLE movimientos (
    id SERIAL PRIMARY KEY,
    id_producto INTEGER NOT NULL,
    fecha DATE NOT NULL,
    tipo_movimiento VARCHAR(20) NOT NULL CHECK (tipo_movimiento IN ('INGRESO', 'SALIDA', 'AJUSTE_POSITIVO', 'AJUSTE_NEGATIVO')),
    cantidad NUMERIC(10, 2) NOT NULL,
    observaciones TEXT,
    fecha_registro TIMESTAMP WITH TIME ZONE DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_producto FOREIGN KEY (id_producto) REFERENCES productos(id)
);

-- Indexes for performance
CREATE INDEX idx_productos_codigo ON productos(codigo);
CREATE INDEX idx_productos_nombre ON productos(nombre);
CREATE INDEX idx_movimientos_fecha ON movimientos(fecha);
CREATE INDEX idx_movimientos_tipo ON movimientos(tipo_movimiento);

-- Initial data for groups and units
INSERT INTO grupos (nombre) VALUES ('General'), ('Oficina'), ('Limpieza'), ('Tecnología');
INSERT INTO unidades (nombre) VALUES ('Unidad'), ('Caja'), ('Paquete'), ('Litro'), ('Kilogramo');

