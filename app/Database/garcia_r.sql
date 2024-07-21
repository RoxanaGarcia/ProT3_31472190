-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2024 a las 23:45:14
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `garcia_r`
--
CREATE DATABASE IF NOT EXISTS `garcia_r` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `garcia_r`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

DROP TABLE IF EXISTS `perfiles`;
CREATE TABLE `perfiles` (
  `id_perfiles` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id_perfiles`, `descripcion`) VALUES
(1, 'admin'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(1, 'roxana', 'garcia', 'Roxi', 'leyra3117@gmail.com', '$2y$10$vPz6OypiGXpCLWpMt/2pBeTLac8I2l0so9KQ0iH8PYlFEK.A7PjVa', 2, 'NO'),
(2, 'Soledad', 'Lopez', 'Admin', 'sol@gmail.com', '$2y$10$lW4XCc4f/3hUkmxBVABQCebSn6L64WNPA78YiNrW51H6Da86Ay3By', 1, 'NO'),
(3, 'Marta', 'Soto', 'Martita', 'marta@gmail.com', '$2y$10$z6PmJsfABkOCYrtYvLUlc./Uufo50agbGtfTApy8zz3Fe/kVgjEWm', 2, 'SI'),
(4, 'Maxi', 'Lopez', 'Maxi', 'maxi@gmail.com', '$2y$10$waGc1.DwyXSYo7P8rQR3UeTE.q5bPjmWoElBsaYDlogn1mD1PBjh2', 2, 'SI'),
(5, 'Silvia', 'Martinez', 'Silvi', 'sil@gmail.com', '$2y$10$Qivv6GpJVV2hx4Gc/VZ/gecOy1ibDB67sUFnjqEkVw/MGudjsJSS.', 2, 'SI'),
(6, 'Alberto', 'Acosta', 'Albert', 'alberto@gmail.com', '$2y$10$HeBpjQpUvNUgrRYDSzz5R.IMabvDWQwKYT1aVQnVpBWDNYUIEqZ3u', 2, 'SI'),
(7, 'Angelica', 'Fernandez', 'Angelica', 'angelica@gmail.com', '$2y$10$ju7nCG57hz1SflAIvwdZ7OwktE2aXUF.aGI2DdjVY8g9A6FdqQyWC', 2, 'SI'),
(8, 'Marcelo', 'Acosta', 'Marcelo', 'marce@gmail.com', '$2y$10$6QdybznU2wOc.Utm1ZMBC.E0MBZj7/oM1XNsR9dkExee6jMayhpGW', 2, 'SI');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`id_perfiles`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `perfiles_perfil_id_foreign` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `id_perfiles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `perfiles_perfil_id_foreign` FOREIGN KEY (`perfil_id`) REFERENCES `perfiles` (`id_perfiles`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
