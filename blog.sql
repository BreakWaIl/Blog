/*
Navicat MySQL Data Transfer

Source Server         : Mysql
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-04-20 17:03:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `bg_admin`
-- ----------------------------
DROP TABLE IF EXISTS `bg_admin`;
CREATE TABLE `bg_admin` (
  `admin_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) NOT NULL,
  `admin_pass` char(32) NOT NULL,
  `login_ip` varchar(30) NOT NULL,
  `login_nums` int(10) unsigned NOT NULL DEFAULT '0',
  `login_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bg_admin
-- ----------------------------
INSERT INTO `bg_admin` VALUES ('1', 'zhouyang', '25d55ad283aa400af464c76d713c07ad', '127.0.0.1', '0', '1509875547');
