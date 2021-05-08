-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2021 a las 01:28:17
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ember`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(11) NOT NULL,
  `mascotaTipo` varchar(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `motivo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `titulo`, `mascotaTipo`, `descripcion`, `idusuario`, `motivo`) VALUES
(1, 'Ember', 'Perro', 'Gato de 3 meses.', 11, 'adopcion'),
(6, 'Max', 'Perro', 'Max un perro de 9 años busca un nuevo hogar.', 12, 'adopcion'),
(7, 'Luna', 'Hámsters', 'Luna tiene 3 días de nacimiento y esta extraviada.\r\nLlamar al 3022318177\r\nSe perdió en la comuna 20', 12, 'extraviada'),
(8, 'Coco', 'Gato', 'Por favor si alguien ve mi Gato \"Coco\" llamar: 3022318153', 12, 'extraviada'),
(10, 'Etc', 'Conejo', 'Se perdio mi conejo llamado \"Etc\" en el barrio siloe. Llamar: 3022318177', 11, 'extraviada'),
(14, 'Lulú', 'Perro', 'Ayuda', 11, 'extraviada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
