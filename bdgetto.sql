-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/06/2023 às 05:32
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

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
-- Estrutura para tabela `tbadministrador`
--

CREATE TABLE `tbadministrador` (
  `idAdministrador` int(11) NOT NULL,
  `nomeAdministrador` varchar(150) NOT NULL,
  `emailAdministrador` varchar(150) NOT NULL,
  `loginAdministrador` varchar(20) NOT NULL,
  `senhaAdministrador` varchar(300) DEFAULT NULL,
  `foneAdministrador` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadministrador`
--

INSERT INTO `tbadministrador` (`idAdministrador`, `nomeAdministrador`, `emailAdministrador`, `loginAdministrador`, `senhaAdministrador`, `foneAdministrador`) VALUES
(1, 'Luana Cruz', 'luacruz2014@gmail.com', 'Lua', '$2y$10$Y3AX7yf9gxtTDJ80rVgUzedbPqF6DCh3COvNlVL4S0GsE2zsD1yrW', '11961255631');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbartista`
--

CREATE TABLE `tbartista` (
  `idArtista` int(11) NOT NULL,
  `generoArtista` varchar(50) NOT NULL,
  `bioArtista` varchar(300) NOT NULL,
  `portfolio` varchar(300) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbartista`
--

INSERT INTO `tbartista` (`idArtista`, `generoArtista`, `bioArtista`, `portfolio`, `idUsuario`) VALUES
(1, 'AC', '', 'fjdkgdfhdhjgddhdjhgdjgdhdhgh', 2),
(2, 'AC', 'maior rapper da historia', 'j7tyuhgoli9pi0opo7yhdrgfdr', 3),
(3, 'AC', 'cantor e compositor', 'j7tyuhgoli9pi0opo7yhdrgfdr', 4),
(4, 'Feminino', '\"por que muitos dominam a arte de pintar, mas não a de criar\"', 'vjfblcbnmklmhnblhvjgcfxdf', 5),
(5, 'Feminino', '\"Você me traz sorte.....\" -- Talismã', 'vjfblcbnmklmhnblhvjgcfxdf', 6),
(6, 'Feminino', 'Meu samba, minha Mangueira!', 'vjfblcbnmklmhnblhvjgcfxdf', 7),
(7, 'Feminino', 'Escritora e Ativista', 'vjfblcbnmklmhnblhvjgcfxdf', 8),
(8, 'Masculino', 'Atriz', 'vjfblcbnmklmhnblhvjgcfxdf', 9),
(9, 'Masculino', '', 'vjfblcbnmklmhnblhvjgcfxdf', 10),
(10, 'Masculino', 'Cantor O maior de Todos', 'vjfblcbnmklmhnblhvjgcfxdf', 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcomentario`
--

CREATE TABLE `tbcomentario` (
  `idComentario` int(11) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `statusComentario` varchar(80) NOT NULL,
  `numCurtidasComentario` int(11) DEFAULT NULL,
  `idPublicacao` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `horaComentario` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcomentario`
--

INSERT INTO `tbcomentario` (`idComentario`, `comentario`, `statusComentario`, `numCurtidasComentario`, `idPublicacao`, `idUsuario`, `horaComentario`) VALUES
(1, '\r\n                  desculpa\r\n                                ', 'Normal', 0, 3, 2, '2023-06-04 17:07:21'),
(2, 'Bela Musica!\r\n                                                                    ', 'Normal', 0, 16, 8, '2023-06-21 00:09:12'),
(3, 'O tempo passa mesmo\r\n                                                                    ', 'Normal', 0, 20, 8, '2023-06-21 00:09:32'),
(4, 'Amo essa!\r\n                                                                    ', 'Normal', 0, 12, 8, '2023-06-21 00:09:55'),
(5, 'kkkkkkkkkkkkk!                                                    ', 'Normal', 0, 15, 8, '2023-06-21 00:10:19'),
(6, 'imagem tem fala!!!!!\r\n                                                        ', 'Normal', 0, 11, 8, '2023-06-21 00:13:43'),
(7, '\r\n                        merecido!!!!!!!\r\n                                ', 'Normal', 0, 2, 6, '2023-06-21 00:19:59'),
(8, '\r\n              já vou  adquirir o meu!                                          ', 'Normal', 0, 21, 6, '2023-06-21 00:20:31'),
(9, 'É GETTO é o nosso lar!\r\n                                                                    ', 'Normal', 0, 26, 5, '2023-06-21 00:24:46'),
(10, '\r\n        amooooooooooo!\r\n                                                            ', 'Normal', 0, 25, 5, '2023-06-21 00:25:09'),
(11, 'lindaaaaaaaaaaaaaaa!\r\n                                                                    ', 'Normal', 0, 24, 5, '2023-06-21 00:25:25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcontapixartista`
--

CREATE TABLE `tbcontapixartista` (
  `idContaPixArtista` int(11) NOT NULL,
  `nomeContaPixArtista` varchar(50) NOT NULL,
  `tipoContaPixArtista` varchar(300) NOT NULL,
  `chaveContaPixArtista` varchar(300) NOT NULL,
  `idArtista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcontapixartista`
--

INSERT INTO `tbcontapixartista` (`idContaPixArtista`, `nomeContaPixArtista`, `tipoContaPixArtista`, `chaveContaPixArtista`, `idArtista`) VALUES
(1, 'kika', 'TELEFONE', '119847575574', 4),
(2, 'Iza', 'CNPJ', '2347890--987654', 5),
(3, 'djamila', 'CPF', '119847575574', 7),
(4, 'Jessica Cores', 'CNPJ', '1234567890', 8),
(5, 'peri', 'CPF', '119847575574', 9),
(6, 'bacooo', 'ALEATORIA', '2347890--987654', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcurtida`
--

CREATE TABLE `tbcurtida` (
  `idCurtida` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `idPublicacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcurtida`
--

INSERT INTO `tbcurtida` (`idCurtida`, `idUsuario`, `idPublicacao`) VALUES
(1, 7, 20),
(2, 7, 16),
(3, 7, 15),
(4, 7, 12),
(5, 7, 6),
(6, 7, 5),
(7, 7, 4),
(8, 7, 3),
(9, 7, 18),
(10, 7, 17),
(11, 7, 14),
(12, 8, 20),
(13, 8, 16),
(14, 8, 12),
(15, 8, 15),
(16, 8, 11),
(17, 6, 2),
(18, 6, 22),
(19, 6, 18),
(20, 6, 14),
(21, 5, 26),
(22, 5, 25),
(23, 5, 24),
(24, 5, 23),
(25, 5, 16),
(26, 5, 20),
(27, 5, 15),
(28, 5, 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdenuncia`
--

CREATE TABLE `tbdenuncia` (
  `idDenuncia` int(11) NOT NULL,
  `dataDenuncia` datetime NOT NULL DEFAULT current_timestamp(),
  `descDenuncia` varchar(300) DEFAULT NULL,
  `statusDenuncia` varchar(50) NOT NULL,
  `idTipoDenuncia` int(11) DEFAULT NULL,
  `idAdministrador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbdenunciausuario`
--

CREATE TABLE `tbdenunciausuario` (
  `idDenunciaUsuario` int(11) NOT NULL,
  `idDenuncia` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `tipoUsuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbevento`
--

CREATE TABLE `tbevento` (
  `idEvento` int(11) NOT NULL,
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
  `horarioInicioEvento` varchar(10) NOT NULL,
  `linkIng` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmidia`
--

CREATE TABLE `tbmidia` (
  `idMidia` int(11) NOT NULL,
  `arquivoMidia` varchar(100) NOT NULL,
  `idTipoMidia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbmidia`
--

INSERT INTO `tbmidia` (`idMidia`, `arquivoMidia`, `idTipoMidia`) VALUES
(1, '1jfif', 3),
(2, '2jfif', 3),
(3, '3jfif', 3),
(4, '4.jpg', 3),
(5, '5.jpg', 3),
(6, '6.jpg', 3),
(11, '6492636657843.jpg', 3),
(12, '649263b75842d.m4a', 1),
(13, '6492643e90e5a.jpg', 3),
(14, '649264bfbfff0.jpg', 3),
(15, '6492661d1119e.mp4', 2),
(16, '64926744ef982.mp4', 2),
(17, '6492677d105aa.jpg', 3),
(18, '649267b9b7657.jpg', 3),
(19, '64926902a2aa6.jpg', 3),
(20, '64926a57b7a49.jpg', 3),
(21, '64926a79e5e17.jpg', 3),
(22, '64926b3c1749f.jpg', 3),
(23, '64926b659fce5.jpg', 3),
(24, '64926b9326d66.m4a', 1),
(25, '64926bd4b41dc.mp4', 2),
(26, '64926ce2c202f.jpg', 3),
(27, '64926d0dd9bc0webp', 3),
(28, '64926d458d573.jpg', 3),
(29, '64926e39e2945.jpg', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmidiamomentos`
--

CREATE TABLE `tbmidiamomentos` (
  `idMidiaMomentos` int(11) NOT NULL,
  `idMidia` int(11) DEFAULT NULL,
  `idMomentos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmidiapublicacao`
--

CREATE TABLE `tbmidiapublicacao` (
  `idMidiaPublicacao` int(11) NOT NULL,
  `idMidia` int(11) DEFAULT NULL,
  `idPublicacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbmidiapublicacao`
--

INSERT INTO `tbmidiapublicacao` (`idMidiaPublicacao`, `idMidia`, `idPublicacao`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15),
(16, 16, 16),
(17, 17, 17),
(18, 18, 18),
(19, 19, 20),
(20, 20, 21),
(21, 21, 22),
(22, 22, 23),
(23, 23, 24),
(24, 24, 25),
(25, 25, 26),
(26, 26, 27),
(27, 27, 28),
(28, 28, 29),
(29, 29, 30);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmomentos`
--

CREATE TABLE `tbmomentos` (
  `idMomentos` int(11) NOT NULL,
  `dataMomentos` datetime NOT NULL DEFAULT current_timestamp(),
  `idArtista` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpresenca`
--

CREATE TABLE `tbpresenca` (
  `idPresenca` int(11) NOT NULL,
  `idEvento` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpublicacao`
--

CREATE TABLE `tbpublicacao` (
  `idPublicacao` int(11) NOT NULL,
  `horarioPublicacao` datetime NOT NULL DEFAULT current_timestamp(),
  `descPublicacao` varchar(100) DEFAULT NULL,
  `tituloPublicacao` varchar(50) DEFAULT NULL,
  `statusPublicacao` varchar(50) DEFAULT NULL,
  `idArtista` int(11) DEFAULT NULL,
  `idTipoArte` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbpublicacao`
--

INSERT INTO `tbpublicacao` (`idPublicacao`, `horarioPublicacao`, `descPublicacao`, `tituloPublicacao`, `statusPublicacao`, `idArtista`, `idTipoArte`) VALUES
(1, '2023-05-11 11:10:32', 'tbt dessa época!', NULL, 'Normal', 1, 1),
(2, '2023-05-11 11:11:29', 'Obrigado por mais um premio!', NULL, 'Normal', 1, 1),
(3, '2023-05-11 11:13:24', 'produzindo nova musica!', NULL, 'Normal', 2, 9),
(4, '2023-05-11 11:14:08', 'show de ontem', NULL, 'Normal', 2, 9),
(5, '2023-05-11 11:15:11', 'premiação grammy', NULL, 'Normal', 3, 9),
(6, '2023-05-11 11:15:41', 'gravando a bomba', NULL, 'Normal', 3, 9),
(11, '2023-06-20 23:41:42', 'Mais uma de minhas obras', NULL, 'Normal', 4, 6),
(12, '2023-06-20 23:43:03', 'A minha clássica!!!!!', NULL, 'Normal', 6, 9),
(13, '2023-06-20 23:45:18', 'Bastidores!!!!', NULL, 'Normal', 8, 8),
(14, '2023-06-20 23:47:27', '#vamosaluta', NULL, 'Normal', 7, 3),
(15, '2023-06-20 23:53:16', 'Ouça minha musica.', NULL, 'Normal', 9, 9),
(16, '2023-06-20 23:58:12', '\"dona de mim.........\"', NULL, 'Normal', 5, 9),
(17, '2023-06-20 23:59:08', '#força', NULL, 'Normal', 7, 3),
(18, '2023-06-21 00:00:09', '#empoderamento', NULL, 'Normal', 7, 3),
(20, '2023-06-21 00:05:38', 'Relembrando Velhos tempos', NULL, 'Normal', 6, 9),
(21, '2023-06-21 00:11:19', 'Meu livro foi lançado!', NULL, 'Normal', 7, 3),
(22, '2023-06-21 00:11:53', '#reflexão', NULL, 'Normal', 7, 3),
(23, '2023-06-21 00:15:07', 'Amo tomar Sol!!!!!!', NULL, 'Normal', 5, 9),
(24, '2023-06-21 00:15:49', 'Vem!!!!!', NULL, 'Normal', 5, 9),
(25, '2023-06-21 00:16:34', 'OUÇA!!!!!!!!', NULL, 'Normal', 5, 9),
(26, '2023-06-21 00:17:40', 'GUETO ou GETTO?', NULL, 'Normal', 5, 9),
(27, '2023-06-21 00:22:10', 'A minha cor não me define!', NULL, 'Normal', 4, 6),
(28, '2023-06-21 00:22:53', 'Dia de Evento', NULL, 'Normal', 4, 6),
(29, '2023-06-21 00:23:49', 'Nada tem mais fala do que uma obra!', NULL, 'Normal', 4, 6),
(30, '2023-06-21 00:27:53', 'Ensaio!!!!!', NULL, 'Normal', 8, 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbseguidores`
--

CREATE TABLE `tbseguidores` (
  `idSeguidores` int(11) NOT NULL,
  `idArtista` int(11) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbseguidores`
--

INSERT INTO `tbseguidores` (`idSeguidores`, `idArtista`, `idUsuario`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 2, 2),
(5, 3, 2),
(6, 7, 7),
(7, 5, 7),
(8, 10, 7),
(9, 5, 8),
(10, 4, 8),
(11, 6, 8),
(12, 1, 6),
(13, 10, 6),
(14, 4, 6),
(15, 7, 6),
(16, 6, 5),
(17, 7, 5),
(18, 5, 5),
(19, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtipoarte`
--

CREATE TABLE `tbtipoarte` (
  `idTipoArte` int(11) NOT NULL,
  `nomeTipoArte` varchar(20) NOT NULL,
  `imagemTipoArte` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbtipoarte`
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
-- Estrutura para tabela `tbtipodenuncia`
--

CREATE TABLE `tbtipodenuncia` (
  `idTipoDenuncia` int(11) NOT NULL,
  `nomeTipoDenuncia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbtipodenuncia`
--

INSERT INTO `tbtipodenuncia` (`idTipoDenuncia`, `nomeTipoDenuncia`) VALUES
(1, 'Violência'),
(2, 'Racismo'),
(3, 'Discurso de Ódio'),
(4, 'Preconceito'),
(5, 'Sem Sentido');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbtipomidia`
--

CREATE TABLE `tbtipomidia` (
  `idTipoMidia` int(11) NOT NULL,
  `nomeTipoMidia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbtipomidia`
--

INSERT INTO `tbtipomidia` (`idTipoMidia`, `nomeTipoMidia`) VALUES
(1, 'Audio'),
(2, 'Vídeo'),
(3, 'Imagem');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `nicknameUsuario`, `senhaUsuario`, `foneUsuario`, `fotoPerfilUsuario`, `statusContaUsuario`, `papelParedeUsuario`, `nivelContaUsuario`, `cidadeUsuario`, `estadoUsuario`) VALUES
(1, 'Luana', 'luacruz2014@gmail.com', '@lua', '$2y$10$naNsF59zCPEbBsa98SyPG.Xsk3diRMJ34WCiV32bZaX7Z4QPJrgdC', '(11) 96125-5631', '1.jpg', 'Normal', '1jfif', '1', 'São Paulo', 'SP'),
(2, 'Eddie Murphy', 'eddiezao@gmail.com', '@eddie', '$2y$10$naNsF59zCPEbBsa98SyPG.Xsk3diRMJ34WCiV32bZaX7Z4QPJrgdC', '21325456568', '2.jpg', 'Normal', '2.jpg', '2', 'Canudos', 'BA'),
(3, 'Kanye West', 'kanye@gmail.com', '@Kanye', '$2y$10$pcvyZxEzWoPM6fdZuAssLuj1VWjw9oUfYo4O2nwdmd5Z7/bhlrDOm', '212434554757', '3.jpg', 'Normal', '3.png', '2', 'Manaus', 'AM'),
(4, 'kendrick', 'kendrick@gmail.com', '@duckworth', '$2y$10$9xYi7C/qJ1.OH6jfi/M.i.Cvks6txAtHicljblOM5dcjAzzEiu9G2', '11123123123', '4.jpg', 'Normal', '4.png', '2', 'piai', 'PI'),
(5, 'KikaCarvalho', 'kika@gmail.com', '@kika', '$2y$10$J0cMq581bR0l86SDeKwAwe4FG52Uzi.sTWF3v9eRRmOq54a3xNtke', '(12)35778-2344', '6492473879799png', 'Normal', '5.jpg', '2', 'SAo Paulo', 'SP'),
(6, 'Iza', 'iza@gmail.com', '@iza', '$2y$10$R5X/dgAp1n3gyiLSCMlcc.ya/N6hFsMIGiRQj80vLmuPowE5Iq2pO', '(12)35778-2344', '649253027f745jpg', 'Normal', '6.jpg', '2', 'SAo Paulo', 'SP'),
(7, 'Alcione', 'alcione@gmail.com', '@alcione', '$2y$10$MT2k08udsH4MIEYzDniBweOfvh4RWOOCOqvwSt64/CK8zm6hMvOC.', '(12)35778-2344', '6492582c5e3b3jpg', 'Normal', '7.jpg', '2', 'SAo Paulo', 'AC'),
(8, 'Djamila Ribeiro', 'djamila@gmail.com', '@djamila', '$2y$10$l8ujwdFm/UqdyAwdWW2hPuGIELKpnqgo/Z1DE5b7/9fal/K1ZtZEC', '(12)35778-2344', '64925ae10cd5djpeg', 'Normal', '8.jpg', '2', 'SAo Paulo', 'AC'),
(9, 'Jessica Cores', 'jessica@gmail.com', '@JessicaCores', '$2y$10$Hr6FfGPT/B1FOaFloHWsbuResBVQIXyiRmMJ0jzci3CVuL0NU8ZYO', '(12)35778-2344', '64925d0073b70jpg', 'Normal', '9.jpg', '2', 'SAo Paulo', 'AC'),
(10, 'pericles', 'pericles@gmail.com', '@pericles', '$2y$10$eHHjnwL5HnIozeUfGvdtL.yjznU/xsHEa4dOzBtMUbC3E5Id0CGSa', '(12)35778-2344', '649265628cd09jpg', 'Normal', '10.jpg', '2', 'SAo Paulo', 'MG'),
(11, 'baco exu do blues', 'baco@gmail.com', '@baco', '$2y$10$T3jgT9HKuGBN10Vv/ll7Ee3i/wyVmB9JrXibwbXl3rJ8op2mYZjFK', '(12)35778-2344', '649265a861063jpeg', 'Normal', '11.jpg', '2', 'SAo Paulo', 'MG');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadministrador`
--
ALTER TABLE `tbadministrador`
  ADD PRIMARY KEY (`idAdministrador`),
  ADD UNIQUE KEY `emailAdministrador` (`emailAdministrador`),
  ADD UNIQUE KEY `loginAdministrador` (`loginAdministrador`);

--
-- Índices de tabela `tbartista`
--
ALTER TABLE `tbartista`
  ADD PRIMARY KEY (`idArtista`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbcomentario`
--
ALTER TABLE `tbcomentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idPublicacao` (`idPublicacao`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbcontapixartista`
--
ALTER TABLE `tbcontapixartista`
  ADD PRIMARY KEY (`idContaPixArtista`),
  ADD KEY `idArtista` (`idArtista`);

--
-- Índices de tabela `tbcurtida`
--
ALTER TABLE `tbcurtida`
  ADD PRIMARY KEY (`idCurtida`),
  ADD KEY `idUsuario` (`idUsuario`),
  ADD KEY `idPublicacao` (`idPublicacao`);

--
-- Índices de tabela `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD PRIMARY KEY (`idDenuncia`),
  ADD KEY `idTipoDenuncia` (`idTipoDenuncia`),
  ADD KEY `idAdministrador` (`idAdministrador`);

--
-- Índices de tabela `tbdenunciausuario`
--
ALTER TABLE `tbdenunciausuario`
  ADD PRIMARY KEY (`idDenunciaUsuario`),
  ADD KEY `idDenuncia` (`idDenuncia`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbevento`
--
ALTER TABLE `tbevento`
  ADD PRIMARY KEY (`idEvento`),
  ADD KEY `idArtista` (`idArtista`),
  ADD KEY `idTipoArte` (`idTipoArte`);

--
-- Índices de tabela `tbmidia`
--
ALTER TABLE `tbmidia`
  ADD PRIMARY KEY (`idMidia`),
  ADD KEY `idTipoMidia` (`idTipoMidia`);

--
-- Índices de tabela `tbmidiamomentos`
--
ALTER TABLE `tbmidiamomentos`
  ADD PRIMARY KEY (`idMidiaMomentos`),
  ADD KEY `idMidia` (`idMidia`),
  ADD KEY `idMomentos` (`idMomentos`);

--
-- Índices de tabela `tbmidiapublicacao`
--
ALTER TABLE `tbmidiapublicacao`
  ADD PRIMARY KEY (`idMidiaPublicacao`),
  ADD KEY `idMidia` (`idMidia`),
  ADD KEY `idPublicacao` (`idPublicacao`);

--
-- Índices de tabela `tbmomentos`
--
ALTER TABLE `tbmomentos`
  ADD PRIMARY KEY (`idMomentos`),
  ADD KEY `idArtista` (`idArtista`);

--
-- Índices de tabela `tbpresenca`
--
ALTER TABLE `tbpresenca`
  ADD PRIMARY KEY (`idPresenca`),
  ADD KEY `idEvento` (`idEvento`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD PRIMARY KEY (`idPublicacao`),
  ADD KEY `idArtista` (`idArtista`),
  ADD KEY `idTipoArte` (`idTipoArte`);

--
-- Índices de tabela `tbseguidores`
--
ALTER TABLE `tbseguidores`
  ADD PRIMARY KEY (`idSeguidores`),
  ADD KEY `idArtista` (`idArtista`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices de tabela `tbtipoarte`
--
ALTER TABLE `tbtipoarte`
  ADD PRIMARY KEY (`idTipoArte`);

--
-- Índices de tabela `tbtipodenuncia`
--
ALTER TABLE `tbtipodenuncia`
  ADD PRIMARY KEY (`idTipoDenuncia`);

--
-- Índices de tabela `tbtipomidia`
--
ALTER TABLE `tbtipomidia`
  ADD PRIMARY KEY (`idTipoMidia`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `emailUsuario` (`emailUsuario`),
  ADD UNIQUE KEY `nicknameUsuario` (`nicknameUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
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
  MODIFY `idArtista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbcomentario`
--
ALTER TABLE `tbcomentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tbcontapixartista`
--
ALTER TABLE `tbcontapixartista`
  MODIFY `idContaPixArtista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbcurtida`
--
ALTER TABLE `tbcurtida`
  MODIFY `idCurtida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `idMidia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `tbmidiamomentos`
--
ALTER TABLE `tbmidiamomentos`
  MODIFY `idMidiaMomentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbmidiapublicacao`
--
ALTER TABLE `tbmidiapublicacao`
  MODIFY `idMidiaPublicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `tbmomentos`
--
ALTER TABLE `tbmomentos`
  MODIFY `idMomentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpresenca`
--
ALTER TABLE `tbpresenca`
  MODIFY `idPresenca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  MODIFY `idPublicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tbseguidores`
--
ALTER TABLE `tbseguidores`
  MODIFY `idSeguidores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `tbtipoarte`
--
ALTER TABLE `tbtipoarte`
  MODIFY `idTipoArte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tbtipodenuncia`
--
ALTER TABLE `tbtipodenuncia`
  MODIFY `idTipoDenuncia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbtipomidia`
--
ALTER TABLE `tbtipomidia`
  MODIFY `idTipoMidia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbartista`
--
ALTER TABLE `tbartista`
  ADD CONSTRAINT `tbartista_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Restrições para tabelas `tbcomentario`
--
ALTER TABLE `tbcomentario`
  ADD CONSTRAINT `tbcomentario_ibfk_1` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`),
  ADD CONSTRAINT `tbcomentario_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Restrições para tabelas `tbcontapixartista`
--
ALTER TABLE `tbcontapixartista`
  ADD CONSTRAINT `tbcontapixartista_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`);

--
-- Restrições para tabelas `tbcurtida`
--
ALTER TABLE `tbcurtida`
  ADD CONSTRAINT `tbcurtida_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`),
  ADD CONSTRAINT `tbcurtida_ibfk_2` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`);

--
-- Restrições para tabelas `tbdenuncia`
--
ALTER TABLE `tbdenuncia`
  ADD CONSTRAINT `tbdenuncia_ibfk_1` FOREIGN KEY (`idTipoDenuncia`) REFERENCES `tbtipodenuncia` (`idTipoDenuncia`),
  ADD CONSTRAINT `tbdenuncia_ibfk_2` FOREIGN KEY (`idAdministrador`) REFERENCES `tbadministrador` (`idAdministrador`);

--
-- Restrições para tabelas `tbdenunciausuario`
--
ALTER TABLE `tbdenunciausuario`
  ADD CONSTRAINT `tbdenunciausuario_ibfk_1` FOREIGN KEY (`idDenuncia`) REFERENCES `tbdenuncia` (`idDenuncia`),
  ADD CONSTRAINT `tbdenunciausuario_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Restrições para tabelas `tbevento`
--
ALTER TABLE `tbevento`
  ADD CONSTRAINT `tbevento_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`),
  ADD CONSTRAINT `tbevento_ibfk_2` FOREIGN KEY (`idTipoArte`) REFERENCES `tbtipoarte` (`idTipoArte`);

--
-- Restrições para tabelas `tbmidia`
--
ALTER TABLE `tbmidia`
  ADD CONSTRAINT `tbmidia_ibfk_1` FOREIGN KEY (`idTipoMidia`) REFERENCES `tbtipomidia` (`idTipoMidia`);

--
-- Restrições para tabelas `tbmidiamomentos`
--
ALTER TABLE `tbmidiamomentos`
  ADD CONSTRAINT `tbmidiamomentos_ibfk_1` FOREIGN KEY (`idMidia`) REFERENCES `tbmidia` (`idMidia`),
  ADD CONSTRAINT `tbmidiamomentos_ibfk_2` FOREIGN KEY (`idMomentos`) REFERENCES `tbmomentos` (`idMomentos`);

--
-- Restrições para tabelas `tbmidiapublicacao`
--
ALTER TABLE `tbmidiapublicacao`
  ADD CONSTRAINT `tbmidiapublicacao_ibfk_1` FOREIGN KEY (`idMidia`) REFERENCES `tbmidia` (`idMidia`),
  ADD CONSTRAINT `tbmidiapublicacao_ibfk_2` FOREIGN KEY (`idPublicacao`) REFERENCES `tbpublicacao` (`idPublicacao`);

--
-- Restrições para tabelas `tbmomentos`
--
ALTER TABLE `tbmomentos`
  ADD CONSTRAINT `tbmomentos_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`);

--
-- Restrições para tabelas `tbpresenca`
--
ALTER TABLE `tbpresenca`
  ADD CONSTRAINT `tbpresenca_ibfk_1` FOREIGN KEY (`idEvento`) REFERENCES `tbevento` (`idEvento`),
  ADD CONSTRAINT `tbpresenca_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);

--
-- Restrições para tabelas `tbpublicacao`
--
ALTER TABLE `tbpublicacao`
  ADD CONSTRAINT `tbpublicacao_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`),
  ADD CONSTRAINT `tbpublicacao_ibfk_2` FOREIGN KEY (`idTipoArte`) REFERENCES `tbtipoarte` (`idTipoArte`);

--
-- Restrições para tabelas `tbseguidores`
--
ALTER TABLE `tbseguidores`
  ADD CONSTRAINT `tbseguidores_ibfk_1` FOREIGN KEY (`idArtista`) REFERENCES `tbartista` (`idArtista`),
  ADD CONSTRAINT `tbseguidores_ibfk_2` FOREIGN KEY (`idUsuario`) REFERENCES `tbusuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
