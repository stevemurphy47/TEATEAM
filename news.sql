-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2021 lúc 06:13 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `news`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` char(100) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `id_danhmuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `name`, `image`, `description`, `content`, `id_danhmuc`) VALUES
(34, 'BẬT MÍ CÁCH THƯỞNG THỨC SỮA CHUA NGON ĐÚNG ĐIỆU', 'hinh1.jpg', ' Bộ 3 sản phẩm Sữa Chua chào hè từ ToCoToCo được fan ưng lắm luôn, vừa thanh mát giải nhiệt ngày hè lại vừa bổ sung thêm nhiều vitamin C cực có lợi cho sức khoẻ.', 'Cơn gió tháng 3 Gong Cha ra mắt Fruit Tea Series🍎🍐🍊🍍 👉Sau những thức uống thơm béo thì cơn gió tháng 3 mang đến loạt thức uống chua ngọt, thanh mát để làm mới lại khẩu vị của Fan đây! Trọn bộ thức uống là sự kết hợp giữa mứt trái cây nhiệt đới và các loại trà quen thuộc mang đến 3 sản phẩm mới toanh với giá ưu đãi đây: 😍Trà Xanh Trái Cây: 39.000đ (size M), 47,000đ (size L) 😍Trà Alisan Trái Cây: 41.000đ (size M), 49.000đ (size L)... 😍QQ Trà Xanh Trái Cây: 43.000đ (size M), 52.000đ (size L) 😍Trà Trái Cây Đá Xay: 58.000đ (size M) Noted ngay lịch và thưởng thức vào ngày 03/03/2021 nha!🥳 💛 Lưu ý: - Giá ưu đãi áp dụng từ 03/03 - 10/03/2021 - Chương trình không áp dụng khi mua qua ứng dụng giao hàng - Chương trình áp dụng trực tiếp khi mua tại cửa hàng hoặc đặt hàng qua hotline của cửa hàn', 4),
(35, 'KHUYẾN MÃI TRÀ SỮA', 'hinh2.jpg', 'Đây là chương trình khuyến mãi trà sữa dành cho tập khách hàng thân thiết, đã sử dụng và thích sản phẩm của bạn.', 'Chương trình khuyến mãi trà sữa mua 1 tặng 1 thường chỉ được dùng trong những dịp đặc biệt để phủ sóng thương hiệu và thu hút khách hàng mới. Chương trình này đặc biệt tốn chi phí hơn nên bạn cũng cần cân nhắc về thời điểm diễn ra, kết quả thu được và tập khách hàng mục tiêu. Khách hàng đi uống trà sữa thường sẽ đi theo nhóm hoặc mua mang về, dựa vào thói quen này để bạn xem xét nên thực hiện chương trình khuyến mãi này lúc nào để tăng hiệu quả nhất.', 3),
(42, 'Top những tiệm trà sữa ngon phát nghiện tại Đà Lạt', 'hinh3.jpg', 'Trà sữa Đà Lạt địa chỉ? Tiệm trà sữa ngon ở Đà Lạt? Những thương hiệu trà sửa nổi tiếng xuất hiện ở Đà Lạt?… Cùng tìm hiểu với chúng tôi nhé.', 'Địa chỉ:  244 Bùi Thị Xuân, P 2, Thành Phố Đà Lạt, Lâm Đồng\r\n\r\nKhông thể không có trong danh sách này chính là quán trà sữa đông khách hàng đầu Đà Lạt 8678. Không những ngon mà còn chất lượng bởi vậy đây là tiệm được rất nhiều khách hàng yêu thích. Thương hiệu trà sữa vẫn luôn tạo ra một cơn sốt tại thành phố xinh đẹp này.\r\nTọa lạc:  73 Nguyễn Văn Trỗi, 2, Thành phố Đà Lạt, Tỉnh Lâm Đồng\r\n\r\nThương hiệu trà sữa  “UNCLE TEA” đã đến Đà Lạt, tạo ra cơn bão cuồng trong giới trẻ. Không chỉ đồ đựng trà sữa cực kì cute mà chất lượng trà sữa nơi đây cũng làm ngây ngất các tín đồ trà sữa.\r\n\r\nMenu của Ucle tea rất đa dạng, chừng 36 món. Gồm có Hồng trà, Lục trà, trà sữa trân châu…Đặc biệt tại Uncle tea có cả trà sữa giảm béo, cho các bạn có nhu cầu giữ dáng, sợ những ly trà sữa có lượng calo cao.     ', 0),
(42, 'Top những tiệm trà sữa ngon phát nghiện tại Đà Lạt', 'hinh3.jpg', 'Trà sữa Đà Lạt địa chỉ? Tiệm trà sữa ngon ở Đà Lạt? Những thương hiệu trà sửa nổi tiếng xuất hiện ở Đà Lạt?… Cùng tìm hiểu với chúng tôi nhé.', 'Địa chỉ:  244 Bùi Thị Xuân, P 2, Thành Phố Đà Lạt, Lâm Đồng\r\n\r\nKhông thể không có trong danh sách này chính là quán trà sữa đông khách hàng đầu Đà Lạt 8678. Không những ngon mà còn chất lượng bởi vậy đây là tiệm được rất nhiều khách hàng yêu thích. Thương hiệu trà sữa vẫn luôn tạo ra một cơn sốt tại thành phố xinh đẹp này.\r\nTọa lạc:  73 Nguyễn Văn Trỗi, 2, Thành phố Đà Lạt, Tỉnh Lâm Đồng\r\n\r\nThương hiệu trà sữa  “UNCLE TEA” đã đến Đà Lạt, tạo ra cơn bão cuồng trong giới trẻ. Không chỉ đồ đựng trà sữa cực kì cute mà chất lượng trà sữa nơi đây cũng làm ngây ngất các tín đồ trà sữa.\r\n\r\nMenu của Ucle tea rất đa dạng, chừng 36 món. Gồm có Hồng trà, Lục trà, trà sữa trân châu…Đặc biệt tại Uncle tea có cả trà sữa giảm béo, cho các bạn có nhu cầu giữ dáng, sợ những ly trà sữa có lượng calo cao.     ', 3),
(43, '#99 STT Trà Sữa Trà Chanh vui thả thính cực mạnh', 'hinh4.jpg', 'Trà sữa là nước uống siêu gây nghiện được các nam thanh nữ tú yêu thích. Một tuần mà không uống trà sữa vài lần chắc là chịu không nổi. ', ' Khi uống trà sữa cùng bạn kèm theo các STT trà sữa thả thính vui, hài hước, dễ thương còn gì bằng. Nhanh tay chọn những status chất về trà sữa chia sẻ trên trang cá nhân nhé.\r\nNhững câu STT trà sữa hay nhất\r\nTrà sữa thức uống pha trộn giữa trà và sữa kết hợp thêm các loại trân châu, thạch tạo cảm giác mát lạnh, sảng khoái. Người bình thường 60% cơ thể người là nước, riêng với tín đồ trà sữa có lẽ 80% trọng lượng cơ thể dùng để chứa trà sữa. Cùng nghe những câu STT trà sữa cực vui và ý nghĩa.', 4),
(44, 'Trà sữa Thái Lan có gì độc đáo mà giới trẻ thích thú đến vậy?', 'hinh5.jpg', 'Trà sữa Thái Lan đã không còn quá xa lạ với giới trẻ Việt Nam, là một điểm sáng về văn hóa ẩm thực đường phố Thái Lan, nhờ vào quá trình chế biến trà cực độc đáo.', ' Trà sữa Thái Lan cũng không ngoại lệ, khi đến Việt Nam được các bạn trẻ săn lùng và trở thành trào lưu. Điều khiến trà sữa Thái trở nên “hot” thứ nhất là nơi nó được sinh ra – Thái Lan, và điều đặc biệt hơn nữa có lẽ là hương vị vừa lạ vừa quen từ trà Thái đưa lại. Quen là hương vị giống các loại trà sữa khác, vị thơm ngon béo ngậy từ sữa đặc và đắng chát của trà.\r\n\r\nLạ ở chỗ trà Thái có mùi thơm thanh dịu không chỉ của lá trà, bột trà mà hòa quyện trong đó cả mùi thơm của các loại hoa và các loại thảo mộc như hồi, quế…có tác dụng vừa giải nhiệt, vừa bổ dưỡng cho sức khỏe. Chính nhờ điểm này mà đối tượng yêu thích được mở rộng không chỉ là các bạn trẻ mà còn có các bậc phụ huynh lựa chọn cho mọi thành viên trong gia đình.', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucbv`
--

CREATE TABLE `danhmucbv` (
  `id_dm` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmucbv`
--

INSERT INTO `danhmucbv` (`id_dm`, `tendanhmuc`) VALUES
(3, 'Tra sua thang 4'),
(4, 'Tra sua thang 5'),
(5, 'Tra sua thang 3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucbv`
--
ALTER TABLE `danhmucbv`
  ADD PRIMARY KEY (`id_dm`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucbv`
--
ALTER TABLE `danhmucbv`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
