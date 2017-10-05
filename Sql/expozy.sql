-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time:  5 окт 2017 в 12:17
-- Версия на сървъра: 5.5.54-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opensour_db`
--

-- --------------------------------------------------------

--
-- Структура на таблица `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `mail` varchar(150) COLLATE cp1251_bulgarian_ci NOT NULL,
  `password` varchar(150) COLLATE cp1251_bulgarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_bulgarian_ci;

--
-- Схема на данните от таблица `admins`
--

INSERT INTO `admins` (`id`, `mail`, `password`) VALUES
(1, 'demo@expozy.com', 'b4ec349ecf56773ae228b079a698ee28');

-- --------------------------------------------------------

--
-- Структура на таблица `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title_bg` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `title_de` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_bulgarian_ci;

--
-- Схема на данните от таблица `menu`
--

INSERT INTO `menu` (`id`, `title_bg`, `title_en`, `title_de`, `link`, `order`, `parent_id`) VALUES
(1, 'Начало', 'Home', 'Haus', '/', 1, 0),
(2, 'Примерна страница', 'Simple page', 'Simple page', '/9-primerna-stranitsa.html', 2, 0),
(3, 'Новини', 'News', 'News', '/news/', 3, 0),
(4, 'Контакти', 'Contacts', 'Kontakt', '/kontakti.html', 4, 0);

-- --------------------------------------------------------

--
-- Структура на таблица `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_bg` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title_en` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title_de` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `body_bg` text CHARACTER SET utf8 NOT NULL,
  `body_en` text CHARACTER SET utf8 NOT NULL,
  `body_de` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `slug` varchar(255) COLLATE cp1251_bulgarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251 COLLATE=cp1251_bulgarian_ci;

--
-- Схема на данните от таблица `news`
--

INSERT INTO `news` (`id`, `title_bg`, `title_en`, `title_de`, `body_bg`, `body_en`, `body_de`, `date`, `slug`) VALUES
(1, 'Примерна новина', 'Example news', 'Example new', '&lt;p style=&quot;margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);&quot;&gt;Противно на всеобщото вярване, Lorem Ipsum не е просто случаен текст. Неговите корени са в класическата Латинска литература от 45г.пр.Хр., което прави преди повече от 2000 години. Richard McClintock, професор по Латински от колежа Hampden-Sydney College във Вирджиния, изучавайки една от най-неясните латински думи &amp;quot;consectetur&amp;quot; в един от пасажите на Lorem Ipsum, и търсейки цитати на думата в класическата литература, открива точния източник. Lorem Ipsum е намерен в секции 1.10.32 и 1.10.33 от &amp;quot;de Finibus Bonorum et Malorum&amp;quot;(Крайностите на Доброто и Злото) от Цицерон, написан през 45г.пр.Хр. Тази книга е трактат по теория на етиката, много популярна през Ренесанса. Първият ред на Lorem Ipsum идва от ред, намерен в секция 1.10.32.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;margin: 0px 0px 15px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);&quot;&gt;Стандартният отрязък от Lorem Ipsum, използван от 1500 г. насам, е поместен по-долу за тези, които се интересуват. Секции 1.10.32 и 1.10.33 от &amp;quot;de Finibus Bonorum et Malorum&amp;quot; на Цицерон също са поместени в оригиналния им формат, заедно с превода им на английски език, направен от H. Rackham през 1914г.&lt;/p&gt;\r\n', '&lt;p&gt;Lorem ipsum dolor sit amet, vel nostro oblique at, cu eos probatus delicatissimi. Mel facilisis adversarium ne. An harum noster putant pro. Putant dolores duo ex, ex aeque forensibus consectetuer vix, habemus comprehensam vix at. Ancillae erroribus necessitatibus id eam.&lt;/p&gt;\r\n\r\n&lt;p&gt;Has ludus munere putent cu. No invenire delicata vel, duo gubergren forensibus ex, sale audiam complectitur ne ius. Ad eius tincidunt quo. Ex verear labitur vis, eos te putent accumsan placerat, has primis doming reprehendunt in. Labitur vivendum usu et, has no wisi saepe voluptaria, diam nominati ne quo.&lt;/p&gt;\r\n\r\n&lt;p&gt;Id eum putent fastidii. Euismod necessitatibus has id, odio omittam ne mea. Prompta percipit cu sea, usu natum adipiscing repudiandae ut. Prima appetere reformidans ne nec, ea liber ornatus menandri quo, congue meliore nominavi mei at. Nam mutat debitis nonumes ad. Ei vim modus eligendi, ea cum nonumy electram voluptaria. Nam at mucius omnesque, autem option quaeque no sit, ne prodesset ullamcorper nam.&lt;/p&gt;\r\n\r\n&lt;p&gt;Ex ubique essent disputando usu. Ad usu facilisis repudiandae, viderer diceret molestiae an qui, vix vivendum adolescens ei. Cum zril tacimates an, wisi putant ut vis. Te quidam elaboraret reprimique pri, quodsi docendi persecuti te vis, dicam iudico no vim.&lt;/p&gt;\r\n\r\n&lt;p&gt;Affert aperiam praesent at quo, usu natum iracundia et, menandri intellegat eloquentiam quo ex. Usu ut aeterno nominavi, vix sanctus mediocrem ne. Congue tempor in eam, eripuit explicari ullamcorper sit ea. Simul possim gubergren et has. Sed labores definiebas assueverit ex. Mei assum appetere antiopam an, pri et vero dicam.&lt;/p&gt;\r\n', '&lt;p style=&quot;letter-spacing: normal; margin-bottom: 1.85714em;&quot;&gt;Lorem ipsum dolor sit amet, vel nostro oblique at, cu eos probatus delicatissimi. Mel facilisis adversarium ne. An harum noster putant pro. Putant dolores duo ex, ex aeque forensibus consectetuer vix, habemus comprehensam vix at. Ancillae erroribus necessitatibus id eam.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;letter-spacing: normal; margin-bottom: 1.85714em;&quot;&gt;Has ludus munere putent cu. No invenire delicata vel, duo gubergren forensibus ex, sale audiam complectitur ne ius. Ad eius tincidunt quo. Ex verear labitur vis, eos te putent accumsan placerat, has primis doming reprehendunt in. Labitur vivendum usu et, has no wisi saepe voluptaria, diam nominati ne quo.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;letter-spacing: normal; margin-bottom: 1.85714em;&quot;&gt;Id eum putent fastidii. Euismod necessitatibus has id, odio omittam ne mea. Prompta percipit cu sea, usu natum adipiscing repudiandae ut. Prima appetere reformidans ne nec, ea liber ornatus menandri quo, congue meliore nominavi mei at. Nam mutat debitis nonumes ad. Ei vim modus eligendi, ea cum nonumy electram voluptaria. Nam at mucius omnesque, autem option quaeque no sit, ne prodesset ullamcorper nam.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;letter-spacing: normal; margin-bottom: 1.85714em;&quot;&gt;Ex ubique essent disputando usu. Ad usu facilisis repudiandae, viderer diceret molestiae an qui, vix vivendum adolescens ei. Cum zril tacimates an, wisi putant ut vis. Te quidam elaboraret reprimique pri, quodsi docendi persecuti te vis, dicam iudico no vim.&lt;/p&gt;\r\n\r\n&lt;p style=&quot;letter-spacing: normal; margin-bottom: 1.85714em;&quot;&gt;Affert aperiam praesent at quo, usu natum iracundia et, menandri intellegat eloquentiam quo ex. Usu ut aeterno nominavi, vix sanctus mediocrem ne. Congue tempor in eam, eripuit explicari ullamcorper sit ea. Simul possim gubergren et has. Sed labores definiebas assueverit ex. Mei assum appetere antiopam an, pri et vero dicam.&lt;/p&gt;\r\n', '2017-10-04 02:08:20', 'test'),
(2, 'Новина', 'News', 'News', '&lt;p&gt;Тестова новина&lt;/p&gt;\r\n', '&lt;p&gt;Test news&lt;/p&gt;\r\n', '&lt;p&gt;Test news DE.&lt;/p&gt;\r\n', '2017-10-02 13:07:10', 'novina');

