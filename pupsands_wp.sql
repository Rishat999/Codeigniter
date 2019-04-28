-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2018 at 12:41 AM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupsands_wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2018-11-01 06:44:26', '2018-11-01 06:44:26', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_newsletter`
--

CREATE TABLE `wp_newsletter` (
  `name` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `token` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `language` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `status` varchar(1) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'S',
  `id` int(11) NOT NULL,
  `profile` mediumtext COLLATE utf8mb4_unicode_520_ci,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` int(11) NOT NULL DEFAULT '0',
  `last_activity` int(11) NOT NULL DEFAULT '0',
  `followup_step` tinyint(4) NOT NULL DEFAULT '0',
  `followup_time` bigint(20) NOT NULL DEFAULT '0',
  `followup` tinyint(4) NOT NULL DEFAULT '0',
  `surname` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `sex` char(1) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'n',
  `feed_time` bigint(20) NOT NULL DEFAULT '0',
  `feed` tinyint(4) NOT NULL DEFAULT '0',
  `referrer` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `ip` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `wp_user_id` int(11) NOT NULL DEFAULT '0',
  `http_referer` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `country` varchar(4) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `region` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `city` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `bounce_type` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `bounce_time` int(11) NOT NULL DEFAULT '0',
  `unsub_email_id` int(11) NOT NULL DEFAULT '0',
  `unsub_time` int(11) NOT NULL DEFAULT '0',
  `list_1` tinyint(4) NOT NULL DEFAULT '0',
  `list_2` tinyint(4) NOT NULL DEFAULT '0',
  `list_3` tinyint(4) NOT NULL DEFAULT '0',
  `list_4` tinyint(4) NOT NULL DEFAULT '0',
  `list_5` tinyint(4) NOT NULL DEFAULT '0',
  `list_6` tinyint(4) NOT NULL DEFAULT '0',
  `list_7` tinyint(4) NOT NULL DEFAULT '0',
  `list_8` tinyint(4) NOT NULL DEFAULT '0',
  `list_9` tinyint(4) NOT NULL DEFAULT '0',
  `list_10` tinyint(4) NOT NULL DEFAULT '0',
  `list_11` tinyint(4) NOT NULL DEFAULT '0',
  `list_12` tinyint(4) NOT NULL DEFAULT '0',
  `list_13` tinyint(4) NOT NULL DEFAULT '0',
  `list_14` tinyint(4) NOT NULL DEFAULT '0',
  `list_15` tinyint(4) NOT NULL DEFAULT '0',
  `list_16` tinyint(4) NOT NULL DEFAULT '0',
  `list_17` tinyint(4) NOT NULL DEFAULT '0',
  `list_18` tinyint(4) NOT NULL DEFAULT '0',
  `list_19` tinyint(4) NOT NULL DEFAULT '0',
  `list_20` tinyint(4) NOT NULL DEFAULT '0',
  `list_21` tinyint(4) NOT NULL DEFAULT '0',
  `list_22` tinyint(4) NOT NULL DEFAULT '0',
  `list_23` tinyint(4) NOT NULL DEFAULT '0',
  `list_24` tinyint(4) NOT NULL DEFAULT '0',
  `list_25` tinyint(4) NOT NULL DEFAULT '0',
  `list_26` tinyint(4) NOT NULL DEFAULT '0',
  `list_27` tinyint(4) NOT NULL DEFAULT '0',
  `list_28` tinyint(4) NOT NULL DEFAULT '0',
  `list_29` tinyint(4) NOT NULL DEFAULT '0',
  `list_30` tinyint(4) NOT NULL DEFAULT '0',
  `list_31` tinyint(4) NOT NULL DEFAULT '0',
  `list_32` tinyint(4) NOT NULL DEFAULT '0',
  `list_33` tinyint(4) NOT NULL DEFAULT '0',
  `list_34` tinyint(4) NOT NULL DEFAULT '0',
  `list_35` tinyint(4) NOT NULL DEFAULT '0',
  `list_36` tinyint(4) NOT NULL DEFAULT '0',
  `list_37` tinyint(4) NOT NULL DEFAULT '0',
  `list_38` tinyint(4) NOT NULL DEFAULT '0',
  `list_39` tinyint(4) NOT NULL DEFAULT '0',
  `list_40` tinyint(4) NOT NULL DEFAULT '0',
  `profile_1` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_2` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_3` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_4` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_5` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_6` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_7` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_8` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_9` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_10` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_11` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_12` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_13` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_14` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_15` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_16` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_17` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_18` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_19` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `profile_20` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `test` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_newsletter`
--

INSERT INTO `wp_newsletter` (`name`, `email`, `token`, `language`, `status`, `id`, `profile`, `created`, `updated`, `last_activity`, `followup_step`, `followup_time`, `followup`, `surname`, `sex`, `feed_time`, `feed`, `referrer`, `ip`, `wp_user_id`, `http_referer`, `country`, `region`, `city`, `bounce_type`, `bounce_time`, `unsub_email_id`, `unsub_time`, `list_1`, `list_2`, `list_3`, `list_4`, `list_5`, `list_6`, `list_7`, `list_8`, `list_9`, `list_10`, `list_11`, `list_12`, `list_13`, `list_14`, `list_15`, `list_16`, `list_17`, `list_18`, `list_19`, `list_20`, `list_21`, `list_22`, `list_23`, `list_24`, `list_25`, `list_26`, `list_27`, `list_28`, `list_29`, `list_30`, `list_31`, `list_32`, `list_33`, `list_34`, `list_35`, `list_36`, `list_37`, `list_38`, `list_39`, `list_40`, `profile_1`, `profile_2`, `profile_3`, `profile_4`, `profile_5`, `profile_6`, `profile_7`, `profile_8`, `profile_9`, `profile_10`, `profile_11`, `profile_12`, `profile_13`, `profile_14`, `profile_15`, `profile_16`, `profile_17`, `profile_18`, `profile_19`, `profile_20`, `test`) VALUES
('', 'aftab.litongroupinc@gmail.com', '4e8ed1c383', '', 'C', 1, NULL, '2018-11-20 06:43:29', 1542696209, 0, 0, 0, 0, '', 'n', 0, 0, 'page', '103.218.236.131', 0, 'https://pupsandstud.com/', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('', 'htchouasi@gmail.com', 'b8704d489e', '', 'C', 2, NULL, '2018-11-20 08:48:55', 1542703735, 0, 0, 0, 0, '', 'n', 0, 0, 'page', '107.193.132.78', 0, 'https://pupsandstud.com/contact-us.php', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
('', 'stephen19930727@gmail.com', '0c5063a23f', '', 'C', 3, NULL, '2018-11-21 20:39:08', 1542832748, 0, 0, 0, 0, '', 'n', 0, 0, 'page', '217.74.121.234', 0, 'https://pupsandstud.com/stud-profile.php?stud=76', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_newsletter_emails`
--

CREATE TABLE `wp_newsletter_emails` (
  `id` int(11) NOT NULL,
  `language` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `subject` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `message` longtext COLLATE utf8mb4_unicode_520_ci,
  `subject2` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `message2` longtext COLLATE utf8mb4_unicode_520_ci,
  `name2` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('new','sending','sent','paused') COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'new',
  `total` int(11) NOT NULL DEFAULT '0',
  `last_id` int(11) NOT NULL DEFAULT '0',
  `sent` int(11) NOT NULL DEFAULT '0',
  `track` int(11) NOT NULL DEFAULT '0',
  `list` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `query` longtext COLLATE utf8mb4_unicode_520_ci,
  `editor` tinyint(4) NOT NULL DEFAULT '0',
  `sex` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `theme` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `message_text` longtext COLLATE utf8mb4_unicode_520_ci,
  `preferences` longtext COLLATE utf8mb4_unicode_520_ci,
  `send_on` int(11) NOT NULL DEFAULT '0',
  `token` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `options` longtext COLLATE utf8mb4_unicode_520_ci,
  `private` tinyint(1) NOT NULL DEFAULT '0',
  `click_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `version` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `open_count` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_newsletter_sent`
--

CREATE TABLE `wp_newsletter_sent` (
  `email_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `open` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `time` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `error` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `ip` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_newsletter_stats`
--

CREATE TABLE `wp_newsletter_stats` (
  `id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `email_id` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '0',
  `link_id` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `country` varchar(4) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_newsletter_user_logs`
--

CREATE TABLE `wp_newsletter_user_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `source` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `data` longtext COLLATE utf8mb4_unicode_520_ci,
  `created` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_newsletter_user_logs`
--

INSERT INTO `wp_newsletter_user_logs` (`id`, `user_id`, `ip`, `source`, `data`, `created`) VALUES
(1, 1, '103.218.236.131', 'subscribe', '{\"status\":\"C\"}', 1542696209),
(2, 2, '107.193.132.78', 'subscribe', '{\"status\":\"C\"}', 1542703735),
(3, 3, '217.74.121.234', 'subscribe', '{\"status\":\"C\"}', 1542832748);

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://pupsandstud.com/blog', 'yes'),
(2, 'home', 'http://pupsandstud.com/blog', 'yes'),
(3, 'blogname', 'Pups and Stud | Blog', 'yes'),
(4, 'blogdescription', 'Just another WordPress site\n', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'htchouasi@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:86:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:4:{i:0;s:32:\"disqus-comment-system/disqus.php\";i:1;s:21:\"newsletter/plugin.php\";i:2;s:75:\"recent-posts-widget-with-thumbnails/recent-posts-widget-with-thumbnails.php\";i:3;s:45:\"user-submitted-posts/user-submitted-posts.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'PupsStud', 'yes'),
(41, 'stylesheet', 'PupsStud', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '38590', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '1', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'posts', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:0:{}', 'yes'),
(80, 'widget_rss', 'a:0:{}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '0', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '0', 'yes'),
(93, 'initial_db_version', '38590', 'yes'),
(94, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(95, 'fresh_site', '0', 'yes'),
(96, 'widget_search', 'a:3:{i:2;a:1:{s:5:\"title\";s:0:\"\";}i:3;a:1:{s:5:\"title\";s:6:\"Search\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(97, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'sidebars_widgets', 'a:8:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:2:{i:0;s:8:\"search-3\";i:1;s:37:\"recent-posts-widget-with-thumbnails-2\";}s:9:\"sidebar-3\";a:0:{}s:9:\"sidebar-4\";a:0:{}s:9:\"sidebar-5\";a:0:{}s:9:\"sidebar-6\";a:0:{}s:13:\"array_version\";i:3;}', 'yes'),
(147, 'recently_activated', 'a:0:{}', 'yes'),
(2694, '_site_transient_timeout_theme_roots', '1544303818', 'no'),
(2695, '_site_transient_theme_roots', 'a:4:{s:8:\"PupsStud\";s:7:\"/themes\";s:13:\"twentyfifteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:13:\"twentysixteen\";s:7:\"/themes\";}', 'no'),
(2696, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1544302019;s:7:\"checked\";a:4:{s:8:\"PupsStud\";s:3:\"1.3\";s:13:\"twentyfifteen\";s:3:\"2.0\";s:15:\"twentyseventeen\";s:3:\"1.7\";s:13:\"twentysixteen\";s:3:\"1.5\";}s:8:\"response\";a:3:{s:13:\"twentyfifteen\";a:4:{s:5:\"theme\";s:13:\"twentyfifteen\";s:11:\"new_version\";s:3:\"2.1\";s:3:\"url\";s:43:\"https://wordpress.org/themes/twentyfifteen/\";s:7:\"package\";s:59:\"https://downloads.wordpress.org/theme/twentyfifteen.2.1.zip\";}s:15:\"twentyseventeen\";a:4:{s:5:\"theme\";s:15:\"twentyseventeen\";s:11:\"new_version\";s:3:\"1.8\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentyseventeen/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentyseventeen.1.8.zip\";}s:13:\"twentysixteen\";a:4:{s:5:\"theme\";s:13:\"twentysixteen\";s:11:\"new_version\";s:3:\"1.6\";s:3:\"url\";s:43:\"https://wordpress.org/themes/twentysixteen/\";s:7:\"package\";s:59:\"https://downloads.wordpress.org/theme/twentysixteen.1.6.zip\";}}s:12:\"translations\";a:0:{}}', 'no'),
(2697, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1544302019;s:7:\"checked\";a:5:{s:32:\"disqus-comment-system/disqus.php\";s:6:\"3.0.16\";s:21:\"newsletter/plugin.php\";s:5:\"5.7.8\";s:75:\"recent-posts-widget-with-thumbnails/recent-posts-widget-with-thumbnails.php\";s:5:\"6.2.1\";s:45:\"user-submitted-posts/user-submitted-posts.php\";s:8:\"20180822\";s:25:\"wp-user-frontend/wpuf.php\";s:5:\"2.9.3\";}s:8:\"response\";a:4:{s:21:\"newsletter/plugin.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:24:\"w.org/plugins/newsletter\";s:4:\"slug\";s:10:\"newsletter\";s:6:\"plugin\";s:21:\"newsletter/plugin.php\";s:11:\"new_version\";s:5:\"5.8.2\";s:3:\"url\";s:41:\"https://wordpress.org/plugins/newsletter/\";s:7:\"package\";s:59:\"https://downloads.wordpress.org/plugin/newsletter.5.8.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/newsletter/assets/icon-256x256.png?rev=1052028\";s:2:\"1x\";s:63:\"https://ps.w.org/newsletter/assets/icon-128x128.png?rev=1160467\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:66:\"https://ps.w.org/newsletter/assets/banner-1544x500.png?rev=1052027\";s:2:\"1x\";s:65:\"https://ps.w.org/newsletter/assets/banner-772x250.png?rev=1052027\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.0.0\";s:12:\"requires_php\";b:0;s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:75:\"recent-posts-widget-with-thumbnails/recent-posts-widget-with-thumbnails.php\";O:8:\"stdClass\":13:{s:2:\"id\";s:49:\"w.org/plugins/recent-posts-widget-with-thumbnails\";s:4:\"slug\";s:35:\"recent-posts-widget-with-thumbnails\";s:6:\"plugin\";s:75:\"recent-posts-widget-with-thumbnails/recent-posts-widget-with-thumbnails.php\";s:11:\"new_version\";s:5:\"6.4.0\";s:3:\"url\";s:66:\"https://wordpress.org/plugins/recent-posts-widget-with-thumbnails/\";s:7:\"package\";s:84:\"https://downloads.wordpress.org/plugin/recent-posts-widget-with-thumbnails.6.4.0.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:88:\"https://ps.w.org/recent-posts-widget-with-thumbnails/assets/icon-256x256.png?rev=1063492\";s:2:\"1x\";s:88:\"https://ps.w.org/recent-posts-widget-with-thumbnails/assets/icon-128x128.png?rev=1063492\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:91:\"https://ps.w.org/recent-posts-widget-with-thumbnails/assets/banner-1544x500.png?rev=1063492\";s:2:\"1x\";s:90:\"https://ps.w.org/recent-posts-widget-with-thumbnails/assets/banner-772x250.png?rev=1063492\";}s:11:\"banners_rtl\";a:0:{}s:14:\"upgrade_notice\";s:107:\"<p>Added option to omit CSS generation, moved option for CSS class names to section Additional settings</p>\";s:6:\"tested\";s:5:\"4.9.8\";s:12:\"requires_php\";s:3:\"5.2\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:45:\"user-submitted-posts/user-submitted-posts.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:34:\"w.org/plugins/user-submitted-posts\";s:4:\"slug\";s:20:\"user-submitted-posts\";s:6:\"plugin\";s:45:\"user-submitted-posts/user-submitted-posts.php\";s:11:\"new_version\";s:8:\"20181117\";s:3:\"url\";s:51:\"https://wordpress.org/plugins/user-submitted-posts/\";s:7:\"package\";s:72:\"https://downloads.wordpress.org/plugin/user-submitted-posts.20181117.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:73:\"https://ps.w.org/user-submitted-posts/assets/icon-256x256.png?rev=1475972\";s:2:\"1x\";s:73:\"https://ps.w.org/user-submitted-posts/assets/icon-128x128.png?rev=1475972\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:76:\"https://ps.w.org/user-submitted-posts/assets/banner-1544x500.jpg?rev=1392443\";s:2:\"1x\";s:75:\"https://ps.w.org/user-submitted-posts/assets/banner-772x250.jpg?rev=1392443\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:3:\"5.0\";s:12:\"requires_php\";s:3:\"5.2\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:25:\"wp-user-frontend/wpuf.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:30:\"w.org/plugins/wp-user-frontend\";s:4:\"slug\";s:16:\"wp-user-frontend\";s:6:\"plugin\";s:25:\"wp-user-frontend/wpuf.php\";s:11:\"new_version\";s:5:\"3.0.1\";s:3:\"url\";s:47:\"https://wordpress.org/plugins/wp-user-frontend/\";s:7:\"package\";s:59:\"https://downloads.wordpress.org/plugin/wp-user-frontend.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:69:\"https://ps.w.org/wp-user-frontend/assets/icon-256x256.png?rev=1458010\";s:2:\"1x\";s:69:\"https://ps.w.org/wp-user-frontend/assets/icon-128x128.png?rev=1458010\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:72:\"https://ps.w.org/wp-user-frontend/assets/banner-1544x500.png?rev=1627560\";s:2:\"1x\";s:71:\"https://ps.w.org/wp-user-frontend/assets/banner-772x250.png?rev=1627560\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"4.9.8\";s:12:\"requires_php\";s:3:\"5.4\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:1:{s:32:\"disqus-comment-system/disqus.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:35:\"w.org/plugins/disqus-comment-system\";s:4:\"slug\";s:21:\"disqus-comment-system\";s:6:\"plugin\";s:32:\"disqus-comment-system/disqus.php\";s:11:\"new_version\";s:6:\"3.0.16\";s:3:\"url\";s:52:\"https://wordpress.org/plugins/disqus-comment-system/\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/plugin/disqus-comment-system.3.0.16.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:74:\"https://ps.w.org/disqus-comment-system/assets/icon-256x256.png?rev=1012448\";s:2:\"1x\";s:66:\"https://ps.w.org/disqus-comment-system/assets/icon.svg?rev=1636350\";s:3:\"svg\";s:66:\"https://ps.w.org/disqus-comment-system/assets/icon.svg?rev=1636350\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:76:\"https://ps.w.org/disqus-comment-system/assets/banner-772x250.png?rev=1636350\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(1589, '_transient_timeout_feed_d117b5738fbd35bd8c0391cda1f2b5d9', '1543202525', 'no'),
(133, 'can_compress_scripts', '1', 'no'),
(146, 'frontend_uploader_settings', 'a:14:{s:25:\"enable_akismet_protection\";s:3:\"off\";s:27:\"enable_recaptcha_protection\";s:2:\"on\";s:18:\"recaptcha_site_key\";s:0:\"\";s:20:\"recaptcha_secret_key\";s:0:\"\";s:12:\"notify_admin\";s:2:\"on\";s:23:\"admin_notification_text\";s:131:\"Someone uploaded a new UGC file, please moderate at: https://pupsandstud.com/blog/wp-admin/upload.php?page=manage_frontend_uploader\";s:18:\"notification_email\";s:0:\"\";s:11:\"show_author\";s:3:\"off\";s:18:\"enabled_post_types\";a:1:{s:4:\"post\";s:4:\"post\";}s:15:\"wysiwyg_enabled\";s:2:\"on\";s:23:\"auto_approve_user_files\";s:3:\"off\";s:22:\"auto_approve_any_files\";s:3:\"off\";s:19:\"obfuscate_file_name\";s:3:\"off\";s:23:\"suppress_default_fields\";s:3:\"off\";}', 'yes'),
(135, 'current_theme', 'Pups and Stud', 'yes'),
(136, 'theme_mods_PupsStud', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(137, 'theme_switched', '', 'yes'),
(158, 'usp_options', 'a:70:{s:11:\"usp_version\";i:20180822;s:8:\"usp_name\";s:4:\"show\";s:9:\"usp_email\";s:4:\"optn\";s:7:\"usp_url\";s:4:\"optn\";s:9:\"usp_title\";s:4:\"show\";s:8:\"usp_tags\";s:4:\"optn\";s:12:\"usp_category\";s:4:\"optn\";s:11:\"usp_content\";s:4:\"show\";s:12:\"custom_field\";s:4:\"hide\";s:11:\"usp_captcha\";s:4:\"show\";s:13:\"usp_recaptcha\";s:4:\"hide\";s:10:\"usp_images\";s:4:\"show\";s:16:\"usp_form_version\";s:7:\"current\";s:14:\"usp_include_js\";i:1;s:15:\"usp_display_url\";s:0:\"\";s:13:\"usp_post_type\";s:4:\"post\";s:15:\"number-approved\";i:-1;s:12:\"redirect-url\";s:0:\"\";s:15:\"success-message\";s:39:\"Success! Thank you for your submission.\";s:13:\"error-message\";s:116:\"There was an error. Please ensure that you have added a title, some content, and that you have uploaded only images.\";s:16:\"usp_form_content\";s:0:\"\";s:20:\"custom_checkbox_name\";s:19:\"usp_custom_checkbox\";s:19:\"custom_checkbox_err\";s:24:\"Custom checkbox required\";s:20:\"custom_checkbox_text\";s:25:\"I agree the to the terms.\";s:10:\"categories\";a:1:{i:0;s:1:\"1\";}s:14:\"usp_use_cat_id\";s:0:\"\";s:6:\"author\";s:1:\"1\";s:11:\"custom_name\";s:16:\"usp_custom_field\";s:12:\"custom_label\";s:12:\"Custom Field\";s:12:\"usp_question\";s:7:\"1 + 1 =\";s:12:\"usp_response\";s:1:\"2\";s:16:\"recaptcha_public\";s:0:\"\";s:17:\"recaptcha_private\";s:0:\"\";s:16:\"usp_email_alerts\";i:1;s:17:\"usp_email_address\";s:19:\"htchouasi@gmail.com\";s:14:\"usp_email_from\";s:19:\"htchouasi@gmail.com\";s:19:\"email_alert_subject\";s:0:\"\";s:19:\"email_alert_message\";s:0:\"\";s:14:\"upload-message\";s:38:\"Please select your image(s) to upload.\";s:15:\"usp_add_another\";s:0:\"\";s:10:\"min-images\";i:0;s:10:\"max-images\";i:1;s:15:\"min-image-width\";i:0;s:16:\"min-image-height\";i:0;s:15:\"max-image-width\";i:1500;s:16:\"max-image-height\";i:1500;s:19:\"auto_display_images\";s:7:\"disable\";s:17:\"auto_image_markup\";s:130:\"<a href=\"%%full%%\"><img src=\"%%thumb%%\" width=\"%%width%%\" height=\"%%height%%\" alt=\"%%title%%\" style=\"display:inline-block\" /></a> \";s:18:\"auto_display_email\";s:7:\"disable\";s:17:\"auto_email_markup\";s:43:\"<p><a href=\"mailto:%%email%%\">Email</a></p>\";s:16:\"auto_display_url\";s:7:\"disable\";s:15:\"auto_url_markup\";s:32:\"<p><a href=\"%%url%%\">URL</a></p>\";s:19:\"auto_display_custom\";s:7:\"disable\";s:18:\"auto_custom_markup\";s:60:\"<p>%%custom_label%% : %%custom_name%% : %%custom_value%%</p>\";s:13:\"version_alert\";i:0;s:15:\"default_options\";i:0;s:10:\"usp_casing\";i:0;s:14:\"usp_email_html\";i:0;s:14:\"usp_use_author\";i:0;s:11:\"usp_use_url\";i:0;s:11:\"usp_use_cat\";i:0;s:19:\"usp_richtext_editor\";i:0;s:19:\"usp_featured_images\";i:0;s:16:\"disable_required\";i:0;s:13:\"titles_unique\";i:0;s:17:\"enable_shortcodes\";i:0;s:19:\"disable_ip_tracking\";i:0;s:15:\"logged_in_users\";i:0;s:14:\"disable_author\";i:0;s:15:\"custom_checkbox\";i:0;}', 'yes'),
(116, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:2:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:7:\"upgrade\";s:8:\"download\";s:57:\"https://downloads.wordpress.org/release/wordpress-5.0.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:57:\"https://downloads.wordpress.org/release/wordpress-5.0.zip\";s:10:\"no_content\";s:68:\"https://downloads.wordpress.org/release/wordpress-5.0-no-content.zip\";s:11:\"new_bundled\";s:69:\"https://downloads.wordpress.org/release/wordpress-5.0-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:3:\"5.0\";s:7:\"version\";s:3:\"5.0\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.0\";s:15:\"partial_version\";s:0:\"\";}i:1;O:8:\"stdClass\":11:{s:8:\"response\";s:10:\"autoupdate\";s:8:\"download\";s:57:\"https://downloads.wordpress.org/release/wordpress-5.0.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:57:\"https://downloads.wordpress.org/release/wordpress-5.0.zip\";s:10:\"no_content\";s:68:\"https://downloads.wordpress.org/release/wordpress-5.0-no-content.zip\";s:11:\"new_bundled\";s:69:\"https://downloads.wordpress.org/release/wordpress-5.0-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:3:\"5.0\";s:7:\"version\";s:3:\"5.0\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.0\";s:15:\"partial_version\";s:0:\"\";s:9:\"new_files\";s:1:\"1\";}}s:12:\"last_checked\";i:1544302018;s:15:\"version_checked\";s:5:\"4.9.8\";s:12:\"translations\";a:0:{}}', 'no'),
(102, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'cron', 'a:7:{i:1544333674;a:1:{s:10:\"newsletter\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"newsletter\";s:4:\"args\";a:0:{}s:8:\"interval\";i:300;}}}i:1544334267;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1544337574;a:1:{s:29:\"newsletter_extension_versions\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1544337867;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1544337904;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1544339096;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(112, 'theme_mods_twentyseventeen', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1541055514;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}}', 'yes'),
(448, 'newsletter_subscription_version', '2.1.7', 'yes'),
(449, 'newsletter_unsubscription_first_install_time', '1542695944', 'no'),
(450, 'newsletter_unsubscription', 'a:6:{s:16:\"unsubscribe_text\";s:103:\"<p>Please confirm you want to unsubscribe <a href=\"{unsubscription_confirm_url}\">clicking here</a>.</p>\";s:10:\"error_text\";s:99:\"<p>Subscriber not found, it probably has already been removed. No further actions are required.</p>\";s:17:\"unsubscribed_text\";s:124:\"<p>Your subscription has been deleted. If that was an error you can <a href=\"{reactivate_url}\">subscribe again here</a>.</p>\";s:20:\"unsubscribed_subject\";s:7:\"Goodbye\";s:20:\"unsubscribed_message\";s:87:\"<p>This message confirms that you have unsubscribed from our newsletter. Thank you.</p>\";s:16:\"reactivated_text\";s:46:\"<p>Your subscription has been reactivated.</p>\";}', 'yes'),
(445, 'newsletter_subscription_lists', 'a:160:{s:6:\"list_1\";s:0:\"\";s:13:\"list_1_status\";i:0;s:14:\"list_1_checked\";i:0;s:13:\"list_1_forced\";i:0;s:6:\"list_2\";s:0:\"\";s:13:\"list_2_status\";i:0;s:14:\"list_2_checked\";i:0;s:13:\"list_2_forced\";i:0;s:6:\"list_3\";s:0:\"\";s:13:\"list_3_status\";i:0;s:14:\"list_3_checked\";i:0;s:13:\"list_3_forced\";i:0;s:6:\"list_4\";s:0:\"\";s:13:\"list_4_status\";i:0;s:14:\"list_4_checked\";i:0;s:13:\"list_4_forced\";i:0;s:6:\"list_5\";s:0:\"\";s:13:\"list_5_status\";i:0;s:14:\"list_5_checked\";i:0;s:13:\"list_5_forced\";i:0;s:6:\"list_6\";s:0:\"\";s:13:\"list_6_status\";i:0;s:14:\"list_6_checked\";i:0;s:13:\"list_6_forced\";i:0;s:6:\"list_7\";s:0:\"\";s:13:\"list_7_status\";i:0;s:14:\"list_7_checked\";i:0;s:13:\"list_7_forced\";i:0;s:6:\"list_8\";s:0:\"\";s:13:\"list_8_status\";i:0;s:14:\"list_8_checked\";i:0;s:13:\"list_8_forced\";i:0;s:6:\"list_9\";s:0:\"\";s:13:\"list_9_status\";i:0;s:14:\"list_9_checked\";i:0;s:13:\"list_9_forced\";i:0;s:7:\"list_10\";s:0:\"\";s:14:\"list_10_status\";i:0;s:15:\"list_10_checked\";i:0;s:14:\"list_10_forced\";i:0;s:7:\"list_11\";s:0:\"\";s:14:\"list_11_status\";i:0;s:15:\"list_11_checked\";i:0;s:14:\"list_11_forced\";i:0;s:7:\"list_12\";s:0:\"\";s:14:\"list_12_status\";i:0;s:15:\"list_12_checked\";i:0;s:14:\"list_12_forced\";i:0;s:7:\"list_13\";s:0:\"\";s:14:\"list_13_status\";i:0;s:15:\"list_13_checked\";i:0;s:14:\"list_13_forced\";i:0;s:7:\"list_14\";s:0:\"\";s:14:\"list_14_status\";i:0;s:15:\"list_14_checked\";i:0;s:14:\"list_14_forced\";i:0;s:7:\"list_15\";s:0:\"\";s:14:\"list_15_status\";i:0;s:15:\"list_15_checked\";i:0;s:14:\"list_15_forced\";i:0;s:7:\"list_16\";s:0:\"\";s:14:\"list_16_status\";i:0;s:15:\"list_16_checked\";i:0;s:14:\"list_16_forced\";i:0;s:7:\"list_17\";s:0:\"\";s:14:\"list_17_status\";i:0;s:15:\"list_17_checked\";i:0;s:14:\"list_17_forced\";i:0;s:7:\"list_18\";s:0:\"\";s:14:\"list_18_status\";i:0;s:15:\"list_18_checked\";i:0;s:14:\"list_18_forced\";i:0;s:7:\"list_19\";s:0:\"\";s:14:\"list_19_status\";i:0;s:15:\"list_19_checked\";i:0;s:14:\"list_19_forced\";i:0;s:7:\"list_20\";s:0:\"\";s:14:\"list_20_status\";i:0;s:15:\"list_20_checked\";i:0;s:14:\"list_20_forced\";i:0;s:7:\"list_21\";s:0:\"\";s:14:\"list_21_status\";i:0;s:15:\"list_21_checked\";i:0;s:14:\"list_21_forced\";i:0;s:7:\"list_22\";s:0:\"\";s:14:\"list_22_status\";i:0;s:15:\"list_22_checked\";i:0;s:14:\"list_22_forced\";i:0;s:7:\"list_23\";s:0:\"\";s:14:\"list_23_status\";i:0;s:15:\"list_23_checked\";i:0;s:14:\"list_23_forced\";i:0;s:7:\"list_24\";s:0:\"\";s:14:\"list_24_status\";i:0;s:15:\"list_24_checked\";i:0;s:14:\"list_24_forced\";i:0;s:7:\"list_25\";s:0:\"\";s:14:\"list_25_status\";i:0;s:15:\"list_25_checked\";i:0;s:14:\"list_25_forced\";i:0;s:7:\"list_26\";s:0:\"\";s:14:\"list_26_status\";i:0;s:15:\"list_26_checked\";i:0;s:14:\"list_26_forced\";i:0;s:7:\"list_27\";s:0:\"\";s:14:\"list_27_status\";i:0;s:15:\"list_27_checked\";i:0;s:14:\"list_27_forced\";i:0;s:7:\"list_28\";s:0:\"\";s:14:\"list_28_status\";i:0;s:15:\"list_28_checked\";i:0;s:14:\"list_28_forced\";i:0;s:7:\"list_29\";s:0:\"\";s:14:\"list_29_status\";i:0;s:15:\"list_29_checked\";i:0;s:14:\"list_29_forced\";i:0;s:7:\"list_30\";s:0:\"\";s:14:\"list_30_status\";i:0;s:15:\"list_30_checked\";i:0;s:14:\"list_30_forced\";i:0;s:7:\"list_31\";s:0:\"\";s:14:\"list_31_status\";i:0;s:15:\"list_31_checked\";i:0;s:14:\"list_31_forced\";i:0;s:7:\"list_32\";s:0:\"\";s:14:\"list_32_status\";i:0;s:15:\"list_32_checked\";i:0;s:14:\"list_32_forced\";i:0;s:7:\"list_33\";s:0:\"\";s:14:\"list_33_status\";i:0;s:15:\"list_33_checked\";i:0;s:14:\"list_33_forced\";i:0;s:7:\"list_34\";s:0:\"\";s:14:\"list_34_status\";i:0;s:15:\"list_34_checked\";i:0;s:14:\"list_34_forced\";i:0;s:7:\"list_35\";s:0:\"\";s:14:\"list_35_status\";i:0;s:15:\"list_35_checked\";i:0;s:14:\"list_35_forced\";i:0;s:7:\"list_36\";s:0:\"\";s:14:\"list_36_status\";i:0;s:15:\"list_36_checked\";i:0;s:14:\"list_36_forced\";i:0;s:7:\"list_37\";s:0:\"\";s:14:\"list_37_status\";i:0;s:15:\"list_37_checked\";i:0;s:14:\"list_37_forced\";i:0;s:7:\"list_38\";s:0:\"\";s:14:\"list_38_status\";i:0;s:15:\"list_38_checked\";i:0;s:14:\"list_38_forced\";i:0;s:7:\"list_39\";s:0:\"\";s:14:\"list_39_status\";i:0;s:15:\"list_39_checked\";i:0;s:14:\"list_39_forced\";i:0;s:7:\"list_40\";s:0:\"\";s:14:\"list_40_status\";i:0;s:15:\"list_40_checked\";i:0;s:14:\"list_40_forced\";i:0;}', 'yes'),
(275, 'category_children', 'a:0:{}', 'yes'),
(318, 'disqus_forum_url', 'pupsandstud-com', 'yes'),
(319, 'disqus_public_key', '1tHfOQTY6DfNlbKF2n1K0MrPlghfOevPsTcisqw8dWbfN8ZxcJ9BjWvwJzuLxzqQ', 'yes'),
(320, 'disqus_secret_key', 'LAIBK8BAaYSZZKjCduvoTHxXhfP6X8LOc3V73JUHMnisblU6SVmoz4KtxuoFCOjP', 'yes'),
(321, 'disqus_admin_access_token', '881ec21fe31545c5872f68c8c0cbbab2', 'yes'),
(169, 'widget_recent-posts-widget-with-thumbnails', 'a:2:{i:2;a:31:{s:5:\"title\";s:12:\"Latest Blogs\";s:11:\"default_url\";s:101:\"https://pupsandstud.com/blog/wp-content/plugins/recent-posts-widget-with-thumbnails/default_thumb.gif\";s:16:\"thumb_dimensions\";s:6:\"custom\";s:12:\"category_ids\";a:1:{i:0;i:0;}s:14:\"excerpt_length\";i:55;s:12:\"number_posts\";i:5;s:17:\"post_title_length\";i:1000;s:12:\"thumb_height\";i:75;s:11:\"thumb_width\";i:75;s:17:\"hide_current_post\";b:0;s:17:\"hide_sticky_posts\";b:0;s:10:\"hide_title\";b:0;s:17:\"keep_aspect_ratio\";b:0;s:11:\"keep_sticky\";b:0;s:12:\"only_1st_img\";b:0;s:12:\"random_order\";b:1;s:11:\"show_author\";b:1;s:15:\"show_categories\";b:1;s:20:\"show_comments_number\";b:0;s:9:\"show_date\";b:1;s:12:\"show_excerpt\";b:0;s:14:\"ignore_excerpt\";b:0;s:16:\"set_more_as_link\";b:0;s:11:\"try_1st_img\";b:0;s:11:\"use_default\";b:0;s:15:\"open_new_window\";b:0;s:21:\"print_post_categories\";b:0;s:17:\"set_cats_as_links\";b:0;s:10:\"show_thumb\";b:1;s:12:\"excerpt_more\";s:6:\" […]\";s:14:\"category_label\";s:2:\"In\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(315, 'disqus_sync_token', '5ae0447c55fe6c208cd9934cf7ceccf0', 'yes'),
(436, 'newsletter_logger_secret', '70dedae3', 'yes'),
(438, 'newsletter_main_first_install_time', '1542695944', 'no'),
(439, 'newsletter_main', 'a:33:{s:11:\"return_path\";b:0;s:8:\"reply_to\";b:0;s:12:\"sender_email\";s:19:\"ask@pupsandstud.com\";s:11:\"sender_name\";s:20:\"Pups and Stud | Blog\";s:6:\"editor\";s:1:\"0\";s:13:\"scheduler_max\";s:3:\"100\";s:9:\"phpmailer\";s:1:\"0\";s:5:\"debug\";s:1:\"0\";s:5:\"track\";s:1:\"1\";s:3:\"css\";s:0:\"\";s:12:\"css_disabled\";s:1:\"0\";s:2:\"ip\";s:0:\"\";s:4:\"page\";s:2:\"33\";s:19:\"disable_cron_notice\";i:0;s:11:\"header_logo\";s:0:\"\";s:12:\"header_title\";s:20:\"Pups and Stud | Blog\";s:10:\"header_sub\";s:28:\"Just another WordPress site\n\";s:12:\"footer_title\";s:0:\"\";s:14:\"footer_contact\";s:0:\"\";s:12:\"footer_legal\";s:0:\"\";s:12:\"facebook_url\";s:0:\"\";s:11:\"twitter_url\";s:0:\"\";s:13:\"instagram_url\";s:0:\"\";s:14:\"googleplus_url\";s:0:\"\";s:13:\"pinterest_url\";s:0:\"\";s:12:\"linkedin_url\";s:0:\"\";s:10:\"tumblr_url\";s:0:\"\";s:11:\"youtube_url\";s:0:\"\";s:9:\"vimeo_url\";s:0:\"\";s:14:\"soundcloud_url\";s:0:\"\";s:12:\"contract_key\";s:0:\"\";s:9:\"log_level\";s:1:\"0\";s:25:\"content_transfer_encoding\";s:0:\"\";}', 'yes'),
(440, 'newsletter_main_info', 'a:16:{s:11:\"header_logo\";a:1:{s:2:\"id\";i:0;}s:12:\"header_title\";s:20:\"Pups and Stud | Blog\";s:10:\"header_sub\";s:28:\"Just another WordPress site\n\";s:12:\"footer_title\";s:0:\"\";s:14:\"footer_contact\";s:0:\"\";s:12:\"footer_legal\";s:0:\"\";s:12:\"facebook_url\";s:0:\"\";s:11:\"twitter_url\";s:0:\"\";s:13:\"instagram_url\";s:0:\"\";s:14:\"googleplus_url\";s:0:\"\";s:13:\"pinterest_url\";s:0:\"\";s:12:\"linkedin_url\";s:0:\"\";s:10:\"tumblr_url\";s:0:\"\";s:11:\"youtube_url\";s:0:\"\";s:9:\"vimeo_url\";s:0:\"\";s:14:\"soundcloud_url\";s:0:\"\";}', 'yes'),
(441, 'newsletter_main_smtp', 'a:7:{s:7:\"enabled\";i:0;s:4:\"host\";s:0:\"\";s:4:\"user\";s:0:\"\";s:4:\"pass\";s:0:\"\";s:4:\"port\";i:25;s:6:\"secure\";s:0:\"\";s:12:\"ssl_insecure\";i:0;}', 'yes'),
(442, 'newsletter_main_version', '1.5.0', 'yes'),
(443, 'newsletter_subscription_first_install_time', '1542695944', 'no'),
(444, 'newsletter', 'a:17:{s:14:\"noconfirmation\";s:1:\"1\";s:14:\"optin_override\";s:1:\"0\";s:8:\"multiple\";s:1:\"1\";s:6:\"notify\";s:1:\"1\";s:12:\"notify_email\";s:19:\"ask@pupsandstud.com\";s:17:\"subscription_text\";s:26:\"<p>{subscription_form}</p>\";s:10:\"error_text\";s:102:\"<p>You cannot subscribe with the email address you entered, please contact the site administrator.</p>\";s:17:\"confirmation_text\";s:104:\"<p>A confirmation email is on the way. Follow the instructions and check the spam folder. Thank you.</p>\";s:16:\"confirmation_url\";s:0:\"\";s:20:\"confirmation_subject\";s:32:\"Please confirm your subscription\";s:20:\"confirmation_message\";s:94:\"<p>Please confirm your subscription <a href=\"{subscription_confirm_url}\">clicking here</a></p>\";s:14:\"confirmed_text\";s:43:\"<p>Your subscription has been confirmed</p>\";s:13:\"confirmed_url\";s:0:\"\";s:18:\"confirmed_tracking\";s:0:\"\";s:18:\"confirmed_disabled\";s:1:\"0\";s:17:\"confirmed_subject\";s:7:\"Welcome\";s:17:\"confirmed_message\";s:140:\"<p>This message confirms your subscription to our newsletter. Thank you!</p>\r\n<hr />\r\n<p><a href=\"{profile_url}\">Change your profile</a></p>\";}', 'yes'),
(451, 'newsletter_unsubscription_version', '1.0.0', 'yes'),
(446, 'newsletter_subscription_template', 'a:1:{s:8:\"template\";s:2359:\"<!DOCTYPE html>\n<html>\n    <head>\n        <!-- General styles, not used by all email clients -->\n        <style type=\"text/css\" media=\"all\">\n            a {\n                text-decoration: none;\n                color: #0088cc;\n            }\n            hr {\n                border-top: 1px solid #999;\n            }\n        </style>\n    </head>\n\n    <!-- KEEP THE LAYOUT SIMPLE: THOSE ARE SERVICE MESSAGES. -->\n    <body style=\"margin: 0; padding: 0;\">\n\n        <!-- Top title with dark background -->\n        <table style=\"background-color: #444; width: 100%;\" cellspacing=\"0\" cellpadding=\"0\">\n            <tr>\n                <td style=\"padding: 20px; text-align: center; font-family: sans-serif; color: #fff; font-size: 28px\">\n                    {blog_title}\n                </td>\n            </tr>\n        </table>\n\n        <!-- Main table 100% wide with background color #eee -->    \n        <table style=\"background-color: #eee; width: 100%;\">\n            <tr>\n                <td align=\"center\" style=\"padding: 15px;\">\n\n                    <!-- Content table with backgdound color #fff, width 500px -->\n                    <table style=\"background-color: #fff; max-width: 600px; width: 100%; border: 1px solid #ddd;\">\n                        <tr>\n                            <td style=\"padding: 15px; color: #333; font-size: 16px; font-family: sans-serif\">\n                                <!-- The {message} tag is replaced with one of confirmation, welcome or goodbye messages -->\n                                <!-- Messages content can be configured on Newsletter List Building panels --> \n\n                                {message}\n\n                                <hr>\n                                <!-- Signature if not already added to single messages (surround with <p>) -->\n                                <p>\n                                    <small>\n                                        <a href=\"{blog_url}\">{blog_url}</a><br>\n                                        {company_name}<br>\n                                        {company_address}\n                                    </small>\n                                </p>\n                                \n\n                            </td>\n                        </tr>\n                    </table>\n\n                </td>\n            </tr>\n        </table>\n\n    </body>\n</html>\";}', 'yes');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(447, 'newsletter_profile', 'a:183:{s:5:\"email\";s:5:\"Email\";s:11:\"email_error\";s:28:\"Email address is not correct\";s:4:\"name\";s:23:\"First name or full name\";s:10:\"name_error\";s:16:\"Name is required\";s:11:\"name_status\";i:0;s:10:\"name_rules\";i:0;s:7:\"surname\";s:9:\"Last name\";s:13:\"surname_error\";s:21:\"Last name is required\";s:14:\"surname_status\";i:0;s:10:\"sex_status\";i:0;s:3:\"sex\";s:3:\"I\'m\";s:7:\"privacy\";s:44:\"By continuing, you accept the privacy policy\";s:13:\"privacy_error\";s:34:\"You must accept the privacy policy\";s:14:\"privacy_status\";i:0;s:11:\"privacy_url\";s:0:\"\";s:18:\"privacy_use_wp_url\";i:0;s:9:\"subscribe\";s:9:\"Subscribe\";s:12:\"title_female\";s:3:\"Ms.\";s:10:\"title_male\";s:3:\"Mr.\";s:10:\"title_none\";s:4:\"Dear\";s:8:\"sex_male\";s:3:\"Man\";s:10:\"sex_female\";s:5:\"Woman\";s:8:\"sex_none\";s:13:\"Not specified\";s:16:\"profile_1_status\";i:0;s:9:\"profile_1\";s:0:\"\";s:14:\"profile_1_type\";s:4:\"text\";s:21:\"profile_1_placeholder\";s:0:\"\";s:15:\"profile_1_rules\";i:0;s:17:\"profile_1_options\";s:0:\"\";s:16:\"profile_2_status\";i:0;s:9:\"profile_2\";s:0:\"\";s:14:\"profile_2_type\";s:4:\"text\";s:21:\"profile_2_placeholder\";s:0:\"\";s:15:\"profile_2_rules\";i:0;s:17:\"profile_2_options\";s:0:\"\";s:16:\"profile_3_status\";i:0;s:9:\"profile_3\";s:0:\"\";s:14:\"profile_3_type\";s:4:\"text\";s:21:\"profile_3_placeholder\";s:0:\"\";s:15:\"profile_3_rules\";i:0;s:17:\"profile_3_options\";s:0:\"\";s:16:\"profile_4_status\";i:0;s:9:\"profile_4\";s:0:\"\";s:14:\"profile_4_type\";s:4:\"text\";s:21:\"profile_4_placeholder\";s:0:\"\";s:15:\"profile_4_rules\";i:0;s:17:\"profile_4_options\";s:0:\"\";s:16:\"profile_5_status\";i:0;s:9:\"profile_5\";s:0:\"\";s:14:\"profile_5_type\";s:4:\"text\";s:21:\"profile_5_placeholder\";s:0:\"\";s:15:\"profile_5_rules\";i:0;s:17:\"profile_5_options\";s:0:\"\";s:16:\"profile_6_status\";i:0;s:9:\"profile_6\";s:0:\"\";s:14:\"profile_6_type\";s:4:\"text\";s:21:\"profile_6_placeholder\";s:0:\"\";s:15:\"profile_6_rules\";i:0;s:17:\"profile_6_options\";s:0:\"\";s:16:\"profile_7_status\";i:0;s:9:\"profile_7\";s:0:\"\";s:14:\"profile_7_type\";s:4:\"text\";s:21:\"profile_7_placeholder\";s:0:\"\";s:15:\"profile_7_rules\";i:0;s:17:\"profile_7_options\";s:0:\"\";s:16:\"profile_8_status\";i:0;s:9:\"profile_8\";s:0:\"\";s:14:\"profile_8_type\";s:4:\"text\";s:21:\"profile_8_placeholder\";s:0:\"\";s:15:\"profile_8_rules\";i:0;s:17:\"profile_8_options\";s:0:\"\";s:16:\"profile_9_status\";i:0;s:9:\"profile_9\";s:0:\"\";s:14:\"profile_9_type\";s:4:\"text\";s:21:\"profile_9_placeholder\";s:0:\"\";s:15:\"profile_9_rules\";i:0;s:17:\"profile_9_options\";s:0:\"\";s:17:\"profile_10_status\";i:0;s:10:\"profile_10\";s:0:\"\";s:15:\"profile_10_type\";s:4:\"text\";s:22:\"profile_10_placeholder\";s:0:\"\";s:16:\"profile_10_rules\";i:0;s:18:\"profile_10_options\";s:0:\"\";s:17:\"profile_11_status\";i:0;s:10:\"profile_11\";s:0:\"\";s:15:\"profile_11_type\";s:4:\"text\";s:22:\"profile_11_placeholder\";s:0:\"\";s:16:\"profile_11_rules\";i:0;s:18:\"profile_11_options\";s:0:\"\";s:17:\"profile_12_status\";i:0;s:10:\"profile_12\";s:0:\"\";s:15:\"profile_12_type\";s:4:\"text\";s:22:\"profile_12_placeholder\";s:0:\"\";s:16:\"profile_12_rules\";i:0;s:18:\"profile_12_options\";s:0:\"\";s:17:\"profile_13_status\";i:0;s:10:\"profile_13\";s:0:\"\";s:15:\"profile_13_type\";s:4:\"text\";s:22:\"profile_13_placeholder\";s:0:\"\";s:16:\"profile_13_rules\";i:0;s:18:\"profile_13_options\";s:0:\"\";s:17:\"profile_14_status\";i:0;s:10:\"profile_14\";s:0:\"\";s:15:\"profile_14_type\";s:4:\"text\";s:22:\"profile_14_placeholder\";s:0:\"\";s:16:\"profile_14_rules\";i:0;s:18:\"profile_14_options\";s:0:\"\";s:17:\"profile_15_status\";i:0;s:10:\"profile_15\";s:0:\"\";s:15:\"profile_15_type\";s:4:\"text\";s:22:\"profile_15_placeholder\";s:0:\"\";s:16:\"profile_15_rules\";i:0;s:18:\"profile_15_options\";s:0:\"\";s:17:\"profile_16_status\";i:0;s:10:\"profile_16\";s:0:\"\";s:15:\"profile_16_type\";s:4:\"text\";s:22:\"profile_16_placeholder\";s:0:\"\";s:16:\"profile_16_rules\";i:0;s:18:\"profile_16_options\";s:0:\"\";s:17:\"profile_17_status\";i:0;s:10:\"profile_17\";s:0:\"\";s:15:\"profile_17_type\";s:4:\"text\";s:22:\"profile_17_placeholder\";s:0:\"\";s:16:\"profile_17_rules\";i:0;s:18:\"profile_17_options\";s:0:\"\";s:17:\"profile_18_status\";i:0;s:10:\"profile_18\";s:0:\"\";s:15:\"profile_18_type\";s:4:\"text\";s:22:\"profile_18_placeholder\";s:0:\"\";s:16:\"profile_18_rules\";i:0;s:18:\"profile_18_options\";s:0:\"\";s:17:\"profile_19_status\";i:0;s:10:\"profile_19\";s:0:\"\";s:15:\"profile_19_type\";s:4:\"text\";s:22:\"profile_19_placeholder\";s:0:\"\";s:16:\"profile_19_rules\";i:0;s:18:\"profile_19_options\";s:0:\"\";s:17:\"profile_20_status\";i:0;s:10:\"profile_20\";s:0:\"\";s:15:\"profile_20_type\";s:4:\"text\";s:22:\"profile_20_placeholder\";s:0:\"\";s:16:\"profile_20_rules\";i:0;s:18:\"profile_20_options\";s:0:\"\";s:13:\"list_1_forced\";i:0;s:13:\"list_2_forced\";i:0;s:13:\"list_3_forced\";i:0;s:13:\"list_4_forced\";i:0;s:13:\"list_5_forced\";i:0;s:13:\"list_6_forced\";i:0;s:13:\"list_7_forced\";i:0;s:13:\"list_8_forced\";i:0;s:13:\"list_9_forced\";i:0;s:14:\"list_10_forced\";i:0;s:14:\"list_11_forced\";i:0;s:14:\"list_12_forced\";i:0;s:14:\"list_13_forced\";i:0;s:14:\"list_14_forced\";i:0;s:14:\"list_15_forced\";i:0;s:14:\"list_16_forced\";i:0;s:14:\"list_17_forced\";i:0;s:14:\"list_18_forced\";i:0;s:14:\"list_19_forced\";i:0;s:14:\"list_20_forced\";i:0;s:14:\"list_21_forced\";i:0;s:14:\"list_22_forced\";i:0;s:14:\"list_23_forced\";i:0;s:14:\"list_24_forced\";i:0;s:14:\"list_25_forced\";i:0;s:14:\"list_26_forced\";i:0;s:14:\"list_27_forced\";i:0;s:14:\"list_28_forced\";i:0;s:14:\"list_29_forced\";i:0;s:14:\"list_30_forced\";i:0;s:14:\"list_31_forced\";i:0;s:14:\"list_32_forced\";i:0;s:14:\"list_33_forced\";i:0;s:14:\"list_34_forced\";i:0;s:14:\"list_35_forced\";i:0;s:14:\"list_36_forced\";i:0;s:14:\"list_37_forced\";i:0;s:14:\"list_38_forced\";i:0;s:14:\"list_39_forced\";i:0;s:14:\"list_40_forced\";i:0;}', 'yes'),
(452, 'newsletter_profile_first_install_time', '1542695944', 'no'),
(453, 'newsletter_profile_main', 'a:8:{s:4:\"text\";s:188:\"{profile_form}\n    <p>If you change your email address, a confirmation email will be sent to activate it.</p>\n    <p><a href=\"{unsubscription_confirm_url}\">Cancel your subscription</a></p>\";s:13:\"email_changed\";s:81:\"Your email has been changed, an activation email has been sent with instructions.\";s:5:\"error\";s:42:\"Your email is not valid or already in use.\";s:10:\"save_label\";s:4:\"Save\";s:13:\"privacy_label\";s:21:\"Read our privacy note\";s:5:\"saved\";s:14:\"Profile saved.\";s:18:\"export_newsletters\";i:0;s:3:\"url\";s:0:\"\";}', 'yes'),
(454, 'newsletter_profile_version', '1.1.0', 'yes'),
(455, 'newsletter_emails_first_install_time', '1542695944', 'no'),
(456, 'newsletter_emails', 'a:1:{s:5:\"theme\";s:7:\"default\";}', 'yes'),
(457, 'newsletter_emails_theme_default', 'a:0:{}', 'no'),
(458, 'newsletter_emails_version', '1.1.5', 'yes'),
(459, 'newsletter_users_first_install_time', '1542695944', 'no'),
(460, 'newsletter_users', 'a:0:{}', 'yes'),
(461, 'newsletter_users_version', '1.2.4', 'yes'),
(462, 'newsletter_statistics_first_install_time', '1542695944', 'no'),
(463, 'newsletter_statistics', 'a:1:{s:3:\"key\";s:32:\"1c0e6edb054178bfd854ccc361d0d8bb\";}', 'yes'),
(464, 'newsletter_statistics_version', '1.1.8', 'yes'),
(465, 'newsletter_install_time', '1542695944', 'no'),
(466, 'widget_newsletterwidget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(467, 'widget_newsletterwidgetminimal', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(471, 'newsletter_diagnostic_cron_calls', 'a:100:{i:0;i:1544039696;i:1;i:1544042452;i:2;i:1544043833;i:3;i:1544049018;i:4;i:1544049876;i:5;i:1544054302;i:6;i:1544061926;i:7;i:1544063102;i:8;i:1544067630;i:9;i:1544069900;i:10;i:1544080113;i:11;i:1544093849;i:12;i:1544104061;i:13;i:1544105824;i:14;i:1544114066;i:15;i:1544114814;i:16;i:1544115709;i:17;i:1544123933;i:18;i:1544127091;i:19;i:1544127340;i:20;i:1544129490;i:21;i:1544130242;i:22;i:1544130319;i:23;i:1544131023;i:24;i:1544138345;i:25;i:1544139848;i:26;i:1544141193;i:27;i:1544145936;i:28;i:1544157364;i:29;i:1544157795;i:30;i:1544158259;i:31;i:1544161499;i:32;i:1544161894;i:33;i:1544163261;i:34;i:1544172169;i:35;i:1544174309;i:36;i:1544180271;i:37;i:1544188167;i:38;i:1544188681;i:39;i:1544189355;i:40;i:1544189713;i:41;i:1544190097;i:42;i:1544191853;i:43;i:1544194682;i:44;i:1544195154;i:45;i:1544196086;i:46;i:1544197064;i:47;i:1544202566;i:48;i:1544211232;i:49;i:1544213665;i:50;i:1544214781;i:51;i:1544215171;i:52;i:1544215285;i:53;i:1544217487;i:54;i:1544219942;i:55;i:1544220203;i:56;i:1544220418;i:57;i:1544220940;i:58;i:1544221261;i:59;i:1544228479;i:60;i:1544230118;i:61;i:1544230362;i:62;i:1544235450;i:63;i:1544236188;i:64;i:1544239481;i:65;i:1544239944;i:66;i:1544240912;i:67;i:1544244423;i:68;i:1544247511;i:69;i:1544251121;i:70;i:1544251237;i:71;i:1544251986;i:72;i:1544264291;i:73;i:1544264715;i:74;i:1544265016;i:75;i:1544265533;i:76;i:1544267007;i:77;i:1544267685;i:78;i:1544269116;i:79;i:1544269189;i:80;i:1544270435;i:81;i:1544278145;i:82;i:1544284626;i:83;i:1544285008;i:84;i:1544285319;i:85;i:1544285438;i:86;i:1544286699;i:87;i:1544289031;i:88;i:1544289506;i:89;i:1544290659;i:90;i:1544302017;i:91;i:1544311675;i:92;i:1544317100;i:93;i:1544318307;i:94;i:1544323980;i:95;i:1544325515;i:96;i:1544330726;i:97;i:1544330999;i:98;i:1544333228;i:99;i:1544333411;}', 'no'),
(472, 'newsletter_diagnostic_cron_data', 'a:3:{s:4:\"mean\";d:2936.15000000000009094947017729282379150390625;s:3:\"max\";i:13736;s:3:\"min\";i:73;}', 'no'),
(475, 'newsletter_log_level', '0', 'yes'),
(476, 'newsletter_extension_versions', 'a:36:{i:0;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"23\";s:7:\"version\";s:5:\"2.0.0\";}i:1;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"48\";s:7:\"version\";s:5:\"4.1.4\";}i:2;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"50\";s:7:\"version\";s:5:\"4.2.0\";}i:3;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"49\";s:7:\"version\";s:5:\"4.0.0\";}i:4;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"51\";s:7:\"version\";s:5:\"4.1.0\";}i:5;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"52\";s:7:\"version\";s:5:\"4.0.5\";}i:6;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"53\";s:7:\"version\";s:5:\"2.2.0\";}i:7;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"58\";s:7:\"version\";s:5:\"4.0.2\";}i:8;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"54\";s:7:\"version\";s:5:\"4.1.1\";}i:9;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"55\";s:7:\"version\";s:5:\"4.0.4\";}i:10;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"56\";s:7:\"version\";s:5:\"2.2.0\";}i:11;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"59\";s:7:\"version\";s:5:\"2.0.0\";}i:12;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"60\";s:7:\"version\";s:5:\"1.1.3\";}i:13;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"61\";s:7:\"version\";s:5:\"4.1.0\";}i:14;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"62\";s:7:\"version\";s:5:\"4.2.9\";}i:15;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"63\";s:7:\"version\";s:5:\"1.3.2\";}i:16;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"65\";s:7:\"version\";s:5:\"4.0.7\";}i:17;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"66\";s:7:\"version\";s:5:\"1.0.3\";}i:18;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"67\";s:7:\"version\";s:5:\"1.1.3\";}i:19;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"69\";s:7:\"version\";s:5:\"1.1.4\";}i:20;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"68\";s:7:\"version\";s:5:\"1.0.9\";}i:21;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"70\";s:7:\"version\";s:5:\"1.0.4\";}i:22;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"71\";s:7:\"version\";s:5:\"1.0.2\";}i:23;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"72\";s:7:\"version\";s:5:\"1.1.0\";}i:24;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"73\";s:7:\"version\";s:5:\"1.1.4\";}i:25;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"74\";s:7:\"version\";s:5:\"1.0.2\";}i:26;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"75\";s:7:\"version\";s:5:\"1.0.5\";}i:27;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"76\";s:7:\"version\";s:5:\"1.0.5\";}i:28;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"77\";s:7:\"version\";s:5:\"2.0.2\";}i:29;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"78\";s:7:\"version\";s:5:\"1.0.0\";}i:30;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"79\";s:7:\"version\";s:5:\"1.0.2\";}i:31;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"81\";s:7:\"version\";s:5:\"1.0.0\";}i:32;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"82\";s:7:\"version\";s:5:\"1.0.0\";}i:33;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"83\";s:7:\"version\";s:5:\"1.0.2\";}i:34;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"84\";s:7:\"version\";s:5:\"1.0.1\";}i:35;O:8:\"stdClass\":2:{s:2:\"id\";s:2:\"85\";s:7:\"version\";s:5:\"1.0.2\";}}', 'no'),
(1586, '_transient_timeout_feed_ac0b00fe65abe10e0c5b588f3ed8c7ca', '1543202524', 'no'),
(1414, '_transient_lyb_categories', '1', 'yes'),
(1512, '_transient_is_multi_author', '0', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(3, 5, '_edit_last', '1'),
(4, 5, '_edit_lock', '1541245411:1'),
(5, 5, '_wp_page_template', 'default'),
(6, 5, 'fu_form:92b6cbfa6120e13ff1654e28cef2a271', 'a:4:{s:8:\"internal\";a:4:{i:0;s:7:\"post_ID\";i:1;s:0:\"\";i:2;s:6:\"action\";i:3;s:11:\"form_layout\";}s:5:\"title\";a:1:{i:0;s:10:\"post_title\";}s:7:\"content\";a:1:{i:0;s:12:\"post_content\";}s:4:\"meta\";a:1:{i:0;s:5:\"files\";}}'),
(7, 5, 'fu_form:7473e7ea4d69440f69abfd3cd04ee525', 'a:4:{s:8:\"internal\";a:4:{i:0;s:7:\"post_ID\";i:1;s:0:\"\";i:2;s:6:\"action\";i:3;s:11:\"form_layout\";}s:5:\"title\";a:1:{i:0;s:10:\"post_title\";}s:7:\"content\";a:1:{i:0;s:12:\"post_content\";}s:4:\"meta\";a:5:{i:0;s:10:\"post_title\";i:1;s:12:\"post_content\";i:2;s:5:\"photo\";i:3;s:0:\"\";i:4;s:5:\"files\";}}'),
(8, 5, 'fu_form:0c78b154eb45cb4411ab3f4d54fa28be', 'a:4:{s:8:\"internal\";a:4:{i:0;s:7:\"post_ID\";i:1;s:0:\"\";i:2;s:6:\"action\";i:3;s:11:\"form_layout\";}s:5:\"title\";a:1:{i:0;s:10:\"post_title\";}s:7:\"content\";a:1:{i:0;s:12:\"post_content\";}s:4:\"meta\";a:2:{i:0;s:12:\"post_content\";i:1;s:5:\"files\";}}'),
(9, 13, '_wp_attached_file', '2018/11/p2.jpg'),
(10, 13, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:680;s:6:\"height\";i:452;s:4:\"file\";s:14:\"2018/11/p2.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:14:\"p2-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:14:\"p2-300x199.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:199;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"homeblogthumb\";a:4:{s:4:\"file\";s:14:\"p2-408x271.jpg\";s:5:\"width\";i:408;s:6:\"height\";i:271;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:25:\"Getty Images/Image Source\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:42:\"Golden retriever puppy lying down on grass\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:16:\"(c) Image Source\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:9:\"185743593\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(17, 18, 'is_submission', '1'),
(18, 18, 'usp-post-id', '18'),
(19, 18, 'user_submit_name', 'John'),
(20, 18, 'user_submit_ip', '103.218.236.156'),
(21, 1, '_edit_lock', '1541692898:1'),
(22, 20, '_wp_attached_file', '2018/11/p2-1.jpg'),
(23, 20, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:680;s:6:\"height\";i:452;s:4:\"file\";s:16:\"2018/11/p2-1.jpg\";s:5:\"sizes\";a:3:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:16:\"p2-1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:16:\"p2-1-300x199.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:199;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:13:\"homeblogthumb\";a:4:{s:4:\"file\";s:16:\"p2-1-408x271.jpg\";s:5:\"width\";i:408;s:6:\"height\";i:271;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:25:\"Getty Images/Image Source\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:42:\"Golden retriever puppy lying down on grass\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:16:\"(c) Image Source\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:9:\"185743593\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(24, 1, '_edit_last', '1'),
(25, 1, '_thumbnail_id', '20'),
(29, 27, '_wp_attached_file', '2018/11/admin.jpg'),
(28, 18, '_edit_lock', '1541692937:1'),
(30, 27, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:200;s:6:\"height\";i:209;s:4:\"file\";s:17:\"2018/11/admin.jpg\";s:5:\"sizes\";a:1:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:17:\"admin-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:2:\"10\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:20:\"Canon EOS 5D Mark II\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:10:\"1534859429\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:2:\"58\";s:3:\"iso\";s:3:\"125\";s:13:\"shutter_speed\";s:5:\"0.005\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(31, 25, 'user_submit_image', 'http://pupsandstud.com/blog/wp-content/uploads/2018/11/admin.jpg'),
(32, 25, 'is_submission', '1'),
(33, 25, 'usp-post-id', '25'),
(34, 25, 'user_submit_name', 'Aftab Mondal'),
(35, 25, 'user_submit_email', 'aftaf@gmail.com'),
(36, 25, 'user_submit_url', 'http://aftabmondf@gmail.com'),
(37, 25, 'user_submit_ip', '103.218.236.204'),
(38, 25, '_edit_lock', '1541854106:1'),
(39, 25, '_edit_last', '1'),
(42, 25, '_wp_trash_meta_status', 'publish'),
(43, 25, '_wp_trash_meta_time', '1541854252'),
(44, 25, '_wp_desired_post_slug', 'what-is-lorem-ipsum'),
(45, 28, '_edit_last', '1'),
(46, 28, '_edit_lock', '1541860773:1'),
(51, 18, '_wp_trash_meta_status', 'pending'),
(52, 18, '_wp_trash_meta_time', '1541861014'),
(53, 18, '_wp_desired_post_slug', ''),
(54, 34, '_edit_last', '1'),
(55, 34, '_edit_lock', '1542737171:1'),
(59, 36, '_edit_lock', '1542737279:1'),
(58, 36, '_edit_last', '1'),
(63, 38, '_edit_lock', '1542739913:1'),
(62, 38, '_edit_last', '1'),
(67, 40, '_edit_lock', '1543084568:1'),
(66, 40, '_edit_last', '1'),
(73, 43, '_edit_lock', '1543084888:1'),
(72, 43, '_edit_last', '1'),
(77, 45, 'usp-post-id', '45'),
(76, 45, 'is_submission', '1'),
(78, 45, 'user_submit_name', 'john'),
(79, 45, 'user_submit_email', 'htchouasi@gmail.com'),
(80, 45, 'user_submit_url', 'https://fidoseofreality.com/grain-free-dog-foods/'),
(81, 45, 'user_submit_ip', '107.193.132.78'),
(82, 45, '_edit_lock', '1543085426:1'),
(83, 45, '_edit_last', '1');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(255) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2018-11-01 06:44:26', '2018-11-01 06:44:26', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2018-11-01 07:28:38', '2018-11-01 07:28:38', '', 0, 'http://pupsandstud.com/blog/?p=1', 0, 'post', '', 1),
(34, 1, '2018-11-20 18:07:24', '2018-11-20 18:07:24', 'Deciding on getting a dog is a wonderful decision. Dogs are great pets and will forever be your best friend. You’ve probably dreamed about all the great times you’d have with Fido. But there are so many more things to consider when you get a dog in order to keep your pooch happy and healthy – even things that you probably rather not even think about! Here are a few things you should know about your dog’s health, that’s not really talked about:\r\n<ol>\r\n 	<li>\r\n<h4>Dogs Get Worms</h4>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-719\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/07/sitycare_dogtalk_01.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nIt’s common for your dog to get worms. They can get infected with roundworms after eating worm eggs from stool or soil that’s been contaminated. There are other types of worms that they can get, too, which is why you need to deworm them regularly. Also make sure that you take them to see the vet regularly to have them checked for worms. But you’ll know that they have worms because you’ll see them in their excretions.\r\n\r\n&nbsp;\r\n<ol start=\"2\">\r\n 	<li>\r\n<h4>Dogs Scoot To Scratch Their Butt</h4>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-720\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/07/sitycare_dogtalk_02.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nJust as you have itches that you just can’t wait to scratch, so do dogs! But if you see your dog scooting on the floor, it can mean that he’s trying to scratch an inside his anal sac. Inflammation of this area is usually accompanied by a bad odor and maybe discharge. You’ll have to empty the sac. It might also be a good idea to take your dog to the vet just incase there’s an infection and requires antibiotics. Dogs also scoot because of worms, fecal contamination or growth and rumors in the area.\r\n\r\n&nbsp;\r\n<ol start=\"3\">\r\n 	<li>\r\n<h4>Sometimes Dogs Need To Leave Urine Samples</h4>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-721\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/07/sitycare_dogtalk_03.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nSometimes the doctor requires a urine sample from you to check your pee. Well, the same can be requested by the vet, which means you’ll have to figure out how do get your dog’s pee in a vial. The easiest way to do this is to tape a container at the end of a stick and then place it under the region when your dog goes to pee. The vet might need pee samples to check for urinary infections.\r\n\r\n&nbsp;\r\n<ol start=\"4\">\r\n 	<li>\r\n<h4>Dogs Get Skin Infections</h4>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-722\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/07/sitycare_dogtalk_04.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nYour dog can suffer from dry skin that’s a result of dietary deficiencies, skin allergic reactions or even improper grooming. But sometimes skin infections can be cause by a manifestation of a parasite called mange. Check with your vet to see if it’s just dry skin or mange, which will need medication.\r\n\r\nAlthough these are things no one talks about, your dog’s health is important so you need to know about these sorts of things!', 'Things You Should Know About Your Dog Even If You Don’t Want To Talk About It', '', 'publish', 'open', 'open', '', 'things-you-should-know-about-your-dog-even-if-you-dont-want-to-talk-about-it', '', '', '2018-11-20 18:07:24', '2018-11-20 18:07:24', '', 0, 'http://pupsandstud.com/blog/?p=34', 0, 'post', '', 0),
(5, 1, '2018-11-01 07:05:22', '2018-11-01 07:05:22', '[user-submitted-posts]', 'Upload Your Blog', '', 'publish', 'closed', 'closed', '', 'upload-your-blog', '', '', '2018-11-01 07:23:03', '2018-11-01 07:23:03', '', 0, 'http://pupsandstud.com/blog/?page_id=5', 0, 'page', '', 0),
(6, 1, '2018-11-01 07:05:22', '2018-11-01 07:05:22', '[fu-upload-form]', 'Upload Your Blog', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2018-11-01 07:05:22', '2018-11-01 07:05:22', '', 5, 'http://pupsandstud.com/blog/5-revision-v1/', 0, 'revision', '', 0),
(16, 1, '2018-11-01 07:20:17', '2018-11-01 07:20:17', '[fu-upload-form]', 'Upload Your Blog', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2018-11-01 07:20:17', '2018-11-01 07:20:17', '', 5, 'http://pupsandstud.com/blog/5-revision-v1/', 0, 'revision', '', 0),
(12, 1, '2018-11-01 07:16:22', '2018-11-01 07:16:22', '[fu-upload-form class=\"html-wrapper-class\" title=\"\"]\r\n[/fu-upload-form]', 'Upload Your Blog', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2018-11-01 07:16:22', '2018-11-01 07:16:22', '', 5, 'http://pupsandstud.com/blog/5-revision-v1/', 0, 'revision', '', 0),
(11, 1, '2018-11-01 07:14:04', '2018-11-01 07:14:04', '[fu-upload-form class=\"html-wrapper-class\" title=\"\"]\r\n[textarea name=\"post_content\" class=\"textarea\" id=\"my-textarea\" class=\"required\" description=\"Description\" wysiwyg_enabled=\"true\"]\r\n[/fu-upload-form]', 'Upload Your Blog', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2018-11-01 07:14:04', '2018-11-01 07:14:04', '', 5, 'http://pupsandstud.com/blog/5-revision-v1/', 0, 'revision', '', 0),
(7, 1, '2018-11-01 07:08:54', '2018-11-01 07:08:54', '[fu-upload-form class=\"html-wrapper-class\" form_layout=\"media\" title=\"Upload your media\"]\r\n[input type=\"text\" name=\"post_title\" id=\"title\" class=\"required\" description=\"Title\"]\r\n[textarea name=\"post_content\" class=\"textarea\" id=\"my-textarea\" description=\"Description (optional)\" wysiwyg_enabled]\r\n[input type=\"file\" name=\"photo\" id=\"my-photo-submission\" class=\"required\" description=\"Your Photo\" multiple=\"multiple\"]\r\n[input type=\"submit\" class=\"btn\" value=\"Submit\"]\r\n[/fu-upload-form]', 'Upload Your Blog', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2018-11-01 07:08:54', '2018-11-01 07:08:54', '', 5, 'http://pupsandstud.com/blog/5-revision-v1/', 0, 'revision', '', 0),
(9, 1, '2018-11-01 07:12:29', '2018-11-01 07:12:29', '[fu-upload-form class=\"html-wrapper-class\" title=\"\"]\r\n[input type=\"text\" name=\"post_title\" id=\"title\" class=\"required\" description=\"Title\"]\r\n[textarea name=\"post_content\" class=\"textarea\" id=\"my-textarea\" description=\"Description (optional)\" wysiwyg_enabled=\"true\"]\r\n[input type=\"file\" name=\"photo\" id=\"my-photo-submission\" class=\"required\" description=\"Your Photo\" multiple=\"multiple\"]\r\n[input type=\"submit\" class=\"btn\" value=\"Submit\"]\r\n[/fu-upload-form]', 'Upload Your Blog', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2018-11-01 07:12:29', '2018-11-01 07:12:29', '', 5, 'http://pupsandstud.com/blog/5-revision-v1/', 0, 'revision', '', 0),
(8, 1, '2018-11-01 07:10:25', '2018-11-01 07:10:25', '[fu-upload-form class=\"html-wrapper-class\" form_layout=\"media\" title=\"Upload your media\" wysiwyg_enabled=\"true\"]\r\n[input type=\"text\" name=\"post_title\" id=\"title\" class=\"required\" description=\"Title\"]\r\n[textarea name=\"post_content\" class=\"textarea\" id=\"my-textarea\" description=\"Description (optional)\" wysiwyg_enabled=\"true\"]\r\n[input type=\"file\" name=\"photo\" id=\"my-photo-submission\" class=\"required\" description=\"Your Photo\" multiple=\"multiple\"]\r\n[input type=\"submit\" class=\"btn\" value=\"Submit\"]\r\n[/fu-upload-form]', 'Upload Your Blog', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2018-11-01 07:10:25', '2018-11-01 07:10:25', '', 5, 'http://pupsandstud.com/blog/5-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2018-11-01 07:13:34', '2018-11-01 07:13:34', '[fu-upload-form class=\"html-wrapper-class\" title=\"\"]\n[input type=\"text\" name=\"post_title\" id=\"title\" class=\"required\" description=\"Title\"]\n[textarea name=\"post_content\" class=\"textarea\" id=\"my-textarea\" description=\"Description\" wysiwyg_enabled=\"true\"]\n[input type=\"file\" name=\"photo\" id=\"my-photo-submission\" class=\"required\" description=\"Your Photo\" multiple=\"multiple\"]\n[input type=\"submit\" class=\"btn\" value=\"Submit\"]\n[/fu-upload-form]', 'Upload Your Blog', '', 'inherit', 'closed', 'closed', '', '5-autosave-v1', '', '', '2018-11-01 07:13:34', '2018-11-01 07:13:34', '', 5, 'http://pupsandstud.com/blog/5-autosave-v1/', 0, 'revision', '', 0),
(13, 1, '2018-11-01 07:18:17', '2018-11-01 07:18:17', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;', 'Test Blog', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. &nbsp;', 'private', 'open', 'closed', '', 'test-blog', '', '', '2018-11-01 07:18:17', '2018-11-01 07:18:17', '', 5, 'http://pupsandstud.com/blog/wp-content/uploads/2018/11/p2.jpg', 0, 'attachment', 'image/jpeg', 0),
(17, 1, '2018-11-01 07:23:03', '2018-11-01 07:23:03', '[user-submitted-posts]', 'Upload Your Blog', '', 'inherit', 'closed', 'closed', '', '5-revision-v1', '', '', '2018-11-01 07:23:03', '2018-11-01 07:23:03', '', 5, 'http://pupsandstud.com/blog/5-revision-v1/', 0, 'revision', '', 0),
(18, 1, '2018-11-10 14:43:34', '2018-11-10 14:43:34', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'What is lorem ipsum', '', 'trash', 'open', 'open', '', '__trashed', '', '', '2018-11-10 14:43:34', '2018-11-10 14:43:34', '', 0, 'http://pupsandstud.com/blog/?p=18', 0, 'post', '', 0),
(19, 0, '2018-11-01 07:26:08', '2018-11-01 07:26:08', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'What is lorem ipsum', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2018-11-01 07:26:08', '2018-11-01 07:26:08', '', 18, 'http://pupsandstud.com/blog/18-revision-v1/', 0, 'revision', '', 0),
(20, 1, '2018-11-01 07:28:24', '2018-11-01 07:28:24', '', 'p2', 'Golden retriever puppy lying down on grass', 'inherit', 'open', 'closed', '', 'p2', '', '', '2018-11-01 07:28:24', '2018-11-01 07:28:24', '', 1, 'http://pupsandstud.com/blog/wp-content/uploads/2018/11/p2-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(21, 1, '2018-11-01 07:28:38', '2018-11-01 07:28:38', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Hello world!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2018-11-01 07:28:38', '2018-11-01 07:28:38', '', 1, 'http://pupsandstud.com/blog/1-revision-v1/', 0, 'revision', '', 0),
(33, 1, '2018-11-20 06:39:07', '2018-11-20 06:39:07', '[newsletter]', 'Newsletter', '', 'publish', 'closed', 'closed', '', 'newsletter', '', '', '2018-11-20 06:39:07', '2018-11-20 06:39:07', '', 0, 'http://pupsandstud.com/blog/newsletter/', 0, 'page', '', 0),
(25, 1, '2018-11-10 12:50:22', '2018-11-10 12:50:22', '<p>Test</p>\r\n', 'What is lorem ipsum', '', 'trash', 'open', 'open', '', 'what-is-lorem-ipsum__trashed', '', '', '2018-11-10 12:50:52', '2018-11-10 12:50:52', '', 0, 'http://pupsandstud.com/blog/?p=25', 0, 'post', '', 0),
(26, 0, '2018-11-10 12:49:24', '2018-11-10 12:49:24', '<p>Test</p>\r\n', 'What is lorem ipsum', '', 'inherit', 'closed', 'closed', '', '25-revision-v1', '', '', '2018-11-10 12:49:24', '2018-11-10 12:49:24', '', 25, 'http://pupsandstud.com/blog/25-revision-v1/', 0, 'revision', '', 0),
(27, 0, '2018-11-10 12:49:24', '2018-11-10 12:49:24', '', 'admin.jpg', '', 'inherit', 'open', 'closed', '', 'admin-jpg', '', '', '2018-11-10 12:49:24', '2018-11-10 12:49:24', '', 25, 'http://pupsandstud.com/blog/wp-content/uploads/2018/11/admin.jpg', 0, 'attachment', 'image/jpeg', 0),
(28, 1, '2018-11-10 14:39:31', '2018-11-10 14:39:31', 'Dogs are a lot smarter than you think! Just as they have the capacity to have feelings, they are smarter than they let up. In fact, when it comes to IQ, they are some of the smartest animals on earth! In fact, your best furry friend might even be smarter than you. Okay, not really, but dogs are smarter than they let up and here are some ways they show their intelligence.\r\n\r\n<strong>They Know How To Communicate With You<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_01.jpg\" /></strong>\r\n\r\nYour dog knows the best way to communicate with you. But it’s your job to figure out what they want! Many dogs have different barks or whines, which can mean different things. They know what to do to make you react a certain way. Fido’s whine might be high-pitched when they want a treat and different when they want a belly rub.\r\n\r\n<strong>They Know What You’re Saying<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_02.jpg\" /></strong>\r\n\r\nDogs can actually understand what you’re saying. The average dog learns up to 165 words in their lifetime. But some of the smarter breeds can actually learn up to 250 words. So chances are, your dog knows what you’re talking about, especially if you talk to them in a high-pitched voice.\r\n\r\n<strong>Dogs Can Picture What They Smell<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_03.jpg\" /></strong>\r\n\r\nIt may sound weird, but dogs can picture what they smell. They create a mental picture of things they track via smell. It doesn’t matter if it’s a chew toy, treat, or ball, dogs can assume what they’ll find at the end of the trail through smell. If it\'s not what they expected, they\'ll act surprised.\r\n\r\n<strong>Dogs Use Facial Expressions<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_04.jpg\" /></strong>\r\n\r\nJust as you use facial expressions to communicate, your dog does, too! Dogs are sensitive to your attention and can product expressions when they know someone is watching. So if you’re mad or excited, your dog’s expression will react accordingly. You’ll notice they’ll have puppy dog eyes when you’re sort of mad at them to make you less angry and then raise their eyebrows when they’re not sure of a command.', 'Your Dog’s IQ: Could Dogs Be Smarter Than Their Owners?', '', 'publish', 'open', 'open', '', 'your-dogs-iq-could-dogs-be-smarter-than-their-owners', '', '', '2018-11-10 14:41:49', '2018-11-10 14:41:49', '', 0, 'http://pupsandstud.com/blog/?p=28', 0, 'post', '', 0),
(29, 1, '2018-11-10 14:39:31', '2018-11-10 14:39:31', 'Dogs are a lot smarter than you think! Just as they have the capacity to have feelings, they are smarter than they let up. In fact, when it comes to IQ, they are some of the smartest animals on earth! In fact, your best furry friend might even be smarter than you. Okay, not really, but dogs are smarter than they let up and here are some ways they show their intelligence.\r\n\r\n<strong>They Know How To Communicate With You</strong>\r\n\r\n\r\nYour dog knows the best way to communicate with you. But it’s your job to figure out what they want! Many dogs have different barks or whines, which can mean different things. They know what to do to make you react a certain way. Fido’s whine might be high-pitched when they want a treat and different when they want a belly rub.\r\n\r\n<strong>They Know What You’re Saying</strong>\r\n\r\n\r\nDogs can actually understand what you’re saying. The average dog learns up to 165 words in their lifetime. But some of the smarter breeds can actually learn up to 250 words. So chances are, your dog knows what you’re talking about, especially if you talk to them in a high-pitched voice.\r\n\r\n<strong>Dogs Can Picture What They Smell</strong>\r\n\r\n\r\nIt may sound weird, but dogs can picture what they smell. They create a mental picture of things they track via smell. It doesn’t matter if it’s a chew toy, treat, or ball, dogs can assume what they’ll find at the end of the trail through smell. If it\'s not what they expected, they\'ll act surprised.\r\n\r\n<strong>Dogs Use Facial Expressions</strong>\r\n\r\n\r\nJust as you use facial expressions to communicate, your dog does, too! Dogs are sensitive to your attention and can product expressions when they know someone is watching. So if you’re mad or excited, your dog’s expression will react accordingly. You’ll notice they’ll have puppy dog eyes when you’re sort of mad at them to make you less angry and then raise their eyebrows when they’re not sure of a command.', 'Your Dog’s IQ: Could Dogs Be Smarter Than Their Owners?', '', 'inherit', 'closed', 'closed', '', '28-revision-v1', '', '', '2018-11-10 14:39:31', '2018-11-10 14:39:31', '', 28, 'http://pupsandstud.com/blog/28-revision-v1/', 0, 'revision', '', 0),
(30, 1, '2018-11-10 14:41:35', '2018-11-10 14:41:35', 'Dogs are a lot smarter than you think! Just as they have the capacity to have feelings, they are smarter than they let up. In fact, when it comes to IQ, they are some of the smartest animals on earth! In fact, your best furry friend might even be smarter than you. Okay, not really, but dogs are smarter than they let up and here are some ways they show their intelligence.\n\n<strong>They Know How To Communicate With You<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_01.jpg\" /></strong>\n\nYour dog knows the best way to communicate with you. But it’s your job to figure out what they want! Many dogs have different barks or whines, which can mean different things. They know what to do to make you react a certain way. Fido’s whine might be high-pitched when they want a treat and different when they want a belly rub.\n\n<strong>They Know What You’re Saying<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_02.jpg\" /></strong>\n\nDogs can actually understand what you’re saying. The average dog learns up to 165 words in their lifetime. But some of the smarter breeds can actually learn up to 250 words. So chances are, your dog knows what you’re talking about, especially if you talk to them in a high-pitched voice.\n\n<strong>Dogs Can Picture What They Smell<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_03.jpg\" /></strong>\n\nIt may sound weird, but dogs can picture what they smell. They create a mental picture of things they track via smell. It doesn’t matter if it’s a chew toy, treat, or ball, dogs can assume what they’ll find at the end of the trail through smell. If it\'s not what they expected, they\'ll act surprised.\n\n<strong>Dogs Use Facial Expressions</strong>\n\nJust as you use facial expressions to communicate, your dog does, too! Dogs are sensitive to your attention and can product expressions when they know someone is watching. So if you’re mad or excited, your dog’s expression will react accordingly. You’ll notice they’ll have puppy dog eyes when you’re sort of mad at them to make you less angry and then raise their eyebrows when they’re not sure of a command.', 'Your Dog’s IQ: Could Dogs Be Smarter Than Their Owners?', '', 'inherit', 'closed', 'closed', '', '28-autosave-v1', '', '', '2018-11-10 14:41:35', '2018-11-10 14:41:35', '', 28, 'http://pupsandstud.com/blog/28-autosave-v1/', 0, 'revision', '', 0),
(31, 1, '2018-11-10 14:41:49', '2018-11-10 14:41:49', 'Dogs are a lot smarter than you think! Just as they have the capacity to have feelings, they are smarter than they let up. In fact, when it comes to IQ, they are some of the smartest animals on earth! In fact, your best furry friend might even be smarter than you. Okay, not really, but dogs are smarter than they let up and here are some ways they show their intelligence.\r\n\r\n<strong>They Know How To Communicate With You<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_01.jpg\" /></strong>\r\n\r\nYour dog knows the best way to communicate with you. But it’s your job to figure out what they want! Many dogs have different barks or whines, which can mean different things. They know what to do to make you react a certain way. Fido’s whine might be high-pitched when they want a treat and different when they want a belly rub.\r\n\r\n<strong>They Know What You’re Saying<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_02.jpg\" /></strong>\r\n\r\nDogs can actually understand what you’re saying. The average dog learns up to 165 words in their lifetime. But some of the smarter breeds can actually learn up to 250 words. So chances are, your dog knows what you’re talking about, especially if you talk to them in a high-pitched voice.\r\n\r\n<strong>Dogs Can Picture What They Smell<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_03.jpg\" /></strong>\r\n\r\nIt may sound weird, but dogs can picture what they smell. They create a mental picture of things they track via smell. It doesn’t matter if it’s a chew toy, treat, or ball, dogs can assume what they’ll find at the end of the trail through smell. If it\'s not what they expected, they\'ll act surprised.\r\n\r\n<strong>Dogs Use Facial Expressions<img src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_dog_smart_04.jpg\" /></strong>\r\n\r\nJust as you use facial expressions to communicate, your dog does, too! Dogs are sensitive to your attention and can product expressions when they know someone is watching. So if you’re mad or excited, your dog’s expression will react accordingly. You’ll notice they’ll have puppy dog eyes when you’re sort of mad at them to make you less angry and then raise their eyebrows when they’re not sure of a command.', 'Your Dog’s IQ: Could Dogs Be Smarter Than Their Owners?', '', 'inherit', 'closed', 'closed', '', '28-revision-v1', '', '', '2018-11-10 14:41:49', '2018-11-10 14:41:49', '', 28, 'http://pupsandstud.com/blog/28-revision-v1/', 0, 'revision', '', 0),
(35, 1, '2018-11-20 18:07:24', '2018-11-20 18:07:24', 'Deciding on getting a dog is a wonderful decision. Dogs are great pets and will forever be your best friend. You’ve probably dreamed about all the great times you’d have with Fido. But there are so many more things to consider when you get a dog in order to keep your pooch happy and healthy – even things that you probably rather not even think about! Here are a few things you should know about your dog’s health, that’s not really talked about:\r\n<ol>\r\n 	<li>\r\n<h4>Dogs Get Worms</h4>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-719\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/07/sitycare_dogtalk_01.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nIt’s common for your dog to get worms. They can get infected with roundworms after eating worm eggs from stool or soil that’s been contaminated. There are other types of worms that they can get, too, which is why you need to deworm them regularly. Also make sure that you take them to see the vet regularly to have them checked for worms. But you’ll know that they have worms because you’ll see them in their excretions.\r\n\r\n&nbsp;\r\n<ol start=\"2\">\r\n 	<li>\r\n<h4>Dogs Scoot To Scratch Their Butt</h4>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-720\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/07/sitycare_dogtalk_02.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nJust as you have itches that you just can’t wait to scratch, so do dogs! But if you see your dog scooting on the floor, it can mean that he’s trying to scratch an inside his anal sac. Inflammation of this area is usually accompanied by a bad odor and maybe discharge. You’ll have to empty the sac. It might also be a good idea to take your dog to the vet just incase there’s an infection and requires antibiotics. Dogs also scoot because of worms, fecal contamination or growth and rumors in the area.\r\n\r\n&nbsp;\r\n<ol start=\"3\">\r\n 	<li>\r\n<h4>Sometimes Dogs Need To Leave Urine Samples</h4>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-721\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/07/sitycare_dogtalk_03.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nSometimes the doctor requires a urine sample from you to check your pee. Well, the same can be requested by the vet, which means you’ll have to figure out how do get your dog’s pee in a vial. The easiest way to do this is to tape a container at the end of a stick and then place it under the region when your dog goes to pee. The vet might need pee samples to check for urinary infections.\r\n\r\n&nbsp;\r\n<ol start=\"4\">\r\n 	<li>\r\n<h4>Dogs Get Skin Infections</h4>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-722\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/07/sitycare_dogtalk_04.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nYour dog can suffer from dry skin that’s a result of dietary deficiencies, skin allergic reactions or even improper grooming. But sometimes skin infections can be cause by a manifestation of a parasite called mange. Check with your vet to see if it’s just dry skin or mange, which will need medication.\r\n\r\nAlthough these are things no one talks about, your dog’s health is important so you need to know about these sorts of things!', 'Things You Should Know About Your Dog Even If You Don’t Want To Talk About It', '', 'inherit', 'closed', 'closed', '', '34-revision-v1', '', '', '2018-11-20 18:07:24', '2018-11-20 18:07:24', '', 34, 'http://pupsandstud.com/blog/34-revision-v1/', 0, 'revision', '', 0),
(36, 1, '2018-11-20 18:08:53', '2018-11-20 18:08:53', 'Your dog can’t talk, but they do communicate with you via their barks and actions; you just need to decode them to know what they mean! Animals in general have their own ways of communicating to each other and if you know what they are, you’ll be able to read them and understand what they want. The same is true with your dog or puppy. Here are some different ways you’re dog is trying to tell you something:\r\n<ol>\r\n 	<li>\r\n<h3>Raising a paw in the air</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-620\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_01.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nYour dog’s natural instincts is to hunt and if you see that your dog is raising up a paw in the air with its head down, you better watch out because they’re ready to hunt something down. It might be a bird, small rodent or other small animal they’re trying to get at.\r\n\r\n&nbsp;\r\n<ol start=\"2\">\r\n 	<li>\r\n<h3>Hunching over</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-621\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_02.jpg\" alt=\"\" width=\"700\" height=\"488\" />\r\n\r\nA dog that hunches over and tries to make itself appear small is frightened. If you encounter a dog that does this without anything around it to scare it, there is a high chance that the dog has been abused.\r\n\r\n&nbsp;\r\n<ol start=\"3\">\r\n 	<li>\r\n<h3>Chews on furniture</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-622\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_03.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nIf you have a dog that chews on your home furniture, it might be an indication that they suffer from separation anxiety. But if you trained your dog as a puppy not to chew on things then it’s probably likely that they are bored and need some exercise.\r\n\r\n&nbsp;\r\n<ol start=\"4\">\r\n 	<li>\r\n<h3>Yawning</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-623\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_04.jpg\" alt=\"\" width=\"700\" height=\"490\" />\r\n\r\nAlthough humans yawn when they’re tired, it’s not the same for a dog. When a dog yawns, it could be a sign that they’re scared or stressed out. So if your dog is yawning around a new person, they might be scared of them.\r\n\r\n&nbsp;\r\n<ol start=\"5\">\r\n 	<li>\r\n<h3>Leaning on you</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-624\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_05.jpg\" alt=\"\" width=\"700\" height=\"452\" />\r\n\r\nWhen you dog leans on you, it’s their sign for cuddling. It helps them feel safer when they lean in on you to get a pat on the back or petted.\r\n\r\n&nbsp;\r\n<ol start=\"6\">\r\n 	<li>\r\n<h3>Constant eye contact</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-625\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_06.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nWhen you dog is looking at you a lot, it’s their way of showing you affection and that they love you.\r\n\r\nDogs have their own way of communicating with you and you just have to look for the right signs. Although you’d like to be with them every minute of the day, that’s just not possible. So for times when you’re at work or need a dog sitter, you can find a qualified pet sitter on <a href=\"https://www.sitycare.com\">Sitycare</a>!', 'A Dog’s Communication: Could Your Dog Be Trying To Tell You Something', '', 'publish', 'open', 'open', '', 'a-dogs-communication-could-your-dog-be-trying-to-tell-you-something', '', '', '2018-11-20 18:08:53', '2018-11-20 18:08:53', '', 0, 'http://pupsandstud.com/blog/?p=36', 0, 'post', '', 0),
(37, 1, '2018-11-20 18:08:53', '2018-11-20 18:08:53', 'Your dog can’t talk, but they do communicate with you via their barks and actions; you just need to decode them to know what they mean! Animals in general have their own ways of communicating to each other and if you know what they are, you’ll be able to read them and understand what they want. The same is true with your dog or puppy. Here are some different ways you’re dog is trying to tell you something:\r\n<ol>\r\n 	<li>\r\n<h3>Raising a paw in the air</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-620\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_01.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nYour dog’s natural instincts is to hunt and if you see that your dog is raising up a paw in the air with its head down, you better watch out because they’re ready to hunt something down. It might be a bird, small rodent or other small animal they’re trying to get at.\r\n\r\n&nbsp;\r\n<ol start=\"2\">\r\n 	<li>\r\n<h3>Hunching over</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-621\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_02.jpg\" alt=\"\" width=\"700\" height=\"488\" />\r\n\r\nA dog that hunches over and tries to make itself appear small is frightened. If you encounter a dog that does this without anything around it to scare it, there is a high chance that the dog has been abused.\r\n\r\n&nbsp;\r\n<ol start=\"3\">\r\n 	<li>\r\n<h3>Chews on furniture</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-622\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_03.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nIf you have a dog that chews on your home furniture, it might be an indication that they suffer from separation anxiety. But if you trained your dog as a puppy not to chew on things then it’s probably likely that they are bored and need some exercise.\r\n\r\n&nbsp;\r\n<ol start=\"4\">\r\n 	<li>\r\n<h3>Yawning</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-623\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_04.jpg\" alt=\"\" width=\"700\" height=\"490\" />\r\n\r\nAlthough humans yawn when they’re tired, it’s not the same for a dog. When a dog yawns, it could be a sign that they’re scared or stressed out. So if your dog is yawning around a new person, they might be scared of them.\r\n\r\n&nbsp;\r\n<ol start=\"5\">\r\n 	<li>\r\n<h3>Leaning on you</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-624\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_05.jpg\" alt=\"\" width=\"700\" height=\"452\" />\r\n\r\nWhen you dog leans on you, it’s their sign for cuddling. It helps them feel safer when they lean in on you to get a pat on the back or petted.\r\n\r\n&nbsp;\r\n<ol start=\"6\">\r\n 	<li>\r\n<h3>Constant eye contact</h3>\r\n</li>\r\n</ol>\r\n<img class=\"aligncenter wp-image-625\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/06/sitycare_dog_comm_06.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nWhen you dog is looking at you a lot, it’s their way of showing you affection and that they love you.\r\n\r\nDogs have their own way of communicating with you and you just have to look for the right signs. Although you’d like to be with them every minute of the day, that’s just not possible. So for times when you’re at work or need a dog sitter, you can find a qualified pet sitter on <a href=\"https://www.sitycare.com\">Sitycare</a>!', 'A Dog’s Communication: Could Your Dog Be Trying To Tell You Something', '', 'inherit', 'closed', 'closed', '', '36-revision-v1', '', '', '2018-11-20 18:08:53', '2018-11-20 18:08:53', '', 36, 'http://pupsandstud.com/blog/36-revision-v1/', 0, 'revision', '', 0),
(38, 1, '2018-11-20 18:10:40', '2018-11-20 18:10:40', 'Just like you, your dog can get sick. One of the most common ailments for Fido is probably becoming infested with worms. There are five different types of worms that can affect your dog’s health, including tapeworms, hookworms, roundworms, heartworms and whipworms. Depending on the type of worms they have, you’ll be able to spot the symptoms easier than others. Here’s a quick guide to better understanding dog worms so that you can get your furry friend the treatment they need!\r\n<h4><strong>Causes Of Worms</strong></h4>\r\n<img class=\"aligncenter wp-image-576\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/05/sitycare_dog_worm_01-1.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nThese intestinal parasites can be life threatening to your dog, and many owners don’t know that these parasites can also be transmissible to humans, too. Usually, tapeworms are passed from pet to bet, but need an immediate host, which comes in the form of small rodents and fleas. Your dog will become infested with tapeworms if the hosts are not controlled. They’ll get roundworms when they eat worm eggs from stool, soil or by eating infected rodents. Hookworms are contracted by eating larval or by entering your dog through their feet or skin.\r\n<h4><strong>Symptoms Of Worms</strong></h4>\r\n<img class=\"aligncenter wp-image-572\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/05/sitycare_dog_worm_02.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nThere are a number of common symptoms of worms in your pet and here are a few of them:\r\n<ul>\r\n 	<li>Vomiting – dogs that are infected with worms will often throw up and you might even be able to see them in the vomit.</li>\r\n 	<li>Coughing – an advanced stage symptom of heartworm infestation is coughing, but those with roundworms or hookworms also have coughs.</li>\r\n 	<li>No energy – dogs with worms are more lethargic than usual.</li>\r\n 	<li>Diarrhea – if your dog has soft, runny stools, you might want to check for worms.</li>\r\n 	<li>Appetite change – if you notice that your dog doesn’t want to eat, it might be because of worms since they steal their nutrients. This might also make them lose weight.</li>\r\n 	<li>Pot bellied look – if your dog starts to look bloated, it may have worms.</li>\r\n 	<li>Dull coat – a dull coat that’s dry maybe a sign of worms, as well as loss of hair or rashes.</li>\r\n</ul>\r\n<h4><strong>Treatment Of Worms</strong></h4>\r\n<img class=\"aligncenter wp-image-573\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/05/sitycare_dog_worm_03.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nIf you suspect worms in your dog, there are a number of things you can do. Many intestinal parasites are treatable with over-the-counter dewormers. But taking your dog to the vet for a stool examination will get you the best treatment and rule out heartworms.\r\n\r\nHaving a dog with worms can be tiring, so if you ever require a sitter, look up qualified pet sitters on <a href=\"https://www.sitycare.com\">Sitycare</a>!', 'Dog Worms 101: Understanding Dog Worms Symptoms and Infestation', '', 'publish', 'open', 'open', '', 'dog-worms-101-understanding-dog-worms-symptoms-and-infestation', '', '', '2018-11-20 18:10:40', '2018-11-20 18:10:40', '', 0, 'http://pupsandstud.com/blog/?p=38', 0, 'post', '', 0),
(39, 1, '2018-11-20 18:10:40', '2018-11-20 18:10:40', 'Just like you, your dog can get sick. One of the most common ailments for Fido is probably becoming infested with worms. There are five different types of worms that can affect your dog’s health, including tapeworms, hookworms, roundworms, heartworms and whipworms. Depending on the type of worms they have, you’ll be able to spot the symptoms easier than others. Here’s a quick guide to better understanding dog worms so that you can get your furry friend the treatment they need!\r\n<h4><strong>Causes Of Worms</strong></h4>\r\n<img class=\"aligncenter wp-image-576\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/05/sitycare_dog_worm_01-1.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nThese intestinal parasites can be life threatening to your dog, and many owners don’t know that these parasites can also be transmissible to humans, too. Usually, tapeworms are passed from pet to bet, but need an immediate host, which comes in the form of small rodents and fleas. Your dog will become infested with tapeworms if the hosts are not controlled. They’ll get roundworms when they eat worm eggs from stool, soil or by eating infected rodents. Hookworms are contracted by eating larval or by entering your dog through their feet or skin.\r\n<h4><strong>Symptoms Of Worms</strong></h4>\r\n<img class=\"aligncenter wp-image-572\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/05/sitycare_dog_worm_02.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nThere are a number of common symptoms of worms in your pet and here are a few of them:\r\n<ul>\r\n 	<li>Vomiting – dogs that are infected with worms will often throw up and you might even be able to see them in the vomit.</li>\r\n 	<li>Coughing – an advanced stage symptom of heartworm infestation is coughing, but those with roundworms or hookworms also have coughs.</li>\r\n 	<li>No energy – dogs with worms are more lethargic than usual.</li>\r\n 	<li>Diarrhea – if your dog has soft, runny stools, you might want to check for worms.</li>\r\n 	<li>Appetite change – if you notice that your dog doesn’t want to eat, it might be because of worms since they steal their nutrients. This might also make them lose weight.</li>\r\n 	<li>Pot bellied look – if your dog starts to look bloated, it may have worms.</li>\r\n 	<li>Dull coat – a dull coat that’s dry maybe a sign of worms, as well as loss of hair or rashes.</li>\r\n</ul>\r\n<h4><strong>Treatment Of Worms</strong></h4>\r\n<img class=\"aligncenter wp-image-573\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/05/sitycare_dog_worm_03.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nIf you suspect worms in your dog, there are a number of things you can do. Many intestinal parasites are treatable with over-the-counter dewormers. But taking your dog to the vet for a stool examination will get you the best treatment and rule out heartworms.\r\n\r\nHaving a dog with worms can be tiring, so if you ever require a sitter, look up qualified pet sitters on <a href=\"https://www.sitycare.com\">Sitycare</a>!', 'Dog Worms 101: Understanding Dog Worms Symptoms and Infestation', '', 'inherit', 'closed', 'closed', '', '38-revision-v1', '', '', '2018-11-20 18:10:40', '2018-11-20 18:10:40', '', 38, 'http://pupsandstud.com/blog/38-revision-v1/', 0, 'revision', '', 0),
(40, 1, '2018-11-24 18:35:30', '2018-11-24 18:35:30', '&nbsp;\r\n\r\nLet\'s face it; declawing is a form of animal cruelty, and there\'s absolutely nothing that justifies the act. Today, most people choose to declaw their cat to prevent them from destroying furniture or hunting, but not everyone looks into the challenges the cat is likely to face after the procedure.\r\n<h4><strong>What Exactly is Declawing?</strong></h4>\r\n<center><img class=\"aligncenter wp-image-288\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_cat_paw-300x185.jpg\" alt=\"\" width=\"482\" height=\"297\" /></center>For starters, declawing is a surgical procedure medically known as onychectomy. It\'s typically performed under anesthesia to reduce the pain and discomfort. In this surgery, the tip of each digit is removed from the cat\'s forepaws, and there\'s actually a slight chance of death in the procedure. What\'s more, a declawed cat is highly susceptible to infection and also likely to suffer lifelong discomfort in its paws.\r\n<h4><strong>Effects of Declawing A Cat</strong></h4>\r\n<center><img class=\"aligncenter wp-image-289\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_aggre_cat-300x185.jpg\" alt=\"\" width=\"482\" height=\"298\" /></center>For starters, most veterinarians find the procedure to be wrong because of the possible consequences. In essence, the absence of claws can affect a cat in more ways than one.\r\n<ol>\r\n 	<li>Declawing compromise the cat\'s primary defense abilities, making it more susceptible to predators;</li>\r\n 	<li>Can increase aggressiveness and even the tendency to bite;</li>\r\n 	<li>It can also hamper the cat\'s stretching and exercise habits which could eventually lead to muscle atrophy;</li>\r\n 	<li>Declawing also impairs your pet\'s tendency to balance on thin surfaces including fence tops and the like. That said, falls from such surfaces will cause unnecessary injury.</li>\r\n</ol>\r\n<h4><strong>How Declawing Is Seen Around the World</strong></h4>\r\n<center><img class=\"aligncenter wp-image-287\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_cat_shelter-300x189.jpg\" alt=\"\" width=\"473\" height=\"298\" /></center>First off, the surgical procedure is incredibly rare outside of North America. Some European countries including Germany, Finland, The Netherlands and Switzerland view the operation to be an act of animal cruelty and is forbidden by the laws. Moreover, declawing is prohibited in many other European under the terms of the European Convention for the Protection of Pet Animals. According to the law, a veterinarian can consider the procedure only for veterinary medical reasons or the benefit of the animal. What\'s more, animal shelters find it hard to look after imported cats that have been declawed thus causing the cats to be euthanized.\r\n<h4><strong>Stick To The Safe Alternative</strong></h4>\r\n&nbsp;\r\n\r\n[caption id=\"attachment_290\" align=\"aligncenter\" width=\"312\"]<img class=\"wp-image-290\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_nail_cap-300x287.jpg\" alt=\"\" width=\"312\" height=\"298\" /> <center><i> Potomac Banks Soft Designer Cat Nail Caps - <a href=\"https://www.amazon.com/Designer-Fashion-Covers-Turquoise-X-Small/dp/B06WW373R8/ref=sr_1_23?ie=UTF8&amp;qid=1515081789&amp;sr=8-23&amp;keywords=vinyl+nail+caps\">Amazon</a></i></center>[/caption]\r\n\r\nThe good news is, you can control the scratching and damages without putting your cat\'s life on the line. You only have to choose the safe alternative — blunt vinyl nail caps. The caps are glued to your pet\'s existing nails and also work great for cats of all ages. Just so you know, the caps should be replaced when the cat sheds its natural claw sheaths — this should be around every four to six weeks.\r\n\r\nLog in to Sitycare now and start hiring our best sitters, all whom are caring, professional and responsible. We are here for you every step of the way.', '4 Things to Think About Before Declawing your Cat', '', 'publish', 'open', 'open', '', '40-2', '', '', '2018-11-24 18:35:54', '2018-11-24 18:35:54', '', 0, 'http://pupsandstud.com/blog/?p=40', 0, 'post', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(41, 1, '2018-11-24 18:35:30', '2018-11-24 18:35:30', '&nbsp;\r\n\r\nLet\'s face it; declawing is a form of animal cruelty, and there\'s absolutely nothing that justifies the act. Today, most people choose to declaw their cat to prevent them from destroying furniture or hunting, but not everyone looks into the challenges the cat is likely to face after the procedure.\r\n<h4><strong>What Exactly is Declawing?</strong></h4>\r\n<center><img class=\"aligncenter wp-image-288\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_cat_paw-300x185.jpg\" alt=\"\" width=\"482\" height=\"297\" /></center>For starters, declawing is a surgical procedure medically known as onychectomy. It\'s typically performed under anesthesia to reduce the pain and discomfort. In this surgery, the tip of each digit is removed from the cat\'s forepaws, and there\'s actually a slight chance of death in the procedure. What\'s more, a declawed cat is highly susceptible to infection and also likely to suffer lifelong discomfort in its paws.\r\n<h4><strong>Effects of Declawing A Cat</strong></h4>\r\n<center><img class=\"aligncenter wp-image-289\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_aggre_cat-300x185.jpg\" alt=\"\" width=\"482\" height=\"298\" /></center>For starters, most veterinarians find the procedure to be wrong because of the possible consequences. In essence, the absence of claws can affect a cat in more ways than one.\r\n<ol>\r\n 	<li>Declawing compromise the cat\'s primary defense abilities, making it more susceptible to predators;</li>\r\n 	<li>Can increase aggressiveness and even the tendency to bite;</li>\r\n 	<li>It can also hamper the cat\'s stretching and exercise habits which could eventually lead to muscle atrophy;</li>\r\n 	<li>Declawing also impairs your pet\'s tendency to balance on thin surfaces including fence tops and the like. That said, falls from such surfaces will cause unnecessary injury.</li>\r\n</ol>\r\n<h4><strong>How Declawing Is Seen Around the World</strong></h4>\r\n<center><img class=\"aligncenter wp-image-287\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_cat_shelter-300x189.jpg\" alt=\"\" width=\"473\" height=\"298\" /></center>First off, the surgical procedure is incredibly rare outside of North America. Some European countries including Germany, Finland, The Netherlands and Switzerland view the operation to be an act of animal cruelty and is forbidden by the laws. Moreover, declawing is prohibited in many other European under the terms of the European Convention for the Protection of Pet Animals. According to the law, a veterinarian can consider the procedure only for veterinary medical reasons or the benefit of the animal. What\'s more, animal shelters find it hard to look after imported cats that have been declawed thus causing the cats to be euthanized.\r\n<h4><strong>Stick To The Safe Alternative</strong></h4>\r\n&nbsp;\r\n\r\n[caption id=\"attachment_290\" align=\"aligncenter\" width=\"312\"]<img class=\"wp-image-290\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_nail_cap-300x287.jpg\" alt=\"\" width=\"312\" height=\"298\" /> <center><i> Potomac Banks Soft Designer Cat Nail Caps - <a href=\"https://www.amazon.com/Designer-Fashion-Covers-Turquoise-X-Small/dp/B06WW373R8/ref=sr_1_23?ie=UTF8&amp;qid=1515081789&amp;sr=8-23&amp;keywords=vinyl+nail+caps\">Amazon</a></i></center>[/caption]\r\n\r\nThe good news is, you can control the scratching and damages without putting your cat\'s life on the line. You only have to choose the safe alternative — blunt vinyl nail caps. The caps are glued to your pet\'s existing nails and also work great for cats of all ages. Just so you know, the caps should be replaced when the cat sheds its natural claw sheaths — this should be around every four to six weeks.\r\n\r\nLog in to Sitycare now and start hiring our best sitters, all whom are caring, professional and responsible. We are here for you every step of the way.', '', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2018-11-24 18:35:30', '2018-11-24 18:35:30', '', 40, 'http://pupsandstud.com/blog/40-revision-v1/', 0, 'revision', '', 0),
(42, 1, '2018-11-24 18:35:54', '2018-11-24 18:35:54', '&nbsp;\r\n\r\nLet\'s face it; declawing is a form of animal cruelty, and there\'s absolutely nothing that justifies the act. Today, most people choose to declaw their cat to prevent them from destroying furniture or hunting, but not everyone looks into the challenges the cat is likely to face after the procedure.\r\n<h4><strong>What Exactly is Declawing?</strong></h4>\r\n<center><img class=\"aligncenter wp-image-288\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_cat_paw-300x185.jpg\" alt=\"\" width=\"482\" height=\"297\" /></center>For starters, declawing is a surgical procedure medically known as onychectomy. It\'s typically performed under anesthesia to reduce the pain and discomfort. In this surgery, the tip of each digit is removed from the cat\'s forepaws, and there\'s actually a slight chance of death in the procedure. What\'s more, a declawed cat is highly susceptible to infection and also likely to suffer lifelong discomfort in its paws.\r\n<h4><strong>Effects of Declawing A Cat</strong></h4>\r\n<center><img class=\"aligncenter wp-image-289\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_aggre_cat-300x185.jpg\" alt=\"\" width=\"482\" height=\"298\" /></center>For starters, most veterinarians find the procedure to be wrong because of the possible consequences. In essence, the absence of claws can affect a cat in more ways than one.\r\n<ol>\r\n 	<li>Declawing compromise the cat\'s primary defense abilities, making it more susceptible to predators;</li>\r\n 	<li>Can increase aggressiveness and even the tendency to bite;</li>\r\n 	<li>It can also hamper the cat\'s stretching and exercise habits which could eventually lead to muscle atrophy;</li>\r\n 	<li>Declawing also impairs your pet\'s tendency to balance on thin surfaces including fence tops and the like. That said, falls from such surfaces will cause unnecessary injury.</li>\r\n</ol>\r\n<h4><strong>How Declawing Is Seen Around the World</strong></h4>\r\n<center><img class=\"aligncenter wp-image-287\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_cat_shelter-300x189.jpg\" alt=\"\" width=\"473\" height=\"298\" /></center>First off, the surgical procedure is incredibly rare outside of North America. Some European countries including Germany, Finland, The Netherlands and Switzerland view the operation to be an act of animal cruelty and is forbidden by the laws. Moreover, declawing is prohibited in many other European under the terms of the European Convention for the Protection of Pet Animals. According to the law, a veterinarian can consider the procedure only for veterinary medical reasons or the benefit of the animal. What\'s more, animal shelters find it hard to look after imported cats that have been declawed thus causing the cats to be euthanized.\r\n<h4><strong>Stick To The Safe Alternative</strong></h4>\r\n&nbsp;\r\n\r\n[caption id=\"attachment_290\" align=\"aligncenter\" width=\"312\"]<img class=\"wp-image-290\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/01/sitycare_nail_cap-300x287.jpg\" alt=\"\" width=\"312\" height=\"298\" /> <center><i> Potomac Banks Soft Designer Cat Nail Caps - <a href=\"https://www.amazon.com/Designer-Fashion-Covers-Turquoise-X-Small/dp/B06WW373R8/ref=sr_1_23?ie=UTF8&amp;qid=1515081789&amp;sr=8-23&amp;keywords=vinyl+nail+caps\">Amazon</a></i></center>[/caption]\r\n\r\nThe good news is, you can control the scratching and damages without putting your cat\'s life on the line. You only have to choose the safe alternative — blunt vinyl nail caps. The caps are glued to your pet\'s existing nails and also work great for cats of all ages. Just so you know, the caps should be replaced when the cat sheds its natural claw sheaths — this should be around every four to six weeks.\r\n\r\nLog in to Sitycare now and start hiring our best sitters, all whom are caring, professional and responsible. We are here for you every step of the way.', '4 Things to Think About Before Declawing your Cat', '', 'inherit', 'closed', 'closed', '', '40-revision-v1', '', '', '2018-11-24 18:35:54', '2018-11-24 18:35:54', '', 40, 'http://pupsandstud.com/blog/40-revision-v1/', 0, 'revision', '', 0),
(43, 1, '2018-11-24 18:41:26', '2018-11-24 18:41:26', 'At When you leave on a vacation somewhere and don\'t have anyone to sit for your dogs, the next best thing is to board them. These special dog hotels and boarding places will keep your dog safe and sound until you come back. Boarding your dog might seem like an easy thing to do, but before you do it, here are a few things you should know:\r\n<h3>Kennel vs Luxury Boarding</h3>\r\n<img class=\"aligncenter wp-image-862\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_01.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nThere’s a difference between kennel boarding and luxury boarding. Many vet’s offices offer kennel service for a few days. But vet kennels are really basic. But because they’re so basic, they are cheaper. On the other hand, a luxury boarding kennel is sort of like a doggy hotel. At luxury kennels, dogs are given their own beds, are usually allowed in a play area the majority of the time and so more. Spoiled dogs do better at luxury boarding kennels. They are usually more expensive because they offer more features.\r\n<h3>Trust Your Instincts</h3>\r\n<img class=\"aligncenter wp-image-864\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_03.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nYour dog is like your baby, so it’s better to trust your instinct when it comes to visiting a potential kennel. If you feel something is off, move on to your next option.\r\n<h3>Look At How Clean The Kennel Is</h3>\r\n<img class=\"aligncenter wp-image-865\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_04.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nAlways be on the lookout for how clean the kennel is. You’ll want to find somewhere that doesn’t smell bad or is very dirty. This is usually a sign that your dog won’t be well taken care of. Look for another option if you see anything dirty.\r\n<h3>Indoor/Outdoor Access</h3>\r\n<img class=\"aligncenter wp-image-863\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_02.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nAn important thing to look for is where will your dog relieve itself and if there’s ample space for them to run around. Not being able to go can cause UTIs, diarrhea, discomfort and constipation. Some kennels won’t walk the dogs and let them go in their kennels.  Your dog\'s comfort should be a top priority.\r\n<h3>Someone Is Always There</h3>\r\n<img class=\"aligncenter wp-image-866\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_05.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nAlways ask if a staff member will be there at all times. You never know what might happen and need to ensure that your dog', 'What You Should Know About Boarding Your Dog', '', 'publish', 'open', 'open', '', 'what-you-should-know-about-boarding-your-dog', '', '', '2018-11-24 18:41:26', '2018-11-24 18:41:26', '', 0, 'http://pupsandstud.com/blog/?p=43', 0, 'post', '', 0),
(44, 1, '2018-11-24 18:41:26', '2018-11-24 18:41:26', 'At When you leave on a vacation somewhere and don\'t have anyone to sit for your dogs, the next best thing is to board them. These special dog hotels and boarding places will keep your dog safe and sound until you come back. Boarding your dog might seem like an easy thing to do, but before you do it, here are a few things you should know:\r\n<h3>Kennel vs Luxury Boarding</h3>\r\n<img class=\"aligncenter wp-image-862\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_01.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nThere’s a difference between kennel boarding and luxury boarding. Many vet’s offices offer kennel service for a few days. But vet kennels are really basic. But because they’re so basic, they are cheaper. On the other hand, a luxury boarding kennel is sort of like a doggy hotel. At luxury kennels, dogs are given their own beds, are usually allowed in a play area the majority of the time and so more. Spoiled dogs do better at luxury boarding kennels. They are usually more expensive because they offer more features.\r\n<h3>Trust Your Instincts</h3>\r\n<img class=\"aligncenter wp-image-864\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_03.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nYour dog is like your baby, so it’s better to trust your instinct when it comes to visiting a potential kennel. If you feel something is off, move on to your next option.\r\n<h3>Look At How Clean The Kennel Is</h3>\r\n<img class=\"aligncenter wp-image-865\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_04.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nAlways be on the lookout for how clean the kennel is. You’ll want to find somewhere that doesn’t smell bad or is very dirty. This is usually a sign that your dog won’t be well taken care of. Look for another option if you see anything dirty.\r\n<h3>Indoor/Outdoor Access</h3>\r\n<img class=\"aligncenter wp-image-863\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_02.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nAn important thing to look for is where will your dog relieve itself and if there’s ample space for them to run around. Not being able to go can cause UTIs, diarrhea, discomfort and constipation. Some kennels won’t walk the dogs and let them go in their kennels.  Your dog\'s comfort should be a top priority.\r\n<h3>Someone Is Always There</h3>\r\n<img class=\"aligncenter wp-image-866\" src=\"https://www.sitycare.com/blog/wp-content/uploads/2018/09/sitycare_boarding_kennel_05.jpg\" alt=\"\" width=\"700\" height=\"438\" />\r\n\r\nAlways ask if a staff member will be there at all times. You never know what might happen and need to ensure that your dog', 'What You Should Know About Boarding Your Dog', '', 'inherit', 'closed', 'closed', '', '43-revision-v1', '', '', '2018-11-24 18:41:26', '2018-11-24 18:41:26', '', 43, 'http://pupsandstud.com/blog/43-revision-v1/', 0, 'revision', '', 0),
(45, 1, '2018-11-24 18:50:25', '2018-11-24 18:50:25', '<h1>Grain Free Dog Foods May Link To Heart Disease</h1>\r\nNovember 14, 2018 by <a href=\"https://fidoseofreality.com/author/carolbry/\">Carol Bryant</a> <a href=\"https://fidoseofreality.com/grain-free-dog-foods/#comments\">13 Comments</a>\r\n\r\nHeart disease is a growing and common diagnosis in dogs. Max the Cocker Spaniel wasn’t doing so well. At the time, his mom, Patty Troup, was far from home and visits a local veterinarian with her dog. The vet tells her that Max has maybe three days to live. On the ride home, Troup phones her regular veterinarian with the devastating news. He wants to see the dog right away.\r\n\r\nMax is <strong><em>not</em></strong> going to die any time soon, and that first vet was wrong. He is, however, diagnosed with a heart murmur, congestive heart failure, and DCM, dilated cardiomyopathy, or an enlarged heart. Troup learns that some dog breeds lack taurine in their diets, which could have contributed to this condition. Armed with this information and under veterinary supervision, she starts Max on a taurine supplement twice a day.\r\n\r\nAt Max’s checkup recently, test results were alarmingly positive. The enlarged heart is substantially smaller and he is now considered low risk for congestive heart failure. Before and after photos of his heart are amazing. The veterinarian attributes this to the taurine supplement Max is receiving. In his case, he takes 1000 mg twice a day.\r\n\r\nOur own dog, Dexter, has a <a href=\"https://fidoseofreality.com/help-for-dogs-with-a-heart-murmur/\">heart murmur</a> that we follow closely. Long-time readers of this blog know that we see a veterinary cardiologist, supplement with CoQ10 enzyme, and give him four ounces of fermented raw goat’s milk every morning.\r\n\r\n<img style=\"height: 900px; width: 600px;\" src=\"https://fidoseofreality.com/wp-content/uploads/2018/11/grain-free-dog-food-683x1024.png\" alt=\"role of taurine in dog diet\" />\r\n<h2>Grain-Free Dog Food Dangers</h2>\r\nThe headlines sent dog lovers into panic mode: the summer of 2018 screamed of grain-free dog foods causing heart disease in dogs. From near constant dog food recalls to trying to pronounce ingredients that have no place in dog foods in the first place, pet parents had yet another critical issue to face. Just what is safe to feed our dogs anymore?\r\n\r\n&nbsp;\r\n\r\nReport this ad\r\n\r\n<a href=\"http://www.mediavine.com/\"><img style=\"height: 10px; width: 82px;\" src=\"image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKQAAAAUCAMAAAA0oWYGAAAANlBMVEUAAACkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKT0RuBeAAAAEXRSTlMAECAwQFBgcHuEj5+vv8/f7w0rGDcAAANcSURBVEjHzZbLlsMoDEQLMMYBPaj//9lZCDt2Oj1nZtesHCKbS0klwLFnACh9SwDQWkaM1Cj4I2OSDUAjtQAw8gUAyD6V9e9AcgA7SW6AktQEJPeMKQCaqqpKBoDDVNX2c1JVVW0k1PUsvRUAQLOIA4BNVVUK0FRUKwBsomIdaajoyEhdRaUAQFfRkZC6yjm0wUmyBSQTlAH9YgLMAQySJHcAyUiS/ZokSc6Mdv3wUXC+1AOyne/3a/IgSUH2kCa+ewBISnKW9c8agkmSc0G+ApIFOoFEeUN2ANtcUbHeN8i1nb7iznVJWa8bAAhJ1kCZZYXMbQV7RnpCxq9SSZKWZGHIBIQbLh5NpyZvSJ8+fVpaW/TYA7cH5NrZLME2CwLOErKR9BOSCiRZkEaSM8YIJblvS5SAHGjcPXyzIM9FbpBHziWXkhe9lLL7Eu0GeYreVlgD6krNByRf4YkTctZccsklLyUXJBekAJOyfSxS/Am5X+5rj4KY2w0yGTktdMoeBd+X3tnu6SZZcFdylru7b0qOpSTKtgI6yemkoMbDBemiotpPyHFV236DrCR186AakWZb5fOpJA39nm4TUbEd35Uctx7VSfqYtHSQIj+MY+kOOT4hB8kODaV3kiz59PJDSZ8kj3aH5Anzm5IPyNmMswp5/F/I7CQbDpKewrS1Lis/lRyNqzB+Qv4nJbkP0ia93iF9iIgej3RrNJcLcilTYhqD5OgkJX0qqauz3NM9RMT2S8n6r0pyjyYj2X43zgBQZzTOC1JJej/GOtgqSc7w+IeSM+X5hJz5q3F+VzI+cKS7cY6Ucsr5akE575M3/76Ajc+ufzZpz/hRk+Xsw+8WlFJKKYfTyJYXZP8FMuLqA3KamZnbFoaYFgTz1sxfd0i2q5jjfvVQ0q9GfKXbYwFdbx1L0bR9h2zhn8jIx7HI/ddjMVlk+3WMdWotaSu+KYnI14dxOKOk2deyCfMTUmITe1wJvlwwWG+QM46AdcF4G+p0VBh1poCc9wtGwepRzDjLM8Z1WkRgjtK+QzYz84piZg1J3XyPyTXcCup6VjnWVc3NfMfuZlavGavAy8183Y+yuLkWpOHmmgFkdXPJSOLvFWRZs68LSAkD/pkr+XuUPg8AqDozgPya/W8B/gPQAm/tWHkI8wAAAABJRU5ErkJggg==\" /></a>\r\n\r\nMarketing is a powerful selling tool for pet food manufacturers, and now the spotlight is not only shining on said manufacturers, but with Broadway-style wattage. Most dog owners want to be just that: owners of their dogs and not scientists to discern what might kill their dogs and what is healthy. Because we are a reality-based dog blog, we’ve done the research and here’s what we found.\r\n\r\nGrain-free gained popularity about 10 to 15 years ago. We’ve been attending industry expos and trade shows for a decade and see more and more grain-free options in the dog food space hitting the market. Though dogs are now social media superstars in many cases, they still have a primitive digestive system. With the rise in itchy, yeasty, ear infected dogs (thank you additives in dog foods), more canines have been diagnosed with food allergies. Grain-free swoops in with its mighty presence to the rescue. But is it really?\r\n\r\nDogs, like people, have different needs according to a lot of factors, just like humans.', 'Grain Free Dog Foods May Link To Heart Disease', '', 'publish', 'open', 'open', '', 'grain-free-dog-foods-may-link-to-heart-disease', '', '', '2018-11-24 18:50:25', '2018-11-24 18:50:25', '', 0, 'http://pupsandstud.com/blog/?p=45', 0, 'post', '', 0),
(47, 1, '2018-11-24 18:50:25', '2018-11-24 18:50:25', '<h1>Grain Free Dog Foods May Link To Heart Disease</h1>\r\nNovember 14, 2018 by <a href=\"https://fidoseofreality.com/author/carolbry/\">Carol Bryant</a> <a href=\"https://fidoseofreality.com/grain-free-dog-foods/#comments\">13 Comments</a>\r\n\r\nHeart disease is a growing and common diagnosis in dogs. Max the Cocker Spaniel wasn’t doing so well. At the time, his mom, Patty Troup, was far from home and visits a local veterinarian with her dog. The vet tells her that Max has maybe three days to live. On the ride home, Troup phones her regular veterinarian with the devastating news. He wants to see the dog right away.\r\n\r\nMax is <strong><em>not</em></strong> going to die any time soon, and that first vet was wrong. He is, however, diagnosed with a heart murmur, congestive heart failure, and DCM, dilated cardiomyopathy, or an enlarged heart. Troup learns that some dog breeds lack taurine in their diets, which could have contributed to this condition. Armed with this information and under veterinary supervision, she starts Max on a taurine supplement twice a day.\r\n\r\nAt Max’s checkup recently, test results were alarmingly positive. The enlarged heart is substantially smaller and he is now considered low risk for congestive heart failure. Before and after photos of his heart are amazing. The veterinarian attributes this to the taurine supplement Max is receiving. In his case, he takes 1000 mg twice a day.\r\n\r\nOur own dog, Dexter, has a <a href=\"https://fidoseofreality.com/help-for-dogs-with-a-heart-murmur/\">heart murmur</a> that we follow closely. Long-time readers of this blog know that we see a veterinary cardiologist, supplement with CoQ10 enzyme, and give him four ounces of fermented raw goat’s milk every morning.\r\n\r\n<img style=\"height: 900px; width: 600px;\" src=\"https://fidoseofreality.com/wp-content/uploads/2018/11/grain-free-dog-food-683x1024.png\" alt=\"role of taurine in dog diet\" />\r\n<h2>Grain-Free Dog Food Dangers</h2>\r\nThe headlines sent dog lovers into panic mode: the summer of 2018 screamed of grain-free dog foods causing heart disease in dogs. From near constant dog food recalls to trying to pronounce ingredients that have no place in dog foods in the first place, pet parents had yet another critical issue to face. Just what is safe to feed our dogs anymore?\r\n\r\n&nbsp;\r\n\r\nReport this ad\r\n\r\n<a href=\"http://www.mediavine.com/\"><img style=\"height: 10px; width: 82px;\" src=\"image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKQAAAAUCAMAAAA0oWYGAAAANlBMVEUAAACkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKT0RuBeAAAAEXRSTlMAECAwQFBgcHuEj5+vv8/f7w0rGDcAAANcSURBVEjHzZbLlsMoDEQLMMYBPaj//9lZCDt2Oj1nZtesHCKbS0klwLFnACh9SwDQWkaM1Cj4I2OSDUAjtQAw8gUAyD6V9e9AcgA7SW6AktQEJPeMKQCaqqpKBoDDVNX2c1JVVW0k1PUsvRUAQLOIA4BNVVUK0FRUKwBsomIdaajoyEhdRaUAQFfRkZC6yjm0wUmyBSQTlAH9YgLMAQySJHcAyUiS/ZokSc6Mdv3wUXC+1AOyne/3a/IgSUH2kCa+ewBISnKW9c8agkmSc0G+ApIFOoFEeUN2ANtcUbHeN8i1nb7iznVJWa8bAAhJ1kCZZYXMbQV7RnpCxq9SSZKWZGHIBIQbLh5NpyZvSJ8+fVpaW/TYA7cH5NrZLME2CwLOErKR9BOSCiRZkEaSM8YIJblvS5SAHGjcPXyzIM9FbpBHziWXkhe9lLL7Eu0GeYreVlgD6krNByRf4YkTctZccsklLyUXJBekAJOyfSxS/Am5X+5rj4KY2w0yGTktdMoeBd+X3tnu6SZZcFdylru7b0qOpSTKtgI6yemkoMbDBemiotpPyHFV236DrCR186AakWZb5fOpJA39nm4TUbEd35Uctx7VSfqYtHSQIj+MY+kOOT4hB8kODaV3kiz59PJDSZ8kj3aH5Anzm5IPyNmMswp5/F/I7CQbDpKewrS1Lis/lRyNqzB+Qv4nJbkP0ia93iF9iIgej3RrNJcLcilTYhqD5OgkJX0qqauz3NM9RMT2S8n6r0pyjyYj2X43zgBQZzTOC1JJej/GOtgqSc7w+IeSM+X5hJz5q3F+VzI+cKS7cY6Ucsr5akE575M3/76Ajc+ufzZpz/hRk+Xsw+8WlFJKKYfTyJYXZP8FMuLqA3KamZnbFoaYFgTz1sxfd0i2q5jjfvVQ0q9GfKXbYwFdbx1L0bR9h2zhn8jIx7HI/ddjMVlk+3WMdWotaSu+KYnI14dxOKOk2deyCfMTUmITe1wJvlwwWG+QM46AdcF4G+p0VBh1poCc9wtGwepRzDjLM8Z1WkRgjtK+QzYz84piZg1J3XyPyTXcCup6VjnWVc3NfMfuZlavGavAy8183Y+yuLkWpOHmmgFkdXPJSOLvFWRZs68LSAkD/pkr+XuUPg8AqDozgPya/W8B/gPQAm/tWHkI8wAAAABJRU5ErkJggg==\" /></a>\r\n\r\nMarketing is a powerful selling tool for pet food manufacturers, and now the spotlight is not only shining on said manufacturers, but with Broadway-style wattage. Most dog owners want to be just that: owners of their dogs and not scientists to discern what might kill their dogs and what is healthy. Because we are a reality-based dog blog, we’ve done the research and here’s what we found.\r\n\r\nGrain-free gained popularity about 10 to 15 years ago. We’ve been attending industry expos and trade shows for a decade and see more and more grain-free options in the dog food space hitting the market. Though dogs are now social media superstars in many cases, they still have a primitive digestive system. With the rise in itchy, yeasty, ear infected dogs (thank you additives in dog foods), more canines have been diagnosed with food allergies. Grain-free swoops in with its mighty presence to the rescue. But is it really?\r\n\r\nDogs, like people, have different needs according to a lot of factors, just like humans.', 'Grain Free Dog Foods May Link To Heart Disease', '', 'inherit', 'closed', 'closed', '', '45-revision-v1', '', '', '2018-11-24 18:50:25', '2018-11-24 18:50:25', '', 45, 'http://pupsandstud.com/blog/45-revision-v1/', 0, 'revision', '', 0),
(46, 0, '2018-11-24 18:47:54', '2018-11-24 18:47:54', '<h1>Grain Free Dog Foods May Link To Heart Disease</h1>\r\n\r\n<p>November 14, 2018&nbsp;by&nbsp;<a href=\"https://fidoseofreality.com/author/carolbry/\">Carol Bryant</a>&nbsp;<a href=\"https://fidoseofreality.com/grain-free-dog-foods/#comments\">13 Comments</a></p>\r\n\r\n<p>Heart disease is a growing and common diagnosis in dogs. Max the Cocker Spaniel wasn&rsquo;t doing so well. At the time, his mom, Patty Troup, was far from home and visits a local veterinarian with her dog. The vet tells her that Max has maybe three days to live. On the ride home, Troup phones her regular veterinarian with the devastating news. He wants to see the dog right away.</p>\r\n\r\n<p>Max is&nbsp;<strong><em>not</em></strong>&nbsp;going to die any time soon, and that first vet was wrong. He is, however, diagnosed with a heart murmur, congestive heart failure, and DCM, dilated cardiomyopathy, or an enlarged heart. Troup learns that some dog breeds lack taurine in their diets, which could have contributed to this condition. Armed with this information and under veterinary supervision, she starts Max on a taurine supplement twice a day.</p>\r\n\r\n<p>At Max&rsquo;s checkup recently, test results were alarmingly positive. The enlarged heart is substantially smaller and he is now considered low risk for congestive heart failure. Before and after photos of his heart are amazing. The veterinarian attributes this to the taurine supplement Max is receiving. In his case, he takes 1000 mg twice a day.</p>\r\n\r\n<p>Our own dog, Dexter, has a&nbsp;<a href=\"https://fidoseofreality.com/help-for-dogs-with-a-heart-murmur/\">heart murmur</a>&nbsp;that we follow closely. Long-time readers of this blog know that we see a veterinary cardiologist, supplement with CoQ10 enzyme, and give him four ounces of fermented raw goat&rsquo;s milk every morning.</p>\r\n\r\n<p><img alt=\"role of taurine in dog diet\" src=\"https://fidoseofreality.com/wp-content/uploads/2018/11/grain-free-dog-food-683x1024.png\" style=\"height:900px;width:600px\" /></p>\r\n\r\n<h2>Grain-Free Dog Food Dangers</h2>\r\n\r\n<p>The headlines sent dog lovers into panic mode: the summer of 2018 screamed of grain-free dog foods causing heart disease in dogs. From near constant dog food recalls to trying to pronounce ingredients that have no place in dog foods in the first place, pet parents had yet another critical issue to face. Just what is safe to feed our dogs anymore?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Report this ad</p>\r\n\r\n<p><a href=\"http://www.mediavine.com/\"><img src=\"image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKQAAAAUCAMAAAA0oWYGAAAANlBMVEUAAACkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKSkpKT0RuBeAAAAEXRSTlMAECAwQFBgcHuEj5+vv8/f7w0rGDcAAANcSURBVEjHzZbLlsMoDEQLMMYBPaj//9lZCDt2Oj1nZtesHCKbS0klwLFnACh9SwDQWkaM1Cj4I2OSDUAjtQAw8gUAyD6V9e9AcgA7SW6AktQEJPeMKQCaqqpKBoDDVNX2c1JVVW0k1PUsvRUAQLOIA4BNVVUK0FRUKwBsomIdaajoyEhdRaUAQFfRkZC6yjm0wUmyBSQTlAH9YgLMAQySJHcAyUiS/ZokSc6Mdv3wUXC+1AOyne/3a/IgSUH2kCa+ewBISnKW9c8agkmSc0G+ApIFOoFEeUN2ANtcUbHeN8i1nb7iznVJWa8bAAhJ1kCZZYXMbQV7RnpCxq9SSZKWZGHIBIQbLh5NpyZvSJ8+fVpaW/TYA7cH5NrZLME2CwLOErKR9BOSCiRZkEaSM8YIJblvS5SAHGjcPXyzIM9FbpBHziWXkhe9lLL7Eu0GeYreVlgD6krNByRf4YkTctZccsklLyUXJBekAJOyfSxS/Am5X+5rj4KY2w0yGTktdMoeBd+X3tnu6SZZcFdylru7b0qOpSTKtgI6yemkoMbDBemiotpPyHFV236DrCR186AakWZb5fOpJA39nm4TUbEd35Uctx7VSfqYtHSQIj+MY+kOOT4hB8kODaV3kiz59PJDSZ8kj3aH5Anzm5IPyNmMswp5/F/I7CQbDpKewrS1Lis/lRyNqzB+Qv4nJbkP0ia93iF9iIgej3RrNJcLcilTYhqD5OgkJX0qqauz3NM9RMT2S8n6r0pyjyYj2X43zgBQZzTOC1JJej/GOtgqSc7w+IeSM+X5hJz5q3F+VzI+cKS7cY6Ucsr5akE575M3/76Ajc+ufzZpz/hRk+Xsw+8WlFJKKYfTyJYXZP8FMuLqA3KamZnbFoaYFgTz1sxfd0i2q5jjfvVQ0q9GfKXbYwFdbx1L0bR9h2zhn8jIx7HI/ddjMVlk+3WMdWotaSu+KYnI14dxOKOk2deyCfMTUmITe1wJvlwwWG+QM46AdcF4G+p0VBh1poCc9wtGwepRzDjLM8Z1WkRgjtK+QzYz84piZg1J3XyPyTXcCup6VjnWVc3NfMfuZlavGavAy8183Y+yuLkWpOHmmgFkdXPJSOLvFWRZs68LSAkD/pkr+XuUPg8AqDozgPya/W8B/gPQAm/tWHkI8wAAAABJRU5ErkJggg==\" style=\"height:10px;width:82px\" /></a></p>\r\n\r\n<p>Marketing is a powerful selling tool for pet food manufacturers, and now the spotlight is not only shining on said manufacturers, but with Broadway-style wattage. Most dog owners want to be just that: owners of their dogs and not scientists to discern what might kill their dogs and what is healthy. Because we are a reality-based dog blog, we&rsquo;ve done the research and here&rsquo;s what we found.</p>\r\n\r\n<p>Grain-free gained popularity about 10 to 15 years ago. We&rsquo;ve been attending industry expos and trade shows for a decade and see more and more grain-free options in the dog food space hitting the market. Though dogs are now social media superstars in many cases, they still have a primitive digestive system. With the rise in itchy, yeasty, ear infected dogs (thank you additives in dog foods), more canines have been diagnosed with food allergies. Grain-free swoops in with its mighty presence to the rescue. But is it really?</p>\r\n\r\n<p>Dogs, like people, have different needs according to a lot of factors, just like humans.</p>\r\n', 'Grain Free Dog Foods May Link To Heart Disease', '', 'inherit', 'closed', 'closed', '', '45-revision-v1', '', '', '2018-11-24 18:47:54', '2018-11-24 18:47:54', '', 45, 'http://pupsandstud.com/blog/45-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0),
(2, 'sfsd', 'sfsd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(18, 1, 0),
(25, 1, 0),
(25, 2, 0),
(28, 1, 0),
(34, 1, 0),
(36, 1, 0),
(38, 1, 0),
(40, 1, 0),
(43, 1, 0),
(45, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 8),
(2, 2, 'post_tag', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'PupsAndStud'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'wp496_privacy'),
(15, 1, 'show_welcome_panel', '1'),
(21, 1, 'session_tokens', 'a:2:{s:64:\"0b0232a889dad60aa61de13e1d50f26dd16fabd104f0b91a6161d92e7b0d53db\";a:4:{s:10:\"expiration\";i:1543258164;s:2:\"ip\";s:14:\"107.193.132.78\";s:2:\"ua\";s:103:\"Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36\";s:5:\"login\";i:1543085364;}s:64:\"b9db28e12ace154e091846f53d0c985931e547da92f5796b8538ae4feb0b4767\";a:4:{s:10:\"expiration\";i:1544368918;s:2:\"ip\";s:13:\"217.74.121.63\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36\";s:5:\"login\";i:1543159318;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '32'),
(18, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:12:\"217.74.121.0\";}'),
(19, 1, 'wp_user-settings', 'editor=tinymce&libraryContent=browse'),
(20, 1, 'wp_user-settings-time', '1541860906');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'PupsAndStud', '$P$Byjlg6Ti6jNIEuEs267GPs/JLzFZeo0', 'pupsandstud', 'htchouasi@gmail.com', '', '2018-11-01 06:44:26', '', 0, 'PupsAndStud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_newsletter`
--
ALTER TABLE `wp_newsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `wp_user_id` (`wp_user_id`);

--
-- Indexes for table `wp_newsletter_emails`
--
ALTER TABLE `wp_newsletter_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_newsletter_sent`
--
ALTER TABLE `wp_newsletter_sent`
  ADD PRIMARY KEY (`email_id`,`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email_id` (`email_id`);

--
-- Indexes for table `wp_newsletter_stats`
--
ALTER TABLE `wp_newsletter_stats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email_id` (`email_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `wp_newsletter_user_logs`
--
ALTER TABLE `wp_newsletter_user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_newsletter`
--
ALTER TABLE `wp_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wp_newsletter_emails`
--
ALTER TABLE `wp_newsletter_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_newsletter_stats`
--
ALTER TABLE `wp_newsletter_stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_newsletter_user_logs`
--
ALTER TABLE `wp_newsletter_user_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2725;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
