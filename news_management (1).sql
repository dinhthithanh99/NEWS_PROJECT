-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 02:26 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12
drop database News_Management;
create database News_Management;
use News_Management;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `UserName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Xã hội', NULL, NULL),
(2, 'Chính trị', NULL, NULL),
(3, 'Pháp luật', NULL, NULL),
(4, 'Thể thao', NULL, NULL),
(5, 'Công nghệ', NULL, NULL),
(6, 'Tâm sự', NULL, NULL),
(7, 'Sức khỏe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_com` date NOT NULL,
  `id_new` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `date_com`, `id_new`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Một trận đấu rất tuyệt vời', '2019-06-05', 1, 1, NULL, NULL),
(2, 'Thông tin rất là hữu ích', '2019-06-05', 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `times_like` int(11) NOT NULL,
  `id_new` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2019_05_08_115704_create_categories_table', 1),
(26, '2019_05_08_115724_create_news_table', 1),
(27, '2019_05_08_115736_create_users_table', 1),
(28, '2019_05_08_115814_create_comments_table', 1),
(29, '2019_05_08_115829_create_likes_table', 1),
(30, '2019_05_14_122118_create__admin_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titles` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_post` varchar(255) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cate` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `titles`, `summary`, `date_post`, `content`, `view`, `img`, `source`, `id_cate`, `created_at`, `updated_at`) VALUES
(1, 'Liverpool thắng ngược Barca ở bán kết Champions League', 'Kết quả 4-0 tại Anfield tối 7/5 giúp Liverpool vào chung kết với chiến thắng chung cuộc 4-3 sau hai lượt trận.', '2019-06-05', 'Liverpool tràn lên từ đầu trận với tinh thần không có gì để mất. Họ làm chao đảo khung thành đối thủ ngay ở phút thứ hai. Mane tìm được khoảng trống bên cánh trái rồi căng ngang cho Shaqiri. Tiền vệ người Thụy Sĩ đưa bóng tới cột hai - nơi Henderson đang có đà băng xuống. Nhưng Jordi Alba kịp rướn người cắt bóng chịu phạt góc. Chỉ trong năm phút, hậu vệ người Tây Ban Nha từ người hùng thành tội đồ với đường chuyền về bị bắt bài. Mane cướp được bóng và chuyền cho Henderson đột phá. Thủ quân của Liverpool sút chìm về góc xa nhưng bị Ter Stegen đẩy ra. Chớp thời cơ, Origi đệm bóng cận thành khiến khán đài Anfield vỡ òa. Đây mới là pha lập công đầu tiên của anh ở Champions League.Bàn thắng sớm cho chủ nhà báo hiệu những pha ăn miếng trả miếng từ hai cầu môn. Phút 14, Barca tấn công với bài quen thuộc bên cánh trái, khi Jordi Alba căng ngang ngược ra cho Lionel Messi dứt điểm. Thủ môn Alisson chơi tập trung để cứu thua. Hai phút sau, Alba tiếp tục có bóng trống trải trong vòng cấm, nhưng đường chuyền cho Messi bị bắt bài. Sau pha bóng này, Messi đã bực tức trách đồng đội.', 1, 'public/user/images/Images/anh1.png', 'tinhaymoingay', 1, NULL, NULL),
(2, 'Thêm 3 người trong đường dây ma tuý lớn nhất An Giang bị bắt', 'Các nghi phạm ngụy trang ma tuý đá và thuốc lắc tại Campuchia thành các gói trà, thực phẩm chức năng cất giấu trên ôtô đưa về Việt Nam.', '2019-06-05', 'Ngày 14/4, mở rộng điều tra đường dây vận chuyển ma tuý từ Campuchia về Việt Nam, Cục Cảnh sát điều tra tội phạm về ma tuý (C04, Bộ Công an) bắt Nguyễn Thanh Hải (41 tuổi), Nguyễn Thanh Phượng (52 tuổi) và Tuyên Khoa (33 tuổi, cùng ngụ TP HCM). Lực lượng chức năng thu giữ thêm 6.850 viên thuốc lắc, một kg ma túy đá cùng nhiều tang vật khác. Các nghi can này là đồng phạm của Du Quốc Cường (29 tuổi, ngụ Khánh Hòa) và Trình Công Nghĩa (41 tuổi, ngụ An Giang) bị bắt hôm qua, cùng ôtô chở 25.000 viên thuốc lắc (8,2 kg) và 18,2 kg ma túy đá tại biên giới An Giang. Ban chuyên án cho biết, Hải, Cường, Khoa đều dương tính với ma túy. Băng nhóm này mang ma tuý từ Campuchia qua biên giới các tỉnh miền Tây rồi đưa về Sài Gòn tiêu thụ. Tất cả được ngụy trang thành các gói trà, thực phẩm chức năng...Vụ án đang được mở rộng điều tra. Hôm 20/3, C04 bắt đường dây mang ma tuý từ Tam Giác Vàng (Myanmar) về Sài Gòn để chuyển đi nước thứ ba, thu giữ 300 kg hàng đá - lượng ma tuý lớn nhất từ trước đến nay bị phát hiện tại TP HCM. Nhóm người Trung Quốc cầm đầu đường dây ma tuý xuyên quốc gia này từng hai lần bị phát hiện trước đó tại Hà Tĩnh và Quảng Trị. Tổng lượng ma tuý đá thu giữ lên đến hơn 1,1 tấn. Đến ngày 27/7, Công an TP HCM bắt giữ ôtô tải chở gần 900 bánh heroin, cũng được mang từ Tam Giác Vàng về. Những kẻ cầm đầu là người Đài Loan. TP HCM được xem là nơi trung chuyển ma tuý của khu vực.', 2, 'public/user/images/Images/thoisu1.jpg', 'tinhaymoingay', 4, NULL, NULL),
(3, 'Hợp chất đắt hơn vàng 30 ngàn lần được tìm thấy từ cây lúa', 'Hợp chất Momilactone A và B do nhà khoa học người Việt phát hiện, phân lập thành công từ trấu và gạo có giá 1.25 triệu USD/1g.', '2019-06-05', 'Ngày 29/1, PGS Trần Đăng Xuân, Trưởng phòng thí nghiệm Sinh lý thực vật và Hóa sinh, Đại học Hiroshima (Nhật Bản) lần đầu tiên công bố trên tạp chí khoa học quốc tế nổi tiếng Molecules của MDPI về việc tìm thấy sự hiện diện của hai hợp chất Momilactone A và B (MA và MB) trong gạo trắng. Hợp chất này trước đó từng được trang điện tử Carbosynth.com, một công ty chuyên về các sản phẩm hóa sinh nổi tiếng của Anh bán với giá 1.25 triệu USD cho 1g. Nghĩa là 1g của hợp chất này đắt gấp 30 ngàn lần giá trị 1g vàng. Hai hợp chất Momilactone A và B được chiết xuất tại phòng thí nghiệm Sinh lý Thực vật và Sinh hóa, Đại học Hiroshima. Sở dĩ hợp chất có giá đắt đỏ như vậy vì rất hiếm phòng thí nghiệm thành công trong việc tách chiết. Cũng vì giá của nó quá đắt nên hiếm có phòng thí nghiệm nào đủ điều kiện tài chính để mua MA và MB, do đó các nghiên cứu sâu về hợp chất này cũng vắng bóng trên thế giới. Chính vì vậy sau khi tìm thấy hai hợp chất quý này trong gạo và trấu, ông và cộng sự tại phòng thí nghiệm Sinh lý Thực vật và Sinh hóa của Đại học Hiroshima đã ngày đêm chưng cất và tinh lọc. Từ 20 kg vỏ trấu, sau gần 3 tháng, khoảng 300 mg MA và 200 mg MB (chiếm khoảng 1/100 -150 nghìn trọng lượng vỏ trấu) được tinh chất.', 3, 'public/user/images/Images/congnghe1.jpg', 'tinhaymoingay', 1, NULL, NULL),
(4, 'Combo hoá nữ thần của Tiểu Vy chính là áo dài trắng và tóc dài xoã ngang vai', 'Cứ mỗi lần diện áo dài trắng, mái tóc xoã dài suông mượt là Tiểu Vy lại khiến mọi người ngẩng ngơ vì quá xinh đẹp.', '2019-06-05', 'Trong rất nhiều nàng Hậu xinh đẹp của Vbiz, có lẽ Tiểu Vy là mỹ nhân duy nhất có duyên nhất với tà áo dài truyền thống của dân tộc. Tiểu Vy lần đầu được chụp ảnh chuyên nghiệp là lúc cô được diện những tà áo dài tuyệt đẹp của chính Hoa hậu Ngọc Hân thiết kế, nhờ cơ duyên đó đã đưa cô đi đến chiếc vương miện danh giá của Hoa hậu Việt Nam 2018. Có lẽ một phần cũng vì nhan sắc nổi bật và phù hợp với tà áo tinh khôi, mỹ nhân sinh năm 2000 luôn toả sáng khi khoác lên mình tà áo dài trắng. Từ thời còn ngồi trên ghế nhà trường đến nay, Tiểu Vy đã có nhiều lần xuất hiện với tà áo dài trắng, và chưa có một lần nào cô diện xấu cả. Có thể nói, mỗi lần Hoa hậu Tiểu Vy diện áo dài trắng và xoã tóc dịu dàng, cô như biến thành nữ thần với vẻ đẹp trong veo như ánh nắng sớm mai. Mới đây, nàng Hoa hậu lại đăng tải những bức ảnh diện áo dài ngây ngất lòng người. Người đẹp trang điểm nhẹ nhàng, mái tóc xoã ngang vai đơn giản nhưng vẫn toát lên nét dẹp đầy thu hút mà hiếm ai có được. Diện áo dài trắng trở lại trường xưa ở TP.HCM, Tiểu Vy rất khôn khéo khi lựa chọn tà áo nữ sinh đầy thanh lịch gây ấn tượng mạnh với các em học sinh và thấy cô. Nàng Hoa hậu được nhiều em nhỏ chào đón, đối vứoi giáo viên và học sinh trường THPT Vạn Hạnh, Hoa hậu Tiểu Vy như là niềm tự hào, là tấm gương sáng và là ánh mặt trời của mọi người.', 4, 'public/user/images/Images/thoitrang1.jpg', 'tinhaymoingay', 1, NULL, NULL),
(5, 'Top 10 thực phẩm giúp bạn tăng cân nhanh bất ngờ', 'Tăng cân cần nhiều yếu tố cùng tham gia như cơ địa, ăn uống, tập luyện, sinh hoạt… Trong đó, việc ăn gì để tăng cân nắm giữ vai trò quan trọng. Thực phẩm nào sẽ giúp bạn có được nhiều chất dinh dưỡng để cải thiện cân nặng hãy cùng tham khảo dưới đây.', '2019-06-05', 'Về cơ bản để tăng cân nặng là việc bạn hấp thu chất dinh dưỡng hiệu quả, tăng số cân nặng song vẫn giữ được dáng vóc cân đối, không bị chảy xệ, mệt mỏi. Tăng cường dinh dưỡng là cách tăng cân nhanh chóng, an toàn và mang lại hiệu quả lâu dài cho người gầy. Luôn đảm bảo đầy đủ 4 nhóm chất thiết yếu mỗi ngày: đạm, béo, bột, vitamin và khoáng chất. Top 10 thực phẩm giúp tăng cân hiệu quả: 1. Sữa và các sản phẩm từ sữa.Sữa đã được sử dụng như một thực phẩm tăng cân hoặc xây dựng cơ bắp trong nhiều thập kỷ. Nó cung cấp sự cân bằng tốt của protein, carbs và chất béo, là một nguồn canxi tốt, cũng như các vitamin và khoáng chất khác. Sữa là một nguồn protein tuyệt vời cung cấp cả protein casein và whey. Hãy thử uống khoảng một hoặc hai ly như một bữa ăn nhẹ, với một bữa ăn, hoặc trước và sau khi tập luyện sẽ thấy hiệu quả rõ ràng. 2. Trứng. Trứng chứa nhiều protein, vitamin A, D, E và cholesterol tốt nên vừa có tác dụng bổ sung dinh dưỡng cho cơ thể lại giúp bạn tăng cân lành mạnh. Bạn nên ăn ít nhất một quả trứng vào bữa sáng, sẽ thấy hiệu quả ngay sau 1 tháng. 3. Thịt đỏ. Leucine là axit amin quan trọng mà cơ thể bạn cần để kích thích tổng hợp protein cơ bắp và thêm mô cơ mới. Thịt đỏ là một trong những nguồn tự nhiên tốt nhất của chế độ ăn xây dựng cơ bắp tốt nhất. Cân nhắc lựa chọn những miếng thịt cung cấp nhiều calo hơn thịt nạc, giúp bạn bổ sung thêm calo và tăng cân. Tuy nhiên, bạn cần sử dụng với lượng hợp lý.', 5, 'public/user/images/Images/suckhoe1.jpg', 'tinhaymoingay', 6, NULL, NULL),
(6, 'Tổng bí thư, Chủ tịch nước sẽ sớm xuất hiện và làm việc', 'Trả lời cử tri về sức khỏe của Tổng bí thư, Chủ tịch nước, ông Nguyễn Thiện Nhân nói: Tôi tin rằng các đồng chí sẽ sớm thấy Tổng bí thư, Chủ tịch nước xuất hiện và làm việc.', '2019-06-05', 'Chiều nay, Bí thư Thành ủy TP.HCM Nguyễn Thiện Nhân cùng tổ ĐBQH số 1 có buổi tiếp xúc với cử tri quận 3 trước kỳ họp QH sẽ khai mạc cuối tháng này. Được mời phát biểu, cử tri Lê Thanh Tùng (phường 7) bày tỏ quan tâm tới tình hình sức khỏe của Tổng bí thư, Chủ tịch nước Nguyễn Phú Trọng. “Bà con đề nghị ĐBQH nói rõ tình hình sức khỏe của Tổng bí thư, Chủ tịch nước. Đây là mong muốn, sự lo lắng của nhân dân đối với lãnh đạo. Không nên để trên mạng nói lung tung, gây hoang mang” - ông Tùng nói. Cử tri Lê Thanh Tuấn cho rằng hiện nay tham nhũng đang phá hoại đất nước, làm suy yếu chế độ. “Thời gian qua, Ủy ban Kiểm tra TƯ đi đến đâu thì phát hiện sai phạm đến đó. Tôi rất buồn, TP.HCM có 4 đồng chí lãnh đạo bị bắt thì có đến 3 đồng chí dính đến Thủ Thiêm. Tham nhũng hiện nay đã quá tràn lan. Tôi ra đường không dám nói là cán bộ vì xấu hổ” - ông chia sẻ. Ông Tuấn cũng cho rằng, tham những đang khiến người dân mất lòng tin mà nếu mất lòng tin là mất tất cả. Do đó, đánh mạnh vào tham những mới đem lại niềm tin của nhân dân, mới giúp phát triển kinh tế đất nước. Khi có thông tin Tổng bí thư, Chủ tịch nước Nguyễn Phú Trọng bị ốm, người dân rất lo lắng công cuộc phòng chống tham những có tiếp tục được không. “Mấy hôm trước, lãnh đạo TƯ có thông tin sức khỏe của Tổng bí thư, Chủ tịch nước đã ổn định khiến chúng tôi rất vui mừng. Niềm tin của nhân dân rất lớn đối với đồng chí trong việc chống tham nhũng, không có vùng cấm” - cử tri Tuấn khẳng định. ', 6, 'public/user/images/Images/chinhtri1.jpg', 'vietnamnet', 6, NULL, NULL),
(7, 'Đối mặt với sự khiếm nhã, đây là 7 câu PHẢN ĐÒN đã đi vào lịch sử của những người nổi tiếng', 'Nhiều bậc danh nhân kỳ tài không chỉ để lại thành tựu về khoa học, nghệ thuật cho nhân loại mà còn có cả những câu \"phản dame\" đầy trí tuệ. Cùng thư giãn một chút với những câu nói thâm thúy, đã đi vào lịch sử của nhiều người nổi tiếng. Trước lời chỉ trích gay gắt, họ đều đáp trả rất nhẹ nhàng và ngắn gọn nhưng đạt hiệu quả cao. ', '2019-06-05', '1. Diễn viên Mỹ Ilka Chase. Chase nổi tiếng với sự nghiệp diễn xuất ở xứ sở cờ hoa, nhưng bà cũng thích đi du lịch và viết tiểu thuyết. Có lần, một cô đào vô danh đã nghi ngờ khả năng viết lách của Chase, tìm đến vị minh tinh và hỏi xách mé: \"Em rất thích những quyển sách của chị. Ai viết cho chị thế?\". Chase đáp: \"Cưng à, chị rất vui vì em đã thích. Ai đã đọc sách cho em thế?\". Này thì cạnh khóe, lời đáp sâu cay của Chase khiến cô diễn viên nọ phải cười trừ. 2. Nhà văn Mỹ Edna Ferber. Ferber là người phụ nữ rất thích mặt đồ com-lê được may đo kĩ càng. Bà mặc nó trước khi nó trở thành một xu hướng trong làng mốt. Dĩ nhiên, kẻ tiên phong luôn vấp phải chỉ trích. Và ông bạn Coward - một nhà viết kịch, soạn nhạc, đạo diễn, diễn viên kiêm ca sĩ người Anh - chính là một \"tảng đá\" cản đường như thế. Coward nói kháy bạn mình: \"Cô nhìn gần giống một người đàn ông\". Ferber trả lại đúng 3 chữ: \"Anh cũng thế\". Quả thật, nếu \"chuẩn man\" 100% thì Coward đã không đá đểu phụ nữ rồi. 3. Thiên tài âm nhạc Mozart. Mozart chính là ví dụ kinh điển cho thấy người thông minh có thể vừa tử tế vừa tàn nhẫn đến mức nào. Hãy nghe một đoạn đối thoại được cho là của Mozart với một fan hâm mộ \"không biết lượng sức\". Fan hâm mộ: \"Ngài Mozart, tôi đang nghĩ về chuyện viết 1 bản giao hưởng. Xin ngài hãy cho vài gợi ý, tôi nên bắt đầu từ đâu?\". Mozart: \"Bản giao hưởng là một cấu trúc âm nhạc rất phức tạp. Hãy bắt đầu với nhạc lý cơ bản\". Fan: \"Nhưng chẳng phải ngài đã viết giao hưởng từ năm 8 tuổi hay sao?\". Mozart: \"Đúng thế, nhưng tôi chẳng đi hỏi ai cả\".', 7, 'public/user/images/Images/nguoinoitieng1.jpg', 'kenh14', 3, NULL, NULL),
(8, 'Ngạc nhiên trước hình ảnh người lính Việt Nam tương lai', '(Quốc phòng Việt Nam) - Trong quá trình tiến lên chính quy, hiện đại, vấn đề thiết kế quân phục dã chiến dành cho bộ đội cần được lưu ý quan tâm đặc biệt.', '2019-06-05', 'Thực hiện Kế hoạch công tác của Thủ trưởng Bộ Quốc Phòng, sáng ngày 7/5/2019  Thượng tướng Bế Xuân Trường - Ủy viên ban chấp hành Trung ương Đảng, Ủy viên Quân ủy Trung ương - Thứ trưởng Bộ Quốc Phòng cùng đoàn công tác đã đến thăm và làm việc tại Nhà máy Z176. Tại buổi làm việc, Đại tá Phạm Anh Tuấn - Giám đốc Nhà máy Z176 đã báo cáo kết quả thực hiện nhiệm vụ chính trị năm 2018, phương hướng nhiệm vụ năm 2019 của nhà máy đối với đoàn kiểm tra. Trong quá trình làm việc tại đơn vị, Thượng tướng Bế Xuân Trường đã tiến hành tham quan khu B, các xưởng sản xuất của nhà máy, hình ảnh của một số sản phẩm quân trang dã chiến đang sản xuất tại đây đã  được giới thiệu tới đoàn công tác. Ở tấm ảnh trên, có thể nhận thấy một mẫu áo trang bị mới đang được sản xuất để cấp phát cho bộ đội trong tương lai thay thế cho bao xe đựng đạn AK truyền thống, sản phẩm có tính thẩm mỹ cao hơn rất nhiều. Quan sát sơ bộ, mẫu áo trang bị này vẫn sử dụng họa tiết ngụy trang K07, trên áo có may sẵn một số túi trang bị để đựng băng đạn hay lựu đạn hoặc đạn súng phóng lựu M79, chưa rõ loại áo này có được thiết kế để mang tấm cứng giáp chống đạn hay không? Ngoài ra còn một chi tiết rất đáng chú ý nữa đó là chiếc mũ chống đạn thế hệ mới với rất nhiều ưu điểm so với mũ cối hay mũ A2 hiện nay, đó là được trang bị các đường ray để gắn đèn pin chiến thuật, camera hay một số phụ kiện tác chiến khác, sản phẩm có nhiều nét tương đồng với những loại mũ bảo hộ tiên tiến nhất hiện nay. Bên cạnh bộ quân phục dã chiến tiêu chuẩn với họa tiết K07, trong bức ảnh này có thể dễ dàng nhận ra còn một bộ nữa với màu ngụy trang của binh chủng đặc công, bên cạnh là áo cỏ dành cho lực lượng đặc nhiệm. Trong quá trình tiến lên chính quy, hiện đại, ngoài việc đầu tư cho vũ khí trang bị thì quân phục (thường dùng cũng như dã chiến) hay trang bị cá nhân cho từng người lính cũng phải có sự phát triển tương ứng nhằm theo kịp xu thế của thời đại mới. Với những sản phẩm đang được Nhà máy Z176 chế tạo, vấn đề trên có thể xem như đã được giải quyết bước đầu, tạo ra hình ảnh người lính Quân đội nhân dân Việt Nam hiện đại, đáp ứng tốt hơn yêu cầu của chiến tranh công nghệ cao.', 8, 'public/user/images/Images/qpan1.jpg', 'baodatviet', 5, NULL, NULL),
(9, 'Phát hiện loài cỏ nguy hiểm trong lúa mì nhập khẩu vào Việt Nam', 'Cỏ kế đồng lẫn trong 1,6 triệu tấn lúa mì, nếu để lan ra ruộng đồng có thể ăn hết dinh dưỡng, làm giảm 25-75% năng suất của cây trồng.', '2019-06-05', 'Cục Bảo vệ thực vật, Bộ Nông nghiệp và Phát triển nông thôn vừa có công văn gửi các doanh nghiệp yêu cầu từ ngày 1/11 những doanh nghiệp đã nhập khẩu các lô hàng lúa mì được kiểm định có nhiễm cỏ Cirsium Arvense (tên tiếng Việt là cây cỏ kế đồng) sẽ phải tái xuất. Động thái này được đưa ra sau khi cơ quan kiểm dịch phát hiện 1,6 triệu tấn lúa mì nhập khẩu lẫn cỏ kế đồng trong số gần 4 triệu tấn lúa mì đã nhập khẩu vào Việt Nam từ đầu năm đến nay. Trao đổi với VnExpress, ông Hoàng Trung, Cục trưởng Bảo vệ thực vật cho biết, cỏ kế đồng là loài thực vật ngoại lai rất nguy hiểm. Cây này hiện là đối tượng kiểm dịch thực vật của hơn 40 quốc gia, trong đó có Việt Nam do có nguy cơ cạnh tranh dinh dưỡng với các cây trồng nông nghiệp. Nếu trên một mét vuông cây trồng có 20-30 cây cỏ kế đồng sẽ làm giảm 25-75% năng suất của cây trồng đó, ông Trung nói và cho biết cây này có khả năng phát tán vô cùng nhanh. Một cây cỏ kế đồng có khoảng 5.000 hạt nên trong một ngày chỉ cần một cây phát tán hạt trên vùng trồng của Việt Nam sẽ nguy hiểm. Hạt của cây tồn tại trong nước 20 năm vẫn có thể nảy mầm. Ông Trung cũng cho rằng, nếu các quốc gia đang nhập khẩu hàng hóa nông nghiệp của Việt Nam biết được cỏ kế đồng xuất hiện ở các vùng trồng, sản phẩm nông nghiệp như gạo sẽ bị ảnh hưởng. Trước đó Cục Bảo vệ thực vật đã áp dụng các biện pháp giám sát từ cầu cảng đến kho bãi và sản xuất thành phẩm đối với doanh nghiệp nhập khẩu lúa mì. Cục cũng đã cảnh báo để doanh nghiệp chủ động nhập hàng từ các quốc gia không bị nhiễm cỏ dại này. Theo thông lệ quốc tế và quy định của Việt Nam, Cục phải áp dụng biện pháp mạnh hơn là yêu cầu tái xuất các lô hàng này để ngăn chặn, bảo vệ nền sản xuất trong nước và hàng hóa xuất khẩu sang các nước, , ông Trung nói và cho biết hiện chưa phát hiện cây này trên đồng ruộng của Việt Nam. ác nghiên cứu trên thế giới đã chứng minh có tới 27 loại cây trồng bị cạnh tranh dinh dưỡng bởi cỏ kế đồng. Ở các quốc gia như Mỹ, Canada, Hàn Quốc, Ấn Độ, Australia, Brazil... cỏ này xếp trong nhóm thực vật nguy hại và bị cấm.', 9, 'public/user/images/Images/moitruong1.jpg', 'vnexpress', 2, NULL, NULL),
(10, '700 học trò chuyên Lê Quý Đôn, Đông Hà trò chuyện với Giáo sư Nguyễn Lân Dũng', '(GDVN) - Đã có rất nhiều chia sẻ, thắc mắc của các bạn học sinh trường Trung học phổ thông chuyên Lê Quý Đôn được Giáo sư Nguyễn Lân Dũng giải đáp tận tình.', '2019-06-05', 'Ngày 7/5, Báo điện tử Giáo dục Việt Nam phối hợp với Sở Giáo dục và Đào tạo Quảng Trị, Trường Trung học phổ thông chuyên Lê Quý Đôn (Thành phố Đông Hà, Quảng Trị) tổ chức buổi hội thảo: “Khởi nghiệp trong thời đại cách mạng công nghiệp 4.0”, buổi hội thảo là hoạt động ngoại khóa bổ ích dành cho giáo viên và hơn 700 học sinh các khối chuyên tại nhà trường. Dù thời tiết Quảng Trị những ngày này bước vào đợt nắng nóng oi ả, nhưng thầy và trò của ngôi trường mang tên \"nhà bác học lớn của Việt Nam trong thời phong kiến\" đã kiên trì suốt nhiều giờ đồng hồ nghe diễn giả đặc biệt của chương trình, Giáo sư, Nhà giáo nhân dân Nguyễn Lân Dũng trò chuyện và truyền cảm hứng. Trường Trung học phổ thông chuyên Lê Quý Đôn là một trong những lá cờ đầu của ngành Giáo dục và Đào tạo tỉnh Quảng Trị. Kì thi chọn học sinh giỏi các các trường Trung học phổ thông Chuyên khu vực Duyên hải và Đồng bằng Bắc Bộ lần thứ XII, năm 2019, dành cho học sinh lớp 10 và 11 diễn ra tại tỉnh Quảng Ninh, thu hút học sinh giỏi của các trường chuyên nhiều tỉnh thành trong cả nước tham gia, vừa có kết quả. Đoàn học sinh giỏi của trường Trung học phổ thông Chuyên Lê Quý Đôn đạt 45 giải trên 50 học sinh dự thi tất cả 9 môn. Trong đó có 3 học sinh đạt huy chương Vàng, gồm em Hoàng Trọng Vũ, lớp 11 Toán, Phạm Văn Nhật Vũ, lớp 10 Tin và Thái Thùy Diệu, lớp 11 Văn. Ngoài ra, đoàn học sinh giỏi của trường còn đạt thêm 7 huy chương Bạc, 19 huy chương Đồng và 16 Khuyến khích (tương đương với các giải Nhất, Nhì và Ba và Khuyến khích).', 10, 'public/user/images/Images/giaoduc1.jpg', 'giaoduc', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `password`, `img`, `created_at`, `updated_at`) VALUES
(1, 'thanhvi', '1234567890', 'thethao1.jpg', NULL, NULL),
(2, 'thithanh', '0987654321', 'giaoduc1.jpg', NULL, NULL);


CREATE TABLE `nguoiquanly` (
 `id` bigint(20) UNSIGNED NOT NULL,
 `username` varchar(255),
 `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
 
 `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
 
 `created_at` timestamp NULL DEFAULT NULL,
 `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nguoiquanly`
--

INSERT INTO `nguoiquanly` (`id`, `username`, `email`, `password`) VALUES
(1, 'HoVanCo', 'vanco@gmail.com', '$2y$10$sH8ZmE3GXZshSaWLVJHSh..XKYcMLsCFYOHKzC66XNp0ncPqkxOoa'),
(2, 'ThiThanh', 'thithanh@gmail.com', '$2y$10$auhivIT9XdYjZkijlO0fguwTKQ7F.beltxZvcnmacDIm3uYbLV1zW'),
(3, 'ThiThuy', 'thithuy@gmail.com', '$2y$10$M.O0X3/sRLArKv1/zFkUH.2GLNcmctI7Mcjr6z7gr6GEBkqNMoIVO');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_id_new_foreign` (`id_new`),
  ADD KEY `comments_id_user_foreign` (`id_user`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_id_new_foreign` (`id_new`),
  ADD KEY `likes_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id_cate_foreign` (`id_cate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_id_new_foreign` FOREIGN KEY (`id_new`) REFERENCES `news` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_id_new_foreign` FOREIGN KEY (`id_new`) REFERENCES `news` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_id_cate_foreign` FOREIGN KEY (`id_cate`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
