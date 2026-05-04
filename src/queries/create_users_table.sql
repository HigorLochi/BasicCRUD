CREATE TABLE IF NOT EXISTS `basic_crud`.`users` (
    `id` BIGINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `birthdate` DATE,
    `phone` VARCHAR(20),
    `email` VARCHAR(100) NOT NULL,
    `postalcode` VARCHAR(20)
)