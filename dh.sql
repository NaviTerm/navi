/*
Navicat MySQL Data Transfer

Source Server         : 本地数据库
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : dh

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-05-21 17:53:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for dh_article
-- ----------------------------
DROP TABLE IF EXISTS `dh_article`;
CREATE TABLE `dh_article` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `level` tinyint(3) unsigned DEFAULT '0',
  `introduce` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `copyfrom` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `thumb_tj` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) NOT NULL,
  `edittime` varchar(255) NOT NULL,
  `hits` int(10) unsigned DEFAULT NULL,
  `status` tinyint(3) unsigned DEFAULT NULL,
  `linkurl` varchar(255) NOT NULL,
  `listorder` int(10) unsigned DEFAULT '0',
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_article
-- ----------------------------
INSERT INTO `dh_article` VALUES ('1', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', null, null, null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('2', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('3', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('4', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('5', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('6', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('7', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('8', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('9', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('10', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('11', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('12', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('13', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('14', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('15', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('16', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('17', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('18', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('19', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('20', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('21', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('22', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('23', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('24', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('25', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('26', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('27', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('28', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('29', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('30', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('31', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('32', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('33', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('34', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('35', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('36', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', null, 'admin');
INSERT INTO `dh_article` VALUES ('38', '0', '', null, '', null, '', null, null, null, null, '1432109312', '', '1', '3', '', null, 'destoon');
INSERT INTO `dh_article` VALUES ('39', '0', '', null, '', null, '', null, null, '', null, '1432110183', '', '5', '3', '', null, 'destoon');
INSERT INTO `dh_article` VALUES ('40', '0', '斯蒂芬安德森发', null, '&lt;span style=&quot;font-size:32px;font-family:\'Arial Black\';&quot;&gt;规范的的所噶双方的歌&lt;/span&gt;', null, '第三方打算发', null, null, '', null, '1432191507', '', '1', '3', '', null, 'destoon');
INSERT INTO `dh_article` VALUES ('41', '1', '第三方倒萨飞洒大师法速度', '2', '速度飞洒发撒旦发撒旦发生大幅', null, ' 速度  的发  十大发', null, null, '/Public/upload/2015-05-21/555d8d1c85492.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d8d256240d.png.thumb.png', '1432194326', '1432194326', '0', '3', '', '10', 'destoon');
INSERT INTO `dh_article` VALUES ('42', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '9', '3', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('43', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '8', '3', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('44', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '7', '3', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('45', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '10', '3', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('46', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '3', '3', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('47', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '6', '3', '', '0', 'destoon');

-- ----------------------------
-- Table structure for dh_article_data
-- ----------------------------
DROP TABLE IF EXISTS `dh_article_data`;
CREATE TABLE `dh_article_data` (
  `itemid` bigint(10) unsigned NOT NULL DEFAULT '0',
  `content` longtext,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_article_data
-- ----------------------------

-- ----------------------------
-- Table structure for dh_category
-- ----------------------------
DROP TABLE IF EXISTS `dh_category`;
CREATE TABLE `dh_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `name` varchar(20) CHARACTER SET gbk NOT NULL COMMENT '分类名',
  `moduleid` smallint(5) unsigned NOT NULL,
  `parentid` mediumint(9) NOT NULL COMMENT '父分类',
  `childid` tinyint(2) NOT NULL DEFAULT '0',
  `listorder` mediumint(9) DEFAULT NULL COMMENT '排序',
  `items` mediumint(9) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_category
-- ----------------------------
INSERT INTO `dh_category` VALUES ('1', '测试分类', '1', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for dh_group
-- ----------------------------
DROP TABLE IF EXISTS `dh_group`;
CREATE TABLE `dh_group` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_group
-- ----------------------------
INSERT INTO `dh_group` VALUES ('1', '超级管理员');
INSERT INTO `dh_group` VALUES ('2', '网站编辑');
INSERT INTO `dh_group` VALUES ('5', '测试组');
INSERT INTO `dh_group` VALUES ('7', '测试一下');

-- ----------------------------
-- Table structure for dh_member
-- ----------------------------
DROP TABLE IF EXISTS `dh_member`;
CREATE TABLE `dh_member` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(70) NOT NULL,
  `groupid` int(11) NOT NULL,
  `truename` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `message` int(11) DEFAULT '0',
  `lastlogin` varchar(255) DEFAULT NULL,
  `loginip` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_member
-- ----------------------------
INSERT INTO `dh_member` VALUES ('1', 'admin', '14e1b600b1fd579f47433b88e8d85291', '1', 'simon', '18668140875', '10', '1431934964', '127.0.0.1', '651138@qq.com');
INSERT INTO `dh_member` VALUES ('2', 'destoon', '14e1b600b1fd579f47433b88e8d85291', '1', '刘文静', '13812121212', '0', '1432008256', '127.0.0.1', 'mail@yourdomain.com');

-- ----------------------------
-- Table structure for dh_news
-- ----------------------------
DROP TABLE IF EXISTS `dh_news`;
CREATE TABLE `dh_news` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `catid` int(11) NOT NULL,
  `addtime` int(11) NOT NULL,
  `edittime` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `anthor` varchar(255) NOT NULL,
  `copyfrom` varchar(255) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `islink` varchar(255) DEFAULT NULL,
  `linkurl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_news
-- ----------------------------
