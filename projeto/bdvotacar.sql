-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Out-2017 às 21:24
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `bdvotacar`
--
CREATE DATABASE IF NOT EXISTS `bdvotacar` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bdvotacar`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcarro`
--

CREATE TABLE IF NOT EXISTS `tbcarro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(100) NOT NULL,
  `fab` varchar(100) NOT NULL,
  `ano` int(8) NOT NULL,
  `cor` varchar(100) NOT NULL,
  `ativo` int(1) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `voto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `tbcarro`
--

INSERT INTO `tbcarro` (`id`, `modelo`, `fab`, `ano`, `cor`, `ativo`, `idusuario`, `voto`) VALUES
(1, 'mustang', 'Ford', 2007, 'Preto', 1, 1, 0),
(2, 'Lamborghini', 'Lamborghini', 2014, 'prata', 1, 2, 0),
(7, 'Honda', 'Honda', 2014, 'preto', 0, 1, 1),
(8, 'Lamborghini', 'lam', 2015, 'prata', 1, 5, 0),
(9, 'Lamborghini', 'lam', 2015, 'prata', 1, 0, 0),
(10, 'Honda', 'dfgd', 0, 'dfgd', 1, 5, 0),
(12, 'GOL', 'ffff', 0, 'fffff', 1, 1, 1),
(13, 'Gol', 'fffrrrrr', 3343, 'asdas', 0, 1, 0),
(14, 'Gol', 'asdf', 0, 'asdas', 0, 1, 4),
(15, 'masi um', 'outros', 23423, 'azuk', 1, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfoto`
--

CREATE TABLE IF NOT EXISTS `tbfoto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `idcarro` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tbfoto`
--

INSERT INTO `tbfoto` (`id`, `descricao`, `foto`, `idcarro`) VALUES
(1, 'ouro bla bla bla', '1508965589.jpg', 15),
(2, '', '1508966006.jpg', 15),
(3, 'show', '1509145855.jpg', 8),
(4, '', '1509145870.jpg', 8),
(5, '', '1509147742.jpg', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE IF NOT EXISTS `tbusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ativo` int(1) NOT NULL,
  `tipo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`id`, `nome`, `telefone`, `login`, `senha`, `ativo`, `tipo`) VALUES
(1, 'fulano da silva', '123456', 'iuri', '123456', 1, 1),
(2, 'beltrano de souza', '123456', 'bordini', '123456', 1, 1),
(5, 'iuri de souza', '123456', 'daniel', '123456', 1, 0),
(6, 'iuri', '123456', 'daniel2', '123456', 1, 0),
(7, 'iuri', '123456', 'daniel3', '123456', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `votacao`
--

CREATE TABLE IF NOT EXISTS `votacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `votos` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `votacao`
--

INSERT INTO `votacao` (`id`, `descricao`, `votos`) VALUES
(1, 'MySQL', '0'),
(2, 'msSQL', '0'),
(3, 'PostgreSQL', '0'),
(4, 'ODBC', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
