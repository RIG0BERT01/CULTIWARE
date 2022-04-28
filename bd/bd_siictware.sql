-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2022 a las 21:21:36
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
-- Base de datos: `bd_siictware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Cliente'),
(3, 'Agroquimica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_agroproductos`
--

CREATE TABLE `tbl_agroproductos` (
  `id_agroproducto` int(11) NOT NULL,
  `id_agro` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cant_producto` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_agroquimicas`
--

CREATE TABLE `tbl_agroquimicas` (
  `id_agro` int(11) NOT NULL,
  `nom_agro` varchar(150) NOT NULL,
  `dir_agro` varchar(150) NOT NULL,
  `tel_agro` int(20) NOT NULL,
  `ubi_agro` varchar(200) NOT NULL,
  `rfc_agro` int(13) NOT NULL,
  `mail_agro` varchar(150) NOT NULL,
  `foto_agro` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_asesores`
--

CREATE TABLE `tbl_asesores` (
  `id_asesor` int(11) NOT NULL,
  `rfc_asesor` varchar(15) NOT NULL,
  `nom_asesor` varchar(100) NOT NULL,
  `mail_asesor` varchar(100) NOT NULL,
  `tel_asesor` int(15) NOT NULL,
  `per_asesor` varchar(100) NOT NULL,
  `foto_asesor` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cultienfermedad`
--

CREATE TABLE `tbl_cultienfermedad` (
  `id_cultienfermedad` int(11) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `id_enfermedad` int(11) NOT NULL,
  `fec_inicio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cultiplaga`
--

CREATE TABLE `tbl_cultiplaga` (
  `id_cultiplaga` int(11) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `id_plaga` int(11) NOT NULL,
  `fec_inicio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cultiusuario`
--

CREATE TABLE `tbl_cultiusuario` (
  `id_cultiusuario` int(11) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cultivos`
--

CREATE TABLE `tbl_cultivos` (
  `id_cultivo` int(11) NOT NULL,
  `nom_cultivo` varchar(80) NOT NULL,
  `var_cultivo` varchar(50) NOT NULL,
  `hec_cultivo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_enfermedad`
--

CREATE TABLE `tbl_enfermedad` (
  `id_enfermedad` int(11) NOT NULL,
  `nom_enfermedad` varchar(100) NOT NULL,
  `des_enfermedad` varchar(250) NOT NULL,
  `foto_enfermedad` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_plagas`
--

CREATE TABLE `tbl_plagas` (
  `id_plaga` int(11) NOT NULL,
  `nom_plaga` varchar(100) NOT NULL,
  `des_plaga` varchar(250) NOT NULL,
  `foto_plaga` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_plagas`
--

INSERT INTO `tbl_plagas` (`id_plaga`, `nom_plaga`, `des_plaga`, `foto_plaga`) VALUES
(1, 'Cochinilla - Dysmicoccus brevipes', 'Las cochinillas son de tamaño pequeño (2-6 mm), color blanco, cubiertas con una capa de cera. Se localizan en las axilas de las hojas inferiores de la planta, en las raíces y en el fruto.', ''),
(2, 'Tecla - Strymon basilides', 'Son mariposas diurnas y miden alrededor de 2 cm. El adulto es de color gris azulado, con puntos anaranjados con negro en los extremos inferiores de las alas. La larva es rosada y robusta.', ''),
(3, 'Gusano soldado - Elaphria nucicolora', 'Es una mariposa de hábitos nocturnos. Las larvas son muy activas en la noche, pero también atacan en el día. El adulto mide 1,5 cm. Sus alas anteriores son de color marrón claro; y las posteriores, blancas.', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_planes`
--

CREATE TABLE `tbl_planes` (
  `id_plan` int(11) NOT NULL,
  `tipo_plan` varchar(50) NOT NULL,
  `pre_plan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `id_producto` int(11) NOT NULL,
  `nom_producto` varchar(100) NOT NULL,
  `des_producto` varchar(250) NOT NULL,
  `pre_producto` double NOT NULL,
  `cat_producto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `rfc_usuario` varchar(30) NOT NULL,
  `nom_usuario` varchar(100) NOT NULL,
  `mail_usuario` varchar(100) NOT NULL,
  `tel_usuario` int(20) NOT NULL,
  `user_usuario` varchar(20) NOT NULL,
  `pas_usuario` varchar(20) NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL,
  `id_plan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuasesor`
--

CREATE TABLE `tbl_usuasesor` (
  `id_usuasesor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_asesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `clave`, `id_cargo`) VALUES
(2, 'Gabriel', '12345', 1),
(3, 'Jorge', '1234', 2),
(9, 'Dani', '123', 2),
(10, 'Yola', '1234', 1),
(11, 'Maria', '1234', 2),
(12, 'Jose', '123', 3),
(13, 'Uriel', '123', 2),
(14, 'Ilse', '123', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `tbl_agroproductos`
--
ALTER TABLE `tbl_agroproductos`
  ADD PRIMARY KEY (`id_agroproducto`),
  ADD KEY `id_agro` (`id_agro`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `tbl_agroquimicas`
--
ALTER TABLE `tbl_agroquimicas`
  ADD PRIMARY KEY (`id_agro`);

--
-- Indices de la tabla `tbl_asesores`
--
ALTER TABLE `tbl_asesores`
  ADD PRIMARY KEY (`id_asesor`);

--
-- Indices de la tabla `tbl_cultienfermedad`
--
ALTER TABLE `tbl_cultienfermedad`
  ADD PRIMARY KEY (`id_cultienfermedad`),
  ADD KEY `id_cultivo` (`id_cultivo`,`id_enfermedad`),
  ADD KEY `id_enfermedad` (`id_enfermedad`);

--
-- Indices de la tabla `tbl_cultiplaga`
--
ALTER TABLE `tbl_cultiplaga`
  ADD PRIMARY KEY (`id_cultiplaga`),
  ADD KEY `id_cultivo` (`id_cultivo`,`id_plaga`),
  ADD KEY `id_plaga` (`id_plaga`);

--
-- Indices de la tabla `tbl_cultiusuario`
--
ALTER TABLE `tbl_cultiusuario`
  ADD PRIMARY KEY (`id_cultiusuario`),
  ADD KEY `id_cultivo` (`id_cultivo`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tbl_cultivos`
--
ALTER TABLE `tbl_cultivos`
  ADD PRIMARY KEY (`id_cultivo`);

--
-- Indices de la tabla `tbl_enfermedad`
--
ALTER TABLE `tbl_enfermedad`
  ADD PRIMARY KEY (`id_enfermedad`);

--
-- Indices de la tabla `tbl_plagas`
--
ALTER TABLE `tbl_plagas`
  ADD PRIMARY KEY (`id_plaga`);

--
-- Indices de la tabla `tbl_planes`
--
ALTER TABLE `tbl_planes`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_plan` (`id_plan`);

--
-- Indices de la tabla `tbl_usuasesor`
--
ALTER TABLE `tbl_usuasesor`
  ADD PRIMARY KEY (`id_usuasesor`),
  ADD KEY `id_usuario` (`id_usuario`,`id_asesor`),
  ADD KEY `id_asesor` (`id_asesor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_agroproductos`
--
ALTER TABLE `tbl_agroproductos`
  MODIFY `id_agroproducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_agroquimicas`
--
ALTER TABLE `tbl_agroquimicas`
  MODIFY `id_agro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_asesores`
--
ALTER TABLE `tbl_asesores`
  MODIFY `id_asesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_cultienfermedad`
--
ALTER TABLE `tbl_cultienfermedad`
  MODIFY `id_cultienfermedad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_cultiplaga`
--
ALTER TABLE `tbl_cultiplaga`
  MODIFY `id_cultiplaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_cultiusuario`
--
ALTER TABLE `tbl_cultiusuario`
  MODIFY `id_cultiusuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_cultivos`
--
ALTER TABLE `tbl_cultivos`
  MODIFY `id_cultivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_enfermedad`
--
ALTER TABLE `tbl_enfermedad`
  MODIFY `id_enfermedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_plagas`
--
ALTER TABLE `tbl_plagas`
  MODIFY `id_plaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_planes`
--
ALTER TABLE `tbl_planes`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuasesor`
--
ALTER TABLE `tbl_usuasesor`
  MODIFY `id_usuasesor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_agroproductos`
--
ALTER TABLE `tbl_agroproductos`
  ADD CONSTRAINT `tbl_agroproductos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `tbl_productos` (`id_producto`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_agroproductos_ibfk_2` FOREIGN KEY (`id_agro`) REFERENCES `tbl_agroquimicas` (`id_agro`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_cultienfermedad`
--
ALTER TABLE `tbl_cultienfermedad`
  ADD CONSTRAINT `tbl_cultienfermedad_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `tbl_cultivos` (`id_cultivo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_cultienfermedad_ibfk_2` FOREIGN KEY (`id_enfermedad`) REFERENCES `tbl_enfermedad` (`id_enfermedad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_cultiplaga`
--
ALTER TABLE `tbl_cultiplaga`
  ADD CONSTRAINT `tbl_cultiplaga_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `tbl_cultivos` (`id_cultivo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_cultiplaga_ibfk_2` FOREIGN KEY (`id_plaga`) REFERENCES `tbl_plagas` (`id_plaga`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_cultiusuario`
--
ALTER TABLE `tbl_cultiusuario`
  ADD CONSTRAINT `tbl_cultiusuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_cultiusuario_ibfk_2` FOREIGN KEY (`id_cultivo`) REFERENCES `tbl_cultivos` (`id_cultivo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `tbl_usuarios_ibfk_1` FOREIGN KEY (`id_plan`) REFERENCES `tbl_planes` (`id_plan`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuasesor`
--
ALTER TABLE `tbl_usuasesor`
  ADD CONSTRAINT `tbl_usuasesor_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuarios` (`id_usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuasesor_ibfk_2` FOREIGN KEY (`id_asesor`) REFERENCES `tbl_asesores` (`id_asesor`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
