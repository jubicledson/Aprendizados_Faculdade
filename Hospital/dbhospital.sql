-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/11/2024 às 01:43
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
-- Banco de dados: `dbhospital`
--
CREATE DATABASE IF NOT EXISTS `dbhospital` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbhospital`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblusuario`
--

DROP TABLE IF EXISTS `tblusuario`;
CREATE TABLE `tblusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(250) NOT NULL,
  `senhaUsuario` varchar(250) NOT NULL,
  `tipoUsuario` varchar(250) NOT NULL,
  `crmUsuario` varchar(250) NOT NULL,
  `especialidadeUsuario` varchar(250) NOT NULL,
  `idLoginUsuario` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblusuario`
--

INSERT INTO `tblusuario` (`idUsuario`, `nomeUsuario`, `senhaUsuario`, `tipoUsuario`, `crmUsuario`, `especialidadeUsuario`, `idLoginUsuario`) VALUES
(43, '3q4556', 'c6d1c5f07d6cc46429bd51a64bf545d5', 'ENFERMEIRO', '72545sfgh2fgj', '5742agj', '00043'),
(44, '3q4556', 'c6d1c5f07d6cc46429bd51a64bf545d5', 'ENFERMEIRO', '72545sfgh2fgj', '5742agj', '00044'),
(45, '3q4556', 'c6d1c5f07d6cc46429bd51a64bf545d5', 'ENFERMEIRO', '72545sfgh2fgj', '5742agj', '00045'),
(46, '3q4556', 'c6d1c5f07d6cc46429bd51a64bf545d5', 'ENFERMEIRO', '72545sfgh2fgj', '5742agj', '00046'),
(47, 'Jumbertos de Figueiredo', '827ccb0eea8a706c4c34a16891f84e7b', 'MEDICO', '123456', 'Pediatria', '00047'),
(48, 'Jubicledson', '81dc9bdb52d04dc20036dbd8313ed055', 'MEDICO', '253114', 'Jubilcedsonpediatriamingulus', '00048'),
(49, 'eudeufino', '827ccb0eea8a706c4c34a16891f84e7b', 'ENFERMEIRO', '321465978', 'seim', '00049');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
