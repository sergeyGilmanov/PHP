

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `img` (`id`, `title`, `link`, `size`, `count`) VALUES
(1, 'картинка 1', '1.jpg', '2500x1250', 9),
(2, 'картинка 2', '2.jpg', '750x422', 13),
(3, 'картинка 3', '3.jpg', '650x361', 4),
(4, 'картинка 4', '4.jpg', '550x413', 5);


ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
