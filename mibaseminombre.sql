-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2023 a las 19:02:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibaseminombre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `CIestudiante` int(20) DEFAULT NULL,
  `Sigla` varchar(20) DEFAULT NULL,
  `nota1` double DEFAULT NULL,
  `nota2` double DEFAULT NULL,
  `nota3` double DEFAULT NULL,
  `notafinal` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`CIestudiante`, `Sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES
(1234561, 'INF-324', 80, 100, 80, 87),
(1234562, 'INF-111', 50, 80, 80, 70),
(1234563, 'INF-113', 85, 95, 96, 92),
(1234564, 'INF-121', 78, 100, 100, 93),
(1234565, 'INF-143', 50, 50, 50, 50),
(1234566, 'INF-271', 100, 100, 100, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `CI` int(20) DEFAULT NULL,
  `Nombre_completo` varchar(60) DEFAULT NULL,
  `fechaNaci` date DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `departamento` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`CI`, `Nombre_completo`, `fechaNaci`, `telefono`, `departamento`) VALUES
(1234561, 'Julio Perez', '1999-11-20', '(591)2222222', '01'),
(1234562, 'Juan Garcia', '2000-11-20', '(591)1111111', '03'),
(1234563, 'Carlos Lampe', '1999-11-20', '(591)4444444', '04'),
(1234564, 'Oscar Mayta', '1991-11-20', '(591)5555555', '06'),
(1234565, 'Juan Garcia', '2000-04-20', '(591)6666666', '09'),
(123456, 'clara Uruni', '2000-01-01', '(591)123456', '03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaid`
--

CREATE TABLE `personaid` (
  `id` int(10) UNSIGNED NOT NULL,
  `CI` int(20) DEFAULT NULL,
  `Nombre_completo` varchar(30) DEFAULT NULL,
  `fechaNaci` date DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `departamento` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personaid`
--

INSERT INTO `personaid` (`id`, `CI`, `Nombre_completo`, `fechaNaci`, `telefono`, `departamento`) VALUES
(6, 123456, 'pruba', '2001-11-12', '(591)123456', '01'),
(8, 10101010, 'pru10101010', '1910-10-10', '(591)101010', '01'),
(9, 4444444, 'pru4444', '1944-04-04', '(591)444444', '04'),
(15, 777777, 'pru7777', '1977-07-07', '(591)7777777', '07'),
(16, 888888, 'pru8888', '1988-08-08', '(591)8888888', '08'),
(17, 888889, 'pru8889', '1999-09-09', '(591)9999999', '09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `CI` int(20) DEFAULT NULL,
  `Usuario` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_estonian_ci DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `rol` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`CI`, `Usuario`, `Password`, `rol`) VALUES
(123456, 'usuariod', '111d', 'director'),
(1234562, 'usuario2', '222a', 'estudiante'),
(1234563, 'usuario3', '333a', 'estudiante'),
(1234564, 'usuario4', '444a', 'estudiante'),
(1234565, 'usuario5', '555a', 'estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD UNIQUE KEY `CIestudiante` (`CIestudiante`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD UNIQUE KEY `CI` (`CI`);

--
-- Indices de la tabla `personaid`
--
ALTER TABLE `personaid`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `CI` (`CI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personaid`
--
ALTER TABLE `personaid`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
