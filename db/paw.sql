-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2021 a las 22:29:15
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `token` varchar(12) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `clave`, `token`, `tipo`, `estado`) VALUES
(8, 'elizabeth', '$2y$10$FWGR4ZuSHI9EEIo2oamkjulPAOAJtx9bAYXeu6yz08HMQxoohJMk2', NULL, 1, 1),
(10, 'kenia', '$2y$10$ivVoA5x5NmD85I59A1KeMu7LglUYhu.oSKJ1Cmp.KN4O1ov1B8X1K', NULL, 1, 1),
(12, 'manuel', '$2y$10$oygB/BF2GDDBei/SqDowC.9.6edWCkmC/8j7T1JZC34oRhpHRTgrS', NULL, 2, 1),
(13, 'daniel', '$2y$10$k5HeULCskuYeoWJ2hH3vB.MbrADfyGFqZqlmDQpYC6UW5ES3yDe2C', NULL, 2, 1),
(14, 'mateo', '$2y$10$VHGVJcFfSdqnLD6DAPKB2uRwfsUFLEl/PWkHDlAC/0PK3TV30AXMG', NULL, 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
