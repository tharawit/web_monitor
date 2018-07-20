# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.21)
# Database: db
# Generation Time: 2018-07-20 09:52:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table survey_overview
# ------------------------------------------------------------

DROP TABLE IF EXISTS `survey_overview`;

CREATE TABLE `survey_overview` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(200) NOT NULL,
  `total_post` varchar(100) NOT NULL,
  `total_member` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `survey_overview` WRITE;
/*!40000 ALTER TABLE `survey_overview` DISABLE KEYS */;

INSERT INTO `survey_overview` (`id`, `group_name`, `total_post`, `total_member`, `datetime`)
VALUES
	(3,'ไทยรัฐ แจ้งข่าว-คลิป','493','74224','2018-05-15 07:25:26'),
	(4,'ข่าวด่วน...ปาก ต่อ ปาก','1780','414402','2018-05-15 07:26:57'),
	(5,'ทันข่าว ทันโลก','514','67861','2018-05-15 07:28:19'),
	(6,'ข่าวจาก อาสากู้ภัย THAILAND','611','76676','2018-05-15 07:29:12'),
	(7,'ข่าวสด ทันเหตุการณ์','653','636177','2018-05-15 07:30:29'),
	(36,'ไทยรัฐ แจ้งข่าว-คลิป','1370','254052','2018-01-15 11:00:59'),
	(37,'ข่าวด่วน...ปาก ต่อ ปาก','901','356997','2018-01-15 11:00:59'),
	(38,'ทันข่าว ทันโลก','1538','106305','2018-01-15 11:00:59'),
	(39,'ข่าวจาก อาสากู้ภัย THAILAND','1437','501384','2018-01-15 11:00:59'),
	(40,'ข่าวสด ทันเหตุการณ์','1421','537336','2018-01-15 11:00:59'),
	(41,'ไทยรัฐ แจ้งข่าว-คลิป','1371','441190','2018-02-15 11:00:59'),
	(42,'ข่าวด่วน...ปาก ต่อ ปาก','518','185725','2018-02-15 11:00:59'),
	(43,'ทันข่าว ทันโลก','1309','519758','2018-02-15 11:00:59'),
	(44,'ข่าวจาก อาสากู้ภัย THAILAND','1515','478470','2018-02-15 11:00:59'),
	(45,'ข่าวสด ทันเหตุการณ์','680','308672','2018-02-15 11:00:59'),
	(46,'ไทยรัฐ แจ้งข่าว-คลิป','640','127222','2018-03-15 11:00:59'),
	(47,'ข่าวด่วน...ปาก ต่อ ปาก','469','550490','2018-03-15 11:00:59'),
	(48,'ทันข่าว ทันโลก','1270','559627','2018-03-15 11:00:59'),
	(49,'ข่าวจาก อาสากู้ภัย THAILAND','873','529322','2018-03-15 11:00:59'),
	(50,'ข่าวสด ทันเหตุการณ์','904','423170','2018-03-15 12:00:59'),
	(51,'ไทยรัฐ แจ้งข่าว-คลิป','1171','232492','2018-04-15 12:00:59'),
	(52,'ข่าวด่วน...ปาก ต่อ ปาก','1269','459934','2018-04-15 11:00:59'),
	(53,'ทันข่าว ทันโลก','1026','449604','2018-04-15 11:00:59'),
	(54,'ข่าวจาก อาสากู้ภัย THAILAND','1578','155361','2018-04-15 11:00:59'),
	(55,'ข่าวสด ทันเหตุการณ์','850','512292','2018-04-15 11:00:59');

/*!40000 ALTER TABLE `survey_overview` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table survey_single
# ------------------------------------------------------------

DROP TABLE IF EXISTS `survey_single`;

CREATE TABLE `survey_single` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` varchar(100) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `engagement` varchar(100) NOT NULL,
  `shared` varchar(100) NOT NULL,
  `perma_link` varchar(200) NOT NULL,
  `detail` varchar(600) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `survey_single` WRITE;
/*!40000 ALTER TABLE `survey_single` DISABLE KEYS */;

