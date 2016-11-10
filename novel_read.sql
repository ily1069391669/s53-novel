/*
Navicat MySQL Data Transfer

Source Server         : wamp
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : novel_read

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-11-10 10:13:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_man`
-- ----------------------------
DROP TABLE IF EXISTS `admin_man`;
CREATE TABLE `admin_man` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `addtime` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_man
-- ----------------------------
INSERT INTO `admin_man` VALUES ('1', 'woshizai', '大魔王', '123456', '0', '0');
INSERT INTO `admin_man` VALUES ('2', 'a1316161416', '小魔王', 'a2661645', '1478697739', '0');

-- ----------------------------
-- Table structure for `book_type`
-- ----------------------------
DROP TABLE IF EXISTS `book_type`;
CREATE TABLE `book_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of book_type
-- ----------------------------

-- ----------------------------
-- Table structure for `novel_details`
-- ----------------------------
DROP TABLE IF EXISTS `novel_details`;
CREATE TABLE `novel_details` (
  `id` int(11) NOT NULL,
  `typeid` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of novel_details
-- ----------------------------

-- ----------------------------
-- Table structure for `novel_list`
-- ----------------------------
DROP TABLE IF EXISTS `novel_list`;
CREATE TABLE `novel_list` (
  `id` int(11) NOT NULL,
  `novel_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `click` int(11) DEFAULT NULL,
  `Collection` int(11) DEFAULT NULL,
  `chars` int(11) DEFAULT NULL,
  `Recommend` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of novel_list
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `sex` int(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `head_pic` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
