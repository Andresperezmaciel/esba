-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 08:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rimberio`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `user` varchar(7) DEFAULT NULL,
  `passw` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`id`, `user`, `passw`) VALUES
(1, 'admin', 'prueba');

-- --------------------------------------------------------

--
-- Table structure for table `marcas`
--

CREATE TABLE `marcas` (
  `id` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(3) NOT NULL,
  `marca_id` int(3) NOT NULL,
  `tipo_producto_id` int(3) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `stock_central` int(7) NOT NULL,
  `stock_cordoba` int(7) NOT NULL,
  `stock_rosario` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id` int(3) NOT NULL,
  `nombre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usuario`, `contrasena`, `nombre_empresa`, `direccion`, `cuit`, `telefono`, `mail`) VALUES
(1, 'prueba', 'prueba', 'prueba', 'prueba123', '11234456789', 1169386648, 'prueba.prueba@prueba.prueba'),
(2, 'ANDRES', 'Prueba', 'pruebaandres', 'pruebaandres', '23289352723', 1158596304, 'prueba.andres@prueba.prueba'),
(3, 'Gerardo', 'Prueba123', 'Empresa de Gerardo', 'Av Corrientes 2345', '23289352723', 1169386648, 'empresa.gerardo@gmail.com'),
(6, 'Pepe', 'faffeda75b80087', 'Empresa de Pepe', 'Pepe basualdo 345', '27987654321', 1131098743, 'pepe.basualdo@gmail.com'),
(7, 'Almirante', 'c893bad68927b45', 'Almirante Prueba', 'Av Constitucion 232', '27350259231', 1138974302, 'almirante.prueba@gmail.com'),
(8, 'prueba pattern', '8e470fd8de80471', 'prueba pattern', 'av pattern', '28918736500', 1123769823, 'alfredo.galvez@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_marca` (`marca_id`),
  ADD KEY `FK_tipoproducto` (`tipo_producto_id`);

--
-- Indexes for table `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_marca` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`),
  ADD CONSTRAINT `FK_tipoproducto` FOREIGN KEY (`tipo_producto_id`) REFERENCES `tipo_producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
