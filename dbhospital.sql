-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/10/2024 às 01:41
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
  `idLoginUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblusuario`
--

INSERT INTO `tblusuario` (`idUsuario`, `nomeUsuario`, `senhaUsuario`, `tipoUsuario`, `crmUsuario`, `especialidadeUsuario`, `idLoginUsuario`) VALUES
(1, 'Teste nome', '12345', 'MEDICO', '6513215468496854163', 'Ortopedista', 0),
(2, 'TESTE USER', '12356', 'MEDICO', '755774321246', 'FISIOTERAPEUTA', 0),
(3, 'Robervaldo', '827ccb0eea8a706c4c34a16891f84e7b', 'MED', '12345', 'CARDIOLOGISTA', 0),
(4, 'Robervaldo', '827ccb0eea8a706c4c34a16891f84e7b', 'MED', '12345', 'CARDIOLOGISTA', 0),
(5, 'Robervaldo', '827ccb0eea8a706c4c34a16891f84e7b', 'MED', '12345', 'CARDIOLOGISTA', 0),
(6, 'Robervaldo', '827ccb0eea8a706c4c34a16891f84e7b', 'MED', '12345', 'CARDIOLOGISTA', 0),
(7, 'Robervaldo', '827ccb0eea8a706c4c34a16891f84e7b', 'MED', '12345', 'CARDIOLOGISTA', 0),
(8, 'Robervaldo', '827ccb0eea8a706c4c34a16891f84e7b', 'MEDICO', '12345', 'CARDIOLOGISTA', 0),
(9, 'Robervaldo', '827ccb0eea8a706c4c34a16891f84e7b', 'MEDICO', '12345', 'CARDIOLOGISTA', 0),
(10, 'Robervaldo', '827ccb0eea8a706c4c34a16891f84e7b', 'MEDICO', '12345', 'CARDIOLOGISTA', 0);

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
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
