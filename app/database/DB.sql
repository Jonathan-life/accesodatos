CREATE database veterinaria;

use veterinaria;


CREATE TABLE propietario (
  idpropietario INT AUTO_INCREMENT PRIMARY KEY,
  apellidos VARCHAR(40) NOT NULL,
  nombres VARCHAR(40) NOT NULL
) ENGINE = InnoDB;


CREATE TABLE mascotas (
  idmascota INT AUTO_INCREMENT PRIMARY KEY,
  idpropietario INT NOT NULL,
  tipo ENUM('Perro', 'Gato') NOT NULL,
  nombre VARCHAR(40) NOT NULL,
  color VARCHAR(40) NOT NULL,
  genero ENUM('si', 'no') NOT NULL DEFAULT 'si',
  CONSTRAINT fk_idpropietario FOREIGN KEY (idpropietario) REFERENCES propietario(idpropietario)
) ENGINE = InnoDB;




INSERT INTO propietario (apellidos, nombres) VALUES
('Pérez', 'Juan'),
('Rodríguez', 'Ana');



INSERT INTO mascotas (idpropietario, tipo, nombre, color, genero) VALUES
(1, 'Perro', 'Max', 'Marrón', 'si'),
(1, 'Gato', 'Luna', 'Blanco', 'no'),
(2, 'Perro', 'Rocky', 'Negro', 'si'),
(2, 'Gato', 'Michi', 'Gris', 'no');


SELECT * FROM mascotas;


SELECT 
    MA.idmascota,
    MA.nombre,
    MA.tipo,
    MA.color,
    MA.genero,
    CONCAT(PR.apellidos, ' ', PR.nombres) AS propietario
FROM 
    mascotas MA
INNER JOIN 
    propietario PR ON MA.idpropietario = PR.idpropietario
ORDER BY 
    MA.nombre;




