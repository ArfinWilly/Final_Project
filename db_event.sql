-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_event
CREATE DATABASE IF NOT EXISTS `db_event` /*!40100 DEFAULT CHARACTER SET armscii8 COLLATE armscii8_bin */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_event`;

-- membuang struktur untuk table db_event.tb_lomba
CREATE TABLE IF NOT EXISTS `tb_lomba` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_lomba` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `penyelenggara` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Membuang data untuk tabel db_event.tb_lomba: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_event.tb_pendaftaran
CREATE TABLE IF NOT EXISTS `tb_pendaftaran` (
  `id_pendaftaran` int NOT NULL AUTO_INCREMENT,
  `id_lomba` int DEFAULT NULL,
  `nama_pendaftar` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `kelas` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `no_hp` varchar(13) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  PRIMARY KEY (`id_pendaftaran`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Membuang data untuk tabel db_event.tb_pendaftaran: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_event.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `username` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  `password` varchar(256) CHARACTER SET armscii8 COLLATE armscii8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

-- Membuang data untuk tabel db_event.tb_users: ~1 rows (lebih kurang)
INSERT INTO `tb_users` (`id`, `name`, `username`, `password`) VALUES
	(17, 'Arfinn', 'Finnn', '$2y$10$vdXdVSFJlA4Dx4wxY0H0rOBIkHX3AeXcvpax424kg6Wt1O6lkPIsq');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
