-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 25-Nov-2023 às 02:25
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rsw`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `NOME_CATEGORIA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`ID_CATEGORIA`, `NOME_CATEGORIA`) VALUES
(1, 'Salário'),
(2, 'Comissão'),
(3, 'Pagamentos'),
(4, 'Rendimentos'),
(5, 'Serviços'),
(6, 'Vendas'),
(7, 'Veículo'),
(8, 'Alimentação'),
(9, 'Educação'),
(10, 'Lazer'),
(11, 'Moradia'),
(12, 'Saúde'),
(13, 'Transporte'),
(14, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `deposito_objetivo`
--

CREATE TABLE `deposito_objetivo` (
  `ID` int(11) NOT NULL,
  `VALOR_DEPOSITO` decimal(10,2) DEFAULT NULL,
  `DATA_DEPOSITO` date DEFAULT NULL,
  `HORARIO_DEPOSITO` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `deposito_objetivo`
--

INSERT INTO `deposito_objetivo` (`ID`, `VALOR_DEPOSITO`, `DATA_DEPOSITO`, `HORARIO_DEPOSITO`) VALUES
(1, '1212.00', '2023-11-24', '21:56:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gastos`
--

CREATE TABLE `gastos` (
  `ID_GASTOS` int(11) NOT NULL,
  `DESCRICAO` varchar(30) DEFAULT NULL,
  `VALOR` decimal(8,2) DEFAULT NULL,
  `CATEGORIA` int(11) NOT NULL,
  `TIPO` int(11) DEFAULT NULL,
  `DIA_GASTO` date DEFAULT NULL,
  `HORARIO_GASTO` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `gastos`
--

INSERT INTO `gastos` (`ID_GASTOS`, `DESCRICAO`, `VALOR`, `CATEGORIA`, `TIPO`, `DIA_GASTO`, `HORARIO_GASTO`) VALUES
(1, 'Salário', '3000.00', 1, 1, '2023-11-07', NULL),
(2, 'Aluguel', '900.00', 11, 2, '2023-11-07', NULL),
(3, 'Tadala', '0.00', 12, 1, '2023-11-10', NULL),
(4, 'a', '999999.99', 8, 2, '2023-11-10', NULL),
(5, 'qwqw', '1212.00', 4, 2, '2023-11-14', '20:19:30'),
(6, 'asdasdsa', '999999.99', 1, 1, '2023-11-24', '21:47:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gestao_divida`
--

CREATE TABLE `gestao_divida` (
  `ID` int(11) NOT NULL,
  `NOME_DIVIDA` varchar(55) DEFAULT NULL,
  `VALOR` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `gestao_divida`
--

INSERT INTO `gestao_divida` (`ID`, `NOME_DIVIDA`, `VALOR`) VALUES
(1, 'gfhf', '4.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `objetivo`
--

CREATE TABLE `objetivo` (
  `ID` int(11) NOT NULL,
  `DESCRICAO` varchar(255) DEFAULT NULL,
  `VALOR_NECESSARIO` decimal(10,2) DEFAULT NULL,
  `DATA_PREVISTA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `objetivo`
--

INSERT INTO `objetivo` (`ID`, `DESCRICAO`, `VALOR_NECESSARIO`, `DATA_PREVISTA`) VALUES
(1, 'carro', '1232312.00', '2030-01-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_gasto`
--

CREATE TABLE `tipo_gasto` (
  `ID_TIPO_GASTO` int(11) NOT NULL,
  `TIPO_GASTO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo_gasto`
--

INSERT INTO `tipo_gasto` (`ID_TIPO_GASTO`, `TIPO_GASTO`) VALUES
(1, 'Receita'),
(2, 'Despesa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Índices para tabela `deposito_objetivo`
--
ALTER TABLE `deposito_objetivo`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`ID_GASTOS`),
  ADD KEY `CATEGORIA` (`CATEGORIA`),
  ADD KEY `TIPO` (`TIPO`);

--
-- Índices para tabela `gestao_divida`
--
ALTER TABLE `gestao_divida`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `objetivo`
--
ALTER TABLE `objetivo`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `tipo_gasto`
--
ALTER TABLE `tipo_gasto`
  ADD PRIMARY KEY (`ID_TIPO_GASTO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `deposito_objetivo`
--
ALTER TABLE `deposito_objetivo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `gastos`
--
ALTER TABLE `gastos`
  MODIFY `ID_GASTOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `gestao_divida`
--
ALTER TABLE `gestao_divida`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `objetivo`
--
ALTER TABLE `objetivo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tipo_gasto`
--
ALTER TABLE `tipo_gasto`
  MODIFY `ID_TIPO_GASTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `CATEGORIA` FOREIGN KEY (`CATEGORIA`) REFERENCES `categoria` (`ID_CATEGORIA`),
  ADD CONSTRAINT `TIPO` FOREIGN KEY (`TIPO`) REFERENCES `tipo_gasto` (`ID_TIPO_GASTO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
