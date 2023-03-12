-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2023 a las 04:43:31
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
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--
-- Creación: 12-03-2023 a las 02:45:40
-- Última actualización: 12-03-2023 a las 03:19:39
--

CREATE TABLE `formulario` (
  `nomapellido` varchar(50) NOT NULL,
  `alias` varchar(20) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `region` varchar(10) NOT NULL,
  `comuna` varchar(10) NOT NULL,
  `candidato` varchar(10) NOT NULL,
  `nosotros` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`nomapellido`, `alias`, `rut`, `email`, `region`, `comuna`, `candidato`, `nosotros`) VALUES
('Rolando Bona', 'CR7', '19.733.003', 'rolandobona10@gmail.com', 'Region Met', 'Melipilla', 'illoJuan', 'Redes Soci'),
('Javier Otarola', 'Javi', '6.554.165-', 'lospatosfeos23@outlook.com', 'Region de ', 'Puente Alt', 'ibai', 'Redes Soci');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
