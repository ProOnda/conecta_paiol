-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/06/2025 às 22:28
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `paiol_de_saberes`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agricultor`
--

CREATE TABLE `agricultor` (
  `Id_Agricultor` int(10) UNSIGNED NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `agricultor_fisico`
--

CREATE TABLE `agricultor_fisico` (
  `Id_Agricultor` int(10) UNSIGNED NOT NULL,
  `CPF` char(11) NOT NULL,
  `Nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `agricultor_juridico`
--

CREATE TABLE `agricultor_juridico` (
  `Id_Agricultor` int(10) UNSIGNED NOT NULL,
  `CNPJ` char(14) NOT NULL,
  `Razao_Social` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `Id_Categoria` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `Id_Cliente` int(10) UNSIGNED NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Nome_Usuario` varchar(50) NOT NULL,
  `Senha` varchar(255) NOT NULL,
  `Telefone_Comercial` varchar(20) DEFAULT NULL,
  `Telefone_Celular` varchar(20) DEFAULT NULL,
  `Telefone_Residencial` varchar(20) DEFAULT NULL,
  `Id_Nivel_Acesso` tinyint(3) UNSIGNED NOT NULL,
  `Status_Usuario` enum('Ativo','Inativo') DEFAULT 'Ativo'
) ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE `endereco` (
  `Id_Endereco` int(10) UNSIGNED NOT NULL,
  `Logradouro` varchar(100) NOT NULL,
  `Numero` varchar(10) NOT NULL,
  `Complemento` varchar(50) DEFAULT NULL,
  `CEP` varchar(10) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `UF` char(2) NOT NULL,
  `Id_Cliente` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fabricante`
--

CREATE TABLE `fabricante` (
  `Id_Fabricante` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Contato` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `foto`
--

CREATE TABLE `foto` (
  `Id_Foto` int(10) UNSIGNED NOT NULL,
  `Imagem` varchar(255) NOT NULL,
  `Id_Produto` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `log`
--

CREATE TABLE `log` (
  `Id_Log` int(10) UNSIGNED NOT NULL,
  `Id_Usuario` int(10) UNSIGNED NOT NULL,
  `Data_Hora` datetime NOT NULL DEFAULT current_timestamp(),
  `Tipo_Acao` varchar(50) NOT NULL,
  `Detalhes_Acao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `nivel_acesso`
--

CREATE TABLE `nivel_acesso` (
  `Id_Nivel_Acesso` tinyint(3) UNSIGNED NOT NULL,
  `Nome_Nivel` varchar(50) NOT NULL,
  `Descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `nutricionista`
--

CREATE TABLE `nutricionista` (
  `Id_Nutricionista` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefone` varchar(20) DEFAULT NULL,
  `CRN` varchar(20) NOT NULL,
  `Especialidade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `Id_Produto` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Descricao` text DEFAULT NULL,
  `Quantidade` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `Preco` decimal(10,2) NOT NULL,
  `Id_Categoria` int(10) UNSIGNED NOT NULL,
  `Id_Agricultor` int(10) UNSIGNED NOT NULL,
  `Id_Fabricante` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agricultor`
--
ALTER TABLE `agricultor`
  ADD PRIMARY KEY (`Id_Agricultor`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Índices de tabela `agricultor_fisico`
--
ALTER TABLE `agricultor_fisico`
  ADD PRIMARY KEY (`Id_Agricultor`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- Índices de tabela `agricultor_juridico`
--
ALTER TABLE `agricultor_juridico`
  ADD PRIMARY KEY (`Id_Agricultor`),
  ADD UNIQUE KEY `CNPJ` (`CNPJ`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`Id_Categoria`),
  ADD UNIQUE KEY `Nome` (`Nome`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_Cliente`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Nome_Usuario` (`Nome_Usuario`),
  ADD KEY `fk_nivel_acesso` (`Id_Nivel_Acesso`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`Id_Endereco`),
  ADD KEY `fk_cliente_endereco` (`Id_Cliente`);

--
-- Índices de tabela `fabricante`
--
ALTER TABLE `fabricante`
  ADD PRIMARY KEY (`Id_Fabricante`),
  ADD UNIQUE KEY `Nome` (`Nome`);

--
-- Índices de tabela `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`Id_Foto`),
  ADD KEY `fk_produto_foto` (`Id_Produto`);

--
-- Índices de tabela `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`Id_Log`),
  ADD KEY `fk_usuario_log` (`Id_Usuario`);

--
-- Índices de tabela `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  ADD PRIMARY KEY (`Id_Nivel_Acesso`),
  ADD UNIQUE KEY `Nome_Nivel` (`Nome_Nivel`);

--
-- Índices de tabela `nutricionista`
--
ALTER TABLE `nutricionista`
  ADD PRIMARY KEY (`Id_Nutricionista`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `CRN` (`CRN`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`Id_Produto`),
  ADD KEY `fk_categoria_produto` (`Id_Categoria`),
  ADD KEY `fk_agricultor_produto` (`Id_Agricultor`),
  ADD KEY `fk_fabricante_produto` (`Id_Fabricante`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agricultor`
--
ALTER TABLE `agricultor`
  MODIFY `Id_Agricultor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `Id_Categoria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_Cliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `Id_Endereco` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fabricante`
--
ALTER TABLE `fabricante`
  MODIFY `Id_Fabricante` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `foto`
--
ALTER TABLE `foto`
  MODIFY `Id_Foto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `log`
--
ALTER TABLE `log`
  MODIFY `Id_Log` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nivel_acesso`
--
ALTER TABLE `nivel_acesso`
  MODIFY `Id_Nivel_Acesso` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nutricionista`
--
ALTER TABLE `nutricionista`
  MODIFY `Id_Nutricionista` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `Id_Produto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `agricultor_fisico`
--
ALTER TABLE `agricultor_fisico`
  ADD CONSTRAINT `fk_agricultor_fisico` FOREIGN KEY (`Id_Agricultor`) REFERENCES `agricultor` (`Id_Agricultor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `agricultor_juridico`
--
ALTER TABLE `agricultor_juridico`
  ADD CONSTRAINT `fk_agricultor_juridico` FOREIGN KEY (`Id_Agricultor`) REFERENCES `agricultor` (`Id_Agricultor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_nivel_acesso` FOREIGN KEY (`Id_Nivel_Acesso`) REFERENCES `nivel_acesso` (`Id_Nivel_Acesso`) ON UPDATE CASCADE;

--
-- Restrições para tabelas `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_cliente_endereco` FOREIGN KEY (`Id_Cliente`) REFERENCES `cliente` (`Id_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_produto_foto` FOREIGN KEY (`Id_Produto`) REFERENCES `produto` (`Id_Produto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `fk_usuario_log` FOREIGN KEY (`Id_Usuario`) REFERENCES `cliente` (`Id_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_agricultor_produto` FOREIGN KEY (`Id_Agricultor`) REFERENCES `agricultor` (`Id_Agricultor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_categoria_produto` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`Id_Categoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_fabricante_produto` FOREIGN KEY (`Id_Fabricante`) REFERENCES `fabricante` (`Id_Fabricante`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
