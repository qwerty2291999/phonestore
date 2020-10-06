-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2020 lúc 09:29 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accountclass`
--

CREATE TABLE `accountclass` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `session_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `accountclass`
--

INSERT INTO `accountclass` (`id`, `username`, `password`, `session_id`) VALUES
(1, '1', '1', ''),
(2, '2', '2', ''),
(3, '3', '3', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `item_code` varchar(250) NOT NULL,
  `item_description` text NOT NULL,
  `item_price` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_code`, `item_description`, `item_price`, `name`) VALUES
(12, 'asdsad', 'sadsadsa', 'dsadasd', 'sadsad', ''),
(13, 'asdsad', 'adsad', 'sadsad', 'asdsad', ''),
(15, 'a', 'a', 'a', 'a', ''),
(17, 'a', 'a', 'a', 'a', 'a'),
(18, '12', '23', '123', '213', 'a'),
(19, '12312', '21321', '213123', '123', 'a'),
(20, 'sad', 'asdasd', 'sadasd', 'sadasd', ''),
(21, 'asdas', 'sdasd', 'asdasd', 'sadasd', ''),
(22, 'sadsa', 'asd', 'sadsadas', 'sdasdasd', 'a'),
(23, 'sadsa', 'dsadas', 'dasdsad', 'sdsadas', 'a'),
(24, 'asdasd', 'sadas', 'dasdasdas', 'asdasdas', 'a'),
(25, 'asdasd', 'sadas', 'dsadasd', 'asdasd', ''),
(26, 'sadasd', 'asdasd', 'asdasd', 'sadasd', ''),
(27, 'sad', 'sadas', 'dasd', 'asdasd', ''),
(28, 'Save', 'sadsad', 'asdsad', 'sadasdsa', ''),
(29, 'Save', 'sadas', 'dsadas', 'ddasd', ''),
(30, 'asdsad', 'asda', 'sdsadasd', 'asdsad', ''),
(31, 'dasd', 'asdas', 'dsadasd', 'dsadas', ''),
(32, 'sadas', 'dsad', 'sadsads', 'dsadsa', ''),
(33, 'dasdsa', 'asdas', 'asdasd', 'sad', ''),
(34, 'dasd', 'asdasd', 'sadasd', 'asdas', ''),
(35, 'sad', 'asd', 'asdasd', 'asdasd', ''),
(36, 'dasd', 'sadsad', 'asdsad', 'sadasdasd', ''),
(37, 'dsadsa', 'dsadsad', 'sadsad', 'sad', ''),
(38, 'sada', 'sdas', 'dasdasdas', 'dasdasd', ''),
(39, 'a', 'a', 'a', 'a', 'a'),
(40, 'sadas', 'dsad', 'asdsad', 'asdsad', 'a'),
(41, 'asda', 'asdasdas', 'dasdasd', 'asdsad', 'a'),
(42, 'dasdasd', 'asd', 'asdasdas', 'dasdsad', 'a'),
(43, '1', '', '', '', 'a'),
(44, '1', '', '', '', 'a'),
(45, '1', '', '', '', 'a'),
(46, '1', '', '', '', 'a'),
(47, '1', '', '', '', 'a'),
(48, '1', '', '', '', 'a'),
(49, '2', '', '', '', 'a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderclass`
--

CREATE TABLE `orderclass` (
  `order_id` int(20) NOT NULL,
  `shoe_id` int(20) NOT NULL,
  `shoes_brand` varchar(20) NOT NULL,
  `shoe_type` varchar(20) NOT NULL,
  `shoe_name` varchar(20) NOT NULL,
  `shoe_price` int(20) NOT NULL,
  `shoe_color` varchar(20) NOT NULL,
  `shoe_quantity` int(20) DEFAULT 1,
  `shoe_totalprice` int(50) NOT NULL,
  `shoe_image` varchar(20) NOT NULL,
  `order_sessions` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orderclass`
--

INSERT INTO `orderclass` (`order_id`, `shoe_id`, `shoes_brand`, `shoe_type`, `shoe_name`, `shoe_price`, `shoe_color`, `shoe_quantity`, `shoe_totalprice`, `shoe_image`, `order_sessions`, `userid`) VALUES
(144, 3, 'Samsung', 'Galaxy', 'S20', 3000000, 'Blue', 1, 3000000, 'product-3.jpg', 'p86ojgfh9c4ovie086u6jubhue', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `paymentclass`
--

CREATE TABLE `paymentclass` (
  `payment_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `date_time_end` date NOT NULL,
  `order_id` int(20) NOT NULL,
  `shoe_id` int(20) NOT NULL,
  `shoe_name` varchar(20) NOT NULL,
  `shoe_quantity` int(20) NOT NULL,
  `total_price` int(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Ongoing',
  `sessions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `paymentclass`
--

INSERT INTO `paymentclass` (`payment_id`, `name`, `phone_number`, `email`, `address`, `date_time`, `date_time_end`, `order_id`, `shoe_id`, `shoe_name`, `shoe_quantity`, `total_price`, `status`, `sessions`) VALUES
(73, '', 0, '', '', '2020-04-29 13:42:34', '2020-05-03', 136, 2, 'K20222', 1, 690000054, 'Canceled', 'os2sd0d29cirsok7aap4mcbjbl'),
(75, '', 0, '', '', '2020-04-29 14:00:26', '2020-05-03', 142, 2, 'K20222', 1, 690000054, 'Done', 'p86ojgfh9c4ovie086u6jubhue'),
(78, '123123', 343232, '13123', '', '2020-10-07 01:15:26', '2020-10-06', 153, 1, 'A 1234e', 2, 40000, 'Done', '2h8nmqlcq1trbj5k7s85lj9rjl'),
(79, 'a', 0, 'qasdasd', 'dasdas', '2020-10-07 01:52:48', '2020-10-06', 154, 2, 'K20223', 3, 2070000162, 'Done', 'ucva1mpou68gk6de8dv30fn572');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviewsclass`
--

CREATE TABLE `reviewsclass` (
  `id` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `shoe_id` int(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `reviewsclass`
--

INSERT INTO `reviewsclass` (`id`, `name`, `comment`, `shoe_id`, `date`) VALUES
(17, 'name', 'sdasdsadasd', 3, '0000-00-00 00:00:00'),
(18, 'name', 'sadsadasd', 3, '2020-04-24 15:23:03'),
(19, 'name', 'sadsadasda', 3, '2020-04-24 15:23:32'),
(20, 'name1', 'ádsad', 3, '2020-04-24 15:26:24'),
(22, 'name', 'ádasd', 2, '2020-04-24 15:34:34'),
(24, 'name2', 'sadsad', 1, '2020-04-24 16:05:54'),
(26, 'name', 'sadasdsa', 1, '2020-04-24 16:09:58'),
(27, 'name', 'sadasdasd', 1, '2020-04-24 16:38:04'),
(28, 'name', 'cccccccccccccccccccccccccccccccccccccccccccccccc', 1, '2020-04-24 16:47:08'),
(29, 'nameád', 'ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 1, '2020-04-24 16:47:21'),
(30, 'name', 'ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 1, '2020-04-24 16:47:38'),
(31, 'name', 'ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc', 1, '2020-04-24 16:47:49'),
(32, 'toi la ai', 'ádasdsadasd', 1, '2020-04-24 16:53:34'),
(33, 'xin zhao ', 'điện thoại xịn đáng mua', 1, '2020-04-24 16:54:05'),
(34, 'deo can ten', 'nhu cc', 2, '2020-04-24 16:54:29'),
(35, 'name', 'vczczxc', 2, '2020-04-24 16:55:11'),
(36, 'name123', 'dsadsadsa', 3, '2020-04-24 19:28:07'),
(37, 'name', 'sadasdsadsds', 3, '2020-04-24 19:28:12'),
(38, 'name', 'ádasdasd', 3, '2020-04-24 19:28:18'),
(39, 'name', 'sadasdsadad', 3, '2020-04-24 19:28:23'),
(40, 'sadasd', 'hang lởm', 2, '2020-04-24 23:12:35'),
(41, 'name', 'sadasdasd', 2, '2020-04-25 14:22:19'),
(42, 'cdasd', 'sadasd', 1, '2020-04-25 15:40:50'),
(43, 'xin', 'hang xin', 1, '2020-04-25 16:33:30'),
(44, 'sadasd', 'dsadsa', 6, '2020-04-27 13:49:45'),
(45, '1231', 'adasdsadas', 2, '2020-10-07 00:58:01'),
(46, '123123', 'ádasdas', 2, '2020-10-07 00:58:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessionsclass`
--

CREATE TABLE `sessionsclass` (
  `sessions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sessionsclass`
--

INSERT INTO `sessionsclass` (`sessions`) VALUES
('1sdfasdasdasdasasdasd'),
('2h8nmqlcq1trbj5k7s85lj9rjl'),
('2sdfaasdasdassdasdasdasasdasd'),
('d41433tu6fctc5dbn31spojkg8'),
('dsadsadadsdadad'),
('g37up0lte2o1bhtdmmlaefcu00'),
('os2sd0d29cirsok7aap4mcbjbl'),
('p86ojgfh9c4ovie086u6jubhue'),
('ucva1mpou68gk6de8dv30fn572');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shoesclass`
--

CREATE TABLE `shoesclass` (
  `shoe_id` int(20) NOT NULL,
  `shoe_name` varchar(20) NOT NULL,
  `shoe_price` int(20) NOT NULL,
  `shoe_type` varchar(20) NOT NULL,
  `shoe_color` varchar(20) NOT NULL,
  `shoes_brand` varchar(20) NOT NULL,
  `shoe_image` varchar(20) NOT NULL,
  `shoe_descriptions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `shoesclass`
--

INSERT INTO `shoesclass` (`shoe_id`, `shoe_name`, `shoe_price`, `shoe_type`, `shoe_color`, `shoes_brand`, `shoe_image`, `shoe_descriptions`) VALUES
(1, 'A 1234e', 20000, 'Redmi', 'Red', 'Xiaomi', 'product-1.jpg', 'day la dient hoai cuc xin ten la k123213211'),
(2, 'K20223', 690000054, 'Redmi', 'Blue', 'Xiaomi', 'product-2.jpg', 'Xiaomi Redmi K20 Blue'),
(3, 'S20', 3000000, 'Galaxy', 'Blue', 'Samsung', 'product-3.jpg', 'Samsung Galaxy S20'),
(6, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(7, 'Mi 10', 6900000, 'Pro', 'Red', 'Mi', 'product-4.jpg', 'Dien thoai'),
(8, 'Note 10', 10000000, 'Galaxy', 'White', 'Samsung', 'product-4.jpg', 'Samsung Galaxy Note 10'),
(9, 'K20', 7230000, 'Redmi', 'Red', 'Xiaomi', 'product-1.jpg', 'Xiaomi Redmi K20'),
(10, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(11, 'K20', 7230000, 'Redmi', 'Red', 'Xiaomi', 'product-1.jpg', 'Xiaomi Redmi K20'),
(12, 'K20', 6900000, 'Redmi', 'Blue', 'Xiaomi', 'product-2.jpg', 'Xiaomi Redmi K20 Blue'),
(13, 'K20', 7230000, 'Redmi', 'Red', 'Xiaomi', 'product-1.jpg', 'Xiaomi Redmi K20'),
(14, 'Mi 10', 6900000, 'Pro', 'Red', 'Mi', 'product-4.jpg', 'Dien thoai'),
(15, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(16, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(17, 'Note 10', 10000000, 'Galaxy', 'White', 'Samsung', 'product-4.jpg', 'Samsung Galaxy Note 10'),
(18, 'S20', 3000000, 'Galaxy', 'Blue', 'Samsung', 'product-3.jpg', 'Samsung Galaxy S20'),
(19, 'K20', 7230000, 'Redmi', 'Red', 'Xiaomi', 'product-1.jpg', 'Xiaomi Redmi K20'),
(20, 'K20', 6900000, 'Redmi', 'Blue', 'Xiaomi', 'product-2.jpg', 'Xiaomi Redmi K20 Blue'),
(21, 'K20', 7230000, 'Redmi', 'Red', 'Xiaomi', 'product-1.jpg', 'Xiaomi Redmi K20'),
(22, 'K20', 7230000, 'Redmi', 'Red', 'Xiaomi', 'product-1.jpg', 'Xiaomi Redmi K20'),
(23, 'K20', 6900000, 'Redmi', 'Blue', 'Xiaomi', 'product-2.jpg', 'Xiaomi Redmi K20 Blue'),
(24, 'K20', 7230000, 'Redmi', 'Red', 'Xiaomi', 'product-1.jpg', 'Xiaomi Redmi K20'),
(25, 'Mi 10', 6900000, 'Pro', 'Red', 'Mi', 'product-4.jpg', 'Dien thoai'),
(26, 'Mi 10', 6900000, 'Pro', 'Red', 'Mi', 'product-4.jpg', 'Dien thoai'),
(27, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(28, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(29, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(30, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(31, 'Note 10', 10000000, 'Galaxy', 'White', 'Samsung', 'product-4.jpg', 'Samsung Galaxy Note 10'),
(32, 'Note 10', 10000000, 'Galaxy', 'White', 'Samsung', 'product-4.jpg', 'Samsung Galaxy Note 10'),
(33, 'S20', 3000000, 'Galaxy', 'Blue', 'Samsung', 'product-3.jpg', 'Samsung Galaxy S20'),
(34, 'S20', 3000000, 'Galaxy', 'Blue', 'Samsung', 'product-3.jpg', 'Samsung Galaxy S20'),
(35, 'Note 10', 6900000, 'Pro', 'Red', 'Mi', 'product-5.jpg', 'Samsung Galaxy Note 10'),
(37, 'K20', 123123123, 'Redmi', 'red', 'Xiaomi', '1', 'asdasdasd'),
(41, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(42, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro'),
(43, 'Mi 9', 6900000, 'Pro', 'Red', 'Mi', 'product-3.jpg', 'Mi 9 Pro');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `totalpaymentprice`
--

CREATE TABLE `totalpaymentprice` (
  `total_price` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accountclass`
--
ALTER TABLE `accountclass`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Chỉ mục cho bảng `orderclass`
--
ALTER TABLE `orderclass`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `shoe_id` (`shoe_id`),
  ADD KEY `order_sessions` (`order_sessions`(20)),
  ADD KEY `userid` (`userid`),
  ADD KEY `order_sessions_2` (`order_sessions`);

--
-- Chỉ mục cho bảng `paymentclass`
--
ALTER TABLE `paymentclass`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `total_price` (`total_price`),
  ADD KEY `total_price_2` (`total_price`),
  ADD KEY `order_id` (`order_id`,`shoe_id`,`sessions`),
  ADD KEY `shoe_id` (`shoe_id`),
  ADD KEY `sessions` (`sessions`);

--
-- Chỉ mục cho bảng `reviewsclass`
--
ALTER TABLE `reviewsclass`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shoe_id` (`shoe_id`);

--
-- Chỉ mục cho bảng `sessionsclass`
--
ALTER TABLE `sessionsclass`
  ADD PRIMARY KEY (`sessions`);

--
-- Chỉ mục cho bảng `shoesclass`
--
ALTER TABLE `shoesclass`
  ADD PRIMARY KEY (`shoe_id`),
  ADD KEY `shoe_image` (`shoe_image`);

--
-- Chỉ mục cho bảng `totalpaymentprice`
--
ALTER TABLE `totalpaymentprice`
  ADD PRIMARY KEY (`total_price`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accountclass`
--
ALTER TABLE `accountclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `orderclass`
--
ALTER TABLE `orderclass`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT cho bảng `paymentclass`
--
ALTER TABLE `paymentclass`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT cho bảng `reviewsclass`
--
ALTER TABLE `reviewsclass`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `shoesclass`
--
ALTER TABLE `shoesclass`
  MODIFY `shoe_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orderclass`
--
ALTER TABLE `orderclass`
  ADD CONSTRAINT `orderclass_ibfk_2` FOREIGN KEY (`shoe_id`) REFERENCES `shoesclass` (`shoe_id`),
  ADD CONSTRAINT `orderclass_ibfk_3` FOREIGN KEY (`order_sessions`) REFERENCES `sessionsclass` (`sessions`);

--
-- Các ràng buộc cho bảng `paymentclass`
--
ALTER TABLE `paymentclass`
  ADD CONSTRAINT `paymentclass_ibfk_2` FOREIGN KEY (`shoe_id`) REFERENCES `shoesclass` (`shoe_id`),
  ADD CONSTRAINT `paymentclass_ibfk_3` FOREIGN KEY (`sessions`) REFERENCES `sessionsclass` (`sessions`);

--
-- Các ràng buộc cho bảng `reviewsclass`
--
ALTER TABLE `reviewsclass`
  ADD CONSTRAINT `reviewsclass_ibfk_1` FOREIGN KEY (`shoe_id`) REFERENCES `shoesclass` (`shoe_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
