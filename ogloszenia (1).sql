-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 09:42 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogloszenia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement`
--

CREATE TABLE `announcement` (
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `position_name` varchar(75) NOT NULL,
  `position_level` enum('Praktykant / Stażysta','Asystent','Młodszy specjalista (Junior)','Specjalista (Mid/Regular)','Starszy Specjalista (Senior)','Ekspert','Kierownik / koordynator','Menedżer','Dyrektor','Prezes','Pracownik fizyczny') NOT NULL,
  `contract_type` enum('Umowa o pracę','Umowa o dzieło','Umowa zlecenie','Kontrakt B2B','Umowa na zastępstwo','Umowa agencyjna','Umowa o pracę tymczasową','Umowa o staż / praktyki') NOT NULL,
  `working_time` enum('Część etatu','Dodatkowa / tymczasowa','Pełny etat') NOT NULL,
  `work_type` enum('Praca stacjonarna','Praca hybrydowa','Praca zdalna','Praca mobilna') NOT NULL,
  `working_hours` varchar(11) NOT NULL,
  `expire_date` date NOT NULL,
  `duties` text NOT NULL,
  `requirements` text NOT NULL,
  `benefits` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sallary` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announcement_id`, `company_id`, `category_id`, `position_name`, `position_level`, `contract_type`, `working_time`, `work_type`, `working_hours`, `expire_date`, `duties`, `requirements`, `benefits`, `title`, `sallary`) VALUES
(1, 0, 1, '[value-5]', 'Specjalista (Mid/Regular)', '', 'Dodatkowa / tymczasowa', 'Praca hybrydowa', '[value-10]', '2023-11-15', '[value-12]', '[value-13]', '[value-14]', 'Szukany pracownik dla sklepu', 0.00),
(2, 1001, 2001, 'Programista Java', 'Starszy Specjalista (Senior)', 'Umowa o pracę', 'Pełny etat', 'Praca zdalna', '40 godzin t', '2023-12-31', 'Rozwój i utrzymanie aplikacji Java', 'Doświadczenie w programowaniu w Javie, znajomość Spring', 'Elastyczny czas pracy, karta multisport', 'Starszy Programista Java - Praca zdalna', 0.00),
(4, 1003, 2003, 'Asystent Biura', 'Asystent', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '20 godzin t', '2023-12-31', 'Obsługa biura, pomoc w organizacji spotkań', 'Dyspozycyjność w godzinach porannych', 'Elastyczne godziny pracy', 'Asystent Biura - Część etatu', 0.00),
(6, 1005, 2005, 'Stażysta ds. HR', 'Praktykant / Stażysta', 'Umowa o staż / praktyki', 'Pełny etat', 'Praca zdalna', '30 godzin t', '2023-12-31', 'Wsparcie w działach HR, uczestnictwo w projektach rekrutacyjnych', 'Studia na kierunku HR, komunikatywność', 'Mentorstwo, szkolenia', 'Stażysta ds. HR - Praca zdalna', 0.00),
(25, 1, 1, 'awd', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', 'awd', '2024-01-03', 'awd', 'awd', 'awd', 'awd', 13.00),
(26, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(27, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(28, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(29, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(30, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(31, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(32, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(33, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(34, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(35, 1, 1, '', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', '', '0000-00-00', '', '', '', '', 0.00),
(36, 1, 12, 'awdawd', 'Praktykant / Stażysta', 'Umowa o pracę', 'Dodatkowa / tymczasowa', 'Praca zdalna', 'awdaw', '2024-02-15', 'dawd', 'awdawd', 'dawdawd', 'awdawd', 123.00),
(37, 1, 6, 'aawdawd', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', 'wdawd', '2024-02-10', 'awda', 'awd', 'awd', 'awd', 123.00),
(38, 1, 5, 'QSqs', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', 'QSqs', '2024-02-10', 'qs', 'QS', 'qs', 'QS', 12.00),
(39, 1, 5, 'dawd', 'Specjalista (Mid/Regular)', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', 'awdawd', '2024-02-21', 'awd', 'awd', 'awda', 'awd', 123.00),
(40, 6, 2, 'qawdawda', 'Praktykant / Stażysta', 'Umowa o pracę', 'Część etatu', 'Praca stacjonarna', 'awdawd', '2024-02-22', 'awdawd', 'awdawd', 'awda', 'awd', 123.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_category`
--

CREATE TABLE `announcement_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_category`
--

