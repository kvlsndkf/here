-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Mar-2022 às 00:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `database_here`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `institution`
--

CREATE TABLE `institution` (
  `idInstitution` int(11) NOT NULL,
  `nameInstitution` varchar(100) DEFAULT NULL,
  `emailInstitution` varchar(100) DEFAULT NULL,
  `passwordInstitution` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `schools`
--

CREATE TABLE `schools` (
  `idSchool` int(11) NOT NULL,
  `nameSchool` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretary`
--

CREATE TABLE `secretary` (
  `idSecretary` int(11) NOT NULL,
  `nameSecretary` varchar(100) DEFAULT NULL,
  `emailSecretary` varchar(100) DEFAULT NULL,
  `passwordSecretary` varchar(100) DEFAULT NULL,
  `idSchool` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`idInstitution`);

--
-- Índices para tabela `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`idSchool`);

--
-- Índices para tabela `secretary`
--
ALTER TABLE `secretary`
  ADD PRIMARY KEY (`idSecretary`),
  ADD KEY `idSchool` (`idSchool`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `institution`
--
ALTER TABLE `institution`
  MODIFY `idInstitution` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `schools`
--
ALTER TABLE `schools`
  MODIFY `idSchool` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `secretary`
--
ALTER TABLE `secretary`
  MODIFY `idSecretary` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `secretary`
--
ALTER TABLE `secretary`
  ADD CONSTRAINT `secretary_ibfk_1` FOREIGN KEY (`idSchool`) REFERENCES `schools` (`idSchool`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
