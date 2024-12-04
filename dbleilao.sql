-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2024 às 02:11
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
-- Banco de dados: `dbleilao`
--
CREATE DATABASE IF NOT EXISTS `dbleilao` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbleilao`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblitem`
--

DROP TABLE IF EXISTS `tblitem`;
CREATE TABLE `tblitem` (
  `idItem` int(11) NOT NULL,
  `nomeItem` varchar(150) NOT NULL,
  `imagemItem` varchar(250) NOT NULL,
  `minimoItem` varchar(50) NOT NULL,
  `estadoItem` varchar(20) NOT NULL,
  `vencedorItem` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblitem`
--

INSERT INTO `tblitem` (`idItem`, `nomeItem`, `imagemItem`, `minimoItem`, `estadoItem`, `vencedorItem`) VALUES
(1, 'Vilas', '0', '1550', '0', '0'),
(2, 'Vilas', 'download.jpeg', '1550', 'aberto', '-'),
(3, 'Vilas', 'download.jpeg', '1550', 'aberto', '-'),
(4, 'Vilas', 'download.jpeg', '1550', 'aberto', '-'),
(5, 'Vilas', 'download.jpeg', '1550', 'aberto', '-'),
(6, 'Vilas', 'download.jpeg', '1550', 'aberto', '-');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblusuario`
--

DROP TABLE IF EXISTS `tblusuario`;
CREATE TABLE `tblusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(120) NOT NULL,
  `cpfUsuario` varchar(11) NOT NULL,
  `senhaUsuario` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblusuario`
--

INSERT INTO `tblusuario` (`idUsuario`, `nomeUsuario`, `cpfUsuario`, `senhaUsuario`) VALUES
(1, 'asdf', 'ee4ee7b2aae', '12345'),
(2, 'asdf', 'ee4ee7b2aae', '12345'),
(3, 'jorge', 'dc096f09deb', '123'),
(4, 'Jubervalsdo', '928a3fce5be', '09876'),
(5, 'albert', '5994471abb0', '12345'),
(6, 'Josivaldo Santos', '5994471abb0', '12345'),
(7, 'Bernardos de Oliveira', '12345', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblitem`
--
ALTER TABLE `tblitem`
  ADD PRIMARY KEY (`idItem`);

--
-- Índices de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblitem`
--
ALTER TABLE `tblitem`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
