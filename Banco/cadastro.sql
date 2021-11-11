-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Maio-2021 às 01:35
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) CHARACTER SET utf8 NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `estado_civil` varchar(12) CHARACTER SET utf8 NOT NULL,
  `renda` float DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `logradouro` varchar(15) DEFAULT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(10) DEFAULT NULL,
  `estado` varchar(20) CHARACTER SET utf8 NOT NULL,
  `cidade` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `cpf`, `nascimento`, `sexo`, `estado_civil`, `renda`, `endereco`, `logradouro`, `numero`, `complemento`, `estado`, `cidade`) VALUES
(1, 'Leonardo Alexandre Boriolo', '46973683800', '1999-01-29', 'Masculino', 'Casado(a)', 2800, 'Rua Augusta', 'Augusta', 202, 'Casa', 'ES', 'Limeira'),
(21, 'Leonardo Augusto', '411.902.760-03', '1999-01-29', 'Masculino', 'Casado(a)', 2500, 'Rua Augusta', 'Augusta', 202, 'Casa', 'AM', 'Limeira'),
(22, 'Leonardo Augusto', '846.444.810-41', '1999-01-29', 'Masculino', 'Casado(a)', 2500, 'Rua Augusta', 'Augusta', 202, 'Casa', 'AM', 'Limeira');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
