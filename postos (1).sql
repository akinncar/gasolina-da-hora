-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jan-2019 às 21:48
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gasolinadahora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postos`
--

CREATE TABLE `postos` (
  `cod` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cidade` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `imagem` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `endereco` varchar(260) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `login` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `senha` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `lat` varchar(260) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `lng` varchar(260) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gasolina_prazo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gasolina_vista` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `adtivada_prazo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `adtivada_vista` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `diesel_prazo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `diesel_vista` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `s10_prazo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `s10_vista` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `etanol_prazo` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `etanol_vista` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `gnv` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postos`
--

INSERT INTO `postos` (`cod`, `nome`, `cidade`, `estado`, `imagem`, `endereco`, `telefone`, `login`, `senha`, `lat`, `lng`, `gasolina_prazo`, `gasolina_vista`, `adtivada_prazo`, `adtivada_vista`, `diesel_prazo`, `diesel_vista`, `s10_prazo`, `s10_vista`, `etanol_prazo`, `etanol_vista`, `gnv`) VALUES
(1, 'Auto Posto Osorio', 'tubarao', 'santa catarina', 'narnia.jpg', 'Rodovia Br 101- Km 343 - São Cristóvão', '(48) 3622-0825', 'posto_osorio_tb', 'tb0s0r10**', '-28.519127', '-49.053566', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11'),
(3, 'Posto Michells', 'tubarao', 'santa catarina\r\n', '2017-02-05.jpg', 'Rua. Altamiro Guimaraes, 1735 - Oficinas', '(48) 3622-0027', 'teste', 'teste', '-28.488845', '-49.024468', '4,69', NULL, '4,299', NULL, '3,555', '3,255', '3,599', '3,299', '3,344', NULL, '2,699'),
(6, 'Postos São Marcos', 'tubarao', 'santa catarina', 'Screenshot_4.png', 'Av. Severiano Albino Corrêa, 520 - Fábio Silva', NULL, NULL, NULL, '-28.483127', '-49.034332', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Posto Fratelli', 'tubarao', 'santa catarina', 'auto_posto_fratelli.jpg', 'Avenida Patricio Lima, 000 - Bairo', '(48) 3626-5093', NULL, NULL, '-28.468927', '-49.016204', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Auto Posto Premier', 'tubarao', 'santa catarina', 'auto_posto_premier.png', 'Avenida Marcolino Martins Cabral, 000 - Bairo', '(48) 3622-4920', NULL, NULL, '-28.478926', '-48.999368', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Auto Posto Disney', 'tubarao', 'santa catarina', 'auto_posto_disney.png', 'Avenida Tancredo Neves, 100 - Revoredo', '(48) 3622-4722', NULL, NULL, '-28.468245', '-48.992666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Posto Estação', 'tubarao', 'santa catarina', 'auto_posto_estacao.png', 'Rua São Geraldo - Oficinas, 000 - Bairo', '(48) 3626-6445', NULL, NULL, '-28.48854', '-49.0166', '4,299', '4,199', '4,299', '4,199', NULL, NULL, '3,299', NULL, '3,499', '3,499', NULL),
(13, 'Posto Canário ', 'tubarao', 'santa catarina', 'auto_posto_canario.png', 'Avenida Marcolino Martins Cabral, 1965 - Vila Moema', '(48) 3622-3737', NULL, NULL, '-28.477800', '-48.998880', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Posto Amigão', 'tubarao', 'santa catarina', 'auto_posto_amigao.png', 'Avenida Patrício Lima, 1850 - Humaitá de Cima', '(48) 3628-0014', NULL, NULL, '-28.465475', '-49.019134', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Posto Presidente', 'tubarao', 'santa catarina', 'auto_posto_presidente.png', 'Rodovia Mário Covas - Vila Esperança', '(48) 3628-0909', NULL, NULL, '-28.466702', '-49.007842', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Auto Posto Santo Anjo', 'tubarao', 'santa catarina', 'auto_posto_santo_anjo.png', 'Rua Rui Barbosa, 388 - Centro', '(48) 3626-0277', NULL, NULL, '-28.486905', '-49.012809', '4,299', '4,199', '4,425', '4,325', NULL, NULL, '3,33', NULL, NULL, NULL, NULL),
(17, 'Posto Sena', 'tubarao', 'santa catarina', 'au_posto_sena.png', 'Rua São João, 1505 - São João', '(48) 3628-0562', NULL, NULL, '-28.471593', '-49.034216', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Rede Furnas - Posto Tubarão', 'tubarao', 'santa catarina', 'auto_posto_furnas.png', 'Avenida Patrício Lima, 90 - Humaitá', '(48) 3628-1814 ', NULL, NULL, '-28.477485', '-49.007061', '4,299', '4,199', '4,399', NULL, '3,299', '3,139', '3,399', '3,299', NULL, NULL, NULL),
(19, 'Posto Universitário RodOil', 'tubarao', 'santa catarina', 'aoto_posto_universitario.png', 'Avenida José Acácio Moreira, 595-653 - Humaitá', '(48) 3053-1890', NULL, NULL, '-28.483058', '-49.020543', '4,607', '4,188', '4,729', '4,299', '3,579', '3,249', NULL, NULL, '3,849', '3,499', NULL),
(20, 'Auto Posto Andrino', 'tubarao', 'santa catarina', 'auto_posto_andrino.png', 'Rua Aldo Hulse, 456 - Passo do Gado', '(48) 3628-2019', NULL, NULL, '-28.493330', '-48.998696', '4,189', NULL, '4,189', NULL, '3,257', NULL, '3,326', NULL, NULL, NULL, NULL),
(21, 'Machado Comércio de Combustiveis', 'tubarao', 'santa catarina', NULL, 'Av. Pedro Zapelini, 658 - Centro ', '(48) 3632-9090', NULL, NULL, '-28.489536', '-49.004089', '4,199', NULL, '4,299', NULL, '3,292', NULL, NULL, NULL, '3,589', NULL, NULL),
(23, 'Posto Rede Furnas', 'tubarao', 'santa catarina', 'posto_rede_furnas.png', 'Av. Mal. Deodoro', '', NULL, NULL, '-28.484113', '-49.016518', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postos`
--
ALTER TABLE `postos`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postos`
--
ALTER TABLE `postos`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
