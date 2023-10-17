-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2023 a las 19:19:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ape_paterno` varchar(45) NOT NULL,
  `ape_materno` varchar(45) NOT NULL,
  `edad` varchar(255) DEFAULT NULL,
  `direccion` varchar(100) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `estado` bit(1) NOT NULL,
  `felcc` blob DEFAULT NULL,
  `felcn` blob DEFAULT NULL,
  `grado` varchar(255) DEFAULT NULL,
  `operatividad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `ape_paterno`, `ape_materno`, `edad`, `direccion`, `dni`, `estado`, `felcc`, `felcn`, `grado`, `operatividad`) VALUES
(1, 'MarÃ­a', 'Rojas', 'Juares', '19', 'Urb. San Isidro', '45738923', b'1', NULL, NULL, NULL, NULL),
(2, 'Marco', 'Cordova', 'Cabrera', '21', 'Laredo #654', '45236512', b'1', NULL, NULL, NULL, NULL),
(3, 'angélica', 'azogue', 'moreno', '22', 'barrio las misiones', '123456', b'0', NULL, NULL, NULL, NULL),
(4, 'Martin Shamir', 'Forest', 'Ortiz', '24', 'B/ Las Misiones', '7402026', b'0', NULL, NULL, NULL, NULL),
(5, 'angélica', 'asda', 'asd', '45', 'barrio las misiones', '4566464', b'1', NULL, NULL, NULL, NULL),
(6, 'wer', 'werw', 'wer', '34', 'sfdsdfsdfsdfsdfs sdfsdf', '', b'0', NULL, NULL, NULL, NULL),
(7, 'asda', 'asdasd', 'dasda', '12', 'barrio las misiones', 'no_tiene', b'0', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contra` varchar(25) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `contra`, `estado`) VALUES
(1, 'Geo', '12', b'1'),
(2, 'Jorge', '123', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
