-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 08:06 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdgetto`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrador`
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
-- Dumping data for table `tbadministrador`
--

INSERT INTO `tbadministrador` (`idAdministrador`, `nomeAdministrador`, `emailAdministrador`, `loginAdministrador`, `senhaAdministrador`, `foneAdministrador`) VALUES
(1, 'Luana Cruz', 'luacruz2014@gmail.com', 'Lua', '$2y$10$Y3AX7yf9gxtTDJ80rVgUzedbPqF6DCh3COvNlVL4S0GsE2zsD1yrW', '11961255631');

-- --------------------------------------------------------

--
-- Table structure for table `tbartista`
--

CREATE TABLE `tbartista` (
  `idArtista` int(11) NOT NULL,
  `generoArtista` varchar(50) NOT NULL,
  `bioArtista` varchar(300) NOT NULL,
  `portfolio` varchar(300) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbartista`
--

INSERT INTO `tbartista` (`idArtista`, `generoArtista`, `bioArtista`, `portfolio`, `idUsuario`) VALUES
(1, 'AC', '', 'fjdkgdfhdhjgddhdjhgdjgdhdhgh', 2),
(2, 'AC', 'maior rapper da historia', 'j7tyuhgoli9pi0opo7yhdrgfdr', 3),
(3, 'AC', 'cantor e compositor', 'j7tyuhgoli9pi0opo7yhdrgfdr', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbcomentario`
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
-- Table structure for table `tbcontapixartista`
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
-- Table structure for table `tbcurtida`
--

CREATE TABLE `tbcurtida` (
  `idCurtida` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idPublicacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbdenuncia`
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
-- Table structure for table `tbdenunciausuario`
--

CREATE TABLE `tbdenunciausuario` (
  `idDenunciaUsuario` int(11) NOT NULL,
  `idDenuncia` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbevento`
--

CREATE TABLE `tbevento` (
  `idEvento` int(11) NOT NULL,
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
  `idTipoArte` int(11) DEFAULT NULL,
  `dataEvento` varchar(10) NOT NULL,
  `horarioFinalEvento` varchar(10) NOT NULL,
  `horarioInicioEvento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbmidia`
--

CREATE TABLE `tbmidia` (
  `idMidia` int(11) NOT NULL,
  `arquivoMidia` varchar(100) NOT NULL,
  `idTipoMidia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmidia`
--

INSERT INTO `tbmidia` (`idMidia`, `arquivoMidia`, `idTipoMidia`) VALUES
(1, '1jfif', 3),
(2, '2jfif', 3),
(3, '3jfif', 3),
(4, '4.jpg', 3),
(5, '5.jpg', 3),
(6, '6.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbmidiamomentos`
--

CREATE TABLE `tbmidiamomentos` (
  `idMidiaMomentos` int(11) NOT NULL,
  `idMidia` int(11) DEFAULT NULL,
  `idMomentos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbmidiapublicacao`
--

CREATE TABLE `tbmidiapublicacao` (
  `idMidiaPublicacao` int(11) NOT NULL,
  `idMidia` int(11) DEFAULT NULL,
  `idPublicacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmidiapublicacao`
--

INSERT INTO `tbmidiapublicacao` (`idMidiaPublicacao`, `idMidia`, `idPublicacao`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbmomentos`
--

CREATE TABLE `tbmomentos` (
  `idMomentos` int(11) NOT NULL,
  `dataMomentos` datetime NOT NULL DEFAULT current_timestamp(),
  `idArtista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbpublicacao`
--

CREATE TABLE `tbpublicacao` (
  `idPublicacao` int(11) NOT NULL,
  `horarioPublicacao` datetime NOT NULL DEFAULT current_timestamp(),
  `descPublicacao` varchar(100) DEFAULT NULL,
  `tituloPublicacao` varchar(50) DEFAULT NULL,
  `statusPublicacao` varchar(50) DEFAULT NULL,
  `idArtista` int(11) DEFAULT NULL,
  `idTipoArte` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpublicacao`
--

INSERT INTO `tbpublicacao` (`idPublicacao`, `horarioPublicacao`, `descPublicacao`, `tituloPublicacao`, `statusPublicacao`, `idArtista`, `idTipoArte`) VALUES
(1, '2023-05-11 11:10:32', 'tbt dessa época!', NULL, 'Normal', 1, 1),
(2, '2023-05-11 11:11:29', 'Obrigado por mais um premio!', NULL, 'Normal', 1, 1),
(3, '2023-05-11 11:13:24', 'produzindo nova musica!', NULL, 'Normal', 2, 9),
(4, '2023-05-11 11:14:08', 'show de ontem', NULL, 'Normal', 2, 9),
(5, '2023-05-11 11:15:11', 'premiação grammy', NULL, 'Normal', 3, 9),
(6, '2023-05-11 11:15:41', 'gravando a bomba', NULL, 'Normal', 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbseguidores`
--

CREATE TABLE `tbseguidores` (
  `idSeguidores` int(11) NOT NULL,
  `idArtista` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbseguidores`
--

INSERT INTO `tbseguidores` (`idSeguidores`, `idArtista`, `idUsuario`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 2, 2),
(5, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbtipoarte`
--

CREATE TABLE `tbtipoarte` (
  `idTipoArte` int(11) NOT NULL,
  `nomeTipoArte` varchar(20) NOT NULL,
  `imagemTipoArte` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbtipoarte`
--

INSERT INTO `tbtipoarte` (`idTipoArte`, `nomeTipoArte`, `imagemTipoArte`) VALUES
(1, 'Fotografia', '1'),
(2, 'Artesanato', '2'),
(3, 'Literatura', '3'),
(4, 'Dança', '4'),
(5, 'Escultura', '5'),
(6, 'Pintura', '6'),
(7, 'Grafite', '7'),
(8, 'Artes Cênicas', '8'),
(9, 'Musica', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tbtipodenuncia`
--

CREATE TABLE `tbtipodenuncia` (
  `idTipoDenuncia` int(11) NOT NULL,
  `nomeTipoDenuncia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbtipomidia`
--

CREATE TABLE `tbtipomidia` (
  `idTipoMidia` int(11) NOT NULL,
  `nomeTipoMidia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbtipomidia`
--

INSERT INTO `tbtipomidia` (`idTipoMidia`, `nomeTipoMidia`) VALUES
(1, 'Audio'),
(2, 'Vídeo'),
(3, 'Imagem');

-- --------------------------------------------------------

--
-- Table structure for table `tbusuario`
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
-- Dumping data for table `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `nicknameUsuario`, `senhaUsuario`, `foneUsuario`, `fotoPerfilUsuario`, `statusContaUsuario`, `papelParedeUsuario`, `nivelContaUsuario`, `cidadeUsuario`, `estadoUsuario`) VALUES
(1, 'Luana', 'luacruz2014@gmail.com', '@lua', '$2y$10$naNsF59zCPEbBsa98SyPG.Xsk3diRMJ34WCiV32bZaX7Z4QPJrgdC', '(11) 96125-5631', '1.jpg', 'Normal', '1jfif', '1', 'São Paulo', 'SP'),
(2, 'Eddie Murphy', 'eddiezao@gmail.com', '@eddie', '$2y$10$naNsF59zCPEbBsa98SyPG.Xsk3diRMJ34WCiV32bZaX7Z4QPJrgdC', '21325456568', '2.jpg', 'Normal', '2.jpg', '2', 'Canudos', 'BA'),
(3, 'Kanye West', 'kanye@gmail.com', '@Kanye', '$2y$10$pcvyZxEzWoPM6fdZuAssLuj1VWjw9oUfYo4O2nwdmd5Z7/bhlrDOm', '212434554757', '3.jpg', 'Normal', '3.png', '2', 'Manaus', 'AM'),
(4, 'kendrick', 'kendrick@gmail.com', '@duckworth', '$2y$10$9xYi7C/qJ1.OH6jfi/M.i.Cvks6txAtHicljblOM5dcjAzzEiu9G2', '11123123123', '4.jpg', 'Normal', '4.png', '2', 'piai', 'PI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadministrador`
--
ALTER TABLE `tbadministrador`
  ADD PRIMARY KEY (`idAdministrador`),
  ADD UNIQUE KEY `emailAdministrador` (`emailAdministrador`),
  ADD UNIQUE KEY `loginAdministrador` (`loginAdministrador`);

--
-- Indexes for table `tbartista`
--
ALTER TABLE `tbartista`
  ADD PRIMARY KEY (`idArtista`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `tbcomentario`
--
ALTER TABLE `tbcomentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idPublicacao` (`idPublicacao`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `tbcontapixartista`
--
ALTER TABLE `tbcontapixartista`
  ADD PRIMARY KEY (`idContaPixArtista`),
  ADD KEY `idArtista` (`idArtista`);

--
-- Indexes for table `tbcurtida`
--
ALTER TABLE `tbcurtida`
  ADD PRIMARY KEY (`idCurtida`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPublicacao` (`idPublicacao`);

--
-- Indexes for table `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD PRIMARY KEY (`idDenuncia`),
  ADD KEY `idTipoDenuncia` (`idTipoDenuncia`),
  ADD KEY `idAdministrador` (`idAdministrador`);

--
-- Indexes for table `tbdenunciausuario`
--
ALTER TABLE `tbdenunciausuario`
  ADD PRIMARY KEY (`idDenunciaUsuario`),
  ADD KEY `idDenuncia` (`idDenuncia`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `tbevento`
--
ALTER TABLE `tbevento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `idArtista` (`idArtista`),
  ADD KEY `idTipoArte` (`idTipoArte`);

--
-- Indexes for table `tbmidia`
--
ALTER TABLE `tbmidia`
  ADD PRIMARY KEY (`idMidia`),
  ADD KEY `idTipoMidia` (`idTipoMidia`);

--
-- Indexes for table `tbmidiamomentos`
--
ALTER TABLE `tbmidiamomentos`
  ADD PRIMARY KEY (`idMidiaMomentos`),
  ADD KEY `idMidia` (`idMidia`),
  ADD KEY `idMomentos` (`idMomentos`);

--
-- Indexes for table `tbmidiapublicacao`
--
ALTER TABLE `tbmidiapublicacao`
  ADD PRIMARY KEY (`idMidiaPublicacao`),
  ADD KEY `idMidia` (`idMidia`),
  ADD KEY `idPublicacao` (`idPublicacao`);

--
-- Indexes for table `tbmomentos`
--
ALTER TABLE `tbmomentos`
  ADD PRIMARY KEY (`idMomentos`),
  ADD KEY `idArtista` (`idArtista`);

--
-- Indexes for table `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD PRIMARY KEY (`idPublicacao`),
  ADD KEY `idArtista` (`idArtista`),
  ADD KEY `idTipoArte` (`idTipoArte`);

--
-- Indexes for table `tbseguidores`
--
ALTER TABLE `tbseguidores`
  ADD PRIMARY KEY (`idSeguidores`),
  ADD KEY `idArtista` (`idArtista`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indexes for table `tbtipoarte`
--
ALTER TABLE `tbtipoarte`
  ADD PRIMARY KEY (`idTipoArte`);

--
-- Indexes for table `tbtipodenuncia`
--
ALTER TABLE `tbtipodenuncia`
  ADD PRIMARY KEY (`idTipoDenuncia`);

--
-- Indexes for table `tbtipomidia`
--
ALTER TABLE `tbtipomidia`
  ADD PRIMARY KEY (`idTipoMidia`);

--
-- Indexes for table `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `emailUsuario` (`emailUsuario`),
  ADD UNIQUE KEY `nicknameUsuario` (`nicknameUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadministrador`
--
ALTER TABLE `tbadministrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbartista`
--
ALTER TABLE `tbartista`
  MODIFY `idArtista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbcomentario`
--
ALTER TABLE `tbcomentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbcontapixartista`
--
ALTER TABLE `tbcontapixartista`
  MODIFY `idContaPixArtista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbcurtida`
--
ALTER TABLE `tbcurtida`
  MODIFY `idCurtida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  MODIFY `idDenuncia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbdenunciausuario`
--
ALTER TABLE `tbdenunciausuario`
  MODIFY `idDenunciaUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbevento`
--
ALTER TABLE `tbevento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbmidia`
--
ALTER TABLE `tbmidia`
  MODIFY `idMidia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbmidiamomentos`
--
ALTER TABLE `tbmidiamomentos`
  MODIFY `idMidiaMomentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbmidiapublicacao`
--
ALTER TABLE `tbmidiapublicacao`
  MODIFY `idMidiaPublicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbmomentos`
--
ALTER TABLE `tbmomentos`
  MODIFY `idMomentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  MODIFY `idPublicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbseguidores`
--
ALTER TABLE `tbseguidores`
  MODIFY `idSeguidores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbtipoarte`
--
ALTER TABLE `tbtipoarte`
  MODIFY `idTipoArte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbtipodenuncia`
--
ALTER TABLE `tbtipodenuncia`
  MODIFY `idTipoDenuncia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbtipomidia`
--
ALTER TABLE `tbtipomidia`
  MODIFY `idTipoMidia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbartista`
--
ALTER TABLE `tbartista`
  ADD CONSTRAINT `tbartista_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Constraints for table `tbcomentario`
--
ALTER TABLE `tbcomentario`
  ADD CONSTRAINT `tbcomentario_ibfk_1` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`),
  ADD CONSTRAINT `tbcomentario_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Constraints for table `tbcontapixartista`
--
ALTER TABLE `tbcontapixartista`
  ADD CONSTRAINT `tbcontapixartista_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`);

--
-- Constraints for table `tbcurtida`
--
ALTER TABLE `tbcurtida`
  ADD CONSTRAINT `tbcurtida_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbcurtida_ibfk_2` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`);

--
-- Constraints for table `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD CONSTRAINT `tbdenuncia_ibfk_1` FOREIGN KEY (`idTipoDenuncia`) REFERENCES `tbtipodenuncia` (`idTipoDenuncia`),
  ADD CONSTRAINT `tbdenuncia_ibfk_2` FOREIGN KEY (`idAdministrador`) REFERENCES `tbadministrador` (`idAdministrador`);

--
-- Constraints for table `tbdenunciausuario`
--
ALTER TABLE `tbdenunciausuario`
  ADD CONSTRAINT `tbdenunciausuario_ibfk_1` FOREIGN KEY (`idDenuncia`) REFERENCES `tbdenuncia` (`idDenuncia`),
  ADD CONSTRAINT `tbdenunciausuario_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Constraints for table `tbevento`
--
ALTER TABLE `tbevento`
  ADD CONSTRAINT `tbevento_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`),
  ADD CONSTRAINT `tbevento_ibfk_2` FOREIGN KEY (`idTipoArte`) REFERENCES `tbtipoarte` (`idTipoArte`);

--
-- Constraints for table `tbmidia`
--
ALTER TABLE `tbmidia`
  ADD CONSTRAINT `tbmidia_ibfk_1` FOREIGN KEY (`idTipoMidia`) REFERENCES `tbtipomidia` (`idTipoMidia`);

--
-- Constraints for table `tbmidiamomentos`
--
ALTER TABLE `tbmidiamomentos`
  ADD CONSTRAINT `tbmidiamomentos_ibfk_1` FOREIGN KEY (`idMidia`) REFERENCES `tbmidia` (`idMidia`),
  ADD CONSTRAINT `tbmidiamomentos_ibfk_2` FOREIGN KEY (`idMomentos`) REFERENCES `tbmomentos` (`idMomentos`);

--
-- Constraints for table `tbmidiapublicacao`
--
ALTER TABLE `tbmidiapublicacao`
  ADD CONSTRAINT `tbmidiapublicacao_ibfk_1` FOREIGN KEY (`idMidia`) REFERENCES `tbmidia` (`idMidia`),
  ADD CONSTRAINT `tbmidiapublicacao_ibfk_2` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`);

--
-- Constraints for table `tbmomentos`
--
ALTER TABLE `tbmomentos`
  ADD CONSTRAINT `tbmomentos_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`);

--
-- Constraints for table `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD CONSTRAINT `tbpublicacao_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`),
  ADD CONSTRAINT `tbpublicacao_ibfk_2` FOREIGN KEY (`idTipoArte`) REFERENCES `tbtipoarte` (`idTipoArte`);

--
-- Constraints for table `tbseguidores`
--
ALTER TABLE `tbseguidores`
  ADD CONSTRAINT `tbseguidores_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`),
  ADD CONSTRAINT `tbseguidores_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
