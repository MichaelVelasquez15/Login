-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 08:17:05
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
-- Base de datos: `login_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `photo`, `name`, `bio`, `phone`) VALUES
(1, 'admin@admin', 'admin', 'path/to/photo1.jpg', 'Lucas', 'Jane Austen (1775-1817) fue una destacada novelista inglesa del siglo XIX, conocida por obras clásicas como \"Orgullo y prejuicio\" y \"Emma\". Su aguda observación social y habilidad para caracterizar personas la han consolidado como una figura destacada en la literatura británica.', '123456789'),
(2, 'test@test', 'test', 'path/to/photo2.jpg', 'Crow', 'Nelson Mandela (1918-2013), líder sudafricano y defensor de los derechos civiles, desafiò y puso fin al apartheid. Tras 27 años en prisión, fue liberado en 1990, desempeñando un papel crucial en las negociaciones para la transición a un gobierno democrático. Como el primer presidente negro de Sudáfrica en 1994, Mandela es recordado por su lucha por la igualdad y la reconciliación nacional.', '123456789'),
(19, 'qwe', '$2y$10$BIAGaoK6uRmU4EvEbkDsW.CRj46uYtpT4EzRNP/vszQXDQWs8rXvi', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
