-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 22-Out-2024 às 03:11
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
create database db_contabilidade;
use db_contabilidade;
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id_categoria` int NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `tipo` bit(1) DEFAULT NULL,
  `descricao` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_lançamento`
--

CREATE TABLE `tb_lançamento` (
  `id_lancamento` int NOT NULL,
  `data_lancamento` date DEFAULT NULL,
  `ds_lancamento` varchar(40) DEFAULT NULL,
  `fk_usuario` int DEFAULT NULL,
  `fk_categoria` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_user`
--

CREATE TABLE `tb_user` (
  `id_usuario` int NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `senha` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `tb_lançamento`
--
ALTER TABLE `tb_lançamento`
  ADD PRIMARY KEY (`id_lancamento`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_categoria` (`fk_categoria`);

--
-- Índices para tabela `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id_categoria` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_lançamento`
--
ALTER TABLE `tb_lançamento`
  MODIFY `id_lancamento` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_lançamento`
--
ALTER TABLE `tb_lançamento`
  ADD CONSTRAINT `tb_lançamento_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `tb_user` (`id_usuario`),
  ADD CONSTRAINT `tb_lançamento_ibfk_2` FOREIGN KEY (`fk_categoria`) REFERENCES `tb_categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
