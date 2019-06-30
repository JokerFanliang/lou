/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : lou

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-06-30 22:24:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `types` tinyint(1) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '4297f44b13955235245b2497399d7a93', '0', null, null);
INSERT INTO `admin` VALUES ('2', 'fanliang', '4297f44b13955235245b2497399d7a93', '1', '2018-08-13 15:54:55', '2018-08-13 15:54:55');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `content` mediumtext,
  `count` int(10) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '2', '新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主', '/public/static/uploads/20190630/15618802043264.jpeg', '<p>12312312312323131313132<img src=\"/static/uploads/editor/20190615/1560579937.png\" title=\"1560579937.png\" alt=\"34a7670c1b86529181ab6c06d72e036e.png\"/></p>', null, '2019-06-15 14:26:33', '2019-06-30 15:38:00');
INSERT INTO `article` VALUES ('3', '4', '新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主', '/public/static/uploads/20190630/15618803026428.jpeg', '<p>123</p>', null, '2019-06-30 15:38:23', '2019-06-30 16:12:38');
INSERT INTO `article` VALUES ('4', '2', '新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主', '/public/static/uploads/20190630/15618803099803.jpeg', '<p>123123</p>', null, '2019-06-30 15:38:29', '2019-06-30 15:38:29');
INSERT INTO `article` VALUES ('5', '3', '新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主', '/public/static/uploads/20190630/15618803154774.jpeg', '<p>123123</p>', null, '2019-06-30 15:38:35', '2019-06-30 16:12:32');
INSERT INTO `article` VALUES ('6', '2', '新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主', '/public/static/uploads/20190630/15618803213987.jpeg', '', null, '2019-06-30 15:38:41', '2019-06-30 15:38:41');
INSERT INTO `article` VALUES ('7', '4', '新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主', '/public/static/uploads/20190630/15618803386219.jpeg', '<p>23123</p>', null, '2019-06-30 15:38:58', '2019-06-30 16:12:25');
INSERT INTO `article` VALUES ('8', '3', '新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主', '/public/static/uploads/20190630/15618803483650.jpeg', '<p>2<a href=\"http://gz.loupan.com/html/news/201906/3936758.html\" target=\"_blank\" title=\"新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主\" style=\"margin: 0px; border: 0px; padding: 0px; font-family: Arial, &quot;Microsoft Yahei&quot;; font-size: 14px; color: rgb(51, 51, 51); box-sizing: border-box; outline: none; text-decoration-line: none; transition: color 0.3s ease 0s;\">新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主</a></p>', null, '2019-06-30 15:39:08', '2019-06-30 16:12:16');
INSERT INTO `article` VALUES ('9', '2', '新一轮“加码”调控来袭 政策“微调”下楼市仍将以稳为主', '/public/static/uploads/20190630/15618803551260.jpeg', '<h1 class=\"title\" style=\"margin: 0px; border: 0px; padding: 0px; font-family: &quot;Microsoft Yahei&quot;, Arial; font-size: 32px; color: rgb(51, 51, 51); box-sizing: border-box; outline: none; white-space: normal;\"><br/></h1><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">6月28日，由中国酒店业标杆企业东呈国际与中国新锐商业地产内容服务商十方集团主办的“中国酒店房地产投资峰会”在广州隆重举办。</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; text-align: center; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><img src=\"http://static3.loupan.com/newsimg/image/2019/0629/1029302911820.png?imageView2/3/w/800/h/600/q/75\" title=\"中国酒店房地产投资峰会\" alt=\"中国酒店房地产投资峰会\" width=\"523\" height=\"350\" border=\"0\" vspace=\"0\" style=\"margin: 0px auto; border: 0px; padding: 0px; font-size: 14px; color: rgb(102, 102, 102); box-sizing: border-box; outline: none; display: block; width: 523px; height: 350px;\"/></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">本次峰会来自全国各地包括保利集团、嘉兴阳光云际、宝业置业等63家知名地产商代表共聚一堂，以“全域G活”为主题，就进一步创新“酒店+地产”商业模式、激活万亿存量市场展开讨论。</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; text-align: center; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><img src=\"http://static3.loupan.com/newsimg/image/2019/0629/1030061483554.png?imageView2/3/w/800/h/600/q/75\" title=\"中国酒店房地产投资峰会\" alt=\"中国酒店房地产投资峰会\" width=\"557\" height=\"373\" border=\"0\" vspace=\"0\" style=\"margin: 0px auto; border: 0px; padding: 0px; font-size: 14px; color: rgb(102, 102, 102); box-sizing: border-box; outline: none; display: block; width: 557px; height: 373px;\"/></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; text-align: center; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><img src=\"http://static3.loupan.com/newsimg/image/2019/0629/1030344305922.png?imageView2/3/w/800/h/600/q/75\" title=\"中国酒店房地产投资峰会\" alt=\"中国酒店房地产投资峰会\" width=\"556\" height=\"372\" border=\"0\" vspace=\"0\" style=\"margin: 0px auto; border: 0px; padding: 0px; font-size: 14px; color: rgb(102, 102, 102); box-sizing: border-box; outline: none; display: block; width: 556px; height: 372px;\"/></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><strong style=\"margin: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px;\">全域G活，推动“地产+酒店”迈入5G时代</strong></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">中国酒店标杆企业东呈国际以强大的平台实力联合十方集团，就“地产+酒店”的全新商业模式，为存量地产探索出了“更精准、更灵活、更高效、更专业、更保障”的“5G”资产运营解决方案，为房地产开发商、酒店投资商和不动产投资者提供“三者共赢”的解决方案，打造了一场具有全国影响力的高水平酒店房地产投资峰会。</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; text-align: center; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><img src=\"http://static3.loupan.com/newsimg/image/2019/0629/1032056334480.png?imageView2/3/w/800/h/600/q/75\" title=\"中国酒店房地产投资峰会\" alt=\"中国酒店房地产投资峰会\" width=\"556\" height=\"372\" border=\"0\" vspace=\"0\" style=\"margin: 0px auto; border: 0px; padding: 0px; font-size: 14px; color: rgb(102, 102, 102); box-sizing: border-box; outline: none; display: block; width: 556px; height: 372px;\"/></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><strong style=\"margin: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px;\">十方旅居，赋能“地产+酒店”全新商业模式</strong></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">峰会中，十方集团深度解读了“更精准、更灵活、更高效、更专业、更保障”解决方案，发布了一款专为“地产+酒店”行业量身打造的APP“十方旅居”，将房地产从传统型的商业属性转化到纯投资酒店产品的实体金融投资型产品，势必会为行业树立新的高度及行业标杆，引领“地产+酒店”的风向标，成为赛道的开拓者。</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; text-align: center; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><img src=\"http://static3.loupan.com/newsimg/image/2019/0629/1032417428130.png?imageView2/3/w/800/h/600/q/75\" title=\"中国酒店房地产投资峰会\" alt=\"中国酒店房地产投资峰会\" width=\"557\" height=\"373\" border=\"0\" vspace=\"0\" style=\"margin: 0px auto; border: 0px; padding: 0px; font-size: 14px; color: rgb(102, 102, 102); box-sizing: border-box; outline: none; display: block; width: 557px; height: 373px;\"/></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><strong style=\"margin: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px;\">告别盲目选择，定位更精准的酒店品牌</strong></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">从开发商的角度来说，十方将给为其带来更加精准的酒店品牌定位。在房价的出发点上多了一个思考维度，十方在关注开发商和业主的回报率的同时也通过更加精准的市场定位，制定符合后期酒店运营的价格区间，从而增加综合商业体的属性及提升项目所在区域的综合价值。</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><strong style=\"margin: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px;\">打破单一渠道，创造更灵活的投资路径</strong></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">十方集团将上线专业的投资APP——十方旅居，将引入更多的投资渠道，从而改善目前投资路径单一的问题。相比较传统酒店拓展来说，十方集团不仅能为开发商带来更丰富的房地产销售渠道，还能带来从前期的地产规划到后期地产销售一整套的解决方案，从而让开放商更加坚定地产规划信心。同时，十方集团将打破一贯的统一收费标准，根据开发商的销售节奏制定专属不同开发商的收费方式，更灵活的服务于各大开发商。</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; text-align: center; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><img src=\"http://static3.loupan.com/newsimg/image/2019/0629/1033035233667.png?imageView2/3/w/800/h/600/q/75\" title=\"中国酒店房地产投资峰会\" alt=\"中国酒店房地产投资峰会\" width=\"557\" height=\"373\" border=\"0\" vspace=\"0\" style=\"margin: 0px auto; border: 0px; padding: 0px; font-size: 14px; color: rgb(102, 102, 102); box-sizing: border-box; outline: none; display: block; width: 557px; height: 373px;\"/></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><strong style=\"margin: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px;\">3年220个项目，开启更高效的投资模块</strong></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">十方集团是国内唯一一家在规模和模块形成制度化的公司；十方集团凭借着高效的拓展渠道，通过自己特有的地产+酒店模式走出了一条新的通道，实现了 3 年 220 项目的增长目标；十方旅居 APP 的上线将便利化与业主的签约过程，让业主返租更加稳定高效。于开发商而言，十方模式相较于传统酒店开发模式，将为他们带来更高效的存量去化。</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><strong style=\"margin: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px;\">实力用经验说话，更专业的投资模式操作</strong></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">十方集团在峰会中表示，目前集团正在为房地产业设计一款新的产品，他们将通过更加专业的地产+酒店经验使该产品完全契合地产+酒店的全新商业模式，未来此款产品的面市对于房地产开发领域来说将更加具备专业性！</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; text-align: center; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><img src=\"http://static3.loupan.com/newsimg/image/2019/0629/1033205200576.png?imageView2/3/w/800/h/600/q/75\" title=\"中国酒店房地产投资峰会\" alt=\"中国酒店房地产投资峰会\" width=\"578\" height=\"386\" border=\"0\" vspace=\"0\" style=\"margin: 0px auto; border: 0px; padding: 0px; font-size: 14px; color: rgb(102, 102, 102); box-sizing: border-box; outline: none; display: block; width: 578px; height: 386px;\"/></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><strong style=\"margin: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px;\">多元化选择空间，更保障开发商与业主的利益</strong></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">目前十方集团和业主之间的合作有保底收益、运营分成、保底+运营复合多元化三种合作方式，为给业主带来更灵活多样的合作体验。同时，十方集团将从人流的导入、市场的导入这两方面给房地产开发企业带来超出行业普遍水平的保障，从而使地产开发企业敢拿地、愿拿地。</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\"><strong style=\"margin: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px;\">强强联合，“酒店+地产”生态闭环诞生</strong></p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">东呈国际集团目前旗下推出吾公馆、蓓利夫人等12个品牌酒店，并联手万豪国际集团在中国引进万枫酒店品牌，实施平台化、金融化、国际化三大战略，短短5年成为了中国酒店业标杆企业。同时，布局全球酒店行业，在纽约、柏林、香港、曼谷均有运营中心，超过2000家酒店分布于中国、马来西亚、白俄罗斯、缅甸、柬埔寨等国200多座城市，致力于成为世界一流酒店集团。</p><p style=\"margin-top: 0px; border: 0px; padding: 0px; box-sizing: border-box; outline: none; line-height: 40px; margin-bottom: 10px !important; font-size: 16px !important; color: rgb(51, 51, 51) !important;\">此次峰会，东呈国际代表人就东呈实力、东呈未来、十方实力进行了演讲，为布局未来、共创新赛道畅谈。在参会人员的共同见证下，东呈与十方双方于现场签署了合作协议，正式启动品牌战略合作，东呈国际“酒店X地产”生态闭环也就此诞生。</p><p><br/></p>', null, '2019-06-30 15:39:15', '2019-06-30 16:30:48');

