-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para dbphp7
CREATE DATABASE IF NOT EXISTS `dbphp7` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `dbphp7`;

-- Copiando estrutura para procedure dbphp7.sp_usuarios_insert
DELIMITER //
CREATE PROCEDURE `sp_usuarios_insert`(
pdeslogin VARCHAR(64),
pdessenha VARCHAR(256)
)
BEGIN

	INSERT tb_usuarios (deslogin, dessenha) VALUES(pdeslogin, pdessenha);
    
    SELECT * FROM tb_usuarios WHERE idusuario = LAST_INSERT_ID();

END//
DELIMITER ;

-- Copiando estrutura para tabela dbphp7.tb_usuarios
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `deslogin` varchar(64) NOT NULL,
  `dessenha` varchar(256) NOT NULL,
  `dtcadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela dbphp7.tb_usuarios: ~33 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_usuarios` DISABLE KEYS */;
INSERT INTO `tb_usuarios` (`idusuario`, `deslogin`, `dessenha`, `dtcadastro`) VALUES
	(1, 'root', '@#@', '2020-12-29 19:13:58'),
	(4, 'josé', '12345678', '2020-12-29 19:20:48'),
	(5, 'josé', '12345678', '2020-12-29 19:20:48'),
	(6, 'josé', '12345678', '2020-12-29 19:21:28'),
	(7, 'josé', '12345678', '2020-12-29 19:21:28'),
	(8, 'professor', '@#$@!@!', '2020-12-29 19:21:36'),
	(9, 'aluno', '@1un0', '2021-01-02 12:00:00'),
	(10, 'aluno', '@1un0', '2021-01-02 12:00:00'),
	(11, 'aluno', '@1un0', '2021-01-02 12:00:01'),
	(12, 'aluno', '@1un0', '2021-01-02 12:00:53'),
	(13, 'aluno', '@1un0', '2021-01-02 12:00:53'),
	(14, 'aluno', '@1un0', '2021-01-02 12:01:15'),
	(15, 'aluno', '@1un0', '2021-01-02 12:01:53'),
	(16, 'aluno', '@1un0', '2021-01-02 12:02:26'),
	(17, 'aluno', '@1un0', '2021-01-02 12:02:27'),
	(18, 'aluno', '@1un0', '2021-01-02 12:02:28'),
	(19, 'aluno', '@1un0', '2021-01-02 12:02:28'),
	(20, 'aluno', '@1un0', '2021-01-02 12:02:28'),
	(21, 'aluno', '@1un0', '2021-01-02 12:02:55'),
	(22, 'aluno', '@1un0', '2021-01-02 12:03:53'),
	(23, 'aluno', '@1un0', '2021-01-02 12:04:12'),
	(24, 'aluno', '@1un0', '2021-01-02 12:04:29'),
	(25, 'aluno', '@1un0', '2021-01-02 12:04:36'),
	(26, 'aluno', '@1un0', '2021-01-02 12:05:08'),
	(27, 'aluno', '@1un0', '2021-01-02 12:05:29'),
	(28, 'aluno', '@1un0', '2021-01-02 12:06:01'),
	(29, 'aluno', '@1un0', '2021-01-02 12:06:02'),
	(31, 'aluno', '@1un0', '2021-01-02 12:06:03'),
	(32, 'aluno', '@1un0', '2021-01-02 12:06:03'),
	(33, 'aluno', '@1un0', '2021-01-02 12:06:42'),
	(34, 'aluno', '@1un0', '2021-01-02 12:07:03'),
	(35, 'aluno', '@1un0', '2021-01-02 12:13:16'),
	(36, 'aluno', '@1un0', '2021-01-02 12:13:17');
/*!40000 ALTER TABLE `tb_usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
