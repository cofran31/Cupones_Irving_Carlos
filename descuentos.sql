-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2018 a las 14:39:48
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `descuentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membership_type`
--

CREATE TABLE `membership_type` (
  `id` int(9) NOT NULL,
  `membership_type` varchar(20) NOT NULL,
  `discount_value` int(9) NOT NULL,
  `discount_unit` varchar(20) NOT NULL,
  `create_date` date NOT NULL,
  `valid_until` date NOT NULL,
  `is_free_shipping_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_offer`
--

CREATE TABLE `payment_offer` (
  `id` int(9) NOT NULL,
  `institute_type` varchar(50) NOT NULL,
  `institute_name` varchar(200) NOT NULL,
  `card_type` varchar(20) DEFAULT NULL,
  `coupon_code` varchar(10) NOT NULL,
  `discount_value` int(9) NOT NULL,
  `discount_unit` varchar(20) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `valid_from` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `valid_until` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `maximum_discount_amount` int(9) NOT NULL,
  `product_id` int(9) DEFAULT NULL,
  `product_category_id` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(9) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(4000) NOT NULL,
  `units_in_stock` int(9) NOT NULL,
  `product_category_id` int(9) NOT NULL,
  `reward_points_credit` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_description`, `units_in_stock`, `product_category_id`, `reward_points_credit`) VALUES
(1, 'Bananas', 'Platanos frescos', 100, 7, 10),
(2, 'Mangos', 'Mangos de la temporada.', 50, 7, 10),
(3, 'Colifor', 'aaa', 100, 1, 10),
(4, 'Limon', 'aaaa', 100, 7, 1),
(5, 'Col de Bruselas', 'Las mujeres que estén planeando concebir un hijo o que ya están embarazadas tienen que consumir col debido a su gran aporte de ácido fólico, una vitamina del tipo B crucial para el desarrollo del bebé y prevención de malformaciones en el tubo neural. Por otra parte, concede vitamina C, vitamina K, fibra, potasio y ácidos grasos omega 3.', 200, 1, 10),
(6, 'Zanahoria', 'Los vegetales anaranjados son muy buenos para la salud, especialmente para nuestros ojos, piel y cabello. En particular, las zanahorias son de las mejores fuentes de vitamina A y, aunque en menor medida, también de vitamina C. Se dice también que nos protege de daños cardiovasculares.', 200, 1, 10),
(7, 'Calabacín', 'Otro vegetal que debes integrar en tu dieta es el calabacín. Debido a su contenido de beta-caroteno y vitamina C, es un alimento antiinflamatorio que puede ayudarnos a prevenir y tratar enfermedades como el asma, la osteoartritis y la artritis reumatoide. Posee también potasio, magnesio y fibra.', 200, 1, 10),
(8, 'Patata dulce', 'Las patatas dulces son un gran aliado contra el cáncer debido a su contenido de vitamina A, vitamina C y manganeso. Además, es buena fuente de hierro y fibra, nos aporta energía y protege nuestro sistema digestivo.', 200, 1, 10),
(9, 'Berenjena', '¿Sabías que son muy buenas para el corazón y todo el sistema cardiovascular? Sus ricas propiedades antioxidantes -como, por ejemplo, el nasunin- protegen a las células de daños cerebrales y, combinadas con su contenido de fibra y potasio, también nos ayudan a reducir el riesgo de enfermedades cardiovasculares y la demencia.', 200, 1, 10),
(10, 'Pimientos', 'Hay varias versiones de pimientos, todas ellas saludables debido a sus nutrientes como el ácido fólico y el licopeno. Según estudios, consumir un pimiento por día disminuye el riesgo de cáncer de pulmón, colon, páncreas y vejiga.', 200, 1, 10),
(11, 'Aguacate', 'El aguacate da nombre tanto al árbol tropical como a la fruta exótica y es originario de México, Mesoamérica y norte de Suramérica. Pertenece a la familia de las lauráceas y también se conoce como palta, según la región, o como avocado en inglés. Además, el aguacate es un fruto antioxidante fuente de numerosas vitaminas y nutrientes que lo hacen un ingrediente ideal para batidos o smoothies por su textura espesante o para el guacamo', 200, 7, 10),
(12, 'Coco', 'coco es un alimento que se engloba dentro de la categoría de las frutas. Una sola ración de coco (consideramos como ración 1 taza, shredded, es decir, unos 80 gramos de coco) contiene aproximadamente 283 calorías.', 200, 7, 10),
(13, 'Frambuesa', 'La frambuesa es el fruto de la planta denominada Frambuesa Roja, cuyas hojas tiene propiedades medicinales. Sin embargo, esta planta silvestre es más conocida como Frambueso o Sangüeso y es originaria de Europa, aunque se ha extendido su cultivo. La frambuesa se considera junto a otro tipos de frutas como fruta o frutos del bosque, entre los cuales también se incluyen las moras (zarzamoras).', 200, 7, 10),
(14, 'Guayaba', 'El guayaba es un alimento que se engloba dentro de la categoría de las frutas. Una sola ración de guayaba (consideramos como ración 1 taza, es decir, unos 165 gramos de guayaba) contiene aproximadamente 112 calorías.', 200, 7, 10),
(15, 'Granada', 'La granada es una de las frutas con más propiedades y mejor valoradas a nivel nutricional. De hecho está considerada como una \"superfruta\" por los principios activos compuestos químicos de acción positiva que posee. Este nombre popular de la granada procede del latín (ponme) y del francés (granate), lo cual se traduce como \"manzana con semillas\" aproximadamente.', 200, 7, 10),
(16, 'Pomelo', 'El pomelo es un fruto de clima tropical o subtropical. Se considera que el fruto proviene de un híbrido entre la naranja y la cimboa. Pertenece a la familia de los cítricos. Tiene forma redonda y un intenso color anaranjado casi rojizo. El sabor del pomelo es una mezcla entre amargo, dulce y ácido. El agua es el principal componente de este cítrico.', 200, 7, 10),
(17, 'Naranja', 'La naranja es un cítrico rico en vitamina C. Se trata de una fruta de color anaranjado con un sabor que varía según su variedad, entre amarga o dulce. Las naranjas son redondas y tersas, su color es vivo y brillante. Tienen un aroma muy particular y se usan en diversas recetas y zumos.', 200, 7, 10),
(18, 'Melocotón', 'El melocotón destaca por su piel aterciopelada y por su carne amarilla o blanquecina de sabor dulce y aroma delicado. La nectarina es la variedad que no tiene la piel aterciopelada. Hay que tener especial cuidado con el hueso del melocotón, ya que contiene un ácido tóxico que puede provocar vómitos, dolor de estómago y de cabeza', 200, 7, 10),
(19, 'Jinro', 'Jinro es una bebida destilada nativa de Corea. Su graduación alcohólica oscila entre el 20 y el 45%. Su sabor se puede comparar con el del vodka, aunque es algo más dulce por los azúcares añadidos durante el proceso de elaboración. 61,38 millones de cajas vendidas, casi triplicando a la anterior bebida, sus increibles números de venta.', 200, 2, 10),
(20, 'Smirnoff', 'Tipo de vodka de origen ruso. Actualmente es el vodka más vendido del mundo, con mercado en más de 130 países, y pertenece a la multinacional Diageo. Elaborado en la destilería homónima, fundada por Piotr Arsenieyevich Smirnov en 1864. ¿Sus números? 24,70 millones de cajas vendidas.', 200, 2, 10),
(21, 'San Miguel', 'No se trata de la famosa cerveza en nuestro país. Es la ginebra de mayor venta en el mundo, con cerca de 23,8 millones de cajas de 9 litros, según Drinks International. Fue fundada como La Tondeña, Inc. en 1902 por Carlos Palanca, fabricando una amplia gama de bebidas destiladas y bebidas no alcohólicas.', 200, 2, 10),
(22, 'Emperador', 'Duplicando sus ventas en un año, es un brandy tremendamente especial, ya que es mucho más dulce que sus competidores. 20,10 millones de cajas vendidas, para este brandy que, aunque suene a español, está producido en Filipinas.', 200, 2, 10),
(23, 'Bacardi', 'Celebrando su 150 cumpleaños, Bacardi presenta 19,8 millones de cajas vendidas y un 1% de aumento en las ventas. Muchos de sus productos han recibido el prestigioso premio por calidad del Instituto Internacional de Selecciones de Calidad Monde Selection.', 250, 2, 2),
(24, 'Tanduay', 'Ron filipino que va camino de sobrepasar a Bacardi. De gusto seco, basa su éxito en ser tremendamente barato. En el año 1988 fue comprada la destilería por la familia Lucio Tan, poniendo en marcha un programa de modernización y expansión, y su aumento en las ventas ronda el 5%.', 251, 2, 10),
(25, 'Snow', 'Producida en China, vendió 50,8 millones de barriles. Cerveza estilo lager, presenta un sabor más lupulado que sus competidoras en China.', 165, 2, 15),
(26, 'Johnnie Walker', 'Más de 18 millones de caja vendidas, para la marca de Whisky escocés producida por Diageo en Kilmarnock, Escocia. Esta marca de whisky escocés se puede encontrar en más de 200 países, siendo por ese motivo la más distribuida del mundo.', 200, 2, 13),
(27, 'Tarta de chocolate o Tarta Vianner', 'Este postre es básico para una vida feliz. Se ha adaptado a muchos países cambiando algunos ingredientes y formas de preparación, pero, de todas formas delicioso.', 200, 3, 14),
(28, 'Gelato', 'El Gelato es originario de Italia, sin embargo existen gelaterias en muchos países de Latinoamérica y Europa. Este postre es exquisito y sumamente saludable. Como dicen en Italia: \"Un verdadero arte culinario\". La diferencia entre este postre y el helado son los productos. Para preparar gelato se utilizan productos 100% naturales y no tienen tanta grasa ni azúcar como el helado, además son mucho más cremosos. Si aún no has probado un gelato, no dudes en hacerlo y date un gustito.', 200, 3, 2),
(29, 'Tiramisú', 'Es de origen italiano y está hecho a base de café y licor. Su preparación es sencilla, sin embargo existen muchos variantes de acuerdo a los lugares en donde se ha vuelto muy famoso. Y como no, si es realmente delicioso.', 325, 3, 14),
(30, 'Pasteís de Belém', 'Pastéis de Belém, es un postre originario de Portugal, perfecto para compartir. Según cuenta la leyenda, la receta de este postre lleva en secreto por más de 200 años y solo 3 personas en el mundo la conocen. Así que tengan por seguro que probarlas será todo un privilegio.', 234, 3, 12),
(31, 'Pávlola', 'Pávlola, es un postre que transmite dulzura, sin duda. El origen de este postre se lo disputan Nueva Zelanda y Australia. El postre fue inspirado en una bailarina rusa, Anna Pávlola, y es de ella que recibe el nombre de pávlola. Según se cuenta, el creador del postre vivía enamorado de esta bailarina.', 210, 3, 10),
(32, 'Pastafrola', 'Pastafrola, también conocido con pasta flora, es un postre artesanal típico de Argentina, Paraguay y Uruguay. Esta tarta es característica por la preparación original de la masa de pastel cubierta por dulce de membrillo, aunque varía entre dulce de leche, dulce de guayaba y otros. Si tienes la oportunidad de viajar a alguno de estos países, no dudes en probarlo.', 210, 3, 10),
(33, 'Crema de papaya', 'Crema de Papaya, el postre más famoso en Brasil desde 1990, además es sumamente delicioso. Este postre esta hecho a base de una crema de papaya y se acostumbra servirlo con helado de vainilla. Perfecto para una tarde de verano.', 200, 3, 13),
(34, 'Buñuelos de viento', 'Buñuelos de viento. Este postre es sencillo y delicioso originario de España. El nombre nace por la apariencia del postre: son unas bolas pequeñas de masa que al ser fritas suelen doblar su tamaño, por eso se les denomina \"de viento\". Pueden ser servidas con helado o alguna crema de frutas y, sin duda, quedarás enamorado.', 210, 3, 5),
(35, 'chips fuego', 'papas fritas', 250, 4, 10),
(36, 'rufles queso', 'nachos', 500, 4, 10),
(37, 'chips jalapeño', 'papas fritas', 256, 4, 10),
(38, 'takis fuego', 'takis', 250, 4, 10),
(39, 'rancheritos', 'nachos', 253, 4, 12),
(40, 'doritos nachos', 'nachos', 200, 4, 10),
(41, 'crujitos', 'crujitos', 252, 4, 10),
(42, 'fritos chorizo y chipotle', 'nachos', 256, 4, 21),
(43, 'doritos pizzerolas', 'nachos', 126, 4, 12),
(44, 'takis original', 'takis', 236, 4, 12),
(45, 'asado congelado camote snacks', 'almuerzo', 210, 5, 10),
(46, 'Congelados instantánea listo para comer comida rápida', 'sopa', 250, 5, 10),
(47, 'Fresco congelado fruta de fresa alimentos para la venta', 'frutas congeladas', 200, 5, 10),
(48, 'calamar anillo alimentos Halal', 'calamar', 256, 5, 12),
(49, 'Asado a la parrilla filete de pescado', 'pescado', 210, 5, 12),
(50, 'Royal Canin', 'comida para perro', 250, 6, 2),
(51, 'Eukanuba', 'Con más de 40 años en el mercado, esta marca se ha consolidado al brindar toda una gama de opciones para nutrir a tu mascota. Desde fórmulas para cachorros, adultos y perros mayores, con sus respectivas divisiones de acuerdo con la talla, hasta alimentos específicos por raza.', 210, 6, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_category`
--

CREATE TABLE `product_category` (
  `id` int(9) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `max_reward_points_encash` int(9) NOT NULL,
  `parent_category_id` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `max_reward_points_encash`, `parent_category_id`) VALUES
(1, 'Vegetales', 10, NULL),
(2, 'Bebidas', 5, NULL),
(3, 'Reposteria', 10, NULL),
(4, 'Frituras', 2, NULL),
(5, 'Comida Congelada', 5, NULL),
(6, 'Comida de Mascotas', 5, NULL),
(7, 'Frutas', 10, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_category_discount`
--

CREATE TABLE `product_category_discount` (
  `id` int(9) NOT NULL,
  `product_category_id` int(9) NOT NULL,
  `discount_value` int(9) NOT NULL,
  `discount_unit` varchar(20) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `valid_from` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `valid_until` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `coupon_code` varchar(10) NOT NULL,
  `minimum_order_value` int(9) NOT NULL DEFAULT '0',
  `maximum_discount_amount` int(9) NOT NULL,
  `is_redeem_allowed` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_category_discount`
--

INSERT INTO `product_category_discount` (`id`, `product_category_id`, `discount_value`, `discount_unit`, `create_date`, `valid_from`, `valid_until`, `coupon_code`, `minimum_order_value`, `maximum_discount_amount`, `is_redeem_allowed`) VALUES
(1, 2, 10, '%', '2018-03-06 10:21:05', '2018-01-12 08:00:00', '2018-08-12 08:00:00', 'E199018', 1, 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_discount`
--

CREATE TABLE `product_discount` (
  `id` int(9) NOT NULL,
  `product_id` int(9) NOT NULL,
  `discount_value` int(9) NOT NULL,
  `discount_unit` varchar(20) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `valid_from` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `valid_until` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `coupon_code` varchar(10) NOT NULL,
  `minimum_order_value` int(9) NOT NULL,
  `maximum_discount_amount` int(9) NOT NULL,
  `is_redeem_allowed` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_discount`
--

INSERT INTO `product_discount` (`id`, `product_id`, `discount_value`, `discount_unit`, `create_date`, `valid_from`, `valid_until`, `coupon_code`, `minimum_order_value`, `maximum_discount_amount`, `is_redeem_allowed`) VALUES
(1, 1, 5, '%', '2018-03-06 10:21:42', '2018-01-12 08:00:00', '2018-09-12 08:00:00', 'e19625655', 1, 1, '1'),
(2, 12, 10, '%', '2018-03-06 10:22:11', '2018-01-12 08:00:00', '2018-08-12 08:00:00', 'E199019', 1, 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_pricing`
--

CREATE TABLE `product_pricing` (
  `id` int(9) NOT NULL,
  `product_id` int(9) NOT NULL,
  `base_price` int(9) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expiry_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `in_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product_pricing`
--

INSERT INTO `product_pricing` (`id`, `product_id`, `base_price`, `create_date`, `expiry_date`, `in_active`) VALUES
(1, 1, 20, '2018-03-04 06:08:36', '2018-03-10 04:00:00', '1'),
(2, 2, 30, '2018-03-06 04:50:47', '2018-03-10 04:00:00', '1'),
(3, 3, 10, '2018-03-06 04:51:05', '2018-03-10 04:00:00', '1'),
(4, 4, 20, '2018-03-06 04:51:19', '2018-03-10 04:00:00', '1'),
(5, 5, 20, '2018-03-06 13:28:44', '2018-03-10 04:00:00', '1'),
(6, 6, 25, '2018-03-06 13:29:04', '2018-03-10 04:00:00', '1'),
(7, 7, 36, '2018-03-06 13:29:18', '2018-03-10 04:00:00', '1'),
(8, 8, 35, '2018-03-06 13:29:34', '2018-03-10 04:00:00', '1'),
(9, 9, 42, '2018-03-06 13:29:51', '2018-03-10 04:00:00', '1'),
(10, 10, 36, '2018-03-06 13:30:04', '2018-03-10 04:00:00', '1'),
(11, 11, 15, '2018-03-06 13:30:21', '2018-03-10 04:00:00', '1'),
(12, 12, 50, '2018-03-06 13:30:46', '2018-03-10 04:00:00', '1'),
(13, 13, 36, '2018-03-06 13:31:01', '2018-03-10 04:00:00', '1'),
(14, 14, 45, '2018-03-06 13:31:21', '2018-03-10 04:00:00', '1'),
(15, 15, 25, '2018-03-06 13:31:38', '2018-03-10 04:00:00', '1'),
(16, 16, 36, '2018-03-06 13:31:53', '2018-03-10 04:00:00', '1'),
(17, 17, 52, '2018-03-06 13:32:09', '2018-03-10 04:00:00', '1'),
(18, 18, 36, '2018-03-06 13:32:23', '2018-03-10 04:00:00', '1'),
(19, 19, 45, '2018-03-06 13:32:41', '2018-03-10 04:00:00', '1'),
(20, 20, 47, '2018-03-06 13:32:56', '2018-03-10 04:00:00', '1'),
(21, 21, 25, '2018-03-06 13:33:12', '2018-03-10 04:00:00', '1'),
(22, 22, 45, '2018-03-06 13:33:28', '2018-03-10 04:00:00', '1'),
(23, 23, 58, '2018-03-06 13:35:21', '2018-03-10 04:00:00', '1'),
(24, 24, 85, '2018-03-06 13:35:39', '2018-03-10 04:00:00', '1'),
(25, 25, 69, '2018-03-06 13:35:52', '2018-03-10 04:00:00', '1'),
(26, 26, 110, '2018-03-06 13:36:09', '2018-03-10 04:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `registration_date` date NOT NULL,
  `promotional_reward_points` int(9) NOT NULL,
  `non_promotional_reward_points` int(9) NOT NULL,
  `membership_type_id` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_reward_point_log`
--

CREATE TABLE `user_reward_point_log` (
  `id` int(9) NOT NULL,
  `user_id` int(9) NOT NULL,
  `reward_points` int(9) NOT NULL,
  `reward_type` char(2) NOT NULL,
  `operation_type` char(1) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expiry_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `membership_type`
--
ALTER TABLE `membership_type`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `payment_offer`
--
ALTER TABLE `payment_offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_offer_product` (`product_id`),
  ADD KEY `payment_offer_product_category` (`product_category_id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_product_category` (`product_category_id`);

--
-- Indices de la tabla `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prd_category_prd_category` (`parent_category_id`);

--
-- Indices de la tabla `product_category_discount`
--
ALTER TABLE `product_category_discount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prd_pricing_discount_prd_cat` (`product_category_id`);

--
-- Indices de la tabla `product_discount`
--
ALTER TABLE `product_discount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_discount_product` (`product_id`);

--
-- Indices de la tabla `product_pricing`
--
ALTER TABLE `product_pricing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_pricing_product` (`product_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_membership_type` (`membership_type_id`);

--
-- Indices de la tabla `user_reward_point_log`
--
ALTER TABLE `user_reward_point_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_rewards_user` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `membership_type`
--
ALTER TABLE `membership_type`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `payment_offer`
--
ALTER TABLE `payment_offer`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `product_category_discount`
--
ALTER TABLE `product_category_discount`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `product_discount`
--
ALTER TABLE `product_discount`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `product_pricing`
--
ALTER TABLE `product_pricing`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_reward_point_log`
--
ALTER TABLE `user_reward_point_log`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `payment_offer`
--
ALTER TABLE `payment_offer`
  ADD CONSTRAINT `payment_offer_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `payment_offer_product_category` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`);

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_product_category` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`);

--
-- Filtros para la tabla `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `prd_category_prd_category` FOREIGN KEY (`parent_category_id`) REFERENCES `product_category` (`id`);

--
-- Filtros para la tabla `product_category_discount`
--
ALTER TABLE `product_category_discount`
  ADD CONSTRAINT `prd_pricing_discount_prd_cat` FOREIGN KEY (`product_category_id`) REFERENCES `product_category` (`id`);

--
-- Filtros para la tabla `product_discount`
--
ALTER TABLE `product_discount`
  ADD CONSTRAINT `product_discount_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Filtros para la tabla `product_pricing`
--
ALTER TABLE `product_pricing`
  ADD CONSTRAINT `product_pricing_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_membership_type` FOREIGN KEY (`membership_type_id`) REFERENCES `membership_type` (`id`);

--
-- Filtros para la tabla `user_reward_point_log`
--
ALTER TABLE `user_reward_point_log`
  ADD CONSTRAINT `user_rewards_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
