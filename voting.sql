

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `can_id` int(11) NOT NULL,
  `can_name` varchar(100) NOT NULL,
  `can_image` varchar(100) NOT NULL,
  `can_party_symbol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `candidates` (`id`, `can_id`, `can_name`, `can_image`, `can_party_symbol`) VALUES
(6, 1, 'xyz', '15915075312020-06-07_1.png', '15915075312020-06-07_noimage.jpg');



CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `superadmin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Swap', 'admin', 'admin');



CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `voters` (`id`, `voters_id`, `name`, `password`) VALUES
(1, '101', 'Swap', '2020');



CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voter_id` varchar(100) NOT NULL,
  `can_id` varchar(100) NOT NULL,
  `voted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;


ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;


ALTER TABLE voters
ADD has_voted TINYINT(1) DEFAULT 0;
