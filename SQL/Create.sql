-- CREATE DATABASE 
DROP DATABASE `duan1`;
CREATE DATABASE `duan1`;
USE `duan1`;

-- CREATE TABLE 
CREATE TABLE `category` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL,
    image VARCHAR(50),
    `status` ENUM('0', '1') DEFAULT '0',
    is_show ENUM('0', '1') DEFAULT '0'
);

CREATE TABLE `product` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(50) NOT NULL,
    image VARCHAR(50) NOT NULL,
    `description` TEXT NOT NULL,
    `view` INT UNSIGNED DEFAULT 0,
    id_cate INT UNSIGNED,
    added_on DATETIME DEFAULT NOW(),
    `status` ENUM('0', '1') DEFAULT '0',
    is_show ENUM('0', '1') DEFAULT '0',
    FOREIGN KEY (id_cate)
        REFERENCES `category` (id)
);


CREATE TABLE `product_size` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    size VARCHAR(10) NOT NULL,
    price_product FLOAT NOT NULL,
    `status` ENUM('0', '1') DEFAULT '0'
);


CREATE TABLE `product_color` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    color VARCHAR(10) NOT NULL,
    image_product VARCHAR(50) NOT NULL,
    `status` ENUM('0', '1') DEFAULT '0'
);

CREATE TABLE `product_attributes` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_pro INT UNSIGNED,
    id_size INT UNSIGNED,
    id_color INT UNSIGNED,
    quantity INT UNSIGNED,
    FOREIGN KEY (id_pro)
        REFERENCES product (id),
    FOREIGN KEY (id_size)
        REFERENCES product_size (id),
    FOREIGN KEY (id_color)
        REFERENCES product_color (id)
);

CREATE TABLE `user` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(20) NOT NULL,
    `password` VARCHAR(10) NOT NULL,
    phone VARCHAR(11),
    address VARCHAR(50),
    email VARCHAR(50),
    image VARCHAR(50),
    `role` ENUM('0', '1') DEFAULT '0',
    is_show ENUM('0', '1') DEFAULT '0'
);


CREATE TABLE `comment` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    content VARCHAR(50),
    added_on DATETIME DEFAULT NOW(),
    id_pro INT UNSIGNED,
    id_user INT UNSIGNED,
    FOREIGN KEY (id_pro)
        REFERENCES `product` (id),
    FOREIGN KEY (id_user)
        REFERENCES `user` (id)
);


CREATE TABLE `payment` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    method VARCHAR(50)
);

CREATE TABLE `order` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_user INT UNSIGNED,
    phone VARCHAR(11),
    address VARCHAR(50),
    email VARCHAR(50),
    payment_id INT UNSIGNED,
    added_on DATETIME DEFAULT NOW(),
    order_status ENUM('0', '1', '2', '3') DEFAULT '0',
    FOREIGN KEY(id_user) REFERENCES `user`(id),
    FOREIGN KEY (payment_id) REFERENCES `payment`(id)
);

CREATE TABLE `order_detail` (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_order INT UNSIGNED,
    id_pro_att INT UNSIGNED,
    FOREIGN KEY (id_order)
        REFERENCES `order` (id),
    FOREIGN KEY (id_pro_att)
        REFERENCES `product_attributes` (id)
); 







