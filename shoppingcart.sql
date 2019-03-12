# Host: localhost  (Version: 5.5.53)
# Date: 2019-03-04 16:23:59
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "shoppingcart"
#

DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE `shoppingcart` (
  `vipName` varchar(11) DEFAULT NULL,
  `goodsId` varchar(10) DEFAULT NULL,
  `goodsCount` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "shoppingcart"
#

/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
INSERT INTO `shoppingcart` VALUES ('1500268123','=',1),('1500268123','1',1),('1500268123','1',1),('15002681234','1',17),('','',0),('13211111111','1',2),('14323211232','1',2),('13109308424','1',1);
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
