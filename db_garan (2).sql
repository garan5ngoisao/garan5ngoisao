-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 11:50 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_garan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `manv` int(15) NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`manv`, `username`, `password`) VALUES
(8, 'anh', '123'),
(7, 'anh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `madh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tendanhmuc` int(250) NOT NULL,
  `ngaylap` datetime NOT NULL,
  `tonggia` int(15) NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `manvgh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `manvduyet` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang_sanpham`
--

CREATE TABLE `donhang_sanpham` (
  `madh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(10) NOT NULL,
  `gia` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tenkh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(12) NOT NULL,
  `masp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `madh` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoigiaohang`
--

CREATE TABLE `nguoigiaohang` (
  `manvgh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sdtnvgh` int(10) NOT NULL,
  `tennvgh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `madh` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi_khachhang`
--

CREATE TABLE `phanhoi_khachhang` (
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tenkh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gopy` varchar(550) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanhoi_khachhang`
--

INSERT INTO `phanhoi_khachhang` (`email`, `tenkh`, `gopy`) VALUES
('dat140497@gmail.com', 'Đạt', 'jkkkkkkkkk'),
('dat140497@gmail.com', 'Đạt', 'jkkkkkkkkk'),
('haha@gmail.com', 'Đạt', 'hgdmg'),
('haha@gmail.com', 'Đạt dep trai', 'hgdmg'),
('anhthe@gmail.com', 'anh', 'hahahuhuhihi'),
('liuliu@gmail.com', 'hoa', 'dat dep trai'),
('hen@gmail.com', 'hên', 'xấu');

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi_khachhang_nguoigiao`
--

CREATE TABLE `phanhoi_khachhang_nguoigiao` (
  `makh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `manvgh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylap` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanhoi_sanpham`
--

CREATE TABLE `phanhoi_sanpham` (
  `makh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylap` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(15) NOT NULL,
  `tensp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` int(10) NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmuc` int(15) NOT NULL,
  `img` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `giasp`, `mota`, `id_danhmuc`, `img`) VALUES
(5, 'ComBo Gà Không Xương(3 Miếng)', 69000, '3 miếng gà giòn không xương + 1 phần bắp cải trộn (vừa) + 1 sốt chấm tự chọn (Blackened ranch/Spicy mayo) + 1 bánh mật ong + 1 coca', 1, '1.jpg'),
(2, 'Combo Gà Giòn Không Cay( 2 Miếng )', 82000, '2 miếng gà giòn không cay + 1 khoai tây nghiền (vừa) + 1 bánh mật ong + 1 Coca', 1, '2.jpg'),
(3, 'Gà Giòn Không Cay ( 3 Miếng )', 110000, '3 miếng gà giòn không cay + 1 khoai tây nghiền (vừa) + 1 bánh mật ong + 1 Coca', 1, '3.jpg'),
(4, 'Gà Giòn Cay', 36000, 'Gà giòn Cajun tươi mới được ướp với công thức gia vị Louisiana (cay hoặc không cay), tẩm bột thủ công và rán chín cùng lớp phủ giòn tan đặc trưng của miền Nam nước Mỹ.', 1, '4.jpg'),
(1, 'Nước suối', 6000, 'dadwda', 2, '12.jpg'),
(6, 'combo', 60000, 'dawad', 1, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tendanhmuc`
--

CREATE TABLE `tendanhmuc` (
  `id_danhmuc` int(15) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tendanhmuc`
--

INSERT INTO `tendanhmuc` (`id_danhmuc`, `name`) VALUES
(1, 'garan'),
(2, 'nuocuong');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `username` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fullname` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`username`, `password`, `email`, `fullname`, `birthday`, `sex`) VALUES
('thanhthanh', 'e807f1fcf82d132f9bb018ca6738a19f', 'haha@gmail.com', 'thanhle', '11/02/2012', '1'),
('thanhdat', 'e807f1fcf82d132f9bb018ca6738a19f', 'dat140497@gmail.com', 'datle', '14/04/97', '0'),
('theanh', '25d55ad283aa400af464c76d713c07ad', 'anhthe@gmail.com', 'nguyentheanh', '11', '0'),
('hao', '827ccb0eea8a706c4c34a16891f84e7b', 'hahah@gmail.com', 'levanhao', '14/04', '0'),
('dat', '827ccb0eea8a706c4c34a16891f84e7b', 'lala@gmail.com', 'dat dep trai', '14/04', '0'),
('anh', 'e10adc3949ba59abbe56e057f20f883e', 'anh@gmail.com', 'nguyentheanh', '11-07-1997', '0'),
('nghĩa', '81dc9bdb52d04dc20036dbd8313ed055', 'nghia@gmail.com', 'le chi nghia', '21/12', '0'),
('thế anh', '81dc9bdb52d04dc20036dbd8313ed055', 'the@gmail.com', 'anh thế nguyễn', '21/12', '0'),
('hoa', '81dc9bdb52d04dc20036dbd8313ed055', 'hoa@gmail.com', 'hoa lê', '12/3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`manv`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madh`);

--
-- Indexes for table `donhang_sanpham`
--
ALTER TABLE `donhang_sanpham`
  ADD PRIMARY KEY (`madh`,`masp`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `nguoigiaohang`
--
ALTER TABLE `nguoigiaohang`
  ADD PRIMARY KEY (`manvgh`);

--
-- Indexes for table `phanhoi_khachhang_nguoigiao`
--
ALTER TABLE `phanhoi_khachhang_nguoigiao`
  ADD PRIMARY KEY (`makh`,`manvgh`);

--
-- Indexes for table `phanhoi_sanpham`
--
ALTER TABLE `phanhoi_sanpham`
  ADD PRIMARY KEY (`makh`,`masp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Indexes for table `tendanhmuc`
--
ALTER TABLE `tendanhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `manv` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `tendanhmuc`
--
ALTER TABLE `tendanhmuc`
  MODIFY `id_danhmuc` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
