-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2022 a las 18:59:49
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `Id` int(11) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `UrlBandera` varchar(200) NOT NULL,
  `Mundiales` int(11) NOT NULL,
  `MundialesG` int(11) NOT NULL,
  `Ultimo_mundial` year(4) NOT NULL,
  `MVP` varchar(60) NOT NULL,
  `Grupos` char(1) NOT NULL,
  `Puntos` int(11) NOT NULL DEFAULT 0,
  `On_Creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `On_Update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`Id`, `Pais`, `UrlBandera`, `Mundiales`, `MundialesG`, `Ultimo_mundial`, `MVP`, `Grupos`, `Puntos`, `On_Creation`, `On_Update`) VALUES
(1, 'Qatar', 'https://wallpapercave.com/wp/wp4214170.jpg', 0, 0, 0000, '0', 'A', 0, '2022-11-29 23:28:55', '2022-11-29 23:28:55'),
(2, 'Ecuador', 'http://upload.wikimedia.org/wikipedia/commons/9/96/Flag_of_Ecuador.png', 0, 0, 0000, '0', 'A', 0, '2022-11-29 23:28:55', '2022-11-29 23:29:41'),
(3, 'Senegal', 'https://flagpedia.net/data/flags/ultra/sn.png', 0, 0, 0000, '0', 'A', 0, '2022-11-29 23:28:55', '2022-11-29 23:29:41'),
(4, 'Países Bajos', 'https://www.banderas-mundo.es/data/flags/ultra/nl.png', 0, 0, 0000, '0', 'A', 0, '2022-11-29 23:28:55', '2022-11-29 23:29:41'),
(5, 'Inglaterra', 'https://cdn.wallpapersafari.com/65/94/y9wuTZ.jpg', 0, 0, 0000, '0', 'B', 0, '2022-11-29 23:40:31', '2022-11-29 23:40:31'),
(6, 'Irán', 'https://clipground.com/images/iran-flag-png-7.png', 0, 0, 0000, '0', 'B', 0, '2022-11-29 23:40:31', '2022-11-29 23:40:31'),
(7, 'Estados Unidos', 'https://astelus.com/wp-content/viajes/las-barras-y-las-estrellas-en-la-bandera-de-estados-unidos.png', 0, 0, 0000, '0', 'B', 0, '2022-11-29 23:40:31', '2022-11-29 23:40:31'),
(8, 'Gales', 'https://www.comprarbanderas.es/images/banderas/400/405-gales_400px.jpg', 0, 0, 0000, '0', 'B', 0, '2022-11-29 23:40:31', '2022-11-29 23:40:31'),
(9, 'Argentina', 'http://wallpapercave.com/wp/itYcVwJ.png', 18, 2, 2018, 'Lionel Messi', 'C', 0, '2022-11-30 17:24:01', '2022-11-30 23:00:44'),
(10, 'Arabia Saudí', 'https://cdn.britannica.com/79/5779-004-DC479508/Flag-Saudi-Arabia.jpg', 6, 0, 2018, 'Saleh Al-Shehri', 'C', 0, '2022-11-30 17:24:01', '2022-11-30 23:00:44'),
(11, 'México', 'http://getwallpapers.com/wallpaper/full/8/1/7/427451.jpg', 0, 0, 0000, '0', 'C', 0, '2022-11-30 17:24:01', '2022-11-30 17:24:01'),
(12, 'Polonia', 'https://cdn11.bigcommerce.com/s-ey7tq/images/stencil/1920w/products/3520/18758/poland-flag__21122.1575324137.jpg?c=2', 0, 0, 0000, '0', 'C', 0, '2022-11-30 17:24:01', '2022-11-30 17:59:07'),
(13, 'Francia', 'http://wallpapercave.com/wp/bInEbjF.jpg', 0, 0, 0000, '0', 'D', 0, '2022-11-30 17:26:24', '2022-11-30 17:26:24'),
(14, 'Dinamarca', 'https://cdn.pixabay.com/photo/2015/11/12/16/23/flag-1040577_960_720.png', 0, 0, 0000, '0', 'D', 0, '2022-11-30 17:26:24', '2022-11-30 17:26:24'),
(15, 'Túnez', 'http://www.banderas-mundo.es/data/flags/ultra/tn.png', 0, 0, 0000, '0', 'D', 0, '2022-11-30 17:26:24', '2022-11-30 17:26:24'),
(16, 'Australia', 'https://wonderfulengineering.com/wp-content/uploads/2015/07/Australia-Flag-21.jpg', 6, 0, 2018, 'Ajdin Hrustic', 'D', 0, '2022-11-30 17:26:24', '2022-11-30 23:00:45'),
(17, 'España', 'https://preview.redd.it/p0tytqsx0gsx.png?auto=webp&s=b32a28ee5e833bdf21b985b959fe652fbf632959', 0, 0, 0000, '0', 'E', 0, '2022-11-30 17:30:02', '2022-11-30 17:30:02'),
(18, 'Alemania', 'https://www.publicdomainpictures.net/pictures/340000/velka/flag-of-germany-1588673048vhH.jpg', 20, 4, 2018, 'Kai Havertz', 'E', 0, '2022-11-30 17:30:02', '2022-11-30 23:00:44'),
(19, 'Japón', 'https://pngimg.com/uploads/flags/flags_PNG14641.png', 0, 0, 0000, '0', 'E', 0, '2022-11-30 17:30:02', '2022-11-30 17:30:02'),
(20, 'Costa Rica', 'http://www.theflagman.co.uk/wp-content/uploads/2017/03/flag-of-Costa-Rica.jpg', 0, 0, 0000, '0', 'E', 0, '2022-11-30 17:30:02', '2022-11-30 17:30:02'),
(21, 'Bélgica', 'https://www.bandeirasnacionais.com/data/flags/ultra/be.png', 14, 0, 2018, 'Kevin De Bruyne', 'F', 0, '2022-11-30 17:34:34', '2022-11-30 23:00:45'),
(22, 'Canadá', 'https://images.creativemarket.com/0.1.0/ps/1655393/7413/4125/m1/fpnw/wm1/canada-flag-conveted-.jpg?1473837991&s=11fd68027d0259cde6aa61121595a0bb', 0, 0, 0000, '0', 'F', 0, '2022-11-30 17:34:34', '2022-11-30 17:34:34'),
(23, 'Marruecos', 'https://cdn11.bigcommerce.com/s-ey7tq/images/stencil/1920w/products/3442/18786/morocco-flag__93159.1575372150.jpg?c=2', 0, 0, 0000, '0', 'F', 0, '2022-11-30 17:34:34', '2022-11-30 17:35:06'),
(24, 'Croacia', 'https://3.bp.blogspot.com/-5Qlq7WyOv3U/T60-WD0DNbI/AAAAAAAABy4/pwNaZWxIb0M/s1600/Croatia+Flag.jpg', 0, 0, 0000, '0', 'F', 0, '2022-11-30 17:34:34', '2022-11-30 17:34:34'),
(25, 'Brasil', 'https://preview.redd.it/fh4yp2ej9b401.png?auto=webp&s=ac9da748df5ca2f933c7bd97cf9f4870e3993ae3', 22, 5, 2018, 'Neymar', 'G', 0, '2022-11-30 17:42:58', '2022-11-30 23:00:45'),
(26, 'Serbia', 'https://elmersflag.com/wp-content/uploads/2013/08/serbia-flag.jpg', 0, 0, 0000, '0', 'G', 0, '2022-11-30 17:42:58', '2022-11-30 17:42:58'),
(27, 'Suiza', 'https://media.istockphoto.com/vectors/swiss-flag-flat-layout-vector-illustration-vector-id691333880?k=6&m=691333880&s=612x612&w=0&h=Ic5PUURyt2QXZZslgNu4VP72WHk9-P2CObAnByvXxKQ=', 0, 0, 0000, '0', 'G', 0, '2022-11-30 17:42:58', '2022-11-30 17:42:58'),
(28, 'Camerún', 'https://wonderfulengineering.com/wp-content/uploads/2015/08/Cameroon-Flag-2.jpg', 0, 0, 0000, '0', 'G', 0, '2022-11-30 17:42:58', '2022-11-30 17:42:58'),
(29, 'Portugal', 'https://i5.walmartimages.com/asr/1fc00880-28e5-48cf-9dd1-edeeb768742c_1.7430837e76e297817afaae7688ea7c71.jpeg', 0, 0, 0000, '0', 'H', 0, '2022-11-30 17:42:58', '2022-11-30 17:42:58'),
(30, 'Ghana', 'https://i0.wp.com/worldflags.com/wp-content/uploads/Flag-of-Ghana.png?fit=2000%2C1333', 0, 0, 0000, '0', 'H', 0, '2022-11-30 17:42:58', '2022-11-30 17:42:58'),
(31, 'Uruguay', 'https://www.bestcustomflags.com/wp-content/uploads/2016/06/uruguay-flag.jpg', 0, 0, 0000, '0', 'H', 0, '2022-11-30 17:42:58', '2022-11-30 17:42:58'),
(32, 'Corea del Sur', 'https://i.pinimg.com/originals/7d/5b/20/7d5b204de1a2fd5dda103a1745a64c74.jpg', 0, 0, 0000, '0', 'H', 0, '2022-11-30 17:42:58', '2022-11-30 17:42:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `Equipo` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Posicion` varchar(50) NOT NULL,
  `GolesAnotados` int(11) NOT NULL DEFAULT 0,
  `TarAmarilla` int(11) NOT NULL DEFAULT 0,
  `TarRoja` int(11) NOT NULL DEFAULT 0,
  `FechaNacimiento` date NOT NULL,
  `On_Creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `On_Update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`Id`, `Nombre`, `Apellido`, `Foto`, `Equipo`, `Numero`, `Posicion`, `GolesAnotados`, `TarAmarilla`, `TarRoja`, `FechaNacimiento`, `On_Creation`, `On_Update`) VALUES
