-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Mar-2021 às 21:59
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_fcamara_2021`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_escolas`
--

CREATE TABLE `tb_escolas` (
  `cd_escolas` int(6) UNSIGNED NOT NULL,
  `nm_escola` varchar(30) NOT NULL,
  `nm_endereco` varchar(250) NOT NULL,
  `nm_bairro` varchar(50) NOT NULL,
  `nm_cidade` varchar(50) NOT NULL,
  `sg_uf` varchar(2) NOT NULL,
  `cd_cep` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_escolas`
--

INSERT INTO `tb_escolas` (`cd_escolas`, `nm_escola`, `nm_endereco`, `nm_bairro`, `nm_cidade`, `sg_uf`, `cd_cep`) VALUES
(35004230, 'ESCOLA MUNICIPAL PROFESSOR FUE', 'R. Leme, 27 ', 'Guilhermina', 'Praia Grande', 'SP', '11701470'),
(35907972, 'ESCOLA MUNICIPAL CIRCE SANCHES', ' Rua Mem de Sá', 'Aviação', 'Praia Grande', 'SP', '11702570'),
(35909836, 'VILA TUPI', 'Rua Bororós', 'Tupi', 'Praia Grande', 'SP', '11703390'),
(35909838, 'Escola_teste', 'Rua do tio japa', 'Bairro do japinha', 'Japa Grande', 'CO', '16969619');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_material`
--

CREATE TABLE `tb_material` (
  `id` int(16) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `tipo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_material`
--

INSERT INTO `tb_material` (`id`, `nome`, `tipo`) VALUES
(1, 'Caneta Azul', 'caneta'),
(2, 'Caneta Preta', 'caneta'),
(3, 'Caneta Azul', 'caneta'),
(4, 'Caneta Preta', 'caneta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `cd_usuario` int(6) UNSIGNED NOT NULL,
  `nm_usuario` varchar(70) NOT NULL,
  `nm_senha` varchar(30) NOT NULL,
  `nm_email` varchar(60) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `nm_senha`, `nm_email`, `reg_date`) VALUES
(1, 'aa', '1234', 'a@a.com', '2021-03-23 02:26:16'),
(2, '12', '123', '12@12.com', '2021-03-23 02:49:04'),
(3, 'Rodrigo', '12345', 'aaa@a.com', '2021-03-25 03:58:53'),
(4, 'Rodrigob', '1234', 'aaaa@aa.com', '2021-03-25 04:10:07');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_escolas`
--
ALTER TABLE `tb_escolas`
  ADD PRIMARY KEY (`cd_escolas`);

--
-- Índices para tabela `tb_material`
--
ALTER TABLE `tb_material`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_material`
--
ALTER TABLE `tb_material`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `cd_usuario` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
