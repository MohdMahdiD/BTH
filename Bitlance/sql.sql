
-- Creating table for the data inserted by the user 
CREATE TABLE IF NOT EXISTS `register` 
(
    `id` int(11) UNSIGNED NOT NULL,
    `username` varchar(20) NOT NULL,
    `phone` bigint(20) NOT NULL,
    `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Reset the Next Value in AUTO_INCREMENT column
-- ALTER TABLE `register` AUTO_INCREMENT = 1;