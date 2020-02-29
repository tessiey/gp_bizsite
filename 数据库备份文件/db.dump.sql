/*
SQLyog Ultimate v11.5 (64 bit)
MySQL - 10.1.37-MariaDB : Database - test
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`test` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `test`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usename` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(`id`,`usename`,`pwd`) values (1,'admin','123123');

/*Table structure for table `ent_info` */

DROP TABLE IF EXISTS `ent_info`;

CREATE TABLE `ent_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `yuming` varchar(128) NOT NULL,
  `qq` varchar(11) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `chuanzhen` varchar(20) NOT NULL,
  `address` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `yewuname` varchar(20) NOT NULL,
  `icp` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `ent_info` */

insert  into `ent_info`(`id`,`name`,`yuming`,`qq`,`tel`,`chuanzhen`,`address`,`email`,`yewuname`,`icp`) values (1,'老王土特产有限责任公司','http://qywz.com','610005671','13370051910','2222222222','陕西省西安市长安区天子口','12354@qq.com','王苗苗','浙ICP备09071033号');

/*Table structure for table `link` */

DROP TABLE IF EXISTS `link`;

CREATE TABLE `link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `linktitle` varchar(10) CHARACTER SET utf8 NOT NULL,
  `linkurl` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `link` */

insert  into `link`(`id`,`linktitle`,`linkurl`) values (5,'杭州SEO','http://www.8d8e.cn'),(6,'变频器','http://www.8d8e.cn'),(7,'百度一下','http://www.baidu.com'),(8,'谷歌','http://g.cn'),(9,'搜搜','http://soso.com'),(10,'腾讯','http://qq.com');

/*Table structure for table `liuyan` */

DROP TABLE IF EXISTS `liuyan`;

