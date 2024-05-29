-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2024 a las 02:05:19
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
-- Base de datos: `rimberio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `user` varchar(7) DEFAULT NULL,
  `passw` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `adm`
--

INSERT INTO `adm` (`id`, `user`, `passw`) VALUES
(1, 'admin', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(15) NOT NULL,
  `nombre_empresa` varchar(25) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `cuit` varchar(11) NOT NULL,
  `telefono` int(10) NOT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `contrasena`, `nombre_empresa`, `direccion`, `cuit`, `telefono`, `mail`) VALUES
(1, 'prueba', 'prueba', 'prueba', 'prueba123', '11234456789', 1169386648, 'prueba.prueba@prueba.prueba'),
(2, 'ANDRES', 'Prueba', 'pruebaandres', 'pruebaandres', '23289352723', 1158596304, 'prueba.andres@prueba.prueba'),
(3, 'prueba Gerardo', 'prueba', 'pruebaGerardo', 'pruebaGerardo', '23289352723', 1176489210, 'prueba.gerardo@prueba.gerardo'),
(4, 'USER PRUEBA', 'Prueba', 'USER PRUEBA', 'USER PRUEBA', '24123456789', 1198765432, 'PRUEBA.USER@PRUEBA.USER'),
(5, 'USER PRUEBA', 'Prueba', 'USER PRUEBA', 'USER PRUEBA', '24123456789', 1198765432, 'PRUEBA.USER@PRUEBA.USER');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