INSERT INTO `survey_single` (`id`, `group_id`, `group_name`, `comment`, `engagement`, `shared`, `perma_link`, `detail`, `datetime`)
VALUES
	(11,'2027377684212005','ไทยรัฐ แจ้งข่าว-คลิป','40','300','24','https://web.facebook.com/groups/2027377684212005/permalink/2127882420828197/','นี่ จอมขวัญ เองค่ะท่าน...','2018-05-10 07:34:57'),
	(12,'2027377684212005','ไทยรัฐ แจ้งข่าว-คลิป','19','525','100','https://web.facebook.com/groups/2027377684212005/permalink/2127265987556507/','น่ากลัว มากโชคดีเเล้วที่อยู่ประเทศไทย','2018-05-10 07:36:30'),
	(13,'2027377684212005','ไทยรัฐ แจ้งข่าว-คลิป','84','473','41','https://web.facebook.com/groups/2027377684212005/permalink/2127174724232300/','สาวชุดไทยดราม่าข้ามชาติ ขอคนละเม้น แฟนๆ ไทยรัฐคิดยังไงกับเหตุการณ์นี้?','2018-05-10 07:38:08'),
	(14,'1122281554507516','ข่าวด่วน...ปาก ต่อ ปาก','19','852','23','https://web.facebook.com/groups/1122281554507516/permalink/1825174310884900/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','เปิดเรื่องจริง!!! ของ “ตำรวจสู้ชีวิต” เหตุใดจึงรับเล่นละครกว่า100 เรื่อง ทั้งๆที่ทำงานรับราชการ บอกเลยสะเทือนใจหนักมาก!!!','2018-05-10 07:48:41'),
	(15,'1122281554507516','ข่าวด่วน...ปาก ต่อ ปาก','64','966','70','https://web.facebook.com/groups/1122281554507516/permalink/1824324070969924/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','ฮาสนั่น คลิปแซวสาวชุดไทยใจไม่บริการ สองตูบจัดวิธีแก้ให้ง่ายนิดเดียว','2018-05-10 07:50:40'),
	(16,'1122281554507516','ข่าวด่วน...ปาก ต่อ ปาก','132','881','53','https://web.facebook.com/groups/1122281554507516/permalink/1824308977638100/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','น้อมกราบสาธุ…ด้วยบุญแห่งพระบารมีแผ่เมตตา โคร้องไห้น้ำตาไหลพราก ขณะสมเด็จพระสังฆราช ทรงป้อนน้ำ-หญ้า พิธีไถ่ชีวิต','2018-05-10 07:52:26'),
	(17,'1480029398960158','ทันข่าว ทันโลก','99','874','92','https://web.facebook.com/groups/1480029398960158/permalink/1824870607809367/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','ลูกหลานใครนี้ นักเรียน ม.ปลาย กลุ่มนี้ ช่วยกันเปลี่ยนยางรถยนต์ของประชาชนที่จอดเสียอยู่ริมถนน','2018-05-10 08:01:52'),
	(18,'1480029398960158','ทันข่าว ทันโลก','34','391','87','https://web.facebook.com/groups/1480029398960158/permalink/1824949754468119/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','ภูเขาไฟฮาวายยังวิกฤต พ่นลาวาแดงฉาน ทะลักลงถนน-เผาทุกอย่างราบ','2018-05-10 08:03:14'),
	(19,'1480029398960158','ทันข่าว ทันโลก','18','440','53','https://web.facebook.com/groups/1480029398960158/permalink/1824873594475735/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','ตั้งแต่เย็นนี้หนักแน่! เตือนมรสุมลูกใหม่ ถล่ม 42 จังหวัดทั่วประเทศ-กทม.ไม่รอด','2018-05-10 08:04:40'),
	(20,'805777886208264','ข่าวจาก อาสากู้ภัย THAILAND','7','307','7','https://web.facebook.com/groups/805777886208264/permalink/1688644377921606/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','ปทุมธานี แม่ใจยักษ์ทิ้งลูกตากแดดกลางกองขยะชาวบ้านพบเรียกกู้ภัยช่วยเหลือ','2018-05-10 08:15:01'),
	(21,'805777886208264','ข่าวจาก อาสากู้ภัย THAILAND','9','409','28','https://web.facebook.com/groups/805777886208264/permalink/1688220104630700/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','หน้าบริษัท ทาเคเบะ เฟส 8 อมตะนคร ในที่เกิดเหตเป็น รถจักรยานยนต์ ชน รถกระบะที่กำลังจะเลี้ยวเข้าโรงงาน','2018-05-10 08:16:43'),
	(22,'805777886208264','ข่าวจาก อาสากู้ภัย THAILAND','1','393','17','https://web.facebook.com/groups/805777886208264/permalink/1688157907970253/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','รถตู้รับส่งพนักงานชนสะพาน ช่วงหน้านิคมเหมราชใหม่ มาปปู มีผู้บาดเจ็บหลายรายและติดอยู่ในรถ อาสาสมัครศีลธรรมสมาคม จุดมาปปู จุดบ่อวิน','2018-05-10 08:18:09'),
	(23,'359822881078278','ข่าวสด ทันเหตุการณ์','917','1459','188','https://web.facebook.com/groups/359822881078278/permalink/627729297620967/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','อุปทานหมู่เด้า.....กระโดดเด้า ตีลังกาเด้า..เด้า..เด้า..','2018-05-10 08:28:06'),
	(24,'359822881078278','ข่าวสด ทันเหตุการณ์','965','2582','884','https://web.facebook.com/groups/359822881078278/permalink/627414444319119/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','ไม่ชอบเด็กอย่ามาทำอาชีพนี้ ถ้าเป็นลูกหลานคุณเจอแบบนี้จะทำยังไง','2018-05-10 08:30:22'),
	(25,'359822881078278','ข่าวสด ทันเหตุการณ์','267','2705','221','https://web.facebook.com/groups/359822881078278/permalink/627433387650558/?comment_tracking=%7B%22tn%22%3A%22O%22%7D','สะเทือนใจ!! พบทารกในกองขยะข้างถนน ตากแดดร้อนจัด ตำรวจเร่งหาตัวแม่','2018-05-10 08:32:03');

/*!40000 ALTER TABLE `survey_single` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`id`, `name`, `email`, `status`)
VALUES
	(10,'Joe Tharawit','tharawit.55@gmail.com','admin');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
