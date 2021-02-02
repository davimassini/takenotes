-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Fev-2021 às 06:04
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `takenotes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `notes`
--

CREATE TABLE `notes` (
  `idNote` varchar(15) NOT NULL,
  `titleNote` varchar(29) NOT NULL DEFAULT '',
  `contentNote` varchar(16000) DEFAULT NULL,
  `resumeNote` varchar(40) DEFAULT NULL,
  `dataNote` datetime NOT NULL DEFAULT current_timestamp(),
  `lastUpdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `notes`
--

INSERT INTO `notes` (`idNote`, `titleNote`, `contentNote`, `resumeNote`, `dataNote`, `lastUpdate`) VALUES
('kjpwo', 'Uma nota menorzinha!', '\n                                    \n                                    \n                                \n                                \n                                \n                    <p>Aqui eu escreveria algo sobre o que quero anotar, com isso eu poderia fazer muitas anotações legais... Mas realmente não tenho nada para escrever aqui, portanto deixarei um texto enrolado.</p><p><br></p><p>Aqui é só pra testar mais uma vez a questão do espaço mesmo.</p><p>Vou aproveitar para testar links também, vamos ver como fica!</p><p>http://localhost/takeNotes/<br></p><p><br></p><p>Atenciosamente,</p><p>Davi Massini</p>\n                \n                            \n             \n                            \n                                \n                                ', 'Aqui eu escreveria algo sobre o que quer', '2021-02-01 17:55:25', '2021-02-02 02:01:51'),
('yoxwq', 'Uma nota maiorzinha!', '\n                                    \n                                    \n                                    \n                                    \n                                    \n                                    \n                                    \n                                    \n                                    \n                                    \n                                    \n                                \n                                \n                                \n                                \n                                \n                                \n                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt arcu dui, interdum dictum diam tempus quis. Vestibulum urna nisi, euismod nec feugiat sed, lacinia ultrices dui. Sed sed justo purus. Nulla facilisi. Integer id lacus sed neque sagittis ullamcorper vitae sed lectus. Phasellus mollis condimentum feugiat. Vivamus vitae tempus ante. Vivamus bibendum erat odio, eu pellentesque nulla porta in. Maecenas magna tortor, tincidunt nec mi nec, viverra tincidunt urna. Morbi sit amet sollicitudin diam. Mauris hendrerit massa vitae sapien faucibus, in blandit enim maximus. Vivamus faucibus semper diam, ut fermentum sapien rutrum vel.</p><p><br></p><p>Integer aliquet lobortis ligula sed faucibus. Ut sagittis vehicula ullamcorper. Nullam varius nibh sed viverra fringilla. Mauris tortor arcu, ultrices nec vehicula et, finibus vel nunc. Pellentesque at faucibus velit. Donec in sem est. Maecenas in tortor pulvinar, consectetur mi ac, auctor ipsum. Nulla facilisi. Nullam euismod hendrerit nisl in mollis. Aliquam erat volutpat.</p><p><br></p><p>Maecenas ac blandit velit. Suspendisse semper justo quis ex pulvinar, eget lobortis lacus malesuada. Proin tincidunt urna ut vulputate mollis. Nunc lobortis, est et vestibulum pharetra, diam nulla tempor libero, id euismod arcu ex eget lacus. Proin tristique nibh quis nunc sagittis mollis. Mauris in ante ac enim sollicitudin mattis eget et magna. Proin libero neque, accumsan ut vestibulum ut, lacinia ac libero. Nullam quis mauris ut magna finibus sodales nec at leo.</p><p><br></p><p>Etiam vitae efficitur nisi. Morbi sed ultricies dolor. Praesent id diam elementum, efficitur ex vel, convallis dolor. In eu ex aliquam, mattis purus non, venenatis odio. Ut sit amet tristique quam, sit amet venenatis lectus. Phasellus sit amet nulla lorem. Nam feugiat neque ac orci aliquet dictum. Quisque id elit eu nisl mollis convallis in et arcu. Maecenas imperdiet quam et leo lobortis, sodales pulvinar purus laoreet. Fusce et orci ultricies, semper leo aliquet, tristique est.</p><p><br></p><p>Sed ullamcorper metus dolor. Nunc ut eros eu mauris maximus ornare mattis quis ligula. Nam non dui magna. Fusce nisi nunc, efficitur quis neque a, rhoncus pretium risus. Duis neque leo, convallis eget enim sed, finibus molestie nulla. Cras scelerisque massa nec turpis tempus, id feugiat orci condimentum. Etiam pharetra, tellus vitae blandit porta, nisi eros vehicula nunc, vitae mattis nibh erat a ex. Phasellus et justo at sem condimentum placerat. Vestibulum id neque leo. Vivamus ac diam mi. Cras a faucibus elit. Duis auctor, justo quis lacinia iaculis, sem nibh porttitor quam, in sollicitudin ligula erat vitae justo. In in magna suscipit, fermentum justo commodo, luctus turpis.</p>\n                                \n                                ', 'Lorem ipsum dolor sit amet, consectetur ', '2021-02-01 13:35:49', '2021-02-02 02:03:43');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`idNote`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
