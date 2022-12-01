-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2022 a las 19:00:05
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

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
-- Estructura de tabla para la tabla `partido`
--

CREATE TABLE `partido` (
  `id` int(20) NOT NULL,
  `Equipo1` varchar(20) NOT NULL,
  `Equipo2` varchar(20) NOT NULL,
  `lugar` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `partido`
--

INSERT INTO `partido` (`id`, `Equipo1`, `Equipo2`, `lugar`, `hora`, `estado`, `fecha`) VALUES
(1, 'China', 'Panama', 'China', '20:00 UTC', 'Progreso', '2022-12-01'),
(2, 'USA', 'Japon', 'Qatar', '5 UTC', 'Terminado', '2022-11-30'),
(3, 'Colombia', 'Costa Rica', 'Qatar', '12:00 UTC', 'Progreso', '2022-12-10'),
(4, 'Australia', 'España', 'Qatar', '16:00 UTC', 'Progreso', '2022-12-10'),
(5, 'Mexico', 'Argentina', 'Qatar', '19:00 UTC', 'Progreso', '2022-12-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaposicion`
--

CREATE TABLE `tablaposicion` (
  `id` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `JuegoJugado` int(20) NOT NULL,
  `JuegoGanado` int(20) NOT NULL,
  `JuegoEmpatado` int(20) NOT NULL,
  `JuegoPerdido` int(20) NOT NULL,
  `Golesa` int(20) NOT NULL,
  `GolEnemigo` int(20) NOT NULL,
  `DiferenciaGol` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tablaposicion`
--

INSERT INTO `tablaposicion` (`id`, `nombre`, `JuegoJugado`, `JuegoGanado`, `JuegoEmpatado`, `JuegoPerdido`, `Golesa`, `GolEnemigo`, `DiferenciaGol`) VALUES
(1, 'China', 1, 1, 0, 0, 4, 1, 3),
(2, 'Panama', 1, 0, 0, 1, 2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `contraseña`, `email`) VALUES
(1, 'carlos', '12345678', 'carlos.zheng@utp.ac.'),
(2, 'antonio', '123456', 'carlos.zheng@utp.ac.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tablaposicion`
--
ALTER TABLE `tablaposicion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nequipo` (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `partido`
--
ALTER TABLE `partido`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tablaposicion`
--
ALTER TABLE `tablaposicion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
