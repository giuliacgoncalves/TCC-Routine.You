-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Fev-2022 às 00:54
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
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
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id`, `materia_id`, `data`, `hora`, `titulo`, `descricao`, `usuario_id`) VALUES
(4, 3, '2022-03-04', '07:30:00', 'Inicio das aulas', 'oi', 2),
(5, 6, '2022-04-16', '08:45:00', 'tarefa', '', 2),
(6, 8, '2003-08-12', '12:08:00', 'oi', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id`, `nome`, `user_id`) VALUES
(3, 'matematica', 0),
(6, 'fisica 6', 0),
(7, 'LP4', 2),
(8, 'lingua portuguesa', 1),
(9, 'geografia', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
(1, 'giulia@gmail.com', 'giulia'),
(2, 'oi@gmail.com', 'oioi');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atividade`
--
ALTER TABLE `atividade`
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `materia`
--
ALTER TABLE `materia`
  ADD UNIQUE KEY `id_materia` (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD UNIQUE KEY `id_usuario` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
