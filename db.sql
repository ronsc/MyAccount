﻿-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `db_account`
-- 
CREATE DATABASE `db_account` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_account`;

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `buy`
-- 

CREATE TABLE `buy` (
  `id` int(11) NOT NULL auto_increment,
  `date` date NOT NULL,
  `list` varchar(255) NOT NULL,
  `b_money` int(5) NOT NULL,
  `created_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

-- 
-- dump ตาราง `buy`
-- 

INSERT INTO `buy` VALUES (1, '2014-01-30', 'น้ำมันรถ', 100, '2014-02-05 01:02:21');
INSERT INTO `buy` VALUES (2, '2014-01-30', 'ข้าวกลางวัน', 30, '2014-02-05 01:02:38');
INSERT INTO `buy` VALUES (3, '2014-01-30', 'ข้าวเย็น', 35, '2014-02-05 01:02:54');
INSERT INTO `buy` VALUES (4, '2014-01-30', 'ซื้อขนม', 30, '2014-02-05 01:03:11');
INSERT INTO `buy` VALUES (5, '2014-01-30', 'เติมเงิน', 25, '2014-02-05 01:03:22');
INSERT INTO `buy` VALUES (6, '2014-01-31', 'ซื้อปลาท่องโก๋', 10, '2014-02-05 01:04:57');
INSERT INTO `buy` VALUES (7, '2014-01-31', 'ข้าวต้ม', 35, '2014-02-05 01:05:14');
INSERT INTO `buy` VALUES (8, '2014-01-31', 'ข้าวกลางวัน', 40, '2014-02-05 01:05:22');
INSERT INTO `buy` VALUES (9, '2014-01-31', 'ซื้อผลไม้', 20, '2014-02-05 01:05:41');
INSERT INTO `buy` VALUES (10, '2014-01-31', 'ซื้อน้ำเปล่า	+ ขนม', 35, '2014-02-05 01:06:36');
INSERT INTO `buy` VALUES (11, '2014-01-31', 'ซักผ้า', 15, '2014-02-05 01:06:20');
INSERT INTO `buy` VALUES (12, '2014-02-01', 'ข้าวกลางวัน', 35, '2014-02-05 01:10:49');
INSERT INTO `buy` VALUES (13, '2014-02-01', 'ใส่กระจกมอเตอร์ไซค์', 100, '2014-02-05 01:11:27');
INSERT INTO `buy` VALUES (14, '2014-02-01', 'ล้างมอเตอร์ไซค์', 40, '2014-02-05 01:11:49');
INSERT INTO `buy` VALUES (15, '2014-02-01', 'ซื้อผลไม้', 20, '2014-02-05 01:11:55');
INSERT INTO `buy` VALUES (16, '2014-02-02', 'ข้าวกลางวัน', 35, '2014-02-05 01:12:22');
INSERT INTO `buy` VALUES (17, '2014-02-02', 'กินย่างเกาหลี (อาอี๋)', 220, '2014-02-05 01:12:48');
INSERT INTO `buy` VALUES (18, '2014-02-02', 'ซื้อน้ำเปล่า	', 15, '2014-02-05 01:12:58');
INSERT INTO `buy` VALUES (19, '2014-02-03', 'ข้าวกลางวัน', 30, '2014-02-05 01:13:13');
INSERT INTO `buy` VALUES (20, '2014-02-03', 'ซื้อผลไม้', 20, '2014-02-05 01:13:22');
INSERT INTO `buy` VALUES (21, '2014-02-03', 'ซื้อน้ำเปล่า	', 15, '2014-02-05 01:13:32');
INSERT INTO `buy` VALUES (22, '2014-02-03', 'ซื้อไข่ต้ม', 15, '2014-02-05 01:13:40');
INSERT INTO `buy` VALUES (23, '2014-02-04', 'ข้าวกลางวัน', 40, '2014-02-05 01:14:04');
INSERT INTO `buy` VALUES (24, '2014-02-04', 'ซื้อไข่ต้ม', 15, '2014-02-05 01:14:14');
INSERT INTO `buy` VALUES (25, '2014-02-04', 'ซื้อผลไม้', 20, '2014-02-05 01:14:21');
INSERT INTO `buy` VALUES (26, '2014-02-05', 'ข้าวกลางวัน', 35, '2014-02-05 13:16:24');
INSERT INTO `buy` VALUES (27, '2014-02-05', 'ซื้อขนมปัง(นัดมอ)', 30, '2014-02-05 13:17:00');
INSERT INTO `buy` VALUES (28, '2014-02-05', 'ซักผ้า', 20, '2014-02-05 13:17:09');
INSERT INTO `buy` VALUES (29, '2014-02-05', 'ซื้อผลไม้', 25, '2014-02-05 20:30:07');
INSERT INTO `buy` VALUES (30, '2014-02-05', 'ซื้อไข่ต้ม', 15, '2014-02-05 20:30:12');
INSERT INTO `buy` VALUES (31, '2014-02-05', 'ซื้อนมโฟโมส', 17, '2014-02-05 20:30:24');
INSERT INTO `buy` VALUES (32, '2014-02-05', 'ซื้อยาสีฟัน', 31, '2014-02-05 20:30:36');
INSERT INTO `buy` VALUES (33, '2014-02-05', 'เติมเงิน', 20, '2014-02-05 20:31:04');
INSERT INTO `buy` VALUES (34, '2014-02-05', 'ซื้อน้ำเปล่า	', 15, '2014-02-06 00:05:51');
INSERT INTO `buy` VALUES (35, '2014-02-06', 'ข้าวกลางวัน', 35, '2014-02-06 21:53:36');
INSERT INTO `buy` VALUES (36, '2014-02-06', 'ซื้อผลไม้', 25, '2014-02-06 21:53:42');
INSERT INTO `buy` VALUES (37, '2014-02-06', 'ซื้อไข่ต้ม', 15, '2014-02-06 21:53:50');
INSERT INTO `buy` VALUES (38, '2014-02-07', 'ซื้อน้ำเปล่า	', 15, '2014-02-07 23:18:00');
INSERT INTO `buy` VALUES (39, '2014-02-07', 'กินนม(สุดเขต)', 90, '2014-02-07 23:18:26');
INSERT INTO `buy` VALUES (40, '2014-02-07', 'ข้าวกลางวัน', 30, '2014-02-07 23:18:38');
INSERT INTO `buy` VALUES (41, '2014-02-07', 'ทำบุญ', 10, '2014-02-07 23:18:51');
INSERT INTO `buy` VALUES (42, '2014-02-07', 'กินข้าวต้ม', 42, '2014-02-07 23:19:20');
INSERT INTO `buy` VALUES (43, '2014-02-07', 'ซื้อเค้กให้แอ้', 20, '2014-02-07 23:19:36');
INSERT INTO `buy` VALUES (44, '2014-02-07', 'จ่ายค่าเสื้อ ค่าย Linux & C', 150, '2014-02-07 23:23:16');
INSERT INTO `buy` VALUES (45, '2014-02-07', 'จ่ายค่าเสื้อ ค่าย Linux & C (ให้เจมส์)', 150, '2014-02-07 23:23:30');
INSERT INTO `buy` VALUES (46, '2014-02-08', 'ซื้อขนม', 20, '2014-02-08 17:01:31');
INSERT INTO `buy` VALUES (47, '2014-02-08', 'ข้าวกลางวัน', 35, '2014-02-08 17:01:40');
INSERT INTO `buy` VALUES (48, '2014-02-08', 'เติมน้ำมันรถ', 100, '2014-02-08 17:02:00');
INSERT INTO `buy` VALUES (49, '2014-02-08', 'ซื้อน้ำเปล่า	', 15, '2014-02-08 20:46:33');
INSERT INTO `buy` VALUES (50, '2014-02-08', 'ซื้อสปอนเซอร์', 10, '2014-02-08 20:46:51');
INSERT INTO `buy` VALUES (51, '2014-02-08', 'ข้าวเย็น', 40, '2014-02-08 23:59:19');
INSERT INTO `buy` VALUES (52, '2014-02-09', 'ข้าวกลางวัน', 35, '2014-02-09 14:37:37');
INSERT INTO `buy` VALUES (53, '2014-02-09', 'ซักผ้า', 15, '2014-02-09 14:39:00');
INSERT INTO `buy` VALUES (54, '2014-02-09', 'ซื้อผลไม้', 25, '2014-02-09 19:41:24');
INSERT INTO `buy` VALUES (55, '2014-02-09', 'ซื้อน้ำเปล่า	', 15, '2014-02-09 19:41:30');
INSERT INTO `buy` VALUES (56, '2014-02-09', 'ซื้อไข่ต้ม', 15, '2014-02-09 19:41:38');
INSERT INTO `buy` VALUES (57, '2014-02-09', 'ซื้อขนมปัง(เซเว่น)', 7, '2014-02-09 19:42:13');
INSERT INTO `buy` VALUES (58, '2014-02-09', 'ซื้อผลไม้(แอ้)', 20, '2014-02-09 19:42:28');
INSERT INTO `buy` VALUES (59, '2014-02-10', 'ฝากเงิน(ไทยพาณิชย์)', 200, '2014-02-10 11:16:59');
INSERT INTO `buy` VALUES (60, '2014-02-10', 'ข้าวกลางวัน', 30, '2014-02-10 11:17:13');
INSERT INTO `buy` VALUES (61, '2014-02-10', 'ซื้อผลไม้', 20, '2014-02-10 16:56:28');
INSERT INTO `buy` VALUES (62, '2014-02-10', 'ซื้อขนมปัง(เซเว่น)', 13, '2014-02-10 16:56:46');
INSERT INTO `buy` VALUES (63, '2014-02-10', 'ซื้อนมไวตามิลล์', 10, '2014-02-10 16:57:06');
INSERT INTO `buy` VALUES (64, '2014-02-10', 'ซื้อไข่ต้ม', 15, '2014-02-10 16:57:11');
INSERT INTO `buy` VALUES (65, '2014-02-10', 'แอ้ยืมซื้อผลไม้', 20, '2014-02-11 19:08:03');
INSERT INTO `buy` VALUES (66, '2014-02-10', 'ข้าวเย็น(ไข่เจียว)', 25, '2014-02-11 19:08:39');
INSERT INTO `buy` VALUES (67, '2014-02-11', 'ข้าวเย็น(ไข่เจียว)(แอ้)', 25, '2014-02-11 19:08:49');
INSERT INTO `buy` VALUES (68, '2014-02-11', 'ข้าวเช้า', 30, '2014-02-11 19:09:09');
INSERT INTO `buy` VALUES (69, '2014-02-11', 'แกน Lotting', 30, '2014-02-11 19:09:21');
INSERT INTO `buy` VALUES (70, '2014-02-11', 'ข้าวกลางวัน', 40, '2014-02-11 19:09:39');
INSERT INTO `buy` VALUES (71, '2014-02-11', 'ซื้อไข่ต้ม', 15, '2014-02-11 19:09:55');
INSERT INTO `buy` VALUES (72, '2014-02-12', 'ข้าวกลางวัน', 30, '2014-02-12 20:55:03');
INSERT INTO `buy` VALUES (73, '2014-02-12', 'ซื้อขนมปัง(นัดมอ)', 30, '2014-02-12 20:55:19');
INSERT INTO `buy` VALUES (74, '2014-02-12', 'ซื้อข้าวโพดทอด(นัดมอ)', 20, '2014-02-12 20:55:40');
INSERT INTO `buy` VALUES (75, '2014-02-12', 'ซื้อไข่ต้ม', 15, '2014-02-12 20:55:47');
INSERT INTO `buy` VALUES (76, '2014-02-12', 'ซื้อนมโฟโมส', 12, '2014-02-12 20:56:03');
INSERT INTO `buy` VALUES (77, '2014-02-12', 'ซื้อน้ำเปล่า	', 15, '2014-02-12 21:01:40');
INSERT INTO `buy` VALUES (78, '2014-02-13', 'ข้าวกลางวัน', 40, '2014-02-13 21:39:07');
INSERT INTO `buy` VALUES (79, '2014-02-13', 'ซื้อขนมปัง(เซเว่น)', 14, '2014-02-14 00:08:24');
INSERT INTO `buy` VALUES (80, '2014-02-13', 'ซื้อน้ำเปล่า	', 15, '2014-02-13 21:39:37');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `recieve`
-- 

