-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2022 a las 17:23:55
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `retosofka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nave`
--

CREATE TABLE `nave` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Empuje` decimal(10,0) NOT NULL,
  `Peso` decimal(10,0) NOT NULL,
  `Carga` decimal(10,0) NOT NULL,
  `Potencia` decimal(10,0) NOT NULL,
  `Combustible` decimal(10,0) NOT NULL,
  `TipoNave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nave`
--

INSERT INTO `nave` (`Id`, `Nombre`, `Empuje`, `Peso`, `Carga`, `Potencia`, `Combustible`, `TipoNave`) VALUES
(5, 'prueba3', '1', '2', '3', '4', '5', 'prueba3'),
(6, 'prueba5', '100', '50', '750', '200', '100', 'naves espaciales no tripuladas'),
(7, 'Saturno V', '800', '340', '470', '300', '900', 'vehiculos lanzadera'),
(8, 'Apolo', '980', '780', '890', '870', '9900', 'vehiculos lanzadera'),
(9, 'El Delta IV', '770', '750', '760', '670', '800', 'vehiculos lanzadera'),
(10, 'Mariner x', '200', '200', '200', '200', '200', 'naves espaciales no tripuladas'),
(11, 'Vikingo i', '300', '300', '300', '300', '300', 'naves espaciales no tripuladas'),
(12, 'Skylab', '400', '400', '400', '400', '400', 'naves espaciales tripuladas'),
(13, 'orion', '500', '500', '500', '500', '550', 'naves espaciales tripuladas'),
(14, 'Mir', '450', '450', '450', '450', '450', 'naves espaciales tripuladas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `nave`
--
ALTER TABLE `nave`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Tipo` (`TipoNave`,`Nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `nave`
--
ALTER TABLE `nave`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
