-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 03:27 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datxedulich`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int(11) NOT NULL,
  `id_bookcar` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `deposits` float NOT NULL,
  `totalmoney` float NOT NULL,
  `status_bill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookcar`
--

CREATE TABLE `bookcar` (
  `id_bookcar` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `id_unitprice` int(11) NOT NULL,
  `starttime` date NOT NULL,
  `endtime` date NOT NULL,
  `bookcar_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id_car` int(11) NOT NULL,
  `carname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `seats` int(11) NOT NULL,
  `licenseplate` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `license` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id_car`, `carname`, `describe`, `image`, `seats`, `licenseplate`, `license`, `status`) VALUES
(1, 'Mazda CX5', 'số ghế: 4 chỗ,đời xe: 2014 - 2017, ngoại thất: chủ đạo là màu đen, kính được dán phim cách nhiệt cao cấp.', 'xe_4_cho_mazda_cx5.jpg', 4, '', '', 0),
(2, 'Toyota vios 2017', 'số ghế: 4 chỗ,thuộc dòng xe sedan hạng B cỡ nhỏ được sản xuất và lắp ráp tại Việt Nam', 'xe-5-cho-toyota-vios-2017.jpg', 4, '', '', 0),
(3, 'Toyota vios 2017', 'số ghế: 4 chỗ,Thế hệ mới Toyota Vios 2018 vừa chính thức ra mắt người tiêu dùng trong nước, với thiết kế đầy cảm xúc cùng những \r\ntrang bị tiện nghi và an toàn tiên tiến hàng đầu phân khúc, đạt tiêu chuẩn An toàn 5* sao ASEAN NCAP với 07 túi khí, hệ thống cân bằng điện tử được\r\n tiêu chuẩn hóa trên tất cả các phiên bản.', 'xe-5-cho-toyota-vios-2018.jpg', 4, '', '', 0),
(4, 'Inova', 'số ghế: 8 chỗ Toyota innova 2018 được sinh ra để phục vụ những nhu cầu tối ưu của khách hàng với khoảng không gian bên trong rất rộng rãi.\r\nCốp sau của xe Toyota Innova 2018 với dung tích khá lớn giúp chứa nhiều đồ dùng, vật dụng, tiện lợi cho những chuyến đi dã ngoại của gia đình', 'xe-8-cho-inova.jpg', 8, '', '', 0),
(5, 'Fortuner 2017', 'số ghế: 8 chỗ Toyota Fortuner 2017, chiếc SUV 8 chỗ gầm cao, máy thoáng này không chỉ chở thoái mái gia đình 8 người \r\nmà nó còn rất mạnh mẽ và chắc chắn để có thể thoải mái off-road trên những cung đường khó khăn', 'xe-8-cho-fortuner.jpg', 8, '', '', 0),
(6, 'Fortuner 2018', 'số ghế: 8 chỗ nội thất tiện nghi mang phong cách hiện đại, đáp ứng nhu cầu của những gia đình thành đạt hay những người khó tính nhất.\r\n Động cơ  theo tiêu chí thông minh, mạnh mẽ và tiết kiệm nhiên liệu', 'xe-8-cho-fortunerrr.jpg', 8, '', '', 0),
(7, 'toyota fortransit', 'Kích thước khá rộng rải giúp mang lại cho xe một không gian nội thất vừa đủ rộng và thoải mái cho các hành khách ở những hành trình xa.', 'xe-16-cho-toyota-fortransit.jpg', 16, '', '', 0),
(8, 'Mercedes Benz Sprinter', 'Mercedes Benz Sprinter dòng xe 16 chỗ sang trọng, lịch lãm trong phân khúc với khả năng vận hành êm ái, cách âm tốt', 'xe-16-Mercrdes.jpg', 16, '', '', 0),
(9, 'Huyndai Solati', 'Người tiêu dùng và chuyên gia đều đánh giá Hyundai Solati cao ở động cơ mạnh mẽ, hơn hẳn các đối thủ trong phân khúc xe thương mại 35 chỗ. ', 'Huyndai Solati.jpg', 16, '', '', 0),
(10, 'Hyundai Aero', 'kiểu dáng sang trọng, thiết kế hiện đại, linh kiên nhập khẩu chính hãng từ Hyundai Hàn Quốc, dòng xe này đảm bảo tính an toàn rất cao.hệ thống ghế ngồi êm, đẹp có khả năng bật ra sau tối đa giúp cho hành khách thoải mái ngả lưng trong những chuyến đi xa', 'xe-35-cho-hyundai Aero.jpg', 35, '', '', 0),
(11, 'Iusuzu saco', 'Ưu điểm khác của dòng xe SAMCO do SAMCO sản xuất so với các dòng xe cùng loại, là xe có 5 hầm hàng lớn để cho\r\n khách hàng có thể để tư trang, hành lý, đặc biệt là quà lưu niệm sau chuyến đi.', 'xe-35-cho-Iusuzu-saco.jpg', 35, '', '', 0),
(12, 'Samco Felix', 'Samco Felix có nghĩa là may mắn, hạnh phúc, Samco mong muốn dòng xe khách cao cấp này sẽ đem đến cho khách hàng những điều tốt đẹp như tên gọi. Samco Felix được trang bị động cơ\r\n Isuzu đem lại cho xe sức bền, khả năng vận hành và khả năng tăng tốc mạnh mẽ.', 'xe-35-cho-samco-felix.jpg', 35, '', '', 0),
(13, 'HUYNDAI UNIVERSE', 'Universe - Sang trọng vượt ngoài trí tưởng tượng. NGOẠI THẤT. Đèn hậu; Đèn pha độ sáng cao/Đèn sương mù tinh tế', 'Xe--45-Cho-HUYNDAI-UNIVERSE-va-HUYNDAI-SPACE---sohatravel-2.jpg', 45, '', '', 0),
(14, 'Hyundai Aero Space', 'Dòng xe của xe Hyundai Aero Space 45 chỗ có đặc điểm là khá đa dạng về màu sắc và mẫu mã rất thanh lịch, quan trọng là động cơ có thông số kỹ thuật mạnh chịu được các yếu tố về địa hình,\r\n tiết kiệm nhiên liệu.', 'xe-45-cho-Hyundai-aero-space.jpg', 45, '', '', 0),
(15, 'Hyundai Hiclass', 'Xe HUYNDAI HI-CLASS  là loại xe được thiết kế với những chuyến du lịch đi dài , cùng với không  gian thoải mái có sức chứa từ 38- 45 người , nếu bạn muốn tổ chức một chuyến hành trình với số lượng lớn người\r\n tham gia thì HI-CLASS sẽ là một lựa chọn tuyện vời!!!! ', 'xe-hyundai-hiclass-45-cho-276x193.jpg', 45, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idcmt` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `iddriver` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `drivername` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `driverphone` int(11) NOT NULL,
  `driveraddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `drivercmnd` int(11) NOT NULL,
  `license` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `driversex` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `driverstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unitprice`
--

CREATE TABLE `unitprice` (
  `id_unitprice` int(11) NOT NULL,
  `id_car` int(11) NOT NULL,
  `unitpriceN` float NOT NULL,
  `unitpriceY` float NOT NULL,
  `discountcode` int(11) NOT NULL,
  `datecreate` date NOT NULL,
  `statusunitprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cmnd` int(11) NOT NULL,
  `sex` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `license` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`address`, `cmnd`, `sex`, `license`, `id`, `username`, `password`, `email`, `phone`, `level`) VALUES
('', 0, '', '', 39, '123', '123', '123', '123', 1),
('', 0, '', '', 40, '321', '321', '321', '321', 2),
('', 0, '', '', 42, '1', 'c', 'c', 's', 1),
('', 0, '', '', 43, 'qqqqqqqq', 'qqqqq', 'qqqqqqqqq', 'qqqqqqq', 1),
('', 0, '', '', 44, '1234567890', 'e807f1fcf82d132f9bb018ca6738a19f', 'trangthuy0924@gmail.com', '1234567890', 1),
('', 0, '', '', 45, 'ghjk', 'e10adc3949ba59abbe56e057f20f883e', 'at@gmail.com', '234567', 1),
('HÃ  Ná»™i', 12345678, 'Ná»', 'a1', 46, 'qÆ°áº»ty', 'ff558b20091854c3d821f6a71bb0c962', 'trangnt62@wru.vn', '123456789', 1),
('qÆ°áº»ty', 12345, 'nam', 'ac', 47, '12345678', '25f9e794323b453885f5181f1b624d0b', '123456', '12345678', 1),
('qÆ°áº»ty', 1234567, 'nam', 'a1', 48, 'nguyá»…n', '25d55ad283aa400af464c76d713c07ad', 'Ã¡dfghj', '12345678', 1),
('11', 11, '11', '11', 49, 'nguyá»…n thanh há»a', '827ccb0eea8a706c4c34a16891f84e7b', '11', '11', 1),
('11111', 111111, '1', '1', 50, 'nguyá»…n thÃ¹y', '698d51a19d8a121ce581499d7b701668', '111111', '1111', 1),
('Æ°e', 0, 'Æ°e', 'qÆ°e', 51, 'Nguyá»…n ThÃ¹y Linh', '81dc9bdb52d04dc20036dbd8313ed055', 'qÆ°e', '123', 1),
('23456', 12345, '123', '12345', 52, 'nguyá»…n thÃ¹y  ngá»c', 'e10adc3949ba59abbe56e057f20f883e', '12345612345', '123456', 1),
('11', 11, '11', '11', 53, 'nguyá»…n thanh hÆ°Æ¡ng thanh', 'e10adc3949ba59abbe56e057f20f883e', '11123456789', '11', 1),
('q', 0, 'q', 'q', 54, '1234567890 nguyá»…n', 'b5407dfd5a7d4cae26780b947dbeea92', 'q', 'q', 1),
('HÃ  Ná»™i', 2147483647, 'nam', 'a1', 55, 'nguyen', '202cb962ac59075b964b07152d234b70', 'buiminhtuyen62@yahoo.com', '123456', 1),
('HÃ  Ná»™i', 2147483647, 'Ná»', 'a1', 56, 'trangnguyen', '827ccb0eea8a706c4c34a16891f84e7b', 'trangthuy0994@gmail.com', '123', 1),
('sdfghj', 0, 'Æ°', 'i', 57, 'sdfghjk', '76d79381b686d8adeb39c95f7ad48c8c', 'áº»tyu', '2345678', 1),
('HÃ  Ná»™i', 1, 'nam', 'a1', 58, 'tranghihi', '202cb962ac59075b964b07152d234b70', 'trangy0924@gmail.com', '123', 1),
('HÃ  Ná»™i', 2147483647, 'nam', 'a1', 59, 'tranghihii', '81dc9bdb52d04dc20036dbd8313ed055', 'trangthuuy0924@gmail.com', '123', 1),
('1', 1, '1', '1', 60, 'u', '7b774effe4a349c6dd82ad4f4f21d34c', '1', '1', 1),
('Æ°áº»ty', 234567, 'nam', 'a1', 61, '1234567', 'cfcd208495d565ef66e7dff9f98764da', 'Ã¡dfgh', '12345678', 1),
('HÃ  Ná»™i', 2147483647, 'Ná»', 'a1', 62, 'trangtrang', '22e894d5745f6dfd89d3328c0e746f09', 'huy0924@gmail.com', '123', 1),
('kk', 0, 'mm', 'll', 63, 'trtrtr', '1f89c0f625513c51ed5388804e551046', '00', '00', 1),
('', 0, '', '', 64, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 1),
('HÃ  Ná»™i', 2147483647, 'nam', 'a1', 65, 'trangtrangtrang', 'trangtrangtrang', 'trangtrangtrang', '123456', 1),
('qÆ°áº»ty', 2147483647, 'Ná»', 'a1', 66, '123321123', '123321123', '3', '123', 1),
('abc', 1, 'b', 'a1', 67, 'trmv', 'trmv', '0965972697j', '123', 1),
('true', 0, 'tru', 'tru', 68, 'true', 'true', 'true', 'true', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `id_bookcar` (`id_bookcar`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `bookcar`
--
ALTER TABLE `bookcar`
  ADD PRIMARY KEY (`id_bookcar`),
  ADD KEY `id_car` (`id_car`),
  ADD KEY `id_unitprice` (`id_unitprice`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcmt`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`iddriver`),
  ADD KEY `id_car` (`id_car`);

--
-- Indexes for table `unitprice`
--
ALTER TABLE `unitprice`
  ADD PRIMARY KEY (`id_unitprice`),
  ADD KEY `id_car` (`id_car`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookcar`
--
ALTER TABLE `bookcar`
  MODIFY `id_bookcar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcmt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `iddriver` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unitprice`
--
ALTER TABLE `unitprice`
  MODIFY `id_unitprice` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_bookcar`) REFERENCES `bookcar` (`id_bookcar`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `bookcar`
--
ALTER TABLE `bookcar`
  ADD CONSTRAINT `bookcar_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`);

--
-- Constraints for table `unitprice`
--
ALTER TABLE `unitprice`
  ADD CONSTRAINT `unitprice_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
