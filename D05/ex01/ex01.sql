DROP TABLE IF EXISTS `ft_table`;
CREATE TABLE `ft_table`
(
    `id` int PRIMARY KEY (`id`) AUTO_INCREMENT NOT NULL,
    `login` varchar(255) NOT NULL DEFAULT 'toto',
    `groupe` enum('staff','student','other') NOT NULL,
    `date_de_creation` DATE NOT NULL,
);