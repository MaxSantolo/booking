-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Nov 15, 2018 alle 10:34
-- Versione del server: 5.7.22-0ubuntu18.04.1
-- Versione PHP: 7.1.17-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickbooking`
--
CREATE DATABASE IF NOT EXISTS `pickbooking` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pickbooking`;

-- --------------------------------------------------------

--
-- Struttura della tabella `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `booked_by` int(10) UNSIGNED DEFAULT NULL,
  `booked_name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `room_id` int(10) UNSIGNED DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `location` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optional_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `price_tot_optional` float DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `room_setup` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `info` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `bookings`
--

INSERT INTO `bookings` (`id`, `booked_by`, `booked_name`, `room_id`, `location_id`, `location`, `optional_id`, `price`, `price_tot_optional`, `total_price`, `room_setup`, `start_date`, `end_date`, `status`, `info`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 'Giovanni D\'Apote - Evento 1', 1, 1, 'Eur', NULL, 100, 0, 100, NULL, '2018-11-15 14:00:00', '2018-11-15 17:00:00', 1, NULL, '2018-11-15 10:15:06', '2018-11-15 10:15:56', NULL),
(2, 4, 'Giovanni D\'Apote - Evento 2', 2, 1, 'Eur', NULL, 380, 0, 380, NULL, '2018-11-15 14:00:00', '2018-11-15 23:00:00', 1, NULL, '2018-11-15 10:15:20', '2018-11-15 10:15:56', NULL),
(3, 4, 'Giovanni D\'Apote - Evento 3', 3, 1, 'Eur', NULL, 290, 0, 290, NULL, '2018-11-15 14:00:00', '2018-11-15 21:00:00', 1, NULL, '2018-11-15 10:15:29', '2018-11-15 10:15:56', NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `bookingsupports`
--

CREATE TABLE `bookingsupports` (
  `id` int(10) UNSIGNED NOT NULL,
  `roomId` int(10) NOT NULL,
  `roomName` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bookingTime` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac_address` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `string_user` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `price_room` int(11) DEFAULT NULL,
  `tot_optional` float DEFAULT NULL,
  `coffee_break` float DEFAULT NULL,
  `quick_lunch` int(11) DEFAULT NULL,
  `videoproiettore` int(11) DEFAULT NULL,
  `permanent_coffee` int(11) DEFAULT NULL,
  `wifi` int(11) DEFAULT NULL,
  `videoconferenza` int(11) DEFAULT NULL,
  `webconference` int(11) DEFAULT NULL,
  `lavagna_foglimobili` int(11) DEFAULT NULL,
  `stampante` int(11) DEFAULT NULL,
  `permanent_coffeeplus` int(11) DEFAULT NULL,
  `connessione_viacavo` int(11) DEFAULT NULL,
  `integrazione_permanentcoffee` int(11) DEFAULT NULL,
  `upgrade_banda10mb` int(11) DEFAULT NULL,
  `upgrade_banda8mb` int(11) DEFAULT NULL,
  `upgrade_banda20mb` int(11) DEFAULT NULL,
  `wirless_4mb20accessi` int(11) DEFAULT NULL,
  `wirless_8mb35accessi` int(11) DEFAULT NULL,
  `wirless_10mb50accessi` int(11) DEFAULT NULL,
  `videoregistrazione` int(11) DEFAULT NULL,
  `fattorino` int(11) DEFAULT NULL,
  `lavagna_interattiva` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `booking_optionals`
--

CREATE TABLE `booking_optionals` (
  `id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `tot_optional` float NOT NULL,
  `coffee_break` float DEFAULT NULL,
  `quick_lunch` int(11) DEFAULT NULL,
  `videoproiettore` int(11) DEFAULT NULL,
  `permanent_coffee` int(11) DEFAULT NULL,
  `wifi` int(11) DEFAULT NULL,
  `videoconferenza` int(11) DEFAULT NULL,
  `webconference` int(11) DEFAULT NULL,
  `lavagna_foglimobili` int(11) DEFAULT NULL,
  `stampante` int(11) DEFAULT NULL,
  `permanent_coffeeplus` int(11) DEFAULT NULL,
  `connessione_viacavo` int(11) DEFAULT NULL,
  `integrazione_permanentcoffee` int(11) DEFAULT NULL,
  `upgrade_banda10mb` int(11) DEFAULT NULL,
  `upgrade_banda8mb` int(11) DEFAULT NULL,
  `upgrade_banda20mb` int(11) DEFAULT NULL,
  `wirless_4mb20accessi` int(11) DEFAULT NULL,
  `wirless_8mb35accessi` int(11) DEFAULT NULL,
  `wirless_10mb50accessi` int(11) DEFAULT NULL,
  `videoregistrazione` int(11) DEFAULT NULL,
  `fattorino` int(11) DEFAULT NULL,
  `lavagna_interattiva` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `calendar_rooms`
--

CREATE TABLE `calendar_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_column` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `calendar_rooms`
--

INSERT INTO `calendar_rooms` (`id`, `name_column`) VALUES
(1, '8 - 9'),
(2, '9 - 10'),
(3, '10 - 11'),
(4, '11 - 12'),
(5, '12 - 13'),
(6, '13 - 14'),
(7, '15 - 16'),
(8, '16 - 17'),
(9, '17 - 18'),
(10, '18 - 19'),
(11, '19 - 20'),
(12, '20 - 21'),
(13, '21 - 22'),
(14, '22 - 23');

-- --------------------------------------------------------

--
-- Struttura della tabella `hours`
--

CREATE TABLE `hours` (
  `id` int(10) UNSIGNED NOT NULL,
  `column_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `hours`
--

INSERT INTO `hours` (`id`, `column_name`) VALUES
(1, '8-9'),
(2, '9-10'),
(3, '10-11'),
(4, '11-12'),
(5, '12-13'),
(6, '13-14'),
(7, '14-15'),
(8, '15-16'),
(9, '16-17'),
(10, '17-18'),
(11, '18-19'),
(12, '19 -20'),
(13, '20-21'),
(14, '21-22'),
(15, '22-23');

-- --------------------------------------------------------

--
-- Struttura della tabella `hour_booking`
--

CREATE TABLE `hour_booking` (
  `id` int(11) NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `hours_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `hour_booking`
--

INSERT INTO `hour_booking` (`id`, `booking_id`, `hours_id`) VALUES
(1, 1, 7),
(2, 1, 8),
(3, 2, 10),
(4, 2, 11),
(5, 3, 7),
(6, 3, 8),
(7, 3, 9);

-- --------------------------------------------------------

--
-- Struttura della tabella `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `sede` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `locations`
--

INSERT INTO `locations` (`id`, `sede`, `location_id`) VALUES
(1, 'Eur', 1),
(2, 'Boezio', 2),
(3, 'Regolo', 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_29_105613_create_rooms_table', 1),
(4, '2017_11_05_003439_create_bookings_table', 1),
(5, '2017_11_19_030153_laratrust_setup_tables', 1),
(6, '2017_11_30_104848_create_user_activations_table', 1),
(7, '2018_06_08_124221_create_booking_optionals_table', 2),
(8, '2018_06_11_125221_create_booking_optionals_table', 3),
(9, '2018_06_21_065353_create_calendar_rooms_table', 4),
(11, '2018_06_21_073919_create_hours_table', 5),
(12, '2018_09_11_090644_create_bookingsupports_table', 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `optionals`
--

CREATE TABLE `optionals` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `column_name` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unita` int(11) DEFAULT NULL,
  `prezzo_per_unita` float NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `optionals`
--

INSERT INTO `optionals` (`id`, `nome`, `column_name`, `unita`, `prezzo_per_unita`, `updated_at`, `created_at`) VALUES
(1, 'Coffee Break n. persone', 'coffee_break', NULL, 6.5, NULL, NULL),
(2, 'Quick Lunch', 'quick_lunch', NULL, 1, NULL, NULL),
(3, 'Videoproiettore', 'videoproiettore', NULL, 1, NULL, NULL),
(4, 'Permanent Coffee', 'permanent_coffee', NULL, 0, NULL, NULL),
(5, 'WiFi n. persone', 'wifi', NULL, 0, NULL, NULL),
(6, 'Video Conferenza', 'videoconferenza', NULL, 0, NULL, NULL),
(7, 'Web Conference', 'webconference', NULL, 0, NULL, NULL),
(8, 'Lavagna fogli mobili n. giorni', 'lavagna_foglimobili', NULL, 0, NULL, NULL),
(9, 'Stampante n. max 5', 'stampante', NULL, 0, NULL, NULL),
(10, 'Permanent Coffee Plus', 'permanent_coffeeplus', NULL, 0, NULL, NULL),
(11, 'Connessione Internet via cavo', 'connessione_viacavo', NULL, 0, NULL, NULL),
(12, 'Integrazione Permanent Coffee', 'integrazione_permanentcoffee', NULL, 0, NULL, NULL),
(13, 'Upgrade Banda Max 10Mb', 'upgrade_banda10mb', NULL, 0, NULL, NULL),
(14, 'Upgrade Banda Max 8Mb', 'upgrade_banda8mb', NULL, 0, NULL, NULL),
(15, 'Upgrade Banda Max 20Mb', 'upgrade_banda20mb', NULL, 0, NULL, NULL),
(16, 'Wirless fino a 4Mb max 20 accessi', 'wirless_4mb20accessi', NULL, 0, NULL, NULL),
(17, 'Wirless fino a 8Mb max 35 accessi', 'wirless_8mb35accessi', NULL, 0, NULL, NULL),
(18, 'Wirless fino a 10Mb max 50 accessi', 'wirless_10mb50accessi', NULL, 0, NULL, NULL),
(19, 'Videoregistrazione', 'videoregistrazione', NULL, 0, NULL, NULL),
(20, 'Fattorino', 'fattorino', NULL, 0, NULL, NULL),
(21, 'Lavagna Interattiva', 'lavagna_interattiva', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-booking', 'Create Booking', 'Create Booking', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(2, 'read-booking', 'Read Booking', 'Read Booking', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(3, 'update-booking', 'Update Booking', 'Update Booking', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(4, 'delete-booking', 'Delete Booking', 'Delete Booking', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(5, 'create-room', 'Create Room', 'Create Room', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(6, 'read-room', 'Read Room', 'Read Room', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(7, 'update-room', 'Update Room', 'Update Room', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(8, 'delete-room', 'Delete Room', 'Delete Room', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(9, 'create-user', 'Create User', 'Create User', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(10, 'read-user', 'Read User', 'Read User', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(11, 'update-user', 'Update User', 'Update User', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(12, 'delete-user', 'Delete User', 'Delete User', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(13, 'create-security', 'Create Security', 'Create Security', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(14, 'read-security', 'Read Security', 'Read Security', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(15, 'update-security', 'Update Security', 'Update Security', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(16, 'delete-security', 'Delete Security', 'Delete Security', '2018-05-29 10:48:28', '2018-05-29 10:48:28');

-- --------------------------------------------------------

--
-- Struttura della tabella `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(6, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prices`
--

CREATE TABLE `prices` (
  `id_price` int(11) NOT NULL,
  `price_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `price` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `prices`
--

INSERT INTO `prices` (`id_price`, `price_id`, `room_id`, `price`, `duration`, `updated_at`, `created_at`) VALUES
(1, 1, 1, '35', 1, NULL, NULL),
(2, 1, 1, '65', 2, NULL, NULL),
(3, 1, 1, '100', 3, NULL, NULL),
(4, 1, 1, '125', 4, NULL, NULL),
(5, 1, 1, '220', 8, NULL, NULL),
(6, 2, 2, '55', 1, NULL, NULL),
(7, 2, 2, '100', 2, NULL, NULL),
(8, 2, 2, '150', 3, NULL, NULL),
(9, 2, 2, '205', 4, NULL, NULL),
(10, 2, 2, '380', 8, NULL, NULL),
(11, 3, 3, '45', 1, NULL, NULL),
(12, 3, 3, '85', 2, NULL, NULL),
(13, 3, 3, '125', 3, NULL, NULL),
(14, 3, 3, '160', 4, NULL, NULL),
(15, 3, 3, '290', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'Superadmin', 'Superadmin', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(2, 'admin', 'Admin', 'Admin', '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(3, 'user', 'User', 'User', '2018-05-29 10:48:29', '2018-05-29 10:48:29');

-- --------------------------------------------------------

--
-- Struttura della tabella `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(1, 4, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(3, 48, 'App\\User'),
(3, 96, 'App\\User'),
(3, 98, 'App\\user'),
(3, 99, 'App\\user'),
(3, 100, 'App\\user'),
(3, 101, 'App\\user'),
(3, 102, 'App\\user');

-- --------------------------------------------------------

--
-- Struttura della tabella `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pax` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `location` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_provision` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `pax`, `location_id`, `location`, `price_provision`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Coworking', 1, 1, 'Eur', '', 'COWORKING', '2018-05-29 10:48:29', '2018-05-29 10:48:29'),
(2, 'DayOffice', 3, 1, 'Eur', '', 'DAYOFFICE', '2018-05-29 10:48:29', '2018-05-29 10:48:29'),
(3, 'HotDesking', 3, 1, 'Eur', '', 'HOTDESKING', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `room_optional`
--

CREATE TABLE `room_optional` (
  `id` int(11) NOT NULL,
  `optional_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `room_optional`
--

INSERT INTO `room_optional` (`id`, `optional_id`, `room_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ragione_sociale` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `ragione_sociale`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'superadmin@pisyek.com', '0', '$2y$10$HLj60zBD/8QZEhv/YYyXZ.Dq66PnYMPbsnsdiLG3i.9hURyoGrnIG', 1, NULL, '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(2, 'Admin', 'admin@pisyek.com', '0', '$2y$10$kjD5zXIb3uUcMQZCBWRHnut7Dpm8pkP30mZldeeyS6qRdnOhUhB2K', 1, NULL, '2018-05-29 10:48:28', '2018-05-29 10:48:28'),
(3, 'User', 'user@pisyek.com', '0', '$2y$10$18DSUMJv3U3tMv5RZMr2eechbIJNh6WEVvUdMNF6dcQC9Ra2bZTGe', 1, NULL, '2018-05-29 10:48:29', '2018-05-29 10:48:29'),
(4, 'Giovanni D\'Apote', 'giovanni_dapote@outlook.it', '0', '$2y$10$R5Tfqi.yc8izWjSrgYtrieDWXOZmynQ6Ly/SVz9MF0GVu8J1y.i7S', 1, 'IPtrNC8XX152CJRoeMJBk8e5oYXHu6fC18tt4vS3QPFCQnr8NzuQBYobZYHu', '2018-06-04 06:36:31', '2018-06-04 06:36:31'),
(48, 'guest', 'guest@guest.com', 'guest456dptgnn', '$2y$10$P2ugxW.a/TfJoD/q55M.KuHMWAjsQcohmPI4ETGmB2BnpfzYWyQei', 1, 'WPJW2amp7X8TrnqdCXpzMDKifHfs6SzgHmYM3y8r4GQYy1mnRVbyrj4Qd0SC', '2018-09-10 09:14:16', '2018-09-10 09:14:57'),
(96, 'Daniele Dapote', 'daniele@gmail.com', 'pickcenter', '$2y$10$SrQGHrBPLXwYO2upTdlXcukCdR/qd9ZDz0cqEVVLzhdczWt5uWwqO', 1, '12XMsKt8C40lxX4u8p5y7mfcGkKVh3m0TdRECVKB5dYymp2aMCI68DM6xvOJ', '2018-10-03 09:27:55', '2018-10-03 09:27:55'),
(98, 'Cipollino', 'cipollino@gmail.com', 'pickcenter', '$2y$10$FSoZdWw6eJl.bhW/dZDaIuTq3OfH6UQQ2IQo2lA6E7/TO5IO502CS', 1, NULL, '2018-10-29 08:13:53', '2018-10-29 08:13:53'),
(99, 'sputafuoco', 'sputafuoco@gmail.com', 'pickcenter', '$2y$10$yT8Odkq55s1i8jfE.XOSZuoiyC2jTgaKODdeoAjlZvsqGIPuifUSi', 1, NULL, '2018-10-29 08:15:35', '2018-10-29 08:15:35'),
(100, 'Maiolica', 'maiolica@gmail.com', 'pickcenter', '$2y$10$INj0dfQZaEl1U3LqrfRWzu/17mFjBpyTRBtWgDM3QObLBEMk98DGy', 1, 'wEX1x0OMy0DpomnoMcJNcnrKbICKG81KOMsxLybHtP5IFfA3NtcWNFEInW7r', '2018-10-29 08:34:40', '2018-10-29 08:34:40'),
(101, 'Madalina', 'madalina@gmail.com', 'pickcenter', '$2y$10$.17871d6eITSqroB49jh1uwAgQ5qeaa2xj82cNeBUN7d4lNYpUPHS', 1, NULL, '2018-10-29 11:29:36', '2018-10-29 11:29:36'),
(102, 'cicciobello', 'cicciobello@gmail.com', 'pickcenter', '$2y$10$bW9uN2wjP3Abi4ud0Bcr9e4PfbwTcX4gvYICDRwWoD5vOrcGbVaxq', 1, NULL, '2018-10-31 07:40:50', '2018-10-31 07:40:50');

-- --------------------------------------------------------

--
-- Struttura della tabella `user_activations`
--

CREATE TABLE `user_activations` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `user_activations`
--

INSERT INTO `user_activations` (`user_id`, `token`, `created_at`) VALUES
(4, 'bH1oeqyNXj2GwLrBM20bAopuLk53IWLJCBDsCOJ0', '2018-06-04 06:36:32'),
(6, 'oFNRLKc9PDneaM0taq46QdFOi33g0dyLE9iY7FY0', '2018-06-15 06:56:04'),
(7, 'FMKAU0leJvaBirH4WBPhyRB5Wj3sZ5aDnBVZN7rj', '2018-06-15 07:00:17'),
(8, 'SdWR48LlOwBBx9cNC2B4uatxaVK1SEX2H5wuaVEP', '2018-06-15 07:08:27'),
(9, 'DVlt9Ab4k0eZ74SWDNzNEtwXqhvNp6krd4CtSdif', '2018-06-15 08:08:53'),
(10, 'paGZQOPAvHJy1FESN4fMOV66lhsDPLTVfocw6PIl', '2018-06-15 08:10:52'),
(11, 'RTBEgrilLb8VtmCtyJxLkwZBDkeoStZoTqFdAKgF', '2018-06-15 08:12:06'),
(12, 'NX2zVE0nj8NWO3XgDk3AZBVE3saj771EFxhaiahb', '2018-06-15 08:20:28'),
(13, 'OXPfwRzJj7VHNJg3BL1XTgPkxzaAxTsoHLcoUZ2l', '2018-06-15 08:23:04'),
(14, 'qumrWtCv50QlN4KW5YBOtg2llnBDq3qMnUqxtgji', '2018-06-15 08:24:13'),
(15, 'zr6nWzDv2dlqK4CWwPYTajmme1K61IxTtC6m6ICp', '2018-06-15 08:28:51'),
(16, 'PY4boXp9Qj88Qw7i39F3gL7pXZDfWwY0ByraJZSG', '2018-06-15 09:03:40'),
(17, '5qFnChTm3yOkTnWlnetYxXRYkzlQfNH36YrOzOk0', '2018-06-15 09:20:42'),
(18, '9A0xYgc2kW0jfbOfwj0ibz2bZ5XLekAUjBITv2BV', '2018-06-15 09:35:11'),
(19, '5fplZGdOkpxJsJxlMCrpSXg14n7AzLo0WCbWwrnR', '2018-06-15 09:44:41'),
(20, 'CfOnHSJKMrTm4iq1g7dvydEPSFbvbcMt9DUYUs8r', '2018-06-15 09:55:50'),
(21, 'Ff7iX7KRbRSll4A89FaddDGIcCQiEbV3QYh6Qgcz', '2018-06-15 10:04:20'),
(22, 'cfnOEILbOViaCsiTvSx8gGSU3WKVILG2DLFRGZqR', '2018-06-15 10:09:27'),
(23, 'Keepvxh7eHXhts5HtNrBqpMY7nrRGrPM7NdAWk6x', '2018-06-15 10:22:45'),
(24, 're23IVlg0EmLvvjpceIPhfvlQNpjDc4uLmWLBzaI', '2018-06-15 10:24:10'),
(25, 'Q0Us8USQzKbNdWAkeKOkTpSPAZU1fAPFxS8cXJO2', '2018-07-17 09:00:30'),
(26, 'SoHaIMhIzc5QdOpx067T8BGTtyHByIwvheynNyHj', '2018-07-17 11:08:26'),
(27, 'BLaR8grX1ILViMuTju2QpYH7IH6yQLQyyVI2TFVi', '2018-07-18 07:57:29'),
(28, 'xUmz6KuiKzf8LD1zzLGYF6XU9q4dLJHhXXm5oYMB', '2018-09-03 14:09:55'),
(29, 'yCaCXo8AxOPpbipnuR4ECO4P4N6C92c0r0aygCD2', '2018-09-03 14:15:58'),
(30, 'xJKXvJ9vE0Rm2VuErCTNhBIJRIpHGSBasmzrZct1', '2018-09-03 14:20:42');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_room_id_foreign` (`room_id`),
  ADD KEY `bookings_booked_by_foreign` (`booked_by`);

--
-- Indici per le tabelle `bookingsupports`
--
ALTER TABLE `bookingsupports`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `booking_optionals`
--
ALTER TABLE `booking_optionals`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `calendar_rooms`
--
ALTER TABLE `calendar_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `hour_booking`
--
ALTER TABLE `hour_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `optionals`
--
ALTER TABLE `optionals`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indici per le tabelle `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indici per le tabelle `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indici per le tabelle `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indici per le tabelle `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id_price`);

--
-- Indici per le tabelle `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indici per le tabelle `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indici per le tabelle `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rooms_name_unique` (`name`);

--
-- Indici per le tabelle `room_optional`
--
ALTER TABLE `room_optional`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indici per le tabelle `user_activations`
--
ALTER TABLE `user_activations`
  ADD KEY `user_activations_token_index` (`token`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `bookingsupports`
--
ALTER TABLE `bookingsupports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `booking_optionals`
--
ALTER TABLE `booking_optionals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `calendar_rooms`
--
ALTER TABLE `calendar_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT per la tabella `hours`
--
ALTER TABLE `hours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT per la tabella `hour_booking`
--
ALTER TABLE `hour_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT per la tabella `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT per la tabella `optionals`
--
ALTER TABLE `optionals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT per la tabella `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT per la tabella `prices`
--
ALTER TABLE `prices`
  MODIFY `id_price` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT per la tabella `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `room_optional`
--
ALTER TABLE `room_optional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_booked_by_foreign` FOREIGN KEY (`booked_by`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bookings_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
