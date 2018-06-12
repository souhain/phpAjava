SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `bodega` (
  `id_bodega` varchar(10) NOT NULL,
  `nombre_bodega` varchar(45) NOT NULL,
  `delegacion` varchar(45) NOT NULL,
  `colonia` varchar(45) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `numero_exterior` varchar(10) NOT NULL,
  `numero_interior` varchar(10) NOT NULL,
  `codigo_postal` varchar(10) NOT NULL,
  PRIMARY KEY (`id_bodega`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `bodega` (`id_bodega`, `nombre_bodega`, `delegacion`, `colonia`, `calle`, `numero_exterior`, `numero_interior`, `codigo_postal`) VALUES
('1', 'bodega1', 'delegacion1', 'colonia1', 'calle1', '1', '1', '111111'),
('10', 'bodega10', 'delegacion10', 'colonia10', 'calle10', '10', '10', '101010'),
('11', 'bodega11', 'delegacion11', 'colonia11', 'calle11', '11', '11', '111111'),
('12', 'la bodega mas grande', 'delegacion mas grande', 'colonia mas grande', 'calle grande', '900', '900', '909090'),
('2', 'bodega2', 'delegacion2', 'colonia2', 'calle2', '2', '2', '222222'),
('3', 'bodega3', 'delegacion3', 'colonia3', 'calle3', '3', '3', '333333'),
('4', 'bodega4', 'delegacion4', 'colonia4', 'calle4', '4', '4', '444444'),
('5', 'bodega5', 'delegacion5', 'colonia5', 'calle5', '5', '5', '555555'),
('6', 'bodega6', 'delegacion6', 'colonia6', 'calle6', '6', '6', '666666'),
('7', 'bodega7', 'delegacion7', 'colonia7', 'calle7', '7', '7', '777777'),
('8', 'bodega8', 'delegacion8', 'colonia8', 'calle8', '8', '8', '888888'),
('9', 'bodega8', 'delegacion9', 'colonia9', 'calle9', '9', '9', '999999');

CREATE TABLE IF NOT EXISTS `entradas` (
  `bodega_entrada` varchar(10) NOT NULL,
  `id_bodega` varchar(10) NOT NULL,
  `id_exedente` varchar(10) NOT NULL,
  `id_responsable_entrada` varchar(10) NOT NULL,
  `id_manufactura` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_unidad` varchar(10) NOT NULL,
  `id_tipo_manufactura` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`bodega_entrada`),
  KEY `id_exedente_idx` (`id_exedente`),
  KEY `id_responsable_entrada_idx` (`id_responsable_entrada`),
  KEY `id_manufacturaa_idx` (`id_manufactura`),
  KEY `id_unidadd_idx` (`id_unidad`),
  KEY `id_tipo_manufacturaa_idx` (`id_tipo_manufactura`),
  KEY `id_bodega_entrada_idx` (`id_bodega`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `entradas` (`bodega_entrada`, `id_bodega`, `id_exedente`, `id_responsable_entrada`, `id_manufactura`, `cantidad`, `id_unidad`, `id_tipo_manufactura`, `fecha`) VALUES
('1', '1', '1', '3', '1', 1, 'pz', 'eq', '2010-08-01'),
('10', '10', '3', '9', '10', 10, 'pz', 'eq', '2010-08-02'),
('11', '5', '2', '8', '3', 5, 'm3', 'eq', '2010-08-11'),
('14', '5', '4', '4', '3', 4, 'lt', 'eq', '2010-08-19'),
('2', '3', '1', '4', '2', 2, 'kg', 'ma', '2010-08-03'),
('3', '2', '2', '5', '3', 3, 'lt', 'eq', '2010-08-04'),
('4', '4', '2', '6', '4', 4, 'tn', 'he', '2010-08-05'),
('5', '5', '2', '2', '5', 5, 'lt', 'eq', '2010-08-06'),
('6', '6', '5', '6', '6', 6, 'm2', 'ma', '2010-08-07'),
('7', '7', '5', '7', '7', 7, 'm2', 'he', '2010-08-08'),
('8', '8', '5', '7', '8', 8, 'm3', 'eq', '2010-08-09'),
('9', '9', '8', '8', '9', 9, 'm3', 'ma', '2010-08-10');

CREATE TABLE IF NOT EXISTS `exedente` (
  `id_exedente` varchar(10) NOT NULL,
  `id_responsable_exedente` varchar(10) NOT NULL,
  `id_manufactura` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_unidad` varchar(10) NOT NULL,
  `id_tipo_manufactura` varchar(10) NOT NULL,
  PRIMARY KEY (`id_exedente`),
  KEY `id_responsable_exedente_idx` (`id_responsable_exedente`),
  KEY `id_manufacturaa_idx` (`id_manufactura`),
  KEY `id_uniddad_idx` (`id_unidad`),
  KEY `id_tip_manufactura_idx` (`id_tipo_manufactura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `exedente` (`id_exedente`, `id_responsable_exedente`, `id_manufactura`, `cantidad`, `id_unidad`, `id_tipo_manufactura`) VALUES
('1', '1', '1', 3, 'pz', 'eq'),
('10', '10', '3', 9, 'pz', 'eq'),
('11', '11', '9', 1, 'pz', 'he'),
('2', '3', '1', 4, 'kg', 'ma'),
('3', '3', '2', 5, 'lt', 'eq'),
('4', '4', '2', 6, 'tn', 'he'),
('5', '5', '2', 2, 'lt', 'eq'),
('6', '6', '5', 6, 'm2', 'ma'),
('7', '7', '5', 7, 'm2', 'he'),
('8', '8', '5', 7, 'm3', 'eq'),
('9', '9', '8', 8, 'm3', 'ma');

CREATE TABLE IF NOT EXISTS `manufactura` (
  `id_manufactura` varchar(10) NOT NULL,
  `nombre_manufactura` varchar(100) NOT NULL,
  `existencias` varchar(10) NOT NULL,
  `id_unidad` varchar(10) NOT NULL,
  `id_tipo_manufactura` varchar(10) NOT NULL,
  PRIMARY KEY (`id_manufactura`),
  KEY `id_unidad_idx` (`id_unidad`),
  KEY `id_tipo_manufactura_idx` (`id_tipo_manufactura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `manufactura` (`id_manufactura`, `nombre_manufactura`, `existencias`, `id_unidad`, `id_tipo_manufactura`) VALUES
('1', 'martillo', '10', 'lt', 'eq'),
('10', 'pala', '110', 'pz', 'eq'),
('11', 'tabique', '111', 'pz', 'ma'),
('2', 'barilla', '20', 'm2', 'ma'),
('3', 'semento', '30', 'm2', 'he'),
('4', 'tractor', '40', 'm3', 'eq'),
('5', 'cortadora', '50', 'dc', 'ma'),
('6', 'mezcladora', '60', 'tn', 'he'),
('7', 'graba', '70', 'tn', 'eq'),
('8', 'piedra', '80', 'pz', 'ma'),
('9', 'tepetate', '90', 'lt', 'he');

CREATE TABLE IF NOT EXISTS `obra` (
  `id_obra` varchar(10) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `descripcion_obra` varchar(200) NOT NULL,
  `delegacion` varchar(45) NOT NULL,
  `colonia` varchar(45) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `numero_exterior` varchar(10) NOT NULL,
  `numero_interior` varchar(10) NOT NULL,
  `codigo_postal` varchar(10) NOT NULL,
  `id_responsable_obra` varchar(10) NOT NULL,
  `id_responsable_pedido` varchar(10) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_termino` date DEFAULT NULL,
  `exedente` varchar(3) NOT NULL,
  PRIMARY KEY (`id_obra`),
  KEY `id_responsable_obra_idx` (`id_responsable_obra`),
  KEY `id_responsable_pedido_idx` (`id_responsable_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `obra` (`id_obra`, `nombre_cliente`, `descripcion_obra`, `delegacion`, `colonia`, `calle`, `numero_exterior`, `numero_interior`, `codigo_postal`, `id_responsable_obra`, `id_responsable_pedido`, `fecha_inicio`, `fecha_termino`, `exedente`) VALUES
('1', 'cliente2', 'descripcion4', 'delegacion4', 'colonia1', 'calle2', '4', '5', '346543', '3', '3', '2001-03-23', '2000-03-23', 'no'),
('10', 'cliente10', 'descripcion4', 'delegacion3', 'colonia8', 'calle3', '11', '2', '872343', '7', '11', '2002-12-05', '2001-11-03', 'no'),
('11', 'cliente11', 'descripcion3', 'delegacion5', 'colonia8', 'calle3', '10', '1', '877243', '8', '10', '2005-10-05', '2003-03-06', 'si'),
('2', 'cliente3', 'descripcion5', 'delegacion5', 'colonia2', 'calle3', '4', '4', '875643', '2', '5', '2014-09-02', '0000-00-00', 'no'),
('3', 'cliente3', 'descripcion4', 'delegacion7', 'colonia2', 'calle4', '5', '6', '872343', '2', '3', '2012-12-21', '0000-00-00', 'no'),
('4', 'cliente4', 'descripcion2', 'delegacion6', 'colonia2', 'calle3', '4', '6', '876576', '5', '7', '2003-09-05', '2003-01-02', 'si'),
('5', 'cliente5', 'descripcion6', 'delegacion8', 'colonia3', 'calle5', '2', '7', '876523', '6', '7', '2005-09-05', '2003-09-05', 'si'),
('6', 'cliente6', 'descripcion7', 'delegacion8', 'colonia5', 'calle6', '1', '5', '676543', '7', '5', '2007-04-05', '2005-03-15', 'no'),
('7', 'cliente7', 'descripcion7', 'delegacion4', 'colonia5', 'calle6', '6', '4', '666543', '2', '6', '2007-05-05', '2005-09-05', 'si'),
('8', 'cliente7', 'descripcion8', 'delegacion4', 'colonia6', 'calle7', '7', '3', '845543', '1', '3', '2008-03-05', '2003-04-30', 'no'),
('9', 'cliente11', 'descripcion4', 'delegacion2', 'colonia3', 'calle5', '8', '2', '876993', '9', '2', '2003-11-05', '2000-09-05', 'si');

CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` varchar(10) NOT NULL,
  `id_manufactura` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_unidad` varchar(10) NOT NULL,
  `id_tipo_utilizacion` varchar(10) NOT NULL,
  `id_tipo_manufactura` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `id_manufactura_idx` (`id_manufactura`),
  KEY `id_unidad_idx` (`id_unidad`),
  KEY `id_tipo_utilizacion_idx` (`id_tipo_utilizacion`),
  KEY `id_tipo_manufactura_pedido_idx` (`id_tipo_manufactura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pedido` (`id_pedido`, `id_manufactura`, `cantidad`, `id_unidad`, `id_tipo_utilizacion`, `id_tipo_manufactura`, `fecha`) VALUES
('1', '2', 10, 'pz', '1', 'eq', '2004-02-29'),
('10', '10', 233, 'tn', '8', 'he', '2004-09-18'),
('11', '11', 56, 'lt', '8', 'ma', '2002-09-05'),
('2', '3', 30, 'lt', '2', 'ma', '2005-09-19'),
('3', '3', 40, 'kg', '2', 'he', '2014-12-12'),
('4', '4', 30, 'tn', '2', 'he', '0207-11-21'),
('5', '5', 40, 'dc', '3', 'ma', '2003-03-18'),
('6', '6', 50, 'm3', '5', 'eq', '2004-04-23'),
('7', '7', 60, 'm2', '5', 'eq', '2005-04-12'),
('8', '7', 40, 'pz', '6', 'eq', '2006-04-12'),
('9', '11', 32, 'm3', '3', 'ma', '2006-05-27');

CREATE TABLE IF NOT EXISTS `responsable_obra` (
  `id_responsable_obra` varchar(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido_paterno` varchar(45) NOT NULL,
  `apellido_materno` varchar(45) NOT NULL,
  `contra` varchar(45) NOT NULL,
  `contra_admin` varchar(45) NOT NULL,
  PRIMARY KEY (`id_responsable_obra`,`nombre`,`apellido_paterno`,`apellido_materno`),
  UNIQUE KEY `id_responsable_obra_UNIQUE` (`id_responsable_obra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `responsable_obra` (`id_responsable_obra`, `nombre`, `apellido_paterno`, `apellido_materno`, `contra`, `contra_admin`) VALUES
('1', 'nombre1', 'apellido1', 'apellido1', '123', ''),
('10', 'nombre10', 'apellido10', 'apellido10', '123', ''),
('11', 'nombre11', 'apellido11', 'apellido11', '123', ''),
('2', 'nombre2', 'apellido2', 'apellido2', '123', ''),
('3', 'nombre3', 'apellido3', 'apellido3', '', 'admin'),
('4', 'nombre4', 'apellido4', 'apellido4', '123', ''),
('5', 'nombre5', 'apellido5', 'apellido5', '123', ''),
('6', 'nombre6', 'apellido6', 'apellido6', '123', ''),
('7', 'nombre7', 'apellido7', 'apellido7', '123', ''),
('8', 'nombre8', 'apellido8', 'apellido8', '', 'admin'),
('9', 'nombre9', 'apellido9', 'apellido9', '123', '');

CREATE TABLE IF NOT EXISTS `responsable_pedido` (
  `id_responsable_pedido` varchar(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido_paterno` varchar(45) NOT NULL,
  `apellido_materno` varchar(45) NOT NULL,
  `puesto` varchar(45) NOT NULL,
  `id_pedido` varchar(10) NOT NULL,
  PRIMARY KEY (`id_responsable_pedido`),
  KEY `id_pedido_idx` (`id_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `responsable_pedido` (`id_responsable_pedido`, `nombre`, `apellido_paterno`, `apellido_materno`, `puesto`, `id_pedido`) VALUES
('1', 'nombre1', 'apellido1', 'apellido3', 'puesto1', '1'),
('10', 'nombre10', 'apellido3', 'apellido9', 'puesto10', '1'),
('11', 'nombre11', 'apellido9', 'apellido1', 'puesto11', '9'),
('2', 'nombre3', 'apellido1', 'apellido4', 'puesto2', '1'),
('3', 'nombre3', 'apellido2', 'apellido5', 'puesto3', '2'),
('4', 'nombre4', 'apellido2', 'apellido6', 'puesto4', '3'),
('5', 'nombre5', 'apellido2', 'apellido2', 'puesto5', '4'),
('6', 'nombre6', 'apellido5', 'apellido6', 'puesto6', '5'),
('7', 'nombre7', 'apellido5', 'apellido7', 'puesto7', '6'),
('8', 'nombre8', 'apellido5', 'apellido7', 'puesto8', '6'),
('9', 'nombre9', 'apellido8', 'apellido8', 'puesto9', '5');

CREATE TABLE IF NOT EXISTS `salidas` (
  `id_bodega_salida` varchar(10) NOT NULL,
  `id_bodega` varchar(10) NOT NULL,
  `id_obra` varchar(10) NOT NULL,
  `id_responsable_salida` varchar(10) NOT NULL,
  `id_manufactura` varchar(10) NOT NULL,
  `cantida` int(11) NOT NULL,
  `id_unidad` varchar(10) NOT NULL,
  `id_tipo_manufactura` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_bodega_salida`),
  KEY `id_bodega_salida_idx` (`id_bodega`),
  KEY `id_obra_salida_idx` (`id_obra`),
  KEY `id_responsable_salida_idx` (`id_responsable_salida`),
  KEY `id_manufactura_salida_idx` (`id_manufactura`),
  KEY `id_unidad_salida_idx` (`id_unidad`),
  KEY `id_tipo_manufactura_salida_idx` (`id_tipo_manufactura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `salidas` (`id_bodega_salida`, `id_bodega`, `id_obra`, `id_responsable_salida`, `id_manufactura`, `cantida`, `id_unidad`, `id_tipo_manufactura`, `fecha`) VALUES
('1', '1', '1', '3', '1', 1, 'pz', 'eq', '0000-00-00'),
('10', '10', '3', '9', '10', 10, 'pz', 'eq', '2009-08-09'),
('2', '3', '1', '4', '2', 2, 'kg', 'ma', '2013-04-24'),
('3', '3', '2', '5', '3', 3, 'lt', 'eq', '2016-03-13'),
('4', '4', '2', '6', '4', 4, 'tn', 'he', '2011-07-23'),
('5', '5', '2', '2', '5', 5, 'lt', 'eq', '2013-05-21'),
('6', '6', '5', '6', '6', 6, 'm2', 'ma', '2004-01-11'),
('7', '7', '5', '7', '7', 7, 'm2', 'he', '2005-08-19'),
('8', '8', '5', '7', '8', 8, 'm3', 'eq', '2007-02-12'),
('9', '9', '8', '8', '9', 9, 'm3', 'ma', '2008-03-04');

CREATE TABLE IF NOT EXISTS `tipo_manufactura` (
  `id_tipo_manufactura` varchar(10) NOT NULL,
  `tipo_manufactura` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tipo_manufactura`),
  UNIQUE KEY `tipo_manufacturacol_UNIQUE` (`tipo_manufactura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tipo_manufactura` (`id_tipo_manufactura`, `tipo_manufactura`) VALUES
('EQ', 'equipo'),
('HE', 'herramienta'),
('MA', 'material');

CREATE TABLE IF NOT EXISTS `tipo_utilizacion` (
  `id_tipo_utilizacion` varchar(10) NOT NULL,
  `tipo_utilizacion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tipo_utilizacion`),
  UNIQUE KEY `tipo_utilizacion_UNIQUE` (`tipo_utilizacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tipo_utilizacion` (`id_tipo_utilizacion`, `tipo_utilizacion`) VALUES
('3', 'comieda'),
('6', 'conflicto'),
('5', 'desayuno'),
('10', 'devolucion'),
('4', 'emergencia'),
('2', 'gasto'),
('9', 'gefe'),
('7', 'necesidad'),
('1', 'pieza'),
('11', 'prestamo'),
('8', 'urgencia');

CREATE TABLE IF NOT EXISTS `unidad` (
  `id_unidad` varchar(10) NOT NULL,
  `unidad` varchar(45) NOT NULL,
  PRIMARY KEY (`id_unidad`),
  UNIQUE KEY `unidad_UNIQUE` (`unidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `unidad` (`id_unidad`, `unidad`) VALUES
('cos', 'costales'),
('dc', 'docena'),
('kg', 'kilo gramo'),
('lt', 'litro'),
('m2', 'metro cuadrado'),
('m3', 'metro cubico'),
('pz', 'pieza'),
('tn', 'tonelada');


ALTER TABLE `entradas`
  ADD CONSTRAINT `id_bodega_entrada` FOREIGN KEY (`id_bodega`) REFERENCES `bodega` (`id_bodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_exedente_entrada` FOREIGN KEY (`id_exedente`) REFERENCES `exedente` (`id_exedente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_manufactura_entrada` FOREIGN KEY (`id_manufactura`) REFERENCES `manufactura` (`id_manufactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_responsable_entrada` FOREIGN KEY (`id_responsable_entrada`) REFERENCES `responsable_obra` (`id_responsable_obra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_tipo_manufactura_entrada` FOREIGN KEY (`id_tipo_manufactura`) REFERENCES `tipo_manufactura` (`id_tipo_manufactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_unidad_entrada` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `exedente`
  ADD CONSTRAINT `id_exedente` FOREIGN KEY (`id_exedente`) REFERENCES `obra` (`id_obra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_manufactura_exedente` FOREIGN KEY (`id_manufactura`) REFERENCES `manufactura` (`id_manufactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_responsable_exedente` FOREIGN KEY (`id_responsable_exedente`) REFERENCES `responsable_obra` (`id_responsable_obra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_tipo_manufactura_exedente` FOREIGN KEY (`id_tipo_manufactura`) REFERENCES `tipo_manufactura` (`id_tipo_manufactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_unidad_exedente` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `manufactura`
  ADD CONSTRAINT `id_tipo_manufactura` FOREIGN KEY (`id_tipo_manufactura`) REFERENCES `tipo_manufactura` (`id_tipo_manufactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_unidad` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `obra`
  ADD CONSTRAINT `id_responsable_obra` FOREIGN KEY (`id_responsable_obra`) REFERENCES `responsable_obra` (`id_responsable_obra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_responsable_pedido` FOREIGN KEY (`id_responsable_pedido`) REFERENCES `responsable_pedido` (`id_responsable_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `pedido`
  ADD CONSTRAINT `id_manufactura` FOREIGN KEY (`id_manufactura`) REFERENCES `manufactura` (`id_manufactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_tipo_manufactura_pedido` FOREIGN KEY (`id_tipo_manufactura`) REFERENCES `tipo_manufactura` (`id_tipo_manufactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_tipo_utilizacion` FOREIGN KEY (`id_tipo_utilizacion`) REFERENCES `tipo_utilizacion` (`id_tipo_utilizacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_unidad_pedido` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `responsable_pedido`
  ADD CONSTRAINT `id_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_reposable_pedido` FOREIGN KEY (`id_responsable_pedido`) REFERENCES `responsable_obra` (`id_responsable_obra`) ON DELETE NO ACTION ON UPDATE NO ACTION;

ALTER TABLE `salidas`
  ADD CONSTRAINT `id_bodega_salida` FOREIGN KEY (`id_bodega`) REFERENCES `bodega` (`id_bodega`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_manufactura_salida` FOREIGN KEY (`id_manufactura`) REFERENCES `manufactura` (`id_manufactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_obra_salida` FOREIGN KEY (`id_obra`) REFERENCES `obra` (`id_obra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_responsable_salida` FOREIGN KEY (`id_responsable_salida`) REFERENCES `responsable_obra` (`id_responsable_obra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_tipo_manufactura_salida` FOREIGN KEY (`id_tipo_manufactura`) REFERENCES `tipo_manufactura` (`id_tipo_manufactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_unidad_salida` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
