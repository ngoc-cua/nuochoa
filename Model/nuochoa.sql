-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 25, 2024 lúc 02:55 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nuochoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idcomment`, `idkh`, `idhanghoa`, `content`, `luotthich`) VALUES
(1, 3, 15, 'Sản phẩm chất lượng, giá thành hợp lý', 123),
(2, 2, 10, 'Giao hàng cẩn thận, đúng thời gian. Sản phẩm đẹp', 452),
(3, 19, 23, '  Đẹp, Xinh', 0),
(4, 19, 24, '  Thơm lâu, sang trọng, quyến rũ', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idgioitinh` int(11) NOT NULL,
  `idxuatxu` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `soluongton` int(11) NOT NULL,
  `hinh` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idgioitinh`, `idxuatxu`, `dongia`, `soluongton`, `hinh`, `giamgia`) VALUES
(1, 1, 1, 1360000, 20, '1.jpg', 1300000),
(2, 2, 1, 2300000, 10, '2.jpg', 2000000),
(3, 1, 1, 3200000, 10, '3.jpg', 2300000),
(4, 2, 1, 4500000, 15, '4.jpg', 4000000),
(5, 1, 2, 3400000, 10, '5.jpg', 0),
(6, 2, 2, 1200000, 10, '6.jpg', 0),
(7, 1, 1, 1300000, 10, '7.jpg', 1000000),
(8, 2, 2, 4300000, 14, '8.jpg', 0),
(9, 1, 3, 2300000, 14, '9.jpg', 0),
(10, 2, 1, 1470000, 10, '10.jpg', 0),
(11, 1, 3, 4300000, 10, '11.jpg', 0),
(12, 2, 4, 1600000, 12, '12.jpg', 1300000),
(13, 1, 2, 4300000, 14, '13.jpg', 4000000),
(14, 2, 2, 2340000, 10, '14.jpg', 0),
(15, 1, 3, 2560000, 14, '15.jpg', 0),
(16, 2, 3, 1340000, 12, '16.jpg', 0),
(17, 3, 1, 3450000, 14, '17.jpg', 3040000),
(18, 3, 1, 4500000, 14, '18.jpg', 0),
(19, 3, 5, 3460000, 10, '19.jpg', 3060000),
(20, 3, 1, 1780000, 10, '20.jpg', 0),
(21, 3, 1, 4320000, 10, '21.jpg', 4300000),
(22, 3, 1, 1670000, 14, '22.jpg', 1600000),
(23, 3, 1, 5400000, 15, '23.jpg', 5000000),
(24, 3, 3, 4380000, 10, '24.jpg', 0),
(28, 2, 2, 4890000, 5, 'noi4.jpg', 4690000),
(29, 1, 2, 4890000, 2, 'noi4.jpg', 4690000),
(29, 1, 3, 4890000, 5, 'noi4.jpg', 4690000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `gioitinh` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `xuatxu` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `gioitinh`, `xuatxu`, `tinhtrang`, `thanhtien`) VALUES
(1, 15, 1, 'Nữ', 'Mỹ', 0, 3500000),
(1, 22, 1, 'Unisex', 'Pháp', 0, 2300000),
(2, 10, 2, 'Nam', 'Pháp', 0, 4500000),
(2, 24, 2, 'Unisex', 'Mỹ', 0, 1600000),
(3, 23, 1, '', '0', 0, 5400000),
(4, 23, 1, '', '0', 0, 5400000),
(5, 23, 1, '', '0', 0, 5400000),
(6, 23, 1, '', '0', 0, 5400000),
(9, 24, 1, '', '', 0, 500000),
(10, 23, 1, '', '0', 0, 5400000),
(12, 23, 1, '', '0', 0, 5400000),
(13, 23, 1, '', '0', 0, 5400000),
(14, 23, 1, '', '0', 0, 5400000),
(15, 23, 1, '', '0', 0, 5400000),
(16, 23, 1, '', '0', 0, 5400000),
(17, 23, 1, '', '0', 0, 5400000),
(18, 23, 1, '', '0', 0, 5400000),
(19, 23, 1, '', '0', 0, 5400000),
(20, 23, 1, '', '0', 0, 5400000),
(21, 23, 1, '', '0', 0, 5400000),
(22, 23, 1, '', '0', 0, 5400000),
(23, 23, 1, '', '0', 0, 5400000),
(24, 23, 1, '', '0', 0, 5400000),
(25, 23, 1, '', '0', 0, 5400000),
(26, 23, 1, '', '0', 0, 5400000),
(27, 23, 2, '', '0', 0, 10800000),
(28, 23, 2, '', '0', 0, 10800000),
(29, 23, 2, '', '0', 0, 10800000),
(30, 23, 2, '', '0', 0, 10800000),
(31, 23, 2, '', '0', 0, 10800000),
(32, 23, 2, '', '0', 0, 10800000),
(33, 23, 1, '', '0', 0, 5400000),
(34, 23, 3, '', '0', 0, 16200000),
(34, 24, 1, '', '0', 0, 4380000),
(35, 23, 1, '', '0', 0, 5400000),
(36, 23, 3, '', '0', 0, 16200000),
(36, 24, 1, '', '0', 0, 4380000),
(37, 23, 3, '', '0', 0, 16200000),
(37, 24, 1, '', '0', 0, 4380000),
(38, 23, 3, '', '0', 0, 16200000),
(38, 24, 1, '', '0', 0, 4380000),
(39, 23, 3, '', '0', 0, 16200000),
(39, 24, 1, '', '0', 0, 4380000),
(41, 23, 3, '', '0', 0, 16200000),
(41, 24, 1, '', '0', 0, 4380000),
(42, 23, 3, '', '0', 0, 16200000),
(42, 24, 1, '', '0', 0, 4380000),
(43, 23, 3, '', '0', 0, 16200000),
(43, 24, 1, '', '0', 0, 4380000),
(44, 23, 1, '', '0', 0, 5400000),
(45, 23, 1, '', '0', 0, 5400000),
(46, 23, 1, '', '0', 0, 5400000),
(47, 23, 1, '', '0', 0, 5400000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `idgioitinh` int(11) NOT NULL,
  `gioitinh` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`idgioitinh`, `gioitinh`) VALUES
(1, 'Nữ'),
(2, 'Nam'),
(3, 'Unisex');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `maloai` int(11) NOT NULL,
  `xuatxu` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namlap` date NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `mota` varchar(2000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `xuatxu`, `namlap`, `soluotxem`, `mota`) VALUES
