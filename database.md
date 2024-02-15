-- table 1: Ania --


CREATE TABLE `adopt-out-form` (
  `user_id` int NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `age` int NOT NULL,
  `reasons` varchar(15) NOT NULL,
  `comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--


-- table 2: Walid --

CREATE TABLE `adoption_form` (
  `cat_id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `experience` varchar(15) NOT NULL,
  `house_type` varchar(15) NOT NULL,
  `reasons` varchar(15) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--


-- table 3: Ania --

CREATE TABLE `available_cats` (
  `cat_id` int NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `adoption_status` enum('Available','Adopted') NOT NULL,
  `owner` varchar(50) NOT NULL COMMENT 'email/Silicate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


INSERT INTO `available_cats` (`cat_id`, `cat_name`, `adoption_status`, `owner`) VALUES
(1, 'Bunker Buster', 'Available', 'Silicate'),
(2, 'Tole Tole', 'Available', 'Silicate'),
(3, 'Jägermeister', 'Available', 'Silicate'),
(4, 'Herbert', 'Available', 'Silicate'),

--


-- table 4: Janika --

CREATE TABLE `Contact_form` (
  `user_id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `Inquiry` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--

-- table 5: Viktor --

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `fname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `orders` (`order_id`, `product_id`, `quantity`, `fname`, `user_email`, `phone`, `address`, `payment_method`, `total_price`) VALUES
(4, 1, 1, 'Viktor Trilar', 'viktor.trilar1@gmail.com', '+38640239095', 'Ljubljanska cesta 31A', 'VISA', '30.99');
--


-- table 7: Ania --

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `users` (`user_id`, `fname`, `user_email`, `user_password`) VALUES
(7, 'asd', 'anna@gmail.com', 'sad'),
(9, 'sahil', 'sahil@gmail.com', 'poop'),
(14, 'Janika', 'janika@gmail.com', 'nomnom'),
(15, 'Viktor', 'viktor@gmail.com', 'aaaa'),

--

ALTER TABLE `adopt-out-form`
  ADD KEY `fk_adoptout_users` (`user_id`);

--
-- Indexes for table `adoption_form`
--
ALTER TABLE `adoption_form`
  ADD KEY `fk_adoption_avcats` (`cat_id`);

--
-- Indexes for table `available_cats`
--
ALTER TABLE `available_cats`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `Contact_form`
--
ALTER TABLE `Contact_form`
  ADD KEY `fk_contact_users` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `available_cats`
--
ALTER TABLE `available_cats`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adopt-out-form`
--
ALTER TABLE `adopt-out-form`
  ADD CONSTRAINT `fk_adoptout_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Contact_form`
--
ALTER TABLE `Contact_form`
  ADD CONSTRAINT `fk_contact_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;