-- --------------------------------------------------------

--
-- Структура на таблица `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title_bg` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `title_de` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `body_bg` text NOT NULL,
  `body_en` text NOT NULL,
  `body_de` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(120) NOT NULL,
  `tags` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `pages`
--

INSERT INTO `pages` (`id`, `title_bg`, `title_en`, `title_de`, `body_bg`, `body_en`, `body_de`, `slug`, `tags`, `description`) VALUES
(1, 'Начало', 'Home', 'Home', '&lt;div class=&quot;iso&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img alt=&quot;Стийлимпекс ООД е сертифицирана по ISO 9001 с обхват Производство и търговия със стоманени продукти&quot; src=&quot;/template/images/iso.jpg&quot; style=&quot;margin-bottom:10px&quot; title=&quot;Стийлимпекс ООД е сертифицирана по ISO 9001 с обхват Производство и търговия със стоманени продукти&quot; /&gt;&lt;/a&gt;\r\n&lt;p&gt;Стийлимпекс ООД е сертифицирана по ISO 9001 с обхват Производство и търговия със стоманени продукти&lt;/p&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;p&gt;Стийлимпекс ООД е сред най-бързо развиващите се фирми в България в сферите на Търговия с метали, производство и обработка на стоманени електрозаварени тръби както и на други метални изделия. Фирмата има репутацията на почтен и надежден партньор, създадена чрез постоянство в дейността и силна подкрепа за клиенти и доставчици през годините. Сред нашите основни клиенти в България, Румъния, Унгария, Чехия, Германия и Белгия са водещи фирми:&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;призводители на офис мебели, училищно обзавеждане, стоки за бита&lt;/li&gt;\r\n	&lt;li&gt;производители на части за автомобилната промишленост&lt;/li&gt;\r\n	&lt;li&gt;производители на легла и подматрачни рамки&lt;/li&gt;\r\n	&lt;li&gt;прозиводители на скелета за строителството&lt;/li&gt;\r\n	&lt;li&gt;търговци на метали в България и ЕС&lt;/li&gt;\r\n&lt;/ul&gt;\r\n', '&lt;p&gt;Under contstruction.&lt;/p&gt;\r\n', '&lt;p&gt;Under contstruction.&lt;/p&gt;\r\n', 'nachalo', '', ''),
(9, 'Примерна страница', 'Example page', 'Example page', '&lt;p&gt;Това е примерна страница&lt;/p&gt;\r\n', '&lt;p&gt;This is a example page.&lt;/p&gt;\r\n', '&lt;p&gt;&lt;span style=&quot;color: rgb(123, 123, 123); font-family: &amp;quot;Open Sans&amp;quot;;&quot;&gt;This is a example page.&lt;/span&gt;&lt;/p&gt;\r\n', 'primerna-stranitsa', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
