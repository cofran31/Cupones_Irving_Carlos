-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2018 a las 05:11:57
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
(2, 'Mangos', 'Mangos de la temporada.', 50, 7, 10);

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
(1, 1, 20, '2018-03-04 06:08:36', '2018-03-10 04:00:00', '1');

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `product_category_discount`
--
ALTER TABLE `product_category_discount`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product_discount`
--
ALTER TABLE `product_discount`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product_pricing`
--
ALTER TABLE `product_pricing`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
