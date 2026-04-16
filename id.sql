-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/04/2026 às 01:00
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_final`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `id`
--

CREATE TABLE `id` (
  `Nome` varchar(200) DEFAULT NULL,
  `Documento` int(14) DEFAULT NULL,
  `E-mail` varchar(255) DEFAULT NULL,
  `Telefone` int(11) DEFAULT NULL,
  `CEP` char(8) DEFAULT NULL,
  `Estado` text DEFAULT NULL,
  `Cidade` varchar(100) DEFAULT NULL,
  `Bairro` varchar(100) DEFAULT NULL,
  `Logradouro` varchar(150) DEFAULT NULL,
  `Número` varchar(10) NOT NULL,
  `Complemento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `id`
--

INSERT INTO `id` (`Nome`, `Documento`, `E-mail`, `Telefone`, `CEP`, `Estado`, `Cidade`, `Bairro`, `Logradouro`, `Número`, `Complemento`) VALUES
('Richard Sabino da Silva', 0, NULL, 2147483647, '8000000', 'SC', 'Joinville', 'Pétropolis', 'Rua', '', 'AP 103'),
('Richard Sabino da Silva', 0, NULL, 2147483647, '8000000', 'SC', 'Joinville', 'Pétropolis', 'Rua', '', 'AP 103');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
