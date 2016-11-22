-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: 179.188.16.31
-- Generation Time: 22-Nov-2016 às 10:12
-- Versão do servidor: 5.6.30-76.3-log
-- PHP Version: 5.6.27-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adrielsiteblog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ap_tarefa`
--

CREATE TABLE `ap_tarefa` (
  `_id` int(11) NOT NULL,
  `st_titulo` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `st_descricao` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `ap_tarefa`
--

INSERT INTO `ap_tarefa` (`st_titulo`, `st_descricao`) VALUES
('Nome do titulo', 'descricao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ap_tarefa`
--
ALTER TABLE `ap_tarefa`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ap_tarefa`
--
ALTER TABLE `ap_tarefa`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;