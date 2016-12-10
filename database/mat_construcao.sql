-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `mat_construcao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `bairro` varchar(50) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `identidade` varchar(15) NOT NULL,
  `login` varchar(10) NOT NULL,
  `nascimento` varchar(12) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `permissao` varchar(5) NOT NULL,
  `senha` varchar(8) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`bairro`, `cep`, `cidade`, `cpf`, `email`, `endereco`, `identidade`, `login`, `nascimento`, `nome`, `permissao`, `senha`, `telefone`) VALUES
('', '', '', '', '', '', '', '', '', '', '1', '', ''),
('1', '1', '', '1', '', '1', '1', 'gian', '1995-09-16', 'kjkljlkjk', 'adm', 'gian', '1'),
('1', '11', '1', '111', '1', '1', '1', 'teste', '1', '1', '1', 'teste', '1'),
('1', '1', '1', '13131313', '1', '1', '1', 'a', '1', '1', '1', 'a', '1'),
('lkjkljk', 'lkjkljkl', 'lkjklj', '15', 'lkjkljlkjl', 'lkjlkj', 'kljkljk', 't', 'lkjklj', 'jlkjkj', '2', 't', 'lkjkljl'),
('1', '1', '', '2', '', '1', '1', '1', '1', '1', '', '1', '1'),
('', '', '', '34523423', '', '', '', '', '', 'gfgf', '2', '', ''),
('dfgdfg', '', 'dfgdfg', '43434', '', 'fgdfgdfg', '', '', '', 'gdfgdfg', '2', '', ''),
('', '', '', '555', '', 'fgdfg', '', '', '', 'fgdfgdfg', '2', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `codigo` varchar(15) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `fabricante` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `quantidade` varchar(10) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `validade` varchar(40) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo`, `descricao`, `fabricante`, `imagem`, `nome`, `preco`, `quantidade`, `tipo`, `validade`) VALUES
('444444', '', '', 'imagens/', 'fsdf', '', '', 'ferramentas', ''),
('55', 'asdsadasd', 'asdsa', 'imagens/escada.png', 'sdsad', 'asdas', 'dasd', 'basicos', 'dasdasd'),
('555', 'bnajhgah', '1111', 'imagens/Cimento.jpg', 'cimento', '1', '1', 'eletricos', '1'),
('6', 'hfjfjhfj', '3', 'imagens/telha.jpg', '5', '3', '4', 'basicos', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
