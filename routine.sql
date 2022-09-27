-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 12:23 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `atividade`
--

CREATE TABLE `atividade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materia_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atividade`
--

INSERT INTO `atividade` (`id`, `materia_id`, `data`, `hora`, `titulo`, `descricao`, `usuario_id`) VALUES
(2, 2, '2022-06-08', '13:00:00', 'Ensaio', 'Escrever ensaio sobre o livro O tempo é o rio que corre da autora Lya Luft. 3 a 4 páginas. ', 1),
(12, 9, '2022-05-20', '15:00:00', 'Banner Elodea', 'Banner sobre Elodea', 1),
(13, 11, '2022-06-16', '16:22:00', '                                                    ', '                                          ', 5),
(14, 19, '2022-06-22', '13:00:00', 'memorial', 'escrita e leitura', 6),
(15, 20, '2022-06-15', '22:00:00', 'Avaliação da professora', 'Descrever os pontos bons e ruins da matéria', 7),
(20, 2, '2022-06-22', '12:00:00', 'Memorial', 'Relação da leitura e escrita no Ensino Médio', 1),
(21, 8, '2022-06-23', '12:00:00', 'Prova de LP4', 'N2T2 - cadastro', 1),
(22, 9, '2022-06-27', '16:20:00', 'PI - apresentação artigo', 'Apresentação com 7 slides simples do artigo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `materia`
--

CREATE TABLE `materia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materia`
--

INSERT INTO `materia` (`id`, `nome`, `user_id`) VALUES
(2, 'Português 7', 1),
(5, 'Desenvolvimento Web 2', 1),
(7, 'Física 7', 1),
(8, 'Linguagem e Programação 4', 1),
(9, 'Projeto Integrador', 1),
(19, 'Português', 6),
(20, 'Comunicação Técnica', 7),
(21, 'Português', 8),
(22, 'Linguagem e Programação 4', 9),
(25, 'Matemática 6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rotina`
--

CREATE TABLE `rotina` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dia` varchar(100) NOT NULL,
  `hora` varchar(100) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rotina`
--

INSERT INTO `rotina` (`id`, `dia`, `hora`, `tipo_id`, `titulo`, `descricao`, `usuario_id`) VALUES
(13, 'Segunda', '13:00-13:45', 2, 'Estatística', 'Sala M6 - Prof Teresinha', 1),
(14, 'Sexta', '16:20-17:05', 3, 'PE Wesley', 'Sala D202', 1),
(15, 'Quarta', '17:05-17:50', 2, 'Comunicação Técnica', 'Sala A104, Prof° Rosane', 1),
(16, 'Terça', '13:45-14:30', 2, 'Projeto Integrador', 'C202 - Prof Paula', 1),
(17, 'Quinta', '13:45-14:30', 2, 'TETI', 'Sala D206 - Prof Jiyan', 1),
(18, 'Sexta', '13:45-14:30', 2, 'Gerência', 'Sala C202 - Prof Vitor', 1),
(20, 'Quarta', '13:45-14:30', 2, 'Português', 'Sala M6 - Prof Isaias', 1),
(21, 'Quarta', '13:00-13:45', 2, 'Português', 'Sala M6 - Prof Isaias', 1),
(28, 'Segunda', '07:45-08:30', 6, 'estágio', 'ser vegetal', 6),
(29, 'Segunda', '07:00-07:45', 7, 'Curso Libras', 'estudar', 7),
(30, 'Segunda', '10:20-11:05', 2, 'Almoço', 'descricao', 8),
(32, 'Quarta', '09:35-10:20', 5, 'Reunião TCC - Wesley', 'Meet', 9),
(33, 'Segunda', '13:45-14:30', 2, 'Estatística', 'Sala M6 - Prof Teresinha', 1),
(34, 'Segunda', '14:30-15:15', 2, 'Segurança da Informação', 'Sala D201 - Prof Jiyan', 1),
(35, 'Segunda', '15:35-16:20', 2, 'Segurança da Informação', 'Sala D201 - Prof Jiyan', 1),
(36, 'Segunda', '16:20-17:05', 2, 'Projeto Integrador', 'Sala C202 - Prof Paula', 1),
(37, 'Segunda', '17:05-17:50', 2, 'Projeto Integrador', 'Sala C202 - Prof Paula', 1),
(38, 'Terça', '14:30-15:15', 2, 'Projeto Integrador', 'Sala C202 - Prof Paula', 1),
(39, 'Terça', '15:35-16:20', 2, 'Física', 'Sala M6 - Prof Simão', 1),
(40, 'Terça', '16:20-17:05', 2, 'Física', 'Sala M6 - Prof Simão', 1),
(41, 'Terça', '17:05-17:50', 2, 'Física', 'Sala M6 - Prof Simão', 1),
(42, 'Quarta', '14:30-15:15', 2, 'Gerência', 'Sala C202 - Prof Vitor', 1),
(43, 'Quarta', '15:35-16:20', 2, 'Gerência', 'Sala C202 - Prof Vitor', 1),
(44, 'Quarta', '16:20-17:05', 2, 'Comunicação Técnica', 'Sala A104 - Prof Rosane', 1),
(45, 'Quinta', '13:00-13:45', 2, 'TETI', 'Sala D206 - Prof Jiyan', 1),
(46, 'Quinta', '14:30-15:15', 2, 'TETI', 'Sala D206 - Prof Jiyan', 1),
(47, 'Quinta', '15:35-16:20', 2, 'Mobile', 'Sala D203 - Prof Jonathan', 1),
(48, 'Quinta', '16:20-17:05', 2, 'Mobile', 'Sala D203 - Prof Jonathan', 1),
(49, 'Quinta', '17:05-17:50', 2, 'Mobile', 'Sala D203 - Prof Jonathan', 1),
(50, 'Sexta', '13:00-13:45', 2, 'Gerência', 'Sala C202 - Prof Vitor', 1),
(51, 'Sexta', '14:30-15:15', 2, 'LP4', 'Sala C202 - Prof Gilberto', 1),
(52, 'Sexta', '15:35-16:20', 2, 'LP4', 'Sala C202 - Prof Gilberto', 1),
(53, 'Quarta', '10:20-11:05', 5, 'Reunião TCC - Prof Wesley', 'Meet', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tipo`
--

CREATE TABLE `tipo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo`
--

INSERT INTO `tipo` (`id`, `titulo`) VALUES
(1, 'Estudar'),
(2, 'Aula'),
(3, 'Permanência'),
(4, 'Monitoria'),
(5, 'Reunião'),
(6, 'Estágio'),
(7, 'Curso Extracurricular');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
(1, 'karine@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'gabi@gmail.com', 'a195ae7fb8cf57be86a0d19ab9c51815'),
(4, 'giulia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'teste@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'vivian@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'bianca.ribas@estudante.ifms.edu.br', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'ariadne.paula@estudante.ifms.edu.br', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'karine.kayano@estudante.ifms.edu.br', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'aluno@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'giu@email.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividade`
--
ALTER TABLE `atividade`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `rotina`
--
ALTER TABLE `rotina`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `rotina`
--
ALTER TABLE `rotina`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