(1, 'orlando', 'Perez', 'http://www.eltiempo.com/contenido/multimedia/fotos/deportes22/IMAGEN/IMAGEN-16727057-2.png', 18, 7, 'poiuyt', 0, 0, 0, '1999-11-02', '2022-11-30 20:02:19', '2022-11-30 20:04:32'),
(2, 'orlando', 'Perez', 'http://www.eltiempo.com/contenido/multimedia/fotos/deportes22/IMAGEN/IMAGEN-16727057-2.png', 18, 7, 'poiuyt', 0, 0, 0, '1999-11-02', '2022-11-30 20:02:19', '2022-11-30 20:04:32'),
(3, 'orlando', 'Perez', 'http://www.eltiempo.com/contenido/multimedia/fotos/deportes22/IMAGEN/IMAGEN-16727057-2.png', 18, 7, 'poiuyt', 0, 0, 0, '1999-11-02', '2022-11-30 20:02:19', '2022-11-30 20:04:32'),
(4, 'orlando', 'Perez', 'http://www.eltiempo.com/contenido/multimedia/fotos/deportes22/IMAGEN/IMAGEN-16727057-2.png', 18, 7, 'poiuyt', 0, 0, 0, '1999-11-02', '2022-11-30 20:02:19', '2022-11-30 20:04:32'),
(5, 'orlando', 'Perez', 'http://www.eltiempo.com/contenido/multimedia/fotos/deportes22/IMAGEN/IMAGEN-16727057-2.png', 18, 7, 'poiuyt', 0, 0, 0, '1999-11-02', '2022-11-30 20:02:19', '2022-11-30 20:04:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE `partidos` (
  `Id` int(11) NOT NULL,
  `Pais1` int(11) NOT NULL,
  `GolesP1` int(11) NOT NULL DEFAULT 0,
  `Pais2` int(11) NOT NULL,
  `GolesP2` int(11) NOT NULL DEFAULT 0,
  `Fecha` datetime NOT NULL,
  `Estadio` varchar(50) NOT NULL,
  `Clasficacion` varchar(50) NOT NULL,
  `on_creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `on_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`Id`, `Pais1`, `GolesP1`, `Pais2`, `GolesP2`, `Fecha`, `Estadio`, `Clasficacion`, `on_creation`, `on_update`) VALUES
