-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-05-2021 a las 08:15:21
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rentcar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ads`
--

CREATE TABLE `ads` (
  `adid` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2021_05_01_074304_create_ads_table', 1),
(6, '2021_05_01_075005_create_rents_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rents`
--

CREATE TABLE `rents` (
  `rentid` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `date_expire` date NOT NULL,
  `bail` int(10) UNSIGNED NOT NULL,
  `uid` bigint(20) UNSIGNED NOT NULL,
  `adid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_day` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`adid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`rentid`),
  ADD KEY `rents_uid_foreign` (`uid`),
  ADD KEY `rents_adid_foreign` (`adid`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ads`
--
ALTER TABLE `ads`
  MODIFY `adid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rents`
--
ALTER TABLE `rents`
  MODIFY `rentid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_adid_foreign` FOREIGN KEY (`adid`) REFERENCES `ads` (`adid`) ON DELETE CASCADE,
  ADD CONSTRAINT `rents_uid_foreign` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

/* INSERTS ADS */
INSERT INTO ads VALUES(null,
"car","bmw","cla","2021-05-01","1000","red","img/bmw_cla.jpg",CURRENT_TIMESTAMP,null);
INSERT INTO ads VALUES(null,
"car","audi","a3","2021-05-02","2000","blue","img/a3.jpeg",CURRENT_TIMESTAMP,null);
INSERT INTO ads VALUES(null,
"motorbike","yamaha","r1","2021-05-03","500","black","img/r1.jpg",CURRENT_TIMESTAMP,null);
INSERT INTO ads VALUES(null,
"motorbike","kawasaki","z900","2021-05-04","750","green","img/z900.png",CURRENT_TIMESTAMP,null);
INSERT INTO ads VALUES(null,
"truck","volkswagen","crafter","2021-05-05","2000","white","img/crafter.png",CURRENT_TIMESTAMP,null);
INSERT INTO ads VALUES(null,
"truck","mercedes","actros","2021-05-06","4000","blue","img/actros.jpg",CURRENT_TIMESTAMP,null);

/* INSERTS USERS */
INSERT INTO users VALUES(null,"rafa","rodriguez calvente","admin", "1997-02-23","rafa@gmail.com","123123123",CURRENT_TIMESTAMP,null);
INSERT INTO users VALUES(null,"roberto","gonzalez alvarez","client","1997-02-23","rober@gmail.com","234234234",CURRENT_TIMESTAMP,null);
INSERT INTO users VALUES(null,"juan carlos","camacho carribero","client","1997-02-23","juanca@gmail.com","345345345",CURRENT_TIMESTAMP,null);

/* INSERTS RENTS */
INSERT INTO rents VALUES(null,CURRENT_DATE,"2021-06-06",100,
  (SELECT id from users WHERE email='rober@gmail.com'),
  (SELECT adid from ads WHERE model='cla'),
CURRENT_TIMESTAMP,null);
INSERT INTO rents VALUES(null,CURRENT_DATE,"2021-06-06",100,
  (SELECT id from users WHERE email='rober@gmail.com'),
  (SELECT adid from ads WHERE model='a3'),
CURRENT_TIMESTAMP,null);
INSERT INTO rents VALUES(null,CURRENT_DATE,"2021-06-06",100,
  (SELECT id from users WHERE email='rober@gmail.com'),
  (SELECT adid from ads WHERE model='r1')
,CURRENT_TIMESTAMP,null);
INSERT INTO rents VALUES(null,CURRENT_DATE,"2021-06-06",100,
  (SELECT id from users WHERE email='juanca@gmail.com'),
  (SELECT adid from ads WHERE model='z900'),
CURRENT_TIMESTAMP,null);
INSERT INTO rents VALUES(null,CURRENT_DATE,"2021-06-06",100,
  (SELECT id from users WHERE email='juanca@gmail.com'),
  (SELECT adid from ads WHERE model='crafter'),
CURRENT_TIMESTAMP,null);
INSERT INTO rents VALUES(null,CURRENT_DATE,"2021-06-06",100,
  (SELECT id from users WHERE email='juanca@gmail.com'),
  (SELECT adid from ads WHERE model='actros'),
CURRENT_TIMESTAMP,null);