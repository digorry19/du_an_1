-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 14, 2023 lúc 12:34 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `idsp` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `postdate` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `name`, `idsp`, `noidung`, `postdate`, `iduser`) VALUES
(10, 'Long Đẹp Trai', 19, 'Bánh ngon', '2023-12-05', 0),
(11, 'Long 2', 21, 'Bánh cũng đc', '2023-12-08', 0),
(12, 'Liêm', 21, 'Bánh cũng được', '2023-12-13', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(11) NOT NULL,
  `idord` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `idord`, `idsp`, `price`, `quantity`, `total`, `created_at`) VALUES
(32, 1, 19, 660, 1, 660, '2023-12-05 02:34:43'),
(33, 108, 27, 149, 6, 894, '2023-12-05 02:48:49'),
(34, 108, 28, 149, 3, 447, '2023-12-05 02:48:49'),
(35, 109, 21, 480, 2, 960, '2023-12-05 11:26:24'),
(36, 110, 21, 480, 1, 480, '2023-12-05 11:55:57'),
(37, 111, 21, 480, 2, 960, '2023-12-05 12:02:53'),
(38, 112, 21, 480, 1, 480, '2023-12-05 12:08:13'),
(39, 113, 21, 480, 5, 2400, '2023-12-05 16:11:25'),
(40, 113, 37, 480, 1, 480, '2023-12-05 16:11:25'),
(41, 114, 25, 149, 1, 149, '2023-12-05 17:14:26'),
(42, 114, 28, 149, 3, 447, '2023-12-05 17:14:26'),
(43, 115, 21, 480, 1, 480, '2023-12-06 16:03:58'),
(44, 116, 25, 149, 1, 149, '2023-12-07 07:26:03'),
(45, 117, 21, 480, 1, 480, '2023-12-07 09:55:04'),
(46, 118, 21, 480, 3, 1440, '2023-12-07 12:01:59'),
(47, 119, 21, 480, 1, 480, '2023-12-10 14:22:29'),
(48, 120, 21, 480, 2, 960, '2023-12-12 13:56:48'),
(49, 121, 21, 480, 1, 480, '2023-12-12 14:00:57'),
(50, 122, 35, 480, 1, 480, '2023-12-12 14:06:24'),
(51, 123, 35, 480, 1, 480, '2023-12-12 14:07:54'),
(52, 124, 21, 480, 8, 3840, '2023-12-13 13:16:19'),
(53, 125, 21, 480, 6, 2880, '2023-12-14 09:19:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(10, 'Bánh kem bắp'),
(8, 'Bánh mini 10cm'),
(9, 'Bánh mix vị'),
(12, 'Brownie chocolate'),
(11, 'Kem trái cây');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `pay` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `iduser`, `name`, `username`, `city`, `address`, `phone`, `email`, `status`, `pay`, `created_at`, `total`) VALUES
(118, 20, 'Long', 'Long', 'Thành phố Hà Nội', 'Hà Nội', '0123456789', 'ptl2004long@gmail.com', 4, 1, '2023-12-07 12:01:59', 1440),
(119, 2, 'Long', 'Long Đẹp Trai', 'Tỉnh Thái Bình', 'Thành phố thái bình', '0123456789', 'ptl2004long@gmail.com', 0, 1, '2023-12-10 14:22:29', 480),
(120, 2, 'Long', 'Long Đẹp Trai', 'Tỉnh Thái Bình', 'Hà Nội', '2222', 'ptl2004long@gmail.com', 0, 1, '2023-12-12 13:56:48', 960),
(121, 2, 'Long', 'Long Đẹp Trai', 'Thành phố Hà Nội', 'gfjfhgyu', '0111', 'ptl2004long@gmail.com', 0, 2, '2023-12-12 14:00:57', 480),
(122, 2, 'Long', 'Long Đẹp Trai', 'Tỉnh Thái Bình', 'Thái Bình', '0123456789', 'ptl2004long@gmail.com', 0, 1, '2023-12-12 14:06:24', 480),
(123, 2, 'Long', 'Long Đẹp Trai', 'Thành phố Hà Nội', 'HN', '0123456789', 'ptl2004long@gmail.com', 3, 2, '2023-12-12 14:07:54', 480),
(124, 2, 'Long', 'Long Đẹp Trai', 'Tỉnh Thái Bình', 'gfjfhgyu', '0111', 'nvdiepse@gmail.com', 0, 1, '2023-12-13 13:16:19', 3840),
(125, 7, 'Group 7', 'Long Đẹp Trai', 'Tỉnh Thái Bình', 'Thành phố thái bình', '0123456789', 'ptl2004long@gmail.com', 0, 1, '2023-12-14 09:19:24', 2880);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pri_old` int(11) NOT NULL,
  `pri_new` int(11) NOT NULL,
  `mota` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `pri_old`, `pri_new`, `mota`, `img1`, `img2`, `luotxem`, `iddm`) VALUES
(21, 'Mẫu Thanh Tú', 660, 480, 'Bánh kem sinh nhật – Bánh mousse bắp – Mẫu Tươi Mát', 'bắp1.jpg.webp', '', 0, 10),
(22, 'Mẫu Tươi Mắt', 660, 480, 'Bánh kem sinh nhật – Bánh mousse bắp – Mẫu Tươi Mát', 'bắp2.jpg.webp', '', 0, 10),
(23, 'Mẫu Quyến Rũ', 660, 480, 'Bánh kem sinh nhật – Bánh mousse bắp – Mẫu Quyến Rũ', 'bắp3.jpg.webp', '', 0, 10),
(24, 'Mẫu Lộng Lẫy', 660, 480, 'Bánh kem sinh nhật – Bánh mousse bắp – Mẫu Lộng Lẫy', 'bắp4.jpg.webp', '', 0, 10),
(25, 'Bánh Cupcake Sinh Nhật', 660, 149, 'Bánh Cupcake Sinh Nhật Mix Vị Trang Trí Bằng Dâu Tây và Kem Vị Việt Quất', 'banh-sinh-nhat-cupcake-mix-vi-viet-quat-scaled.jpg.webp', '', 0, 8),
(26, 'Mousse Bắp', 660, 149, 'Món quà của mùa hè Bánh kem mini mousse bắp với hương vị ngọt dịu, thanh mát không bị ngấy quyện cùng cốt bánh mềm mịn, bông xốp đốn tim mọi tâm hồn hảo ngọt.', 'bắp5.jpg.webp', '', 0, 8),
(27, 'Tiramistu', 660, 149, '', 'tiramisu1.jpg.webp', '', 0, 8),
(28, 'Mousse Yaourt Dâu', 660, 149, 'Bánh kem mini mousse yaourt dâu thanh ngọt, thơm nồng vị dâu quyện cùng cốt bánh mềm mịm, xốp nhẹ sẽ là món quà đầy ngọt ngào dành tặng người thương.', 'EmptyName-101.jpeg.webp', '', 0, 8),
(30, 'Bánh mĩ vị rau củ ', 660, 480, '', 'mix-6-vi-3.png.webp', '', 0, 9),
(33, 'Bánh mix vị rau củ2', 660, 480, '', 'tron-vi-4.png.webp', '', 0, 9),
(34, 'Brownie nguyên bản', 660, 480, 'Brownie - Mảnh Ngọt Nồng Chảy Hòa Quyện Mọi Vị Giác\r\n\r\nNhắc đến brownie, người ta nghĩ ngay đến một miếng bánh ngọt sô cô la hấp dẫn, nồng nàn, và đầy đặn vị. Brownie, với vẻ ngoại hình giản đơn, lại chứa đựng bí mật của sự pha trộn hoàn hảo giữa độ ', '23CF1538-A40F-4E95-91DE-8CD877D0442B.jpeg.webp', '', 0, 12),
(35, 'Brownie cam', 660, 480, '', 'brownie-cam-2.png.webp', '', 0, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `email`, `pass`, `role`) VALUES
(7, 'Long Đẹp Trai', 'ptl2004long@gmail.com', '1234', 0),
(8, 'Khang Đẹp Trai', 'longptph43160@gmail.com', '1234', 0),
(9, 'Admin', '', '123', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `id` int(11) NOT NULL,
  `doanhthu` int(11) NOT NULL,
  `sodonhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key_cthd` (`idord`),
  ADD KEY `foreign_key_sp` (`idsp`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`name`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key_user` (`iduser`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`name`),
  ADD KEY `foreign_key` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`) USING HASH;

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `foreign_key` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