(2, 1, 0, 3, 0, '2022-12-01 00:00:00', 'Maracana', 'Octavos', '2022-12-01 06:25:11', '2022-12-01 15:36:17'),
(3, 6, 0, 7, 0, '2022-12-01 00:00:00', 'Maracana', 'Octavos', '2022-12-01 06:25:11', '2022-12-01 15:36:17'),
(4, 7, 0, 2, 0, '2022-12-22 10:00:00', 'Maracana', 'Octavos', '2022-12-01 06:25:11', '2022-12-01 17:01:00'),
(5, 30, 0, 32, 0, '2022-12-01 00:00:00', 'Maracana', 'Cuartos', '2022-12-01 06:25:11', '2022-12-01 15:36:17'),
(6, 18, 0, 19, 0, '2022-12-06 00:00:00', 'Maracana', '', '2022-12-01 06:25:11', '2022-12-01 07:04:44'),
(7, 18, 1, 17, 2, '2022-12-01 00:00:00', 'Maracana', '', '2022-12-01 06:25:11', '2022-12-01 07:04:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicos`
--

CREATE TABLE `tecnicos` (
  `Id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Foto` varchar(200) NOT NULL,
  `Equipo` int(11) NOT NULL,
  `On_Creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `On_Update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tecnicos`
--

INSERT INTO `tecnicos` (`Id`, `Nombre`, `Apellido`, `Foto`, `Equipo`, `On_Creation`, `On_Update`) VALUES
(1, 'Lionel', 'Scaloni', 'https://antorchadeportiva.com/wp-content/uploads/2019/07/Lionel-Scaloni-1.jpg', 9, '2022-11-30 23:05:11', '2022-11-30 23:23:21'),
(2, 'Hansi ', 'Flick', 'https://cdn.vox-cdn.com/thumbor/QRwp8tLkagVIBCDhP_1QGzB9HUQ=/0x0:6000x4000/1200x800/filters:focal(2993x1377:3953x2337)/cdn.vox-cdn.com/uploads/chorus_image/image/66571299/1212217902.jpg.0.jpg', 18, '2022-11-30 23:28:35', '2022-11-30 23:28:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `EFavorito` int(11) DEFAULT NULL,
  `On_Creation` timestamp NOT NULL DEFAULT current_timestamp(),
  `On_Update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Username`, `Email`, `Contraseña`, `EFavorito`, `On_Creation`, `On_Update`) VALUES
(6, 'qweq', 'sada@asd.com', '123', 18, '2022-12-01 01:49:52', '2022-12-01 17:35:44'),
(7, 'Juan', 'sada@asd.com', '789', 18, '2022-12-01 17:41:57', '2022-12-01 17:57:01'),
(8, 'xxxxx', 'sada@asd.com', '789', 11, '2022-12-01 17:43:32', '2022-12-01 17:50:32');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Pais1_equipo` (`Pais1`),
  ADD KEY `Pais2_equipo` (`Pais2`);

--
-- Indices de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `tecnico_equipo` (`Equipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Usuario_Equipo` (`EFavorito`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `Jugadores_Equipos` FOREIGN KEY (`Equipo`) REFERENCES `equipos` (`Id`);

--
-- Filtros para la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD CONSTRAINT `Pais1_equipo` FOREIGN KEY (`Pais1`) REFERENCES `equipos` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Pais2_equipo` FOREIGN KEY (`Pais2`) REFERENCES `equipos` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD CONSTRAINT `tecnico_equipo` FOREIGN KEY (`Equipo`) REFERENCES `equipos` (`Id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `Usuario_Equipo` FOREIGN KEY (`EFavorito`) REFERENCES `equipos` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
