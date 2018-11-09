/*
 Navicat Premium Data Transfer

 Source Server         : locahost
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : fengxin

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 09/11/2018 16:53:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for fx_user
-- ----------------------------
DROP TABLE IF EXISTS `fx_user`;
CREATE TABLE `fx_user`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `create_time` int(10) NULL DEFAULT NULL,
  `update_time` int(10) NULL DEFAULT NULL,
  `delete_time` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fx_user
-- ----------------------------
INSERT INTO `fx_user` VALUES (1, '张三', 1540263420, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
