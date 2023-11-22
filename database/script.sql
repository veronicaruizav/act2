CREATE DATABASE celularkits;

 use celularkits;

CREATE TABLE producto(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  marca VARCHAR(50),
  codigo int(10),
  color VARCHAR(50),
  categoria VARCHAR(50),
  precio int(10)
  );

DESCRIBE producto;