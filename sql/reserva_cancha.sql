CREATE DATABASE reserva_cancha;

USE reserva_cancha;

CREATE TABLE tm_usuario (
  user_id int(11) PRIMARY KEY AUTO_INCREMENT,
  user_usu varchar(50) NOT NULL,
  user_pass varchar(50) NOT NULL,
  user_nom varchar(100) NOT NULL,
  user_ape varchar(100) NOT NULL,
  user_correo varchar(100) NOT NULL,
  fech_crea datetime NOT NULL,
  fech_modi datetime NOT NULL,
  fech_elim datetime NOT NULL,
  est int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO tm_usuario (user_usu, user_pass, user_nom, user_ape, user_correo, fech_crea, fech_modi, fech_elim, est) 
VALUES
('admin', 'admin', 'ALEXANDER', 'RUBIO AÑASCO', 'alex_rubio@gmail.com', '2023-05-15 10:08:11', '2023-05-15 10:08:11', '2023-05-15 10:08:11', 1);












CREATE DATABASE DEV;
USE DEV;

CREATE TABLE persona (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(5),
    nombres VARCHAR(100),
    direccion VARCHAR(150)
);

-- Luego, puedes configurar la columna 'codigo' usando un trigger:
DELIMITER //
CREATE TRIGGER persona_before_insert
BEFORE INSERT ON persona
FOR EACH ROW
BEGIN
    SET NEW.codigo = CONCAT('P', LPAD(NEW.id, 4, '0'));
END;
//
DELIMITER ;

-- Ahora, puedes insertar datos en la tabla persona:
INSERT INTO persona (nombres, direccion) VALUES ('Rafael Benites', 'Lima');
INSERT INTO persona (nombres, direccion) VALUES ('Juan Benites', 'Lima');

SELECT * FROM persona;

INSERT INTO persona (nombres, direccion) VALUES ('Rafael Benites', 'Lima');
