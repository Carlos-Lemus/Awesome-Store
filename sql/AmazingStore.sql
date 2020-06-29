-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2020 a las 18:47:18
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `amazingstore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `nombrecompleto` varchar(60) NOT NULL,
  `tipomsg` varchar(30) NOT NULL,
  `mensaje` varchar(500) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`nombrecompleto`, `tipomsg`, `mensaje`, `email`) VALUES
('gggergerg', 'Pregunta', 'ergergwerg', '2334234@rgregerg.com'),
('gggergerg', 'Pregunta', 'ergergwerg', '2334234@rgregerg.com'),
('vergeergerg', 'Sugerencia', 'geergewrgrregegr', 'wefwef@grgrge.com'),
('vergeergerg', 'Sugerencia', 'geergewrgrregegr', 'wefwef@grgrge.com'),
('wefwef', 'Sugerencia', 'efwfewf', 'fwefwf@wfew.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombreP` varchar(25) NOT NULL,
  `descripcionP` varchar(800) NOT NULL,
  `modeloP` varchar(50) NOT NULL,
  `categoriaP` int(11) NOT NULL,
  `precioP` double NOT NULL,
  `stockP` int(11) NOT NULL,
  `nombreimagenP` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombreP`, `descripcionP`, `modeloP`, `categoriaP`, `precioP`, `stockP`, `nombreimagenP`) VALUES
(1, 'Samsung Galaxy S10', 'El Galaxy S10 incorpora el procesador Exynos 9820, 8 GB de memoria RAM y una pan', 'Galaxy S10 (Exynos) G975F', 1, 490.99, 4, 'galaxyS10.jpg'),
(2, 'Samsung Galaxy Note 10', 'La batería inteligente que dura todo el día. Máximo almacenamiento, como una lap', 'SM-N970FZSJTPA', 1, 780.89, 10, 'note10.jpg'),
(3, 'iPhone 11', 'El Apple iPhone 11 es el sucesor del iPhone Xr para el 2019. Este año el iPhone 11 llega con una pantalla de 6.1 pulgadas con resolución Liquid Retina y potenciado por un procesador Apple A13 Bionic con 64GB, 128GB o 256GB de almacenamiento interno. La cámara posterior del iPhone 11 ahora es dual, con un lente regular de 12 MP y otro gran angular de 12 MP, mientras que su cámara frontal es de 12 MP. El iPhone 11 cuenta con una batería de 3110 mAh con carga rápida, parlantes stereo con sonido Dolby Atmos, carga inalámbrica y utiliza reconocimiento de rostro Face ID para seguridad.', ' A2111', 1, 901.99, 10, 'iphone11.jpg'),
(5, 'iPhone 11', 'El Apple iPhone 11 es el sucesor del iPhone Xr para el 2019. Este año el iPhone 11 llega con una pantalla de 6.1 pulgadas con resolución Liquid Retina y potenciado por un procesador Apple A13 Bionic con 64GB, 128GB o 256GB de almacenamiento interno. La cámara posterior del iPhone 11 ahora es dual, con un lente regular de 12 MP y otro gran angular de 12 MP, mientras que su cámara frontal es de 12 MP. El iPhone 11 cuenta con una batería de 3110 mAh con carga rápida, parlantes stereo con sonido Dolby Atmos, carga inalámbrica y utiliza reconocimiento de rostro Face ID para seguridad.', ' A2111', 1, 1200.456, 10, 'iphone11.jpg'),
(6, 'Apple Ipad Air', 'Dimensiones físicas 	250.6×174.1×6.1 mm\r\n456 gramos sólo WiFi\r\n464 gramos WiFi + LTE\r\nPantalla 	10,5 pulgadas\r\nResolución 	2224×1668 píxeles (264 ppp) Soporte Pencil 1Gen\r\nProcesador 	Apple A12 Fusion\r\nRAM 	3 GB\r\nMemoria 	64 / 252 GB (no ampliable)\r\nSensores 	Touch ID\r\nGiroscopio 3D\r\nAcelerómetro\r\nBarómetro\r\nLuz ambiente\r\nConector Smart Keyboard\r\nVersión software 	iOS 12\r\nConectividad 	Bluetooth 5\r\nWi‑Fi (802.11a/​b/​g/​n/​ac)\r\nLTE, DC-HSDPA, HSPA+ con Nano-SIM\r\nCámaras 	Posterior de 8 MP, frontal de 7 MP\r\nBatería 	30,2 Wh', ' iPad Air (2019)', 2, 1099.76, 8, 'ipadair.jpg'),
(7, 'Galaxy Tab A10', 'Pantalla 	LCD TFT de 10,1 pulgadas\r\nResolución 	1920 x 1200 (WUXGA)\r\nProcesador 	Ocho núcleos hasta 1,8 GHz\r\nRAM 	2/3 GB RAM\r\nMemoria 	32/64 GB (ampliables vía microSD, hasta 512 GB)\r\nVersión S.O. 	Android 9 Pie + Samsung One UI\r\nConectividad 	WiFi ac 2.4G+5GHz, BT 5.0, LTE (opcional), jack 3,5 mm\r\nCámaras 	Trasera: 8 MP, f/2.0, AF. 1080p@30fps. Frontal: 5 MP f/2.2, 1080p@30fps\r\nDimensiones 	245.2 x 149.4 x 7.5 mm\r\nPeso 	469 g (versión WiFi)\r\nBatería 	6.150 mAh\r\nOtros 	WiFi ac 2.4G+5GHz, BT 5.0, LTE (opcional), jack 3.5 mm, Dolby Atmos', 'Samsung Galaxy Tab A 10.1', 2, 999.56, 12, 'galaxytab.jpg'),
(8, 'Laptop HP 14-ck0013la ', 'Esta llamativa computadora portátil, que tiene un diseño delgado y elegante, es fácil de llevar a cualquier lugar, pesa muy poco. Gracias a su hermoso acabado cepillado y la bisagra tipo barra, la computadora portátil HP de 14\" diseñada de manera inteligente luce tan bien como funciona y le ayudarà a alcanzar sus metas y sueños.', '3PX93LA#ABM', 3, 580.78, 5, '14-ck.jpg'),
(9, 'Lenovo Ideapad S340 15.6', 'comprar En Línea - Laptop Lenovo Ideapad S430, Pantalla De 15.6\", Procesador Amd Ryzen 5-3500u, Ram 8gb, Hdd 2tb, Windows 10 Home.', 'CQN17069', 3, 500.46, 12, 'ideapad.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodeproducto`
--

CREATE TABLE `tipodeproducto` (
  `idTipo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodeproducto`
--

INSERT INTO `tipodeproducto` (`idTipo`, `tipo`) VALUES
(1, 'Telefonos'),
(2, 'Tablets'),
(3, 'Computadoras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` text COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `email`, `contraseña`, `tipo`) VALUES
(1, 'Alejandro27', 'chele@gmail.com', '$2y$10$uex/hlp0zAoV4rPJr32EDOhd0CjlFDHWq7CveEAY/KkrMReVcwyl6', 1),
(2, 'Lemus12', 'Lemus@gmail.com', '$2y$10$TEFHG.iEuzQ.LCymo4pLB.B.RGpfZuFLk7raIm4QsX04TkBK4WTNu', 1),
(3, 'ivan', 'Ivan@gmail.com', '1234', 1),
(4, 'Valladares', 'Valladares@gmail.com', '$2y$10$WGWAHrK81veYI9ojXga.r.qWeWrJEdF9WIttjjIxULYFmSfbXbi.u', 1),
(13, '123', '234@gmail.com', '$2y$10$ckaGOsLWP2I1mqZpS1Sjw.Zzr/SJ6lzb2BN/hqSe8uHTwUYuN9tHO', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
