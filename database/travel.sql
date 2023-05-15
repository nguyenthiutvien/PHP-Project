-- phpMyAdmin SQL Dumpimplementation

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 18, 2023 lúc 06:12 PM
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
-- Cơ sở dữ liệu: `traveldana`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_name` text COLLATE utf8_unicode_ci NOT NULL,
  `account_pass` text COLLATE utf8_unicode_ci NOT NULL,
  `account_email` text COLLATE utf8_unicode_ci NOT NULL,
  `account_status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_pass`, `account_email`, `account_status`) VALUES
(1, 'Nguyen Vien', 'Vien123', 'ntuv003@gmail.com', 'Being active');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `activity_name` text COLLATE utf8_unicode_ci NOT NULL,
  `activity_password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_password`) VALUES
(113, 'Nguyen Vien', 'Vien123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `admin_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`admin_user`) VALUES
(1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `img_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `author_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `time_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `title_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `content_blog` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id_blog`, `img_blog`, `author_blog`, `time_blog`, `title_blog`, `content_blog`) VALUES
(1, 'blog1.jpg', 'Ut Vien', '29 April,2021', 'Travel Insuranve Benefits', 'Travel Insurance is the kind of insuarance pays the expenses and damages that concern the travels.'),
(2, 'blog2.jpg', 'Bich Ho', '11 April, 2021', 'Travel Guideline Agents', 'Please contact us for the most enjoyable experience. We will always stand by you on your journey.'),
(3, 'blog3.jpg', 'Tai Ho', '11 April, 2021', 'Secure Travel Tips', 'Please contact us for the most enjoyable experience. We will always stand by you on your journey.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `image_tour` text COLLATE utf8_unicode_ci NOT NULL,
  `name_tour` text COLLATE utf8_unicode_ci NOT NULL,
  `price_tour` decimal(10,0) NOT NULL,
  `from_to` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_account`, `id_tour`, `image_tour`, `name_tour`, `price_tour`, `from_to`, `status`) VALUES
(33, 31, 17, 'du-lich-phu-quoc-17.jpg', 'Fall tour 2021', '99999', 'Tay Son-Binh Dinh', 'Confirmed'),
(34, 31, 16, 'sapa.jpg', 'Summer tour 2021', '99999', 'Tay Son-Binh Dinh', 'checking in'),
(36, 30, 3, 'vịnh lan hạ.jpg', 'Ocean tour 2021', '99999', 'Da Nang- Viet  Nam', 'Confirmed'),
(37, 30, 3, 'vịnh lan hạ.jpg', 'Ocean tour 2021', '99999', 'Da Nang- Viet  Nam', 'checking in'),
(38, 30, 1, 'kinh-nghiem-du-lich-ha-noi-tu-a-den-z-10.jpg', 'Quoc Tu Giam', '99999', 'BinhDinh- Viet Nam', 'checking in'),
(39, 30, 5, 'du-thuyền.jpg', 'Ocean tour 2021', '99999', 'Da Nang- Viet  Nam', 'checking in'),
(40, 30, 2, 'nhay-bungee-o-viet-nam.jpg', 'Phu Quoc, Viet Nam', '99999', 'Phu Quoc- Viet Nam', 'checking in'),
(52, 1, 3, 'quynhon.jpg', 'Quy Nhơn', '120000', 'Da Nang- Binh Dinh', 'checking in');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_admin`
--

CREATE TABLE `cart_admin` (
  `id_cart` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `image_tour` int(11) NOT NULL,
  `name_tour` int(11) NOT NULL,
  `price_tour` int(11) NOT NULL,
  `from_to` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `image_tour` text COLLATE utf8_unicode_ci NOT NULL,
  `name_tour` text COLLATE utf8_unicode_ci NOT NULL,
  `price_tour` decimal(11,0) NOT NULL,
  `from_to` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `history`
--

INSERT INTO `history` (`id_history`, `id_account`, `id_tour`, `image_tour`, `name_tour`, `price_tour`, `from_to`, `status`) VALUES
(8, 29, 17, 'du-lich-phu-quoc-17.jpg', 'Fall tour 2021', '99999', 'Tay Son-Binh Dinh', 'Paied'),
(10, 30, 3, 'vịnh lan hạ.jpg', 'Ocean tour 2021', '99999', 'Da Nang- Viet  Nam', 'Paied'),
(11, 30, 3, 'vịnh lan hạ.jpg', 'Ocean tour 2021', '99999', 'Da Nang- Viet  Nam', 'Paied');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_hot`
--

