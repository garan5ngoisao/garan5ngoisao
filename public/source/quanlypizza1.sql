-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2018 lúc 03:19 CH
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlypizza1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `tai_khoan` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgoidoan`
--

CREATE TABLE `chitietgoidoan` (
  `idhoadon` int(11) NOT NULL,
  `MATHUCAN` int(11) NOT NULL,
  `SOLUONG` int(50) NOT NULL,
  `DONGIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietgoinuoc`
--

CREATE TABLE `chitietgoinuoc` (
  `MAPHIEUDAT` int(11) NOT NULL,
  `MANUOC` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `DONGIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietkichthuoc`
--

CREATE TABLE `chitietkichthuoc` (
  `MAPHIEUDAT` int(11) NOT NULL,
  `KICHTHUOC` int(11) NOT NULL,
  `DONGIA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietvobanh`
--

CREATE TABLE `chitietvobanh` (
  `MAPHIEUDAT` int(11) NOT NULL,
  `LOAIVOBANH` varchar(60) CHARACTER SET utf8 NOT NULL,
  `DONGIA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucdoan`
--

CREATE TABLE `danhmucdoan` (
  `TENLOAI` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `danhmucdoan`
--

INSERT INTO `danhmucdoan` (`TENLOAI`) VALUES
('NUOC UONG'),
('PIZZA');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucnuocuong`
--

