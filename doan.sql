-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2021 lúc 08:11 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(100) NOT NULL,
  `tendanhmuc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giadanhmuc` int(11) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `tendanhmuc`, `giadanhmuc`, `hinhanh`) VALUES
(12, 'sa', 122121, '1622140523_images.jpg'),
(13, 'trà sữa nhà làm', 220000, '1622140591_trasua.png'),
(14, 'ádsad', 0, '1622387414_1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datmon`
--

CREATE TABLE `datmon` (
  `id_datmon` int(11) NOT NULL,
  `tenmon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `loaimon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `toppingmon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluongmon` int(10) NOT NULL,
  `giamon` int(10) NOT NULL,
  `giagoc` int(10) NOT NULL,
  `hinhanhdatmon` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `datmon`
--

INSERT INTO `datmon` (`id_datmon`, `tenmon`, `loaimon`, `toppingmon`, `soluongmon`, `giamon`, `giagoc`, `hinhanhdatmon`) VALUES
(289, 'trà sữa nhà làm', 'Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ', ' ', 1, 220000, 220000, '1622140591_trasua.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhoadon` int(10) NOT NULL,
  `tennguoinhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdtnguoinhan` int(11) NOT NULL,
  `diachinguoinhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quangduong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cuahang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `listorder` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `phiship` int(10) NOT NULL,
  `phiorder` int(10) NOT NULL,
  `tong` int(10) NOT NULL,
  `taikhoanhoadon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhoadon`, `tennguoinhan`, `sdtnguoinhan`, `diachinguoinhan`, `quangduong`, `ghichu`, `cuahang`, `soluong`, `listorder`, `phiship`, `phiorder`, `tong`, `taikhoanhoadon`, `status`) VALUES
(11, 'sadasd', 1123123, '10.7623239 ,  106.59377740000001', '1.39km', '12312312', '243 Mã Lò Quận Bình Tân,Date:Saturday, June 19, 2021,Time:03:00:11', 2, 'ádsad, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Số lượng : 2, Giá: 0đ<br>', 18000, 0, 18000, 'Heheboi121', 'Đã xác nhận'),
(12, 'sadsad', 12312312, '10.7623239 ,  106.59377740000001', '1.39km', '12312312', '243 Mã Lò Quận Bình Tân,Date:Saturday, June 19, 2021,Time:03:57:59', 2, 'dsdasd, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Số lượng : 1, Giá: 1,111đ<br>ádsad, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Số lượng : 1, Giá: 0đ<br>', 18000, 1111, 19111, 'Heheboi1211', 'Đã xác nhận'),
(18, 'adsadsa', 2312312, '10.7623239 ,  106.59377740000001', '1.39km', 'ádsadsa', '243 Mã Lò Quận Bình Tân,Date:Sunday, June 20, 2021,Time:02:30:54', 1, 'ádsad, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Số lượng : 1, Giá: 0đ<br>', 18000, 0, 18000, 'hehe', 'Đợi xác nhận'),
(19, 'ádsad', 2312312, '10.7623239 ,  106.59377740000001', '1.39km', 'adsadsadsa', '243 Mã Lò Quận Bình Tân,Date:Sunday, June 20, 2021,Time:02:31:35', 1, 'ádsad, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Số lượng : 1, Giá: 0đ<br>', 18000, 0, 18000, 'hehe', 'Đợi xác nhận'),
(20, 'ádsadasd', 123123123, '10.7623239 ,  106.59377740000001', '1.39km', 'đâsdasd', '243 Mã Lò Quận Bình Tân,Date:Sunday, June 20, 2021,Time:02:40:42', 1, 'ádsad, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Số lượng : 1, Giá: 0đ<br>', 18000, 0, 18000, 'hehe', 'Đợi xác nhận'),
(21, 'đasad', 123123, '10.7623239 ,  106.59377740000001', '1.39km', 'adasdasdsad', '243 Mã Lò Quận Bình Tân,Date:Sunday, June 20, 2021,Time:02:43:32', 1, 'ádsad, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Số lượng : 1, Giá: 0đ<br>', 18000, 0, 18000, 'hehe', 'Đợi xác nhận'),
(22, 'ádsad', 123123, '10.7623239 ,  106.59377740000001', '1.39km', 'sadsa', '243 Mã Lò Quận Bình Tân,Date:Sunday, June 20, 2021,Time:02:50:05', 2, 'ádsad, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Số lượng : 2, Giá: 0đ<br>', 18000, 0, 18000, 'hehe1', 'Đợi xác nhận'),
(23, 'ádsad', 12312312, '10.770105 ,  106.600815', '0.23km', 'adasdsad', '243 Mã Lò Quận Bình Tân,Date:Sunday, June 20, 2021,Time:04:14:45', 1, 'ádsad, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Số lượng : 1, Giá: 0đ<br>', 18000, 0, 18000, 'hehe', 'Đợi xác nhận'),
(24, 'Thanh', 898798, '10.7623239 ,  106.59377740000001', '1.39km', 'adasdas', '243 Mã Lò Quận Bình Tân,Date:Monday, June 21, 2021,Time:09:46:10', 2, 'dsdasd, Loại:Nóng, Đá:0%,Đường:0%,Size:nhỏ Kem Machiato,Số lượng : 2, Giá: 20,222đ<br>', 18000, 20222, 38222, 'hehe', 'Đã xác nhận'),
(25, 'Thanh', 54646, '10.7937792 ,  106.6041344', '2.46km', 'ádasd', '243 Mã Lò Quận Bình Tân,Date:Wednesday, September 8, 2021,Time:16:24:45', 1, 'ádsad, Loại:Lạnh, Đá:0%,Đường:0%,Size:nhỏ Kem Machiato,Trân châu to như chân trâu,Bánh flan,Thạch phô mai,Số lượng : 1, Giá: 29,000đ<br>', 18000, 29000, 47000, 'a', 'Đã xác nhận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `showproduct`
--

CREATE TABLE `showproduct` (
  `id_show` int(10) NOT NULL,
  `idPD` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `showproduct`
--

INSERT INTO `showproduct` (`id_show`, `idPD`) VALUES
(1, 13);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `taikhoan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(100) UNSIGNED NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `diachikh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`taikhoan`, `id`, `matkhau`, `sdt`, `diachikh`, `gioitinh`) VALUES
('hehe', 77, '1', '123456', '243/27/54 Mã Lò Quận Bình Tân P. Bình Trị Đông A', 'Nam'),
('heheboi1', 78, '1', '85949385', '243/27/54 Mã Lò Quận Bình Tân P. Bình Trị Đông A', 'Nam'),
('hehe1', 79, '1', '121312313', '243/27/54 Mã Lò Quận Bình Tân P. Bình Trị Đông A', 'Nam'),
('a', 80, '134159', '134159', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `datmon`
--
ALTER TABLE `datmon`
  ADD PRIMARY KEY (`id_datmon`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhoadon`);

--
-- Chỉ mục cho bảng `showproduct`
--
ALTER TABLE `showproduct`
  ADD PRIMARY KEY (`id_show`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `taikhoan` (`taikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `datmon`
--
ALTER TABLE `datmon`
  MODIFY `id_datmon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
