SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE IF NOT EXISTS `bd_jordana` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_jordana`;

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombres` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `apellidos` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `correo` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `telefono` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `precioProducto` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `detallePedido` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE IF NOT EXISTS `usuario` (  
    `id` int(2) NOT NULL AUTO_INCREMENT,  
    `username` varchar(20) NOT NULL,  
    `password` varchar(20) NOT NULL,  
    PRIMARY KEY (`id`)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;  
  
INSERT INTO `usuario` (`id`, `username`, `password`) VALUES  
(1, 'admin', '1a1dc91c907325c69271ddf0c944bc72');


ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`), ADD KEY `producto_categoria_fk1` (`idCategoria`);
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `detallepedido`
  MODIFY `idDetallePedido` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `producto`
ADD CONSTRAINT `producto_categoria_fk1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

