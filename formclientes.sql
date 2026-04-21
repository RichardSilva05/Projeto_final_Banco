-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/04/2026 às 22:27
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
-- Estrutura para tabela `formclientes`
--

CREATE TABLE `formclientes` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(200) DEFAULT NULL,
  `Documento` int(14) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Telefone` int(11) DEFAULT NULL,
  `CEP` char(8) DEFAULT NULL,
  `Estado` text DEFAULT NULL,
  `Cidade` varchar(100) DEFAULT NULL,
  `Bairro` varchar(100) DEFAULT NULL,
  `Logradouro` varchar(150) DEFAULT NULL,
  `Numero` varchar(10) NOT NULL,
  `Complemento` text NOT NULL,
  `Data de Registro` datetime DEFAULT current_timestamp(),
  `Status` enum('Pendente','Aprovado','Cancelado') NOT NULL DEFAULT 'Pendente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
