--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'Avocado', 'Av2873', 'product-images/avocado.jpg', 3000.00),
(2, 'Banana', 'Avo3872', 'product-images/bananas.jpg', 2000.00),
(3, 'Cabbage', 'Avo287', 'product-images/cabbage.jpg', 2000.00),
(4, 'Carrot', 'AUs7278', 'product-images/carrots.jpg', 5000.00),
(5, 'Chilli', 'Ahg39', 'product-images/chili.jpg', 4000.00),
(6, 'Garlic', 'Av974', 'product-images/garlic.jpg', 6000.00),
(7, 'Ginger', 'Av399', 'product-images/ginger.jpg', 5000.00),
(8, 'Greenpepper', 'Avo377', 'product-images/greenpaper.jpg', 5000.00),
(9, 'Maize', 'Av2889', 'product-images/maize.jpg', 1100.00),
(10, 'Orange', 'Av88', 'product-images/oranges.jpg', 2000.00),
(11, 'Rice', 'Av098', 'product-images/rice.jpg', 1600.00),
(12, 'Tomato', 'Avoc876', 'product-images/tomatoes.jpg', 3000.00),
(13, 'Watermelon', 'Avo555', 'product-images/watermelon.jpg', 2000.00),
(14, 'Wheat', 'Avo876', 'product-images/wheat.jpg', 1300.00);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;