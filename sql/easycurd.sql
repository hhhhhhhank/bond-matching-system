-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-11-06 09:55:07
-- 服务器版本： 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `easycurd`
--

-- --------------------------------------------------------

--
-- 表的结构 `ec_lender`
--

CREATE TABLE IF NOT EXISTS `ec_lender` (
  `lender_no` int(255) NOT NULL COMMENT '借款人编码',
  `lender_name` varchar(255) NOT NULL COMMENT '借款人姓名',
  `lender_id` bigint(18) NOT NULL COMMENT '身份证号码',
  `car_model` varchar(255) NOT NULL COMMENT '车型',
  `lender_phone` bigint(11) NOT NULL COMMENT '电话',
  `lender_address` varchar(255) NOT NULL COMMENT '地址',
  `loan_amount` decimal(10,2) NOT NULL COMMENT '贷款金额',
  `loan_day` date NOT NULL COMMENT '贷款日期',
  `repayment_day` date NOT NULL COMMENT '还款期限',
  `loan_application` enum('家用','商用') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='贷款端客户信息';

-- --------------------------------------------------------

--
-- 表的结构 `ec_user`
--

CREATE TABLE IF NOT EXISTS `ec_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ec_user`
--

INSERT INTO `ec_user` (`username`, `password`) VALUES
('admin', 'zhuyan748');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
