-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 04:02 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060989_libraries`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `docgia`
--

CREATE TABLE `docgia` (
  `madg` int(11) NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `namsinh` int(4) NOT NULL,
  `nghenghiep` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `docgia`
--

INSERT INTO `docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
(1, 'Nguyễn Văn Toàn', 'Nam', 2000, 'Sinh viên', '2022-01-01', '2023-01-01', 'Hoàng Mai - Hà Nội'),
(2, 'Nguyễn Minh Huệ', 'Nữ', 1997, 'Sinh viên', '2022-01-03', '2022-01-03', 'Thanh Xuân - Hà Nội'),
(3, 'Vũ Văn Thanh', 'Nam', 1995, 'Tự do', '2022-01-06', '2023-01-06', 'Hoàn Kiếm - Hà Nội'),
(4, 'Nguyễn Thị Linh', 'Nữ', 1989, 'Giảng viên', '2022-01-03', '2023-01-03', 'Thanh Xuân - Hà Nội'),
(5, 'Nguyễn Quang Hải', 'Nam', 1995, 'Cầu thủ', '2022-01-02', '2023-01-02', 'Hoàn Kiếm - Hà Nội'),
(6, 'Nguyễn Thị Hoa', 'Nữ', 1997, 'Nhân viên', '2022-01-03', '2023-01-03', 'Thanh Xuân - Hà Nội'),
(7, 'Đoàn Văn Hậu', 'Nam', 1995, 'Tự do', '2022-01-05', '2023-01-05', 'Thanh Trì - Hà Nội'),
(8, 'Vũ Thi Lan', 'Nữ', 1989, 'Giáo viên', '2022-01-02', '2022-01-02', 'Thanh Trì - Hà Nội'),
(9, 'Nguyễn Hoàng Đức', 'Nam', 1997, 'Cầu thủ', '2022-01-01', '2023-01-01', 'Cầu Giấy - Hà Nội'),
(10, 'Đỗ Hùng Dũng', 'Nam', 1989, 'Giáo viên', '2022-01-03', '2023-01-03', 'Thanh Trì - Hà Nội');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `docgia`
--
ALTER TABLE `docgia`
  ADD PRIMARY KEY (`madg`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `docgia`
--
ALTER TABLE `docgia`
  MODIFY `madg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
