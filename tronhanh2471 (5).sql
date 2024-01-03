-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 08:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tronhanh2471`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbaocao`
--

CREATE TABLE `tblbaocao` (
  `BaocaoID` int(100) NOT NULL,
  `TinID` int(100) NOT NULL,
  `Baocao_chitiet` varchar(255) NOT NULL,
  `Baocao_phone` varchar(100) NOT NULL,
  `Baocao_email` varchar(255) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Baocao_trangthai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tblbaocao`
--

INSERT INTO `tblbaocao` (`BaocaoID`, `TinID`, `Baocao_chitiet`, `Baocao_phone`, `Baocao_email`, `Description`, `Baocao_trangthai`) VALUES
(1, 3, 'Sai địa chỉ', '000000', '222@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `FeedbackID` int(100) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `FeedbackTitlle` varchar(255) NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  `Status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`FeedbackID`, `Fullname`, `Email`, `FeedbackTitlle`, `Feedback`, `Status`) VALUES
(1, 'Khách Hàng', 'khachang@gmailcom', 'Liên Hệ Đăng Bài', 'Nội dung chi tiết', 1),
(2, 'Admin 191', 'khachang@gmailcom', 'Liên Hệ Đăng Bài', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblimage`
--

CREATE TABLE `tblimage` (
  `ImageID` int(11) NOT NULL,
  `RoomID` int(11) DEFAULT NULL,
  `ImageURL` varchar(255) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `Level` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblimage`
--

INSERT INTO `tblimage` (`ImageID`, `RoomID`, `ImageURL`, `Status`, `Level`, `UserID`) VALUES
(1, 1, 'assets/images/single-property.jpg', 1, 1, 1),
(2, 2, 'assets/images/single-property.jpg', 1, 1, 2),
(3, 1, 'assets/images/single-property.jpg', 1, 3, 1),
(4, 3, 'assets/images/single-property.jpg', 0, 4, 2),
(5, 1, 'assets/images/single-property.jpg', 1, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmenu`
--

CREATE TABLE `tblmenu` (
  `MenuID` int(10) NOT NULL,
  `MenuName` varchar(100) NOT NULL,
  `Levels` int(20) NOT NULL,
  `IsActive` int(10) NOT NULL,
  `Link` varchar(250) NOT NULL,
  `Position` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tblmenu`
--

INSERT INTO `tblmenu` (`MenuID`, `MenuName`, `Levels`, `IsActive`, `Link`, `Position`) VALUES
(2, 'Phòng Trọ', 2, 1, 'bantin.php', 1),
(8, 'Đăng Tin', 5, 1, 'dangtin.php', 1),
(9, 'Nhà, Căn Hộ Cho Thuê', 3, 1, 'bantin1.php', 1),
(10, 'Tìm Ở Ghép', 4, 1, 'bantin2.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbltaikhoan`
--

CREATE TABLE `tbltaikhoan` (
  `Tk_ID` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Facebook` varchar(255) NOT NULL,
  `Level` int(11) NOT NULL,
  `Description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbltaikhoan`
--

INSERT INTO `tbltaikhoan` (`Tk_ID`, `Username`, `FullName`, `Phone`, `Address`, `Password`, `Email`, `Facebook`, `Level`, `Description`) VALUES
(1, 'admin', 'Văn B', '099999999', '', '123', 'admin@gmail.com', '', 2, ''),
(2, 'admin1', 'Hồ Văn Long 1', '119911', '', '111', 'admin1@gmail.com', 'https://www.facebook.com/VnLong22.02', 1, ''),
(3, '111', '', '', '', '111', '111@gmail.com', '', 2, ''),
(4, '112', '', '', '', '112', '112@gmail.com', '', 1, ''),
(5, 'hlle', '', '', '', '12346', 'sailampro97@gmail.com', '', 1, ''),
(6, 'hlledd', '', '', '', '123', 'sailampro9555@gmail.com', '', 1, ''),
(7, 'hlle', '', '', '', '123', 'sailampro797@gmail.com', '', 1, ''),
(8, 'hlless', '', '', '', '123', 'sailampro97ss@gmail.com', '', 1, ''),
(9, 'hlle', '', '', '', '123', 'sailampro97ddd@gmail.com', '', 1, ''),
(10, 'hlle', '', '', '', '123', 'sailampro9sss7@gmail.com', '', 1, ''),
(11, 'hlle1111', '', '', '', '111', 'sailam1111pro97@gmail.com', '', 1, ''),
(12, 'hlle111', '', '', '', '111', 'sailampro9555@gmail.com111', '', 1, ''),
(13, 'hlle', '', '', '', '123', 'sailampro97ssss@gmail.com', '', 1, ''),
(14, 'hlle', '', '', '', '123456', 'sailamprsssso97@gmail.com', '', 1, ''),
(15, 'haha', '', '', '', '123', 'sailampro955a5@gmail.com', '', 2, ''),
(16, 'thoavv', '', '', '', '123', 'sailampaaro97@gmail.com', '', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbltindv`
--

CREATE TABLE `tbltindv` (
  `TinID` int(100) NOT NULL,
  `Tk_ID` int(100) NOT NULL,
  `Tin_title` varchar(255) NOT NULL,
  `Tin_chitiet` text NOT NULL,
  `Ltin_ID` int(10) NOT NULL,
  `Tin_hinhthuc` varchar(255) NOT NULL,
  `Tin_diachi` varchar(250) NOT NULL,
  `Tin_diachichitiet` varchar(255) NOT NULL,
  `Tin_gia` varchar(250) NOT NULL,
  `Tin_dientich` int(100) NOT NULL,
  `Tin_phong` int(100) NOT NULL,
  `Tin_toida` int(100) NOT NULL,
  `Tin_phongtrong` int(100) NOT NULL,
  `Tin_tuquan` int(10) NOT NULL,
  `Tin_time` datetime NOT NULL,
  `Tttindv_ID` int(10) NOT NULL,
  `Tin_image1` varchar(255) NOT NULL,
  `Tin_image2` varchar(255) NOT NULL,
  `Tin_image3` varchar(255) NOT NULL,
  `Tin_gtuutien` int(100) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Tin_svip` int(100) NOT NULL,
  `Tin_trangthai` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbltindv`
--

INSERT INTO `tbltindv` (`TinID`, `Tk_ID`, `Tin_title`, `Tin_chitiet`, `Ltin_ID`, `Tin_hinhthuc`, `Tin_diachi`, `Tin_diachichitiet`, `Tin_gia`, `Tin_dientich`, `Tin_phong`, `Tin_toida`, `Tin_phongtrong`, `Tin_tuquan`, `Tin_time`, `Tttindv_ID`, `Tin_image1`, `Tin_image2`, `Tin_image3`, `Tin_gtuutien`, `Description`, `Tin_svip`, `Tin_trangthai`) VALUES
(1, 2, 'Phòng trọ đường Cách mạng tháng 8 - Nhà trọ Kim Thoa', 'Diện tích mỗi phòng: 21m2. Ngang: 3m, dài 7m. Có bếp, toilet riêng, sân phơi quần áo.\r\n\r\nĐiện: 2700đ/ kw\r\nNước: 8000đ/m3 (4m3 trở lên 9000đ/m3)\r\n\r\nPhòngg: 1,2 triệu - Có toilet riêng, bếp riêng, tiện nghi cơ bản\r\n\r\nPhòng trọ có lối đi riêng, an ninh, sạch sẽ, thoáng mát, yên tĩnh, có wifi, camera an ninh 24/24, chìa khoá cổng riêng, chủ nhà trọ thân thiện.\r\n\r\nƯu tiên CNV.\r\n\r\nPhòng trọ đường Cách mạng tháng 8 - Nhà trọ Kim Thoa\r\n\r\nđc: 290/7 Cách Mạng Tháng 8, Bùi Hữu Nghĩa, Bình Thuỷ (Gần chợ An Thới)\r\n\r\nChi tiết liên hệ chủ trọ theo sđt 0909897896 (gặp cô Thoa)', 2, 'Ký túc xá (dorm)', 'Hà Nội', '12, Nguyễn Trãi', '1111111', 111, 11, 11, 11, 2, '2023-12-21 07:10:43', 2, 'assets\\images\\property-02.jpg', '', '', 3, '', 1, 1),
(2, 2, 'CHO THUÊ PHÒNG TRỌ AN NINH, SẠCH SẼ, THOÁNG MÁT, TIỆN NGHI', '- Chung cư mini tiện nghi VNAHOMES 622 đường Lạc Long Quân gần công viên nước Hồ Tây:\r\n\r\n- Tọa lạc tại trung tâm quận Tây Hồ giữa các phố Lạc Long Quân, Âu Cơ, Trịnh Công Sơn. Khu vực yên tĩnh nhiều người nước ngoài sinh sống, làm việc gần nhiều nhà hàng, cafe, pub tây nổi tiếng.\r\n\r\n- Cách Phố đi bộ Trịnh Công Sơn 100m, Công Viên Nước, Nhà Hàng Sen Hồ Tây 150m, Thung Lũng Hoa 300m, Highland 300m.\r\n\r\n- Toà nhà có tầng 1 để xe, máy giặt sân phơi chung tầng thượng, cửa ra vào thẻ từ, vân tay, camera an ninh, giờ giấc tự do.\r\n\r\n- Các căn hộ nhiều ánh sáng tự nhiên, cửa sổ lớn, nhiều cây xanh, gió trời, dọn vệ sinh chung đều đặn hàng tuần, dịch vụ bảo trì bảo dưỡng định kỳ miễn phí.\r\n\r\n- Phòng khép kín 25 - 30m2 nội thất đầy đủ chỉ xách vali đến ở.\r\n\r\n* Giá phòng: 4tr2 - 4tr8 / tháng (đóng tiền linh hoạt từng tháng, cọc 1 tháng hợp đồng từ 6 tháng).', 1, 'Trọ nhà nguyên căn', 'Nghệ An', '22 Phuong Hoang Vinh', '1000000', 30, 2, 2, 1, 1, '2023-12-31 09:07:20', 2, 'assets\\images\\property-01.jpg', 'assets\\images\\property-03.jpg', 'assets\\images\\property-02.jpg', 0, '', 1, 1),
(3, 2, 'Phòng cho thuê - Không chung chủ- có điều hòa quận Đống Đa', 'day la chi tiet\r\nday la chi tiet', 2, 'Ký túc xá (dorm)', 'Nghệ An', '22, Lê Duẩn', '1111111', 111, 11, 11, 11, 2, '2023-12-21 07:02:03', 2, 'assets\\images\\property-02.jpg', '', '', 1, '', 1, 1),
(4, 2, 'Phòng mới xây rộng 23m2 , gần KDT Vạn Phúc', 'day la chi tiet\r\nday la chi tiet', 2, 'Ký túc xá (dorm)', 'Hồ Chí Minh', 'Số 12, Quận 9', '1111111', 111, 11, 11, 11, 2, '2023-12-31 19:55:11', 2, 'assets\\images\\property-02.jpg', '', '', 1, '', 1, 1),
(5, 2, 'Cho thuê phòng trọ gần Times City phòng tầng 3 rộng 30m2, giá thuê 3 Triệu/Tháng', 'day la chi tiet\r\nday la chi tiet', 2, 'Ký túc xá (dorm)', 'Hà Nội', '', '3000000', 111, 11, 11, 11, 2, '2023-12-31 19:41:11', 2, 'assets\\images\\property-02.jpg', '', '', 1, '', 0, 1),
(6, 2, 'Cho thuê căn hộ 1 phòng ngủ đường 2 Lê Quý Đôn', 'Cho thuê căn hộ 1 phòng ngủ nằm ngay trung tâm thành phố,ngay thế giới di động bà triệu\r\nGiá 5tr/tháng, cọc 1 tháng, thanh toán càng lâu giá phòng càng giảm\r\nĐầy đủ nội thất, tiện nghi: bàn ghế, giường, điều hoà, tủ lạnh,.....\r\nThanh toán 1 tháng,3 tháng,6 tháng và cọc 1 tháng !\r\nLiên hệ :0945241234', 2, 'Chung cư mini', 'Thừa Thiên Huế', 'Bà Triệu, Huế', '3500000', 40, 2, 4, 2, 2, '2023-12-30 09:59:35', 2, 'assets\\images\\chungcumimi-1.jpg', '', '', 0, '', 1, 1),
(7, 2, 'Phòng cho thuê - Không chung chủ- có điều hòa quận Đống Đa', 'day la chi tiet\r\nday la chi tiet', 2, 'Ký túc xá (dorm)', 'Nghệ An', '22, Lê Duẩn', '1111111', 111, 11, 11, 11, 2, '2023-12-21 07:02:03', 2, 'assets\\images\\anh1.jpg', 'assets\\images\\anh2.jpg', 'assets\\images\\anh3.jpg', 1, '', 1, 1),
(14, 2, 'Phòng 140A Bùi Thị Xuân P2 TB đoạn Giao Phạm Văn Hai 30m2 - BV - Bãi Xe đầy đủ giá 2.7-3 triệu/tháng', '- Diện tích phòng ở: 20m2\r\n\r\n- Phòng thoáng mát có vệ sinh riêng\r\n\r\n- Có bếp để tự nấu ăn\r\n\r\n- Giờ giấc tự do thỏa mái, có chỗ để xe\r\n\r\n- Gần chợ, trường học, đi lại thuận tiện\r\n\r\n- Địa chỉ 137/14 Nguyễn Phước Nguyên, Thanh Khê, Đà Nẵng', 3, 'Chung cư mini', 'Gia Lai', 'Bà Triệu, Huế', '4400000', 23, 22, 1, 11, 2, '2023-12-31 09:02:18', 2, 'assets/images/quanlilienhej.drawio.png', 'assets/images/qthd_timkiem.drawio (2).png', 'assets/images/timkiem.drawio (1).png', 1, '', 1, 1),
(15, 2, 'Còn phòng tiện nghi, thoáng mát, có ban công, cửa sổ gỗ sân vườn, bếp gần cầu Rồng', 'Còn 2 căn, một căn đôi một phòng ngủ, một phòng khách, phòng đơn đẹp từ 2,5-3,5tr, một người, Tiện nghi, thoáng mát, có ban công, cửa sổ gỗ sân vườn, bếp Địa chỉ: K308 Hoàng Diệu thông Nguyễn Văn Linh, gần cầu Rồng giá.LH 0913150376 0r 0903539677', 1, 'Chung cư mini', 'Đà Nẵng', 'K308 Hoàng Diệu, Hải Châu', '2000000', 45, 2, 2, 1, 2, '2024-01-01 03:27:31', 2, 'assets/images/anh-1.jpg', 'assets/images/anh-2.jpg', 'assets/images/anh-3.jpg', 0, '', 0, 1),
(16, 2, 'Còn phòng tiện nghi, thoáng mát, có ban công, cửa sổ gỗ sân vườn, bếp gần cầu Rồng', 'Còn 2 căn, một căn đôi một phòng ngủ, một phòng khách, phòng đơn đẹp từ 2,5-3,5tr, một người, Tiện nghi, thoáng mát, có ban công, cửa sổ gỗ sân vườn, bếp Địa chỉ: K308 Hoàng Diệu thông Nguyễn Văn Linh, gần cầu Rồng giá.LH 0913150376 0r 0903539677', 1, 'Chung cư mini', 'Đà Nẵng', 'K308 Hoàng Diệu, Hải Châu', '2000000', 45, 2, 2, 1, 2, '2024-01-01 03:27:31', 2, 'assets/images/anh-1.jpg', '', '', 0, '', 0, 1),
(17, 2, 'Còn phòng tiện nghi, thoáng mát, có ban công, cửa sổ gỗ sân vườn, bếp gần cầu Rồng', 'Còn 2 căn, một căn đôi một phòng ngủ, một phòng khách, phòng đơn đẹp từ 2,5-3,5tr, một người, Tiện nghi, thoáng mát, có ban công, cửa sổ gỗ sân vườn, bếp Địa chỉ: K308 Hoàng Diệu thông Nguyễn Văn Linh, gần cầu Rồng giá.LH 0913150376 0r 0903539677', 1, 'Chung cư mini', 'Đà Nẵng', 'K308 Hoàng Diệu, Hải Châu', '2000000', 45, 2, 2, 1, 2, '2024-01-01 03:27:31', 2, 'assets/images/anh-1.jpg', '', '', 0, '', 0, 1),
(18, 2, 'Còn phòng tiện nghi, thoáng mát, có ban công, cửa sổ gỗ sân vườn, bếp gần cầu Rồng', 'Còn 2 căn, một căn đôi một phòng ngủ, một phòng khách, phòng đơn đẹp từ 2,5-3,5tr, một người, Tiện nghi, thoáng mát, có ban công, cửa sổ gỗ sân vườn, bếp Địa chỉ: K308 Hoàng Diệu thông Nguyễn Văn Linh, gần cầu Rồng giá.LH 0913150376 0r 0903539677', 1, 'Chung cư mini', 'Đà Nẵng', 'K308 Hoàng Diệu, Hải Châu', '2000000', 45, 2, 2, 1, 2, '2024-01-01 03:27:31', 2, 'assets/images/anh-1.jpg', '', '', 0, '', 0, 1),
(19, 2, 'Cho thuê căn hộ 1 phòng ngủ đường 2 Lê Quý Đôn', 'Cho thuê căn hộ 1 phòng ngủ nằm ngay trung tâm thành phố,ngay thế giới di động bà triệu\r\nGiá 5tr/tháng, cọc 1 tháng, thanh toán càng lâu giá phòng càng giảm\r\nĐầy đủ nội thất, tiện nghi: bàn ghế, giường, điều hoà, tủ lạnh,.....\r\nThanh toán 1 tháng,3 tháng,6 tháng và cọc 1 tháng !\r\nLiên hệ :0945241234', 2, 'Chung cư mini', 'Thừa Thiên Huế', 'Bà Triệu, Huế', '3500000', 40, 2, 4, 2, 2, '2023-12-30 09:59:35', 2, 'assets\\images\\chungcumimi-1.jpg', '', '', 0, '', 1, 0),
(20, 1, 'Cần 1 NAM ở ghép chung cư Sky9 Liên Phường - VCCong', 'Tìm 1 NAM ở ghép 1.6 tr chung cư Sky9 vừa nhận nhà vào 11/6/2019, Ngay vòng xoay Liên Phường - võ chí công - Phú Hữu - Q9 - TPHCM( cách khu công nghệ cao sam sung 1km) tiện đi vào trung tâm TP theo đường cao tốc ko kẹt xe,hình đính kèm là hình thực của căn hộ\r\n\r\n-Phòng ( ở 2 người) có tủ giường máy lạnh, Nhà có máy giặc, bếp , tủ lạnh, TV wifi cực mạnh, máy nước nóng, wc riêng....... nói chung đầy đủ tiện nghi sinh hoạt', 3, 'Ký túc xá (dorm)', 'Hồ Chí Minh', 'Quận 9', '5500000', 41, 1, 2, 1, 2, '2024-01-02 06:53:37', 2, 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 2, '', 1, 1),
(21, 1, 'Ký túc xá Phòng Trọ Ở Ghép khu vực trung tâm Gò Vấp giá sinh viên', 'Cho thuê Ký túc xá 145 Đường số 1 P4, Quận Gò Vấp\r\n\r\n- Giá thuê: 1triệu5 /người/tháng\r\n\r\n- Giá trên bao hết chi phí, Được trang bị đầy đủ: bộ chăn ga gối nệm, tủ, kệ và bàn làm việc riêng trong phòng có khóa riêng\r\n\r\n- giữ xe free\r\n\r\n- giờ giấc tự do\r\n\r\n- Hợp đồng 6 tháng hoặc 12 tháng\r\n\r\n- Xem phòng vui lòng liên hệ trước 1 tiếng\r\n\r\nƯu Đãi Khi Thuê - Giảm Giá 200ktháng trong tháng đầu cho hd 12 tháng', 3, 'Ký túc xá (dorm)', 'Hồ Chí Minh', ' Số 1, 4, Gò Vấp', '1200000', 45, 2, 5, 2, 1, '2024-01-02 13:39:03', 1, 'assets/images/img-1642_1669875992.jpg', 'assets/images/img-1642_1669875992.jpg', 'assets/images/img-1642_1669875992.jpg', 1, '', 0, 1),
(22, 1, 'Ở GHÉP KHU CHUNG CƯ CAO CẤP HAUSNEO QUẬN 9', 'Ở GHÉP KHU CHUNG CƯ CAO CẤP HAUSNEO QUẬN 9\r\n\r\nĐịa Chỉ: Căn hộ Hausneo, Đường số 11, P. Phú Hữu, Tp. Thủ Đức (Quận 9 cũ) thuộc KDC Phú Hữu, Quận 9 yên tĩnh, nhiều cây xanh.\r\n\r\nDiện tích: 73m2 - Kết cấu: 2 phòng ngủ và 2 toilet, phòng khách.\r\n\r\nNhờ vị trí cạnh Cao tốc TP.HCM - Long Thành - Dầu Giây (nút giao Đỗ Xuân Hợp) cư dân căn hộ Hausneo có thể di chuyển thuận lợi:\r\n\r\n- Chỉ vài bước chân là đến Quận 2,\r\n\r\n- Cách Thành phố mới Thủ Thiêm chỉ 5 phút\r\n\r\n- 15 - 20 phút : vào trung tâm Quận 1, Quận 4, Bình Thạnh\r\n\r\n- 18 phút: Vincom Plaza, ngã tư Bình Thái\r\n\r\n- 25 phút đến Phú Mỹ Hưng, Quận 7 qua đường vành đai trong - cầu Phú Mỹ\r\n\r\n- Đi về trong ngày: Đồng Nai, Vũng Tàu, Bình Dương\r\n\r\n- Gần Khu Công Nghệ Cao, FPT Software, Đại Học FPT, Công Ty Samsung, Nidec, Jabil, intel.', 3, 'Phòng trọ', 'Nghệ An', 'Thôn 5, Quỳnh Hoa, Quỳnh Lưu', '2500000', 22, 2, 2, 2, 2, '2024-01-02 08:27:47', 1, 'assets/images/img-1658_1669875984.jpg', 'assets/images/img-1661_1669875980.jpg', 'assets/images/img-1661_1669875980.jpg', 2, '', 0, 0),
(23, 1, 'Cần 1 NAM ở ghép chung cư Sky9 Liên Phường - VCCong', 'Tìm 1 NAM ở ghép 1.6 tr chung cư Sky9 vừa nhận nhà vào 11/6/2019, Ngay vòng xoay Liên Phường - võ chí công - Phú Hữu - Q9 - TPHCM( cách khu công nghệ cao sam sung 1km) tiện đi vào trung tâm TP theo đường cao tốc ko kẹt xe,hình đính kèm là hình thực của căn hộ\r\n\r\n-Phòng ( ở 2 người) có tủ giường máy lạnh, Nhà có máy giặc, bếp , tủ lạnh, TV wifi cực mạnh, máy nước nóng, wc riêng....... nói chung đầy đủ tiện nghi sinh hoạt', 3, 'Ký túc xá (dorm)', 'Hồ Chí Minh', 'Quận 9', '5500000', 41, 1, 2, 1, 2, '2024-01-02 06:53:37', 1, 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 2, '', 1, 1),
(24, 1, 'Cần 1 NAM ở ghép chung cư Sky9 Liên Phường - VCCong', 'Tìm 1 NAM ở ghép 1.6 tr chung cư Sky9 vừa nhận nhà vào 11/6/2019, Ngay vòng xoay Liên Phường - võ chí công - Phú Hữu - Q9 - TPHCM( cách khu công nghệ cao sam sung 1km) tiện đi vào trung tâm TP theo đường cao tốc ko kẹt xe,hình đính kèm là hình thực của căn hộ\r\n\r\n-Phòng ( ở 2 người) có tủ giường máy lạnh, Nhà có máy giặc, bếp , tủ lạnh, TV wifi cực mạnh, máy nước nóng, wc riêng....... nói chung đầy đủ tiện nghi sinh hoạt', 3, 'Ký túc xá (dorm)', 'Hồ Chí Minh', 'Quận 9', '5500000', 41, 1, 2, 1, 2, '2024-01-02 06:53:37', 3, 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 2, 'Sai thông tin địa chỉ', 1, 1),
(25, 2, 'Cho thuê căn hộ 1 phòng ngủ đường 2 Lê Quý Đôn', 'Cho thuê căn hộ 1 phòng ngủ nằm ngay trung tâm thành phố,ngay thế giới di động bà triệu\r\nGiá 5tr/tháng, cọc 1 tháng, thanh toán càng lâu giá phòng càng giảm\r\nĐầy đủ nội thất, tiện nghi: bàn ghế, giường, điều hoà, tủ lạnh,.....\r\nThanh toán 1 tháng,3 tháng,6 tháng và cọc 1 tháng !\r\nLiên hệ :0945241234', 1, 'Chung cư mini', 'Thừa Thiên Huế', 'Bà Triệu, Huế', '3500000', 40, 2, 4, 2, 2, '2023-12-30 09:59:35', 2, 'assets\\images\\chungcumimi-1.jpg', '', '', 0, '', 1, 1),
(26, 2, 'CHO THUÊ PHÒNG TRỌ AN NINH, SẠCH SẼ, THOÁNG MÁT, TIỆN NGHI', '- Chung cư mini tiện nghi VNAHOMES 622 đường Lạc Long Quân gần công viên nước Hồ Tây:\r\n\r\n- Tọa lạc tại trung tâm quận Tây Hồ giữa các phố Lạc Long Quân, Âu Cơ, Trịnh Công Sơn. Khu vực yên tĩnh nhiều người nước ngoài sinh sống, làm việc gần nhiều nhà hàng, cafe, pub tây nổi tiếng.\r\n\r\n- Cách Phố đi bộ Trịnh Công Sơn 100m, Công Viên Nước, Nhà Hàng Sen Hồ Tây 150m, Thung Lũng Hoa 300m, Highland 300m.\r\n\r\n- Toà nhà có tầng 1 để xe, máy giặt sân phơi chung tầng thượng, cửa ra vào thẻ từ, vân tay, camera an ninh, giờ giấc tự do.\r\n\r\n- Các căn hộ nhiều ánh sáng tự nhiên, cửa sổ lớn, nhiều cây xanh, gió trời, dọn vệ sinh chung đều đặn hàng tuần, dịch vụ bảo trì bảo dưỡng định kỳ miễn phí.\r\n\r\n- Phòng khép kín 25 - 30m2 nội thất đầy đủ chỉ xách vali đến ở.\r\n\r\n* Giá phòng: 4tr2 - 4tr8 / tháng (đóng tiền linh hoạt từng tháng, cọc 1 tháng hợp đồng từ 6 tháng).', 1, 'Trọ nhà nguyên căn', 'Nghệ An', '22 Phuong Hoang Vinh', '1000000', 30, 2, 2, 1, 1, '2023-12-31 09:07:20', 2, 'assets\\images\\property-01.jpg', 'assets\\images\\property-03.jpg', 'assets\\images\\property-02.jpg', 0, '', 1, 1),
(27, 1, 'Cần 1 NAM ở ghép chung cư Sky9 Liên Phường - VCCong', 'Tìm 1 NAM ở ghép 1.6 tr chung cư Sky9 vừa nhận nhà vào 11/6/2019, Ngay vòng xoay Liên Phường - võ chí công - Phú Hữu - Q9 - TPHCM( cách khu công nghệ cao sam sung 1km) tiện đi vào trung tâm TP theo đường cao tốc ko kẹt xe,hình đính kèm là hình thực của căn hộ\r\n\r\n-Phòng ( ở 2 người) có tủ giường máy lạnh, Nhà có máy giặc, bếp , tủ lạnh, TV wifi cực mạnh, máy nước nóng, wc riêng....... nói chung đầy đủ tiện nghi sinh hoạt', 3, 'Ký túc xá (dorm)', 'Hồ Chí Minh', 'Quận 9', '5500000', 41, 1, 2, 1, 2, '2024-01-03 07:51:45', 2, 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 'assets/images/0ky-tuc-xa-dien-bien-phu-2_1665477306.jpg', 2, '', 1, 1),
(28, 1, 'Ở GHÉP KHU CHUNG CƯ CAO CẤP HAUSNEO QUẬN 9', 'Ở GHÉP KHU CHUNG CƯ CAO CẤP HAUSNEO QUẬN 9\r\n\r\nĐịa Chỉ: Căn hộ Hausneo, Đường số 11, P. Phú Hữu, Tp. Thủ Đức (Quận 9 cũ) thuộc KDC Phú Hữu, Quận 9 yên tĩnh, nhiều cây xanh.\r\n\r\nDiện tích: 73m2 - Kết cấu: 2 phòng ngủ và 2 toilet, phòng khách.\r\n\r\nNhờ vị trí cạnh Cao tốc TP.HCM - Long Thành - Dầu Giây (nút giao Đỗ Xuân Hợp) cư dân căn hộ Hausneo có thể di chuyển thuận lợi:\r\n\r\n- Chỉ vài bước chân là đến Quận 2,\r\n\r\n- Cách Thành phố mới Thủ Thiêm chỉ 5 phút\r\n\r\n- 15 - 20 phút : vào trung tâm Quận 1, Quận 4, Bình Thạnh\r\n\r\n- 18 phút: Vincom Plaza, ngã tư Bình Thái\r\n\r\n- 25 phút đến Phú Mỹ Hưng, Quận 7 qua đường vành đai trong - cầu Phú Mỹ\r\n\r\n- Đi về trong ngày: Đồng Nai, Vũng Tàu, Bình Dương\r\n\r\n- Gần Khu Công Nghệ Cao, FPT Software, Đại Học FPT, Công Ty Samsung, Nidec, Jabil, intel.', 3, 'Phòng trọ', 'Nghệ An', 'Thôn 5, Quỳnh Hoa, Quỳnh Lưu', '2500000', 22, 2, 2, 2, 2, '2024-01-02 08:27:47', 2, 'assets/images/img-1658_1669875984.jpg', 'assets/images/img-1661_1669875980.jpg', 'assets/images/img-1661_1669875980.jpg', 2, '', 1, 1),
(29, 1, 'Ở GHÉP KHU CHUNG CƯ CAO CẤP HAUSNEO QUẬN 9', 'Ở GHÉP KHU CHUNG CƯ CAO CẤP HAUSNEO QUẬN 9\r\n\r\nĐịa Chỉ: Căn hộ Hausneo, Đường số 11, P. Phú Hữu, Tp. Thủ Đức (Quận 9 cũ) thuộc KDC Phú Hữu, Quận 9 yên tĩnh, nhiều cây xanh.\r\n\r\nDiện tích: 73m2 - Kết cấu: 2 phòng ngủ và 2 toilet, phòng khách.\r\n\r\nNhờ vị trí cạnh Cao tốc TP.HCM - Long Thành - Dầu Giây (nút giao Đỗ Xuân Hợp) cư dân căn hộ Hausneo có thể di chuyển thuận lợi:\r\n\r\n- Chỉ vài bước chân là đến Quận 2,\r\n\r\n- Cách Thành phố mới Thủ Thiêm chỉ 5 phút\r\n\r\n- 15 - 20 phút : vào trung tâm Quận 1, Quận 4, Bình Thạnh\r\n\r\n- 18 phút: Vincom Plaza, ngã tư Bình Thái\r\n\r\n- 25 phút đến Phú Mỹ Hưng, Quận 7 qua đường vành đai trong - cầu Phú Mỹ\r\n\r\n- Đi về trong ngày: Đồng Nai, Vũng Tàu, Bình Dương\r\n\r\n- Gần Khu Công Nghệ Cao, FPT Software, Đại Học FPT, Công Ty Samsung, Nidec, Jabil, intel.', 3, 'Phòng trọ', 'Nghệ An', 'Thôn 5, Quỳnh Hoa, Quỳnh Lưu', '2500000', 22, 2, 2, 2, 2, '2024-01-03 07:51:07', 2, 'assets/images/img-1658_1669875984.jpg', 'assets/images/img-1661_1669875980.jpg', 'assets/images/img-1661_1669875980.jpg', 2, '', 0, 1),
(30, 2, 'Phòng trọ đường Cách mạng tháng 8 - Nhà trọ Kim Thoa', 'Diện tích mỗi phòng: 21m2. Ngang: 3m, dài 7m. Có bếp, toilet riêng, sân phơi quần áo.\r\n\r\nĐiện: 2700đ/ kw\r\nNước: 8000đ/m3 (4m3 trở lên 9000đ/m3)\r\n\r\nPhòngg: 1,2 triệu - Có toilet riêng, bếp riêng, tiện nghi cơ bản\r\n\r\nPhòng trọ có lối đi riêng, an ninh, sạch sẽ, thoáng mát, yên tĩnh, có wifi, camera an ninh 24/24, chìa khoá cổng riêng, chủ nhà trọ thân thiện.\r\n\r\nƯu tiên CNV.\r\n\r\nPhòng trọ đường Cách mạng tháng 8 - Nhà trọ Kim Thoa\r\n\r\nđc: 290/7 Cách Mạng Tháng 8, Bùi Hữu Nghĩa, Bình Thuỷ (Gần chợ An Thới)\r\n\r\nChi tiết liên hệ chủ trọ theo sđt 0909897896 (gặp cô Thoa)', 2, 'Ký túc xá (dorm)', 'Hà Nội', '12, Nguyễn Trãi', '1111111', 111, 11, 11, 11, 2, '2023-12-21 07:10:43', 2, 'assets\\images\\property-02.jpg', '', '', 3, '', 1, 1),
(31, 2, 'cần tìm 1 bạn nữ ở ghép trọ đường Phan Chu Trinh', 'Mình cần tìm 1 bạn nữ ở ghép, yêu cầu sạch sẽ, hòa động chút là được ạ.\r\n\r\nTrọ mới xây đầu tháng 9 thoáng mát, sạch sẽ.\r\n\r\nNội thất đã có đủ như: có bếp nấu ăn riêng, kệ chén, nóng lạnh, nvs trong, tủ lạnh, chỗ phơi đồ,….\r\n\r\nKhông ngập lụt, có camera an ninh tốt, bình chữa cháy.\r\n\r\nGần trường y dược (chưa tới 1km), gần kinh tế, sư phạm, ngoại ngữ, luật, học viện âm nhạc, du lịch, công nghiệp.', 3, 'Chung cư mini', 'Thừa Thiên Huế', ' Phan Chu Trinh, Trường An, Huế', '1111111', 33, 2, 2, 2, 2, '2024-01-03 07:51:06', 2, 'assets/images/398541571_2146880589004506_1547764240744424437_n.jpg', 'assets/images/398541571_2146880589004506_1547764240744424437_n.jpg', 'assets/images/398541571_2146880589004506_1547764240744424437_n.jpg', 1, '', 0, 1),
(32, 2, 'CHO THUÊ PHÒNG TRỌ AN NINH, SẠCH SẼ, THOÁNG MÁT, TIỆN NGHI', '- Chung cư mini tiện nghi VNAHOMES 622 đường Lạc Long Quân gần công viên nước Hồ Tây:\r\n\r\n- Tọa lạc tại trung tâm quận Tây Hồ giữa các phố Lạc Long Quân, Âu Cơ, Trịnh Công Sơn. Khu vực yên tĩnh nhiều người nước ngoài sinh sống, làm việc gần nhiều nhà hàng, cafe, pub tây nổi tiếng.\r\n\r\n- Cách Phố đi bộ Trịnh Công Sơn 100m, Công Viên Nước, Nhà Hàng Sen Hồ Tây 150m, Thung Lũng Hoa 300m, Highland 300m.\r\n\r\n- Toà nhà có tầng 1 để xe, máy giặt sân phơi chung tầng thượng, cửa ra vào thẻ từ, vân tay, camera an ninh, giờ giấc tự do.\r\n\r\n- Các căn hộ nhiều ánh sáng tự nhiên, cửa sổ lớn, nhiều cây xanh, gió trời, dọn vệ sinh chung đều đặn hàng tuần, dịch vụ bảo trì bảo dưỡng định kỳ miễn phí.\r\n\r\n- Phòng khép kín 25 - 30m2 nội thất đầy đủ chỉ xách vali đến ở.\r\n\r\n* Giá phòng: 4tr2 - 4tr8 / tháng (đóng tiền linh hoạt từng tháng, cọc 1 tháng hợp đồng từ 6 tháng).', 1, 'Trọ nhà nguyên căn', 'Nghệ An', '22 Phuong Hoang Vinh', '1000000', 30, 2, 2, 1, 1, '2023-12-31 09:07:20', 2, 'assets\\images\\property-01.jpg', 'assets\\images\\property-03.jpg', 'assets\\images\\property-02.jpg', 0, '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lbantin`
--

CREATE TABLE `tbl_lbantin` (
  `Ltin_ID` int(10) NOT NULL,
  `Ltin_name` varchar(255) NOT NULL,
  `Description1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_lbantin`
--

INSERT INTO `tbl_lbantin` (`Ltin_ID`, `Ltin_name`, `Description1`) VALUES
(1, 'Cho Thuê Trọ', ''),
(2, 'Cho Thuê Nhà/Căn Hộ', ''),
(3, 'Tìm Ở Ghép', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblbaocao`
--
ALTER TABLE `tblbaocao`
  ADD PRIMARY KEY (`BaocaoID`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`FeedbackID`);

--
-- Indexes for table `tblimage`
--
ALTER TABLE `tblimage`
  ADD PRIMARY KEY (`ImageID`);

--
-- Indexes for table `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`MenuID`);

--
-- Indexes for table `tbltaikhoan`
--
ALTER TABLE `tbltaikhoan`
  ADD PRIMARY KEY (`Tk_ID`);

--
-- Indexes for table `tbltindv`
--
ALTER TABLE `tbltindv`
  ADD PRIMARY KEY (`TinID`);

--
-- Indexes for table `tbl_lbantin`
--
ALTER TABLE `tbl_lbantin`
  ADD PRIMARY KEY (`Ltin_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblbaocao`
--
ALTER TABLE `tblbaocao`
  MODIFY `BaocaoID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `FeedbackID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblimage`
--
ALTER TABLE `tblimage`
  MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblmenu`
--
ALTER TABLE `tblmenu`
  MODIFY `MenuID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbltaikhoan`
--
ALTER TABLE `tbltaikhoan`
  MODIFY `Tk_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbltindv`
--
ALTER TABLE `tbltindv`
  MODIFY `TinID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_lbantin`
--
ALTER TABLE `tbl_lbantin`
  MODIFY `Ltin_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