-- ----------------------------
-- Table structure for `article_type`
-- ----------------------------
DROP TABLE IF EXISTS `article_type`;
CREATE TABLE `article_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_type
-- ----------------------------
INSERT INTO `article_type` VALUES ('2', '热点', '0', '2019-06-15 13:57:29', '2019-06-30 16:11:51');
INSERT INTO `article_type` VALUES ('3', '导购', '0', '2019-06-30 16:11:56', '2019-06-30 16:11:56');
INSERT INTO `article_type` VALUES ('4', '专题', '0', '2019-06-30 16:12:00', '2019-06-30 16:12:00');

-- ----------------------------
-- Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('6', '/public/static/uploads/20190615/15605823197088.png', 'www.baidu.com', '2019-06-15 15:05:19', '2019-06-15 15:05:19');

-- ----------------------------
-- Table structure for `build`
-- ----------------------------
DROP TABLE IF EXISTS `build`;
CREATE TABLE `build` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `types_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `start_time` varchar(50) DEFAULT NULL COMMENT '开盘时间',
  `start_price` varchar(50) DEFAULT NULL COMMENT '起价',
  `housetype_id` int(11) DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `price_id` int(11) DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `desc` varchar(200) DEFAULT NULL COMMENT '开盘描述',
  `give_time` varchar(100) DEFAULT NULL COMMENT '交房时间',
  `renova` varchar(100) DEFAULT NULL COMMENT '装修状况',
  `beian` varchar(100) DEFAULT NULL COMMENT '备案名',
  `permit` varchar(150) DEFAULT NULL COMMENT '预售许可证',
  `year` varchar(50) DEFAULT NULL COMMENT '产权年限',
  `item` varchar(100) DEFAULT NULL COMMENT '特色',
  `wy_company` varchar(100) DEFAULT NULL COMMENT '物业公司',
  `wy_type` varchar(50) DEFAULT NULL COMMENT '物业类别',
  `wx_money` varchar(50) DEFAULT NULL COMMENT '物业费',
  `create_company` varchar(100) DEFAULT NULL COMMENT '开发商',
  `car_num` varchar(100) DEFAULT NULL COMMENT '车位',
  `build_s` varchar(100) DEFAULT NULL COMMENT '建筑面积',
  `space_s` varchar(100) DEFAULT NULL COMMENT '占地面积',
  `number` varchar(50) DEFAULT NULL COMMENT '规划户数',
  `rjl` varchar(50) DEFAULT NULL COMMENT '容积率',
  `lhl` varchar(50) DEFAULT NULL COMMENT '绿化率',
  `jianjie` mediumtext COMMENT '项目简介',
  `zbpt` mediumtext COMMENT '周边配套',
  `xqpt` mediumtext COMMENT '小区配套',
  `trans` mediumtext COMMENT '交通状况',
  `user_id` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `check` tinyint(1) DEFAULT '0',
  `is_hot` tinyint(1) DEFAULT '0',
  `del` tinyint(1) DEFAULT '0',
  `img` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of build
