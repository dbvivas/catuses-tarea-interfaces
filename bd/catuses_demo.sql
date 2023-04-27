-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-04-2023 a las 08:41:41
-- Versión del servidor: 10.3.36-MariaDB-cll-lve
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `catuses_demo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `rol_id` int(1) DEFAULT 1,
  `empresa_id` int(11) DEFAULT NULL,
  `sucursal_id` int(11) DEFAULT NULL,
  `sueldo` decimal(10,0) DEFAULT NULL,
  `correo` text DEFAULT NULL,
  `terminos` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `firstname`, `lastname`, `photo`, `created_on`, `rol_id`, `empresa_id`, `sucursal_id`, `sueldo`, `correo`, `terminos`) VALUES
(1, 'admin', '$2y$10$HlgNThYXSiBOJMfqsBiyHenwa9Zqe0Jd/Jck6tUYENRs5EOvnwMLO', 'Administrador', 'Admin', 'usuario_avatar4.jpeg', '2019-12-18', 1, 1, 1, '25000', 'dvivas@catuses.com', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `precio` decimal(10,2) NOT NULL,
  `url_photo2` text DEFAULT NULL,
  `url_photo3` text DEFAULT NULL,
  `url_photo4` text DEFAULT NULL,
  `url_photo5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id`, `marca_id`, `descripcion`, `url_photo`, `precio`, `url_photo2`, `url_photo3`, `url_photo4`, `url_photo5`) VALUES
(1, 1, 'Samsung Galaxy \n A20', 'https://catuses.com/demos/dist/img/producto1c.jpg', '350.00', 'https://m.media-amazon.com/images/I/71Ro1L149cL.jpg', 'https://http2.mlstatic.com/D_NQ_NP_918320-MLA54360160802_032023-O.webp', 'https://play-lh.googleusercontent.com/nmEep_PddRO5YYIRt2s-k9BBi9ubOkgryGWIei48MSDiagbzVOoSYmKLBv8DnlJVTro', 'https://play-lh.googleusercontent.com/xL_BPzOJ5W63XJ3jzOsFMFf2cVk9XTAjJfHzJVWSu9aagDC7sBtvh8NN2JI1mjTK5BUh'),
(2, 1, 'Samsung Galaxy A30', 'https://catuses.com/demos/dist/img/producto2c.jpg', '452.00', '', '', '', ''),
(3, 1, 'Samsung Galaxy \n A50', 'https://catuses.com/demos/dist/img/producto3c.jpg', '650.00', '', '', '', ''),
(4, 1, 'Samsung Galaxy A70', 'https://www.hubside.store/media/catalog/product/s/a/samsung-galaxy-a70-128gb-4g-dual-sim-azul.jpeg?optimize=medium&bg-color=255,255,255&fit=bounds&height=700&width=700&canvas=700:700', '470.00', '', '', '', ''),
(5, 2, 'iPhone X', 'https://media.ldlc.com/r1600/ld/products/00/04/65/15/LD0004651580_2.jpg', '560.00', '', '', '', ''),
(6, 2, 'iPhone 11', 'https://cdn.shopify.com/s/files/1/0485/4566/1094/products/iPhone11-1_300x.jpg?v=1605343006', '532.00', '', '', '', ''),
(7, 2, 'iPhone 12', 'https://m.media-amazon.com/images/I/711wsjBtWeL._SX522_.jpg', '670.00', '', '', '', ''),
(8, 3, 'Xiaomi Redmi Note 10 Pro', 'https://imei.org/storage/files/images/10309/preview/xiaomi-redmi-note-10-pro-1.png', '700.37', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
