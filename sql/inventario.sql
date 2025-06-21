CREATE DATABASE inventario_club;
USE inventario_club;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  usuario VARCHAR(50) UNIQUE,
  contrasena VARCHAR(255),
  rol ENUM('admin','usuario') DEFAULT 'usuario'
);

CREATE TABLE categorias (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) UNIQUE
);

CREATE TABLE articulos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100),
  descripcion TEXT,
  cantidad INT,
  ubicacion VARCHAR(100),
  estado ENUM('nuevo','usado','deteriorado'),
  fecha_ingreso DATE,
  imagen VARCHAR(255),
  categoria_id INT,
  FOREIGN KEY(categoria_id) REFERENCES categorias(id)
);

CREATE TABLE movimientos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  articulo_id INT,
  tipo ENUM('entrada','salida'),
  cantidad INT,
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  usuario_id INT,
  FOREIGN KEY(articulo_id) REFERENCES articulos(id),
  FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
);
