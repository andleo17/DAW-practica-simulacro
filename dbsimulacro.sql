-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2019 a las 00:44:15
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsimulacro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela`
--

CREATE TABLE `escuela` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `escuela`
--

INSERT INTO `escuela` (`id`, `nombre`) VALUES
(1, 'Arquitectura'),
(2, 'Ingeniería Civil'),
(3, 'Ingeniería de Sistemas y Computación'),
(4, 'Ingeniería Mecánica'),
(5, 'Medicina'),
(6, 'Odontología'),
(7, 'Filosofía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela_universidad`
--

CREATE TABLE `escuela_universidad` (
  `universidad_id` int(11) NOT NULL,
  `escuela_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `escuela_universidad`
--

INSERT INTO `escuela_universidad` (`universidad_id`, `escuela_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(3, 1),
(3, 4),
(3, 7),
(4, 2),
(4, 2),
(4, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `codigo` varchar(15) COLLATE utf8_spanish_ci NOT NULL UNIQUE,
  `nombres` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_materno` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `universidad_id` int(11) NOT NULL,
  `escuela_id` int(11) NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `nombres`, `apellido_paterno`, `apellido_materno`, `universidad_id`, `escuela_id`, `foto`) VALUES
(1, 'Andres', 'Baldarrago', 'Gastulo', 1, 3, 'imagenes/charmander.gif'),
(2, 'Andres', 'Baldarrago', 'Gastulo', 1, 3, 'imagenes/charmander.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidad`
--

CREATE TABLE `universidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `universidad`
--

INSERT INTO `universidad` (`id`, `nombre`) VALUES
(1, 'Universidad Santo Toribio de Mogrovejo'),
(2, 'Universidad Nacional Pedro Ruiz Gallo'),
(3, 'Universidad Señor de Sipán'),
(4, 'Univerisdad Tecnológica del Perú');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escuela`
--
ALTER TABLE `escuela`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `universidad`
--
ALTER TABLE `universidad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `escuela`
--
ALTER TABLE `escuela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `universidad`
--
ALTER TABLE `universidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
