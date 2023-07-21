-- PHP Version: 7.2.23
-- Database: `rosh_makeover`
--

-- --------------------------------------------------------

-- Table structure for table `rosh-credentials`

CREATE TABLE `rosh-credentials` (
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;


INSERT INTO `rosh-credentials` (`email`, `password`) VALUES ('admin@gmail.com', 'PassAdmin@90');


--  Creating table for categories

CREATE TABLE `category1` (
  `id` int(11) NOT NULL,
  `service` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

INSERT INTO `category1` (`id`,`service`, `price`) 
VALUES 
(1,'Eyebrow', '30'),
(2,'Forehead and Uperlips', '50');


CREATE TABLE `category2` (
  `id` int(11) NOT NULL,
  `service` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

INSERT INTO `category2` (`id`,`service`, `price`) 
VALUES 
(1,'Hand Wax', '150'),
(2,'Underarms', '50'),
(3,'Body Wax', '600'),
(4,'leg Wax(Half)', '200'),
(5,'Leg Wax(Full)', '350'),
(6,'Face Wax', '100');


CREATE TABLE `category3` (
  `id` int(11) NOT NULL,
  `service` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

INSERT INTO `category3` (`id`,`service`, `price`) 
VALUES 
(1,'Hand Wax', '100'),
(2,'Underarms', '300'),
(3,'leg Wax(Half)', '500'),
(4,'Leg Wax(Full)', '800'),
(5,'Body Wax', '1200'),
(6,'Face Wax', '200');


CREATE TABLE `category4` (
  `id` int(11) NOT NULL,
  `service` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

INSERT INTO `category4` (`id`,`service`, `price`) 
VALUES 
(1,'Clean Up(Fruit)', '200'),
(2,'Fruit Facial', '400'),
(3,'Lotus Facial', '800'),
(4,'RichFeel Facial', '1000'),
(5,'Cheryls Facial', '800'),
(6,'O3', '1500-2000'),
(7,'Raga Facial', '700'),
(8,'Oxyglow', '500'),
(9,'VLCC', '600');


CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(191) NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

INSERT INTO `images` (`id`,`file_name`) 
VALUES 
(1,'1.jfif'),
(2,'2.jfif'),
(3,'4.jpg'),
(4,'5.jpg'),
(5,'6.jpg'),
(6,'7.jpg'),
(7,'9.jpg'),
(8,'10.jpg'),
(9,'11.jpg'),
(10,'12.jpg'),
(11,'13.jpg'),
(12,'14.jpg'),
(13,'15.jpg'),
(14,'16.jpg'),
(15,'17.jpg'),
(16,'18.jpg'),
(17,'19.jpg'),
(18,'20.jpg'),
(19,'21.jpg'),
(20,'22.jpg'),
(21,'23.jpg'),
(22,'24.jpg'),
(23,'25.jpg');


CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(191) NOT NULL,
  `recieved_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7;


CREATE TABLE `form-data` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `course` varchar(191) NOT NULL,
  `recieved_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Indexes for table `category1`
--
ALTER TABLE `category1`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `category2`
--
ALTER TABLE `category2`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `category3`
--
ALTER TABLE `category3`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `category4`
--
ALTER TABLE `category4`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);


--
-- Indexes for table `form-data`
--
ALTER TABLE `form-data`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT for table `category1`
--
ALTER TABLE `category1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


--
-- AUTO_INCREMENT for table `category2`
--
ALTER TABLE `category2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


--
-- AUTO_INCREMENT for table `category3`
--
ALTER TABLE `category3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


--
-- AUTO_INCREMENT for table `category4`
--
ALTER TABLE `category4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;


--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


--
-- AUTO_INCREMENT for table `form-data`
--
ALTER TABLE `form-data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