CREATE TABLE `tour_hot` (
  `id_hot` int(11) NOT NULL,
  `name_hot` text COLLATE utf8_unicode_ci NOT NULL,
  `img_hot` text COLLATE utf8_unicode_ci NOT NULL,
  `price_hot` decimal(10,0) NOT NULL,
  `detail_hot` text COLLATE utf8_unicode_ci NOT NULL,
  `from_to_hot` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_hot`
--

INSERT INTO `tour_hot` (`id_hot`, `name_hot`, `img_hot`, `price_hot`, `detail_hot`, `from_to_hot`) VALUES
(16, 'HẠ LONG tour 2023', 'vinhhalong.jpg', '1200000', 'This is known as a tourist paradise. A land of flowers competing for color.', 'HÀ NỘI - ĐÀ NẴNng'),
(17, 'HOI AN tour 2023', 'phocohoian.jpg', '3210000', 'This is known as a tourist paradise. A land of flowers competing for color.', 'QUẢNG NAM-ĐÀ NẴNG'),
(18, 'ĐÀ LẠT tour 2023', 'dalat.jpg', '1500000', 'This is known as a tourist paradise. A land of flowers competing for color.', 'ĐÀ LẠT - TP. HCM'),
(19, 'PHONG NHA tour 2023', 'dongphongnha.jpg', '2140003', 'This is known as a tourist paradise. A land of flowers competing for color.', 'QUẢNG BÌNH- ĐÀ NẴNG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_offer`
--

CREATE TABLE `tour_offer` (
  `id_offer` int(11) NOT NULL,
  `name_offer` text COLLATE utf8_unicode_ci NOT NULL,
  `img_offer` text COLLATE utf8_unicode_ci NOT NULL,
  `price_offer` decimal(10,0) NOT NULL,
  `detail_offer` text COLLATE utf8_unicode_ci NOT NULL,
  `from_to_offer` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_offer`
--

INSERT INTO `tour_offer` (`id_offer`, `name_offer`, `img_offer`, `price_offer`, `detail_offer`, `from_to_offer`) VALUES
(1, 'Phú Yên', 'phuyen.jpg', '120032', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Quang Tri-Đà Nẵng'),
(3, 'Quy Nhơn', 'quynhon.jpg', '120000', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Da Nang- Binh Dinh'),
(4, 'Chợ nổi cái răng', 'chonoicairang.jpg', '13000', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Da Nang- Can Tho'),
(5, 'Miền tây', 'mientay.jpg', '123890', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Da Nang- Soc Trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_sport`
--

CREATE TABLE `tour_sport` (
  `id_sport` int(11) NOT NULL,
  `name_sport` text COLLATE utf8_unicode_ci NOT NULL,
  `img_sport` text COLLATE utf8_unicode_ci NOT NULL,
  `price_sport` decimal(10,0) NOT NULL,
  `detail_sport` text COLLATE utf8_unicode_ci NOT NULL,
  `from_to_sport` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_sport`
--

INSERT INTO `tour_sport` (`id_sport`, `name_sport`, `img_sport`, `price_sport`, `detail_sport`, `from_to_sport`) VALUES
(1, 'Vinh Ha Long', 'vinhhalongsport.jpg', '3000005', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Phu Quoc- Viet Nam'),
(2, 'Da Lat', 'dalatsport.jpg', '2400000', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Phu Quoc- Viet Nam'),
(3, 'Phan Xi Pang', 'dinhphanxipang.png', '2100200', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Phu Quoc- Viet Nam'),
(4, 'Lai Chau', 'laichau.jpg', '5000000', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Phu Quoc- Viet Nam'),
(5, 'Khanh Hoa', 'khanhhoa.jpg', '1200200', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Phu Quoc- Viet Nam'),
(6, 'Phong Nha', 'phongnhasport.jpg', '3020200', 'This is known as a tourist paradise. A land of flowers competing for color.', 'Phu Quoc- Viet Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `cart_admin`
--
ALTER TABLE `cart_admin`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Chỉ mục cho bảng `tour_hot`
--
ALTER TABLE `tour_hot`
  ADD PRIMARY KEY (`id_hot`);

--
-- Chỉ mục cho bảng `tour_offer`
--
ALTER TABLE `tour_offer`
  ADD PRIMARY KEY (`id_offer`);

--
-- Chỉ mục cho bảng `tour_sport`
--
ALTER TABLE `tour_sport`
  ADD PRIMARY KEY (`id_sport`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `cart_admin`
--
ALTER TABLE `cart_admin`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tour_hot`
--
ALTER TABLE `tour_hot`
  MODIFY `id_hot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tour_offer`
--
ALTER TABLE `tour_offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tour_sport`
--
ALTER TABLE `tour_sport`
  MODIFY `id_sport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
