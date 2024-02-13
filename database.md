-- table 1: Ania --


CREATE TABLE `adopt-out-form` (
  `user_id` int NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int NOT NULL,
  `reasons` varchar(15) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


--

-- table 2: Ania --

CREATE TABLE `adopted_cats` (
  `cat_id` int NOT NULL,
  `user_id` int NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `adoption_status` enum('Available','Adopted') NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--

-- table 3: Walid --

CREATE TABLE `adoption_form` (
  `user_id` int NOT NULL,
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


-- table 4: Ania --

CREATE TABLE `available_cats` (
  `cat_id` int NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `adoption_status` enum('Available','Adopted') NOT NULL,
  `owner` varchar(50) NOT NULL COMMENT 'email/Silicate'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--


-- table 5: Janika --

CREATE TABLE `Contact_form` (
  `user_id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `Inquiry` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--

-- table 6: Viktor --

CREATE TABLE `products` (
  `product_id` int NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `in_stock` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--

-- table 7: Viktor --

CREATE TABLE `shopping_cart` (
  `user_id` int NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--

-- table 8: Ania --

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--

-- Indexes for table `adopt-out-form`
--
ALTER TABLE `adopt-out-form`
  ADD KEY `fk_adoptout_users` (`user_id`);

--
-- Indexes for table `adopted_cats`
--
ALTER TABLE `adopted_cats`
  ADD KEY `fk_adoptedcats_users` (`user_id`),
  ADD KEY `fk_adoptedcats_availablecats` (`cat_id`);

--
-- Indexes for table `adoption_form`
--
ALTER TABLE `adoption_form`
  ADD KEY `fk_adoption_users` (`user_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD KEY `fk_cart_users` (`user_id`),
  ADD KEY `fk_cart_products` (`product_id`);

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
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adopt-out-form`
--
ALTER TABLE `adopt-out-form`
  ADD CONSTRAINT `fk_adoptout_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `adopted_cats`
--
ALTER TABLE `adopted_cats`
  ADD CONSTRAINT `fk_adoptedcats_availablecats` FOREIGN KEY (`cat_id`) REFERENCES `available_cats` (`cat_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_adoptedcats_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `adoption_form`
--
ALTER TABLE `adoption_form`
  ADD CONSTRAINT `fk_adoption_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Contact_form`
--
ALTER TABLE `Contact_form`
  ADD CONSTRAINT `fk_contact_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `fk_cart_products` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_cart_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;