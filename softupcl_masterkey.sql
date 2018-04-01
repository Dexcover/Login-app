-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-04-2018 a las 12:28:12
-- Versión del servidor: 5.5.51-38.2
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `softupcl_masterkey`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AUTENTICAR`
--

CREATE TABLE IF NOT EXISTS `AUTENTICAR` (
  `ID_AUT` decimal(10,0) NOT NULL,
  `DATO1` varchar(100) NOT NULL,
  `DATO2` varchar(100) NOT NULL,
  `DATO3` varchar(100) NOT NULL,
  `DATO4` varchar(100) NOT NULL,
  `DATO5` varchar(100) NOT NULL,
  `DATO6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `AUTENTICAR`
--

INSERT INTO `AUTENTICAR` (`ID_AUT`, `DATO1`, `DATO2`, `DATO3`, `DATO4`, `DATO5`, `DATO6`) VALUES
('1', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('2', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('3', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('4', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('5', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('6', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('7', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('8', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('9', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('10', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('11', 'globo', 'null', 'vaso', 'lampara', 'null', 'escoba'),
('12', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('13', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('14', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('15', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('16', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('17', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('18', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('19', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('20', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('21', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('22', 'globo', 'lampara', 'escoba', 'null', 'vaso', 'null'),
('23', 'globo', 'null', 'cuadro', 'vaso', 'tele', 'null'),
('24', 'null', 'null', 'null', 'null', 'null', 'null'),
('25', 'null', 'null', 'null', 'null', 'null', 'null'),
('26', 'globo', 'vaso', 'escoba', 'null', 'lampara', 'null'),
('27', 'tele', 'cuadro', 'null', 'globo', 'null', 'vaso'),
('28', 'null', 'vaso', 'cuadro', 'lampara', 'null', 'escoba'),
('29', 'tele', 'vaso', 'null', 'cuadro', 'globo', 'null'),
('30', 'null', 'lampara', 'tele', 'vaso', 'globo', 'null'),
('31', 'cuadro', 'lampara', 'null', 'tele', 'null', 'vaso'),
('32', 'cuadro', 'lampara', 'null', 'null', 'globo', 'null'),
('33', 'globo', 'lampara', 'null', 'vaso', 'null', 'escoba'),
('34', 'null', 'vaso', 'tele', 'globo', 'cuadro', 'null');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE IF NOT EXISTS `USUARIO` (
  `CEDULA` decimal(10,0) NOT NULL,
  `ID_AUT` decimal(10,0) DEFAULT NULL,
  `NOMBRE` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `USUARIO`
--

INSERT INTO `USUARIO` (`CEDULA`, `ID_AUT`, `NOMBRE`, `PASSWORD`) VALUES
('12', '9', 'ddd', 'a01610228fe998f515a72dd730294d87'),
('1234', '1', 'DDDD', '81dc9bdb52d04dc20036dbd8313ed055'),
('1719', '26', 'ddasda', 'f970e2767d0cfe75876ea857f92e319b'),
('11111', '25', 'sdfsdfs', '81dc9bdb52d04dc20036dbd8313ed055'),
('101426484', '30', 'Mesías Fernández', '4d186321c1a7f0f354b297e8914ab240'),
('123456789', '32', 'MARIELA VELOZ', '61f24deabf2bc155ca2851b7b3cf5dc9'),
('1704292364', '23', 'Luis marcelo Chicaiza ', '38db3aed920cf82ab059bfccbd02be6a'),
('1711661056', '27', 'jose xavier chicaiza herrera', 'cd0b89c24668dcf4836dc598ee78ced9'),
('1719668863', '11', 'Diego Vinicio Chicaiza Herrera', '165db33498633669606dc619d9888489'),
('1719668864', '34', 'Diego', 'dbcad76db38d29dab32f1e27d1bf816b'),
('1719668872', '33', 'Diego', '827ccb0eea8a706c4c34a16891f84e7b'),
('1722553359', '29', 'David Aurelio', 'ce04011e153a5b8e0f795414c62b4056'),
('1722553367', '10', 'Daniel Andrés Fernández Peñafiel', '827ccb0eea8a706c4c34a16891f84e7b'),
('1724484405', '24', 'Francisco Alvear', '6f7c881907acecf3d3b4cc09d8844ba6'),
('1725211302', '28', 'Santiago Fernàndez', 'aa25d8b67cd14eecea09a485ad72f59e'),
('1725211310', '31', 'Francisco Jose ', '261ee4ff622acc0d422e7fbd38e75209');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `AUTENTICAR`
--
ALTER TABLE `AUTENTICAR`
  ADD PRIMARY KEY (`ID_AUT`);

--
-- Indices de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`CEDULA`), ADD KEY `FK_RELATIONSHIP_1` (`ID_AUT`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_AUT`) REFERENCES `AUTENTICAR` (`ID_AUT`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
