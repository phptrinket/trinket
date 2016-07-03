-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2016 at 01:06 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trinket`
--

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id`, `id_usuario`, `nome`, `descricao`, `imagem`, `status`) VALUES
(2, 1, 'Mazen', 'Ahoyasdasd', 'lakasd.jpg', NULL),
(3, 1, 'AEW CARALHO', 'MAS PUTA QUE PARIU DEU CERTO', 'MARGARINA.jpg', NULL),
(4, 1, 'asdasd', 'asadasd', 'MARGARINA.jpg', NULL),
(5, 1, 'Martelo', 'qebra o galho', 'martelo.png', 'Vendido');

-- --------------------------------------------------------

--
-- Table structure for table `proposta`
--

CREATE TABLE `proposta` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `data_oferta` date NOT NULL,
  `data_conclusao` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposta`
--

INSERT INTO `proposta` (`id`, `id_usuario`, `id_produto`, `comentario`, `data_oferta`, `data_conclusao`) VALUES
(3, 1, 2, 'çlamsdashdlkasjdqwe', '2016-07-03', NULL),
(4, 1, 3, 'hahsayashdyashdysad', '2016-07-03', NULL),
(5, 2, 3, 'QUALE DESSA PORRA AI', '2016-07-03', '2016-07-03'),
(6, 1, 3, 'NADA DA SUA CONTA', '2016-07-03', NULL),
(7, 1, 3, 'MAS QUE CARALHOS', '2016-07-03', NULL),
(8, 1, 3, 'asdasd', '2016-07-03', NULL),
(9, 1, 2, 'asdasdasd', '2016-07-03', NULL),
(10, 1, 4, 'asdasd', '2016-07-03', NULL),
(11, 1, 5, '15zao nessa porra', '2016-07-03', NULL),
(12, 2, 5, 'RIARIARIAIARIRIAIRIAR QUE EMRDA', '2016-07-03', '2016-07-03'),
(13, 1, 5, 'mas claro', '2016-07-03', NULL),
(14, 1, 5, 'AE PORRA', '2016-07-03', NULL),
(15, 1, 5, 'AE PORRA', '2016-07-03', NULL),
(16, 2, 5, 'AE', '2016-07-03', '2016-07-03'),
(17, 1, 5, 'Oi\r\n', '2016-07-03', NULL),
(18, 1, 5, 'ae', '2016-07-03', NULL),
(19, 1, 5, 'AE', '2016-07-03', NULL),
(20, 1, 5, 'Asd', '2016-07-03', NULL),
(21, 1, 5, 'AASDASDASDSA', '2016-07-03', NULL),
(22, 1, 5, 'PORRA', '2016-07-03', NULL),
(23, 1, 5, 'AE', '2016-07-03', NULL),
(24, 1, 5, 'ae', '2016-07-03', NULL),
(25, 1, 5, 'ae', '2016-07-03', NULL),
(26, 1, 5, 'ae', '2016-07-03', NULL),
(27, 1, 5, 'aaeasdasd', '2016-07-03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `email`, `senha`) VALUES
(1, 'mazen', 'mazen', '1234'),
(2, 'mazen2', 'mazen2@mazen', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `proposta`
--
ALTER TABLE `proposta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `proposta`
--
ALTER TABLE `proposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proposta`
--
ALTER TABLE `proposta`
  ADD CONSTRAINT `proposta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposta_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
