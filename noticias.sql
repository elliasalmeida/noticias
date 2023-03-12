-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Mar-2023 às 01:13
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `data`, `imagem`, `texto`) VALUES
(1, 'Defesa de Daniel Alves pede teste psicológico em jovem que o acusa de estupro', '2023-03-02', 'https://img.r7.com/images/daniel-alves-23022023105528224?dimensions=771x420', 'Os advogados de Daniel Alves estudam uma nova investida para tentar inocentar o atleta da acusação de estupro de uma jovem de 23 anos, no início do ano, em uma boate em Barcelona, na Espanha. Segundo informações apuradas pelo jornal espanhol El Periódico, a defesa pede um teste psicológico para a mulher que fez a acusação.'),
(2, 'Celular perdido a 7 metros de profundidade, no Lago Paranoá, é resgatado funcionando', '2023-03-01', 'https://th.bing.com/th/id/R.b5be6d6d9999557327ee1c26f2686301?rik=azi%2fS5rpPBX69A&pid=ImgRaw&r=0', '\"Eu estava no Lago Paranoá fazendo passeio de caiaque quando avistei uma moça se afogando, pedindo ajuda. Imediatamente pulei do caiaque para ajudá-la. Estava de colete e com meu celular. Pulei para ajudar, consegui levar a moça até a margem do lago\", conta Breno.'),
(3, 'Fifa The Best: Messi é eleito o melhor jogador do mundo de 2022', '2023-02-27', 'https://digitalhub.fifa.com/transform/d93104bb-f6f3-45df-b98e-9760a5a89baa/Argentina-v-France-Final-FIFA-World-Cup-Qatar-2022', 'Lionel Messi foi eleito pela Fifa o melhor jogador do mundo de 2022 — e pela sétima vez na carreira. Ele recebeu o troféu nesta segunda-feira, ao final da cerimônia The Best realizada na Salle Pleyel, em Paris. Pesou a favor do craque o brilho na campanha da Argentina rumo ao título da Copa do Mundo de 2022.'),
(4, 'CSGO: FURIA vence clássico contra a Imperial pela Pro League 17', '2023-03-01', 'https://cdn.ome.lt/fpAq-LLxHXahiEZzhozi2ORGbCM=/970x360/smart/uploads/conteudo/fotos/classico_funeral.jpg', 'A FURIA confirmou o favoritismo no clássico de Counter-Strike: Global Offensive (CS:GO) contra a Imperial e levou a melhor no confronto por 2 a 0. O duelo aconteceu nesta quarta-feira (1) e foi válido pela partida de abertura do Grupo B, da ESL Pro League 17.'),
(5, 'CBLoL: Hauz explica boa fase do Fluxo: “É um processo”', '2023-03-01', 'https://cdn.ome.lt/QfPoIh7Iqeo9BWhb0jo4XALF7W8=/970x360/smart/uploads/conteudo/fotos/lol-cblol-2023-hauz_3XkFqNA.jpg', 'Seis vitórias consecutivas: esse é o momento vivido pelo Fluxo no CBLoL 2023. Se antes a equipe era tratada como decepção, agora se tornou realidade e tem a situação bem encaminhada para ir aos playoffs da competição de League of Legends (LoL).');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
