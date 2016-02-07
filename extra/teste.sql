-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Dez-2015 às 15:33
-- Versão do servidor: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `data_criacao` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id`, `nome`, `data_criacao`) VALUES
(4, 'Presbitero', '2015-12-24'),
(5, 'Missionario', '2015-12-24'),
(9, 'Auxiliar A', '2015-12-27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cargo` int(11) NOT NULL,
  `data_batismo` date NOT NULL,
  `data_admissao` date NOT NULL,
  `doador_orgao` varchar(1) NOT NULL,
  `grupo_sanguineo` varchar(10) NOT NULL,
  `pai` varchar(150) NOT NULL,
  `mae` varchar(150) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `estado_civil` varchar(30) NOT NULL,
  `rg` varchar(50) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id`, `nome`, `cargo`, `data_batismo`, `data_admissao`, `doador_orgao`, `grupo_sanguineo`, `pai`, `mae`, `foto`, `estado_civil`, `rg`, `cpf`, `data_nascimento`) VALUES
(85, 'Fabio Moura', 4, '2015-01-01', '2014-01-01', 'T', 'B', 'Sergio Lima', 'Rosilene Moura', 'image/77f0c000deec27bc9805ec6ce1a4bc34.jpg', 'Casado', '123456789', '201.054.548-55', '1980-10-01'),
(86, 'Gutierrez paixão', 4, '2015-01-01', '2015-01-01', 'T', 'A', 'Afonso Lucas', 'Maria Silva', 'image/c8585e4c7ab5276d22480ccabdbf7462.jpg', 'Solteiro', '123456789', '134.456.879-88', '1976-10-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `data_criacao` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `senha`, `data_criacao`) VALUES
(1, 'ad', '523af537946b79c4f8369ed39ba78605', '2015-12-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