CREATE TABLE `danhmucnuocuong` (
  `TENGOI` varchar(60) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kichco`
--

CREATE TABLE `kichco` (
  `KICHTHUOC` int(11) NOT NULL,
  `MOTA` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `SOLUONGMIENG` int(11) DEFAULT NULL,
  `GIACA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nuocuong`
--

CREATE TABLE `nuocuong` (
  `MANUOC` int(11) NOT NULL,
  `TENNUOCUONG` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THUOCLOAI` varchar(60) CHARACTER SET utf8 NOT NULL,
  `HINHANH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOIDUNG` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DONGIA` float DEFAULT NULL,
  `DONVITINH` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOLUONGTON` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbhoadon`
--

CREATE TABLE `tbhoadon` (
  `idhoadon` int(11) NOT NULL,
  `iduser` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaydat` date NOT NULL,
  `tennguoinhan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachinguoinhan` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdtnguoinhan` int(11) NOT NULL,
  `tinhtrang` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ghichu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbhoadon`
--

INSERT INTO `tbhoadon` (`idhoadon`, `iduser`, `ngaydat`, `tennguoinhan`, `diachinguoinhan`, `sdtnguoinhan`, `tinhtrang`, `ghichu`) VALUES
(1, 'phamthanhloi1', '2018-12-19', 'loi', 'loi', 969031507, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbthanhvien`
--

CREATE TABLE `tbthanhvien` (
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `iduser` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hieuluc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbthanhvien`
--

INSERT INTO `tbthanhvien` (`hoten`, `diachi`, `email`, `sdt`, `iduser`, `pass`, `hieuluc`) VALUES
('loipham30', 'nha cua loi', 'loipham2030@gmail.com', 969031507, 'loi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-12-18'),
('loipham30', 'nha cua loi', 'loipham2030@gmail.com', 969031507, 'loipham2030@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2018-12-17'),
('loi', 'nha cua loi pham', 'loipham@gmail.com.vn', 969031507, 'phamthanhloi1', 'e10adc3949ba59abbe56e057f20f883e', '2018-12-17'),
('loipham30000', 'nha cua loi', 'haidang3105s@yahoo.com.vn', 969031507, 'phamthanhloi300', 'e10adc3949ba59abbe56e057f20f883e', '2018-12-19'),
('loipham2', 'nha cua loi', 'loipham@gmail.com.vn', 969031507, 'phamthanhloi301', 'e10adc3949ba59abbe56e057f20f883e', '2018-12-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thucankem`
--

CREATE TABLE `thucankem` (
  `MATHUCAN` int(11) NOT NULL,
  `TENTHUCAN` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `THUOCLOAI` varchar(60) CHARACTER SET utf8 NOT NULL,
  `HINHANH` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOIDUNG` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DONGIA` float DEFAULT NULL,
  `soluong` int(11) NOT NULL,
  `DONVITINH` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `thucankem`
--

INSERT INTO `thucankem` (`MATHUCAN`, `TENTHUCAN`, `THUOCLOAI`, `HINHANH`, `NOIDUNG`, `DONGIA`, `soluong`, `DONVITINH`) VALUES
(1, 'GÀ', 'PIZZA', '7.jpg', '', 20000, 5, 'vnd'),
(2, 'cá ngừ', 'PIZZA', '6.jpg', '', 20000, 5, 'vnd'),
(3, 'Bò', 'PIZZA', '3.jpg', '', 20000, 5, 'vnd'),
(4, 'Hải sản', 'PIZZA', '4.jpg', '', 20000, 0, 'vnd'),
(5, 'Thập cẩm', 'PIZZA', '5.jpg', '', 20000, 0, 'vnd'),
(6, 'coca', 'NUOC UONG', '8.jpg', '', 10000, 5, 'vnd'),
(7, 'Pepsi', 'NUOC UONG', '9.jpg', '', 10000, 5, 'vnd'),
(8, 'Trà đào', 'NUOC UONG', '10.jpg', '', 15000, 5, 'vnd'),
(9, 'Sữa tươi', 'NUOC UONG', '11.jpg', '', 15000, 5, 'vnd'),
(10, 'Nước suối', 'NUOC UONG', '12.jpg', '', 10000, 5, 'vnd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vobanh`
--

CREATE TABLE `vobanh` (
  `TENLOAI` varchar(60) CHARACTER SET utf8 NOT NULL,
  `GIACA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietgoidoan`
--
ALTER TABLE `chitietgoidoan`
  ADD PRIMARY KEY (`idhoadon`,`MATHUCAN`),
  ADD KEY `chitietgoidoanibfk1` (`MATHUCAN`) USING BTREE,
  ADD KEY `chitietgoidoanibfk2` (`idhoadon`) USING BTREE;

--
-- Chỉ mục cho bảng `chitietgoinuoc`
--
ALTER TABLE `chitietgoinuoc`
  ADD PRIMARY KEY (`MAPHIEUDAT`,`MANUOC`),
  ADD KEY `chitietgoinuocibfk1` (`MANUOC`) USING BTREE,
  ADD KEY `chitietgoinuocibfk2` (`MAPHIEUDAT`) USING BTREE;

--
-- Chỉ mục cho bảng `chitietkichthuoc`
--
ALTER TABLE `chitietkichthuoc`
  ADD PRIMARY KEY (`MAPHIEUDAT`,`KICHTHUOC`),
  ADD KEY `chitietkichthuocibfk1` (`KICHTHUOC`) USING BTREE,
  ADD KEY `chitietkichthuocibfk2` (`MAPHIEUDAT`) USING BTREE;

--
-- Chỉ mục cho bảng `chitietvobanh`
--
ALTER TABLE `chitietvobanh`
  ADD PRIMARY KEY (`MAPHIEUDAT`,`LOAIVOBANH`),
  ADD KEY `chitietvobanhibfk1` (`LOAIVOBANH`) USING BTREE,
  ADD KEY `chitietvobanhibfk2` (`MAPHIEUDAT`) USING BTREE;

--
-- Chỉ mục cho bảng `danhmucdoan`
--
ALTER TABLE `danhmucdoan`
  ADD PRIMARY KEY (`TENLOAI`);

--
-- Chỉ mục cho bảng `danhmucnuocuong`
--
ALTER TABLE `danhmucnuocuong`
  ADD PRIMARY KEY (`TENGOI`);

--
-- Chỉ mục cho bảng `kichco`
--
ALTER TABLE `kichco`
  ADD PRIMARY KEY (`KICHTHUOC`);

--
-- Chỉ mục cho bảng `nuocuong`
--
ALTER TABLE `nuocuong`
  ADD PRIMARY KEY (`MANUOC`),
  ADD KEY `nuocuong_ibfk_1` (`THUOCLOAI`) USING BTREE;

--
-- Chỉ mục cho bảng `tbhoadon`
--
ALTER TABLE `tbhoadon`
  ADD PRIMARY KEY (`idhoadon`) USING BTREE,
  ADD KEY `tbhoadonibfk1` (`iduser`) USING BTREE;

--
-- Chỉ mục cho bảng `tbthanhvien`
--
ALTER TABLE `tbthanhvien`
  ADD PRIMARY KEY (`iduser`) USING BTREE;

--
-- Chỉ mục cho bảng `thucankem`
--
ALTER TABLE `thucankem`
  ADD PRIMARY KEY (`MATHUCAN`),
  ADD KEY `thucankemibfk2` (`THUOCLOAI`) USING BTREE;

--
-- Chỉ mục cho bảng `vobanh`
--
ALTER TABLE `vobanh`
  ADD PRIMARY KEY (`TENLOAI`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `nuocuong`
--
ALTER TABLE `nuocuong`
  MODIFY `MANUOC` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `thucankem`
--
ALTER TABLE `thucankem`
  MODIFY `MATHUCAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietgoidoan`
--
ALTER TABLE `chitietgoidoan`
  ADD CONSTRAINT `chitietgoidoanibfk1` FOREIGN KEY (`MATHUCAN`) REFERENCES `thucankem` (`MATHUCAN`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietgoidoanibfk2` FOREIGN KEY (`idhoadon`) REFERENCES `tbhoadon` (`idhoadon`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietgoinuoc`
--
ALTER TABLE `chitietgoinuoc`
  ADD CONSTRAINT `chitietgoinuocibfk1` FOREIGN KEY (`MANUOC`) REFERENCES `nuocuong` (`MANUOC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietgoinuocibfk2` FOREIGN KEY (`MAPHIEUDAT`) REFERENCES `tbhoadon` (`idhoadon`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietkichthuoc`
--
ALTER TABLE `chitietkichthuoc`
  ADD CONSTRAINT `chitietkichthuocibfk1` FOREIGN KEY (`KICHTHUOC`) REFERENCES `kichco` (`KICHTHUOC`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietkichthuocibfk2` FOREIGN KEY (`MAPHIEUDAT`) REFERENCES `tbhoadon` (`idhoadon`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chitietvobanh`
--
ALTER TABLE `chitietvobanh`
  ADD CONSTRAINT `chitietvobanhibfk1` FOREIGN KEY (`LOAIVOBANH`) REFERENCES `vobanh` (`TENLOAI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietvobanhibfk2` FOREIGN KEY (`MAPHIEUDAT`) REFERENCES `tbhoadon` (`idhoadon`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nuocuong`
--
ALTER TABLE `nuocuong`
  ADD CONSTRAINT `nuocuong_ibfk_1` FOREIGN KEY (`THUOCLOAI`) REFERENCES `danhmucnuocuong` (`TENGOI`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbhoadon`
--
ALTER TABLE `tbhoadon`
  ADD CONSTRAINT `tbhoadonibfk1` FOREIGN KEY (`iduser`) REFERENCES `tbthanhvien` (`iduser`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `thucankem`
--
ALTER TABLE `thucankem`
  ADD CONSTRAINT `thucankemibfk2` FOREIGN KEY (`THUOCLOAI`) REFERENCES `danhmucdoan` (`TENLOAI`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
