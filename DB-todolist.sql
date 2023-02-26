-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table todolist-coder.task_list
CREATE TABLE IF NOT EXISTS `task_list` (
  `id_task` int(11) NOT NULL AUTO_INCREMENT,
  `name_task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isCompleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_task`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table todolist-coder.task_list: ~3 rows (approximately)
/*!40000 ALTER TABLE `task_list` DISABLE KEYS */;
INSERT INTO `task_list` (`id_task`, `name_task`, `summary`, `isCompleted`) VALUES
	(3, 'ubah ubah task 1', 'mengubah mengubah Deskripsi task 1', 0),
	(4, 'Task 2 di ubah', 'Deskripsi Task 2 mengubah', 1),
	(5, 'Ini task 3 ubah', 'ini deskripsi task 3 ubah lur', 0);
/*!40000 ALTER TABLE `task_list` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
