-- * this will create a database with our project 

CREATE TABLE `rosh-credentials` (
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin7_general_cs;


INSERT INTO `rosh-credentials` (`email`, `password`) VALUES ("admin@gmail.com", "PassAdmin@90");


-- * Creating table for categories

CREATE TABLE `category1` (
  `id` int(11) NOT NULL,
  `service` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin7_general_cs;

INSERT INTO `category1` (`id`,`service`, `price`) VALUES ('1','Eyebrow', '30');
INSERT INTO `category1` (`id`,`service`, `price`) VALUES ('2','Forehead and Uperlips', '50');


CREATE TABLE `category2` (
  `id` int(11) NOT NULL,
  `service` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin7_general_cs;

INSERT INTO `category2` (`id`,`service`, `price`) VALUES (`1`,'Hand Wax', '150');
INSERT INTO `category2` (`id`,`service`, `price`) VALUES (`2`,'Underarms', '50');
INSERT INTO `category2` (`id`,`service`, `price`) VALUES (`3`,'Body Wax', '600');
INSERT INTO `category2` (`id`,`service`, `price`) VALUES (`4`,'leg Wax(Half)', '200');
INSERT INTO `category2` (`id`,`service`, `price`) VALUES (`5`,'Leg Wax(Full)', '350');
INSERT INTO `category2` (`id`,`service`, `price`) VALUES (`6`,'Face Wax', '100');


CREATE TABLE `category3` (
  `id` int(11) NOT NULL,
  `service` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin7_general_cs;

INSERT INTO `category3` (`id`,`service`, `price`) VALUES (`1`,'Hand Wax', '100');
INSERT INTO `category3` (`id`,`service`, `price`) VALUES (`2`,'Underarms', '300');
INSERT INTO `category3` (`id`,`service`, `price`) VALUES (`3`,'leg Wax(Half)', '500');
INSERT INTO `category3` (`id`,`service`, `price`) VALUES (`4`,'Leg Wax(Full)', '800');
INSERT INTO `category3` (`id`,`service`, `price`) VALUES (`5`,'Body Wax', '1200');
INSERT INTO `category3` (`id`,`service`, `price`) VALUES (`6`,'Face Wax', '200');


CREATE TABLE `category4` (
  `id` int(11) NOT NULL,
  `service` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin7_general_cs;

INSERT INTO `category4` (`id`,`service`, `price`) VALUES (`1`,'Clean Up(Fruit)', '200');
INSERT INTO `category4` (`id`,`service`, `price`) VALUES (`2`,'Fruit Facial', '400');
INSERT INTO `category4` (`id`,`service`, `price`) VALUES (`3`,'Lotus Facial', '800');
INSERT INTO `category4` (`id`,`service`, `price`) VALUES (`4`,'RichFeel Facial', '1000');
INSERT INTO `category4` (`id`,`service`, `price`) VALUES (`5`,'Cheryls Facial', '800');
INSERT INTO `category4` (`id`,`service`, `price`) VALUES (`6`,'O3', '1500-2000');
INSERT INTO `category4` (`id`,`service`, `price`) VALUES (`7`,'Raga Facial', '700');
INSERT INTO `category4` (`id`,`service`, `price`) VALUES (`8`,'Oxyglow', '500');
INSERT INTO `category4` (`id`,`service`, `price`) VALUES (`9`,'VLCC', '600');


CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(191) NOT NULL,
  `uploaded_on` datetime NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin7_general_cs;

INSERT INTO `images` (`id`,`service`, `price`) VALUES (`1`,'1.jfif');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`2`,'2.jfif');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`3`,'4.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`4`,'5.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`5`,'6.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`6`,'7.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`7`,'9.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`8`,'10.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`9`,'11.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`10`,'12.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`11`,'13.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`12`,'14.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`13`,'15.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`14`,'16.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`15`,'17.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`16`,'18.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`17`,'19.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`18`,'20.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`19`,'21.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`20`,'22.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`21`,'23.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`22`,'24.jpg');
INSERT INTO `images` (`id`,`service`, `price`) VALUES (`23`,'25.jpg');

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
COMMIT;