-- ----------------------------
INSERT INTO `build` VALUES ('1', '1', '越秀滨海新城', '待定', '19000元/㎡', '1', '1', '1', '1', '400-819-6579', '【南沙】南沙区金沙路', '2018年11月10日已推出24#', '预计2021年6月18#、20#交房', ' 带装修', '2312-12312-123213', '23123123', ' 70年', '活动优惠 性价比佳 买贵包赔 低首付 教育配套', ' 广州城建开发物业有限公司', ' 洋房 普通住宅', '暂无资料', ' 广州中璟慧富房地产开发有限公司', '大约共8300个、地上车位数788个、地下车位数7512', '950000平方米', '340000平方米', '7011户', '2.4', '35%', '越秀·滨海新城位于蕉门河中心板块，整体规模超百万方，规划总户数达7011户，是南沙中央居住区中宜居的生活大城。 越秀·滨海新城是越秀地产倾力打造的又一高品质生活社区，社区内配置幼儿园、小学、中学12年全学龄教育配套，周边更有华师附二中学等重点学校，是名副其实的教育大盘。 目前二期中央帕克全新推出，优质的户型、产品亮点突出，拥有约86-95㎡三房、107㎡四房、141㎡五房以及罕有的115㎡复式四房产品，均附送高品质智能化装修。', '中小学华师第二附属中学、南沙区少年宫、金洲小学、金隆小学等 综合商场金洲商圈、万达广场、风信子跨境免税店等 医院广州市妇女儿童医疗中心南沙院区、南沙中心医院 银行中国建设银行、中国农商银行、招商银行、广发银行、中国光大银行、农信社等', '幼儿园、会所', '公交：南沙20路沙螺湾村站 地铁：金洲地铁站、蕉门地铁站 自驾：进港大道—金沙路、进港大道—环市大道—金沙路等', '1', '2019-06-20 23:20:27', '2019-06-30 17:00:43', '1', '0', '0', '/public/static/uploads/20190630/15618787588433.jpeg', '100-120');

