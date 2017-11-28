-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 01:18 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_regis`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `addno` int(11) NOT NULL,
  `company` varchar(80) NOT NULL,
  `country` varchar(80) NOT NULL,
  `district` varchar(100) NOT NULL,
  `amphoe` varchar(80) NOT NULL,
  `province` varchar(100) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `data1` varchar(80) NOT NULL,
  `data2` text NOT NULL,
  `data3` text NOT NULL,
  `data4` varchar(80) NOT NULL,
  `data5` varchar(80) NOT NULL,
  `data6` varchar(80) NOT NULL,
  `data7` varchar(80) NOT NULL,
  `data8` varchar(80) NOT NULL,
  `data9` varchar(80) NOT NULL,
  `data10` varchar(80) NOT NULL,
  `data11` varchar(80) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `name`, `lastname`, `email`, `phone`, `tel`, `addno`, `company`, `country`, `district`, `amphoe`, `province`, `zipcode`, `gender`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `data10`, `data11`, `create_at`) VALUES
(1, 'test', 'test', 'test', '0970786821', '02264838', 22, 'test', 'th', 'แสมดำ', 'บางขุนเทียน', 'กรุงเทพมหานคร', 10150, 'female', '-- กดเลือก --', 'เครื่องเป่าขวด PET ', 'เว็บไซต์ฟู้ดแพ็คไทยแลนด์', '-- กดเลือก --', '-- กดเลือก --', '-- กดเลือก --', '-- กดเลือก --', '-- กดเลือก --', '-- กดเลือก --', '-- กดเลือก --', '-- กดเลือก --', '2017-09-21 11:20:30'),
(2, 'เบญจพร', 'ชัยหาญ', 'orloft@com', '0970786821', '123456789', 23, 'test', 'th', 'แสมดำ', 'บางขุนเทียน', 'กรุงเทพมหานคร', 10150, 'male', 'ข้าราชการระดับอาวุโส', 'เทคโนโลยีควบคุมการผลิต', 'สมาคม / สถาบัน', 'ไม่', 'การบรรจุขวดและฉลาก / Bottling / Labeling', 'ผู้ค้าปลีก / ผู้จัดจำหน่าย / ผู้ส่งสินค้าประเภทอาหาร', 'ผู้ผลิตยา / ผู้ผลิตยาสมุนไพร', 'หน่วยงานของรัฐ', 'ม่เกี่ยวข้อง', 'ระหว่าง 5,000,000 - 10,000,000 บาท', 'หาตัวแทน', '2017-10-20 16:22:40'),
(3, 'เกษรินทร์', 'แสงวิเศษ', 'kg@com', '0970095706', '023456789', 45, 'koong', 'อิอิ', 'จตุจักร', 'จตุจักร', 'กรุงเทพมหานคร', 10900, 'female', 'ข้าราชการระดับอาวุโส', 'เทคโนโลยีควบคุมการผลิต', 'ป้ายโฆษณา', 'กำลังตัดสินใจ', 'บรรจุภัณฑ์', 'ผู้ผลิตอาหารสำเร็จรูป', 'ผลิตภัณฑ์ดูแลสุขภาพและเสริมความงาม', 'นักออกแบบ / ผู้รับเหมา', 'ม่เกี่ยวข้อง', 'มากกว่า 10,000,000 บาท', 'อศึกษาข้อมูลสินค้า', '2017-10-23 12:27:13'),
(4, 'test', 'test', 'orloft@com', '0986785678', '0987654657', 343, 'test', 'th', 'กกแก้วบูรพา', 'บางไทร', 'พระนครศรีอยุธยา', 13190, 'male', 'ฝ่ายตรวจสอบและควบคุมคุณภาพสินค้า', 'แฟรนไชส์อาหาร เครื่องดื่ม', 'ผู้แสดงสินค้า', 'กำลังตัดสินใจ', 'อาหารเหลว', 'แฟรนไชส์อาหาร เครื่องดื่ม', 'ผลิตภัณฑ์ดูแลสุขภาพและเสริมความงาม', 'ตัวแทนผู้ผลิตและผู้ประกอบการ', '', 'ระหว่าง 1,000,000 – 5,000,000 บาท', 'หาตัวแทน', '2017-11-09 08:44:25'),
(5, 'ก', 'ก', 'd', '3333333333', '2343243434', 232, 'd', 'dsad', 'กกแก้วบูรพา', 'บางไทร', 'พระนครศรีอยุธยา', 13190, 'female', '', '', '', '', '', '', '', '', '', '', '', '2017-11-24 17:08:18'),
(6, 'เบญจวรรณ', 'ชัยหาญ', 'ann@gmail.com', '0988823393', '', 6, '-', '-', 'คอนสวรรค์', 'คอนสวรรค์', 'ชัยภูมิ', 36140, 'female', 'ผู้จัดการฝ่ายช่าง / วิศวกร', ' งานบาร์โค้ด / ฉลาก / งานพิมพ์', 'ป้ายโฆษณา', 'ไม่', 'บรรจุภัณฑ์', 'อาหารทะเล', 'ผู้ผลิตยา / ผู้ผลิตยาสมุนไพร', 'การขนส่ง / การลำเลียงสินค้า', 'ม่เกี่ยวข้อง', 'น้อยกว่า 500,000 - 1,000,000 บาท', 'หาตัวแทน', '2017-11-26 16:20:41'),
(7, 'เทส', 'เทส', 'orben@fdf', '0879876543', '34567890', 0, 'company', 'thai', 'ปงยางคก', 'ห้างฉัตร', 'ลำปาง', 52190, 'female', '', '', '', '', '', '', '', '', '', '', '', '2017-11-27 15:18:39'),
(8, 'ben', 'chai', 'orbenjaporn@gmail.com', '1234567890', '023456789', 0, 'tf', 'thai', 'ทรัพย์ไพวัลย์', 'เอราวัณ', 'เลย', 42220, 'female', 'ฝ่ายตรวจสอบและควบคุมคุณภาพสินค้า', 'เครื่องทำขนมและอุปกรณ์เบเกอรี่', 'เอกสารบัตรเชิญ / จดหมายจากผู้จัดงานแสดงสินค้า', 'กำลังตัดสินใจ', 'อาหารเหลว', 'ผลิตภัณฑ์ขนมหวาน', 'ผลิตภัณฑ์ดูแลสุขภาพและเสริมความงาม', 'บริษัทที่ปรึกษา / บริษัทพัฒนาและวิจัย / หน่วยงานการศึกษา', 'เกี่ยวข้อง', 'ระหว่าง 1,000,000 – 5,000,000 บาท', 'อศึกษาข้อมูลสินค้า', '2017-11-27 19:35:42'),
(9, 'เบญ', 'พร', 'orloftin@com', '0222222222', '0111111111', 0, 'tbp', 'thai', 'ปงดอน', 'แจ้ห่ม', 'ลำปาง', 52120, 'female', '', '', '', '', '', '', '', '', '', '', '', '2017-11-27 09:32:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
