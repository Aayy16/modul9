/*
 Navicat Premium Dump SQL

 Source Server         : putrimadrayni
 Source Server Type    : MySQL
 Source Server Version : 100421 (10.4.21-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : db_praktek9

 Target Server Type    : MySQL
 Target Server Version : 100421 (10.4.21-MariaDB)
 File Encoding         : 65001

 Date: 23/11/2024 18:04:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kelas
-- ----------------------------
DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas`  (
  `kelas_id` int NOT NULL,
  `nama` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `creates` timestamp NULL DEFAULT current_timestamp,
  `updated` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kelas_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kelas
-- ----------------------------
INSERT INTO `kelas` VALUES (1, 'TKJ', '2024-11-22 16:30:44', '2024-11-22 16:30:44');
INSERT INTO `kelas` VALUES (2, 'RPL', '2024-11-22 16:30:58', '2024-11-22 16:30:58');
INSERT INTO `kelas` VALUES (3, 'MMD', '2024-11-22 16:31:10', '2024-11-22 16:31:10');

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa`  (
  `mahasiswa_id` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kelas_id` int NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created` timestamp NULL DEFAULT current_timestamp,
  `updated` timestamp NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mahasiswa_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES (12, 'Putri Madrayni ', 2, 'sudiang', '2024-11-23 17:19:33', '2024-11-23 17:19:33');
INSERT INTO `mahasiswa` VALUES (13, 'Delvi novianti', 1, 'perintis', '2024-11-23 18:02:35', '2024-11-23 18:02:35');
INSERT INTO `mahasiswa` VALUES (14, 'Novayanti Tonapa', 3, 'Antang', '2024-11-23 18:02:44', '2024-11-23 18:02:44');
INSERT INTO `mahasiswa` VALUES (15, 'Puput Asriana Pita', 2, 'perintis kemerdekaan', '2024-11-23 18:02:52', '2024-11-23 18:02:52');

-- ----------------------------
-- View structure for viewtampil
-- ----------------------------
DROP VIEW IF EXISTS `viewtampil`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `viewtampil` AS SELECT
	mahasiswa.nama_lengkap, 
	mahasiswa.alamat, 
	kelas.nama
FROM
	kelas
	INNER JOIN
	mahasiswa
	ON 
		kelas.kelas_id = mahasiswa.kelas_id ;

SET FOREIGN_KEY_CHECKS = 1;
