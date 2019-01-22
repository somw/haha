/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-01-22 16:21:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `customers`
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` char(10) CHARACTER SET utf8 NOT NULL,
  `CustomerID` char(20) CHARACTER SET utf8 NOT NULL COMMENT '客户ID',
  `CompanyName` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '公司名字',
  `ContactName` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '联系人',
  `Address` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT '地址',
  `City` char(20) CHARACTER SET utf8 NOT NULL COMMENT '城市',
  `PostalCode` char(10) CHARACTER SET utf8 NOT NULL COMMENT '邮编',
  `Country` char(30) CHARACTER SET utf8 NOT NULL COMMENT '国家',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('1', 'APPLE', 'Apple Computer,Inc.', 'Steven Jobs', '1 Infinite Loop Cupertino,CA 95014', 'Cupertino', '95014', 'USA');
INSERT INTO `customers` VALUES ('2', 'BAIDU', 'BAIDU,Inc', 'Li YanHong', 'Lixiang guoji dasha,No 58, beisihuanxilu', 'Beijing', '100080', 'China');
INSERT INTO `customers` VALUES ('3', 'Canon', 'Canon USA,Inc', 'Tsuneji Uchida', 'One Canon Plaza Lake Success,NY 11042', 'New York', '11042', 'USA');
INSERT INTO `customers` VALUES ('4', 'Google', 'Google,Inc', 'Larry Page', '1600 Amphitheatre Parkway Mountain View,CA 94043', 'Mountain View', '94043', 'USA');
INSERT INTO `customers` VALUES ('5', 'Nokia', 'Nokia Corporation', 'Olli-Pekka Kallasvuo', 'P.O.Box 226,FIN-00045 Nokia Group,Finland', 'Helsinki', 'none', 'Finland');
INSERT INTO `customers` VALUES ('6', 'SONY', 'Sony Corporation of America', 'Kazuo Hirai', 'Park Ridge,NJ 07656', 'Park Ridge', '07656', 'USA');
