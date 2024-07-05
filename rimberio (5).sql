-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2024 a las 16:53:25
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
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre`) VALUES
(1, 'Ford'),
(2, 'Fiat'),
(3, 'Toyota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `ubicacion` text NOT NULL,
  `total` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(20) NOT NULL DEFAULT 'En Proceso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `producto_id`, `usuario_id`, `direccion`, `mail`, `telefono`, `cantidad`, `ubicacion`, `total`, `fecha`, `estado`) VALUES
(13, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '0000-00-00', ''),
(14, 1, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 32000, '0000-00-00', ''),
(15, 4, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 32000, '0000-00-00', 'Rechazado'),
(16, 4, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 32000, '2024-07-02', ''),
(17, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-02', ''),
(18, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-02', ''),
(19, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-02', ''),
(20, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-02', ''),
(21, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-02', ''),
(22, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-02', ''),
(23, 1, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 32000, '2024-07-02', ''),
(24, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 2, 'central', 48000, '2024-07-02', ''),
(25, 1, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 32000, '2024-07-02', ''),
(26, 1, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 32000, '2024-07-02', '0'),
(27, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-02', '0'),
(28, 1, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 2, 'central', 64000, '2024-07-02', '0'),
(29, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-02', '0'),
(30, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-03', '0'),
(31, 2, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 24000, '2024-07-03', '0'),
(32, 4, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 32000, '2024-07-03', '0'),
(33, 1, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 32000, '2024-07-03', '0'),
(34, 1, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 32000, '2024-07-03', '0'),
(36, 1, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 32000, '2024-07-03', '0'),
(37, 1, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 32000, '2024-07-03', 'Pendiente'),
(38, 4, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 32000, '2024-07-03', 'Rechazado'),
(39, 2, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 24000, '2024-07-03', 'Rechazado'),
(40, 4, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 32000, '2024-07-03', 'En Proceso'),
(41, 1, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 1, 'central', 32000, '2024-07-03', 'En Proceso'),
(42, 2, 2, 'Av. Constitucion 2343', 'andres.empresa@gmail.com', 1145679632, 2, 'central', 48000, '2024-07-03', 'Entregado'),
(43, 2, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 1, 'central', 24000, '2024-07-03', 'En Proceso'),
(44, 4, 1, 'prueba', 'prueba.prueba@gmail.com', 1189876754, 3, 'central', 96000, '2024-07-03', 'En Proceso'),
(45, 4, 3, 'Av. Cabildo 2309', 'gerardo.empresa@gmail.com', 1169386647, 1, 'cordoba', 32000, '2024-07-03', 'Rechazado'),
(46, 1, 3, 'Av. Cabildo 2309', 'gerardo.empresa@gmail.com', 1169386647, 2, 'central', 64000, '2024-07-03', 'En Proceso'),
(47, 2, 3, 'Av. Cabildo 2309', 'gerardo.empresa@gmail.com', 1169386647, 1, 'central', 24000, '2024-07-03', 'En Proceso'),
(48, 2, 3, 'Av. Cabildo 2309', 'gerardo.empresa@gmail.com', 1169386647, 1, 'central', 24000, '2024-07-03', 'En Proceso'),
(49, 2, 3, 'Av. Cabildo 2309', 'gerardo.empresa@gmail.com', 1169386647, 1, 'central', 24000, '2024-07-03', 'En Proceso'),
(50, 2, 3, 'Av. Cabildo 2309', 'gerardo.empresa@gmail.com', 1169386647, 1, 'central', 24000, '2024-07-03', 'En Proceso'),
(51, 2, 3, 'Av. Cabildo 2309', 'gerardo.empresa@gmail.com', 1169386647, 1, 'central', 24000, '2024-07-03', 'En Proceso'),
(52, 2, 3, 'Av. Cabildo 2309', 'gerardo.empresa@gmail.com', 1169386647, 1, 'central', 24000, '2024-07-03', 'En Proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(3) NOT NULL,
  `id_marca` int(3) NOT NULL,
  `id_tipo_producto` int(3) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` int(10) NOT NULL,
  `stock_central` int(3) NOT NULL,
  `stock_cordoba` int(3) NOT NULL,
  `stock_rosario` int(3) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `id_marca`, `id_tipo_producto`, `descripcion`, `precio`, `stock_central`, `stock_cordoba`, `stock_rosario`, `imagen`) VALUES
(1, 1, 1, 'Espejo alto', 32000, -1, 0, 0, ''),
(2, 1, 1, 'Espejo bajo', 24000, 5, 0, 0, ''),
(3, 3, 3, 'Puerta trasera con 1 manija de acero', 125000, 0, 0, 0, ''),
(4, 1, 4, 'Aleron Alto', 32000, 27, 8, 14, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id` int(3) NOT NULL,
  `id_marca` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id`, `id_marca`, `nombre`) VALUES
(1, '1', 'Espejo'),
(2, '2', 'Paragolpe'),
(3, '3', 'Puerta Trasera'),
(4, '1', 'Aleron'),
(5, '3', 'Aleron');

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
(1, 'prueba', 'prueba', 'prueba', 'prueba', '20987654789', 1189876754, 'prueba.prueba@gmail.com'),
(2, 'Andres', 'prueba', 'Empresa de Andres', 'Av. Constitucion 2343', '27234569871', 1145679632, 'andres.empresa@gmail.com'),
(3, 'Gerardo', 'prueba', 'Gerardo Empresa', 'Av. Cabildo 2309', '20447144205', 1169386647, 'gerardo.empresa@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
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
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
