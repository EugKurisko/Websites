-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 05 2021 г., 22:02
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `messages`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categ`
--

CREATE TABLE `categ` (
  `id_cat` int(11) UNSIGNED NOT NULL,
  `cat_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `categ`
--

INSERT INTO `categ` (`id_cat`, `cat_name`) VALUES
(1, 'phones'),
(2, 'laptop'),
(3, 'Mobile'),
(5, 'Computer'),
(6, 'Super Computer'),
(7, 'iPhone'),
(8, 'Smartphone');

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `dt` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` smallint(6) NOT NULL DEFAULT 0,
  `id_cat` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `name`, `text`, `dt`, `status`, `id_cat`) VALUES
(2, 'eugen', 'srv', '2021-02-15 10:07:54', 0, 1),
(3, 'sgb', 'srg', '2021-02-15 10:15:59', 0, 2),
(7, 'th', 'rg', '2021-02-15 12:06:25', 0, 1),
(9, 'srv', 'sv', '2021-02-15 12:07:01', 0, 1),
(12, 'eg', 'ge', '2021-02-15 12:58:21', 0, 2),
(13, 'gb', 'dsbr', '2021-02-15 13:13:42', 0, 1),
(14, 'ghk', 'mk;', '2021-02-16 08:56:00', 0, 2),
(15, 'rgv', 'ed', '2021-02-17 10:33:08', 0, 2),
(16, 'srv', 'dbtdj', '2021-02-17 11:17:15', 0, 1),
(38, 'dthdthbdth', 'dhdrdrhrsd', '2021-03-03 11:48:11', 0, 1),
(39, 'srgrsghsr', 'srghsrgs', '2021-03-03 11:49:10', 0, 1),
(40, 'dhbdhb', 'dhrtdrth', '2021-03-03 11:50:02', 0, 1),
(41, '111111', '1111111111', '2021-03-03 11:51:20', 0, 1),
(42, '2222222222', '222222222', '2021-03-03 11:52:45', 0, 1),
(43, '333333333333', '3333333333', '2021-03-03 11:53:08', 0, 1),
(44, 'srbgv', 'srggsrg', '2021-03-03 11:53:27', 0, 1),
(45, 'srbgv', 'srggsrg', '2021-03-03 11:53:52', 0, 1),
(46, 'srbgv', 'srggsrg', '2021-03-03 11:54:05', 0, 1),
(47, 'srbgv', 'srggsrgf', '2021-03-03 11:54:14', 0, 1),
(49, 'srgrg', 'wwfefw', '2021-03-03 12:04:04', 0, 1),
(52, 'twhewthj', 'stdtsjnej', '2021-03-04 13:50:14', 0, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE `sessions` (
  `id_session` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `token` varchar(128) NOT NULL,
  `dt_add` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id_session`, `id_user`, `token`, `dt_add`) VALUES
(1, 1, '60f0cf2aa8a31c2a26cf75c0c8d1802d3440b4acbacfa858e131fb965bf968bcba71bfdd62c0467e3b0de806b8e4745b71df181ea40e74d9394dc836c4b5b73c', '2021-03-05'),
(2, 1, '6ae73438865a648a283e0df7420238de250943c4f021398f2f55320c72b9596b4c7e78243cdc7ccda32b363381f7c1e30c55692cd634277fe59805ffad25fba0', '2021-03-05'),
(3, 1, '88756b51abf6d4a65c85b29793e9c426421ae64d574174e621e0538c71b6d75c4b466e0f58048d1090ebc70302154255681513de353100c15832a3e08ce8fc86', '2021-03-05'),
(4, 1, '2f9a76331aa53d4aed8fbc1892e5cbe0f10f3db93c42992a04c77903d1a3f838681e8615d1290b592a5ba96069d2537e79dd6fd84db48cff9c8d5e0b4fb6832e', '2021-03-05'),
(5, 1, '3d804dfd155e515ff54370ce76e556ccba147f2739d93605665bee21cd3c53b3a371c44d1bfccde8b543a4b7a012742ed12866b6c636a291e16b4d73595bea6f', '2021-03-05'),
(6, 1, '063451ffa515069fbbe8aced038859f1a2c4f8441ad60f91e0523c64b3866cda57d1a36fed6b27b102848ed614e0253d944844bc1cddcfc0d291f31b9a4ffeec', '2021-03-05'),
(7, 1, '415b51b73046cbde756c442e7bdd6b05fc4adda05a33ca4f14cd34bc812d2202cf4e87903e852fd31a5c5eac353125e78c4eb1cf76f52a0aa44a934b23d73708', '2021-03-05'),
(8, 1, '1a529f459cd438b6425b0d1a7cfb0067a59ed3449f0ed3155ea25b5fc017f28ce362269ab4b9fbe2b4af75825abac30d8ca60c577cad5ed6689f8d961c1d9cd5', '2021-03-05'),
(9, 1, 'a91c1c2fabd53739f3a7fb4f0372dfb181eca0bb2d1913cb80e6cee1a86896877fab93947086b1a7cb0ccff2e91e950b3281d0980f675d525afba1291f0b16bc', '2021-03-05'),
(10, 1, 'be19518b3b50148b556990dce8d7aead09b15920f41f2964280efc2a74f148995fcfa42e8cac0a8d734e378fcd59e6ffa56cb681494eb0f9d975d816cb751758', '2021-03-05'),
(11, 1, '4651b51bdd62448155841ec44a58bc16be7f6fafc9af10be3be385a2538a743ce147ac54d37d75d64592c0af70b91d450da6bf8318ee30663cf7943d423d9d22', '2021-03-05'),
(12, 2, '8e10f3de54db3b3d25213f3da59cda487a818c63297530675330b575fe3e4447281407bfa4cd986fc3b623d96a2011182f8a62837fb08dce5f34e575af2253fe', '2021-03-05'),
(13, 2, '163092e534bd113ebe05560a3d10de4739b80826b57faaad4b6665110cc2a728c0d75b4a69dff2f3270c02f7fb1f4d929e1b428b3b32a8a22b428a6f8026e659', '2021-03-05'),
(14, 1, '9f8f130a3a1d153c137708507db30f11e00657b6264d83643a70ae162a798cc3c425ed920f63fd2d7b0b9a35ad54fadd87822b974f420cf9faf186a5a63b2921', '2021-03-05');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `login` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `email`, `name`) VALUES
(1, 'admin', '$2y$10$NQMU2mKhLrSjqtKo7TvmtO9dfbXqoDrQigNjKCtM3DflTQfF/pZAO', '1@1', 'admin'),
(2, 'manager', '$2y$10$NQMU2mKhLrSjqtKo7TvmtO9dfbXqoDrQigNjKCtM3DflTQfF/pZAO', '2@2', 'manager');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categ`
--
ALTER TABLE `categ`
  ADD PRIMARY KEY (`id_cat`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Индексы таблицы `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categ`
--
ALTER TABLE `categ`
  MODIFY `id_cat` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT для таблицы `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id_session` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categ` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
