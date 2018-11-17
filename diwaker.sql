-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 03:00 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diwaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_cl1_content`
--

CREATE TABLE `about_cl1_content` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `para` varchar(1024) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_cl1_content`
--

INSERT INTO `about_cl1_content` (`id`, `heading`, `para`, `date_time`, `status`) VALUES
(1, 'Vision', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', '', 1),
(2, 'Mission', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', '', 1),
(3, 'Goal', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', '', 1),
(4, 'Eaque ipsa quae ab illo', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_cl1_heading`
--

CREATE TABLE `about_cl1_heading` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_cl1_heading`
--

INSERT INTO `about_cl1_heading` (`id`, `heading`, `date_time`, `status`) VALUES
(1, 'Credentials', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_cl2_heading`
--

CREATE TABLE `about_cl2_heading` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_cl2_heading`
--

INSERT INTO `about_cl2_heading` (`id`, `heading`, `image`, `date_time`, `status`) VALUES
(1, ' ', './theme/backend/uploads/images/column2image-1529785542.png', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `about_statistics`
--

CREATE TABLE `about_statistics` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `para` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_statistics`
--

INSERT INTO `about_statistics` (`id`, `heading`, `para`, `image`, `date_time`, `status`) VALUES
(1, 'statistics', 'Meals Served', 'url(../images/banner-1.jpg) center fixed', '', 1),
(2, '256', 'Meals Served', '', '', 1),
(3, '256', 'Meals Served', '', '', 1),
(4, '256', 'Meals Served', '', '', 1),
(5, '256', 'Meals Served', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address`, `mail`, `contact`, `date_time`, `status`) VALUES
(1, 'Nehru Nagar Bhilai, Chhattisgarh (India) ', 'info@example.com', '9691078419', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `account_type`, `date_time`, `status`) VALUES
(1, 'admin', '$2y$10$.DbHFv7dZob621aBCxtzqeriQS6WB41Pv8TRvkvYsV8lPH/qiHQmS', 'Admin', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_side_nav`
--

CREATE TABLE `admin_side_nav` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_side_nav`
--

INSERT INTO `admin_side_nav` (`id`, `name`, `url`, `icon`, `date_time`, `status`) VALUES
(1, 'Dashboard', 'admin', 'fa fa-dashboard', '', 1),
(2, 'Home', 'admin/home', 'fa fa-folder', '', 1),
(3, 'About', 'admin/about', 'fa fa-laptop', '', 1),
(4, 'Services', 'admin/services', 'fa fa-pie-chart', '', 1),
(5, 'Gallery', 'admin/gallery', 'fa fa-table', '', 1),
(6, 'Contact', 'admin/contact', 'fa fa-edit', '', 0),
(7, 'Change Password', 'admin/change_password', 'fa fa-cog', '', 1),
(8, 'Team', 'admin/team', 'fa fa-user', '', 1),
(9, 'Subscribe', 'admin/subscribe', 'fa fa-envelope', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_bottom`
--

CREATE TABLE `banner_bottom` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `para` varchar(1024) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_bottom`
--

INSERT INTO `banner_bottom` (`id`, `heading`, `para`, `date_time`, `status`) VALUES
(1, 'Client 1', 'Review 1', '', 1),
(2, 'Client 2', 'Review 2', '', 1),
(3, 'Client 3', 'Review 3', '', 1),
(4, 'Client 4', 'Review 4', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner_quote`
--

CREATE TABLE `banner_quote` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `para` varchar(1024) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `date_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_quote`
--

INSERT INTO `banner_quote` (`id`, `heading`, `para`, `status`, `date_time`) VALUES
(1, 'Trending Plan 1', 'Description 1', 1, ''),
(2, 'Trending Plan 2', 'Description 2', 1, ''),
(3, 'Trending Plan 3', 'Description 3', 1, ''),
(4, 'Trending Plan 4', 'Description 4', 1, ''),
(5, 'Trending Plan 5', 'Description 5', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `company_email_id`
--

CREATE TABLE `company_email_id` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_email_id`
--

INSERT INTO `company_email_id` (`id`, `name`, `email`, `date_time`, `status`) VALUES
(1, 'Praveen', 'er.praveendewangan@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `heading`, `date_time`, `status`) VALUES
(1, '2018 ICE. All rights reserved', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `description`, `title`, `date_time`, `status`) VALUES
(1, './theme/backend/uploads/images/galleryimage-1529786429.png', '1Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '1corporate', '', 1),
(2, './theme/backend/uploads/images/galleryimage-1529678157.png', '2Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '2corporate', '', 1),
(3, './theme/backend/uploads/images/galleryimage-1529678141.png', '3Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '3corporate', '', 1),
(4, './theme/backend/uploads/images/galleryimage-1529678169.png', '4Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '4corporate', '', 1),
(5, './theme/backend/uploads/images/galleryimage-1529678181.png', '5Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '5corporate', '', 1),
(6, './theme/backend/uploads/images/galleryimage-1529678191.png', '6Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '6corporate', '', 1),
(7, './theme/backend/uploads/images/galleryimage-1529678201.png', '7Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '7corporate', '', 1),
(8, './theme/backend/uploads/images/galleryimage-1529678211.png', '8Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '8corporate', '', 1),
(9, './theme/backend/uploads/images/galleryimage-1529786460.png', '9Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '9corporate', '', 1),
(10, './theme/backend/uploads/images/galleryimage-1529678233.png', '10Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '10corporate', '', 1),
(11, './theme/backend/uploads/images/galleryimage-1529678255.png', '11Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '11corporate', '', 1),
(12, './theme/backend/uploads/images/galleryimage-1529678268.png', '12Nam libero tempore, cum soluta nobis est eligendi optio cumque.', '12corporate', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touch`
--

CREATE TABLE `get_in_touch` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_in_touch`
--

INSERT INTO `get_in_touch` (`id`, `heading`, `url`, `icon`, `date_time`, `status`) VALUES
(1, 'Follow us on social media', '', '', '', 1),
(2, 'facebook', 'facebook1', '', '', 1),
(3, 'twitter', 'twitter1', '', '', 1),
(4, 'instagram', 'instagram1', '', '', 1),
(5, 'pinterest', 'pinterest1', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_about1`
--

CREATE TABLE `home_about1` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_about1`
--

INSERT INTO `home_about1` (`id`, `heading`, `image`, `date_time`, `status`) VALUES
(1, 'Our Commitments', 'banner-1.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_about2`
--

CREATE TABLE `home_about2` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `para` varchar(1024) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_about2`
--

INSERT INTO `home_about2` (`id`, `heading`, `para`, `icon`, `date_time`, `status`) VALUES
(1, 'Values', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', 'glyphicon glyphicon-tree-deciduous', '', 1),
(2, 'Mission', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.', 'glyphicon glyphicon glyphicon-user', '', 1),
(3, 'Goal', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'glyphicon glyphicon-home', '', 1),
(4, 'Vision', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'glyphicon glyphicon-eye-open', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `sub_heading` varchar(255) NOT NULL,
  `para` varchar(1024) NOT NULL,
  `image` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`id`, `heading`, `sub_heading`, `para`, `image`, `date_time`, `status`) VALUES
(1, 'Service 1', '1There are many variations', '1There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', '', '', 1),
(2, 'Service 2', '2There are many variations', '2There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', '', '', 1),
(3, 'Service 3', '3There are many variations', '3There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.', '1.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`, `date_time`, `status`) VALUES
(1, './theme/backend/uploads/images/logoimage-1529782605.png', 'demo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `map` varchar(1024) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `map`, `date_time`, `status`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26063.984716162606!2d144.9228869850419!3d-37.8295573872697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0x5045675218ce7e0!2sMelbourne+VIC+3004%2C+Australia!5e1!3m2!1sen!2sin!4v1479988489554', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `keyword` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `keyword`, `date_time`, `status`) VALUES
(1, 'home', 'Home', '', 1),
(2, 'about', 'About', '', 1),
(3, 'services', 'Services', '', 1),
(4, 'gallery', 'Gallery', '', 1),
(5, 'contact', 'Contact us', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `description`, `date_time`, `status`) VALUES
(1, 'Subscribe to our News letter', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `image` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `pinterest` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `heading`, `description`, `image`, `facebook`, `twitter`, `instagram`, `pinterest`, `date_time`, `status`) VALUES
(1, 'OUR TEAM1', '', '', '', '', '', '', '', 1),
(2, 'SMITHY', 'Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur', './theme/backend/uploads/images/member1image-1529786747.png', 'fb1', 'tw1', 'ista1', 'pint1', '', 1),
(3, '2SMITHY', '2Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur', './theme/backend/uploads/images/member2image-1529786942.png', '2fb', '2tw', '2ista', '2pint', '', 1),
(4, '3SMITHY', '3Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur', './theme/backend/uploads/images/member3image-1529787150.png', '3fb', '3tw', '3ista', '3pint', '', 1),
(5, '4SMITHY', '4Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur', './theme/backend/uploads/images/member4image-1529787300.png', '4fb', '4tw', '4ista', '4pint', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `process_content`
--

CREATE TABLE `process_content` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `para` varchar(1024) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process_content`
--

INSERT INTO `process_content` (`id`, `image`, `heading`, `para`, `date_time`, `status`) VALUES
(1, './theme/backend/uploads/images/processimage-1529494503.png', 'Our Office', 'Follow simple steps to get associated with us', '', 1),
(2, '', 'Our Office', 'Follow simple steps to get associated with us', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services_content`
--

CREATE TABLE `services_content` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `para` varchar(1024) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_content`
--

INSERT INTO `services_content` (`id`, `heading`, `para`, `image`, `date_time`, `status`) VALUES
(1, '1Ipsum', '1Lorem ipsum dolor sit amet eiusmod tempor .', './theme/backend/uploads/images/serviceimage-1529785894.png', '', 1),
(2, '', '', './theme/backend/uploads/images/serviceimage-1529786040.png', '', 1),
(3, '3Ipsum', '3Lorem ipsum dolor sit amet eiusmod tempor .', './theme/backend/uploads/images/serviceimage-1529786232.png', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `date_time`, `status`) VALUES
(1, 'meet4g@gmail.com', '', 1),
(2, 'Email@gmail.com', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_cl1_content`
--
ALTER TABLE `about_cl1_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_cl1_heading`
--
ALTER TABLE `about_cl1_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_cl2_heading`
--
ALTER TABLE `about_cl2_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_statistics`
--
ALTER TABLE `about_statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_side_nav`
--
ALTER TABLE `admin_side_nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_bottom`
--
ALTER TABLE `banner_bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_quote`
--
ALTER TABLE `banner_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_email_id`
--
ALTER TABLE `company_email_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about1`
--
ALTER TABLE `home_about1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about2`
--
ALTER TABLE `home_about2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_content`
--
ALTER TABLE `process_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_content`
--
ALTER TABLE `services_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_cl1_content`
--
ALTER TABLE `about_cl1_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `about_cl1_heading`
--
ALTER TABLE `about_cl1_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_cl2_heading`
--
ALTER TABLE `about_cl2_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_statistics`
--
ALTER TABLE `about_statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_side_nav`
--
ALTER TABLE `admin_side_nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banner_bottom`
--
ALTER TABLE `banner_bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner_quote`
--
ALTER TABLE `banner_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_email_id`
--
ALTER TABLE `company_email_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_about1`
--
ALTER TABLE `home_about1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_about2`
--
ALTER TABLE `home_about2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `process_content`
--
ALTER TABLE `process_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services_content`
--
ALTER TABLE `services_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
