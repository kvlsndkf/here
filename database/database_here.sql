-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2022 às 01:14
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
-- Estrutura da tabela `courses`
--

CREATE TABLE `courses` (
  `idCourse` int(11) NOT NULL,
  `nameCourse` varchar(100) NOT NULL,
  `isAnnualDurationDate` varchar(10) NOT NULL,
  `idSchool` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE `groups` (
  `idGroup` int(11) NOT NULL,
  `nameGroup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `institutions`
--

CREATE TABLE `institutions` (
  `idInstitution` int(11) NOT NULL,
  `nameInstitution` varchar(100) NOT NULL,
  `emailInstitution` varchar(100) NOT NULL,
  `passwordInstitution` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professors`
--

CREATE TABLE `professors` (
  `idProfessor` int(11) NOT NULL,
  `nameProfessor` varchar(100) NOT NULL,
  `emailProfessor` varchar(100) NOT NULL,
  `passwordProfessor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professorshasschools`
--

CREATE TABLE `professorshasschools` (
  `idProfessorHasSchool` int(11) NOT NULL,
  `idProfessor` int(11) DEFAULT NULL,
  `idSchool` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `schools`
--

CREATE TABLE `schools` (
  `idSchool` int(11) NOT NULL,
  `nameSchool` varchar(100) NOT NULL,
  `emailSchool` varchar(100) NOT NULL,
  `passwordSchool` varchar(100) NOT NULL,
  `idInstitution` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `schools`
--

INSERT INTO `schools` (`idSchool`, `nameSchool`, `emailSchool`, `passwordSchool`, `idInstitution`) VALUES
(1, 'etec de guaianases', '', '', NULL),
(2, 'etec de tiradentes', '', '', NULL),
(3, 'etec de itaquera', '', '', NULL),
(4, 'ETEC Astolfo', '', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `secretarys`
--

CREATE TABLE `secretarys` (
  `idSecretary` int(11) NOT NULL,
  `nameSecretary` varchar(100) NOT NULL,
  `emailSecretary` varchar(100) NOT NULL,
  `passwordSecretary` varchar(100) NOT NULL,
  `idSchool` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `secretarys`
--

INSERT INTO `secretarys` (`idSecretary`, `nameSecretary`, `emailSecretary`, `passwordSecretary`, `idSchool`) VALUES
(1, 'aristíçia', 'here@here.com', '1234', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `student`
--

CREATE TABLE `student` (
  `idStudent` int(11) NOT NULL,
  `nameStudent` varchar(100) NOT NULL,
  `emailStudent` varchar(100) NOT NULL,
  `passwordStudent` varchar(100) NOT NULL,
  `idGroup` int(11) DEFAULT NULL,
  `idTeam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subjects`
--

CREATE TABLE `subjects` (
  `idSubject` int(11) NOT NULL,
  `nameSubject` varchar(100) NOT NULL,
  `idTeam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `subjectshasprofessors`
--

CREATE TABLE `subjectshasprofessors` (
  `idSubjectHasProfessor` int(11) NOT NULL,
  `idTeam` int(11) DEFAULT NULL,
  `idProfessor` int(11) DEFAULT NULL,
  `idSubject` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `teams`
--

CREATE TABLE `teams` (
  `idTeam` int(11) NOT NULL,
  `nameTeam` varchar(100) NOT NULL,
  `startDateTeam` datetime NOT NULL,
  `moduleTeam` varchar(100) NOT NULL,
  `idCourse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`idCourse`),
  ADD KEY `idSchool` (`idSchool`);

--
-- Índices para tabela `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`idGroup`);

--
-- Índices para tabela `institutions`
--
ALTER TABLE `institutions`
  ADD PRIMARY KEY (`idInstitution`);

--
-- Índices para tabela `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`idProfessor`);

--
-- Índices para tabela `professorshasschools`
--
ALTER TABLE `professorshasschools`
  ADD PRIMARY KEY (`idProfessorHasSchool`),
  ADD KEY `idProfessor` (`idProfessor`),
  ADD KEY `idSchool` (`idSchool`);

--
-- Índices para tabela `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`idSchool`),
  ADD KEY `idInstitution` (`idInstitution`);

--
-- Índices para tabela `secretarys`
--
ALTER TABLE `secretarys`
  ADD PRIMARY KEY (`idSecretary`),
  ADD KEY `idSchool` (`idSchool`);

--
-- Índices para tabela `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`idStudent`),
  ADD KEY `idGroup` (`idGroup`),
  ADD KEY `idTeam` (`idTeam`);

--
-- Índices para tabela `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`idSubject`),
  ADD KEY `idTeam` (`idTeam`);

--
-- Índices para tabela `subjectshasprofessors`
--
ALTER TABLE `subjectshasprofessors`
  ADD PRIMARY KEY (`idSubjectHasProfessor`),
  ADD KEY `idTeam` (`idTeam`),
  ADD KEY `idProfessor` (`idProfessor`),
  ADD KEY `idSubject` (`idSubject`);

--
-- Índices para tabela `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`idTeam`),
  ADD KEY `idCourse` (`idCourse`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `courses`
--
ALTER TABLE `courses`
  MODIFY `idCourse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `groups`
--
ALTER TABLE `groups`
  MODIFY `idGroup` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `institutions`
--
ALTER TABLE `institutions`
  MODIFY `idInstitution` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professors`
--
ALTER TABLE `professors`
  MODIFY `idProfessor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professorshasschools`
--
ALTER TABLE `professorshasschools`
  MODIFY `idProfessorHasSchool` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `schools`
--
ALTER TABLE `schools`
  MODIFY `idSchool` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `secretarys`
--
ALTER TABLE `secretarys`
  MODIFY `idSecretary` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `student`
--
ALTER TABLE `student`
  MODIFY `idStudent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `subjects`
--
ALTER TABLE `subjects`
  MODIFY `idSubject` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `subjectshasprofessors`
--
ALTER TABLE `subjectshasprofessors`
  MODIFY `idSubjectHasProfessor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `teams`
--
ALTER TABLE `teams`
  MODIFY `idTeam` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`idSchool`) REFERENCES `schools` (`idSchool`);

--
-- Limitadores para a tabela `professorshasschools`
--
ALTER TABLE `professorshasschools`
  ADD CONSTRAINT `professorshasschools_ibfk_1` FOREIGN KEY (`idProfessor`) REFERENCES `professors` (`idProfessor`),
  ADD CONSTRAINT `professorshasschools_ibfk_2` FOREIGN KEY (`idSchool`) REFERENCES `schools` (`idSchool`);

--
-- Limitadores para a tabela `schools`
--
ALTER TABLE `schools`
  ADD CONSTRAINT `schools_ibfk_1` FOREIGN KEY (`idInstitution`) REFERENCES `institutions` (`idInstitution`);

--
-- Limitadores para a tabela `secretarys`
--
ALTER TABLE `secretarys`
  ADD CONSTRAINT `secretarys_ibfk_1` FOREIGN KEY (`idSchool`) REFERENCES `schools` (`idSchool`);

--
-- Limitadores para a tabela `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`idGroup`) REFERENCES `groups` (`idGroup`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`idTeam`) REFERENCES `teams` (`idTeam`);

--
-- Limitadores para a tabela `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`idTeam`) REFERENCES `teams` (`idTeam`);

--
-- Limitadores para a tabela `subjectshasprofessors`
--
ALTER TABLE `subjectshasprofessors`
  ADD CONSTRAINT `subjectshasprofessors_ibfk_1` FOREIGN KEY (`idTeam`) REFERENCES `teams` (`idTeam`),
  ADD CONSTRAINT `subjectshasprofessors_ibfk_2` FOREIGN KEY (`idProfessor`) REFERENCES `professors` (`idProfessor`),
  ADD CONSTRAINT `subjectshasprofessors_ibfk_3` FOREIGN KEY (`idSubject`) REFERENCES `subjects` (`idSubject`);

--
-- Limitadores para a tabela `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_ibfk_1` FOREIGN KEY (`idCourse`) REFERENCES `courses` (`idCourse`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
