SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `adminlte` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adminlte`;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_computer` (IN `ucomputer_id` INT)  NO SQL
DELETE FROM computers
WHERE computers.computer_id = ucomputer_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_phone` (IN `uphone_id` INT)  NO SQL
DELETE FROM phones
WHERE phones.phone_id = uphone_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_printer` (IN `uprinter_id` INT)  NO SQL
DELETE FROM printers
WHERE printers.printer_id = uprinter_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_server` (IN `userver_id` INT)  NO SQL
DELETE FROM servers
WHERE servers.server_id = userver_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_computer` (IN `uVendor` VARCHAR(255), IN `uModel` VARCHAR(255), IN `uSerialNumber` VARCHAR(255), IN `uOperatingSystem` VARCHAR(255), IN `uCpu` VARCHAR(255), IN `uMemory` VARCHAR(255), IN `uStorage` INT, IN `uDisks` INT, IN `uassistance_id` INT)  NO SQL
INSERT INTO computers (Vendor, Model, SerialNumber, OperatingSystem, Cpu, Memory, Storage, Disks, assistance_id) VALUES (uVendor, uModel, uSerialNumber, uOperatingSystem, uCpu, uMemory, uStorage, uDisks, uassistance_id)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_phone` (IN `uVendor` VARCHAR(255), IN `uModel` VARCHAR(255), IN `uSerialNumber` VARCHAR(255), IN `uassistance_id` INT)  NO SQL
INSERT INTO phones (Vendor, Model, SerialNumber, OperatingSystem, Cpu, Memory, Storage, Disks, assistance_id) VALUES (uVendor, uModel, uSerialNumber, uOperatingSystem, uCpu, uMemory, uStorage, uDisks, uassistance_id)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_printer` (IN `uVendor` VARCHAR(255), IN `uModel` VARCHAR(255), IN `uSerialNumber` VARCHAR(255), IN `uassistance_id` INT)  NO SQL
INSERT INTO printers (Vendor, Model, SerialNumber, OperatingSystem, Cpu, Memory, Storage, Disks, assistance_id) VALUES (uVendor, uModel, uSerialNumber, uOperatingSystem, uCpu, uMemory, uStorage, uDisks, uassistance_id)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_server` (IN `uVendor` VARCHAR(255), IN `uModel` VARCHAR(255), IN `uSerialNumber` VARCHAR(255), IN `uHypervisor` VARCHAR(255), IN `uCpu` VARCHAR(255), IN `uMemory` VARCHAR(255), IN `uStorage` INT, IN `uDisks` INT, IN `uassistance_id` INT)  NO SQL
INSERT INTO servers (Vendor, Model, SerialNumber, Hypervisor, Cpu, Memory, Storage, Disks, assistance_id) VALUES (uVendor, uModel, uSerialNumber, uHypervisor, uCpu, uMemory, uStorage, uDisks, uassistance_id)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_computer` (IN `ucomputer_id` INT, IN `uVendor` VARCHAR(255), IN `uModel` VARCHAR(255), IN `uSerialNumber` VARCHAR(255), IN `uOperatingSystem` VARCHAR(255), IN `uCpu` VARCHAR(255), IN `uMemory` VARCHAR(255), IN `uStorage` INT, IN `uDisks` INT, IN `uassistance_id` INT)  NO SQL
UPDATE computers
SET Vendor = uVendor, Model = uModel, SerialNumber = uSerialNumber, OperatingSystem = uOperatingSystem, Cpu = uCpu, Memory = uMemory, Storage = uStorage, Disks = uDisks, assistance_id = uassistance_id
WHERE computers.computer_id = ucomputer_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_phone` (IN `uphone_id` INT, IN `uVendor` VARCHAR(255), IN `uModel` VARCHAR(255), IN `uSerialNumber` VARCHAR(255), IN `uassistance_id` INT)  NO SQL
UPDATE phones
SET Vendor = uVendor, Model = uModel, SerialNumber = uSerialNumber, assistance_id = uassistance_id
WHERE phones.phone_id = uphone_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_printer` (IN `uprinter_id` INT, IN `uVendor` VARCHAR(255), IN `uModel` VARCHAR(255), IN `uSerialNumber` VARCHAR(255), IN `uassistance_id` INT)  NO SQL
UPDATE printers
SET Vendor = uVendor, Model = uModel, SerialNumber = uSerialNumber, assistance_id = uassistance_id
WHERE printers.printer_id = uprinter_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `update_server` (IN `userver_id` INT, IN `uVendor` VARCHAR(255), IN `uModel` VARCHAR(255), IN `uSerialNumber` VARCHAR(255), IN `uHypervisor` VARCHAR(255), IN `uCpu` VARCHAR(255), IN `uMemory` VARCHAR(255), IN `uStorage` INT, IN `uDisks` INT, IN `uassistance_id` INT)  NO SQL
UPDATE servers
SET Vendor = uVendor, Model = uModel, SerialNumber = uSerialNumber, Hypervisor = uHypervisor, Cpu = uCpu, Memory = uMemory, Storage = uStorage, Disks = uDisks, assistance_id = uassistance_id
WHERE servers.server_id = userver_id$$

