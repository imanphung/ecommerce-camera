-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 31, 2019 lúc 02:51 PM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webcamera`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitetsp`
--

DROP TABLE IF EXISTS `chitetsp`;
CREATE TABLE IF NOT EXISTS `chitetsp` (
  `idsp` int(11) NOT NULL AUTO_INCREMENT,
  `tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `idloaisp` int(11) NOT NULL,
  `xuatsu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idnsx` int(11) NOT NULL,
  `soluongsp` int(11) NOT NULL,
  `ngaytiepnhan` date DEFAULT NULL,
  `soluotxem` int(11) NOT NULL,
  `soluongdaban` int(11) NOT NULL,
  PRIMARY KEY (`idsp`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitetsp`
--

INSERT INTO `chitetsp` (`idsp`, `tensp`, `hinhanh`, `gia`, `mota`, `idloaisp`, `xuatsu`, `idnsx`, `soluongsp`, `ngaytiepnhan`, `soluotxem`, `soluongdaban`) VALUES
(9, 'Sony A7S Mark II Body', '810_8370_1200_800x710.jpg', '46000000', 'Body cá»§a mÃ¡y Ä‘Æ°á»£c lÃ m báº±ng hÆ¡Ì£p kim magie cao cÃ¢Ìp, cháº¯c cháº¯n vÃ  cÃ³ kháº£ nÄƒng chá»‘ng chá»‹u thá»i tiáº¿t. MÃ¡y cÃ³ kÃ­ch thÆ°á»›c 126,9 x 95,7 x 60,3 mm, náº·ng 584 gram cho cáº£m giÃ¡c nháº¹ nhÃ ng, cÃ¹ng há»‡ thá»‘ng nÃºt báº¥m Ä‘Æ°á»£c thiáº¿t káº¿ láº¡i Ä‘á»ƒ ngÆ°á»i dÃ¹ng sá»­ dá»¥ng má»™t cÃ¡ch thoáº£i mÃ¡i vÃ  tá»± nhiÃªn nháº¥t.\r\n\r\nBÃ¡ng cáº§m Ä‘Æ°á»£c thiáº¿t káº¿ lá»›n hÆ¡n cÅ©ng nhÆ° nÃºt chá»¥p hÃ¬nh Ä‘Æ°á»£c Ä‘Æ°a vá» pháº§n trÃªn giá»‘ng nhÆ° á»Ÿ máº«u A7R II', 24, 'ChÃ­nh hÃ£ng', 1, 8, '2018-11-25', 22, 2),
(11, 'Sony A6500M+ 18-135mm f3.5-5.6', 'sony_ilce_6500m_mirrorless_camera_with_18_35mm_lens_top_1000x943.jpg', '39900000', '-      Bá»™ cáº£m biáº¿n cáº£i tiáº¿n má»›i APS-C HD CMOS 24.2 Mega Pixels\r\n-      MÃ n hÃ¬nh cáº£m á»©ng láº­t 3.0â€.  921K Ä‘iá»ƒm áº£nh - Clear Photo LCD\r\n-      KÃ­nh ngáº¯m Ä‘iá»‡n tá»­ OLED 2.4Mp, 100% bao phá»§\r\n-      Äá»™ nháº¡y sÃ¡ng cao ISO 100 - 25600\r\n-      Chá»¥p liÃªn tá»¥c (Burst) 11 táº¥m giÃ¢y\r\n-      169 Ä‘iá»ƒm láº¥y nÃ©t tá»± Ä‘á»™ng theo tÆ°Æ¡ng pháº£n + 425 Ä‘iá»ƒm láº¥y nÃ©t theo pha\r\n-      TÃ­ch há»£p wifi vÃ  NFC má»™t cháº¡m\r\n-      Há»‡ thá»‘ng Ä‘o sÃ¡ng thÃ´ng minh DRO\r\n-      Quay phim chuáº©n 4K\r\n-      Pin NP-FW50 cÃ³ thá»i lÆ°á»£ng sá»­ dá»¥ng cao (khoáº£ng 400 táº¥m)\r\n-      Sá»­ dá»¥ng tháº» SD\r\n-      Äi kÃ¨m á»‘ng kÃ­nh 18-135mm f3.5-5.6 OSS\r\n-      KÃ­ch thÆ°á»›c/ Trá»ng lÆ°á»£ng: (14 x 13 x 23,5)cm/ 1,565 kg', 24, 'ChÃ­nh hÃ£ng', 1, 0, '2018-11-22', 1, 1),
(13, 'SONY RX10 IV', '1505225826000_img_868051_500x500_500x500.jpg', '50000000', '\r\nSony vá»«a cÃ´ng bá»‘ RX10 Mark IV. ÄÃ¢y lÃ  chiáº¿c mÃ¡y áº£nh cÃ³ tá»‘c Ä‘á»™ nhanh má»›i nháº¥t trong dÃ²ng sáº£n pháº©m mÃ¡y áº£nh nhá» gá»n cÃ³ cáº£m biÃªn 1 inch vÃ  kháº£ nÄƒng zoom xa.\r\n\r\nDpreview cho biáº¿t, nhá» vÃ o bá»™ xá»­ lÃ½ Bionz X má»›i nháº¥t cá»§a hÃ£ng (cÃ³ trÃªn Sony A9) Ä‘Ã£ giÃºp chiáº¿c mÃ¡y nÃ y Ä‘áº¡t tá»‘c Ä‘á»™ 24fps khi chá»¥p vá»›i AF vÃ  AE, nÃ³ cÃ³ thá»ƒ chá»¥p tá»‘i Ä‘a lÃªn Ä‘áº¿n 249 áº£nh JPEG. Tá»‘c Ä‘á»™ khÃ³a nÃ©t 0,03 giÃ¢y cá»§a chiáº¿c mÃ¡y nÃ y cÅ©ng lÃ  tá»‘c Ä‘á»™ nhanh nháº¥t trÃªn tháº¿ giá»›i.  NÃ³ cÅ©ng lÃ  chiáº¿c mÃ¡y áº£nh Ä‘áº§u tiÃªn trong dÃ²ng sáº£n pháº©m nÃ y cÃ³ mÃ n hÃ¬nh cáº£m á»©ng. á»ng kÃ­nh trÃªn nÃ³ cÃ³ tiÃªu cá»± 24-600mm (khi quy Ä‘á»•i ra há»‡ 35mm) tÆ°Æ¡ng tá»± nhÆ° Ä‘Ã n anh vÃ  lÃ  chiáº¿c RX10 Ä‘áº§u tiÃªn cÃ³ kháº£ nÄƒng láº¥y nÃ©t theo pha cÃ³ trÃªn cáº£m biáº¿n, vá»›i 315 Ä‘iá»ƒm láº¥y nÃ©t tá»± Ä‘á»™ng, bao phá»§ 65% khung hÃ¬nh. NÃ³ cÅ©ng lÃ  chiáº¿c mÃ¡y áº£nh Cyber-shot Ä‘áº§u tiÃªn cÃ³ há»‡ thá»‘ng \"High Density\" AF Tracking cá»§a Sony (láº¥y tá»« Sony A9) vÃ  hÃ£ng cho biáº¿t ráº±ng Eye AF cÅ©ng Ä‘Ã£ Ä‘Æ°á»£c cáº£i thiá»‡n', 24, 'ChÃ­nh hÃ£ng', 1, 5, NULL, 5, 0),
(21, ' Sony A7 Mark II + 28-70mm', 'Sony_A7_Mark_II___28_70mm___Chinh_hang__100__4419413_770x577.jpg', '35000000', 'Sony A7 Mark II + 28-70mm', 24, 'ChÃ­nh hÃ£ng', 1, 11, '2018-11-21', 4, 1),
(23, 'Sony A6300 Body', 'sony_alpha_a6300_digital_camera_4k_body_only_jpg_640x640_640x481.jpg', '18400000', 'Sony A6300 Body', 24, 'ChÃ­nh hÃ£ng', 1, 14, NULL, 0, 0),
(14, 'Sony RX1RII', 'RX1Rii_tiff_1000x757.jpg', '79000000', 'Sony RX1RII', 24, 'ChÃ­nh hÃ£ng', 1, 6, NULL, 0, 0),
(15, 'Sony A6300 + 16-50mm', 'sony6300kit_675x675.jpg', '20000000', 'Sony A6300 + 16-50mm', 24, 'ChÃ­nh hÃ£ng', 1, 7, NULL, 0, 0),
(16, 'Canon 1D X Mark II body', '810_9389_front_931x1000.jpg', '122000000', 'Canon 1D X Mark II body', 24, 'ChÃ­nh hÃ£ng', 2, 8, NULL, 0, 0),
(17, 'Canon 1300D+18-55mm IS II', 'm32_850x995.jpg', '9000000', 'MÃ¡y áº£nh Canon EOS 1300D +kit 18-55mm lÃ  chiáº¿c mÃ¡y áº£nh phá»• thÃ´ng mÃ  nhÃ  sáº£n xuáº¥t muá»‘n hÆ°á»›ng Ä‘áº¿n nhá»¯ng ngÆ°á»i dÃ¹ng má»›i táº­p lÃ m quen vá»›i mÃ¡y áº£nh sá»‘ á»‘ng kÃ­nh rá»i. Vá» thiáº¿t káº¿ bÃªn ngoÃ i, Canon EOS 1300D cÆ¡ báº£n giá»‘ng nhÆ° ngÆ°á»i anh em EOS 1200D trÆ°á»›c Ä‘Ã³. Tuy nhiÃªn, á»Ÿ pháº§n cá»©ng, Canon EOS 1300D cÃ³ nhiá»u nÃ¢ng cáº¥p má»›i vÃ  bá»• sung má»™t sá»‘ tÃ­nh nÄƒng Ä‘Ã¡ng chÃº Ã½ nhÆ°: bá»™ xá»­ lÃ½ hÃ¬nh áº£nh DIGIC 4+ vá»‘n cÃ³ tá»‘c Ä‘á»™ cao hÆ¡n, mÃ n hÃ¬nh LCD 3 inch trÃªn Canon EOS 1300D cÅ©ng Ä‘Ã£ Ä‘Æ°á»£c nÃ¢ng lÃªn má»©c 920.000 Ä‘iá»ƒm áº£nh vÃ  Ä‘Æ°á»£c tÃ­ch há»£p káº¿t ná»‘i Wi-Fi , NFC', 24, 'ChÃ­nh hÃ£ng', 2, 8, NULL, 1, 1),
(18, 'Canon M3+ 15-45mm STM', 'm32_600x532.jpg', '11200000', 'Canon M3+ 15-45mm STM', 24, 'ChÃ­nh hÃ£ng', 2, 10, NULL, 0, 0),
(19, 'Canon 5DSR Body', 'z_canon_5ds_r_beauty_1024x818.jpg', '47000000', 'Canon 5DSR Body', 24, 'ChÃ­nh hÃ£ng', 2, 11, NULL, 0, 0),
(20, 'Canon M6+15-45mm', 'Canon_M6_15_45mm___New_100___Chinh_hang_4418672_1600x1280.jpg', '13000000', 'Canon M6+15-45mm', 24, 'ChÃ­nh hÃ£ng', 2, 12, NULL, 0, 0),
(24, 'Sony A9 Body', 'SO_A9_02_750x750.jpg', '100000000', 'Sony A9 Body', 24, 'ChÃ­nh hÃ£ng', 1, 15, '2018-11-19', 0, 0),
(26, 'Canon 28mm F/2.8 EF', 'Canon_28mm_f2_8_IS_675x450.jpg', '7500000', 'Canon 28mm F/2.8 EF', 25, 'ChÃ­nh hÃ£ng', 2, 1, NULL, 0, 0),
(27, 'Canon 70-200mm F4 L IS USM', '70_200f4li_500x500_500x500.jpg', '23000000', 'Canon 70-200mm F4 L IS USM', 25, 'ChÃ­nh hÃ£ng', 2, 0, NULL, 3, 1),
(28, 'Canon 85mm F1.4 L IS USM', 'canon85mm_770x616.jpg', '32000000', 'Canon 85mm F1.4 L IS USM', 25, 'ChÃ­nh hÃ£ng', 2, 0, '2018-11-20', 0, 1),
(29, 'Canon EF-M 18-150mm f/3.5-6.3 IS STM', '18150_616x463.jpg', '10000000', 'Canon EF-M 18-150mm f/3.5-6.3 IS STM', 25, 'ChÃ­nh hÃ£ng', 2, 1, NULL, 0, 0),
(30, 'Canon 18-135mm USM Nano', '18135mm_640x440.jpg', '7000000', 'Canon 18-135mm USM Nano', 25, 'ChÃ­nh hÃ£ng', 2, 1, NULL, 0, 0),
(31, 'Canon 35mm F1.4 L II USM', 'Canon_EF_35mm_F1_4_L_II_USM__Moi_100__4419551_960x653.jpg', '33000000', 'Canon 35mm F1.4 L II USM', 25, 'ChÃ­nh hÃ£ng', 2, 1, NULL, 0, 0),
(32, 'Canon 8-15mm F/4 L', '8_15_700x700.jpg', '29900000', 'Canon 8-15mm F/4 L', 25, 'ChÃ­nh hÃ£ng', 2, 1, NULL, 0, 0),
(33, 'Canon Extender EF 1.4x III', 'canon1_4_700x700.jpg', '9000000', 'Canon Extender EF 1.4x III', 25, 'ChÃ­nh hÃ£ng', 2, 0, '2018-11-24', 3, 1),
(34, 'Canon 50mm f/1.4 USM', '50mmf1_4_800x800.jpg', '6700000', 'Canon 50mm f/1.4 USM', 25, 'ChÃ­nh hÃ£ng', 2, 1, NULL, 0, 0),
(35, 'Samyang 35mm F2.8 FE-AF', 'sy_709x648.jpg', '9000000', 'Samyang 35mm F2.8 FE-AF', 25, 'ChÃ­nh hÃ£ng', 1, 1, '2018-11-24', 1, 0),
(36, 'Grip Canon BG-E2N ', 'e2n_521x390.jpg', '3000000', 'Grip Canon BG-E2N ', 26, 'ChÃ­nh hÃ£ng', 2, 5, '2018-11-26', 0, 0),
(37, 'Canon BG-E14 Battery Grip', 'e14_1250x1250.jpg', '1900000', 'Canon BG-E14 Battery Grip', 26, 'ChÃ­nh hÃ£ng', 2, 1, NULL, 2, 0),
(38, 'Canon BG-E13', 'grip6d_1000x1000.jpg', '4000000', 'Canon BG-E13', 26, 'ChÃ­nh hÃ£ng', 2, 1, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

DROP TABLE IF EXISTS `chitietdathang`;
CREATE TABLE IF NOT EXISTS `chitietdathang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dathangid` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `ngaydukiengiaohang` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`id`, `dathangid`, `idsp`, `soluong`, `gia`, `tinhtrang`, `ngaydukiengiaohang`) VALUES
(41, 21, 9, 2, '46000000', 0, '2018-12-31 00:00:00'),
(40, 21, 21, 1, '35000000', 0, '2018-12-31 00:00:00'),
(39, 20, 25, 1, '43000000', 0, '2018-12-31 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

DROP TABLE IF EXISTS `dathang`;
CREATE TABLE IF NOT EXISTS `dathang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `tonggia` decimal(10,0) NOT NULL,
  `loaigiaohang` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `ngaytao` datetime NOT NULL,
  `ngaydukiengiaohang` datetime NOT NULL,
  `diachinhanhangid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`id`, `userid`, `tonggia`, `loaigiaohang`, `tinhtrang`, `ngaytao`, `ngaydukiengiaohang`, `diachinhanhangid`) VALUES
(21, 16, '35020000', 2, 0, '2018-12-28 00:00:00', '2018-12-31 00:00:00', 49),
(20, 16, '43020000', 1, 0, '2018-12-28 00:00:00', '2018-12-31 00:00:00', 49);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachinhanhang`
--

DROP TABLE IF EXISTS `diachinhanhang`;
CREATE TABLE IF NOT EXISTS `diachinhanhang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nguoidungid` int(11) NOT NULL,
  `tennguoinhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachigiaohang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diachinhanhang`
--

INSERT INTO `diachinhanhang` (`id`, `nguoidungid`, `tennguoinhan`, `sdt`, `diachigiaohang`) VALUES
(49, 16, 'phung thanh an', '098765432', '485-Cá»™ng HoÃ -PhÆ°á»ng 15-Quáº­n TÃ¢n BÃ¬nh-TPHCM'),
(54, 16, 'anphung', '111', '1-1-1-1'),
(53, 16, '2', '2', '2-2-2-2'),
(52, 16, '1', '1', '1-1-1-1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaohang`
--

DROP TABLE IF EXISTS `giaohang`;
CREATE TABLE IF NOT EXISTS `giaohang` (
  `idgh` int(11) NOT NULL AUTO_INCREMENT,
  `tenloaigiaohang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  PRIMARY KEY (`idgh`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `idkh` int(11) NOT NULL AUTO_INCREMENT,
  `tenkh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idkh`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `tenkh`, `ngaysinh`, `email`, `sdt`, `gioitinh`, `matkhau`) VALUES
(16, 'PhÃ¹ng Thanh An', '1997-07-22', 'anphung2271997@gmail.com', '0973898494', 'Nam', '09876543'),
(17, 'phung thanh an', '2004-04-15', 'anphung@gmail.com', '0909090909', 'Nam', '0000'),
(23, '35345', '2002-09-17', 'ewrwer@', '3545', 'Nu', '345345'),
(24, 'bxcvcv', '2002-11-15', 'sdsdf@gmail.com', 'abc123', 'Nam', '12345678'),
(25, '1', '2004-09-14', 'qÆ°eqweqe', '1', 'Nam', '123'),
(26, '111', '2003-11-19', '1111', '111', 'Nam', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `idSP` int(11) NOT NULL AUTO_INCREMENT,
  `TenloaiSP` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Thutu` int(100) NOT NULL,
  PRIMARY KEY (`idSP`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`idSP`, `TenloaiSP`, `Thutu`) VALUES
(24, 'Camera', 1),
(25, 'Len', 2),
(26, 'Pin', 3),
(28, 'Phá»¥ Kiá»‡n', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

DROP TABLE IF EXISTS `nhasanxuat`;
CREATE TABLE IF NOT EXISTS `nhasanxuat` (
  `idnsx` int(11) NOT NULL AUTO_INCREMENT,
  `tennsx` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Thutu` int(11) NOT NULL,
  PRIMARY KEY (`idnsx`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`idnsx`, `tennsx`, `Thutu`) VALUES
(14, 'Fujifilm', 3),
(1, 'Sony', 2),
(2, 'Canon', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoanadmin`
--

DROP TABLE IF EXISTS `taikhoanadmin`;
CREATE TABLE IF NOT EXISTS `taikhoanadmin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoanadmin`
--

INSERT INTO `taikhoanadmin` (`idadmin`, `user`, `pass`) VALUES
(2, 'admin', '0973898494');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