-- ----------------------------
-- Table structure for `build_article`
-- ----------------------------
DROP TABLE IF EXISTS `build_article`;
CREATE TABLE `build_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `build_id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` mediumtext,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of build_article
-- ----------------------------
INSERT INTO `build_article` VALUES ('1', '1', '动态2', '<p>哈哈哈2</p>', '2019-06-20 23:53:05', '2019-06-20 23:55:43');

-- ----------------------------
-- Table structure for `enlist`
-- ----------------------------
DROP TABLE IF EXISTS `enlist`;
CREATE TABLE `enlist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `build` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of enlist
-- ----------------------------
INSERT INTO `enlist` VALUES ('1', '张三1', '12331231231', '这个楼盘1', null, '0', '2019-06-23 12:55:25', '2019-06-23 12:56:43');
INSERT INTO `enlist` VALUES ('2', '张三', '1233123123', '这个楼盘', '增城', '1', '2019-06-30 17:20:47', '2019-06-30 17:20:47');
INSERT INTO `enlist` VALUES ('3', '张三', '1233123123', '越秀滨海新城', null, '0', '2019-06-30 20:21:21', '2019-06-30 20:21:21');
INSERT INTO `enlist` VALUES ('4', '123', '1233123123', '21', '123', '1', '2019-06-30 20:48:05', '2019-06-30 20:48:05');

