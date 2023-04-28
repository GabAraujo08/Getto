-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Abr-2023 às 21:06
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdgetto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbadministrador`
--

CREATE TABLE `tbadministrador` (
  `idAdministrador` int(11) NOT NULL,
  `nomeAdministrador` varchar(150) NOT NULL,
  `emailAdministrador` varchar(150) NOT NULL,
  `loginAdministrador` varchar(20) NOT NULL,
  `senhaAdministrador` varchar(300) DEFAULT NULL,
  `foneAdministrador` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbadministrador`
--

INSERT INTO `tbadministrador` (`idAdministrador`, `nomeAdministrador`, `emailAdministrador`, `loginAdministrador`, `senhaAdministrador`, `foneAdministrador`) VALUES
(1, 'Luana Cruz', 'luacruz2014@gmail.com', 'Lua', '$2y$10$Y3AX7yf9gxtTDJ80rVgUzedbPqF6DCh3COvNlVL4S0GsE2zsD1yrW', '11961255631');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbartista`
--

CREATE TABLE `tbartista` (
  `idArtista` int(11) NOT NULL,
  `generoArtista` varchar(50) NOT NULL,
  `bioArtista` varchar(300) NOT NULL,
  `portfolio` varchar(300) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbartista`
--

INSERT INTO `tbartista` (`idArtista`, `generoArtista`, `bioArtista`, `portfolio`, `idUsuario`) VALUES
(1, 'AC', '', 'fjdkgdfhdhjgddhdjhgdjgdhdhgh', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcomentario`
--

CREATE TABLE `tbcomentario` (
  `idComentario` int(11) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `statusComentario` varchar(80) NOT NULL,
  `numCurtidasComentario` int(11) DEFAULT NULL,
  `idPublicacao` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcontapixartista`
--

CREATE TABLE `tbcontapixartista` (
  `idContaPixArtista` int(11) NOT NULL,
  `nomeContaPixArtista` varchar(50) NOT NULL,
  `tipoContaPixArtista` varchar(300) NOT NULL,
  `chaveContaPixArtista` varchar(300) NOT NULL,
  `idArtista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdenuncia`
--

CREATE TABLE `tbdenuncia` (
  `idDenuncia` int(11) NOT NULL,
  `dataDenuncia` datetime NOT NULL DEFAULT current_timestamp(),
  `descDenuncia` varchar(300) DEFAULT NULL,
  `statusDenuncia` varchar(50) NOT NULL,
  `idTipoDenuncia` int(11) DEFAULT NULL,
  `idAdministrador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdenunciausuario`
--

CREATE TABLE `tbdenunciausuario` (
  `idDenunciaUsuario` int(11) NOT NULL,
  `idDenuncia` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbevento`
--

CREATE TABLE `tbevento` (
  `idEvento` int(11) NOT NULL,
  `horarioInicioEvento` datetime NOT NULL,
  `horarioFinalEvento` datetime NOT NULL,
  `dataEvento` datetime NOT NULL,
  `quantidadeCurtidas` int(11) DEFAULT NULL,
  `descEvento` varchar(300) DEFAULT NULL,
  `tituloEvento` varchar(50) DEFAULT NULL,
  `statusEvento` varchar(50) DEFAULT NULL,
  `logradouroEvento` varchar(150) DEFAULT NULL,
  `imagemEvento` varchar(100) DEFAULT NULL,
  `numLogEvento` int(11) DEFAULT NULL,
  `cepEvento` char(9) DEFAULT NULL,
  `bairroEvento` varchar(100) DEFAULT NULL,
  `cidadeEvento` varchar(100) DEFAULT NULL,
  `estadoEvento` varchar(100) DEFAULT NULL,
  `idArtista` int(11) DEFAULT NULL,
  `idTipoArte` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmidia`
--

CREATE TABLE `tbmidia` (
  `idMidia` int(11) NOT NULL,
  `arquivoMidia` varchar(100) NOT NULL,
  `idTipoMidia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmidiamomentos`
--

CREATE TABLE `tbmidiamomentos` (
  `idMidiaMomentos` int(11) NOT NULL,
  `idMidia` int(11) DEFAULT NULL,
  `idMomentos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmidiapublicacao`
--

CREATE TABLE `tbmidiapublicacao` (
  `idMidiaPublicacao` int(11) NOT NULL,
  `idMidia` int(11) DEFAULT NULL,
  `idPublicacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmomentos`
--

CREATE TABLE `tbmomentos` (
  `idMomentos` int(11) NOT NULL,
  `dataMomentos` datetime NOT NULL DEFAULT current_timestamp(),
  `idArtista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpublicacao`
--

CREATE TABLE `tbpublicacao` (
  `idPublicacao` int(11) NOT NULL,
  `horarioPublicacao` datetime NOT NULL DEFAULT current_timestamp(),
  `quantidadeCurtidas` int(11) DEFAULT NULL,
  `descPublicacao` varchar(100) DEFAULT NULL,
  `tituloPublicacao` varchar(50) DEFAULT NULL,
  `statusPublicacao` varchar(50) DEFAULT NULL,
  `idArtista` int(11) DEFAULT NULL,
  `idTipoArte` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbseguidores`
--

CREATE TABLE `tbseguidores` (
  `idSeguidores` int(11) NOT NULL,
  `idArtista` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtipoarte`
--

CREATE TABLE `tbtipoarte` (
  `idTipoArte` int(11) NOT NULL,
  `nomeTipoArte` varchar(20) NOT NULL,
  `imagemTipoArte` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtipodenuncia`
--

CREATE TABLE `tbtipodenuncia` (
  `idTipoDenuncia` int(11) NOT NULL,
  `nomeTipoDenuncia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtipomidia`
--

CREATE TABLE `tbtipomidia` (
  `idTipoMidia` int(11) NOT NULL,
  `nomeTipoMidia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(150) NOT NULL,
  `emailUsuario` varchar(150) NOT NULL,
  `nicknameUsuario` varchar(20) NOT NULL,
  `senhaUsuario` varchar(300) DEFAULT NULL,
  `foneUsuario` varchar(15) DEFAULT NULL,
  `fotoPerfilUsuario` varchar(100) DEFAULT NULL,
  `statusContaUsuario` varchar(50) DEFAULT NULL,
  `papelParedeUsuario` varchar(100) DEFAULT NULL,
  `nivelContaUsuario` varchar(100) DEFAULT NULL,
  `cidadeUsuario` varchar(100) DEFAULT NULL,
  `estadoUsuario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `nicknameUsuario`, `senhaUsuario`, `foneUsuario`, `fotoPerfilUsuario`, `statusContaUsuario`, `papelParedeUsuario`, `nivelContaUsuario`, `cidadeUsuario`, `estadoUsuario`) VALUES
(1, 'Luana', 'luacruz2014@gmail.com', '@lua', '123', '(11) 96125-5631', ' ', 'Normal', ' ', '1', 'São Paulo', 'SP'),
(2, 'Eddie Murphy', 'eddiezao@gmail.com', '@eddie', '$2y$10$naNsF59zCPEbBsa98SyPG.Xsk3diRMJ34WCiV32bZaX7Z4QPJrgdC', '21325456568', '2.jpg', 'Normal', '2.jpg', '2', 'Canudos', 'BA');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbadministrador`
--
ALTER TABLE `tbadministrador`
  ADD PRIMARY KEY (`idAdministrador`),
  ADD UNIQUE KEY `emailAdministrador` (`emailAdministrador`),
  ADD UNIQUE KEY `loginAdministrador` (`loginAdministrador`);

--
-- Índices para tabela `tbartista`
--
ALTER TABLE `tbartista`
  ADD PRIMARY KEY (`idArtista`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbcomentario`
--
ALTER TABLE `tbcomentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idPublicacao` (`idPublicacao`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbcontapixartista`
--
ALTER TABLE `tbcontapixartista`
  ADD PRIMARY KEY (`idContaPixArtista`),
  ADD KEY `idArtista` (`idArtista`);

--
-- Índices para tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD PRIMARY KEY (`idDenuncia`),
  ADD KEY `idTipoDenuncia` (`idTipoDenuncia`),
  ADD KEY `idAdministrador` (`idAdministrador`);

--
-- Índices para tabela `tbdenunciausuario`
--
ALTER TABLE `tbdenunciausuario`
  ADD PRIMARY KEY (`idDenunciaUsuario`),
  ADD KEY `idDenuncia` (`idDenuncia`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbevento`
--
ALTER TABLE `tbevento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `idArtista` (`idArtista`),
  ADD KEY `idTipoArte` (`idTipoArte`);

--
-- Índices para tabela `tbmidia`
--
ALTER TABLE `tbmidia`
  ADD PRIMARY KEY (`idMidia`),
  ADD KEY `idTipoMidia` (`idTipoMidia`);

--
-- Índices para tabela `tbmidiamomentos`
--
ALTER TABLE `tbmidiamomentos`
  ADD PRIMARY KEY (`idMidiaMomentos`),
  ADD KEY `idMidia` (`idMidia`),
  ADD KEY `idMomentos` (`idMomentos`);

--
-- Índices para tabela `tbmidiapublicacao`
--
ALTER TABLE `tbmidiapublicacao`
  ADD PRIMARY KEY (`idMidiaPublicacao`),
  ADD KEY `idMidia` (`idMidia`),
  ADD KEY `idPublicacao` (`idPublicacao`);

--
-- Índices para tabela `tbmomentos`
--
ALTER TABLE `tbmomentos`
  ADD PRIMARY KEY (`idMomentos`),
  ADD KEY `idArtista` (`idArtista`);

--
-- Índices para tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD PRIMARY KEY (`idPublicacao`),
  ADD KEY `idArtista` (`idArtista`),
  ADD KEY `idTipoArte` (`idTipoArte`);

--
-- Índices para tabela `tbseguidores`
--
ALTER TABLE `tbseguidores`
  ADD PRIMARY KEY (`idSeguidores`),
  ADD KEY `idArtista` (`idArtista`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `tbtipoarte`
--
ALTER TABLE `tbtipoarte`
  ADD PRIMARY KEY (`idTipoArte`);

--
-- Índices para tabela `tbtipodenuncia`
--
ALTER TABLE `tbtipodenuncia`
  ADD PRIMARY KEY (`idTipoDenuncia`);

--
-- Índices para tabela `tbtipomidia`
--
ALTER TABLE `tbtipomidia`
  ADD PRIMARY KEY (`idTipoMidia`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `emailUsuario` (`emailUsuario`),
  ADD UNIQUE KEY `nicknameUsuario` (`nicknameUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadministrador`
--
ALTER TABLE `tbadministrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbartista`
--
ALTER TABLE `tbartista`
  MODIFY `idArtista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbcomentario`
--
ALTER TABLE `tbcomentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcontapixartista`
--
ALTER TABLE `tbcontapixartista`
  MODIFY `idContaPixArtista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  MODIFY `idDenuncia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbdenunciausuario`
--
ALTER TABLE `tbdenunciausuario`
  MODIFY `idDenunciaUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbevento`
--
ALTER TABLE `tbevento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmidia`
--
ALTER TABLE `tbmidia`
  MODIFY `idMidia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmidiamomentos`
--
ALTER TABLE `tbmidiamomentos`
  MODIFY `idMidiaMomentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmidiapublicacao`
--
ALTER TABLE `tbmidiapublicacao`
  MODIFY `idMidiaPublicacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmomentos`
--
ALTER TABLE `tbmomentos`
  MODIFY `idMomentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  MODIFY `idPublicacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbseguidores`
--
ALTER TABLE `tbseguidores`
  MODIFY `idSeguidores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtipoarte`
--
ALTER TABLE `tbtipoarte`
  MODIFY `idTipoArte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtipodenuncia`
--
ALTER TABLE `tbtipodenuncia`
  MODIFY `idTipoDenuncia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbtipomidia`
--
ALTER TABLE `tbtipomidia`
  MODIFY `idTipoMidia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbartista`
--
ALTER TABLE `tbartista`
  ADD CONSTRAINT `tbartista_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbcomentario`
--
ALTER TABLE `tbcomentario`
  ADD CONSTRAINT `tbcomentario_ibfk_1` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`),
  ADD CONSTRAINT `tbcomentario_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbcontapixartista`
--
ALTER TABLE `tbcontapixartista`
  ADD CONSTRAINT `tbcontapixartista_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`);

--
-- Limitadores para a tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD CONSTRAINT `tbdenuncia_ibfk_1` FOREIGN KEY (`idTipoDenuncia`) REFERENCES `tbtipodenuncia` (`idTipoDenuncia`),
  ADD CONSTRAINT `tbdenuncia_ibfk_2` FOREIGN KEY (`idAdministrador`) REFERENCES `tbadministrador` (`idAdministrador`);

--
-- Limitadores para a tabela `tbdenunciausuario`
--
ALTER TABLE `tbdenunciausuario`
  ADD CONSTRAINT `tbdenunciausuario_ibfk_1` FOREIGN KEY (`idDenuncia`) REFERENCES `tbdenuncia` (`idDenuncia`),
  ADD CONSTRAINT `tbdenunciausuario_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Limitadores para a tabela `tbevento`
--
ALTER TABLE `tbevento`
  ADD CONSTRAINT `tbevento_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`),
  ADD CONSTRAINT `tbevento_ibfk_2` FOREIGN KEY (`idTipoArte`) REFERENCES `tbtipoarte` (`idTipoArte`);

--
-- Limitadores para a tabela `tbmidia`
--
ALTER TABLE `tbmidia`
  ADD CONSTRAINT `tbmidia_ibfk_1` FOREIGN KEY (`idTipoMidia`) REFERENCES `tbtipomidia` (`idTipoMidia`);

--
-- Limitadores para a tabela `tbmidiamomentos`
--
ALTER TABLE `tbmidiamomentos`
  ADD CONSTRAINT `tbmidiamomentos_ibfk_1` FOREIGN KEY (`idMidia`) REFERENCES `tbmidia` (`idMidia`),
  ADD CONSTRAINT `tbmidiamomentos_ibfk_2` FOREIGN KEY (`idMomentos`) REFERENCES `tbmomentos` (`idMomentos`);

--
-- Limitadores para a tabela `tbmidiapublicacao`
--
ALTER TABLE `tbmidiapublicacao`
  ADD CONSTRAINT `tbmidiapublicacao_ibfk_1` FOREIGN KEY (`idMidia`) REFERENCES `tbmidia` (`idMidia`),
  ADD CONSTRAINT `tbmidiapublicacao_ibfk_2` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`);

--
-- Limitadores para a tabela `tbmomentos`
--
ALTER TABLE `tbmomentos`
  ADD CONSTRAINT `tbmomentos_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`);

--
-- Limitadores para a tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD CONSTRAINT `tbpublicacao_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`),
  ADD CONSTRAINT `tbpublicacao_ibfk_2` FOREIGN KEY (`idTipoArte`) REFERENCES `tbtipoarte` (`idTipoArte`);

--
-- Limitadores para a tabela `tbseguidores`
--
ALTER TABLE `tbseguidores`
  ADD CONSTRAINT `tbseguidores_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`),
  ADD CONSTRAINT `tbseguidores_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
