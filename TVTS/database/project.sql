-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308:3308
-- Generation Time: Mar 04, 2024 at 04:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `challan`
--

CREATE TABLE `challan` (
  `challan_id` int(11) NOT NULL,
  `challan_date` date DEFAULT NULL,
  `challan_cost` int(11) DEFAULT NULL,
  `violation_type` varchar(20) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `vhno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `challan`
--

INSERT INTO `challan` (`challan_id`, `challan_date`, `challan_cost`, `violation_type`, `pid`, `vhno`) VALUES
(164, '2024-03-04', 1000, 'No license', NULL, '1004'),
(165, '2024-03-04', 1000, 'Drunk and Drive', 2, '1005');

-- --------------------------------------------------------

--
-- Table structure for table `p_info`
--

CREATE TABLE `p_info` (
  `police_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `policename` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p_info`
--

INSERT INTO `p_info` (`police_id`, `username`, `policename`, `phoneno`, `email`, `password`) VALUES
(1, 'nani', 'Dhanush', '08296161413', 'dhanushmadhusudhan31@gmail.com', 'nani'),
(2, 'eshwar', 'Eshwar', '9353593737', 'eshwarappu135@gmail.com', 'eshwar');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_detail`
--

CREATE TABLE `vehicle_detail` (
  `vhno` varchar(30) NOT NULL,
  `vowner` varchar(30) NOT NULL,
  `vname` varchar(20) NOT NULL,
  `vtype` varchar(30) NOT NULL,
  `vmodel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_detail`
--

INSERT INTO `vehicle_detail` (`vhno`, `vowner`, `vname`, `vtype`, `vmodel`) VALUES
('1000', 'Alan Jimcy', 'Honda', '2 Wheeler', '6G'),
('1001', 'Harsh RG', 'Suzuki', '4 Wheeler', 'Swift'),
('1002', 'Bharath Sinde', 'Yamaha', '2 Wheeler', 'MT-15'),
('1003', 'Dilip', 'Ford', '4 Wheeler', 'Mustang'),
('1004', 'Ahiram HR', 'Harley Davidson', '2 Wheeler', 'Street 750'),
('1005', 'Adarsha', 'Toyota', '4 Wheeler', 'Prius'),
('1006', 'Aboobakar', 'Honda', '4 Wheeler', 'CR-V'),
('1007', 'Aditya', 'Vespa', '2 Wheeler', 'LX 125'),
('1008', 'Aashish nanda', 'Audi', '4 Wheeler', 'A4'),
('1009', 'Abdul Mazid Khan', 'Kawasaki', '2 Wheeler', '650'),
('1010', 'Avinash', 'Vespa', '2 Wheeler', 'Vespa 300'),
('1011', 'Anubhav Kumar', 'Toyota', '4 Wheeler', 'Corolla'),
('1012', 'Keshav Mishra', 'Honda', '2 Wheeler', 'CB Shine'),
('1013', 'Abhimanyu Singh', 'Ford', '4 Wheeler', 'Explorer'),
('1014', 'Mohith', 'Suzuki', '2 Wheeler', 'Hayabusa'),
('1015', 'Chirag', 'Hyundai', '4 Wheeler', 'Tucson'),
('1016', 'Karthik V', 'Yamaha', '2 Wheeler', 'R15 V3'),
('1017', 'Yashas BN', 'Chevrolet', '4 Wheeler', 'Cruze'),
('1018', 'Vaibhav', 'Ducati', '2 Wheeler', 'Panigale V2'),
('1019', 'Vrushab', 'Volkswagen', '4 Wheeler', 'Golf'),
('1020', 'Kiran', 'BMW', '4 Wheeler', '3 Series'),
('1021', 'Dhanush', 'Honda', '4 Wheeler', 'Civic'),
('1022', 'Hemanth', 'Piaggio', '3 Wheeler', 'Vespa 750'),
('1023', 'Tejas', 'Honda', '2 Wheeler', 'CB Shine'),
('1024', 'Thanmai', 'Bajaj', '3 Wheeler', 'Auto Rickshaw'),
('1025', 'Lohith', 'Suzuki', '2 Wheeler', 'Hayabusa 250'),
('1026', 'Naveen', 'Hyundai', '4 Wheeler', 'Tucson'),
('1027', 'Priyanshu', 'Yamaha', '2 Wheeler', 'R15 V3'),
('1028', 'Karthik S', 'Bajaj', '3 Wheeler', 'RE60'),
('1029', 'Punith', 'Ducati', '2 Wheeler', 'Panigale V2'),
('1030', 'Sachin', 'Volkswagen', '4 Wheeler', 'Golf'),
('1031', 'Akshay', 'Piaggio', '3 Wheeler', 'Ape'),
('1032', 'Rahul', 'Suzuki', '2 Wheeler', 'Access 125'),
('1033', 'Prakash', 'Honda', '2 Wheeler', 'Activa 125'),
('1034', 'Neha', 'TVS', '2 Wheeler', 'Apache RTR 160'),
('1035', 'Kavitha', 'Bajaj', '2 Wheeler', 'Pulsar 150'),
('1036', 'Manjunath', 'Yamaha', '2 Wheeler', 'FZ S V3'),
('1037', 'Priya', 'Hero', '2 Wheeler', 'Splendor+'),
('1038', 'Vinod', 'KTM', '2 Wheeler', 'Duke 200'),
('1039', 'Vidya', 'Royal Enfield', '2 Wheeler', 'Classic 350'),
('1040', 'Vijay', 'TVS', '2 Wheeler', 'Jupiter'),
('1041', 'Vikram', 'Suzuki', '2 Wheeler', 'Access 125'),
('1042', 'Bhavya', 'Yamaha', '2 Wheeler', 'R15 V3'),
('1043', 'Manju', 'Honda', '2 Wheeler', 'CBR 150'),
('1044', 'Vasudev', 'Bajaj', '2 Wheeler', 'Pulsar 220'),
('1045', 'Sarvesh', 'KTM', '2 Wheeler', 'RC 390'),
('1046', 'Harshith', 'Hero', '2 Wheeler', 'Splendor+'),
('1047', 'Yathish', 'activa', '2 wheeler', '5G'),
('1048', 'Girish J', 'Harley', '2 wheeler', 'Harley 450'),
('1049', 'Rakesh', 'Duke', '2 wheeler', '200'),
('1050', 'Sachin Tendulkar', 'Mercedes', '4 Wheeler', 'S-Class'),
('1051', 'Virat Kohli', 'BMW', '4 Wheeler', 'X5'),
('1052', 'Rohit Sharma', 'Audi', '4 Wheeler', 'Q7'),
('1053', 'MS Dhoni', 'Toyota', '4 Wheeler', 'Land Cruiser'),
('1054', 'Sachin Ramesh Tendulkar', 'Ferrari', '4 Wheeler', '488 GTB'),
('1055', 'Chris Gayle', 'Ford', '4 Wheeler', 'F-150'),
('1056', 'AB de Villiers', 'Jaguar', '4 Wheeler', 'F-PACE'),
('1057', 'Kane Williamson', 'Land Rover', '4 Wheeler', 'Range Rover Sport'),
('1058', 'David Warner', 'Lamborghini', '4 Wheeler', 'Huracan'),
('1059', 'Steve Smith', 'Porsche', '4 Wheeler', '911'),
('1060', 'Shahrukh Khan', 'Toyota', '4 Wheeler', 'Fortuner'),
('1061', 'Yash', 'Audi', '4 Wheeler', 'A8'),
('1062', 'Puneeth Rajkumar', 'BMW', '4 Wheeler', '7 Series'),
('1063', 'Darshan', 'Mercedes', '4 Wheeler', 'GLE'),
('1064', 'Kicha Sudeep', 'Audi', '4 Wheeler', 'Q5'),
('1065', 'Yash', 'Volvo', '4 Wheeler', 'XC90'),
('1066', 'Ganesh', 'BMW', '4 Wheeler', '5 Series'),
('1067', 'Upendra', 'Land Rover', '4 Wheeler', 'Discovery'),
('1068', 'Puneeth Rajkumar', 'Audi', '4 Wheeler', 'Q7'),
('1069', 'Sudeep K', 'Mercedes', '4 Wheeler', 'GLS'),
('1070', 'Darshan KH', 'BMW', '4 Wheeler', 'X6'),
('1071', 'Ricky Ponting', 'Chevrolet', '4 Wheeler', 'Tahoe'),
('1072', 'Shane Warne', 'Ford', '4 Wheeler', 'Expedition'),
('1073', 'Brian Lara', 'Toyota', '4 Wheeler', 'RAV4'),
('1074', 'Wasim Akram', 'Mercedes', '4 Wheeler', 'GLC'),
('1075', 'Sourav Ganguly', 'BMW', '4 Wheeler', 'X3'),
('1076', 'Muttiah Muralitharan', 'Audi', '4 Wheeler', 'Q3'),
('1077', 'Jacques Kallis', 'Porsche', '4 Wheeler', 'Macan'),
('1078', 'Kumar Sangakkara', 'Lexus', '4 Wheeler', 'RX'),
('1079', 'Mahela Jayawardene', 'Land Rover', '4 Wheeler', 'Discovery Sport'),
('1080', 'Ricky Ponting', 'Jeep', '4 Wheeler', 'Wrangler'),
('1081', 'Rajkumar Rao', 'Tesla', '4 Wheeler', 'Model X'),
('1082', 'Alia Bhatt', 'Aston Martin', '4 Wheeler', 'DB11'),
('1083', 'Ranveer Singh', 'Ferrari', '4 Wheeler', 'Portofino'),
('1084', 'Deepika Padukone', 'Porsche', '4 Wheeler', 'Cayenne'),
('1085', 'Amitabh Bachchan', 'Rolls-Royce', '4 Wheeler', 'Phantom'),
('1086', 'Priyanka Chopra', 'Lamborghini', '4 Wheeler', 'Urus'),
('1087', 'Shah Rukh Khan', 'Bugatti', '4 Wheeler', 'Chiron'),
('1088', 'Kareena Kapoor Khan', 'McLaren', '4 Wheeler', '720S'),
('1089', 'Salman Khan', 'Bentley', '4 Wheeler', 'Continental GT'),
('1090', 'Anushka Sharma', 'Maserati', '4 Wheeler', 'Levante'),
('1091', 'Chris Hemsworth', 'Tesla', '4 Wheeler', 'Model S'),
('1092', 'Robert Downey Jr.', 'Aston Martin', '4 Wheeler', 'DBS Superleggera'),
('1093', 'Leonardo DiCaprio', 'Ferrari', '4 Wheeler', '812 Superfast'),
('1094', 'Scarlett Johansson', 'Porsche', '4 Wheeler', '911 Turbo'),
('1095', 'Tom Cruise', 'Rolls-Royce', '4 Wheeler', 'Cullinan'),
('1096', 'Angelina Jolie', 'Lamborghini', '4 Wheeler', 'Aventador'),
('1097', 'Brad Pitt', 'Bugatti', '4 Wheeler', 'Veyron'),
('1098', 'Jennifer Lawrence', 'McLaren', '4 Wheeler', '570S'),
('1099', 'Dwayne Johnson', 'Bentley', '4 Wheeler', 'Bentayga'),
('1100', 'Gal Gadot', 'Maserati', '4 Wheeler', 'Ghibli'),
('1101', 'Ganesh Y', 'Scooter', '2 Wheeler', 'Activa 6G'),
('1102', 'Puneeth R', 'Sedan', '4 Wheeler', 'City'),
('1103', 'Upendra R', 'Motorcycle', '2 Wheeler', 'Pulsar 150'),
('1104', 'Sudeep Kiccha', 'SUV', '4 Wheeler', 'XUV500'),
('1105', 'Yash G', 'Cruiser', '2 Wheeler', 'Thunderbird'),
('1106', 'Radhika Pandit', 'Hatchback', '4 Wheeler', 'i20'),
('1107', 'Darshan T', 'Scooter', '2 Wheeler', 'Access 125'),
('1108', 'Rakshit Shetty', 'Sedan', '4 Wheeler', 'Verna'),
('1109', 'Shivarajkumar', 'Sports Bike', '2 Wheeler', 'Apache RR310'),
('1110', 'Rashmika Mandanna', 'SUV', '4 Wheeler', 'Creta'),
('1111', 'Kannada Chaluvali Vatal Paksha', 'SUV', '4 Wheeler', 'Endeavour'),
('1112', 'Vijay Suriya', 'Motorcycle', '2 Wheeler', 'Gixxer SF'),
('1113', 'Srinidhi Shetty', 'Scooter', '2 Wheeler', 'Jupiter'),
('1114', 'Yuzvendra Chahal', 'Luxury Sedan', '4 Wheeler', 'Audi A6'),
('1115', 'Sandeep Patil', 'Luxury SUV', '4 Wheeler', 'Volvo XC60'),
('1116', 'Kapil Dev', 'Sports Car', '4 Wheeler', 'Ferrari 488'),
('1117', 'Sachin Tendulkar', 'Luxury Sedan', '4 Wheeler', 'Mercedes-Benz E-Class'),
('1118', 'Sunil Gavaskar', 'Luxury SUV', '4 Wheeler', 'Range Rover Velar'),
('1119', 'Rahul Dravid', 'Luxury Sedan', '4 Wheeler', 'BMW 5 Series'),
('1120', 'Virat Kohli', 'Sports Car', '4 Wheeler', 'Lamborghini Huracan'),
('1121', 'MS Dhoni', 'Luxury SUV', '4 Wheeler', 'Toyota Fortuner'),
('1122', 'Rohit Sharma', 'Luxury Sedan', '4 Wheeler', 'Audi A8'),
('1123', 'Sourav Ganguly', 'Luxury SUV', '4 Wheeler', 'Land Rover Discovery'),
('1124', 'Sachin Ramesh Tendulkar', 'Sports Car', '4 Wheeler', 'Ferrari 812 Superfast'),
('1125', 'Chris Gayle', 'Luxury Sedan', '4 Wheeler', 'Jaguar XJ'),
('1126', 'AB de Villiers', 'Luxury SUV', '4 Wheeler', 'Volvo XC90'),
('1127', 'Kane Williamson', 'Sports Car', '4 Wheeler', 'Porsche 911'),
('1128', 'David Warner', 'Luxury Sedan', '4 Wheeler', 'Mercedes-Benz S-Class'),
('1129', 'Steve Smith', 'Luxury SUV', '4 Wheeler', 'BMW X5'),
('1130', 'Shahrukh Khan', 'Sports Car', '4 Wheeler', 'Bugatti Chiron'),
('1131', 'Yash', 'Luxury Sedan', '4 Wheeler', 'Rolls-Royce Ghost'),
('1132', 'Puneeth Rajkumar', 'Luxury SUV', '4 Wheeler', 'Bentley Bentayga'),
('1133', 'Darshan', 'Sports Car', '4 Wheeler', 'McLaren 720S'),
('1134', 'Sudeep', 'Luxury Sedan', '4 Wheeler', 'Aston Martin DBS Superleggera'),
('1135', 'Rakshit Shetty', 'Luxury SUV', '4 Wheeler', 'Range Rover Sport'),
('1136', 'Rajkumar Rao', 'Sports Car', '4 Wheeler', 'Ferrari Portofino'),
('1137', 'Alia Bhatt', 'Luxury Sedan', '4 Wheeler', 'Porsche Panamera'),
('1138', 'Ranveer Singh', 'Luxury SUV', '4 Wheeler', 'Lamborghini Urus'),
('1139', 'Deepika Padukone', 'Sports Car', '4 Wheeler', 'Tesla Model S'),
('1140', 'Amitabh Bachchan', 'Luxury Sedan', '4 Wheeler', 'Bentley Continental GT'),
('1141', 'Ganesh Yuvraj', 'Scooter', '2 Wheeler', 'Activa 6G'),
('1142', 'Puneeth Raj', 'Sedan', '4 Wheeler', 'City'),
('1143', 'Upendra Rao', 'Motorcycle', '2 Wheeler', 'Pulsar 150'),
('1144', 'Sudeep Kumar', 'SUV', '4 Wheeler', 'XUV500'),
('1145', 'Yash Gowda', 'Cruiser', '2 Wheeler', 'Thunderbird'),
('1146', 'Radhika Pandit', 'Hatchback', '4 Wheeler', 'i20'),
('1147', 'Darshan Thoogudeep', 'Scooter', '2 Wheeler', 'Access 125'),
('1148', 'Rakshit Shetty', 'Sedan', '4 Wheeler', 'Verna'),
('1149', 'Shivarajkumar Rajkumar', 'Sports Bike', '2 Wheeler', 'Apache RR310'),
('1150', 'Rashmika Mandanna', 'SUV', '4 Wheeler', 'Creta'),
('1151', 'Kannada Chaluvali Vatal Paksha', 'SUV', '4 Wheeler', 'Endeavour'),
('1152', 'Vijay Suriya', 'Motorcycle', '2 Wheeler', 'Gixxer SF'),
('1153', 'Srinidhi Shetty', 'Scooter', '2 Wheeler', 'Jupiter'),
('1154', 'Yuzvendra Chahal', 'Luxury Sedan', '4 Wheeler', 'Audi A6'),
('1155', 'Sandeep Patil', 'Luxury SUV', '4 Wheeler', 'Volvo XC60'),
('1156', 'Kapil Dev Nikhanj', 'Sports Car', '4 Wheeler', 'Ferrari 488'),
('1157', 'Sachin Tendulkar', 'Luxury Sedan', '4 Wheeler', 'Mercedes-Benz E-Class'),
('1158', 'Sunil Gavaskar', 'Luxury SUV', '4 Wheeler', 'Range Rover Velar'),
('1159', 'Rahul Dravid', 'Luxury Sedan', '4 Wheeler', 'BMW 5 Series'),
('1160', 'Virat Kohli', 'Sports Car', '4 Wheeler', 'Lamborghini Huracan'),
('1161', 'MS Dhoni', 'Luxury SUV', '4 Wheeler', 'Toyota Fortuner'),
('1162', 'Rohit Sharma', 'Luxury Sedan', '4 Wheeler', 'Audi A8'),
('1163', 'Sourav Ganguly', 'Luxury SUV', '4 Wheeler', 'Land Rover Discovery'),
('1164', 'Sachin Ramesh Tendulkar', 'Sports Car', '4 Wheeler', 'Ferrari 812 Superfast'),
('1165', 'Chris Gayle', 'Luxury Sedan', '4 Wheeler', 'Jaguar XJ'),
('1166', 'AB de Villiers', 'Luxury SUV', '4 Wheeler', 'Volvo XC90'),
('1167', 'Kane Williamson', 'Sports Car', '4 Wheeler', 'Porsche 911'),
('1168', 'David Warner', 'Luxury Sedan', '4 Wheeler', 'Mercedes-Benz S-Class'),
('1169', 'Steve Smith', 'Luxury SUV', '4 Wheeler', 'BMW X5'),
('1170', 'Shahrukh Khan', 'Sports Car', '4 Wheeler', 'Bugatti Chiron'),
('1171', 'Yash', 'Luxury Sedan', '4 Wheeler', 'Rolls-Royce Ghost'),
('1172', 'Puneeth Rajkumar', 'Luxury SUV', '4 Wheeler', 'Bentley Bentayga'),
('1173', 'Darshan', 'Sports Car', '4 Wheeler', 'McLaren 720S'),
('1174', 'Sudeep', 'Luxury Sedan', '4 Wheeler', 'Aston Martin DBS Superleggera'),
('1175', 'Rakshit Shetty', 'Luxury SUV', '4 Wheeler', 'Range Rover Sport'),
('1176', 'Rajkumar Rao', 'Sports Car', '4 Wheeler', 'Ferrari Portofino'),
('1177', 'Alia Bhatt', 'Luxury Sedan', '4 Wheeler', 'Porsche Panamera'),
('1178', 'Ranveer Singh', 'Luxury SUV', '4 Wheeler', 'Lamborghini Urus'),
('1179', 'Deepika Padukone', 'Sports Car', '4 Wheeler', 'Tesla Model S'),
('1180', 'Amitabh Bachchan', 'Luxury Sedan', '4 Wheeler', 'Bentley Continental GT'),
('1181', 'Yogesh Master', 'Motorcycle', '2 Wheeler', 'Yamaha R15'),
('1182', 'Bhuvan Gandh', 'Scooter', '2 Wheeler', 'Jupiter Classic'),
('1183', 'Anand B', 'Motorcycle', '2 Wheeler', 'Royal Enfield Classic 350'),
('1184', 'Yogesh Patel', 'Sedan', '4 Wheeler', 'Honda City'),
('1185', 'Vikram Singh', 'SUV', '4 Wheeler', 'Ford Endeavour'),
('1186', 'Suresh Kumar', 'Hatchback', '4 Wheeler', 'Hyundai i20'),
('1187', 'Arjun Dev', 'Cruiser', '2 Wheeler', 'Royal Enfield Thunderbird'),
('1188', 'Vinod Kumar', 'Sedan', '4 Wheeler', 'Maruti Suzuki Dzire'),
('1189', 'Rahul Singh', 'SUV', '4 Wheeler', 'Mahindra XUV500'),
('1190', 'Sachin Sharma', 'Motorcycle', '2 Wheeler', 'Bajaj Pulsar 150'),
('1191', 'Alok Singh', 'Scooter', '2 Wheeler', 'TVS Jupiter'),
('1192', 'Vivek Singh', 'Sedan', '4 Wheeler', 'Toyota Corolla'),
('1193', 'Sachin Kumar', 'SUV', '4 Wheeler', 'Tata Harrier'),
('1194', 'Naveen Kumar', 'Hatchback', '4 Wheeler', 'Volkswagen Polo'),
('1195', 'Vikas Sharma', 'Cruiser', '2 Wheeler', 'Bajaj Avenger'),
('1196', 'Vikas Singh', 'Sedan', '4 Wheeler', 'Honda Civic'),
('1197', 'Praveen Kumar', 'SUV', '4 Wheeler', 'Renault Duster'),
('1198', 'Ramesh Sharma', 'Motorcycle', '2 Wheeler', 'Hero Splendor Plus'),
('1199', 'Ajay Kumar', 'Scooter', '2 Wheeler', 'Suzuki Access 125'),
('1200', 'Surya Pratap Singh', 'Sedan', '4 Wheeler', 'Volkswagen Vento');



-- --------------------------------------------------------

--
-- Table structure for table `violations_cost`
--

CREATE TABLE `violations_cost` (
  `violation_type` varchar(40) NOT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `violations_cost`
--

INSERT INTO `violations_cost` (`violation_type`, `amount`) VALUES
('Driving Rashly ', 1000),
('Drunk and Drive', 1000),
('jumping signal', 500),
('No license', 1000),
('no seatbelt', 1000),
('Not Wearing Helmet', 500),
('overspeed', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challan`
--
ALTER TABLE `challan`
  ADD PRIMARY KEY (`challan_id`),
  ADD KEY `violation_type` (`violation_type`),
  ADD KEY `pid` (`pid`),
  ADD KEY `vhno` (`vhno`);

--
-- Indexes for table `p_info`
--
ALTER TABLE `p_info`
  ADD PRIMARY KEY (`police_id`);

--
-- Indexes for table `vehicle_detail`
--
ALTER TABLE `vehicle_detail`
  ADD PRIMARY KEY (`vhno`);

--
-- Indexes for table `violations_cost`
--
ALTER TABLE `violations_cost`
  ADD PRIMARY KEY (`violation_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `challan`
--
ALTER TABLE `challan`
  MODIFY `challan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `p_info`
--
ALTER TABLE `p_info`
  MODIFY `police_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `challan`
--
ALTER TABLE `challan`
  ADD CONSTRAINT `challan_ibfk_1` FOREIGN KEY (`violation_type`) REFERENCES `violations_cost` (`violation_type`),
  ADD CONSTRAINT `challan_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `p_info` (`police_id`),
  ADD CONSTRAINT `challan_ibfk_3` FOREIGN KEY (`vhno`) REFERENCES `vehicle_detail` (`vhno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- Create the log table to store the log information
CREATE TABLE `log_table` (
  `log_id` INT AUTO_INCREMENT PRIMARY KEY,
  `challan_id` INT NOT NULL,
  `action` VARCHAR(10) NOT NULL,
  `action_time` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Delimiter for creating trigger
DELIMITER //

-- Create trigger for INSERT operation on challan table
CREATE TRIGGER after_challan_insert 
AFTER INSERT ON challan 
FOR EACH ROW
BEGIN
    INSERT INTO log_table (challan_id, action)
    VALUES (NEW.challan_id, 'INSERT');
END//

-- Delimiter for resetting the delimiter
DELIMITER ;


DELIMITER //

CREATE PROCEDURE GetVehicleOwnerDetails(IN vhno_param VARCHAR(30))
BEGIN
    DECLARE owner_name_val VARCHAR(30);
    DECLARE vehicle_make_val VARCHAR(20);
    DECLARE vehicle_model_val VARCHAR(30);

    SELECT v.vowner, v.vname, v.vmodel
    INTO owner_name_val, vehicle_make_val, vehicle_model_val
    FROM vehicle_detail v
    WHERE v.vhno = vhno_param;

    SELECT owner_name_val AS owner_name, vehicle_make_val AS vehicle_make, vehicle_model_val AS vehicle_model;
END//

DELIMITER ;


