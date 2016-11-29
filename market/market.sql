/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : dxses

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-11-29 15:26:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for market_cat
-- ----------------------------
DROP TABLE IF EXISTS `market_cat`;
CREATE TABLE `market_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of market_cat
-- ----------------------------

-- ----------------------------
-- Table structure for market_category
-- ----------------------------
DROP TABLE IF EXISTS `market_category`;
CREATE TABLE `market_category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_MARKET_C_REFERENCE_MARKET_C` (`cat_id`),
  CONSTRAINT `FK_MARKET_C_REFERENCE_MARKET_C` FOREIGN KEY (`cat_id`) REFERENCES `market_cat` (`id`),
  CONSTRAINT `1` FOREIGN KEY (`cat_id`) REFERENCES `market_cat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of market_category
-- ----------------------------

-- ----------------------------
-- Table structure for market_chat
-- ----------------------------
DROP TABLE IF EXISTS `market_chat`;
CREATE TABLE `market_chat` (
  `id` int(11) NOT NULL,
  `time1` timestamp NULL DEFAULT NULL,
  `content` text,
  `fromuser_id` int(11) DEFAULT NULL,
  `touser_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `chat_ibfk_1` (`fromuser_id`),
  CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`fromuser_id`) REFERENCES `market_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of market_chat
-- ----------------------------

-- ----------------------------
-- Table structure for market_collection
-- ----------------------------
DROP TABLE IF EXISTS `market_collection`;
CREATE TABLE `market_collection` (
  `user_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`goods_id`),
  CONSTRAINT `collection_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `market_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `collection_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `market_goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of market_collection
-- ----------------------------

-- ----------------------------
-- Table structure for market_goods
-- ----------------------------
DROP TABLE IF EXISTS `market_goods`;
CREATE TABLE `market_goods` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `time1` timestamp NULL DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text,
  `times` int(11) DEFAULT NULL,
  `degree` varchar(10) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `goods_ibfk_1` (`seller_id`),
  KEY `goods_ibfk_2` (`category_id`),
  CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `market_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `goods_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `market_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of market_goods
-- ----------------------------

-- ----------------------------
-- Table structure for market_message
-- ----------------------------
DROP TABLE IF EXISTS `market_message`;
CREATE TABLE `market_message` (
  `id` int(11) NOT NULL,
  `content` text,
  `time1` timestamp NULL DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `fromuser_id` int(11) DEFAULT NULL,
  `touser_id` int(11) DEFAULT NULL,
  `belong_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `message_ibfk_1` (`goods_id`),
  KEY `message_ibfk_2` (`fromuser_id`),
  KEY `message_ibfk_3` (`touser_id`),
  CONSTRAINT `message_ibfk_1` FOREIGN KEY (`goods_id`) REFERENCES `market_goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `message_ibfk_2` FOREIGN KEY (`fromuser_id`) REFERENCES `market_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `message_ibfk_3` FOREIGN KEY (`touser_id`) REFERENCES `market_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of market_message
-- ----------------------------

-- ----------------------------
-- Table structure for market_transaction
-- ----------------------------
DROP TABLE IF EXISTS `market_transaction`;
CREATE TABLE `market_transaction` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `buyer_id` int(11) DEFAULT NULL,
  `goods_id` int(11) DEFAULT NULL,
  `condition` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaction_ibfk_1` (`seller_id`),
  KEY `transaction_ibfk_2` (`buyer_id`),
  KEY `transaction_ibfk_3` (`goods_id`),
  CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `market_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`buyer_id`) REFERENCES `market_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`goods_id`) REFERENCES `market_goods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of market_transaction
-- ----------------------------

-- ----------------------------
-- Table structure for market_users
-- ----------------------------
DROP TABLE IF EXISTS `market_users`;
CREATE TABLE `market_users` (
  `id` int(11) NOT NULL,
  `username` char(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `college` varchar(30) DEFAULT NULL,
  `sex` varchar(3) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `nickname` varchar(30) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `head` varchar(100) DEFAULT NULL,
  `card` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of market_users
-- ----------------------------

-- ----------------------------
-- Table structure for node
-- ----------------------------
DROP TABLE IF EXISTS `node`;
CREATE TABLE `node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `group_id` tinyint(3) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of node
-- ----------------------------
INSERT INTO `node` VALUES ('49', 'read', '查看', '1', '', null, '30', '3', '0', '0');
INSERT INTO `node` VALUES ('40', 'Index', '默认模块', '1', '', '1', '1', '2', '0', '0');
INSERT INTO `node` VALUES ('39', 'index', '列表', '1', '', null, '30', '3', '0', '0');
INSERT INTO `node` VALUES ('37', 'resume', '恢复', '1', '', null, '30', '3', '0', '0');
INSERT INTO `node` VALUES ('36', 'forbid', '禁用', '1', '', null, '30', '3', '0', '0');
INSERT INTO `node` VALUES ('35', 'foreverdelete', '删除', '1', '', null, '30', '3', '0', '0');
INSERT INTO `node` VALUES ('34', 'update', '更新', '1', '', null, '30', '3', '0', '0');
INSERT INTO `node` VALUES ('33', 'edit', '编辑', '1', '', null, '30', '3', '0', '0');
INSERT INTO `node` VALUES ('32', 'insert', '写入', '1', '', null, '30', '3', '0', '0');
INSERT INTO `node` VALUES ('31', 'add', '新增', '1', '', null, '30', '3', '0', '0');
INSERT INTO `node` VALUES ('30', 'Public', '公共模块', '1', '', '2', '1', '2', '0', '0');
INSERT INTO `node` VALUES ('6', 'Admin/Yhgl/index', '角色管理', '1', '', '3', '1', '2', '0', '2');
INSERT INTO `node` VALUES ('1', 'Admin', '后台管理', '1', '', null, '0', '1', '0', '0');
INSERT INTO `node` VALUES ('50', 'main', '空白首页', '1', '', null, '40', '3', '0', '0');
INSERT INTO `node` VALUES ('137', 'Admin/AdminManage/index', '管理员管理', '1', null, '2', '1', '2', '0', '10');
INSERT INTO `node` VALUES ('138', 'Admin/GoodsMessage/index', '商品信息', '1', null, '2', '1', '2', '0', '11');
INSERT INTO `node` VALUES ('139', 'Admin/MessageManage/index', '留言管理', '1', null, '2', '1', '2', '0', '12');
