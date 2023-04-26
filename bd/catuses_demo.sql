-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2023 a las 02:43:38
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tcthecase_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `rol_id` int(1) NOT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  `sucursal_id` int(11) DEFAULT NULL,
  `sueldo` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`, `rol_id`, `empresa_id`, `sucursal_id`, `sueldo`) VALUES
(1, 'admin', '$2y$10$HlgNThYXSiBOJMfqsBiyHenwa9Zqe0Jd/Jck6tUYENRs5EOvnwMLO', 'Administrador', 'Admin', 'usuario_avatar4.jpeg', '2019-12-18', 1, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `calle` varchar(200) NOT NULL,
  `colonia` varchar(200) NOT NULL,
  `municipio` varchar(150) NOT NULL,
  `codigo postal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `descripcion`) VALUES
(1, 'Samsung'),
(2, 'IPhone'),
(3, 'RedMi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `url_photo` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id`, `marca_id`, `descripcion`, `url_photo`, `precio`) VALUES
(1, 1, 'Samsung Galaxy \n A20', 'https://catuses.com/demos/dist/img/producto1c.jpg', '350.00'),
(2, 1, 'Samsung Galaxy A30', 'https://catuses.com/demos/dist/img/producto2c.jpg', '452.00'),
(3, 1, 'Samsung Galaxy \n A50', 'https://catuses.com/demos/dist/img/producto3c.jpg', '650.00'),
(4, 1, 'Samsung Galaxy A70', 'https://www.hubside.store/media/catalog/product/s/a/samsung-galaxy-a70-128gb-4g-dual-sim-azul.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700', '470.00'),
(5, 2, 'iPhone X', 'https://media.ldlc.com/r1600/ld/products/00/04/65/15/LD0004651580_2.jpg', '560.00'),
(6, 2, 'iPhone 11', 'https://cdn.shopify.com/s/files/1/0485/4566/1094/products/iPhone11-1_300x.jpg?v=1605343006', '532.00'),
(7, 2, 'iPhone 12', 'https://m.media-amazon.com/images/I/711wsjBtWeL._SX522_.jpg', '670.00'),
(8, 3, 'Xiaomi Redmi Note 10 Pro', 'https://imei.org/storage/files/images/10309/preview/xiaomi-redmi-note-10-pro-1.png', '700.37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
