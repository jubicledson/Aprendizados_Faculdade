-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/12/2024 às 01:47
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
-- Estrutura stand-in para view `relenfermeiro`
-- (Veja abaixo para a visão atual)
--
DROP VIEW IF EXISTS `relenfermeiro`;
CREATE TABLE `relenfermeiro` (
`nomePaciente` varchar(250)
,`nomeReceita` varchar(150)
,`dataAplicacao` date
,`horaAplicacao` varchar(25)
,`doseReceica` varchar(20)
);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbladministracao`
--

DROP TABLE IF EXISTS `tbladministracao`;
CREATE TABLE `tbladministracao` (
  `idAdministracao` int(11) NOT NULL,
  `dataAdministrada` date NOT NULL,
  `horaAdministrada` varchar(10) NOT NULL,
  `idReceita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbladministracao`
--

INSERT INTO `tbladministracao` (`idAdministracao`, `dataAdministrada`, `horaAdministrada`, `idReceita`) VALUES
(1, '2024-12-11', '01:38:00', 29),
(2, '2024-12-11', '01:38:21', 29),
(3, '2024-12-11', '01:38:59', 31);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblpaciente`
--

DROP TABLE IF EXISTS `tblpaciente`;
CREATE TABLE `tblpaciente` (
  `idPaciente` int(11) NOT NULL,
  `nomePaciente` varchar(250) NOT NULL,
  `cpfPaciente` varchar(11) NOT NULL,
  `leitoPaciente` varchar(100) NOT NULL,
  `situacaoPaciente` tinyint(1) NOT NULL,
  `cuiResPaciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblpaciente`
--

INSERT INTO `tblpaciente` (`idPaciente`, `nomePaciente`, `cpfPaciente`, `leitoPaciente`, `situacaoPaciente`, `cuiResPaciente`) VALUES
(1, 'Josep adalfindos santis', '0', 'Leito 3 - 2º andar', 0, 50),
(2, 'Alabamel de Moquidrinas', '0', 'Sala 2 - 1º andar', 1, 48),
(3, 'Jubingulus da Silva', '2147483647', '89303b659b0f85f9190f6ea90ec17997', 1, 49),
(4, 'Jubingulus da Silva 3', '2147483647', 'Leito 5 - Terreo', 1, 49),
(5, 'Albert Ainsteing', '22222222222', 'Leito 5 - 1º andar', 1, 52),
(6, 'Teste', '11111111111', 'Leito 5 - Terreo', 1, 52);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblreceita`
--

DROP TABLE IF EXISTS `tblreceita`;
CREATE TABLE `tblreceita` (
  `idReceita` int(11) NOT NULL,
  `nomeReceita` varchar(150) NOT NULL,
  `dataReceita` date NOT NULL,
  `horaReceita` varchar(20) NOT NULL,
  `doseReceita` varchar(20) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `dataAplicacao` date NOT NULL,
  `horaAplicacao` varchar(25) NOT NULL,
  `administradoReceita` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblreceita`
--

INSERT INTO `tblreceita` (`idReceita`, `nomeReceita`, `dataReceita`, `horaReceita`, `doseReceita`, `idPaciente`, `idUsuario`, `dataAplicacao`, `horaAplicacao`, `administradoReceita`) VALUES
(1, 'Paracetamol', '2024-12-03', '0000-00-00', '10ml', 0, 52, '0000-00-00', '', 0),
(2, 'Paracetileno', '2024-12-03', '22:14:04', '5ml', 0, 52, '0000-00-00', '', 0),
(3, 'Paracetileno', '2024-12-03', '22:23:02', '5ml', 0, 52, '0000-00-00', '', 0),
(4, 'Paracetileno', '2024-12-03', '22:23:04', '5ml', 0, 52, '0000-00-00', '', 0),
(5, 'Paracetileno', '2024-12-03', '22:23:29', '5ml', 0, 52, '0000-00-00', '', 0),
(6, 'Paracetileno', '2024-12-03', '22:23:45', '5ml', 0, 52, '0000-00-00', '', 0),
(7, 'Paracetileno', '2024-12-03', '22:24:11', '5ml', 0, 52, '0000-00-00', '', 0),
(8, 'Paracetileno', '2024-12-03', '22:24:39', '5ml', 0, 52, '0000-00-00', '', 0),
(9, 'Paracetileno', '2024-12-03', '22:26:08', '5ml', 0, 52, '0000-00-00', '', 0),
(10, '', '2024-12-03', '22:26:09', '', 0, 52, '0000-00-00', '', 0),
(11, '', '2024-12-03', '22:26:12', '', 0, 52, '0000-00-00', '', 0),
(12, '', '2024-12-03', '22:27:54', '', 0, 52, '0000-00-00', '', 0),
(13, '', '2024-12-03', '22:28:48', '', 0, 52, '0000-00-00', '', 0),
(14, '', '2024-12-03', '22:30:15', '', 0, 52, '0000-00-00', '', 0),
(15, '', '2024-12-03', '22:33:42', '', 0, 52, '0000-00-00', '', 0),
(16, '', '2024-12-03', '22:33:45', '', 0, 52, '0000-00-00', '', 0),
(17, '', '2024-12-03', '22:35:53', '', 0, 52, '0000-00-00', '', 0),
(18, 'Paracetileno', '2024-12-03', '22:37:58', '10ml', 4, 52, '0000-00-00', '', 0),
(19, 'Paracetileno', '2024-12-03', '22:38:59', '10ml', 4, 52, '0000-00-00', '', 0),
(20, 'Paracetileno', '2024-12-03', '22:44:34', '5ml', 4, 52, '0000-00-00', '', 0),
(21, 'Paracetileno', '2024-12-03', '22:44:52', '5ml', 4, 52, '0000-00-00', '', 0),
(22, 'Paracetileno', '2024-12-03', '22:45:30', '5ml', 4, 52, '0000-00-00', '', 0),
(23, 'Paracetileno', '2024-12-03', '22:45:44', '5ml', 4, 52, '0000-00-00', '', 0),
(24, 'Paracetileno', '2024-12-03', '22:45:57', '5ml', 4, 52, '0000-00-00', '', 0),
(25, 'Paracetileno', '2024-12-03', '22:46:09', '5ml', 4, 52, '0000-00-00', '', 0),
(26, 'Jurimalidos', '2024-12-03', '22:51:43', '15ml', 5, 52, '0000-00-00', '', 0),
(27, 'Jurimalidos', '2024-12-03', '22:52:20', '15ml', 5, 52, '0000-00-00', '', 0),
(28, 'Agrismado', '2024-12-03', '22:52:57', '20ml', 1, 52, '0000-00-00', '', 0),
(29, 'Topcitrus', '2024-12-10', '23:42:22', '6ml', 3, 52, '0000-00-00', '06:45', 1),
(30, 'teste data A', '2024-12-10', '21452', '6ml', 1, 46, '2024-12-10', '21:20', 0),
(31, 'TopcitrusXMIAX', '2024-12-10', '23:58:04', '8ml', 3, 52, '2024-12-12', '23:30', 1),
(32, 'TopcLeidson', '2024-12-11', '00:00:56', '25ml', 3, 52, '2024-12-11', '18:15', 0);

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
(49, 'eudeufino', '827ccb0eea8a706c4c34a16891f84e7b', 'ENFERMEIRO', '321465978', 'seim', '00049'),
(50, 'Usuarioteste', '827ccb0eea8a706c4c34a16891f84e7b', 'MEDICO', '12345', 'Ortopedista', '00050'),
(51, 'a', '202cb962ac59075b964b07152d234b70', 'MEDICO', '12345', 'Ortopedista', '00051'),
(52, 'medico', '827ccb0eea8a706c4c34a16891f84e7b', 'MEDICO', '++9854.654.65146541', 'Oftamologista', '00052');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vwenfermeiro`
-- (Veja abaixo para a visão atual)
--
DROP VIEW IF EXISTS `vwenfermeiro`;
CREATE TABLE `vwenfermeiro` (
`idPaciente` int(11)
,`nomePaciente` varchar(250)
,`leitoPaciente` varchar(100)
,`idReceita` int(11)
,`nomeReceita` varchar(150)
,`dataAplicacao` date
,`horaAplicacao` varchar(25)
,`doseReceita` varchar(20)
);

-- --------------------------------------------------------

--
-- Estrutura para view `relenfermeiro`
--
DROP TABLE IF EXISTS `relenfermeiro`;

DROP VIEW IF EXISTS `relenfermeiro`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `relenfermeiro`  AS SELECT `tblpaciente`.`nomePaciente` AS `nomePaciente`, `tblreceita`.`nomeReceita` AS `nomeReceita`, `tblreceita`.`dataAplicacao` AS `dataAplicacao`, `tblreceita`.`horaAplicacao` AS `horaAplicacao`, `tblreceita`.`doseReceita` AS `doseReceica` FROM (`tblreceita` join `tblpaciente` on(`tblreceita`.`idPaciente` = `tblpaciente`.`idPaciente`)) WHERE `tblreceita`.`administradoReceita` = 0 ;

-- --------------------------------------------------------

--
-- Estrutura para view `vwenfermeiro`
--
DROP TABLE IF EXISTS `vwenfermeiro`;

DROP VIEW IF EXISTS `vwenfermeiro`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwenfermeiro`  AS SELECT `tblpaciente`.`idPaciente` AS `idPaciente`, `tblpaciente`.`nomePaciente` AS `nomePaciente`, `tblpaciente`.`leitoPaciente` AS `leitoPaciente`, `tblreceita`.`idReceita` AS `idReceita`, `tblreceita`.`nomeReceita` AS `nomeReceita`, `tblreceita`.`dataAplicacao` AS `dataAplicacao`, `tblreceita`.`horaAplicacao` AS `horaAplicacao`, `tblreceita`.`doseReceita` AS `doseReceita` FROM (`tblreceita` join `tblpaciente` on(`tblreceita`.`idPaciente` = `tblpaciente`.`idPaciente`)) WHERE `tblreceita`.`administradoReceita` = 0 ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbladministracao`
--
ALTER TABLE `tbladministracao`
  ADD PRIMARY KEY (`idAdministracao`);

--
-- Índices de tabela `tblpaciente`
--
ALTER TABLE `tblpaciente`
  ADD PRIMARY KEY (`idPaciente`),
  ADD KEY `cpfPaciente` (`cpfPaciente`);

--
-- Índices de tabela `tblreceita`
--
ALTER TABLE `tblreceita`
  ADD PRIMARY KEY (`idReceita`);

--
-- Índices de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `idLoginUsuario` (`idLoginUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbladministracao`
--
ALTER TABLE `tbladministracao`
  MODIFY `idAdministracao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblpaciente`
--
ALTER TABLE `tblpaciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tblreceita`
--
ALTER TABLE `tblreceita`
  MODIFY `idReceita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