DELIMITER ;

CREATE TABLE `accesspoints` (
  `ap_id` int(10) UNSIGNED NOT NULL,
  `Vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SerialNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Software` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistance_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
CREATE TABLE `assistanceAnually` (
`id` int(10) unsigned
,`name` varchar(255)
,`numOfDevices` decimal(45,0)
,`pricePerDevice` decimal(7,2)
,`routersYearlyPrice` decimal(49,2)
,`switchesYearlyPrice` decimal(49,2)
,`firewallsYearlyPrice` decimal(49,2)
,`apsYearlyPrice` decimal(49,2)
,`total` decimal(52,2)
);
CREATE TABLE `assistanceAnually1` (
`id` int(10) unsigned
,`name` varchar(255)
,`numOfDevices` decimal(45,0)
,`pricePerDevice` decimal(7,2)
,`routersYearlyPrice` decimal(49,2)
,`switchesYearlyPrice` decimal(49,2)
,`firewallsYearlyPrice` decimal(49,2)
,`apsYearlyPrice` decimal(49,2)
,`serversYearlyPrice` decimal(49,2)
,`computersYearlyPrice` decimal(49,2)
,`phonesYearlyPrice` decimal(49,2)
,`printersYearlyPrice` decimal(49,2)
,`total` decimal(56,2)
);

CREATE TABLE `assistance_regime` (
  `assistance_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `computers` (
  `computer_id` int(10) UNSIGNED NOT NULL,
  `Vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SerialNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OperatingSystem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Storage` int(11) NOT NULL,
  `Disks` int(11) NOT NULL,
  `assistance_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `firewalls` (
  `firewall_id` int(10) UNSIGNED NOT NULL,
  `Vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SerialNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Software` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Modules` int(11) NOT NULL,
  `Interfaces` int(11) NOT NULL,
  `assistance_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `phones` (
  `phone_id` int(10) UNSIGNED NOT NULL,
  `Vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SerialNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistance_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `printers` (
  `printer_id` int(10) UNSIGNED NOT NULL,
  `Vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SerialNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assistance_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `routers` (
  `router_id` int(10) UNSIGNED NOT NULL,
  `Vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SerialNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Software` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Modules` int(11) NOT NULL,
  `Interfaces` int(11) NOT NULL,
  `assistance_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `servers` (
  `server_id` int(10) UNSIGNED NOT NULL,
  `Vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SerialNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hypervisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Storage` int(11) NOT NULL,
  `Disks` int(11) NOT NULL,
  `assistance_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `switches` (
  `switch_id` int(10) UNSIGNED NOT NULL,
  `Vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SerialNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Software` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Modules` int(11) NOT NULL,
  `Interfaces` int(11) NOT NULL,
  `assistance_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
DROP TABLE IF EXISTS `assistanceAnually`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `assistanceAnually`  AS  select `assistance_regime`.`assistance_id` AS `id`,`assistance_regime`.`name` AS `name`,sum((((`routerji`.`stevilo` + `pregrade`.`stevilo`) + `stikala`.`stevilo`) + `tocke`.`stevilo`)) AS `numOfDevices`,`assistance_regime`.`price` AS `pricePerDevice`,sum((`routerji`.`stevilo` * `assistance_regime`.`price`)) AS `routersYearlyPrice`,sum((`stikala`.`stevilo` * `assistance_regime`.`price`)) AS `switchesYearlyPrice`,sum((`pregrade`.`stevilo` * `assistance_regime`.`price`)) AS `firewallsYearlyPrice`,sum((`tocke`.`stevilo` * `assistance_regime`.`price`)) AS `apsYearlyPrice`,(((sum((`routerji`.`stevilo` * `assistance_regime`.`price`)) + sum((`stikala`.`stevilo` * `assistance_regime`.`price`))) + sum((`pregrade`.`stevilo` * `assistance_regime`.`price`))) + sum((`tocke`.`stevilo` * `assistance_regime`.`price`))) AS `total` from ((((`assistance_regime` join (select `routers`.`assistance_id` AS `assistance_id`,count(`routers`.`assistance_id`) AS `stevilo` from `routers` group by `routers`.`assistance_id`) `routerji` on((`assistance_regime`.`assistance_id` = `routerji`.`assistance_id`))) join (select `switches`.`assistance_id` AS `assistance_id`,count(`switches`.`assistance_id`) AS `stevilo` from `switches` group by `switches`.`assistance_id`) `stikala` on((`assistance_regime`.`assistance_id` = `stikala`.`assistance_id`))) join (select `firewalls`.`assistance_id` AS `assistance_id`,count(`firewalls`.`assistance_id`) AS `stevilo` from `firewalls` group by `firewalls`.`assistance_id`) `pregrade` on((`assistance_regime`.`assistance_id` = `pregrade`.`assistance_id`))) join (select `accesspoints`.`assistance_id` AS `assistance_id`,count(`accesspoints`.`assistance_id`) AS `stevilo` from `accesspoints` group by `accesspoints`.`assistance_id`) `tocke` on((`assistance_regime`.`assistance_id` = `tocke`.`assistance_id`))) group by `assistance_regime`.`assistance_id` ;
DROP TABLE IF EXISTS `assistanceAnually1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `assistanceAnually1`  AS  select `assistance_regime`.`assistance_id` AS `id`,`assistance_regime`.`name` AS `name`,sum((((`routerji`.`stevilo` + `pregrade`.`stevilo`) + `stikala`.`stevilo`) + `tocke`.`stevilo`)) AS `numOfDevices`,`assistance_regime`.`price` AS `pricePerDevice`,sum((`routerji`.`stevilo` * `assistance_regime`.`price`)) AS `routersYearlyPrice`,sum((`stikala`.`stevilo` * `assistance_regime`.`price`)) AS `switchesYearlyPrice`,sum((`pregrade`.`stevilo` * `assistance_regime`.`price`)) AS `firewallsYearlyPrice`,sum((`tocke`.`stevilo` * `assistance_regime`.`price`)) AS `apsYearlyPrice`,sum((`serverji`.`stevilo` * `assistance_regime`.`price`)) AS `serversYearlyPrice`,sum((`racunalniki`.`stevilo` * `assistance_regime`.`price`)) AS `computersYearlyPrice`,sum((`telefoni`.`stevilo` * `assistance_regime`.`price`)) AS `phonesYearlyPrice`,sum((`printerji`.`stevilo` * `assistance_regime`.`price`)) AS `printersYearlyPrice`,(((((((sum((`routerji`.`stevilo` * `assistance_regime`.`price`)) + sum((`stikala`.`stevilo` * `assistance_regime`.`price`))) + sum((`pregrade`.`stevilo` * `assistance_regime`.`price`))) + sum((`tocke`.`stevilo` * `assistance_regime`.`price`))) + sum((`serverji`.`stevilo` * `assistance_regime`.`price`))) + sum((`racunalniki`.`stevilo` * `assistance_regime`.`price`))) + sum((`telefoni`.`stevilo` * `assistance_regime`.`price`))) + sum((`printerji`.`stevilo` * `assistance_regime`.`price`))) AS `total` from ((((((((`assistance_regime` join (select `routers`.`assistance_id` AS `assistance_id`,count(`routers`.`assistance_id`) AS `stevilo` from `routers` group by `routers`.`assistance_id`) `routerji` on((`assistance_regime`.`assistance_id` = `routerji`.`assistance_id`))) join (select `switches`.`assistance_id` AS `assistance_id`,count(`switches`.`assistance_id`) AS `stevilo` from `switches` group by `switches`.`assistance_id`) `stikala` on((`assistance_regime`.`assistance_id` = `stikala`.`assistance_id`))) join (select `firewalls`.`assistance_id` AS `assistance_id`,count(`firewalls`.`assistance_id`) AS `stevilo` from `firewalls` group by `firewalls`.`assistance_id`) `pregrade` on((`assistance_regime`.`assistance_id` = `pregrade`.`assistance_id`))) join (select `accesspoints`.`assistance_id` AS `assistance_id`,count(`accesspoints`.`assistance_id`) AS `stevilo` from `accesspoints` group by `accesspoints`.`assistance_id`) `tocke` on((`assistance_regime`.`assistance_id` = `tocke`.`assistance_id`))) join (select `servers`.`assistance_id` AS `assistance_id`,count(`servers`.`assistance_id`) AS `stevilo` from `servers` group by `servers`.`assistance_id`) `serverji` on((`assistance_regime`.`assistance_id` = `serverji`.`assistance_id`))) join (select `computers`.`assistance_id` AS `assistance_id`,count(`computers`.`assistance_id`) AS `stevilo` from `computers` group by `computers`.`assistance_id`) `racunalniki` on((`assistance_regime`.`assistance_id` = `racunalniki`.`assistance_id`))) join (select `phones`.`assistance_id` AS `assistance_id`,count(`phones`.`assistance_id`) AS `stevilo` from `phones` group by `phones`.`assistance_id`) `telefoni` on((`assistance_regime`.`assistance_id` = `telefoni`.`assistance_id`))) join (select `printers`.`assistance_id` AS `assistance_id`,count(`printers`.`assistance_id`) AS `stevilo` from `printers` group by `printers`.`assistance_id`) `printerji` on((`assistance_regime`.`assistance_id` = `printerji`.`assistance_id`))) group by `assistance_regime`.`assistance_id` ;


ALTER TABLE `accesspoints`
  ADD PRIMARY KEY (`ap_id`),
  ADD KEY `accesspoints_assistance_id_foreign` (`assistance_id`);

ALTER TABLE `assistance_regime`
  ADD PRIMARY KEY (`assistance_id`);

ALTER TABLE `computers`
  ADD PRIMARY KEY (`computer_id`),
  ADD KEY `computers_assistance_id_foreign` (`assistance_id`);

ALTER TABLE `firewalls`
  ADD PRIMARY KEY (`firewall_id`),
  ADD KEY `firewalls_assistance_id_foreign` (`assistance_id`);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

ALTER TABLE `phones`
  ADD PRIMARY KEY (`phone_id`),
  ADD KEY `phones_assistance_id_foreign` (`assistance_id`);

ALTER TABLE `printers`
  ADD PRIMARY KEY (`printer_id`),
  ADD KEY `printers_assistance_id_foreign` (`assistance_id`);

ALTER TABLE `routers`
  ADD PRIMARY KEY (`router_id`),
  ADD KEY `routers_assistance_id_foreign` (`assistance_id`);

ALTER TABLE `servers`
  ADD PRIMARY KEY (`server_id`),
  ADD KEY `servers_assistance_id_foreign` (`assistance_id`);

ALTER TABLE `switches`
  ADD PRIMARY KEY (`switch_id`),
  ADD KEY `switches_assistance_id_foreign` (`assistance_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);


ALTER TABLE `accesspoints`
  MODIFY `ap_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `assistance_regime`
  MODIFY `assistance_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `computers`
  MODIFY `computer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `firewalls`
  MODIFY `firewall_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `phones`
  MODIFY `phone_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `printers`
  MODIFY `printer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `routers`
  MODIFY `router_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `servers`
  MODIFY `server_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `switches`
  MODIFY `switch_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `accesspoints`
  ADD CONSTRAINT `accesspoints_assistance_id_foreign` FOREIGN KEY (`assistance_id`) REFERENCES `assistance_regime` (`assistance_id`);

ALTER TABLE `computers`
  ADD CONSTRAINT `computers_assistance_id_foreign` FOREIGN KEY (`assistance_id`) REFERENCES `assistance_regime` (`assistance_id`);

ALTER TABLE `firewalls`
  ADD CONSTRAINT `firewalls_assistance_id_foreign` FOREIGN KEY (`assistance_id`) REFERENCES `assistance_regime` (`assistance_id`);

ALTER TABLE `phones`
  ADD CONSTRAINT `phones_assistance_id_foreign` FOREIGN KEY (`assistance_id`) REFERENCES `assistance_regime` (`assistance_id`);

ALTER TABLE `printers`
  ADD CONSTRAINT `printers_assistance_id_foreign` FOREIGN KEY (`assistance_id`) REFERENCES `assistance_regime` (`assistance_id`);

ALTER TABLE `routers`
  ADD CONSTRAINT `routers_assistance_id_foreign` FOREIGN KEY (`assistance_id`) REFERENCES `assistance_regime` (`assistance_id`);

ALTER TABLE `servers`
  ADD CONSTRAINT `servers_assistance_id_foreign` FOREIGN KEY (`assistance_id`) REFERENCES `assistance_regime` (`assistance_id`);

ALTER TABLE `switches`
  ADD CONSTRAINT `switches_assistance_id_foreign` FOREIGN KEY (`assistance_id`) REFERENCES `assistance_regime` (`assistance_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