CREATE TABLE `liuyan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `title` varchar(40) CHARACTER SET utf8 NOT NULL,
  `email` varchar(20) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;

/*Data for the table `liuyan` */

insert  into `liuyan`(`id`,`name`,`title`,`email`,`content`,`time`) values (3,'汪进财','我要留言我要留言','233@qq.com','我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言我要留言','2010-06-04'),(5,'','','','','2020-02-28'),(6,'','','','','2020-02-28'),(7,'','','','','2020-02-28'),(8,'','','','','2020-02-28'),(9,'','','','','2020-02-28'),(10,'','','','','2020-02-28'),(11,'','','','','2020-02-28'),(12,'','','','','2020-02-28'),(13,'','','','','2020-02-28'),(14,'','','','','2020-02-28'),(15,'','','','','2020-02-28'),(16,'','','','','2020-02-28'),(17,'','','','','2020-02-28'),(18,'','','','','2020-02-28'),(19,'','','','','2020-02-28'),(20,'','','','','2020-02-28'),(21,'','','','','2020-02-28'),(22,'','','','','2020-02-28'),(23,'','','','','2020-02-28'),(24,'','','','','2020-02-28'),(25,'','','','','2020-02-28'),(26,'','','','','2020-02-28'),(27,'','','','','2020-02-28'),(28,'','','','','2020-02-28'),(29,'','','','','2020-02-28'),(30,'','','','','2020-02-28'),(31,'','','','','2020-02-28'),(32,'','','','','2020-02-28');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(64) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8mb4;

/*Data for the table `news` */

insert  into `news`(`id`,`title`,`content`,`time`) values (75,'年股东大会暨工作会议','召开股东大会既年度工作会，集团公司全体股东及各子公司、各部门负责人参加了会议，集团公司董事长兼总经理沈智毅向大会作了董事会工作报告。集团公司常务副总顾蕴华、李振群分别向大会作了财务预决算报告和合同管理等工作的专题发言，各子公司和各部门负责人在会上作了交流发言。','2020-02-28'),(76,'公司迁址公告及新址地图','非常感谢您的关注和支持，我公司因规模扩大及业务发展需要，201420年6月2日起，集团总部搬迁','2020-02-28'),(70,'受邀参加北京国际营养保健产业博览会','北京国际营养保健产业博览会市由中国健康产业发展联盟、亚洲营养保健产业促进会主办，中国健康食品协会协办，是亚洲最大的保健品产业盛会。老王土特产受邀参展。','2020-02-28'),(71,'市委副书记杨标等领导来我集团公司调研','杭州市委副书记杨戌标、副市长戚哮虎等领导来我集团公司进行调研，杭州市供销社党委书记、主任华德法等市社领导陪同调研。我集团公司董事长、总经理沈智毅向前来调','2020-02-28'),(72,'土特产集团公司举行2014年员工秋季活动','天气晴朗，云淡风轻。杭州市土特产集团全体员工在这个周末，参加了在梅家坞举行的2014年度秋季活动。','2020-02-28'),(73,'“凝聚你我，携手共进”集团公司踏青游艺活动','在春暖花开的时节，最美人间四月天，杭州市土特产集团全体员工在美丽的杭帮菜博物馆举行踏青游艺活动。今天的活动主题是“凝聚你我，携手共进”。\r\n\r\n    今天活动主要分为两个部分，第一部分是我们公司新员工的自我介绍。第二部分是游艺活动。活动分为两部分，一是运动型的活动，二是游戏型的活动。全体员工积极参与，加深了新老员工的了解，拉近了彼此的距离。','2020-02-28'),(74,'集团召开半年度经济分析暨党的群众路线教育实践活动动员会','7月30日下午，集团公司召开半年度经济分析暨党的群众路线教育实践活动动员会。党委书记、董事长、总经理沈智毅回顾分析了企业上半年经营情况，对深入开展党的群众路线教育实践活动作了动员部署，就做好下半年股权制度改革和经营工作提出了要求。集团公司所属各部门、子公司、分公司助理级以上干部和全体党员参加了会议。','2020-02-28'),(69,'双十一再创佳绩 淘宝行业全国排名百强','刚刚2017双11狂欢落下帷幕，天猫最终交易额定格在1682亿，创下历史新高。吉林省华成土特产有限公司旗下的一庆堂天猫旗舰店双十一再创佳绩，连续两年打入淘宝行业全国排名百强。','2020-02-28'),(68,'爆冷的食人族、美人鱼、冷面杀手和洗劫精','有一天，一休和尚何老板、李武靖一起去非洲玩。不料他们竟误闯食人族部落。食人族把一休一群人绑住准备烤来吃，酋长：烤烤你。一休：尽管考。一休话一说出就后悔了...但已来不及接受被烤的命运，只好忍着火烤之痛，拼命地想办法......突然一休灵光一闪，“叮”一声！酋长：“烤好了。”','2020-02-28');

/*Table structure for table `pro` */

DROP TABLE IF EXISTS `pro`;

CREATE TABLE `pro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(60) CHARACTER SET utf8 NOT NULL,
  `product_intro` text CHARACTER SET utf8 NOT NULL,
  `product_pic` varchar(40) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pro` */

insert  into `pro`(`id`,`product_name`,`product_intro`,`product_pic`) values (1,'纯手工炒制作干辣椒','','1582892512.jpg'),(2,'红油香椿芽','','1582892532.jpg'),(3,'蔓越莓味发稿','','1582892548.jpg'),(4,'软糯Q弹有较劲的玉米','','1582892564.jpg'),(5,'散养谷物鸭子','','1582892579.jpg'),(6,'森林散养大黑鸡','','1582892594.jpg'),(7,'手工高粱秆盖帘','','1582892611.jpg'),(8,'原生天然干黄豆','','1582892625.jpg'),(9,'长裙竹荪干货','','1582892640.jpg'),(10,'正宗野生拐枣','','1582892654.jpg'),(11,'自然霜降柿饼','','1582892668.jpg');

/*Table structure for table `site_nav` */

DROP TABLE IF EXISTS `site_nav`;

CREATE TABLE `site_nav` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(12) CHARACTER SET utf8 NOT NULL,
  `url` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

/*Data for the table `site_nav` */

insert  into `site_nav`(`id`,`name`,`url`) values (18,'公司产品',' /proshow.php'),(19,'企业新闻','  /sitenews.php'),(20,'公司简介','/introduction.php'),(21,'联系我们','/lianxi.php'),(22,'在线留言','/book.php'),(23,'友情链接','/link.php');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
