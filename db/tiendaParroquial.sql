-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_parroquial`
--
CREATE DATABASE IF NOT EXISTS `tienda_parroquial` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tienda_parroquial`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

DROP TABLE IF EXISTS `articulos`;
CREATE TABLE IF NOT EXISTS `articulos` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(80) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `mostrar` int(1) NOT NULL DEFAULT '1',
  `Disponibilidad` int(2) NOT NULL DEFAULT '1',
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`ID`, `Nombre`, `Descripcion`, `Precio`, `mostrar`, `Disponibilidad`) VALUES
(1, 'BOLSAS LENCERIA', 'Bolsa Tela Lencer&iacutea (Multiusos)', '10.00', 1, 1),
(2, 'COJINES BUHO', 'Coj&iacuten Buho', '10.00', 1, 1),
(3, 'COJINES CORAZONES', 'Coj&iacuten Coraz&oacuten', '7.00', 1, 1),
(4, 'BOLSAS TOTE BAG', 'Bolsa Tote Bag bolsillo cuadros', '15.00', 1, 1),
(5, 'BOLSAS TOTE BAG', 'Bolsa Tote Bag Beige', '15.00', 1, 1),
(6, 'BOLSAS TOTE BAG', 'Bolsa Tote Bag Gris', '15.00', 1, 1),
(7, 'BOLSAS TOTE BAG', 'Bolsa lisa', '10.00', 1, 1),
(8, 'CUELLOS TEJIDOS', 'Cuellos crochet de diferentes colores y modelos', '12.00', 1, 1),
(9, 'CUELLOS TEJIDOS', 'Cuello  crochet de lana azul', '18.00', 1, 1),
(10, 'BOLSOS CROCHET BLANCOS', 'Bolso de mano', '15.00', 1, 1),
(11, 'BOLSOS CROCHET BLANCOS', 'Bolso crochet blanco con flores', '10.00', 1, 1),
(12, 'BOLSOS CROCHET BLANCOS', 'Bolso bandolera', '10.00', 1, 1),
(13, 'BOLSOS CROCHET BLANCOS', 'Bolsito crochet', '7.00', 1, 1),
(14, 'BOLSOS CROCHET BLANCOS', 'Bolso bot&oacuten madera', '7.00', 1, 1),
(15, 'BOLSOS CROCHET JASPEADOS', 'Bolso jaspeado de  colores', '10.00', 1, 1),
(16, 'BOLSOS CROCHET JASPEADOS', 'Bolso de mano', '10.00', 1, 1),
(17, 'BOLSO CROCHET COLORESS', 'Bolso de colores', '15.00', 1, 1),
(18, 'BOLSOS CROCHET COLORES', 'Bolsos crochet celeste / marino / rosa', '12.00', 1, 1),
(19, 'BOLSOS VINTAGE', 'Bolso crochet vintage  blanco / rosa / celeste', '20.00', 1, 1),
(20, 'DIADEMAS CROCHET', 'Diademas crochet  blanca / marron', '5.00', 1, 1),
(21, 'NECESER TELA', 'Neceser de tela navidad', '6.00', 1, 1),
(22, 'NECESER TELA', 'Neceser de tela p&aacutejaros', '6.00', 1, 1),
(23, 'NECESER TELA', 'Neceser de tela corazones', '6.00', 1, 1),
(24, 'NECESER TELA', 'Neceser de tela flores', '6.00', 1, 1),
(25, 'NECESER TELA', 'Neceser de tela rayas', '6.00', 1, 1),
(26, 'NECESER TELA', 'Saquito de tela', '10.00', 1, 1),
(27, 'LLAVEROS', 'Llaveros corazones de tela', '2.50', 1, 1),
(28, 'LLAVEROS', 'Llaveros de fieltro', '2.50', 1, 1),
(29, 'LLAVEROS', 'Llaveros caritas', '4.00', 1, 1),
(30, 'LLAVEROS', 'Llaveros piedras de colores', '3.00', 1, 1),
(31, 'PULSERAS', 'Pulseras de perlas', '4.00', 1, 1),
(32, 'PULSERAS', 'Pulseras de cuero', '3.00', 1, 1),
(33, 'PULSERAS', 'Puseras de cruces', '2.50', 1, 1),
(34, 'PULSERAS', 'Pulseras infinito', '2.50', 1, 1),
(35, 'PULSERAS', 'Pulseras negras de perlas', '2.50', 1, 1),
(36, 'PULSERAS', 'Pulseras macram&eacute de colores', '2.00', 1, 1),
(37, 'GARGANTILLAS', 'Gargantillas macram&eacute de diversos colores', '3.00', 1, 1),
(38, 'BOLSOS NAVIDAD', 'Bolso negro crochet', '18.00', 0, 1),
(39, 'BOLSOS NAVIDAD', 'Bolso rojo', '18.00', 0, 1),
(40, 'BOLSOS NAVIDAD', 'Bolso tela', '20.00', 0, 1),
(41, 'CESTA NAVIDAD', 'Cesta de navidad color plata', '20.00', 0, 1),
(42, 'CESTA NAVIDAD', 'Cesta de navidad color oro', '25.00', 0, 1),
(43, 'CARPETAS TELA', 'Carpetas de tela', '10.00', 1, 2),
(44, 'BELEN DECORATIVO', 'Bel&eacuten decorativo', '15.00', 0, 1),
(45, 'ARBOLITOS TELA', 'Arbolitos de tela', '2.00', 0, 1),
(46, 'ESTRELLAS TELA', 'Estrellas de tela', '2.00', 0, 1),
(47, 'BOLAS PATCHWORK', 'Bolas Patchwork', '2.50', 0, 1),
(48, 'ARBOLITOS CROCHET', 'Arbolitos Crochet', '4.00', 0, 1),
(49, 'BOLSAS MULTIUSOS', 'Bolsas multiusos con dibujos', '7.00', 1, 3),
(50, 'ROSARIO', 'Rosario de bolas de madera', '5.00', 1, 1),
(51, 'CUADERNO LOGO', 'Cuadernos con portada con el logo Parroquia Misionera', '3.50', 1, 1),
(52, 'CUADERNO', 'Cuadernos con portada decorada', '3.50', 1, 1),
(53, 'PENDIENTES', 'Pendiente con forma de hoja', '2.00', 1, 1),
(54, 'COLGANTE', 'Colgante coraz&oacuten de piedra', '3.00', 1, 1),
(55, 'BOLSA TOTE BAG', 'Bolsa con dibujo etnico', '12.00', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(30) NOT NULL,
  `mostrar_categoria` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`Id`, `nombre_categoria`, `mostrar_categoria`) VALUES
