-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1:3306
-- Vytvořeno: Ned 31. pro 2023, 17:26
-- Verze serveru: 10.5.19-MariaDB-cll-lve
-- Verze PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `u305329384_WupaA`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `api`
--

CREATE TABLE `api` (
  `id` bigint(20) NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `url` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  `username` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `auth_type` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `headers` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `api_version`
--

CREATE TABLE `api_version` (
  `id` bigint(20) NOT NULL,
  `code` varchar(48) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `api_id` bigint(20) NOT NULL,
  `created_at` date DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `supported_to` date DEFAULT NULL,
  `url` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `doc`
--

CREATE TABLE `doc` (
  `id` bigint(20) NOT NULL,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `url` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `doc_version`
--

CREATE TABLE `doc_version` (
  `id` bigint(20) NOT NULL,
  `document_id` bigint(20) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `supported_to` date DEFAULT NULL,
  `valid_from` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `exporter`
--

CREATE TABLE `exporter` (
  `id` bigint(20) NOT NULL,
  `classname` varchar(128) NOT NULL,
  `from_api_version_id` bigint(20) NOT NULL,
  `to_doc_version_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `importer`
--

CREATE TABLE `importer` (
  `id` bigint(20) NOT NULL,
  `classname` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `from_doc_version_id` bigint(20) NOT NULL,
  `to_api_version_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(16) NOT NULL DEFAULT 'guest'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Vypisuji data pro tabulku `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'test', '$2y$10$aC4WQ.tb7wBvBGG94TZp/up0f6JCsY/eT4q.Qq8fQAaq9xJSfrIMW', 'admin');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `api_version`
--
ALTER TABLE `api_version`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_version_api_idx` (`api_id`);

--
-- Indexy pro tabulku `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `doc_version`
--
ALTER TABLE `doc_version`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_document_version_document_idx` (`document_id`);

--
-- Indexy pro tabulku `exporter`
--
ALTER TABLE `exporter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_exporter_api_idx` (`from_api_version_id`),
  ADD KEY `fk_exporter_doc_idx` (`to_doc_version_id`);

--
-- Indexy pro tabulku `importer`
--
ALTER TABLE `importer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_importer_doc_idx` (`from_doc_version_id`),
  ADD KEY `fk_importer_api_idx` (`to_api_version_id`);

--
-- Indexy pro tabulku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `api`
--
ALTER TABLE `api`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `api_version`
--
ALTER TABLE `api_version`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `doc`
--
ALTER TABLE `doc`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `doc_version`
--
ALTER TABLE `doc_version`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `exporter`
--
ALTER TABLE `exporter`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `importer`
--
ALTER TABLE `importer`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `api_version`
--
ALTER TABLE `api_version`
  ADD CONSTRAINT `fk_version_api` FOREIGN KEY (`api_id`) REFERENCES `api` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omezení pro tabulku `doc_version`
--
ALTER TABLE `doc_version`
  ADD CONSTRAINT `fk_document_version_document` FOREIGN KEY (`document_id`) REFERENCES `doc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omezení pro tabulku `exporter`
--
ALTER TABLE `exporter`
  ADD CONSTRAINT `fk_exporter_api` FOREIGN KEY (`from_api_version_id`) REFERENCES `api_version` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_exporter_doc` FOREIGN KEY (`to_doc_version_id`) REFERENCES `doc_version` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Omezení pro tabulku `importer`
--
ALTER TABLE `importer`
  ADD CONSTRAINT `fk_importer_api` FOREIGN KEY (`to_api_version_id`) REFERENCES `api_version` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_importer_doc` FOREIGN KEY (`from_doc_version_id`) REFERENCES `doc_version` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