(1, 'Nước Hoa Nữ Chanel Coco Mademoiselle Limited EDP 100ml', 1, 'Pháp', '2024-03-01', 950, '- Nước Hoa Chanel Coco Mademoiselle EDP 100ML - Gợi cảm , Quyến rũ , Sang trọng\r\n- Nước Hoa Chanel Coco Mademoiselle là một phiên bản bổ sung cho nét tính cách đầy tương phản của Gabrielle Chanel. Đó là biểu hiện cho nét nữ tính, một hương thơm sinh động, tươi mát và phức cảm dành cho những phụ nữ thanh lịch và quý phái.\r\n- Mùi hương thơm phương Đông hiện đại này được chứa trong chai nước hoa cổ điển nhưng không kém phần sang trọng. Với những nốt hương cơ bản là hoa hồng và hoa lài, nó tựa 1 bản nhạc nhẹ nhàng lướt qua như những cánh hoa rơi.\r\n\r\n'),
(2, 'Nước Hoa Nam Dior Sauvage Elixir EDP 100ml', 2, 'Pháp', '2023-09-14', 335, '- Hương Đầu: Quế, Bạch Đậu Khấu, Nhục Đậu Khấu và Quả Bưởi;\r\n- Hương Giữa: Hoa Oải Hương;\r\n- Hương Cuối: Gỗ Đàn Hương, Cam Thảo, Hổ Phách, Cỏ Vetiver Haiti và Cây Hoắc Hương.\r\n- Năm 2021, ngoài những sự kiện \"nóng hổi\" của thế giới, lĩnh vực mùi hương lại được một phen mừng rỡ vì phiên bản flanker mới nhất trong bộ sưu tầm đình đám chưa bao chưa bao giờ hết hot đến từ nhà Dior - Dior Sauvage Elixir. Điều thú vị là Francois Demachy vẫn đảm nhiệm vị trí chế tác chính cho siêu phẩm mới này.\r\n'),
(3, 'Nước Hoa Nữ Yves Saint Laurent YSL Black Opium Eau De Parfum', 1, 'Pháp', '2014-12-09', 783, '- Hương đầu: Quả lê, Tiêu hồng, Hoa cam.\r\n- Hương giữa: Cà phê, Hoa nhài, Hạnh nhân, Cam thảo.\r\n- Hương cuối: Vanilla, Hoắc hương, Gỗ tuyết tùng, Cashmeran.\r\n- Black Opium có thể nói là một mùi hương thành công của Yves Saint Laurent (YSL), là thành quả từ sự hợp tác giữa nhà mốt Pháp với các chuyên gia mùi hương của Firmenich, là Honorine Blanc, Nathalie Lorson, Olivier Cresp và Marie Salamagne. Cái tên Black Opium, “thuốc phiện đen”, dường như làm ta gợi nhớ về dòng hương Opium đình đám của YSL những năm 70s của thế kỷ trước, một chút thôi, bởi việc làm nên thành công cho một dòng hương ắt hẳn phải từ chính hương thơm của bản thể. '),
(4, 'Nước Hoa Nam Chanel Bleu De Chanel EDP, 100ml', 2, 'Pháp', '2020-11-20', 479, '- Nước Hoa Chanel Nam Bleu De Chanel EDT - Nam Tính, Lịch Lãm, Bí Ẩn\r\n- Nước hoa Chanel Bleu được ra mắt vào năm 2010 dưới bàn tay tài hoa của nhà điều chế Jacques Polge đã sáng tạo mùi thơm danh tiếng nhất của dòng nước hoa Chanel nam.\r\n- Chanel Bleu khởi đầu với hương thơm đầy đam mê của cam Bergamot và bưởi, hòa quyện cùng với hương tươi mát của lá bạc hà, mang đến sự mát lạnh đầy sảng khoái. Khi lớp hương đầu phai dần, nước hoa sẽ càng thêm cuốn hút hơn với mùi hương gợi cảm, ấm áp của hạt đấu khấu và gừng.'),
(5, 'Nước Hoa Nữ Gucci Guilty Black Pour Femme EDT 75ml', 1, 'Ý', '2013-07-10', 489, '- Nước hoa Gucci Guilty Black Pour Femme thuộc nhóm hương hoa cỏ phương Đông đậm chất tinh tế, thiết kế sắc đỏ rực lửa kết hợp với tông đen bí ẩn, sản phẩm tượng trưng cho sự quyến rũ nóng bỏng của những cô nàng gợi cảm.\r\n- Thương hiệu Gucci được thành lập năm 1921 tại Florence – Ý. Luôn dẫn đầu các xu hướng thời trang, Gucci mang đến những trang phục hiện đại, túi xách sang trọng, cùng những đôi giày gót nhọn cá tính. Cùng với đó chai nước hoa Gucci đầu tiên ra đời năm 1974 – Gucci No.1 For Women đã ghi dấu mốc lịch sử của thương hiệu.'),
(6, 'Nước Hoa Nam Gucci Guilty Pour Homme EDP 90ml', 2, 'Ý', '2020-05-28', 218, '- Nước Hoa Nam Gucci Guilty Pour Homme EDP 90ml\r\n- Phiên bản mới của dòng nước hoa Gucci Guilty được cải tiến nhằm mang đế phiên bản mãnh liệt dựa trên hương thơm nam tính của Gucci Guilty Pour Homme. Gucci Guilty Pour Homme Eau de Parfum tái hiện của mùi hương ban đầu với sự kết hợp của ớt cay và hoa hồng tươi nhẹ nhàng.\r\n- Hương đầu: hoa hồng, ớt, giấm, muối\r\n- Hương giữa: hoa cam tuyệt đối, hoa cam, hoa oải hương Pháp\r\n- Hương cuối: tuyết tùng, hoắc hương'),
(7, 'Nước Hoa Nữ Parfums De Marly Delina EDP 30ml', 1, 'Pháp', '2017-06-21', 181, '- Hương đầu: Quả vải, Đại hoàng, Cam Bergamot, Nhục đậu khấu.\r\n- Hương giữa: Hoa hồng Thổ Nhĩ Kỳ, Hoa mẫu đơn, Xạ hương, Vanilla.\r\n- Hương cuối: Cashmeran, Gỗ tuyết tùng, Nhang, Cỏ hương bài Haiti.\r\n- Có thể bạn đã nghe đâu đó ngoài kia những lời hoa mỹ dành để tán dương Parfums de Marly Delina. Những mỹ từ đó chính là bằng chứng xác đáng nhất cho thành công của mùi hương này, một hương thơm khai thác triệt để những khía cạnh nữ tính tuyệt đối của nốt hương Hoa Hồng.'),
(8, 'Nước Hoa Nam Bvlgari Man In Black EDP 150ml', 2, 'Ý', '2014-04-16', 320, '- Nước hoa nam Man in Black EDP ra mắt năm 2014 của thương hiệu Bvlgari. Đây là một mùi hương táo bạo và hấp dẫn, được lấy cảm hứng từ câu truyện thần thoại về sự ra đời của thần núi lửa Vulcan, và được tinh chế để phù hợp với những người đàn ông hiện đại. \r\n- Bvlgari Man in Black EDP là một cách thức táo bạo nhất mà chuyên gia nước hoa Alberto Morillas đã từng làm, đó là sự nam tính, trầm tĩnh, như thể định nghĩa nó là một mùi hương hoàn toàn danh cho \"phái mạnh\" vậy.'),
(9, 'Nước Hoa Nữ Carolina Herrera Good Girl Gold Fantasy EDP 80ml', 1, 'Mỹ', '2022-07-12', 225, '- Hương đầu: Cà phê, Hạnh nhân.\r\n- Hương giữa: Hoa nhài, Hoa huệ.\r\n- Hương cuối: Cacao, Đậu Tonka.\r\n- Carolina Herrera Good Girl Gold Fantasy là một phiên bản đặc biệt của dòng “chiếc guốc” Good Girl đến từ thương hiệu Mỹ Carolina Herrera. Good Girl Gold Fantasy sở hữu ngoại hình với màu vàng lấp lánh, nổi bật lên sự sang trọng, nổi bật đặc trưng, vừa xứng đáng với danh xưng đặc biệt của phiên bản này.'),
(10, 'Nước Hoa Nam Azzaro The Most Wanted Intense EDP For Men 100m', 2, 'Pháp', '2021-09-15', 776, 'Nước hoa Azzaro là thương hiệu thời trang hàng đầu thế giới được sáng lập bởi nhà thiết kế thời trang người Pháp Loris Azzaro. Azzaro được biết đến về trang phục nữ trong ngành thời trang, nhưng về nước hoa thì các hương thơm cho nam giới lại nổi bật hơn cả. Đối với Loris Azzaro cuộc sống là một bữa tiệc, một mùa hè bất tận. Nước hoa Azzaro phản ánh cách tiếp cận cuộc sống này. Mỗi chai nước hoa của Azzaro đều là sự cô đọng của mặt trời, rạng rỡ, tự do, tươi mát, hài hước, sang trọng và vui vẻ.'),
(11, 'Nước Hoa Nữ Coach Floral Eau De Parfum 90ml', 1, 'Mỹ', '2018-08-21', 1008, '- Nước hoa Coach Floral Blush 90ml của thương hiệu Coach là dòng nước hoa dành cho những cô gái xinh đẹp. Hương thơm mở ra cho nàng một không gian đầy tự do để nàng có thể tận hương sự lạc quan của cuộc sống. Coach Floral Blush 90ml với nhóm hương hoa cỏ – gỗ – xạ hương tạo nên hương thơm thanh tao, tươi mát. Mang đến cho nàng sự tự tin, nữ tính với một bầu không khí lãng mạn, lại tự do chan hòa với thiên nhiên.\r\n- Nước hoa Coach Floral Blush 90ml được ra mắt trình làng thế giới nước hoa vào năm 2019. '),
(12, 'Nước Hoa Nam Montblanc Emblem Man EDT 100ml', 2, 'Đức', '2014-09-17', 295, '- Nước hoa Montblanc Emblem Eau De Toilette 100ml được biết đến là dòng nước hoa nam thể hiện sự đẳng cấp của Montblanc. Sản phẩm mang một nguồn năng lượng mạnh mẽ cùng sự quyến rũ vô cùng tự nhiên của nam giới. Hương thơm tinh tế thể hiện sự sang trọng, lịch lãm của các đấng mày râu.\r\n- Dòng nước hoa mang những ý nghĩa biểu tượng của Montblanc được xướng tên bởi nước hoa Montblanc Emblem 100ml.'),
(13, 'Nước Hoa Nữ Versace Eros Pour Femme EDP 100ml', 1, 'Ý', '2014-09-09', 987, '- Hương đầu: Chanh vàng Sicili, Cam Bergamot, Quả lựu\r\n- Hương giữa: Hoa chanh vàng, Hoa nhài Sambac, Hoa nhài, Hoa mẫu đơn\r\n- Hương cuối: Gỗ đàn hương, Hương Ambroxan, Xạ hương, Hương gỗ\r\n- Eros là vị thần của ham muốn tình dục, của tình yêu, và cả cảm xúc. Và Versace Eros Pour Femme Eau de Parfum được ra đời như là món quà ban tặng cho phụ nữ, thứ hương trần trụi, gợi cảm đầy hoang sơ.\r\n- Versace Eros Pour Femme khởi đầu với sự kết hợp đầy năng lượng của Chanh, Cam Bergamot và Lựu. Dần dà, chúng lại tránh đi, nhường chỗ cho hương Hoa toả nét nồng nàn, nữ tính đầy lôi cuốn.'),
(14, 'Nước Hoa Nam Versace Pour Homme Oud Noir 100ml', 2, 'Ý', '2013-03-08', 962, '- Hương chính: Da thuộc, Gỗ trầm hương, Hương gỗ, Gia vị\r\n- Mang tới cảm giác huyền bí, nổi bật tựa như ánh trăng vàng chói rọi xuống nơi tối tăm, Versace Pour Homme Oud Noir sử dụng những nốt hương đặc trưng đến từ phương Đông nhằm phô trương những nét cá tính đầy táo bạo, mạnh mẽ của những chàng trai ưa thích các buổi tiệc về đêm.'),
(15, 'Nước Hoa Nữ Calvin Klein CK Beauty For Women EDP 100ml', 1, 'Mỹ', '2013-09-11', 810, '- Hương đầu: Hạt vông vang.\r\n- Hương giữa: Hoa nhài.\r\n- Hương cuối: Gỗ tuyết tùng Virginia.\r\n- Nước hoa đương đại của Calvin Klein thường được đánh giá là tân thời, đơn giản, phù hợp với nếp sống đô thị với mùi hương nhẹ nhàng, thoải mái. Calvin Klein Beauty EDP for Her là một ví dụ thực sự cụ thể cho phong cách này của nhà mốt Mỹ, khi đem tới những rung động thanh thoát của người phụ nữ hiện đại.\r\n- Calvin Klein Beauty (CK Beauty) có một mùi hương đơn giản, khiến việc tìm từ ngữ mô tả cho hương thơm ấy để bạn cảm nhận được thông qua những dòng chữ cũng không mấy khó khăn.'),
(16, 'Nước Hoa Nam Calvin Klein CK Defy Eau De Parfum 100ml', 2, 'Mỹ', '2022-02-16', 696, '- Hương đầu: Cam quýt, Tiêu đen\r\n- Hương giữa: Da lộn, Da thuộc\r\n- Hương cuối: Cỏ hương bài\r\n- Nếu Calvin Klein Defy mà bạn quen có vẻ đẹp của một chàng trai trẻ tuổi tràn trề nhựa sống, thì Defy Eau de Parfum cũng chính là chàng trai đó sau nhiều năm, trưởng thành hơn, sắc sảo hơn, sâu lắng hơn.\r\n- Calvin Klein Eau de Parfum vẫn cố giữ cho mình một vẻ ngoài thân thiện, dễ gần với mở đầu từ Cam quýt thanh mọng, điểm một chút Tiêu đen nồng cay, khiến cho ấn tượng ban đầu trở nên thú vị hơn bao giờ hết.'),
(17, 'Nước Hoa Unisex Montale Roses Musk EDP 100ml', 3, 'Pháp', '2016-12-14', 702, '- Hương chính: Hoa hồng, Xạ hương, Hoa nhài\r\n- Có ai mà không yêu Hoa hồng, nếu không vì sắc thì cũng là vì hương? Nếu đã trót lòng yêu lấy hương thơm đa sắc đa màu này thì đừng bỏ qua Montale Roses Musk, một mùi hương mà ngay cái tên đã nói lên tất cả.\r\n- Roses Musk là một thứ hương vừa dễ thương, lại vừa dễ chịu. Nét dễ thương ấy thoạt nhiên đến từ Hoa hồng, ngọt ngào và đầy nữ tính. Nhưng đừng vội nghĩ đây là một mùi hương \"dễ chơi\", bởi dần dà Hoa hồng sẽ càng trở nên đậm màu hơn với đôi nét chững chạc. Ngỡ như đóa hồng này chỉ dành cho các cô nàng từng trải và hiểu chuyện mà thôi.'),
(18, 'Nước Hoa Unisex Montale Aoud Night EDP 100ml', 3, 'Pháp', '2014-05-08', 789, 'Montale là nhà nước hoa niche đến từ Pháp được lập ra bởi Pierre Montale năm 2003. Từ những cảm hứng về mùi hương trong loạt chuyến đi chu du nơi Trung Đông nắng gió, Pierre Montale đã ấn tượng sâu sắc với những thứ nguyên liệu thơm ông thu nhặt được và trải nghiệm tại nơi đây. Có thể nói Montale là một trong số ít các nhà nước hoa phương Tây đầu tiên mang Trầm hương vào trong thế giới nước hoa, trước khi nó trở nên phổ biến và dần thành trào lưu vào những năm 2010. '),
(19, 'Nước Hoa Unisex Attar Collection Musk Kashmir EDP 100ml', 3, 'Ả Rập', '2016-09-14', 567, 'Musk Kashmir của Attar Collection là một mùi hương phù hợp với những ai thích xạ hương. Xạ hương của Musk Kashmir sẽ không theo hướng những chai làm xạ thông thường mà bạn dễ dàng bắt gặp như kiểu những chai tới từ Narciso Rodriguez với trạng thái xạ nồng nàn, quyến rũ mời gọi. Ở đây chúng ta sẽ có một mùi xạ hương cực kì sạch được làm cùng với đàn hương kem kem mịn mịn, hơi cay nhẹ của tiêu tuy nhiên không hề rõ rệt mà chỉ như một nét chấm phá nhẹ. Nó tạo cho ta một hiệu ứng mùi hương sạch sẽ, trong veo, mềm mại tựa da thịt.'),
(20, 'Nước Hoa Parfums De Marly Layton EDP 125ml', 3, 'Pháp', '2016-08-17', 598, '- Hương đầu: Cam bergamot, Oải hương, Táo, Quýt\r\n- Hương giữa: Hoa tím, Hoa nhài, Hoa phong lữ\r\n- Hương cuối: Gỗ guaiac, Hoắc hương, Đàn hương, Vanilla, Tiêu, Bạch đậu khấu\r\n- Đã từng có những câu nói truyền tai nhau, đã đến với Parfums De Marly, thiếu sót nhất là không một lần thử Layton. Và hiển nhiên bạn sẽ yêu Layton ngay tắp lự nếu vẻ đẹp không ranh giới là những gì bạn đang tìm kiếm.\r\n- Mở đầu bằng phong thái quen thuộc, dễ chịu của Cam chanh thanh ngọt, Layton còn ý nhị cho thêm chút nồng đượm của Oải hương.'),
(21, 'Nước Hoa Unisex Escentric Molecules Molecule 01 EDT 100ml', 3, 'Pháp', '2016-02-02', 456, 'Mùi khi Molecule 01 bốc lên trên da thì sẽ tùy da người mà tỏa ra các mùi khác nhau, nhưng đa số những trường hợp tôi gặp là nó tỏa ra 1 mùi gỗ đàn hương xen lẫn tuyết tùng nhẹ nhàng, trong veo, hơi watery một chút. Mùi đàn hương của chai này khá vừa phải chứ không dày và hơi khô, tỏa mạnh mẽ như chai nước hoa quốc dân Le Labo Santal 33.\r\nThêm 1 điều nữa thì theo như tôi thấy thì những người khi xịt ra càng cố ngửi thì sẽ càng không cảm thấy gì, nhưng người khác ngửi thì sẽ thấy rất rõ.'),
(22, 'Nước Hoa Unisex Hermès Un Jardin Sur Le Nil 50ml', 3, 'Pháp', '2015-08-12', 379, '- Hương đầu: Quả bưởi, Xoài xanh, Cà chua, Cà rốt.\r\n- Hương giữa: Hoa sen, Cỏ hương bồ, Quả cam, Hoa lục bình, Hoa mẫu đơn.\r\n- Hương cuối: Xạ hương, Diên vĩ, Nhang, Nhựa Labdanum, Quế.\r\n- Hermes, một nhà mốt trứ danh với các sản phẩm bằng da đắt đỏ, đã tạo ấn tượng sâu sắc tới giới chơi hương bằng những mùi thơm mượt mà, thanh lịch nhưng đầy đủ thái độ với bàn tay tài năng của Jean Claude Ellena. Với Hermes Un Jardin Sur Le Nil, chúng ta hãy cùng tận hưởng hương thơm và không khí của một khu vườn bên sông Nile, một khu vườn cận nhiệt đới ở Bắc Phi.'),
(23, 'Nước Hoa Unisex Kilian Sacred Wood Limited 15th Years EDP 50', 3, 'Pháp', '2017-06-15', 359, '- Kilian hãng nước hoa Ý\r\n- Kilian là một nhà nước hoa niche, được thành lập và quản lí bởi Kilian Hennessy từ 2007, người thừa kế và là cháu nội của Moët Hennessy.\r\n- By Kilian đưa ra các phiên bản giới hạn của một số loại nước hoa trong bộ sưu tập, và các sản phẩm Kilian đều được đóng gói trong bao bì cao cấp, sang trọng đặc biệt biết đến là một nhà chưng cất rượu danh tiếng đến từ Cognac (Pháp), bằng những chai rượu cognac trứ danh của vùng này mang mác Hennessy.'),
(24, 'Nước Hoa Unisex Tom Ford Black Orchid Parfum Cuốn Hút 50ml', 3, 'Mỹ', '2020-06-17', 589, '- Nước Hoa Unisex Tom Ford Black Orchid Parfum là phiên bản nâng cấp của chai nước hoa cùng dòng. Nếu Black Orchid Eau De Parfum năm 2006 đã in đậm trong tâm trí những người yêu thích nước hoa cao cấp bởi hương thơm cổ điển, sang trọng đến từ các thành phần hàng đầu là hoa nhài Pháp, nấm đen, ylang-ylang, nho đen phong lan, gia vị, hoắc hương, gỗ đàn hương, sô cô la đen, trầm hương, hổ phách… Thì với phiên bản năm 2020 này, thương hiệu Tom Ford đã cho ra đời một Black Orchid đầy mạnh mẽ và hiện đại hơn với version Parfum nồng nàn. Cùng KYO tìm hiểu xem có gì đặc biệt ở loại nước hoa này nhé!'),
(29, 'Nước Hoa nữ Quyến Rũ', 1, 'Mỹ', '2024-03-01', 23, 'Thu Hút, quyến rũ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 3, '2023-12-06', 4300000),
(2, 3, '2023-10-15', 5400000),
(3, 11, '2024-02-25', 5400000),
(4, 11, '2024-02-25', 5400000),
(5, 11, '2024-02-25', 5400000),
(6, 11, '2024-02-25', 5400000),
(7, 11, '2024-02-25', 0),
(8, 11, '2024-02-25', 0),
(9, 11, '2024-02-25', 500000),
(10, 11, '2024-02-25', 5400000),
(11, 11, '2024-02-25', 0),
(12, 12, '2024-02-25', 5400000),
(13, 12, '2024-02-25', 5400000),
(14, 17, '2024-02-26', 5400000),
(15, 18, '2024-02-26', 5400000),
(16, 18, '2024-02-26', 5400000),
(17, 18, '2024-02-26', 5400000),
(18, 18, '2024-02-26', 5400000),
(19, 18, '2024-02-26', 5400000),
(20, 18, '2024-02-26', 5400000),
(21, 18, '2024-02-26', 5400000),
(22, 18, '2024-02-26', 5400000),
(23, 18, '2024-02-26', 5400000),
(24, 18, '2024-02-26', 5400000),
(25, 18, '2024-02-26', 5400000),
(26, 18, '2024-02-26', 5400000),
(27, 18, '2024-02-26', 10800000),
(28, 18, '2024-02-26', 10800000),
(29, 18, '2024-02-26', 10800000),
(30, 18, '2024-02-26', 10800000),
(31, 18, '2024-02-26', 10800000),
(32, 18, '2024-02-26', 10800000),
(33, 18, '2024-02-26', 5400000),
(34, 18, '2024-02-26', 20580000),
(35, 18, '2024-02-28', 5400000),
(36, 18, '2024-03-03', 20580000),
(37, 18, '2024-03-03', 20580000),
(38, 18, '2024-03-03', 20580000),
(39, 18, '2024-03-03', 20580000),
(40, 18, '2024-03-03', 0),
(41, 18, '2024-03-03', 20580000),
(42, 18, '2024-03-03', 20580000),
(43, 18, '2024-03-03', 20580000),
(44, 19, '2024-03-21', 5400000),
(45, 19, '2024-03-23', 5400000),
(46, 19, '2024-03-24', 5400000),
(47, 19, '2024-03-24', 5400000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matkhau` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `diachi` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `sodienthoai` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'Nguyễn Thị Ngọc Của', 'ngoccua', 'nguyenthingoccua2004', 'nguyenthingoccua27@gmail.com', 'HCM', '0568754768'),
(6, 'Nguyễn Thị N', 'nguyenthin', '9ced4f4c75465b0cc9de68039ae7083b', 'nguyenthin@gmail.com', 'Nha Trang', '076488654'),
(7, 'Nguyễn Văn A', 'nguyenvana', 'e737adc31c02abb6877c3e692dae66f2', 'nguyenvana2000@gmai.com', 'Đà Lạt', '0797576477'),
(18, 'Nguyễn Thị C', 'nguyenthic', 'f3b4453747843a85543392eda9d97796', 'nguyenthingoccua2004@gmail.com', 'HCM', '0797576477'),
(19, 'thanh tường', 'thanhtuong', '4f805f4981e457c7137dd5f107fc4a54', 'kimthanhtuong2004@gmail.com', 'Sóc Trăng', '0986764657');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Nước Hoa Nữ', 1),
(2, 'Nước Hoa Nam', 2),
(3, 'Nước Hoa Unisex', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `IdMenuCon` int(11) NOT NULL,
  `TenMenu` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `idMenucha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`IdMenuCon`, `TenMenu`, `idMenucha`) VALUES
(1, 'Giới Thiệu', 0),
(2, 'Nước Hoa Nữ', 0),
(3, 'Nước Hoa Nam', 0),
(4, 'Nước Hoa Unisex', 0),
(5, 'Thương Hiệu', 0),
(6, 'Liên Hệ', 0),
(7, 'GUCCI', 1),
(8, 'CALVIN KLEIN', 1),
(9, 'DIOR', 1),
(10, 'CELINE', 1),
(11, 'YSL', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dia` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `matkhau` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(1, 'Nguyễn Thị Ngọc', 'HCM', 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatxu`
--

CREATE TABLE `xuatxu` (
  `idxuatxu` int(11) NOT NULL,
  `xuatxu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `xuatxu`
--

INSERT INTO `xuatxu` (`idxuatxu`, `xuatxu`) VALUES
(1, 'Pháp'),
(2, 'Ý'),
(3, 'Mỹ'),
(4, 'Đức'),
(5, 'Ả Rập');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`,`idgioitinh`,`idxuatxu`) USING BTREE;

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`idgioitinh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`IdMenuCon`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  ADD PRIMARY KEY (`idxuatxu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `idgioitinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `IdMenuCon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `xuatxu`
--
ALTER TABLE `xuatxu`
  MODIFY `idxuatxu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