(1, 'Bolsas', 1),
(2, 'Cojines', 1),
(3, 'Cuellos', 1),
(4, 'Bolsos', 1),
(5, 'Diademas', 1),
(6, 'Neceser', 1),
(7, 'Llaveros', 1),
(8, 'Bisuteria', 1),
(9, 'Navidad', 0),
(10, 'Carpetas y Cuadernos', 1),
(11, 'Rosarios', 1),
(13, 'Dzh', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE IF NOT EXISTS `imagenes` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `nombre_foto` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`ID`, `nombre_foto`) VALUES
(1, 'bolsas tela 1.jpg'),
(2, '15.jpg'),
(3, '25.jpg'),
(4, '26.jpg'),
(5, '27.jpg'),
(6, '28.jpg'),
(7, '29.jpg'),
(8, '30.jpg'),
(9, '31.jpg'),
(10, '32.jpg'),
(11, 'DSC_3812.jpg'),
(12, 'DSC_3822.jpg'),
(13, 'DSC_3813.jpg'),
(14, 'DSC_3817.jpg'),
(15, 'DSC_3818.jpg'),
(16, 'DSC_3779.jpg'),
(17, 'DSC_3781.jpg'),
(18, 'DSC_3789.jpg'),
(19, 'DSC_3784.jpg'),
(20, 'DSC_3785.jpg'),
(21, 'DSC_3786.jpg'),
(22, 'DSC_3791.jpg'),
(23, 'DSC_3788.jpg'),
(24, 'DSC_3793.jpg'),
(25, '40.jpg'),
(26, 'DSC_3798.jpg'),
(27, '42.jpg'),
(28, '44.jpg'),
(29, 'DSC_3807.jpg'),
(30, '35.jpg'),
(31, '37.jpg'),
(32, 'DSC_3802.jpg'),
(33, 'DSC_3826.jpg'),
(34, 'DSC_3827.jpg'),
(35, 'DSC_3830.jpg'),
(36, 'DSC_3829.jpg'),
(37, 'foto_80.jpg'),
(38, 'DSC_3845.jpg'),
(39, '53.jpg'),
(40, 'DSC_3848.jpg'),
(41, 'DSC_3863.jpg'),
(42, 'DSC_3849.jpg'),
(43, 'DSC_3847.jpg'),
(44, 'DSC_3846.jpg'),
(45, 'DSC_3832.jpg'),
(46, 'DSC_3839.jpg'),
(47, 'DSC_3841.jpg'),
(48, 'DSC_3835.jpg'),
(49, 'DSC_3861.jpg'),
(50, 'DSC_3855.jpg'),
(51, 'DSC_3856.jpg'),
(52, 'DSC_3857.jpg'),
(53, 'DSC_3862.jpg'),
(54, 'DSC_3859.jpg'),
(55, 'DSC_3872.jpg'),
(56, 'DSC_3873.jpg'),
(57, 'DSC_3875.jpg'),
(58, 'DSC_3878.jpg'),
(59, 'DSC_3876.jpg'),
(60, 'DSC_3894.jpg'),
(61, 'DSC_3893.jpg'),
(62, 'DSC_3895.jpg'),
(63, 'DSC_3899.jpg'),
(64, 'DSC_3897.jpg'),
(65, 'DSC_3901.jpg'),
(66, 'DSC_3902.jpg'),
(67, 'DSC_3882.jpg'),
(68, 'DSC_3884.jpg'),
(69, '20201121_WA0004.jpg'),
(70, '20201121_WA0005.jpg'),
(71, '20201121_WA0006.jpg'),
(72, '20201121_WA0007.jpg'),
(73, '20201121_WA0009.jpg'),
(74, '20201121_WA0011.jpg'),
(75, '20201121_WA0012.jpg'),
(76, 'DSC_3889.jpg'),
(77, 'DSC_3890.jpg'),
(78, 'llaveros1.jpg'),
(79, 'llaveros2.jpg'),
(80, 'DSC_3937.jpg'),
(81, '79.jpg'),
(82, 'DSC_3904.jpg'),
(83, 'DSC_3907.jpg'),
(84, 'DSC_3912.jpg'),
(85, 'DSC_3906.jpg'),
(86, 'DSC_3929.jpg'),
(87, 'DSC_3931.jpg'),
(88, 'DSC_3932.jpg'),
(89, 'DSC_3933.jpg'),
(90, 'DSC_3934.jpg'),
(91, 'DSC_3916.jpg'),
(92, 'DSC_3918.jpg'),
(93, 'DSC_3920.jpg'),
(94, 'DSC_3921.jpg'),
(95, 'DSC_3923.jpg'),
(96, 'DSC_3929.jpg'),
(97, 'DSC_3867.jpg'),
(98, 'DSC_3869.jpg'),
(99, 'DSC_3865.jpg'),
(100, 'DSC_3914.jpg'),
(101, '20201127_120546.jpg'),
(102, '20201125_WA0018.jpg'),
(103, '20201125_WA0019.jpg'),
(104, '20201125_WA0020.jpg'),
(105, '20201125_WA0021.jpg'),
(106, '20201125_WA0022.jpg'),
(107, '20201125_WA0023.jpg'),
(108, 'DSC_3939.jpg'),
(109, 'DSC_3945.jpg'),
(110, 'DSC_3947.jpg'),
(111, 'DSC_3949.jpg'),
(112, '20201121_WA0000.jpg'),
(113, 'Cojines1.jpg'),
(114, 'IMG-20210301-WA0004.jpg'),
(115, 'IMG-20210301-WA0012.jpg'),
(116, 'IMG-20210301-WA0013.jpg'),
(117, '20210212_181840.jpg'),
(118, '20210301_193616.jpg'),
(119, '20210301_193821.jpg'),
(120, 'IMG-20210301-WA0008.jpg'),
(121, 'IMG-20210301-WA0006.jpg'),
(122, 'IMG-20210301-WA0010.jpg'),
(123, 'IMG-20210301-WA0005.jpg'),
(124, 'IMG-20210301-WA0006.jpg'),
(125, '20210301_194801.jpg'),
(126, '20210307_192410.jpg'),
(127, '20210307_192450.jpg'),
(128, '20210307_192530.jpg'),
(129, '20210307_190600.jpg'),
(130, '20210307_190652.jpg'),
(131, '20210307_191458.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_producto_categoria`
--

DROP TABLE IF EXISTS `relacion_producto_categoria`;
CREATE TABLE IF NOT EXISTS `relacion_producto_categoria` (
  `ID_producto` int(3) NOT NULL,
  `ID_categoria` int(3) NOT NULL,
  KEY `productos_categoria_FK` (`ID_producto`),
  KEY `categorias_FK` (`ID_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `relacion_producto_categoria`
--

INSERT INTO `relacion_producto_categoria` (`ID_producto`, `ID_categoria`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 3),
(9, 3),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 5),
(21, 6),
(22, 6),
(23, 6),
(24, 6),
(25, 6),
(26, 6),
(27, 7),
(28, 7),
(29, 7),
(30, 7),
(31, 8),
(32, 8),
(33, 8),
(34, 8),
(35, 8),
(36, 8),
(37, 8),
(38, 9),
(39, 9),
(40, 9),
(41, 9),
(42, 9),
(43, 10),
(44, 9),
(45, 9),
(46, 9),
(47, 9),
(48, 9),
(49, 1),
(50, 11),
(51, 10),
(52, 10),
(53, 8),
(54, 8),
(55, 9),
(55, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_producto_imagen`
--

DROP TABLE IF EXISTS `relacion_producto_imagen`;
CREATE TABLE IF NOT EXISTS `relacion_producto_imagen` (
  `ID_producto` int(3) NOT NULL,
  `ID_imagen` int(3) NOT NULL,
  KEY `productos_FK` (`ID_producto`),
  KEY `imagenes_FK` (`ID_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `relacion_producto_imagen`
--

INSERT INTO `relacion_producto_imagen` (`ID_producto`, `ID_imagen`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(3, 22),
(3, 23),
(4, 24),
(4, 25),
(5, 26),
(5, 27),
(5, 28),
(6, 29),
(6, 30),
(6, 31),
(7, 32),
(8, 33),
(8, 34),
(8, 35),
(8, 36),
(9, 37),
(10, 38),
(11, 39),
(11, 40),
(12, 41),
(13, 42),
(14, 43),
(14, 44),
(14, 45),
(15, 46),
(15, 47),
(16, 48),
(16, 49),
(17, 50),
(17, 51),
(18, 52),
(18, 53),
(18, 54),
(19, 55),
(19, 56),
(19, 57),
(20, 58),
(20, 59),
(21, 60),
(22, 61),
(23, 62),
(23, 63),
(24, 64),
(25, 65),
(26, 66),
(27, 67),
(27, 68),
(28, 69),
(28, 70),
(28, 71),
(28, 72),
(28, 73),
(28, 74),
(28, 75),
(28, 76),
(28, 77),
(29, 78),
(29, 79),
(30, 80),
(30, 81),
(31, 82),
(32, 83),
(32, 84),
(33, 85),
(34, 86),
(34, 87),
(35, 88),
(36, 89),
(36, 90),
(37, 91),
(37, 92),
(37, 93),
(37, 94),
(37, 95),
(37, 96),
(38, 97),
(39, 98),
(40, 99),
(41, 100),
(42, 101),
(43, 102),
(43, 103),
(43, 104),
(43, 105),
(43, 106),
(43, 107),
(44, 108),
(45, 109),
(46, 110),
(47, 111),
(48, 112),
(2, 113),
(49, 114),
(49, 115),
(49, 116),
(50, 117),
(50, 118),
(50, 119),
(51, 120),
(51, 121),
(51, 122),
(52, 123),
(52, 124),
(53, 125),
(54, 126),
(54, 127),
(54, 128),
(55, 3),
(55, 5);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `relacion_producto_categoria`
--
ALTER TABLE `relacion_producto_categoria`
  ADD CONSTRAINT `categorias_FK` FOREIGN KEY (`ID_categoria`) REFERENCES `categorias` (`Id`),
  ADD CONSTRAINT `productos_categoria_FK` FOREIGN KEY (`ID_producto`) REFERENCES `articulos` (`ID`);

--
-- Filtros para la tabla `relacion_producto_imagen`
--
ALTER TABLE `relacion_producto_imagen`
  ADD CONSTRAINT `imagenes_FK` FOREIGN KEY (`ID_imagen`) REFERENCES `imagenes` (`ID`),
  ADD CONSTRAINT `productos_FK` FOREIGN KEY (`ID_producto`) REFERENCES `articulos` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
