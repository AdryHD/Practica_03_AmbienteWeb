-- =====================================================
-- BASE DE DATOS: practicas13
-- Práctica #3 - Ambiente Web Cliente Servidor
-- =====================================================

CREATE DATABASE IF NOT EXISTS `practicas13`
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE `practicas13`;

-- =====================================================
-- TABLA: principal
-- =====================================================
DROP TABLE IF EXISTS `abonos`;
DROP TABLE IF EXISTS `principal`;

CREATE TABLE `principal` (
  `Id_Compra`   BIGINT(20)     NOT NULL AUTO_INCREMENT,
  `Precio`      DECIMAL(18,2)  DEFAULT NULL,
  `Saldo`       DECIMAL(18,2)  DEFAULT NULL,
  `Descripcion` VARCHAR(500)   DEFAULT NULL,
  `Estado`      VARCHAR(100)   DEFAULT NULL,
  PRIMARY KEY (`Id_Compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `principal` VALUES
  (1, 50000.00, 50000.00, 'Producto 1', 'Pendiente'),
  (2, 13500.00, 13500.00, 'Producto 2', 'Pendiente'),
  (3, 83600.00, 83600.00, 'Producto 3', 'Pendiente'),
  (4,  1220.00,  1220.00, 'Producto 4', 'Pendiente'),
  (5,   480.00,   480.00, 'Producto 5', 'Pendiente');

-- =====================================================
-- TABLA: abonos
-- =====================================================
CREATE TABLE `abonos` (
  `Id_Abono`  BIGINT(20)    NOT NULL AUTO_INCREMENT,
  `Id_Compra` BIGINT(20)    NOT NULL,
  `Monto`     DECIMAL(18,2) NOT NULL,
  `Fecha`     DATETIME      DEFAULT NULL,
  PRIMARY KEY (`Id_Abono`),
  CONSTRAINT `FK_Abonos_Principal`
    FOREIGN KEY (`Id_Compra`) REFERENCES `principal` (`Id_Compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- =====================================================
-- SP 1: Consultar todas las compras (Vista Consulta - tabla principal)
--        Ordenadas: primero Pendiente, luego Cancelado
-- =====================================================
DROP PROCEDURE IF EXISTS sp_ConsultarCompras;
DELIMITER //
CREATE PROCEDURE sp_ConsultarCompras()
BEGIN
    SELECT Id_Compra, Descripcion, Precio, Saldo, Estado
    FROM principal
    ORDER BY FIELD(Estado, 'Pendiente', 'Cancelado');
END //
DELIMITER ;

-- =====================================================
-- SP 2: Consultar compras pendientes (Vista Registro - dropdown)
-- =====================================================
DROP PROCEDURE IF EXISTS sp_ConsultarComprasPendientes;
DELIMITER //
CREATE PROCEDURE sp_ConsultarComprasPendientes()
BEGIN
    SELECT Id_Compra, Descripcion, Saldo
    FROM principal
    WHERE Estado = 'Pendiente';
END //
DELIMITER ;

-- =====================================================
-- SP 3: Consultar saldo de una compra (Vista Registro - Ajax)
-- =====================================================
DROP PROCEDURE IF EXISTS sp_ConsultarSaldoCompra;
DELIMITER //
CREATE PROCEDURE sp_ConsultarSaldoCompra(IN p_Id_Compra BIGINT)
BEGIN
    SELECT Saldo
    FROM principal
    WHERE Id_Compra = p_Id_Compra;
END //
DELIMITER ;

-- =====================================================
-- SP 4: Registrar abono (Vista Registro - submit formulario)
--        - Inserta en abonos
--        - Descuenta saldo en principal
--        - Si saldo queda en 0, actualiza Estado a Cancelado
-- =====================================================
DROP PROCEDURE IF EXISTS sp_RegistrarAbono;
DELIMITER //
CREATE PROCEDURE sp_RegistrarAbono(
    IN p_Id_Compra BIGINT,
    IN p_Monto     DECIMAL(18,2),
    IN p_Fecha     DATETIME
)
BEGIN
    INSERT INTO abonos (Id_Compra, Monto, Fecha)
    VALUES (p_Id_Compra, p_Monto, p_Fecha);

    UPDATE principal
    SET Saldo = Saldo - p_Monto
    WHERE Id_Compra = p_Id_Compra;

    UPDATE principal
    SET Estado = 'Cancelado'
    WHERE Id_Compra = p_Id_Compra
      AND Saldo = 0;
END //
DELIMITER ;
