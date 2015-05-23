/*
Navicat MySQL Data Transfer

Source Server         : 本地数据库
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : dh

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-05-23 18:02:56
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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_article
-- ----------------------------
INSERT INTO `dh_article` VALUES ('1', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', null, null, null, '1432087085', '1432087085', '80', '3', '', '1', 'admin');
INSERT INTO `dh_article` VALUES ('2', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '1', 'admin');
INSERT INTO `dh_article` VALUES ('3', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '1', 'admin');
INSERT INTO `dh_article` VALUES ('4', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('5', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('6', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('7', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('8', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('9', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('10', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('11', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('12', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('13', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('14', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('15', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('16', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('17', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('18', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('19', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('20', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('21', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('22', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('23', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('24', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('25', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('26', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('27', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('28', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('29', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('30', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('31', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('32', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('33', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '3', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('34', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '0', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('35', '1', '新闻标题', null, '新闻简介', '新闻关键词', '新闻  simon 卧槽', 'simon', '', '', null, '1432087085', '1432087085', '80', '0', '', '0', 'admin');
INSERT INTO `dh_article` VALUES ('52', '16', '打算发撒旦费多少费多少1', '2', '', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1970-01-01 08:32:50', '1432197836', '9', '3', '', '121', 'admin');
INSERT INTO `dh_article` VALUES ('40', '1', '斯蒂芬安德森发', null, '&lt;span style=&quot;font-size:32px;font-family:\'Arial Black\';&quot;&gt;规范的的所噶双方的歌&lt;/span&gt;', null, '第三方打算发', null, null, '', null, '1432191507', '', '1', '0', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('41', '1', '第三方倒萨飞洒大师法速度', '2', '速度飞洒发撒旦发撒旦发生大幅', null, ' 速度  的发  十大发', null, null, '/Public/upload/2015-05-21/555d8d1c85492.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d8d256240d.png.thumb.png', '1432194326', '1432194326', '0', '3', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('42', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '9', '3', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('43', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '8', '3', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('44', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '7', '3', '', '0', 'destoon');
INSERT INTO `dh_article` VALUES ('45', '12', '测试测试1', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1970-01-01 08:33:35', '1432197836', '10', '3', '', '121', 'destoon');
INSERT INTO `dh_article` VALUES ('46', '1', '打算发撒旦费多少费多少', '2', '&lt;span style=&quot;background-color:#f10b00;&quot;&gt;斯蒂芬撒旦费多少&lt;/span&gt;', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '3', '3', '', '11', 'destoon');
INSERT INTO `dh_article` VALUES ('53', '12', '打算发撒旦费多少费多少', '2', 'dsfdsfasdfasdfas', null, '的舒服  撒旦发', null, null, '/Public/upload/2015-05-21/555d9ad3759d9.jpg.thumb.jpg', '/Public/upload/2015-05-21/555d9adb3a274.jpg.thumb.jpg', '1432197836', '1432197836', '10', '3', '', '121', 'admin');
INSERT INTO `dh_article` VALUES ('54', '12', '温州测试1', '1', '速度发撒旦发撒旦发生大幅阿斯蒂芬阿斯蒂芬阿斯顿', null, ' 斯蒂芬 爱的色放', null, null, '', '', '1432367443', '1432367443', '10', '0', '', '0', 'admin');

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
INSERT INTO `dh_article_data` VALUES ('52', '<span style=\"background-color:#f10b00;\">df asdf sdf sdf sdf d11</span>');
INSERT INTO `dh_article_data` VALUES ('53', 'dsfdsfasdfasdfas');
INSERT INTO `dh_article_data` VALUES ('54', '速度发撒旦发撒旦发生大幅阿斯蒂芬阿斯蒂芬阿斯顿');

-- ----------------------------
-- Table structure for dh_category
-- ----------------------------
DROP TABLE IF EXISTS `dh_category`;
CREATE TABLE `dh_category` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `name` varchar(20) CHARACTER SET gbk NOT NULL COMMENT '分类名',
  `moduleid` smallint(5) unsigned NOT NULL,
  `parentid` mediumint(9) unsigned NOT NULL DEFAULT '0' COMMENT '父分类',
  `childid` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `listorder` mediumint(9) unsigned DEFAULT '0' COMMENT '排序',
  `items` mediumint(9) unsigned DEFAULT '0',
  `dir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_category
-- ----------------------------
INSERT INTO `dh_category` VALUES ('12', '行业新闻', '0', '0', '0', '101', '2', 'hangye');
INSERT INTO `dh_category` VALUES ('16', '行业新闻1', '0', '0', '0', '101', '1', '4');
INSERT INTO `dh_category` VALUES ('17', '分类名', '0', '0', '0', '0', '0', 'ceshi');

-- ----------------------------
-- Table structure for dh_config
-- ----------------------------
DROP TABLE IF EXISTS `dh_config`;
CREATE TABLE `dh_config` (
  `name` varchar(255) DEFAULT NULL,
  `value` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_config
-- ----------------------------
INSERT INTO `dh_config` VALUES ('webname', '导航纺织11');
INSERT INTO `dh_config` VALUES ('logo', '');
INSERT INTO `dh_config` VALUES ('domain', 'http://www.bai11.com/');
INSERT INTO `dh_config` VALUES ('keyword', '测试测试测试11');
INSERT INTO `dh_config` VALUES ('description', '圣达菲利克黄金阿斯科利飞机亏损达机卡分离加速度计11');

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

-- ----------------------------
-- Table structure for dh_page
-- ----------------------------
DROP TABLE IF EXISTS `dh_page`;
CREATE TABLE `dh_page` (
  `itemid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `introduce` varchar(255) DEFAULT NULL,
  `content` longtext,
  `listorder` int(10) unsigned DEFAULT '0',
  `username` varchar(255) DEFAULT NULL,
  `addtime` varchar(255) DEFAULT NULL,
  `status` tinyint(4) unsigned DEFAULT '0',
  `linkurl` varchar(255) DEFAULT NULL,
  `hits` int(11) unsigned DEFAULT NULL,
  `edittime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh_page
-- ----------------------------
INSERT INTO `dh_page` VALUES ('2', '速度快飞', '斯蒂芬撒旦法阿斯顿', '发生大幅阿斯蒂芬苏打粉苏打粉苏打粉撒旦法速度发', '&lt;span style=&quot;background-color:#ffed43;&quot;&gt;发生大幅阿斯蒂芬苏打粉苏打粉苏打粉撒旦法速度发&lt;/span&gt;', '2', 'admin', '', '0', null, '5', '1432359928');
INSERT INTO `dh_page` VALUES ('3', '阿斯顿发斯蒂芬', '阿斯顿发送d', '的第三方阿斯蒂芬', '的第三方阿斯蒂芬', '10', 'admin', '1432360111', '3', null, '4', '1432360111');
INSERT INTO `dh_page` VALUES ('4', '第三方倒萨', ' 阿斯蒂芬阿斯蒂芬斯蒂芬', '&lt;img src=&quot;http://t.cc/Public/Admin/editor/plugins/emoticons/etc_14.gif&quot; border=&quot;0&', '&lt;img src=&quot;http://t.cc/Public/Admin/editor/plugins/emoticons/etc_14.gif&quot; border=&quot;0&quot; /&gt;', '21', 'admin', '1432360209', '3', null, '2', '1432360209');
INSERT INTO `dh_page` VALUES ('5', '发送短发撒旦法sf', '舒服阿斯蒂芬阿斯蒂芬asd', '&lt;span style=&quot;background-color:#d40a00;&quot;&gt;阿斯蒂芬第三方阿斯蒂芬打算发撒旦发&lt;/span&gt;', '&lt;span style=&quot;background-color:#d40a00;&quot;&gt;阿斯蒂芬第三方阿斯蒂芬打算发撒旦发&lt;/span&gt;', '0', 'admin', '1432367755', '3', null, '8', '1432367755');
