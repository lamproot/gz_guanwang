/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50621
 Source Host           : localhost
 Source Database       : rz_data

 Target Server Type    : MySQL
 Target Server Version : 50621
 File Encoding         : utf-8

 Date: 06/18/2017 21:00:28 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `zx_admins`
-- ----------------------------
DROP TABLE IF EXISTS `zx_admins`;
CREATE TABLE `zx_admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `password` varchar(50) NOT NULL DEFAULT '' COMMENT '密码',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '姓名',
  `mobile` varchar(11) NOT NULL DEFAULT '' COMMENT '手机号',
  `type_str` varchar(15) NOT NULL DEFAULT '' COMMENT '类型标志 admin- super-',
  `created_at` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-正常 1-删除',
  `login_number` int(9) NOT NULL DEFAULT '0' COMMENT '登录次数',
  `last_login_time` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `last_login_ip` varchar(50) NOT NULL DEFAULT '0' COMMENT '最后登录IP',
  `status` tinyint(9) NOT NULL DEFAULT '0' COMMENT '是否禁用 状态 0 启用 1 禁用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='管理员表';

-- ----------------------------
--  Records of `zx_admins`
-- ----------------------------
BEGIN;
INSERT INTO `zx_admins` VALUES ('1', 'd9b1d7db4cd6e70935368a1efb10e377', '戎子管理员', '111', 'super', '1474836470', '0', '0', '26', '1497790619', '0.0.0.0', '0'), ('2', '9db06bcff9248837f86d1a6bcf41c9e7', '张旭娟', 'zhangxj', '操作员', '1476416015', '1476416179', '0', '1', '1476416189', '60.221.138.250', '0'), ('3', '14e1b600b1fd579f47433b88e8d85291', '18501372201', '18501372201', '操作员', '1476624115', '1476624115', '0', '0', '0', '0', '0');
COMMIT;

-- ----------------------------
--  Table structure for `zx_news`
-- ----------------------------
DROP TABLE IF EXISTS `zx_news`;
CREATE TABLE `zx_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '类型',
  `level` tinyint(2) NOT NULL DEFAULT '0' COMMENT '优先级',
  `content` text() NOT NULL COMMENT '新闻内容',
  `viewnum` int(10) DEFAULT NULL COMMENT '浏览次数',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态 0 启用 1 禁用',
  `created_at` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-正常 1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='新闻公告表';


-- ----------------------------
--  Table structure for `zx_products`
-- ----------------------------
DROP TABLE IF EXISTS `zx_products`;
CREATE TABLE `zx_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '名称',
  `logo` varchar(100) NOT NULL DEFAULT '' COMMENT '图片',
  `content` varchar(2000) NOT NULL DEFAULT '' COMMENT '介绍',
  `rprice` int(10) DEFAULT NULL COMMENT '戎子盾价格',
  `jprice` float(9,2) DEFAULT NULL COMMENT '奖金币价格',
  `products_code` varchar(20) NOT NULL DEFAULT '' COMMENT '产品编号',
  `surplus` int(4) NOT NULL DEFAULT '0' COMMENT '产品剩余数量',
  `sell_count` int(11) NOT NULL DEFAULT '0' COMMENT '卖出数量',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态 0 启用 1 禁用',
  `created_at` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `is_free` tinyint(2) NOT NULL DEFAULT '0' COMMENT '是否为赠送红酒产品',
  `updated_at` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-正常 1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='商品信息表';



-- ----------------------------
--  Table structure for `zx_news`
-- ----------------------------
DROP TABLE IF EXISTS `zx_news`;
CREATE TABLE `zx_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `type` tinyint(2) NOT NULL DEFAULT '0' COMMENT '类型',
  `level` tinyint(2) NOT NULL DEFAULT '0' COMMENT '优先级',
  `content` text NOT NULL COMMENT '新闻内容',
  `viewnum` int(10) DEFAULT NULL COMMENT '浏览次数',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态 0 启用 1 禁用',
  `created_at` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-正常 1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='新闻公告表';



-- ----------------------------
--  Table structure for `zx_abouts`
-- ----------------------------
DROP TABLE IF EXISTS `zx_abouts`;
CREATE TABLE `zx_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '名称',
  `ename` varchar(255) NOT NULL DEFAULT '' COMMENT '英文名称',
  `level` tinyint(2) NOT NULL DEFAULT '0' COMMENT '优先级',
  `content` varchar(2000) NOT NULL DEFAULT '' COMMENT '新闻内容',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-正常 1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='公司简介';



-- ----------------------------
--  Table structure for `zx_teams`
-- ----------------------------
DROP TABLE IF EXISTS `zx_teams`;
CREATE TABLE `zx_teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '姓名',
  `logo` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '小标题',
  `degree` varchar(255) NOT NULL DEFAULT '' COMMENT '学位',
  `content` varchar(2000) NOT NULL DEFAULT '' COMMENT '介绍',
  `team_class_id` varchar(2000) NOT NULL DEFAULT '' COMMENT 'team分类ID',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-正常 1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='团队介绍';


-- ----------------------------
--  Table structure for `zx_teams`
-- ----------------------------
DROP TABLE IF EXISTS `zx_team_class`;
CREATE TABLE `zx_team_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '姓名',
  `level` tinyint(2) NOT NULL DEFAULT '0' COMMENT '优先级',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-正常 1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='团队分类';



-- ----------------------------
--  Table structure for `zx_segments`
-- ----------------------------
DROP TABLE IF EXISTS `zx_segments`;
CREATE TABLE `zx_segments` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '姓名',
  `logo` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `content` text NOT NULL COMMENT '介绍',
  `is_del` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0-正常 1-删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='业务管理模块';



SET FOREIGN_KEY_CHECKS = 1;