INSERT INTO `announcement_category` (`category_id`, `name`) VALUES
(1, 'IT'),
(2, '[value-2]'),
(5, 'Informatyka'),
(6, 'Finanse'),
(7, 'Sprzedaż'),
(8, 'Marketing'),
(9, 'Zasoby Ludzkie'),
(10, 'Inżynieria'),
(11, 'Opieka zdrowotna'),
(12, 'Edukacja'),
(13, 'Sztuka i Design'),
(14, 'Transport i Logistyka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `announcement_working_days`
--

CREATE TABLE `announcement_working_days` (
  `working_days_id` int(10) UNSIGNED NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `monday` tinyint(1) NOT NULL,
  `tuesday` tinyint(1) NOT NULL,
  `wednesday` tinyint(1) NOT NULL,
  `thursday` tinyint(1) NOT NULL,
  `friday` tinyint(1) NOT NULL,
  `saturday` tinyint(1) NOT NULL,
  `sunday` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `announcement_working_days`
--

INSERT INTO `announcement_working_days` (`working_days_id`, `announcement_id`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`) VALUES
(1, 26, 1, 0, 0, 0, 0, 0, 0),
(2, 35, 1, 0, 1, 0, 0, 1, 0),
(3, 36, 1, 1, 0, 1, 0, 1, 0),
(4, 37, 0, 0, 0, 0, 1, 1, 1),
(5, 38, 0, 0, 1, 1, 1, 0, 0),
(6, 39, 0, 0, 1, 0, 1, 0, 0),
(7, 40, 0, 0, 0, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `company`
--

CREATE TABLE `company` (
  `company_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `adress` varchar(75) NOT NULL,
  `localization_link` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `name`, `adress`, `localization_link`, `description`) VALUES
(1, '[value-2]', '[value-3]', '[value-4]', '[value-5]'),
(2, 'awdawda', 'awda', 'wdawdaw', 'dawd'),
(6, 'awd', 'awdaw', 'dawd', 'dawda');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `favourites`
--

CREATE TABLE `favourites` (
  `favourite_id` int(10) UNSIGNED NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `login`, `password`, `role_id`) VALUES
(1, 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(2, 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(3, 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(4, 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(5, 'user', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1),
(6, 'b', 'e9d71f5ee7c92d6dc9e92ffdad17b8bd49418f98', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_application`
--

CREATE TABLE `user_application` (
  `application_id` int(10) UNSIGNED NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_application`
--

INSERT INTO `user_application` (`application_id`, `announcement_id`, `user_id`) VALUES
(12, 1, 1),
(13, 2, 1),
(14, 26, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_course`
--

CREATE TABLE `user_course` (
  `course_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(40) NOT NULL,
  `organizer` varchar(40) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_course`
--

INSERT INTO `user_course` (`course_id`, `user_id`, `name`, `organizer`, `period_start`, `period_end`) VALUES
(1, 1, '', '', '0000-00-00', '0000-00-00'),
(2, 1, 'awdaw', 'dawdawda', '2023-11-05', '2023-11-26'),
(3, 1, 'aa', 'nnnnnnnnnnnnnnn', '2023-11-05', '2023-11-26'),
(4, 1, 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaa', '2023-11-25', '2023-11-30');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_data`
--

CREATE TABLE `user_data` (
  `user_data_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `birth_date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone_number` decimal(9,0) NOT NULL,
  `pfp` text NOT NULL,
  `city` varchar(35) NOT NULL,
  `currnent_occupation` varchar(200) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_data_id`, `user_id`, `name`, `surname`, `birth_date`, `email`, `telephone_number`, `pfp`, `city`, `currnent_occupation`, `summary`) VALUES
(3, 1, 'awb', 'bbb', '2023-11-01', 'cc@cc.c', 111111111, 'images/upload/2023-12-12-12-21-17_oip.jpg', 'bbbb', 'bbbb', 'b');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_education`
--

CREATE TABLE `user_education` (
  `education_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `school_name` varchar(75) NOT NULL,
  `city` varchar(35) NOT NULL,
  `level` enum('podstawowe','zawodowe','srednie','licencjat','inzynier','magister','doktor','doktor habilitowany','profesor') NOT NULL,
  `specialization` varchar(75) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`education_id`, `user_id`, `school_name`, `city`, `level`, `specialization`, `period_start`, `period_end`) VALUES
(6, 1, 'xxx Ufo porno', 'ccccccccccccc', 'profesor', 'ccccccccccccccccccccccccc', '2023-11-19', '2023-12-03');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_experience`
--

CREATE TABLE `user_experience` (
  `experience_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `position` varchar(75) NOT NULL,
  `company` varchar(50) NOT NULL,
  `localization` varchar(35) NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `duties` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_experience`
--

INSERT INTO `user_experience` (`experience_id`, `user_id`, `position`, `company`, `localization`, `period_start`, `period_end`, `duties`) VALUES
(3, 1, 'awdawd', 'awdawd', 'awdawdaw', '2023-11-05', '2023-11-26', 'awdawdawd'),
(4, 0, '', '', '', '0000-00-00', '0000-00-00', ''),
(5, 1, 'awd', 'awdaw', 'dawda', '2023-11-05', '2023-11-04', 'wdawdawd'),
(6, 1, 'AxA', 'xAx', 'AxAx', '2023-10-31', '2023-11-30', 'AxAx'),
(7, 1, '', '', '', '2023-11-18', '2023-11-30', ''),
(8, 1, 'xxxxxxx', 'xxxxx', 'xxxxxxxxxxxxxxx', '2023-11-19', '2023-11-26', 'xxxxxxxxxxxxxxx'),
(9, 1, 'zzzzzzzzzzzzzzz', 'zzzzzzzzzz', 'zzzzzzzzzzz', '2023-11-19', '2023-11-26', 'zzzzzzzzzz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_language`
--

CREATE TABLE `user_language` (
  `language_id` int(11) NOT NULL,
  `language` varchar(35) NOT NULL,
  `level` enum('podstawowy',' şrednio-zaawansowany','zaawansowany','') NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_language`
--

INSERT INTO `user_language` (`language_id`, `language`, `level`, `user_id`) VALUES
(1, '', 'podstawowy', 1),
(2, 'angielskib', 'podstawowy', 1),
(3, 'awdawd', 'zaawansowany', 1),
(4, 'bbbbxxxxxbbbbbbbbbbbbb', 'podstawowy', 1),
(5, '', 'podstawowy', 1),
(6, 'angielski', 'podstawowy', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_link`
--

CREATE TABLE `user_link` (
  `link_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_link`
--

INSERT INTO `user_link` (`link_id`, `user_id`, `name`) VALUES
(1, 1, ''),
(2, 1, 'awdawd'),
(3, 1, ''),
(4, 1, 'github.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `name`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_saved`
--

CREATE TABLE `user_saved` (
  `saved_id` int(10) UNSIGNED NOT NULL,
  `announcement_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_skill`
--

CREATE TABLE `user_skill` (
  `skill_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` enum(' obsluga pakietu xxx','prawo jazdy kategorii xxx','operator maszyn CNC','licencja na helikopter') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user_skill`
--

INSERT INTO `user_skill` (`skill_id`, `user_id`, `name`) VALUES
(1, 1, ''),
(2, 1, ''),
(3, 1, 'prawo jazdy kategorii xxx'),
(4, 1, ''),
(5, 1, ''),
(6, 1, 'licencja na helikopter'),
(7, 1, 'licencja na helikopter'),
(8, 1, ''),
(9, 1, '');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announcement_id`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeksy dla tabeli `announcement_category`
--
ALTER TABLE `announcement_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeksy dla tabeli `announcement_working_days`
--
ALTER TABLE `announcement_working_days`
  ADD PRIMARY KEY (`working_days_id`),
  ADD KEY `announcement_id` (`announcement_id`);

--
-- Indeksy dla tabeli `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indeksy dla tabeli `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`favourite_id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeksy dla tabeli `user_application`
--
ALTER TABLE `user_application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_data_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_experience`
--
ALTER TABLE `user_experience`
  ADD PRIMARY KEY (`experience_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_language`
--
ALTER TABLE `user_language`
  ADD PRIMARY KEY (`language_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_link`
--
ALTER TABLE `user_link`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indeksy dla tabeli `user_saved`
--
ALTER TABLE `user_saved`
  ADD PRIMARY KEY (`saved_id`),
  ADD KEY `announcement_id` (`announcement_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `user_skill`
--
ALTER TABLE `user_skill`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announcement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `announcement_category`
--
ALTER TABLE `announcement_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `announcement_working_days`
--
ALTER TABLE `announcement_working_days`
  MODIFY `working_days_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `favourite_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_application`
--
ALTER TABLE `user_application`
  MODIFY `application_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_course`
--
ALTER TABLE `user_course`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_data_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `education_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_experience`
--
ALTER TABLE `user_experience`
  MODIFY `experience_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_language`
--
ALTER TABLE `user_language`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_link`
--
ALTER TABLE `user_link`
  MODIFY `link_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_saved`
--
ALTER TABLE `user_saved`
  MODIFY `saved_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_skill`
--
ALTER TABLE `user_skill`
  MODIFY `skill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_ibfk_1` FOREIGN KEY (`announcement_id`) REFERENCES `announcement` (`announcement_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favourites_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
