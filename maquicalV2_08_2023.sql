-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2023 a las 03:58:32
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
-- Base de datos: `maquical`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `identificador_cl` varchar(15) NOT NULL,
  `nombre_cl` varchar(30) NOT NULL,
  `apellido_cl` varchar(30) NOT NULL,
  `telefono_cl` varchar(10) NOT NULL,
  `direccion_cl` varchar(50) NOT NULL,
  `correo_cl` varchar(50) NOT NULL,
  `tipo_doc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`identificador_cl`, `nombre_cl`, `apellido_cl`, `telefono_cl`, `direccion_cl`, `correo_cl`, `tipo_doc`) VALUES
('12345', 'Samuel', 'Arrieta', '3151111111', 'Enrique Segoviano', 'samuel@gmail.com', 2),
('58545', 'Diego Alejandro', 'Agudelo Rendon', '3134171749', 'calle 47a # 87-34', 'diegoagudelo180@gmail.com', 5),
('79', 'Oscar', 'Mártinez', '3204444444', 'calle 71 ...', 'omartinez@gmail.com', 2),
('790', 'Manuel', 'Marulanda', '316', 'calle 3', 'manuel@gmail.com', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `numero_mant` int(11) NOT NULL,
  `fecha_mant` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `identificador_cl` varchar(15) NOT NULL,
  `identificador_tipo` int(11) NOT NULL,
  `codigo_maq` varchar(10) NOT NULL,
  `identificador_emp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`numero_mant`, `fecha_mant`, `fecha_entrega`, `identificador_cl`, `identificador_tipo`, `codigo_maq`, `identificador_emp`) VALUES
(1, '2023-07-22', '2023-07-25', '58545', 2, 'M2', '8749'),
(2, '2023-07-24', '2023-07-28', '79', 3, 'M1', '123'),
(3, '2023-07-24', '2023-07-25', '58545', 2, 'M2', '8749');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinas`
--

CREATE TABLE `maquinas` (
  `codigo_maq` varchar(10) NOT NULL,
  `nombre_maq` varchar(15) NOT NULL,
  `funcion_maq` varchar(100) NOT NULL,
  `modelo_maq` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maquinas`
--

INSERT INTO `maquinas` (`codigo_maq`, `nombre_maq`, `funcion_maq`, `modelo_maq`) VALUES
('M1', 'Cortadora', 'Corta los moldes de las suelas para los zapatos', '2015'),
('M2', 'Perforadora', 'Hace los huecos para que pasen los cordones de los zapatos', '2018');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `numero_tipodoc` int(11) NOT NULL,
  `descripcion_tipodoc` varchar(30) NOT NULL,
  `abrev_tipodoc` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_doc`
--

INSERT INTO `tipo_doc` (`numero_tipodoc`, `descripcion_tipodoc`, `abrev_tipodoc`) VALUES
(2, 'Cedula de Ciudadania', 'CC'),
(3, 'Cedula de Extranjeria', 'CE'),
(4, 'Registro Civil', 'RC'),
(5, 'Pasaporte', 'PAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_mant`
--

CREATE TABLE `tipo_mant` (
  `identificador_tipo` int(11) NOT NULL,
  `tipo_mant` varchar(10) NOT NULL,
  `valor_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_mant`
--

INSERT INTO `tipo_mant` (`identificador_tipo`, `tipo_mant`, `valor_tipo`) VALUES
(2, 'Preventivo', 1500000),
(3, 'Correctivo', 2000000),
(4, 'Predictivo', 1000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `identificador_emp` varchar(15) NOT NULL,
  `nombre_emp` varchar(30) NOT NULL,
  `apellido_emp` varchar(30) NOT NULL,
  `telefono_emp` varchar(10) NOT NULL,
  `direccion_emp` varchar(50) NOT NULL,
  `correo_emp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`identificador_emp`, `nombre_emp`, `apellido_emp`, `telefono_emp`, `direccion_emp`, `correo_emp`) VALUES
('123', 'Cristian', 'Bucheli', '3215489999', 'debajo de un puente', 'cbucheli@gmail.com'),
('8749', 'Jonathan', 'Velez', '3023521711', 'Calle 42a #82 - 80', 'jperez@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`identificador_cl`),
  ADD KEY `tipo_doc` (`tipo_doc`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`numero_mant`),
  ADD KEY `identificador_cl` (`identificador_cl`),
  ADD KEY `identificador_tipo` (`identificador_tipo`,`codigo_maq`,`identificador_emp`),
  ADD KEY `codigo_maq` (`codigo_maq`),
  ADD KEY `identificador_emp` (`identificador_emp`);

--
-- Indices de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  ADD PRIMARY KEY (`codigo_maq`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`numero_tipodoc`);

--
-- Indices de la tabla `tipo_mant`
--
ALTER TABLE `tipo_mant`
  ADD PRIMARY KEY (`identificador_tipo`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`identificador_emp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `numero_mant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `numero_tipodoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_mant`
--
ALTER TABLE `tipo_mant`
  MODIFY `identificador_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`tipo_doc`) REFERENCES `tipo_doc` (`numero_tipodoc`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD CONSTRAINT `mantenimiento_ibfk_1` FOREIGN KEY (`identificador_cl`) REFERENCES `clientes` (`identificador_cl`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mantenimiento_ibfk_2` FOREIGN KEY (`codigo_maq`) REFERENCES `maquinas` (`codigo_maq`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mantenimiento_ibfk_3` FOREIGN KEY (`identificador_tipo`) REFERENCES `tipo_mant` (`identificador_tipo`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mantenimiento_ibfk_4` FOREIGN KEY (`identificador_emp`) REFERENCES `trabajadores` (`identificador_emp`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