CREATE TABLE `recieve` (
  `id` int(5) NOT NULL auto_increment,
  `date` date NOT NULL,
  `from` varchar(255) NOT NULL,
  `r_money` int(5) NOT NULL,
  `created_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- 
-- dump ตาราง `recieve`
-- 

INSERT INTO `recieve` VALUES (1, '2014-01-30', 'มีเงินอยู่', 540, '2014-02-05 00:59:26');
INSERT INTO `recieve` VALUES (2, '2014-02-01', 'กดเงินมา', 300, '2014-02-05 00:59:51');
INSERT INTO `recieve` VALUES (3, '2014-02-03', 'กดเงินมา', 200, '2014-02-05 01:00:14');
INSERT INTO `recieve` VALUES (4, '2014-02-05', 'กดเงินมา', 200, '2014-02-05 20:29:52');
INSERT INTO `recieve` VALUES (5, '2014-02-06', 'กดเงินมา', 300, '2014-02-06 21:53:20');
INSERT INTO `recieve` VALUES (6, '2014-02-07', 'กดเงินมา', 500, '2014-02-07 23:17:42');
INSERT INTO `recieve` VALUES (7, '2014-02-09', 'เจมส์ให้ค่าเสื้อ', 50, '2014-02-09 14:38:07');
INSERT INTO `recieve` VALUES (8, '2014-02-09', 'เจมส์ให้ค่าเสื้อ', 100, '2014-02-09 19:41:02');
INSERT INTO `recieve` VALUES (9, '2014-02-10', 'กดเงินมา', 500, '2014-02-10 11:16:33');
INSERT INTO `recieve` VALUES (10, '2014-02-12', 'ยืมโก้(สุรินทร์) - นัดมอ', 100, '2014-02-12 20:56:36');
INSERT INTO `recieve` VALUES (11, '2014-02-12', 'กดเงินมา', 300, '2014-02-12 20:56:44');
