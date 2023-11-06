USE `duan1`;
-- Insert data into `category` table
INSERT INTO `category` (`name`, `image`, `status`, `is_show`) VALUES
('Men', 'men_image.jpg', '1', '1'),
('Women', 'women_image.jpg', '1', '1'),
('Kids', 'kids_image.jpg', '1', '1'),
('Accessories', 'accessories_image.jpg', '1', '1'),
('Shoes', 'shoes_image.jpg', '1', '1');

-- Insert data into `product` table
INSERT INTO `product` (`name`, `image`, `description`, `id_cate`, `status`, `is_show`) VALUES
('Men T-Shirt', 'tshirt_image.jpg', 'Comfortable and stylish men\'s t-shirt', 1, '1', '1'),
('Women Dress', 'dress_image.jpg', 'Elegant and trendy women\'s dress', 2, '1', '1'),
('Kids Jeans', 'jeans_image.jpg', 'Durable and fashionable kids jeans', 3, '1', '1'),
('Accessory Set', 'accessory_image.jpg', 'A set of stylish accessories', 4, '1', '1'),
('Running Shoes', 'shoes_image.jpg', 'High-performance running shoes', 5, '1', '1');

-- Insert data into `product_size` table
INSERT INTO `product_size` (`size`, `price_product`, `status`) VALUES
('S', 20.99, '1'),
('M', 25.99, '1'),
('L', 30.99, '1'),
('XL', 35.99, '1'),
('XXL', 40.99, '1');

-- Insert data into `product_color` table
INSERT INTO `product_color` (`color`, `image_product`, `status`) VALUES
('Red', 'red_image.jpg', '1'),
('Blue', 'blue_image.jpg', '1'),
('Green', 'green_image.jpg', '1'),
('Black', 'black_image.jpg', '1'),
('White', 'white_image.jpg', '1');

-- Insert data into `product_attributes` table
INSERT INTO `product_attributes` (`id_pro`, `id_size`, `id_color`, `quantity`) VALUES
(1, 1, 1, 50),
(2, 2, 2, 30),
(3, 3, 3, 20),
(4, 4, 4, 15),
(5, 5, 5, 25);

-- Insert data into `user` table

INSERT INTO `user` (`user_name`, `password`, `phone`, `address`, `email`, `image`, `role`, `is_show`) VALUES
('johnDoe', 'pass123', '123456789', '123 Main St', 'john@example.com', 'john_image.jpg', '1', '1'),
('janeDoe', 'pass456', '987654321', '456 Oak St', 'jane@example.com', 'jane_image.jpg', '0', '1'),
('guestUser', 'guestpass', NULL, NULL, NULL, NULL, '0', '1'),
('adminUser', 'adminpass', '5555555555', '789 Admin St', 'admin@example.com', 'admin_image.jpg', '1', '1'),
('testUser', 'testpass', '1112223333', '567 Test St', 'test@example.com', 'test_image.jpg', '0', '1');

-- Insert data into `comment` table
INSERT INTO `comment` (`content`, `id_pro`, `id_user`) VALUES
('Great product!', 1, 1),
('Love the design!', 2, 2),
('Perfect for kids', 3, 3),
('Fast shipping', 4, 4),
('Comfortable shoes', 5, 5);

-- Insert data into `payment` table
INSERT INTO `payment` (`method`) VALUES
('Credit Card'),
('PayPal'),
('Cash on Delivery'),
('Bank Transfer'),
('Bitcoin');

-- Insert data into `order` table
INSERT INTO `order` (`id_user`, `phone`, `address`, `email`, `payment_id`, `order_status`) VALUES
(1, '1234567890', '123 Main St', 'john@example.com', 1, '1'),
(2, '9876543210', '456 Oak St', 'jane@example.com', 2, '0'),
(3, NULL, NULL, NULL, 3, '2'),
(4, '5555555555', '789 Admin St', 'admin@example.com', 4, '3'),
(5, '1112223333', '567 Test St', 'test@example.com', 5, '1');

-- Insert data into `order_detail` table
INSERT INTO `order_detail` (`id_order`, `id_pro_att`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);
