-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/11/2023 às 19:49
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancodados`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabclientes`
--

CREATE TABLE `tabclientes` (
  `cliId` int(11) NOT NULL,
  `cliNome` varchar(40) NOT NULL,
  `cliTelefone` varchar(15) DEFAULT NULL,
  `cliDataNasc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabfuncionarios`
--

CREATE TABLE `tabfuncionarios` (
  `funId` int(11) NOT NULL,
  `funNome` varchar(30) NOT NULL,
  `funSenha` varchar(10) NOT NULL,
  `funEmail` varchar(50) NOT NULL,
  `funCargo` varchar(20) NOT NULL,
  `funUsuario` varchar(10) NOT NULL,
  `funFoto` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Estrutura para tabela `tabcarrinho`
--

CREATE TABLE `tabcarrinho` (
  `carId` int(11) NOT NULL AUTO_INCREMENT,
  `carProId` int(11) NOT NULL,
  `carQtde` int(11) DEFAULT NULL,
  PRIMARY KEY (`carId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Estrutura para tabela `tabprodutos`
--

CREATE TABLE `tabprodutos` (
  `proId` int(11) NOT NULL,
  `proDescricao` varchar(255) DEFAULT NULL,
  `proImagem` varchar(30) NOT NULL,
  `proPreco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabfuncionarios`
--

INSERT INTO `tabfuncionarios` (`funId`, `funNome`, `funSenha`, `funEmail`, `funCargo`, `funUsuario`, `funFoto`) VALUES
(1, 'Luiz Otávio', 'luiz', 'lulu@gmail.com', 'Gerente', 'lz123', 'luiz.jpg'),
(2, 'Bruno', 'Bruno', 'br123bum@gmail.com', 'Vendedor', 'bruno1234', 'bruno.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabclientes`
--
ALTER TABLE `tabclientes`
  ADD PRIMARY KEY (`cliId`);

--
-- Índices de tabela `tabfuncionarios`
--
ALTER TABLE `tabfuncionarios`
  ADD PRIMARY KEY (`funId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabclientes`
--
ALTER TABLE `tabclientes`
  MODIFY `cliId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tabfuncionarios`
--
ALTER TABLE `tabfuncionarios`
  MODIFY `funId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
