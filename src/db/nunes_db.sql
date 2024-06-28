-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela nunes-library.livros: ~4 rows (aproximadamente)
INSERT INTO `livros` (`id`, `autor`, `titulo`, `subtitulo`, `edicao`, `editora`, `ano_de_publicacao`, `capa`, `user_id`) VALUES
	(1, 'Joestar', 'JOJO', 'Bizarre adventures', '1', 'Shonen Jump', '2024-06-21', 'assets/db_imgs/667601386708f.jfif', 1),
	(2, 'Harry', 'Harry Potter', 'A pedra filosofal', '3', 'Sei lá', '2024-06-21', 'assets/db_imgs/667601a86f2f9.jpg', 2),
	(4, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste', 'assets/db_imgs/66789aa15ecd1.png', 1),
	(6, 'sei la', 'O Homem Mais Rico da Babilônia', 'tb n sei', 'N/A', 'Gente', '2000', 'assets/db_imgs/6678a44b0da51.jfif', 5);

-- Copiando dados para a tabela nunes-library.usuarios: ~5 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
	(1, 'Pedro Vinícius Nunes Alves', 'vinunes10@gmail.com', '$2y$10$9Jw0thqvKJCQ4R8eVBrd8.A62xClfHCjclEouTVE55MzjyJfVMgX6'),
	(2, 'dawd', 'carinha@gmail.com', '$2y$10$DuZpmcRrA/1A.e/U.C/H/OPg/hFgEFC7yYXI.QAH3JDbWWgR5rYQa'),
	(3, 'Laura', 'laura@gmail.com', '$2y$10$y6EDzWdIXq4BEw61h1Pjm.n8538k3nJI.Qpsl1c1fE8bbHaetxMdG'),
	(4, 'hyago', 'hyago@gmail.com', '$2y$10$OVA97cAB5YUIBGwuvq4YhuPtt9rymODHqCgz1MJjq3M91WRPUcX7.'),
	(5, 'Dudé', 'dude@gmail.com', '$2y$10$JI8MUiVjz.Zc8ukIP5.Qnewm9VWYQ74BR5gJcT3XZAx6I4In6Sir6');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
