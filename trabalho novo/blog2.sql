-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15-Jul-2021 às 23:06
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog2`
--

DELIMITER $$
--
-- Procedimentos
--
DROP PROCEDURE IF EXISTS `prc_artigo_autor`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_artigo_autor` (IN `p_usuario_id` INT)  BEGIN


SELECT 
     artigo.*,
        usuario.nome,
        usuario.figura,
        IF ( usuario.id = p_usuario_id, 1, 0 ) AS e_autor
    FROM artigo    
    JOIN usuario ON usuario.id=artigo.usuario_id;


END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigo`
--

DROP TABLE IF EXISTS `artigo`;
CREATE TABLE IF NOT EXISTS `artigo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `conteudo` text NOT NULL,
  `data_postagem` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `artigo`
--

INSERT INTO `artigo` (`id`, `titulo`, `conteudo`, `data_postagem`, `usuario_id`) VALUES
(21, 'aaa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-15 00:00:00', 46),
(22, 'taporra calmo man', 'calmei nd, slk', '2021-07-15 00:00:00', 45);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mensagem` varchar(300) NOT NULL,
  `usuario_id` int NOT NULL,
  `artigo_id` int NOT NULL,
  `pai_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id`, `mensagem`, `usuario_id`, `artigo_id`, `pai_id`) VALUES
(101, 'aaa', 45, 21, 0),
(102, 'aaa', 45, 21, 0),
(103, 'aaa', 45, 21, 0),
(104, 'aaa', 45, 21, 0),
(105, 'aaa', 45, 21, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `figura` varchar(45) NOT NULL DEFAULT 'usuario.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `nome`, `email`, `senha`, `nivel`, `figura`) VALUES
(45, 'dukito', 'Dukee', 'jpfo175@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Professor', 'jpfo175@gmail.com.png'),
(46, 'conta_teste', 'conta', 'teste@gmail.com', '2e6f9b0d5885b6010f9167787445617f553a735f', 'Aluno', 'teste@gmail.com.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
