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

CREATE TABLE `categories` (
  `id` int(11)  not null auto_increment primary key,
  `category` varchar(191) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

INSERT INTO `categories` (`id`,`category`) 
VALUES 
(1,'Eyebrow and Forehead' ),
(2,'Wax-Honey'),
(3,'Wax-Richa,Creme,Chocolate,Beaan Wax'),
(4,'Facial');

CREATE TABLE `ratecard` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `service` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

INSERT INTO `ratecard` (`id`, `category_id`,`service`, `price`) 
VALUES 
(1, 1,'Eyebrow', '30'),
(2, 1,'Forehead and Uperlips', '50'),
(3, 2,'Hand Wax', '150'),
(4, 2,'Underarms', '50'),
(5, 2,'Body Wax', '600'),
(6, 2,'leg Wax(Half)', '200'),
(7, 2,'Leg Wax(Full)', '350'),
(8, 2,'Face Wax', '100'),
(9, 3,'Hand Wax', '100'),
(10, 3,'Underarms', '300'),
(11, 3,'leg Wax(Half)', '500'),
(12, 3,'Leg Wax(Full)', '800'),
(13, 3,'Body Wax', '1200'),
(14, 3,'Face Wax', '200'),
(15, 4,'Clean Up(Fruit)', '200'),
(16, 4,'Fruit Facial', '400'),
(17, 4,'Lotus Facial', '800'),
(18, 4,'RichFeel Facial', '1000'),
(19, 4,'Cheryls Facial', '800'),
(20, 4,'O3', '1500-2000'),
(21, 4,'Raga Facial', '700'),
(22, 4,'Oxyglow', '500'),
(23, 4,'VLCC', '600');


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


CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course-name` varchar(191) NOT NULL,
  `seat` varchar(191) NOT NULL,
  `announced_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7;



--
-- Indexes for table `categories`
--
ALTER TABLE `ratecard`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `ratecard`
  ADD FOREIGN KEY fk_category(category_id)
  REFERENCES categories(id)
  ON DELETE NO ACTION
  ON UPDATE CASCADE;

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
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


ALTER TABLE `ratecard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table ``
--images
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


--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
