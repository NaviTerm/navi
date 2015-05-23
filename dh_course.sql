/*
Navicat MySQL Data Transfer

Source Server         : Origin
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : think

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-05-23 18:00:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dh_course`
-- ----------------------------
DROP TABLE IF EXISTS `dh_course`;
CREATE TABLE `dh_course` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `dtitle` varchar(10) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `edittime` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(4) unsigned NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_course
-- ----------------------------
INSERT INTO `dh_course` VALUES ('2', '测试1', '2016', '阿发撒旦撒旦撒啊啊啊', '/Public/upload/2015-05-23/55603381e6741.jpg.thumb.jpg', '2015', '0', '2', '51');
INSERT INTO `dh_course` VALUES ('3', 'sdf asdf asd', '200', 'fsd fasd fsad', '', '2015', '0', '2', '71');
INSERT INTO `dh_course` VALUES ('4', 'sdf asdf asdf sadf ', '123', 'asdf asdf sdasd saaf asddsadsadsadsad', '', '1432368310', '1432368508', '2', '111');

-- ----------------------------
-- Table structure for `dh_link`
-- ----------------------------
DROP TABLE IF EXISTS `dh_link`;
CREATE TABLE `dh_link` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `level` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `introduce` varchar(255) NOT NULL DEFAULT '',
  `linkurl` varchar(255) NOT NULL DEFAULT '',
  `listorder` smallint(4) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_link
-- ----------------------------
INSERT INTO `dh_link` VALUES ('2', '2', '1', '0', 'asdfsdaf sda', 'f sdaf sdaf sda', 'f sda fsda fsda ', '0', '1432287841');
INSERT INTO `dh_link` VALUES ('3', '1', '1', '0', '苏打粉阿斯蒂芬阿斯蒂芬', '阿萨德富士达发生的冯', '撒旦富士达富士达冯', '0', '1432287906');
INSERT INTO `dh_link` VALUES ('4', '1', '1', '0', '的光的反射公司法定', '对方是个对手犯规对手犯规对手犯规', '待法师告诉对方个', '0', '1432287991');
INSERT INTO `dh_link` VALUES ('5', '1', '1', '0', 'aaa', 'aaaa', 'aaa', '0', '1432342609');
INSERT INTO `dh_link` VALUES ('6', '1', '1', '0', 'sfkjidojswao', 'fskksacasdjaksjclkasdca', 'abcsdasdas', '0', '1432342663');
INSERT INTO `dh_link` VALUES ('7', '1', '1', '0', 'agbx', 'saas', 'dasdas', '0', '1432343712');
INSERT INTO `dh_link` VALUES ('8', '1', '1', '0', 'dsadsadas', 'dasdasdas', 'dasdasds', '0', '1432346963');
INSERT INTO `dh_link` VALUES ('9', '1', '1', '0', '[测试]', '测试', '测试', '0', '1432347669');
INSERT INTO `dh_link` VALUES ('13', '2', '1', '2', '大屌文静1', '大屌文静1', 'simon8.com1', '1', '1432361974');
INSERT INTO `dh_link` VALUES ('12', '1', '3', '2', '坯布网', '', 'www.baidiy.cn', '3', '1432360587');

-- ----------------------------
-- Table structure for `dh_message`
-- ----------------------------
DROP TABLE IF EXISTS `dh_message`;
CREATE TABLE `dh_message` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` bigint(20) unsigned NOT NULL DEFAULT '0',
  `content` longtext NOT NULL,
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `ip` varchar(20) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL DEFAULT '',
  `qq` int(20) unsigned NOT NULL DEFAULT '0',
  `telephone` int(20) unsigned NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_message
-- ----------------------------
INSERT INTO `dh_message` VALUES ('1', '1', 'aaa', '1432372776', '0', '冯森新', '854598416', '2147483647', '854598416@qq.com', '2');
INSERT INTO `dh_message` VALUES ('2', '3', 'dfklsdnfkjashniksjhilofa12', '1432374222', '127.0.0.1', 'sojfdlksjfosdkjplokj', '854598416', '2147483647', '854598416@qq.com', '2');
INSERT INTO `dh_message` VALUES ('3', '2', '撒旦撒打算打算明年,洞房那开发擦把你号码', '1432374471', '127.0.0.1', 'IP地址是多少', '854598416', '2147483647', '854598416@qq.com', '2');
