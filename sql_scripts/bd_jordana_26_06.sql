-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2015 a las 05:30:40
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_jordana`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'Frutas'),
(2, 'Verduras'),
(3, 'Hierbas'),
(4, 'Setas'),
(5, 'Delicatessen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL,
  `emailCliente` varchar(45) COLLATE utf8_bin NOT NULL,
  `nombresCliente` varchar(60) COLLATE utf8_bin NOT NULL,
  `apellidosCliente` varchar(60) COLLATE utf8_bin NOT NULL,
  `direccionCliente` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefonoCliente` varchar(45) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(60) COLLATE utf8_bin NOT NULL,
  `descripcionProducto` varchar(45) COLLATE utf8_bin NOT NULL,
  `precioProducto` int(11) NOT NULL,
  `stockProducto` int(11) NOT NULL,
  `tipoProducto` char(1) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `descripcionProducto`, `precioProducto`, `stockProducto`, `tipoProducto`) VALUES
(1, 'Manzana roja', 'Fresca y madura', 1500, 10, 'F'),
(2, 'Pera', 'Verde y jugosa', 2300, 25, 'F'),
(3, 'Lechuga', 'Fresca de Temporada', 500, 20, 'V'),
(4, 'Tomate', 'Fresco de Temporada', 600, 50, 'V'),
(5, 'Pepino', 'Fresco', 480, 50, 'V');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_en_categoria`
--

CREATE TABLE IF NOT EXISTS `producto_en_categoria` (
  `idProducto` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `emailUsuario` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `passwordUsuario` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`), ADD UNIQUE KEY `emailCliente_UNIQUE` (`emailCliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `producto_en_categoria`
--
ALTER TABLE `producto_en_categoria`
  ADD PRIMARY KEY (`idProducto`,`idCategoria`), ADD KEY `fk_Producto_has_Categoria_Categoria1_idx` (`idCategoria`), ADD KEY `fk_Producto_has_Categoria_Producto_idx` (`idProducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`), ADD UNIQUE KEY `emailUsuario_UNIQUE` (`emailUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto_en_categoria`
--
ALTER TABLE `producto_en_categoria`
ADD CONSTRAINT `fk_Producto_has_Categoria_Categoria1` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Producto_has_Categoria_Producto` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