-- ----------------------------
-- Table structure for `house`
-- ----------------------------
DROP TABLE IF EXISTS `house`;
CREATE TABLE `house` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `build_id` int(11) DEFAULT NULL,
  `house` varchar(100) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `desc` mediumtext,
  `build_s` varchar(100) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of house
-- ----------------------------
INSERT INTO `house` VALUES ('1', '1', '户型1', '/public/static/uploads/20190630/15618901506661.jpeg', '<p>123123111</p>', '9500001平方米', '2019-06-21 00:22:42', '2019-06-30 18:22:30');

-- ----------------------------
-- Table structure for `house_type`
-- ----------------------------
DROP TABLE IF EXISTS `house_type`;
CREATE TABLE `house_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of house_type
-- ----------------------------
INSERT INTO `house_type` VALUES ('1', '户型1', '1', '2019-06-15 13:31:53', '2019-06-30 14:41:22');
INSERT INTO `house_type` VALUES ('2', '一室', '0', '2019-06-30 14:41:19', '2019-06-30 14:41:19');
INSERT INTO `house_type` VALUES ('3', '二室', '0', '2019-06-30 14:41:52', '2019-06-30 14:41:52');
INSERT INTO `house_type` VALUES ('4', '三室', '0', '2019-06-30 14:42:01', '2019-06-30 14:42:01');

-- ----------------------------
-- Table structure for `img`
-- ----------------------------
DROP TABLE IF EXISTS `img`;
CREATE TABLE `img` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `build_id` int(11) DEFAULT NULL,
  `img` varchar(150) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of img
-- ----------------------------
INSERT INTO `img` VALUES ('1', '1', '/public/static/uploads/20190630/15618889184930.jpeg', '2019-06-21 00:10:56', '2019-06-30 18:01:58');

-- ----------------------------
-- Table structure for `position`
-- ----------------------------
DROP TABLE IF EXISTS `position`;
CREATE TABLE `position` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position` varchar(100) NOT NULL,
  `del` tinyint(1) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of position
-- ----------------------------
INSERT INTO `position` VALUES ('1', '南沙', '0', '2019-06-15 13:38:12', '2019-06-30 14:42:19');
INSERT INTO `position` VALUES ('2', '番禺', '0', '2019-06-30 14:42:25', '2019-06-30 14:42:25');
INSERT INTO `position` VALUES ('3', '增城', '0', '2019-06-30 14:42:28', '2019-06-30 14:42:28');

-- ----------------------------
-- Table structure for `price`
-- ----------------------------
DROP TABLE IF EXISTS `price`;
CREATE TABLE `price` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` varchar(100) DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of price
-- ----------------------------
INSERT INTO `price` VALUES ('1', '100-200', '0', '2019-06-15 13:41:46', '2019-06-15 13:41:46');
INSERT INTO `price` VALUES ('2', '200-300', '0', '2019-06-30 16:43:13', '2019-06-30 16:43:13');
INSERT INTO `price` VALUES ('3', '300-400', '0', '2019-06-30 16:43:19', '2019-06-30 16:43:19');

-- ----------------------------
-- Table structure for `type`
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '类型1', '1', '2019-06-15 13:25:28', '2019-06-30 14:40:49');
INSERT INTO `type` VALUES ('2', '住宅', '0', '2019-06-30 14:40:42', '2019-06-30 14:40:42');
INSERT INTO `type` VALUES ('3', '公寓', '0', '2019-06-30 14:40:46', '2019-06-30 14:40:46');
INSERT INTO `type` VALUES ('4', '商铺', '0', '2019-06-30 14:40:56', '2019-06-30 14:40:56');
