-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2022 lúc 01:33 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acount_user`
--

CREATE TABLE `acount_user` (
  `id__acount` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `buy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `active` bit(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='3';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `bill_name` varchar(200) NOT NULL,
  `bill_address` varchar(200) NOT NULL,
  `bill_phone` varchar(20) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1Thanh toán TT 2.Chuyển khoản 3.tT Online',
  `date_buy` varchar(55) DEFAULT NULL,
  `sum` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0.Đơn hàng mowsiu 1.Đang xử lý 2.Đang giao 3.Đã giao',
  `receive_name` varchar(200) DEFAULT NULL,
  `receive_address` varchar(200) DEFAULT NULL,
  `receive_phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id_bill`, `bill_name`, `bill_address`, `bill_phone`, `bill_email`, `bill_pttt`, `date_buy`, `sum`, `bill_status`, `receive_name`, `receive_address`, `receive_phone`) VALUES
(1, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:32:01am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(2, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:35:55am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(3, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:36:05am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(4, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:37:14am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(5, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:38:07am 17/10/2022', 0, 0, NULL, NULL, NULL),
(6, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:38:20am 17/10/2022', 0, 0, NULL, NULL, NULL),
(7, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:38:22am 17/10/2022', 0, 0, NULL, NULL, NULL),
(8, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:39:01am 17/10/2022', 0, 0, NULL, NULL, NULL),
(9, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:39:11am 17/10/2022', 0, 0, NULL, NULL, NULL),
(10, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:39:35am 17/10/2022', 138680000, 0, NULL, NULL, NULL),
(11, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:40:33am 17/10/2022', 0, 0, NULL, NULL, NULL),
(12, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:41:38am 17/10/2022', 0, 0, NULL, NULL, NULL),
(13, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:41:54am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(14, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:42:14am 17/10/2022', 0, 0, NULL, NULL, NULL),
(15, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:47:25am 17/10/2022', 0, 0, NULL, NULL, NULL),
(16, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:47:45am 17/10/2022', 0, 0, NULL, NULL, NULL),
(17, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:51:31am 17/10/2022', 0, 0, NULL, NULL, NULL),
(18, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:52:55am 17/10/2022', 0, 0, NULL, NULL, NULL),
(19, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:53:57am 17/10/2022', 0, 0, NULL, NULL, NULL),
(20, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:54:13am 17/10/2022', 0, 0, NULL, NULL, NULL),
(21, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:56:20am 17/10/2022', 0, 0, NULL, NULL, NULL),
(22, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '02:56:38am 17/10/2022', 0, 0, NULL, NULL, NULL),
(23, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:01:49am 17/10/2022', 0, 0, NULL, NULL, NULL),
(24, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:02:33am 17/10/2022', 0, 0, NULL, NULL, NULL),
(25, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:02:36am 17/10/2022', 0, 0, NULL, NULL, NULL),
(26, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:03:10am 17/10/2022', 84000000, 0, NULL, NULL, NULL),
(27, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:04:20am 17/10/2022', 0, 0, NULL, NULL, NULL),
(28, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:04:34am 17/10/2022', 21360000, 0, NULL, NULL, NULL),
(29, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:05:00am 17/10/2022', 0, 0, NULL, NULL, NULL),
(30, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:05:20am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(31, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:05:25am 17/10/2022', 0, 0, NULL, NULL, NULL),
(32, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:05:32am 17/10/2022', 0, 0, NULL, NULL, NULL),
(33, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:08:59am 17/10/2022', 0, 0, NULL, NULL, NULL),
(34, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:09:04am 17/10/2022', 0, 0, NULL, NULL, NULL),
(35, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:09:21am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(36, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:09:40am 17/10/2022', 0, 0, NULL, NULL, NULL),
(37, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:10:05am 17/10/2022', 21360000, 0, NULL, NULL, NULL),
(38, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:11:20am 17/10/2022', 0, 0, NULL, NULL, NULL),
(39, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:11:36am 17/10/2022', 21360000, 0, NULL, NULL, NULL),
(40, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:12:21am 17/10/2022', 0, 0, NULL, NULL, NULL),
(41, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:12:36am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(42, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:13:26am 17/10/2022', 0, 0, NULL, NULL, NULL),
(43, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:13:48am 17/10/2022', 111560000, 0, NULL, NULL, NULL),
(44, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:14:57am 17/10/2022', 0, 0, NULL, NULL, NULL),
(45, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:15:44am 17/10/2022', 27120000, 0, NULL, NULL, NULL),
(46, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:17:36am 17/10/2022', 0, 0, NULL, NULL, NULL),
(47, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:19:13am 17/10/2022', 6800000, 0, NULL, NULL, NULL),
(48, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:19:37am 17/10/2022', 129292, 0, NULL, NULL, NULL),
(49, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:31:22am 17/10/2022', 0, 0, NULL, NULL, NULL),
(50, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:31:42am 17/10/2022', 84000000, 0, NULL, NULL, NULL),
(51, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:33:18am 17/10/2022', 12000000, 0, NULL, NULL, NULL),
(52, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:34:58am 17/10/2022', 84000000, 0, NULL, NULL, NULL),
(53, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '03:39:53am 17/10/2022', 0, 0, NULL, NULL, NULL),
(54, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:24:19am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(55, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:29:01am 17/10/2022', 0, 0, NULL, NULL, NULL),
(56, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:29:22am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(57, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:29:52am 17/10/2022', 0, 0, NULL, NULL, NULL),
(58, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:30:03am 17/10/2022', 84000000, 0, NULL, NULL, NULL),
(59, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:31:03am 17/10/2022', 0, 0, NULL, NULL, NULL),
(60, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:31:20am 17/10/2022', 27120000, 0, NULL, NULL, NULL),
(61, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:31:38am 17/10/2022', 0, 0, NULL, NULL, NULL),
(62, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:31:48am 17/10/2022', 12000000, 0, NULL, NULL, NULL),
(63, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:40:34am 17/10/2022', 0, 0, NULL, NULL, NULL),
(64, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '05:41:01am 17/10/2022', 27120000, 0, NULL, NULL, NULL),
(65, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '07:20:38am 17/10/2022', 0, 0, NULL, NULL, NULL),
(66, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '07:21:04am 17/10/2022', 1800000, 0, NULL, NULL, NULL),
(67, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '07:34:55am 17/10/2022', 39120000, 0, NULL, NULL, NULL),
(68, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '07:40:07am 17/10/2022', 0, 0, NULL, NULL, NULL),
(69, 'ducle', 'fdsfdsfsd', '53243223', 'duclqph25312@fpt.edu.vn', 0, '07:44:47am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(70, 'ducle', 'fdsfdsfsd', '53243223', 'duclqph25312@fpt.edu.vn', 0, '07:44:59am 17/10/2022', 0, 0, NULL, NULL, NULL),
(71, 'ducle', 'fdsfdsfsd', '53243223', 'duclqph25312@fpt.edu.vn', 0, '07:45:10am 17/10/2022', 21360000, 0, NULL, NULL, NULL),
(72, 'ducle', 'fdsfdsfsd', '53243223', 'duclqph25312@fpt.edu.vn', 0, '08:26:34am 17/10/2022', 47120000, 0, NULL, NULL, NULL),
(73, 'ducle', 'fdsfdsfsd', '53243223', 'duclqph25312@fpt.edu.vn', 0, '08:27:19am 17/10/2022', 0, 0, NULL, NULL, NULL),
(74, 'ducle', 'fdsfdsfsd', '53243223', 'duclqph25312@fpt.edu.vn', 0, '08:27:34am 17/10/2022', 0, 0, NULL, NULL, NULL),
(75, 'ducle', 'fdsfdsfsd', '53243223', 'duclqph25312@fpt.edu.vn', 0, '08:27:58am 17/10/2022', 27120000, 0, NULL, NULL, NULL),
(76, '', '', '', '', 0, '08:36:17am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(77, '', '', '', '', 0, '08:38:53am 17/10/2022', 6800000, 0, NULL, NULL, NULL),
(78, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '11:06:25am 17/10/2022', 20129292, 0, NULL, NULL, NULL),
(79, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '11:06:55am 17/10/2022', 20000000, 0, NULL, NULL, NULL),
(80, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '11:09:04am 17/10/2022', 0, 0, NULL, NULL, NULL),
(81, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:37:28am 20/10/2022', 27120000, 0, NULL, NULL, NULL),
(82, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:40:46am 20/10/2022', 20000000, 0, NULL, NULL, NULL),
(83, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:41:28am 20/10/2022', 27120000, 0, NULL, NULL, NULL),
(84, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:44:10am 20/10/2022', 0, 0, NULL, NULL, NULL),
(85, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:44:27am 20/10/2022', 0, 0, NULL, NULL, NULL),
(86, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:44:43am 20/10/2022', 20000000, 0, NULL, NULL, NULL),
(87, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:45:36am 20/10/2022', 0, 0, NULL, NULL, NULL),
(88, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:48:51am 20/10/2022', 47120000, 0, NULL, NULL, NULL),
(89, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:50:17am 20/10/2022', 20000000, 0, NULL, NULL, NULL),
(90, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:51:31am 20/10/2022', 47120000, 0, NULL, NULL, NULL),
(91, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:52:49am 20/10/2022', 0, 0, NULL, NULL, NULL),
(92, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:53:13am 20/10/2022', 20129292, 0, NULL, NULL, NULL),
(93, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '10:54:52am 20/10/2022', 0, 0, NULL, NULL, NULL),
(94, 'lequangduc', 'Hà Nôi', '2147483647', 'ducnhat31032002@gmail.com', 0, '12:34:27am 21/10/2022', 154409292, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_hh` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `id_bill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `id_hh`, `name`, `image`, `price`, `soluong`, `thanhtien`, `id_bill`) VALUES
(15, 0, 61, 0, 'Quần len ống suông', 6780000, 4, 27120000, 45),
(16, 0, 56, 0, 'Sam Sung ultra 21', 1700000, 4, 6800000, 47),
(17, 7, 54, 0, 'Redmi note 8', 32323, 4, 129292, 48),
(18, 7, 59, 0, 'Iphone 12', 21000000, 4, 84000000, 50),
(19, 7, 55, 0, 'Xiaomi redmi note 7', 3000000, 4, 12000000, 51),
(20, 7, 59, 0, 'Iphone 12', 21000000, 4, 84000000, 52),
(21, 7, 62, 0, 'Quần tây lưng co giãn', 5000000, 4, 20000000, 54),
(22, 7, 62, 0, 'Quần tây lưng co giãn', 5000000, 4, 20000000, 56),
(23, 7, 59, 0, 'Iphone 12', 21000000, 4, 84000000, 58),
(24, 7, 61, 0, 'Quần len ống suông', 6780000, 4, 27120000, 60),
(25, 7, 55, 0, 'Xiaomi redmi note 7', 3000000, 4, 12000000, 62),
(26, 7, 61, 0, '../upload/Sandro_SHPPA00857-44_V_1.jpg', 6780000, 4, 27120000, 64),
(27, 7, 58, 0, '../upload/Co-ao-khoac-nam.jpg', 450000, 4, 1800000, 66),
(28, 7, 61, 0, '../upload/Sandro_SHPPA00857-44_V_1.jpg', 6780000, 4, 27120000, 67),
(29, 7, 55, 0, '../upload/redmi note 7.jpg', 3000000, 4, 12000000, 67),
(30, 12, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 69),
(31, 12, 60, 0, '../upload/Sandro_SHPBE00042-94_V_1.jpg', 5340000, 4, 21360000, 71),
(32, 12, 61, 0, '../upload/Sandro_SHPPA00857-44_V_1.jpg', 6780000, 4, 27120000, 72),
(33, 12, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 72),
(34, 12, 61, 0, '../upload/Sandro_SHPPA00857-44_V_1.jpg', 6780000, 4, 27120000, 75),
(35, 0, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 76),
(36, 0, 56, 0, '../upload/sam sung s22 ultra.jpeg', 1700000, 4, 6800000, 77),
(37, 7, 54, 0, '../upload/redmi note 8.jpg', 32323, 4, 129292, 78),
(38, 7, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 78),
(39, 7, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 79),
(40, 7, 61, 0, '../upload/Sandro_SHPPA00857-44_V_1.jpg', 6780000, 4, 27120000, 81),
(41, 7, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 82),
(42, 7, 61, 0, '../upload/Sandro_SHPPA00857-44_V_1.jpg', 6780000, 4, 27120000, 83),
(43, 7, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 86),
(44, 7, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 88),
(45, 7, 61, 0, '../upload/Sandro_SHPPA00857-44_V_1.jpg', 6780000, 4, 27120000, 88),
(46, 7, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 89),
(47, 7, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 90),
(48, 7, 61, 0, '../upload/Sandro_SHPPA00857-44_V_1.jpg', 6780000, 4, 27120000, 90),
(49, 7, 62, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 5000000, 4, 20000000, 92),
(50, 7, 63, 0, '../upload/sandro_shppa00222-20_v_1.jpg', 32323, 4, 129292, 92),
(51, 7, 63, 0, './view/upload/sandro_shppa00222-20_v_1.jpg', 32323, 4, 129292, 94),
(52, 7, 60, 0, './view/upload/Sandro_SHPBE00042-94_V_1.jpg', 5340000, 4, 21360000, 94),
(53, 7, 60, 0, './view/upload/Sandro_SHPBE00042-94_V_1.jpg', 5340000, 4, 21360000, 94),
(54, 7, 57, 0, './view/upload/iphone 13 promax.jpg', 27890000, 4, 111560000, 94);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(10) NOT NULL,
  `content` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_hh` int(10) NOT NULL,
  `date_comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `content`, `id_user`, `id_hh`, `date_comment`) VALUES
(10, 'Giá rẻ bất ngời\r\n', 7, 54, '07:52:38pm 14/10/2022'),
(13, 'Sam sung rất mượt\r\n', 7, 56, '05:42:35pm 16/10/2022'),
(14, 'Áo khoác ấm\r\n', 7, 58, '06:10:29pm 16/10/2022'),
(15, 'Sản phẩm chất lượng cạo\r\n', 7, 60, '06:59:17pm 16/10/2022'),
(16, 'chất vải mặc rất thích\r\n', 7, 62, '07:41:35am 17/10/2022'),
(17, 'dsadsadsads', 7, 62, '07:58:28pm 19/10/2022'),
(18, 'sdADADASáddsa', 7, 62, '07:58:57pm 19/10/2022'),
(19, 'sdADADASáddsa', 7, 62, '08:00:53pm 19/10/2022'),
(20, 'áddsadsa', 7, 62, '08:00:59pm 19/10/2022'),
(21, 'áddsadsa', 7, 62, '08:01:44pm 19/10/2022'),
(25, 'dsaadsa', 7, 62, '08:02:26pm 19/10/2022'),
(26, 'dsaadsa', 7, 62, '08:04:10pm 19/10/2022'),
(27, 'fdsfdsfsdfd', 7, 62, '08:04:15pm 19/10/2022'),
(28, 'ewqewqe', 7, 62, '08:04:20pm 19/10/2022'),
(29, 'ewqewqe', 7, 62, '08:12:42pm 19/10/2022'),
(30, 'dsaDÂDA', 7, 61, '08:13:04pm 19/10/2022'),
(31, '1212121', 7, 62, '08:13:19pm 19/10/2022'),
(32, 'saaaaaaaaaaaaaaaaaaaa', 7, 60, '08:13:34pm 19/10/2022'),
(33, 'sSÁsaSấ', 7, 58, '08:13:45pm 19/10/2022'),
(34, 'ứdfdsfdsfds', 7, 63, '08:15:24pm 19/10/2022'),
(35, 'dâsadsadsad', 7, 62, '08:16:02pm 19/10/2022'),
(36, 'sadqwedsadqasa', 7, 63, '08:16:26pm 19/10/2022'),
(37, '1212121212121', 7, 56, '08:16:40pm 19/10/2022'),
(38, 'aSAadsadadsadsadsda', 7, 56, '08:16:58pm 19/10/2022'),
(39, 'đasadsa', 7, 59, '08:17:32pm 19/10/2022'),
(40, 'dsadsadsadsa', 7, 59, '08:17:36pm 19/10/2022'),
(41, 'qrerwerewrewrew', 7, 59, '08:17:42pm 19/10/2022'),
(44, 'đâsdsadsad', 7, 56, '08:21:35pm 19/10/2022'),
(45, 'hazzzz', 7, 63, '08:21:56pm 19/10/2022'),
(46, 'hazzzz', 7, 63, '08:22:10pm 19/10/2022'),
(60, 'khá chât\r\n', 7, 90, '01:30:41am 21/10/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commentmanage`
--

CREATE TABLE `commentmanage` (
  `id_comment` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `commodities`
--

CREATE TABLE `commodities` (
  `id_commodities` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `commodities`
--

INSERT INTO `commodities` (`id_commodities`, `name`) VALUES
(41, 'Apple'),
(42, 'Sam Sung'),
(44, 'Yody'),
(46, 'Xiaomi'),
(47, 'Oppo'),
(48, 'Sandro'),
(50, 'LapTop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goodsmanage`
--

CREATE TABLE `goodsmanage` (
  `id_hh` int(10) NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_hh` int(11) NOT NULL,
  `name_pro` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `sale` varchar(50) NOT NULL,
  `view_pro` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_hh`, `name_pro`, `image`, `price`, `detail`, `sale`, `view_pro`, `id_dm`) VALUES
(47, 'Iphone 12 Pro Max', 'iphone 12 pro max.jpg', '14000000', 'Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng\r\nCứ mỗi năm, đến dạo cuối tháng 8 và gần đầu', '13900000', 0, 41),
(52, 'Iphone 12', 'iphone 12 pro max.jpg', '32323', 'Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng\r\nCứ mỗi năm, đến dạo cuối tháng 8 và gần đầu', '432432', 0, 41),
(54, 'Redmi note 8', 'redmi note 8.jpg', '32323', '	Giống như Xiaomi Redmi Note 8 cũ, máy đã kích hoạt được trang bị Snapdragon 660, đi kèm RAM 4GB, 32', '321321', 0, 46),
(55, 'Xiaomi redmi note 7', 'redmi note 7.jpg', '3000000', 'Giống như Xiaomi Redmi Note 7 cũ, máy đã kích hoạt được trang bị Snapdragon 660, đi kèm RAM 4GB, 32G', '230000', 0, 46),
(56, 'Sam Sung ultra 21', 'sam sung s22 ultra.jpeg', '1700000', 'Đúng như các thông tin được đồn đoán trước đó, mẫu flagship mới của gả khổng lồ Hàn Quốc được ra mắt', '16000000', 0, 42),
(57, 'Iphone 13 Pro Max 128 GB', 'iphone 13 promax.jpg', '27890000', 'iPhone 13 Pro Max chắc chắn sẽ là chiếc smartphone cao cấp được quan tâm nhiều nhất trong năm 2021. ', '26789000', 0, 41),
(58, 'Áo khoác mùa thu dáng đẹp cho Nam', 'Co-ao-khoac-nam.jpg', '460000', 'Giữ ấm hiệu quả, mang lại sự an tâm cho bạn trong điều kiện thời tiết khắc nghiệt: mưa lạnh, gió mùa', '420000', 0, 44),
(59, 'Iphone 12', 'iphone-13.jpg', '21000000', 'Điện thoại iPhone 12 Pro Max: Nâng tầm đẳng cấp sử dụng\r\nCứ mỗi năm, đến dạo cuối tháng 8 và gần đầu', '15000000', 0, 41),
(60, 'Quần short phối thêu', 'Sandro_SHPBE00042-94_V_1.jpg', '5340000', 'Quần short nam Sandro\r\n• Quần short\r\n• Lưng thun co giãn với dây rút\r\n• Hai túi ở hai bên\r\n• Hình th', '4560000', 12, 48),
(61, 'Quần len ống suông', 'Sandro_SHPBE00042-94_V_1.jpg', '6780000', 'Quần nam Sandro\r\n• Virgin wool trousers\r\n• Two slanted pockets at the sides and two piped pockets at', '5678000', 55, 48),
(62, 'Quần tây lưng co giãn', 'Sandro_SHPPA00857-44_V_1.jpg', '5000000', 'Quần nam Sandro\r\n• Quần tây nam với lưng thun co giãn\r\n• Chất liệu pha len\r\n• Túi viền phía sau phối', '4000000', 44, 48),
(63, 'Quần jean', 'Sandro_SHPPA00857-44_V_1.jpg', '32323', 'Quần nam Sandro • Quần tây nam với lưng thun co giãn • Chất liệu pha len • Túi viền phía sau phối', '321321321', 32, 48),
(87, 'dsadsa', 'Sandro_SHPBE00042-94_V_1.jpg', '321321', 'dsadsadsa', '321321', 123, 50),
(88, 'dsdsasds', 'Co-ao-khoac-nam.jpg', '3213', 'dfasadsa', '13213', 31, 50),
(89, 'Quần jean', 'sandro_shppa00222-20_v_1.jpg', '230000', 'eqwedsa', '120000', 32, 50),
(90, 'oppoe', 'rog phone 5 pro.jpg', '12112321', 'gdfsf', '321213', 34, 47);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `name`, `password`, `email`, `address`, `phone`, `role`) VALUES
(7, 'lequangduc', '310302', 'ducnhat31032002@gmail.com', 'Hà Nôi', 0, 1),
(13, 'leduc', '31032002', 'duclqph25312@fpt.edu.vn', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `usermanage`
--

CREATE TABLE `usermanage` (
  `id_admin` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acount_user`
--
ALTER TABLE `acount_user`
  ADD PRIMARY KEY (`id__acount`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_bill` (`id_bill`),
  ADD KEY `id_hh` (`id_hh`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_hh` (`id_hh`);

--
-- Chỉ mục cho bảng `commentmanage`
--
ALTER TABLE `commentmanage`
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_comment` (`id_comment`);

--
-- Chỉ mục cho bảng `commodities`
--
ALTER TABLE `commodities`
  ADD PRIMARY KEY (`id_commodities`);

--
-- Chỉ mục cho bảng `goodsmanage`
--
ALTER TABLE `goodsmanage`
  ADD KEY `id_admin` (`id_admin`),
  ADD KEY `id_hh` (`id_hh`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_hh`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `usermanage`
--
ALTER TABLE `usermanage`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `acount_user`
--
ALTER TABLE `acount_user`
  MODIFY `id__acount` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `commodities`
--
ALTER TABLE `commodities`
  MODIFY `id_commodities` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `acount_user`
--
ALTER TABLE `acount_user`
  ADD CONSTRAINT `acount_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bill` (`id_bill`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_hh`) REFERENCES `products` (`id_hh`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_hh`) REFERENCES `products` (`id_hh`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Các ràng buộc cho bảng `commentmanage`
--
ALTER TABLE `commentmanage`
  ADD CONSTRAINT `commentmanage_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `commentmanage_ibfk_2` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id_comment`);

--
-- Các ràng buộc cho bảng `goodsmanage`
--
ALTER TABLE `goodsmanage`
  ADD CONSTRAINT `goodsmanage_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `goodsmanage_ibfk_2` FOREIGN KEY (`id_hh`) REFERENCES `products` (`id_hh`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `commodities` (`id_commodities`);

--
-- Các ràng buộc cho bảng `usermanage`
--
ALTER TABLE `usermanage`
  ADD CONSTRAINT `usermanage_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `usermanage_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
