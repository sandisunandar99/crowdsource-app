-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: mysqldb
-- Generation Time: Nov 15, 2019 at 02:31 AM
-- Server version: 5.7.22
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jds_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `jds_answers`
--

CREATE TABLE `jds_answers` (
  `qid` int(11) NOT NULL,
  `code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortorder` int(11) NOT NULL,
  `assessment_value` int(11) NOT NULL DEFAULT '0',
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `scale_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_answers`
--

INSERT INTO `jds_answers` (`qid`, `code`, `answer`, `sortorder`, `assessment_value`, `language`, `scale_id`) VALUES
(8, 'V2', 'Sapi ', 2, 0, 'en', 0),
(8, 'V1', 'Ikan', 1, 0, 'en', 0),
(8, 'V3', 'Kambing', 3, 0, 'en', 0),
(9, 'B1', 'Sapi Bali', 4, 0, 'en', 0),
(9, 'B2', 'Sapi Bule', 5, 0, 'en', 0),
(9, 'A3', 'Burayak', 3, 0, 'en', 0),
(9, 'A2', 'Cupang', 2, 0, 'en', 0),
(9, 'A1', 'Koi', 1, 0, 'en', 0),
(9, 'A6', '', 6, 0, 'en', 0),
(332, 'C', 'Customer1:Alternative energy', 3, 1, 'en', 0),
(332, 'D', 'Customer2:Microtechnologies', 4, 1, 'en', 0),
(332, 'E', 'Customer2:Nanotechnologies', 5, 1, 'en', 0),
(332, 'F', 'Customer3:Innovation', 6, 1, 'en', 0),
(333, 'A1', 'healthy_food', 1, 1, 'en', 0),
(333, 'A2', 'eating_habits', 2, 1, 'en', 0),
(333, 'A3', 'lifestyle', 3, 1, 'en', 0),
(333, 'B1', 'new_cities', 4, 1, 'en', 0),
(333, 'B2', 'ecological_cities', 5, 1, 'en', 0),
(333, 'B3', 'green_areas', 6, 1, 'en', 0),
(333, 'C1', 'solar_panels', 7, 1, 'en', 0),
(333, 'C2', 'new_fuels', 8, 1, 'en', 0),
(333, 'D1', 'microtech', 9, 1, 'en', 0),
(333, 'D2', 'lithography', 10, 1, 'en', 0),
(333, 'D3', 'optical_lithografy', 11, 1, 'en', 0),
(333, 'E1', 'nanotech', 12, 1, 'en', 0),
(333, 'F1', 'inn_forpeople', 13, 1, 'en', 0),
(333, 'F2', 'inn_forenv', 14, 1, 'en', 0),
(332, 'B', 'Customer1:Smart Cities', 2, 1, 'en', 0),
(332, 'A', 'Customer1:Healthy Life', 1, 1, 'en', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jds_assessments`
--

CREATE TABLE `jds_assessments` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL DEFAULT '0',
  `scope` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gid` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `minimum` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maximum` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_asset_version`
--

CREATE TABLE `jds_asset_version` (
  `id` int(11) NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_boxes`
--

CREATE TABLE `jds_boxes` (
  `id` int(11) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ico` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `page` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usergroup` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_boxes`
--

INSERT INTO `jds_boxes` (`id`, `position`, `url`, `title`, `ico`, `desc`, `page`, `usergroup`) VALUES
(1, 1, 'admin/survey/sa/newsurvey', 'Create survey', 'icon-add', 'Create a new survey', 'welcome', -2),
(2, 2, 'admin/survey/sa/listsurveys', 'List surveys', 'icon-list', 'List available surveys', 'welcome', -1),
(3, 3, 'admin/globalsettings', 'Global settings', 'icon-settings', 'Edit global settings', 'welcome', -2),
(4, 4, 'admin/update', 'ComfortUpdate', 'icon-shield', 'Stay safe and up to date', 'welcome', -2),
(5, 5, 'https://www.limesurvey.org/limestore', 'LimeStore', 'fa fa-cart-plus', 'LimeSurvey extension marketplace', 'welcome', -2),
(6, 6, 'admin/themeoptions', 'Themes', 'icon-templates', 'Themes', 'welcome', -2);

-- --------------------------------------------------------

--
-- Table structure for table `jds_conditions`
--

CREATE TABLE `jds_conditions` (
  `cid` int(11) NOT NULL,
  `qid` int(11) NOT NULL DEFAULT '0',
  `cqid` int(11) NOT NULL DEFAULT '0',
  `cfieldname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `method` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `scenario` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_defaultvalues`
--

CREATE TABLE `jds_defaultvalues` (
  `qid` int(11) NOT NULL DEFAULT '0',
  `scale_id` int(11) NOT NULL DEFAULT '0',
  `sqid` int(11) NOT NULL DEFAULT '0',
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialtype` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `defaultvalue` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_expression_errors`
--

CREATE TABLE `jds_expression_errors` (
  `id` int(11) NOT NULL,
  `errortime` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `gid` int(11) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `gseq` int(11) DEFAULT NULL,
  `qseq` int(11) DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eqn` text COLLATE utf8mb4_unicode_ci,
  `prettyprint` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_failed_login_attempts`
--

CREATE TABLE `jds_failed_login_attempts` (
  `id` int(11) NOT NULL,
  `ip` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_attempt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_attempts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_groups`
--

CREATE TABLE `jds_groups` (
  `gid` int(11) NOT NULL,
  `sid` int(11) NOT NULL DEFAULT '0',
  `group_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `group_order` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `randomization_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `grelevance` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_groups`
--

INSERT INTO `jds_groups` (`gid`, `sid`, `group_name`, `group_order`, `description`, `language`, `randomization_group`, `grelevance`) VALUES
(1, 136271, 'Data Penduduk', 0, 'Biodata kependudukan sesuai dengan identitas KTP', 'id', '', ''),
(2, 827137, 'Single Choise Question', 1, '', 'en', '', ''),
(18, 22769, 'A- Linked Dropdown Lists', 0, 'Linked Dropdown Lists', 'en', '', ''),
(19, 136271, 'Survey Kegiatan Kependudukan', 1, 'Survey untuk mengetahui kegiatan apa saja yang dilakukan di masyarakat desa', 'id', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jds_labels`
--

CREATE TABLE `jds_labels` (
  `id` int(11) NOT NULL,
  `lid` int(11) NOT NULL DEFAULT '0',
  `code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `title` text COLLATE utf8mb4_unicode_ci,
  `sortorder` int(11) NOT NULL,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `assessment_value` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_labelsets`
--

CREATE TABLE `jds_labelsets` (
  `lid` int(11) NOT NULL,
  `label_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `languages` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'en'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_map_tutorial_users`
--

CREATE TABLE `jds_map_tutorial_users` (
  `tid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `taken` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_notifications`
--

CREATE TABLE `jds_notifications` (
  `id` int(11) NOT NULL,
  `entity` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `importance` int(11) NOT NULL DEFAULT '1',
  `display_class` varchar(31) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `hash` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `first_read` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_notifications`
--

INSERT INTO `jds_notifications` (`id`, `entity`, `entity_id`, `title`, `message`, `status`, `importance`, `display_class`, `hash`, `created`, `first_read`) VALUES
(1, 'user', 1, 'SSL not enforced', '<span class=\"fa fa-exclamation-circle text-warning\"></span>&nbsp;Warning: Please enforce SSL encrpytion in Global settings/Security after SSL is properly configured for your webserver.', 'new', 1, 'default', '72d109bee95d1381831c7f2e8eade340a523f9702f5ec2c7cc2d25726bec3e9a', '2019-11-12 09:25:54', '2019-11-12 03:26:05'),
(2, 'user', 1, 'Password warning', '<span class=\"fa fa-exclamation-circle text-warning\"></span>&nbsp;Peringatan: Anda masih menggunakan sandi standar (&#039;password&#039;). Harap ganti sandi dan coba masuk lagi.', 'new', 1, 'default', '29521800145fb0e12ee79e5ed7618b06d30319524ded085e563b92e706935c03', '2019-11-12 09:28:20', '2019-11-12 03:28:29'),
(3, 'user', 1, 'LimeSurvey 3.0 theme editor', 'Welcome to the new theme editor of LimeSurvey 3.0. To get an overview of new functionality and possibilities, please visit the <a target=\"_blank\" href=\"https://manual.limesurvey.org/New_Template_System_in_LS3.x\"> LimeSurvey manual </a>. For further questions and information, feel free to post your questions on the <a target=\"_blank\" href=\"https://www.limesurvey.org/community/forums\"> LimeSurvey forums </a>.', 'read', 1, 'default', '8b3b8a34fbfb94bc4daab4ed3160f38ea96b4b1cb5714abbf7259d58f9368981', '2019-11-12 16:03:52', '2019-11-12 10:03:56'),
(4, 'user', 1, 'Password warning', '<span class=\"fa fa-exclamation-circle text-warning\"></span>&nbsp;Warning: You are still using the default password (&#039;password&#039;). Please change your password and re-login again.', 'new', 1, 'default', '347fdd7195c8f6815afbeaec395be28315230e1279c60a904f46c12749c0240a', '2019-11-15 02:10:07', '2019-11-15 02:10:11'),
(5, 'user', 4, 'SSL not enforced', '<span class=\"fa fa-exclamation-circle text-warning\"></span>&nbsp;Warning: Please enforce SSL encrpytion in Global settings/Security after SSL is properly configured for your webserver.', 'new', 1, 'default', '924b9f1a86d0a951994c6fcc6d5c729fcf106f82fb153f76b834658cd25bc450', '2019-11-15 02:20:41', '2019-11-15 02:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `jds_participants`
--

CREATE TABLE `jds_participants` (
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blacklisted` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_uid` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_participant_attribute`
--

CREATE TABLE `jds_participant_attribute` (
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_participant_attribute_names`
--

CREATE TABLE `jds_participant_attribute_names` (
  `attribute_id` int(11) NOT NULL,
  `attribute_type` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `defaultname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_participant_attribute_names_lang`
--

CREATE TABLE `jds_participant_attribute_names_lang` (
  `attribute_id` int(11) NOT NULL,
  `attribute_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_participant_attribute_values`
--

CREATE TABLE `jds_participant_attribute_values` (
  `value_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_participant_shares`
--

CREATE TABLE `jds_participant_shares` (
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `share_uid` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `can_edit` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_permissions`
--

CREATE TABLE `jds_permissions` (
  `id` int(11) NOT NULL,
  `entity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entity_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `permission` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_p` int(11) NOT NULL DEFAULT '0',
  `read_p` int(11) NOT NULL DEFAULT '0',
  `update_p` int(11) NOT NULL DEFAULT '0',
  `delete_p` int(11) NOT NULL DEFAULT '0',
  `import_p` int(11) NOT NULL DEFAULT '0',
  `export_p` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_permissions`
--

INSERT INTO `jds_permissions` (`id`, `entity`, `entity_id`, `uid`, `permission`, `create_p`, `read_p`, `update_p`, `delete_p`, `import_p`, `export_p`) VALUES
(1, 'global', 0, 1, 'superadmin', 0, 1, 0, 0, 0, 0),
(6, 'global', 0, 2, 'labelsets', 1, 1, 1, 1, 1, 1),
(3, 'template', 0, 2, 'fruity', 0, 1, 0, 0, 0, 0),
(7, 'global', 0, 2, 'surveys', 1, 1, 1, 1, 0, 1),
(8, 'global', 0, 2, 'auth_db', 0, 1, 0, 0, 0, 0),
(9, 'survey', 136271, 1, 'assessments', 1, 1, 1, 1, 0, 0),
(10, 'survey', 136271, 1, 'translations', 0, 1, 1, 0, 0, 0),
(11, 'survey', 136271, 1, 'quotas', 1, 1, 1, 1, 0, 0),
(12, 'survey', 136271, 1, 'responses', 1, 1, 1, 1, 1, 1),
(13, 'survey', 136271, 1, 'statistics', 0, 1, 0, 0, 0, 0),
(14, 'survey', 136271, 1, 'surveyactivation', 0, 0, 1, 0, 0, 0),
(15, 'survey', 136271, 1, 'surveycontent', 1, 1, 1, 1, 1, 1),
(16, 'survey', 136271, 1, 'survey', 0, 1, 0, 1, 0, 0),
(17, 'survey', 136271, 1, 'surveysecurity', 1, 1, 1, 1, 0, 0),
(18, 'survey', 136271, 1, 'surveysettings', 0, 1, 1, 0, 0, 0),
(19, 'survey', 136271, 1, 'surveylocale', 0, 1, 1, 0, 0, 0),
(20, 'survey', 136271, 1, 'tokens', 1, 1, 1, 1, 1, 1),
(21, 'survey', 827137, 1, 'assessments', 1, 1, 1, 1, 0, 0),
(22, 'survey', 827137, 1, 'translations', 0, 1, 1, 0, 0, 0),
(23, 'survey', 827137, 1, 'quotas', 1, 1, 1, 1, 0, 0),
(24, 'survey', 827137, 1, 'responses', 1, 1, 1, 1, 1, 1),
(25, 'survey', 827137, 1, 'statistics', 0, 1, 0, 0, 0, 0),
(26, 'survey', 827137, 1, 'surveyactivation', 0, 0, 1, 0, 0, 0),
(27, 'survey', 827137, 1, 'surveycontent', 1, 1, 1, 1, 1, 1),
(28, 'survey', 827137, 1, 'survey', 0, 1, 0, 1, 0, 0),
(29, 'survey', 827137, 1, 'surveysecurity', 1, 1, 1, 1, 0, 0),
(30, 'survey', 827137, 1, 'surveysettings', 0, 1, 1, 0, 0, 0),
(31, 'survey', 827137, 1, 'surveylocale', 0, 1, 1, 0, 0, 0),
(32, 'survey', 827137, 1, 'tokens', 1, 1, 1, 1, 1, 1),
(104, 'survey', 22769, 1, 'tokens', 1, 1, 1, 1, 1, 1),
(96, 'survey', 22769, 1, 'responses', 1, 1, 1, 1, 1, 1),
(97, 'survey', 22769, 1, 'statistics', 0, 1, 0, 0, 0, 0),
(98, 'survey', 22769, 1, 'surveyactivation', 0, 0, 1, 0, 0, 0),
(99, 'survey', 22769, 1, 'surveycontent', 1, 1, 1, 1, 1, 1),
(100, 'survey', 22769, 1, 'survey', 0, 1, 0, 1, 0, 0),
(101, 'survey', 22769, 1, 'surveysecurity', 1, 1, 1, 1, 0, 0),
(102, 'survey', 22769, 1, 'surveysettings', 0, 1, 1, 0, 0, 0),
(103, 'survey', 22769, 1, 'surveylocale', 0, 1, 1, 0, 0, 0),
(93, 'survey', 22769, 1, 'assessments', 1, 1, 1, 1, 0, 0),
(94, 'survey', 22769, 1, 'translations', 0, 1, 1, 0, 0, 0),
(95, 'survey', 22769, 1, 'quotas', 1, 1, 1, 1, 0, 0),
(126, 'global', 0, 4, 'users', 1, 1, 1, 1, 0, 0),
(118, 'template', 0, 4, 'fruity', 0, 1, 0, 0, 0, 0),
(121, 'global', 0, 4, 'labelsets', 1, 1, 1, 1, 1, 1),
(125, 'global', 0, 4, 'usergroups', 1, 1, 1, 1, 0, 0),
(124, 'global', 0, 4, 'templates', 1, 1, 1, 1, 1, 1),
(123, 'global', 0, 4, 'surveys', 1, 1, 1, 1, 0, 1),
(122, 'global', 0, 4, 'settings', 0, 1, 1, 0, 1, 0),
(120, 'global', 0, 4, 'participantpanel', 1, 1, 1, 1, 1, 1),
(127, 'global', 0, 4, 'superadmin', 1, 1, 0, 0, 0, 0),
(128, 'global', 0, 4, 'auth_db', 0, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jds_plugins`
--

CREATE TABLE `jds_plugins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `version` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_plugins`
--

INSERT INTO `jds_plugins` (`id`, `name`, `active`, `version`) VALUES
(1, 'Authdb', 1, NULL),
(2, 'AuditLog', 0, NULL),
(3, 'Authwebserver', 0, NULL),
(4, 'AuthLDAP', 0, NULL),
(5, 'oldUrlCompat', 0, NULL),
(6, 'ExportR', 0, NULL),
(7, 'ExportSTATAxml', 0, NULL),
(8, 'addScriptToQuestion', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jds_plugin_settings`
--

CREATE TABLE `jds_plugin_settings` (
  `id` int(11) NOT NULL,
  `plugin_id` int(11) NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `key` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_plugin_settings`
--

INSERT INTO `jds_plugin_settings` (`id`, `plugin_id`, `model`, `model_id`, `key`, `value`) VALUES
(1, 8, NULL, NULL, 'scriptPositionAvailable', '\"1\"'),
(2, 8, NULL, NULL, 'scriptPositionDefault', '\"2\"');

-- --------------------------------------------------------

--
-- Table structure for table `jds_questions`
--

CREATE TABLE `jds_questions` (
  `qid` int(11) NOT NULL,
  `parent_qid` int(11) NOT NULL DEFAULT '0',
  `sid` int(11) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL DEFAULT '0',
  `type` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'T',
  `title` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preg` text COLLATE utf8mb4_unicode_ci,
  `help` text COLLATE utf8mb4_unicode_ci,
  `other` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `mandatory` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_order` int(11) NOT NULL,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `scale_id` int(11) NOT NULL DEFAULT '0',
  `same_default` int(11) NOT NULL DEFAULT '0',
  `relevance` text COLLATE utf8mb4_unicode_ci,
  `modulename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_questions`
--

INSERT INTO `jds_questions` (`qid`, `parent_qid`, `sid`, `gid`, `type`, `title`, `question`, `preg`, `help`, `other`, `mandatory`, `question_order`, `language`, `scale_id`, `same_default`, `relevance`, `modulename`) VALUES
(1, 0, 136271, 1, 'S', 'Q1', 'Masukan Nama Susuai KTP.', '', '', 'N', 'N', 1, 'id', 0, 0, '1', ''),
(7, 0, 827137, 2, '5', 'Q1', '5 Point Choise', '', '', 'N', 'N', 1, 'en', 0, 0, '1', ''),
(8, 0, 827137, 2, '!', 'Q2', 'List Drop Down', '', '', 'N', 'N', 2, 'en', 0, 0, '1', ''),
(9, 0, 827137, 2, '!', 'Q3', 'Drop down 2\r\n<script>\r\njQuery(document).ready(function(){\r\n       alert(\'onload alert!\');\r\n\r\n});\r\n\r\n</script>', '', '', 'N', 'N', 3, 'en', 0, 0, '1', ''),
(332, 0, 22769, 18, '!', 'FATH', 'Question FATHER', '', '', 'N', 'N', 0, 'en', 0, 0, '', NULL),
(333, 0, 22769, 18, '!', 'CHILD', '<script type=\'text/javascript\' src=\'{TEMPLATEURL}scripts/tests_Survey.js\'></script><script type=\"text/javascript\" charset=\"utf-8\">\r\nselectFilterByCode({QID},{GID},{SID}, 1);\r\n</script>', '', '', 'N', 'N', 1, 'en', 0, 0, '1', ''),
(334, 0, 136271, 1, 'N', 'Q2', 'Masukan Nomor KTP', '', '', 'N', 'N', 2, 'id', 0, 0, '1', ''),
(335, 0, 136271, 1, ':', 'Q3', 'Masukan Daerah Asal.\r\n<script type=\'text/javascript\' src=\'{TEMPLATEURL}scripts/kependudukandaerah_Survey.js\'></script><script type=\"text/javascript\" charset=\"utf-8\">\r\nselectFilterByCode({QID},{GID},{SID}, 1);\r\n</script>', '', '', 'N', 'N', 3, 'id', 0, 0, '1', ''),
(336, 335, 136271, 1, 'T', 'A1', '', NULL, NULL, 'N', NULL, 1, 'id', 0, 0, '1', ''),
(337, 335, 136271, 1, 'T', 'AA1', 'Provinsi', NULL, NULL, 'N', NULL, 1, 'id', 1, 0, '', ''),
(338, 335, 136271, 1, 'T', 'AA2', 'Kota / Kabupaten', NULL, NULL, 'N', NULL, 2, 'id', 1, 0, '', ''),
(340, 335, 136271, 1, 'T', 'AA3', 'Kecamatan / Desa', NULL, NULL, 'N', NULL, 3, 'id', 1, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `jds_question_attributes`
--

CREATE TABLE `jds_question_attributes` (
  `qaid` int(11) NOT NULL,
  `qid` int(11) NOT NULL DEFAULT '0',
  `attribute` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `language` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_question_attributes`
--

INSERT INTO `jds_question_attributes` (`qaid`, `qid`, `attribute`, `value`, `language`) VALUES
(2, 7, 'slider_rating', '1', NULL),
(658, 332, 'alphasort', '0', NULL),
(659, 332, 'category_separator', ':', NULL),
(660, 332, 'dropdown_prefix', '0', NULL),
(661, 332, 'dropdown_size', '0', NULL),
(662, 332, 'hidden', '0', NULL),
(663, 332, 'hide_tip', '0', NULL),
(664, 332, 'other_comment_mandatory', '0', NULL),
(665, 332, 'other_replace_text', '', 'en'),
(666, 332, 'page_break', '0', NULL),
(667, 332, 'public_statistics', '0', NULL),
(668, 332, 'random_group', '', NULL),
(669, 332, 'random_order', '0', NULL),
(670, 332, 'scale_export', '0', NULL),
(731, 333, 'dropdown_size', '0', NULL),
(718, 334, 'hide_tip', '1', NULL),
(732, 335, 'answer_width', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jds_quota`
--

CREATE TABLE `jds_quota` (
  `id` int(11) NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qlimit` int(11) DEFAULT NULL,
  `action` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `autoload_url` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_quota_languagesettings`
--

CREATE TABLE `jds_quota_languagesettings` (
  `quotals_id` int(11) NOT NULL,
  `quotals_quota_id` int(11) NOT NULL DEFAULT '0',
  `quotals_language` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `quotals_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quotals_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quotals_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quotals_urldescrip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_quota_members`
--

CREATE TABLE `jds_quota_members` (
  `id` int(11) NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `quota_id` int(11) DEFAULT NULL,
  `code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_saved_control`
--

CREATE TABLE `jds_saved_control` (
  `scid` int(11) NOT NULL,
  `sid` int(11) NOT NULL DEFAULT '0',
  `srid` int(11) NOT NULL DEFAULT '0',
  `identifier` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `saved_thisstep` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `saved_date` datetime NOT NULL,
  `refurl` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_sessions`
--

CREATE TABLE `jds_sessions` (
  `id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire` int(11) DEFAULT NULL,
  `data` longblob
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_settings_global`
--

CREATE TABLE `jds_settings_global` (
  `stg_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `stg_value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_settings_global`
--

INSERT INTO `jds_settings_global` (`stg_name`, `stg_value`) VALUES
('DBVersion', '359'),
('SessionName', '(%/O`DUf{${~msoKr0<S>9sA`c}:_V\'{J?myK[=[M{L4qI4qw/-m$xZXLaC:x1_a'),
('sitename', 'JDS-Survey'),
('siteadminname', 'Administrator'),
('siteadminemail', 'sandisunandar99@gmail.com'),
('siteadminbounce', 'sandisunandar99@gmail.com'),
('defaultlang', 'en'),
('AssetsVersion', '30104'),
('restrictToLanguages', 'id en'),
('defaulthtmleditormode', 'inline'),
('defaultquestionselectormode', 'default'),
('defaultthemeteeditormode', 'default'),
('javascriptdebugbcknd', '0'),
('javascriptdebugfrntnd', '0'),
('defaulttheme', 'fruity'),
('x_frame_options', 'allow'),
('force_ssl', 'off'),
('admintheme', 'Black_Pearl'),
('emailmethod', 'mail'),
('emailsmtphost', ''),
('emailsmtppassword', ''),
('bounceaccounthost', ''),
('bounceaccounttype', 'off'),
('bounceencryption', 'off'),
('bounceaccountuser', ''),
('bounceaccountpass', ''),
('emailsmtpssl', ''),
('emailsmtpdebug', '0'),
('emailsmtpuser', ''),
('filterxsshtml', '1'),
('shownoanswer', '1'),
('showxquestions', 'choose'),
('showgroupinfo', 'choose'),
('showqnumcode', 'choose'),
('repeatheadings', '25'),
('maxemails', '50'),
('iSessionExpirationTime', '7200'),
('ipInfoDbAPIKey', ''),
('pdffontsize', '9'),
('pdfshowsurveytitle', 'Y'),
('pdfshowheader', 'N'),
('pdflogowidth', '50'),
('pdfheadertitle', ''),
('pdfheaderstring', ''),
('bPdfQuestionFill', '1'),
('bPdfQuestionBold', '0'),
('bPdfQuestionBorder', '1'),
('bPdfResponseBorder', '1'),
('googleMapsAPIKey', ''),
('googleanalyticsapikey', ''),
('googletranslateapikey', ''),
('surveyPreview_require_Auth', '1'),
('RPCInterface', 'json'),
('rpc_publish_api', ''),
('add_access_control_header', '1'),
('characterset', 'auto'),
('sideMenuBehaviour', 'adaptive'),
('timeadjust', '+0 minutes'),
('usercontrolSameGroupPolicy', '1'),
('show_logo', 'show'),
('last_survey_1', '136271'),
('last_question_1_827137_gid', '2'),
('last_question_sid_1', '136271'),
('last_question_1', '335'),
('last_question_1_136271', '335'),
('last_question_1_136271_gid', '1'),
('last_question_1_827137', '8'),
('last_question_gid_1', '1'),
('last_question_1_22769', '333'),
('last_question_1_22769_gid', '18');

-- --------------------------------------------------------

--
-- Table structure for table `jds_settings_user`
--

CREATE TABLE `jds_settings_user` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `entity` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity_id` varchar(31) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stg_name` varchar(63) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stg_value` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_settings_user`
--

INSERT INTO `jds_settings_user` (`id`, `uid`, `entity`, `entity_id`, `stg_name`, `stg_value`) VALUES
(1, 1, NULL, NULL, 'quickaction_state', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jds_surveymenu`
--

CREATE TABLE `jds_surveymenu` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `survey_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordering` int(11) DEFAULT '0',
  `level` int(11) DEFAULT '0',
  `title` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `position` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'side',
  `description` text COLLATE utf8mb4_unicode_ci,
  `showincollapse` int(11) DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `changed_at` datetime DEFAULT NULL,
  `changed_by` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_surveymenu`
--

INSERT INTO `jds_surveymenu` (`id`, `parent_id`, `survey_id`, `user_id`, `name`, `ordering`, `level`, `title`, `position`, `description`, `showincollapse`, `active`, `changed_at`, `changed_by`, `created_at`, `created_by`) VALUES
(1, NULL, NULL, NULL, 'settings', 1, 0, 'Survey settings', 'side', 'Survey settings', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(2, NULL, NULL, NULL, 'mainmenu', 2, 0, 'Survey menu', 'side', 'Main survey menu', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(3, NULL, NULL, NULL, 'quickmenu', 3, 0, 'Quick menu', 'collapsed', 'Quick menu', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jds_surveymenu_entries`
--

CREATE TABLE `jds_surveymenu_entries` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ordering` int(11) DEFAULT '0',
  `name` varchar(168) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `title` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_title` varchar(168) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_description` text COLLATE utf8mb4_unicode_ci,
  `menu_icon` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_icon_type` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_class` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_link` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `action` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `template` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `partial` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `classes` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `permission` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `permission_grade` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  `getdatamethod` varchar(192) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `language` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en-GB',
  `showincollapse` int(11) DEFAULT '0',
  `active` int(11) NOT NULL DEFAULT '0',
  `changed_at` datetime DEFAULT NULL,
  `changed_by` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_surveymenu_entries`
--

INSERT INTO `jds_surveymenu_entries` (`id`, `menu_id`, `user_id`, `ordering`, `name`, `title`, `menu_title`, `menu_description`, `menu_icon`, `menu_icon_type`, `menu_class`, `menu_link`, `action`, `template`, `partial`, `classes`, `permission`, `permission_grade`, `data`, `getdatamethod`, `language`, `showincollapse`, `active`, `changed_at`, `changed_by`, `created_at`, `created_by`) VALUES
(1, 1, NULL, 1, 'overview', 'Survey overview', 'Overview', 'Open the general survey overview', 'list', 'fontawesome', '', 'admin/survey/sa/view', '', '', '', '', '', '', '{\"render\": { \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(2, 1, NULL, 2, 'generalsettings', 'General survey settings', 'General settings', 'Open general survey settings', 'gears', 'fontawesome', '', '', 'updatesurveylocalesettings_generalsettings', 'editLocalSettings_main_view', '/admin/survey/subview/accordion/_generaloptions_panel', '', 'surveysettings', 'read', NULL, '_generalTabEditSurvey', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(3, 1, NULL, 3, 'surveytexts', 'Survey text elements', 'Text elements', 'Survey text elements', 'file-text-o', 'fontawesome', '', '', 'updatesurveylocalesettings', 'editLocalSettings_main_view', '/admin/survey/subview/tab_edit_view', '', 'surveylocale', 'read', NULL, '_getTextEditData', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(4, 1, NULL, 4, 'datasecurity', 'Data policy settings', 'Data policy settings', 'Edit data policy settings', 'shield', 'fontawesome', '', '', 'updatesurveylocalesettings', 'editLocalSettings_main_view', '/admin/survey/subview/tab_edit_view_datasecurity', '', 'surveylocale', 'read', NULL, '_getDataSecurityEditData', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(5, 1, NULL, 5, 'theme_options', 'Theme options', 'Theme options', 'Edit theme options for this survey', 'paint-brush', 'fontawesome', '', 'admin/themeoptions/sa/updatesurvey', '', '', '', '', 'surveysettings', 'update', '{\"render\": {\"link\": { \"pjaxed\": true, \"data\": {\"surveyid\": [\"survey\",\"sid\"], \"gsid\":[\"survey\",\"gsid\"]}}}}', '', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(6, 1, NULL, 6, 'presentation', 'Presentation & navigation settings', 'Presentation', 'Edit presentation and navigation settings', 'eye-slash', 'fontawesome', '', '', 'updatesurveylocalesettings', 'editLocalSettings_main_view', '/admin/survey/subview/accordion/_presentation_panel', '', 'surveylocale', 'read', NULL, '_tabPresentationNavigation', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(7, 1, NULL, 7, 'tokens', 'Survey participant settings', 'Participant settings', 'Set additional options for survey participants', 'users', 'fontawesome', '', '', 'updatesurveylocalesettings', 'editLocalSettings_main_view', '/admin/survey/subview/accordion/_tokens_panel', '', 'surveylocale', 'read', NULL, '_tabTokens', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(8, 1, NULL, 8, 'notification', 'Notification and data management settings', 'Notifications & data', 'Edit settings for notification and data management', 'feed', 'fontawesome', '', '', 'updatesurveylocalesettings', 'editLocalSettings_main_view', '/admin/survey/subview/accordion/_notification_panel', '', 'surveylocale', 'read', NULL, '_tabNotificationDataManagement', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(9, 1, NULL, 9, 'publication', 'Publication & access control settings', 'Publication & access', 'Edit settings for publication and access control', 'key', 'fontawesome', '', '', 'updatesurveylocalesettings', 'editLocalSettings_main_view', '/admin/survey/subview/accordion/_publication_panel', '', 'surveylocale', 'read', NULL, '_tabPublicationAccess', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(10, 2, NULL, 1, 'listQuestions', 'List questions', 'List questions', 'List questions', 'list', 'fontawesome', '', 'admin/survey/sa/listquestions', '', '', '', '', 'surveycontent', 'read', '{\"render\": { \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(11, 2, NULL, 2, 'listQuestionGroups', 'List question groups', 'List question groups', 'List question groups', 'th-list', 'fontawesome', '', 'admin/survey/sa/listquestiongroups', '', '', '', '', 'surveycontent', 'read', '{\"render\": { \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(12, 2, NULL, 3, 'reorder', 'Reorder questions/question groups', 'Reorder questions/question groups', 'Reorder questions/question groups', 'icon-organize', 'iconclass', '', 'admin/survey/sa/organize/', '', '', '', '', 'surveycontent', 'update', '{\"render\": {\"isActive\": false, \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(13, 2, NULL, 4, 'responses', 'Responses', 'Responses', 'Responses', 'icon-browse', 'iconclass', '', 'admin/responses/sa/browse/', '', '', '', '', 'responses', 'read', '{\"render\": {\"isActive\": true, \"link\": {\"data\": {\"surveyid\": [\"survey\", \"sid\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(14, 2, NULL, 5, 'participants', 'Survey participants', 'Survey participants', 'Go to survey participant and token settings', 'user', 'fontawesome', '', 'admin/tokens/sa/index/', '', '', '', '', 'surveysettings', 'update', '{\"render\": { \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(15, 2, NULL, 6, 'statistics', 'Statistics', 'Statistics', 'Statistics', 'bar-chart', 'fontawesome', '', 'admin/statistics/sa/index/', '', '', '', '', 'statistics', 'read', '{\"render\": {\"isActive\": true, \"link\": {\"data\": {\"surveyid\": [\"survey\", \"sid\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(16, 2, NULL, 7, 'quotas', 'Edit quotas', 'Quotas', 'Edit quotas for this survey.', 'tasks', 'fontawesome', '', 'admin/quotas/sa/index/', '', '', '', '', 'quotas', 'read', '{\"render\": { \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(17, 2, NULL, 8, 'assessments', 'Edit assessments', 'Assessments', 'Edit and look at the assessements for this survey.', 'comment-o', 'fontawesome', '', 'admin/assessments/sa/index/', '', '', '', '', 'assessments', 'read', '{\"render\": { \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(18, 2, NULL, 9, 'surveypermissions', 'Edit survey permissions', 'Survey permissions', 'Edit permissions for this survey', 'lock', 'fontawesome', '', 'admin/surveypermission/sa/view/', '', '', '', '', 'surveysecurity', 'read', '{\"render\": { \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(19, 2, NULL, 10, 'emailtemplates', 'Email templates', 'Email templates', 'Edit the templates for invitation, reminder and registration emails', 'envelope-square', 'fontawesome', '', 'admin/emailtemplates/sa/index/', '', '', '', '', 'surveylocale', 'read', '{\"render\": { \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(20, 2, NULL, 11, 'panelintegration', 'Edit survey panel integration', 'Panel integration', 'Define panel integrations for your survey', 'link', 'fontawesome', '', '', 'updatesurveylocalesettings', 'editLocalSettings_main_view', '/admin/survey/subview/accordion/_integration_panel', '', 'surveylocale', 'read', '{\"render\": {\"link\": { \"pjaxed\": false}}}', '_tabPanelIntegration', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(21, 2, NULL, 12, 'resources', 'Add/edit resources (files/images) for this survey', 'Resources', 'Add/edit resources (files/images) for this survey', 'file', 'fontawesome', '', '', 'updatesurveylocalesettings', 'editLocalSettings_main_view', '/admin/survey/subview/accordion/_resources_panel', '', 'surveylocale', 'read', NULL, '_tabResourceManagement', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(22, 2, NULL, 13, 'plugins', 'Simple plugin settings', 'Simple plugins', 'Edit simple plugin settings', 'plug', 'fontawesome', '', '', 'updatesurveylocalesettings', 'editLocalSettings_main_view', '/admin/survey/subview/accordion/_plugins_panel', '', 'surveysettings', 'read', '{\"render\": {\"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '_pluginTabSurvey', 'en-GB', 0, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(23, 3, NULL, 1, 'activateSurvey', 'Activate survey', 'Activate survey', 'Activate survey', 'play', 'fontawesome', '', 'admin/survey/sa/activate', '', '', '', '', 'surveyactivation', 'update', '{\"render\": {\"isActive\": false, \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(24, 3, NULL, 2, 'deactivateSurvey', 'Stop this survey', 'Stop this survey', 'Stop this survey', 'stop', 'fontawesome', '', 'admin/survey/sa/deactivate', '', '', '', '', 'surveyactivation', 'update', '{\"render\": {\"isActive\": true, \"link\": {\"data\": {\"surveyid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(25, 3, NULL, 3, 'testSurvey', 'Go to survey', 'Go to survey', 'Go to survey', 'cog', 'fontawesome', '', 'survey/index/', '', '', '', '', '', '', '{\"render\": {\"link\": {\"external\": true, \"data\": {\"sid\": [\"survey\",\"sid\"], \"newtest\": \"Y\", \"lang\": [\"survey\",\"language\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(26, 3, NULL, 4, 'surveyLogicFile', 'Survey logic file', 'Survey logic file', 'Survey logic file', 'sitemap', 'fontawesome', '', 'admin/expressions/sa/survey_logic_file/', '', '', '', '', 'surveycontent', 'read', '{\"render\": { \"link\": {\"data\": {\"sid\": [\"survey\",\"sid\"]}}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0),
(27, 3, NULL, 5, 'cpdb', 'Central participant database', 'Central participant database', 'Central participant database', 'users', 'fontawesome', '', 'admin/participants/sa/displayParticipants', '', '', '', '', 'tokens', 'read', '{\"render\": {\"link\": {}}}', '', 'en-GB', 1, 1, '2019-11-12 03:24:26', 0, '2019-11-12 03:24:26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jds_surveys`
--

CREATE TABLE `jds_surveys` (
  `sid` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `gsid` int(11) DEFAULT '1',
  `admin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `expires` datetime DEFAULT NULL,
  `startdate` datetime DEFAULT NULL,
  `adminemail` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anonymized` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `faxto` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `savetimings` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `template` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `language` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_languages` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datestamp` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `usecookie` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `allowregister` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `allowsave` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `autonumber_start` int(11) NOT NULL DEFAULT '0',
  `autoredirect` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `allowprev` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `printanswers` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `ipaddr` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `refurl` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `datecreated` datetime DEFAULT NULL,
  `showsurveypolicynotice` int(11) DEFAULT '0',
  `publicstatistics` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `publicgraphs` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `listpublic` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `htmlemail` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `sendconfirmation` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `tokenanswerspersistence` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `assessments` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `usecaptcha` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `usetokens` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `bounce_email` varchar(254) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attributedescriptions` text COLLATE utf8mb4_unicode_ci,
  `emailresponseto` text COLLATE utf8mb4_unicode_ci,
  `emailnotificationto` text COLLATE utf8mb4_unicode_ci,
  `tokenlength` int(11) NOT NULL DEFAULT '15',
  `showxquestions` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `showgroupinfo` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'B',
  `shownoanswer` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `showqnumcode` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'X',
  `bouncetime` int(11) DEFAULT NULL,
  `bounceprocessing` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `bounceaccounttype` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bounceaccounthost` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bounceaccountpass` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bounceaccountencryption` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bounceaccountuser` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `showwelcome` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `showprogress` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `questionindex` int(11) NOT NULL DEFAULT '0',
  `navigationdelay` int(11) NOT NULL DEFAULT '0',
  `nokeyboard` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `alloweditaftercompletion` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `googleanalyticsstyle` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleanalyticsapikey` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_surveys`
--

INSERT INTO `jds_surveys` (`sid`, `owner_id`, `gsid`, `admin`, `active`, `expires`, `startdate`, `adminemail`, `anonymized`, `faxto`, `format`, `savetimings`, `template`, `language`, `additional_languages`, `datestamp`, `usecookie`, `allowregister`, `allowsave`, `autonumber_start`, `autoredirect`, `allowprev`, `printanswers`, `ipaddr`, `refurl`, `datecreated`, `showsurveypolicynotice`, `publicstatistics`, `publicgraphs`, `listpublic`, `htmlemail`, `sendconfirmation`, `tokenanswerspersistence`, `assessments`, `usecaptcha`, `usetokens`, `bounce_email`, `attributedescriptions`, `emailresponseto`, `emailnotificationto`, `tokenlength`, `showxquestions`, `showgroupinfo`, `shownoanswer`, `showqnumcode`, `bouncetime`, `bounceprocessing`, `bounceaccounttype`, `bounceaccounthost`, `bounceaccountpass`, `bounceaccountencryption`, `bounceaccountuser`, `showwelcome`, `showprogress`, `questionindex`, `navigationdelay`, `nokeyboard`, `alloweditaftercompletion`, `googleanalyticsstyle`, `googleanalyticsapikey`) VALUES
(136271, 1, 1, 'Administrator', 'N', NULL, NULL, 'sandisunandar99@gmail.com', 'N', '', 'G', 'N', 'fruity', 'id', '', 'N', 'N', 'N', 'Y', 0, 'N', 'N', 'N', 'N', 'N', '2019-11-12 03:58:56', 0, 'N', 'N', 'N', 'Y', 'Y', 'N', 'N', 'N', 'N', 'sandisunandar99@gmail.com', NULL, '', '', 15, 'Y', 'B', 'N', 'X', NULL, 'N', NULL, NULL, NULL, NULL, NULL, 'Y', 'Y', 0, 0, 'N', 'N', NULL, NULL),
(827137, 1, 1, 'Administrator', 'N', NULL, NULL, 'sandisunandar99@gmail.com', 'N', '', 'G', 'N', 'fruity', 'en', '', 'N', 'N', 'N', 'Y', 0, 'N', 'N', 'N', 'N', 'N', '2019-11-12 04:11:41', 0, 'N', 'N', 'N', 'Y', 'Y', 'N', 'N', 'N', 'N', 'sandisunandar99@gmail.com', NULL, '', '', 15, 'Y', 'B', 'N', 'X', NULL, 'N', NULL, NULL, NULL, NULL, NULL, 'Y', 'Y', 0, 0, 'N', 'N', NULL, NULL),
(22769, 1, 1, 'Loredana Fortunato (IFC-CNR)', 'N', '2015-09-01 00:00:00', NULL, 'l.fortunato@ifc.cnr.it', 'N', '', 'G', 'N', 'fruity', 'en', '', 'N', 'N', 'N', 'Y', 0, 'N', 'Y', 'Y', 'N', 'N', '2019-11-12 09:58:18', 0, 'N', 'N', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'l.fortunato@ifc.cnr.it', '', '', 'l.fortunato@ifc.cnr.it', 15, 'Y', 'B', 'Y', 'C', 0, 'N', '', '', '', '', '', 'Y', 'Y', 0, 0, 'N', 'Y', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `jds_surveys_groups`
--

CREATE TABLE `jds_surveys_groups` (
  `gsid` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `description` text COLLATE utf8mb4_unicode_ci,
  `sortorder` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_surveys_groups`
--

INSERT INTO `jds_surveys_groups` (`gsid`, `name`, `title`, `template`, `description`, `sortorder`, `owner_id`, `parent_id`, `created`, `modified`, `created_by`) VALUES
(1, 'default', 'Default', NULL, 'Default survey group', 0, 1, NULL, '2019-11-12 03:24:26', '2019-11-12 03:24:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jds_surveys_languagesettings`
--

CREATE TABLE `jds_surveys_languagesettings` (
  `surveyls_survey_id` int(11) NOT NULL,
  `surveyls_language` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en',
  `surveyls_title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surveyls_description` text COLLATE utf8mb4_unicode_ci,
  `surveyls_welcometext` text COLLATE utf8mb4_unicode_ci,
  `surveyls_endtext` text COLLATE utf8mb4_unicode_ci,
  `surveyls_policy_notice` text COLLATE utf8mb4_unicode_ci,
  `surveyls_policy_error` text COLLATE utf8mb4_unicode_ci,
  `surveyls_policy_notice_label` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_url` text COLLATE utf8mb4_unicode_ci,
  `surveyls_urldescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_invite_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_invite` text COLLATE utf8mb4_unicode_ci,
  `surveyls_email_remind_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_remind` text COLLATE utf8mb4_unicode_ci,
  `surveyls_email_register_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_register` text COLLATE utf8mb4_unicode_ci,
  `surveyls_email_confirm_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyls_email_confirm` text COLLATE utf8mb4_unicode_ci,
  `surveyls_dateformat` int(11) NOT NULL DEFAULT '1',
  `surveyls_attributecaptions` text COLLATE utf8mb4_unicode_ci,
  `email_admin_notification_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_admin_notification` text COLLATE utf8mb4_unicode_ci,
  `email_admin_responses_subj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_admin_responses` text COLLATE utf8mb4_unicode_ci,
  `surveyls_numberformat` int(11) NOT NULL DEFAULT '0',
  `attachments` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_surveys_languagesettings`
--

INSERT INTO `jds_surveys_languagesettings` (`surveyls_survey_id`, `surveyls_language`, `surveyls_title`, `surveyls_description`, `surveyls_welcometext`, `surveyls_endtext`, `surveyls_policy_notice`, `surveyls_policy_error`, `surveyls_policy_notice_label`, `surveyls_url`, `surveyls_urldescription`, `surveyls_email_invite_subj`, `surveyls_email_invite`, `surveyls_email_remind_subj`, `surveyls_email_remind`, `surveyls_email_register_subj`, `surveyls_email_register`, `surveyls_email_confirm_subj`, `surveyls_email_confirm`, `surveyls_dateformat`, `surveyls_attributecaptions`, `email_admin_notification_subj`, `email_admin_notification`, `email_admin_responses_subj`, `email_admin_responses`, `surveyls_numberformat`, `attachments`) VALUES
(136271, 'id', 'Kependudukan Daerah', 'Survey test', 'Selamat datang', 'Terimakasih', NULL, NULL, NULL, '', '', 'Undangan untuk berpartisipasi dalam survei', '{FIRSTNAME} yang terhormat,<br />\n<br />\nAnda diundang untuk berpartisipasi dalam sebuah survei.<br />\n<br />\nSurvei tersebut berjudul:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nUntuk berpartisipasi, harap klik alamat di bawah ini.<br />\n<br />\nHormat kami,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\n----------------------------------------------<br />\nKlik di sini untuk mengisi survei:<br />\n{SURVEYURL}<br />\n<br />\nJika Anda tidak ingin berpartisipasi dalam survei ini dan tidak ingin menerima undangan lagi, harap klik tautan ini:<br />\n{OPTOUTURL}<br />\n<br />\nJika Anda masuk dalam daftar hitam, namun ingin menerima undangan dan berpartisipasi pada survei ini silakan klik pada tautan berikut:<br />\n{OPTINURL}', 'Pengingat untuk berpartisipasi dalam survei', '{FIRSTNAME} yang terhormat,<br />\n<br />\nBeberapa waktu lalu, kami mengundang Anda untuk berpartisipasi dalam sebuah survei.<br />\n<br />\nKami lihat Anda belum mengisi survei tersebut dan kami ingin mengingatkan Anda bahwa survei tersebut masih tersedia jika Anda ingin ambil bagian.<br />\n<br />\nSurvei tersebut berjudul:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nUntuk berpartisipasi, silahkan klik pada alamat di bawah ini.<br />\n<br />\nHormat kami,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\n----------------------------------------------<br />\nKlik di sini untuk mengisi survei:<br />\n{SURVEYURL}<br />\n<br />\nJika Anda tidak ingin berpartisipasi dalam survei ini dan tidak ingin menerima undangan lagi, harap klik tautan ini:<br />\n{OPTOUTURL}', 'Konfirmasi pendaftaran survei', '{FIRSTNAME} yang terhormat,<br />\n<br />\nAnda, atau seseorang menggunakan alamat email Anda, telah mendaftar untuk berpartisipasi dalam survei online berjudul {SURVEYNAME}.<br />\n<br />\nUntuk melengkapi survei ini, silahkan klik pada alamat URL berikut:<br />\n<br />\n{SURVEYURL}<br />\n<br />\nSekiranya Anda ingin bertanya tentang survei ini, atau bila Anda belum terdaftar dan merasa ada kesalahan pada email ini, mohon hubungi {ADMINNAME} di alamat {ADMINEMAIL}.', 'Konfirmasi partisipasi Anda dalam survei kami', '{FIRSTNAME} yang kami hormati,<br />\n<br />\nSurel ini merupakan konfirmasi bahwa Anda telah menyelesaikan survei dengan judul {SURVEYNAME} dan jawaban Anda telah disimpan. Terima kasih atas partisipasi Anda.<br />\n<br />\nJika Anda memiliki pertanyaan lebih lanjut yang terkait dengan surel ini, harap hubungi {ADMINNAME} pada alamat {ADMINEMAIL}.<br />\n<br />\nHormat kami,<br />\n<br />\n{ADMINNAME}', 1, NULL, 'Pengiriman tanggapan untuk survei {SURVEYNAME}', 'Halo,<br />\n<br />\nSuatu tanggapan telah dikirimkan untuk survei \'{SURVEYNAME}\' Anda.<br />\n<br />\nKlik tautan berikut untuk memuat ulang survei:<br />\n{RELOADURL}<br />\n<br />\nKlik tautan berikut untuk melihat tanggapan individu:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nKlik tautan berikut untuk mengedit tanggapan individu:<br />\n{EDITRESPONSEURL}<br />\n<br />\nLihat statistik dengan klik tautan berikut:<br />\n{STATISTICSURL}', 'Kiriman tanggapan untuk survei {SURVEYNAME} dengan hasil', 'Halo,<br />\n<br />\nSebuah tanggapan telah dikirimkan untuk survei \'{SURVEYNAME}\' Anda.<br />\n<br />\nKlik tautan berikut untuk memuat ulang survei:<br />\n{RELOADURL}<br />\n<br />\nKlik tautan berikut untuk melihat tanggapan individu:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nKlik tautan berikut untuk mengedit tanggapan individu:<br />\n{EDITRESPONSEURL}<br />\n<br />\nLihat statistik dengan klik tautan berikut:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nJawaban berikut diberikan oleh partisipan:<br />\n{ANSWERTABLE}', 0, NULL),
(827137, 'en', 'NanoNano', 'untuk mencoba import form contoh', 'selamat datang ', 'terimakasih', NULL, NULL, NULL, '', '', 'Invitation to participate in a survey', 'Dear {FIRSTNAME},<br />\n<br />\nyou have been invited to participate in a survey.<br />\n<br />\nThe survey is titled:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nTo participate, please click on the link below.<br />\n<br />\nSincerely,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\n----------------------------------------------<br />\nClick here to do the survey:<br />\n{SURVEYURL}<br />\n<br />\nIf you do not want to participate in this survey and don\'t want to receive any more invitations please click the following link:<br />\n{OPTOUTURL}<br />\n<br />\nIf you are blacklisted but want to participate in this survey and want to receive invitations please click the following link:<br />\n{OPTINURL}', 'Reminder to participate in a survey', 'Dear {FIRSTNAME},<br />\n<br />\nRecently we invited you to participate in a survey.<br />\n<br />\nWe note that you have not yet completed the survey, and wish to remind you that the survey is still available should you wish to take part.<br />\n<br />\nThe survey is titled:<br />\n\"{SURVEYNAME}\"<br />\n<br />\n\"{SURVEYDESCRIPTION}\"<br />\n<br />\nTo participate, please click on the link below.<br />\n<br />\nSincerely,<br />\n<br />\n{ADMINNAME} ({ADMINEMAIL})<br />\n<br />\n----------------------------------------------<br />\nClick here to do the survey:<br />\n{SURVEYURL}<br />\n<br />\nIf you do not want to participate in this survey and don\'t want to receive any more invitations please click the following link:<br />\n{OPTOUTURL}', 'Survey registration confirmation', 'Dear {FIRSTNAME},<br />\n<br />\nYou, or someone using your email address, have registered to participate in an online survey titled {SURVEYNAME}.<br />\n<br />\nTo complete this survey, click on the following URL:<br />\n<br />\n{SURVEYURL}<br />\n<br />\nIf you have any questions about this survey, or if you did not register to participate and believe this email is in error, please contact {ADMINNAME} at {ADMINEMAIL}.', 'Confirmation of your participation in our survey', 'Dear {FIRSTNAME},<br />\n<br />\nthis email is to confirm that you have completed the survey titled {SURVEYNAME} and your response has been saved. Thank you for participating.<br />\n<br />\nIf you have any further questions about this email, please contact {ADMINNAME} on {ADMINEMAIL}.<br />\n<br />\nSincerely,<br />\n<br />\n{ADMINNAME}', 1, NULL, 'Response submission for survey {SURVEYNAME}', 'Hello,<br />\n<br />\nA new response was submitted for your survey \'{SURVEYNAME}\'.<br />\n<br />\nClick the following link to see the individual response:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick the following link to edit the individual response:<br />\n{EDITRESPONSEURL}<br />\n<br />\nView statistics by clicking here:<br />\n{STATISTICSURL}', 'Response submission for survey {SURVEYNAME} with results', 'Hello,<br />\n<br />\nA new response was submitted for your survey \'{SURVEYNAME}\'.<br />\n<br />\nClick the following link to see the individual response:<br />\n{VIEWRESPONSEURL}<br />\n<br />\nClick the following link to edit the individual response:<br />\n{EDITRESPONSEURL}<br />\n<br />\nView statistics by clicking here:<br />\n{STATISTICSURL}<br />\n<br />\n<br />\nThe following answers were given by the participant:<br />\n{ANSWERTABLE}', 0, NULL),
(22769, 'en', 'TESTS', '<p> </p>\r\n\r\n<p style=\"text-align: center; \"> </p>\r\n\r\n<p style=\"text-align: center; \"><font face=\"lucida sans unicode, lucida grande, sans-serif\"><span style=\"font-size: 26px;\">SOME TESTS ON LIMESURVEY</span></font></p>\r\n', '', '<p> </p>\r\n\r\n<p style=\"text-align: center; \"> </p>\r\n\r\n<p> </p>\r\n\r\n<p style=\"text-align: center; \"><strong>Thank you! </strong></p>\r\n\r\n<p> </p>\r\n', NULL, NULL, NULL, '', '', 'Invitation to participate in a survey', 'Dear {FIRSTNAME},<br /><br />you have been invited to participate in a survey.<br /><br />The survey is titled:<br />\"{SURVEYNAME}\"<br /><br />\"{SURVEYDESCRIPTION}\"<br /><br />To participate, please click on the link below.<br /><br />Sincerely,<br /><br />{ADMINNAME} ({ADMINEMAIL})<br /><br />----------------------------------------------<br />Click here to do the survey:<br />{SURVEYURL}<br /><br />If you do not want to participate in this survey and don\'t want to receive any more invitations please click the following link:<br />{OPTOUTURL}', 'Reminder to participate in a survey', 'Dear {FIRSTNAME},<br /><br />Recently we invited you to participate in a survey.<br /><br />We note that you have not yet completed the survey, and wish to remind you that the survey is still available should you wish to take part.<br /><br />The survey is titled:<br />\"{SURVEYNAME}\"<br /><br />\"{SURVEYDESCRIPTION}\"<br /><br />To participate, please click on the link below.<br /><br />Sincerely,<br /><br />{ADMINNAME} ({ADMINEMAIL})<br /><br />----------------------------------------------<br />Click here to do the survey:<br />{SURVEYURL}<br /><br />If you do not want to participate in this survey and don\'t want to receive any more invitations please click the following link:<br />{OPTOUTURL}', 'Survey registration confirmation', 'Dear {FIRSTNAME},<br /><br />You, or someone using your email address, have registered to participate in an online survey titled {SURVEYNAME}.<br /><br />To complete this survey, click on the following URL:<br /><br />{SURVEYURL}<br /><br />If you have any questions about this survey, or if you did not register to participate and believe this email is in error, please contact {ADMINNAME} at {ADMINEMAIL}.', 'Confirmation of your participation in our survey', 'Dear {FIRSTNAME},<br /><br />this email is to confirm that you have completed the survey titled {SURVEYNAME} and your response has been saved. Thank you for participating.<br /><br />If you have any further questions about this email, please contact {ADMINNAME} on {ADMINEMAIL}.<br /><br />Sincerely,<br /><br />{ADMINNAME}', 1, NULL, 'Response submission for survey {SURVEYNAME}', 'Hello,<br /><br />A new response was submitted for your survey \'{SURVEYNAME}\'.<br /><br />Click the following link to reload the survey:<br />{RELOADURL}<br /><br />Click the following link to see the individual response:<br />{VIEWRESPONSEURL}<br /><br />Click the following link to edit the individual response:<br />{EDITRESPONSEURL}<br /><br />View statistics by clicking here:<br />{STATISTICSURL}', 'Response submission for survey {SURVEYNAME} with results', '<style type=\"text/css\">\n                                                .printouttable {\n                                                  margin:1em auto;\n                                                }\n                                                .printouttable th {\n                                                  text-align: center;\n                                                }\n                                                .printouttable td {\n                                                  border-color: #ddf #ddf #ddf #ddf;\n                                                  border-style: solid;\n                                                  border-width: 1px;\n                                                  padding:0.1em 1em 0.1em 0.5em;\n                                                }\n\n                                                .printouttable td:first-child {\n                                                  font-weight: 700;\n                                                  text-align: right;\n                                                  padding-right: 5px;\n                                                  padding-left: 5px;\n\n                                                }\n                                                .printouttable .printanswersquestion td{\n                                                  background-color:#F7F8FF;\n                                                }\n\n                                                .printouttable .printanswersquestionhead td{\n                                                  text-align: left;\n                                                  background-color:#ddf;\n                                                }\n\n                                                .printouttable .printanswersgroup td{\n                                                  text-align: center;        \n                                                  font-weight:bold;\n                                                  padding-top:1em;\n                                                }\n                                                </style>Hello,<br /><br />A new response was submitted for your survey \'{SURVEYNAME}\'.<br /><br />Click the following link to reload the survey:<br />{RELOADURL}<br /><br />Click the following link to see the individual response:<br />{VIEWRESPONSEURL}<br /><br />Click the following link to edit the individual response:<br />{EDITRESPONSEURL}<br /><br />View statistics by clicking here:<br />{STATISTICSURL}<br /><br /><br />The following answers were given by the participant:<br />{ANSWERTABLE}', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jds_survey_links`
--

CREATE TABLE `jds_survey_links` (
  `participant_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token_id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_invited` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_survey_url_parameters`
--

CREATE TABLE `jds_survey_url_parameters` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `parameter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `targetqid` int(11) DEFAULT NULL,
  `targetsqid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_templates`
--

CREATE TABLE `jds_templates` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `author` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci,
  `license` text COLLATE utf8mb4_unicode_ci,
  `version` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_version` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_folder` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files_folder` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `last_update` datetime DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `extends` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_templates`
--

INSERT INTO `jds_templates` (`id`, `name`, `folder`, `title`, `creation_date`, `author`, `author_email`, `author_url`, `copyright`, `license`, `version`, `api_version`, `view_folder`, `files_folder`, `description`, `last_update`, `owner_id`, `extends`) VALUES
(1, 'vanilla', 'vanilla', 'Vanilla Theme', '2019-11-12 03:24:26', 'Louis Gac', 'louis.gac@limesurvey.org', 'https://www.limesurvey.org/', 'Copyright (C) 2007-2017 The LimeSurvey Project Team\\r\\nAll rights reserved.', 'License: GNU/GPL License v2 or later, see LICENSE.php\\r\\n\\r\\nLimeSurvey is free software. This version may have been modified pursuant to the GNU General Public License, and as distributed it includes or is derivative of works licensed under the GNU General Public License or other free or open source software licenses. See COPYRIGHT.php for copyright notices and details.', '3.0', '3.0', 'views', 'files', '<strong>LimeSurvey Bootstrap Vanilla Survey Theme</strong><br>A clean and simple base that can be used by developers to create their own Bootstrap based theme.', NULL, 1, ''),
(2, 'fruity', 'fruity', 'Fruity Theme', '2019-11-12 03:24:26', 'Louis Gac', 'louis.gac@limesurvey.org', 'https://www.limesurvey.org/', 'Copyright (C) 2007-2017 The LimeSurvey Project Team\\r\\nAll rights reserved.', 'License: GNU/GPL License v2 or later, see LICENSE.php\\r\\n\\r\\nLimeSurvey is free software. This version may have been modified pursuant to the GNU General Public License, and as distributed it includes or is derivative of works licensed under the GNU General Public License or other free or open source software licenses. See COPYRIGHT.php for copyright notices and details.', '3.0', '3.0', 'views', 'files', '<strong>LimeSurvey Fruity Theme</strong><br>A fruity theme for a flexible use. This theme offers monochromes variations and many options for easy customizations.', NULL, 1, 'vanilla'),
(3, 'bootswatch', 'bootswatch', 'Bootswatch Theme', '2019-11-12 03:24:26', 'Louis Gac', 'louis.gac@limesurvey.org', 'https://www.limesurvey.org/', 'Copyright (C) 2007-2017 The LimeSurvey Project Team\\r\\nAll rights reserved.', 'License: GNU/GPL License v2 or later, see LICENSE.php\\r\\n\\r\\nLimeSurvey is free software. This version may have been modified pursuant to the GNU General Public License, and as distributed it includes or is derivative of works licensed under the GNU General Public License or other free or open source software licenses. See COPYRIGHT.php for copyright notices and details.', '3.0', '3.0', 'views', 'files', '<strong>LimeSurvey Bootwatch Theme</strong><br>Based on BootsWatch Themes: <a href=\"https://bootswatch.com/3/\"\">Visit BootsWatch page</a> ', NULL, 1, 'vanilla'),
(4, 'extends_fruity', 'extends_fruity', 'extends_fruity', '2019-11-14 05:12:40', 'admin', '', '', NULL, NULL, NULL, '3.0', 'views', 'files', '<strong>{{gT(\"LimeSurvey Fruity Theme\")}}</strong><br>{{gT(\"A fruity theme for a flexible use. This theme offers monochromes variations and many options for easy customizations.\")}}', NULL, 1, 'fruity');

-- --------------------------------------------------------

--
-- Table structure for table `jds_template_configuration`
--

CREATE TABLE `jds_template_configuration` (
  `id` int(11) NOT NULL,
  `template_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `gsid` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `files_css` text COLLATE utf8mb4_unicode_ci,
  `files_js` text COLLATE utf8mb4_unicode_ci,
  `files_print_css` text COLLATE utf8mb4_unicode_ci,
  `options` text COLLATE utf8mb4_unicode_ci,
  `cssframework_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cssframework_css` text COLLATE utf8mb4_unicode_ci,
  `cssframework_js` text COLLATE utf8mb4_unicode_ci,
  `packages_to_load` text COLLATE utf8mb4_unicode_ci,
  `packages_ltr` text COLLATE utf8mb4_unicode_ci,
  `packages_rtl` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_template_configuration`
--

INSERT INTO `jds_template_configuration` (`id`, `template_name`, `sid`, `gsid`, `uid`, `files_css`, `files_js`, `files_print_css`, `options`, `cssframework_name`, `cssframework_css`, `cssframework_js`, `packages_to_load`, `packages_ltr`, `packages_rtl`) VALUES
(1, 'vanilla', NULL, NULL, NULL, '{\"add\":[\"css/ajaxify.css\",\"css/theme.css\",\"css/custom.css\"]}', '{\"add\":[\"scripts/theme.js\",\"scripts/ajaxify.js\",\"scripts/custom.js\"]}', '{\"add\":[\"css/print_theme.css\"]}', '{\"ajaxmode\":\"on\",\"brandlogo\":\"on\",\"container\":\"on\", \"hideprivacyinfo\": \"off\", \"brandlogofile\":\"./files/logo.png\",\"font\":\"noto\"}', 'bootstrap', '{}', '', '{\"add\":[\"pjax\",\"font-noto\",\"moment\"]}', NULL, NULL),
(2, 'fruity', NULL, NULL, NULL, '{\"add\":[\"css/ajaxify.css\",\"css/animate.css\",\"css/variations/sea_green.css\",\"css/theme.css\",\"css/custom.css\"]}', '{\"add\":[\"scripts/theme.js\",\"scripts/ajaxify.js\",\"scripts/custom.js\"]}', '{\"add\":[\"css/print_theme.css\"]}', '{\"ajaxmode\":\"off\",\"brandlogo\":\"on\",\"brandlogofile\":\".\\/files\\/logo.png\",\"container\":\"on\",\"backgroundimage\":\"off\",\"backgroundimagefile\":null,\"animatebody\":\"off\",\"bodyanimation\":\"fadeInRight\",\"bodyanimationduration\":\"500\",\"animatequestion\":\"off\",\"questionanimation\":\"flipInX\",\"questionanimationduration\":\"500\",\"animatealert\":\"off\",\"alertanimation\":\"shake\",\"alertanimationduration\":\"500\",\"font\":\"noto\",\"bodybackgroundcolor\":\"#ffffff\",\"fontcolor\":\"#444444\",\"questionbackgroundcolor\":\"#ffffff\",\"questionborder\":\"on\",\"questioncontainershadow\":\"on\",\"checkicon\":\"f00c\",\"animatecheckbox\":\"on\",\"checkboxanimation\":\"rubberBand\",\"checkboxanimationduration\":\"500\",\"animateradio\":\"on\",\"radioanimation\":\"zoomIn\",\"radioanimationduration\":\"500\",\"zebrastriping\":\"off\",\"stickymatrixheaders\":\"off\",\"greyoutselected\":\"off\",\"hideprivacyinfo\":\"off\",\"crosshover\":\"off\",\"showpopups\":\"1\"}', 'bootstrap', '{}', '', '{\"add\":[\"pjax\",\"font-noto\",\"moment\"]}', NULL, NULL),
(3, 'bootswatch', NULL, NULL, NULL, '{\"add\":[\"css/ajaxify.css\",\"css/theme.css\",\"css/custom.css\"]}', '{\"add\":[\"scripts/theme.js\",\"scripts/ajaxify.js\",\"scripts/custom.js\"]}', '{\"add\":[\"css/print_theme.css\"]}', '{\"ajaxmode\":\"on\",\"brandlogo\":\"on\",\"container\":\"on\",\"brandlogofile\":\"./files/logo.png\"}', 'bootstrap', '{\"replace\":[[\"css/bootstrap.css\",\"css/variations/flatly.min.css\"]]}', '', '{\"add\":[\"pjax\",\"font-noto\",\"moment\"]}', NULL, NULL),
(4, 'fruity', 136271, NULL, NULL, 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(5, 'fruity', NULL, 1, NULL, 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(6, 'fruity', 827137, NULL, NULL, 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(7, 'fruity', 33364, NULL, NULL, 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(8, 'fruity', 717521, NULL, NULL, 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(9, 'vanilla', 885886, NULL, NULL, 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(10, 'fruity', 885886, NULL, NULL, 'inherit', 'inherit', 'inherit', '{\"font\":\"inherit\",\"bodybackgroundcolor\":\"inherit\",\"fontcolor\":\"inherit\",\"questionbackgroundcolor\":\"inherit\",\"checkicon\":\"inherit\",\"backgroundimagefile\":\"inherit\",\"brandlogofile\":\"inherit\",\"bodyanimation\":\"inherit\",\"bodyanimationduration\":\"inherit\",\"questionanimation\":\"inherit\",\"questionanimationduration\":\"inherit\",\"alertanimation\":\"inherit\",\"alertanimationduration\":\"inherit\",\"checkboxanimation\":\"inherit\",\"checkboxanimationduration\":\"inherit\",\"radioanimation\":\"inherit\",\"radioanimationduration\":\"inherit\",\"ajaxmode\":\"inherit\",\"container\":\"inherit\",\"questionborder\":\"inherit\",\"questioncontainershadow\":\"inherit\",\"showpopups\":\"inherit\",\"zebrastriping\":\"inherit\",\"stickymatrixheaders\":\"inherit\",\"greyoutselected\":\"inherit\",\"hideprivacyinfo\":\"inherit\",\"crosshover\":\"inherit\",\"backgroundimage\":\"inherit\",\"brandlogo\":\"inherit\",\"animatebody\":\"inherit\",\"animatequestion\":\"inherit\",\"animatealert\":\"inherit\",\"animatecheckbox\":\"inherit\",\"animateradio\":\"inherit\"}', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(11, 'vanilla', 646657, NULL, NULL, 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(12, 'fruity', 646657, NULL, NULL, 'inherit', 'inherit', 'inherit', '{\"font\":\"inherit\",\"bodybackgroundcolor\":\"inherit\",\"fontcolor\":\"inherit\",\"questionbackgroundcolor\":\"inherit\",\"checkicon\":\"inherit\",\"backgroundimagefile\":\"inherit\",\"brandlogofile\":\"inherit\",\"bodyanimation\":\"inherit\",\"bodyanimationduration\":\"inherit\",\"questionanimation\":\"inherit\",\"questionanimationduration\":\"inherit\",\"alertanimation\":\"inherit\",\"alertanimationduration\":\"inherit\",\"checkboxanimation\":\"inherit\",\"checkboxanimationduration\":\"inherit\",\"radioanimation\":\"inherit\",\"radioanimationduration\":\"inherit\",\"ajaxmode\":\"inherit\",\"container\":\"inherit\",\"questionborder\":\"inherit\",\"questioncontainershadow\":\"inherit\",\"showpopups\":\"inherit\",\"zebrastriping\":\"inherit\",\"stickymatrixheaders\":\"inherit\",\"greyoutselected\":\"inherit\",\"hideprivacyinfo\":\"inherit\",\"crosshover\":\"inherit\",\"backgroundimage\":\"inherit\",\"brandlogo\":\"inherit\",\"animatebody\":\"inherit\",\"animatequestion\":\"inherit\",\"animatealert\":\"inherit\",\"animatecheckbox\":\"inherit\",\"animateradio\":\"inherit\"}', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(13, 'vanilla', 577116, NULL, NULL, 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(14, 'fruity', 577116, NULL, NULL, 'inherit', 'inherit', 'inherit', '{\"font\":\"inherit\",\"bodybackgroundcolor\":\"inherit\",\"fontcolor\":\"inherit\",\"questionbackgroundcolor\":\"inherit\",\"checkicon\":\"inherit\",\"backgroundimagefile\":\"inherit\",\"brandlogofile\":\"inherit\",\"bodyanimation\":\"inherit\",\"bodyanimationduration\":\"inherit\",\"questionanimation\":\"inherit\",\"questionanimationduration\":\"inherit\",\"alertanimation\":\"inherit\",\"alertanimationduration\":\"inherit\",\"checkboxanimation\":\"inherit\",\"checkboxanimationduration\":\"inherit\",\"radioanimation\":\"inherit\",\"radioanimationduration\":\"inherit\",\"ajaxmode\":\"inherit\",\"container\":\"inherit\",\"questionborder\":\"inherit\",\"questioncontainershadow\":\"inherit\",\"showpopups\":\"inherit\",\"zebrastriping\":\"inherit\",\"stickymatrixheaders\":\"inherit\",\"greyoutselected\":\"inherit\",\"hideprivacyinfo\":\"inherit\",\"crosshover\":\"inherit\",\"backgroundimage\":\"inherit\",\"brandlogo\":\"inherit\",\"animatebody\":\"inherit\",\"animatequestion\":\"inherit\",\"animatealert\":\"inherit\",\"animatecheckbox\":\"inherit\",\"animateradio\":\"inherit\"}', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(15, 'fruity', 22769, NULL, NULL, 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', NULL, NULL),
(16, 'extends_fruity', NULL, NULL, NULL, '{\"add\":[\"css\\/variations\\/sea_green.css\"],\"replace\":[\"css\\/animate.css\",\"css\\/theme.css\",\"css\\/custom.css\"]}', '{\"replace\":[\"scripts\\/theme.js\",\"scripts\\/custom.js\"]}', '{\"replace\":[\"css\\/print_theme.css\"]}', '{\"brandlogo\":\"on\",\"brandlogofile\":\".\\/files\\/logo.png\",\"container\":\"on\",\"backgroundimage\":\"off\",\"backgroundimagefile\":\".\\/files\\/pattern.png\",\"animatebody\":\"off\",\"bodyanimation\":\"fadeInRight\",\"bodyanimationduration\":\"500\",\"animatequestion\":\"off\",\"questionanimation\":\"flipInX\",\"questionanimationduration\":\"500\",\"animatealert\":\"off\",\"alertanimation\":\"shake\",\"alertanimationduration\":\"500\",\"font\":\"noto\",\"bodybackgroundcolor\":\"#ffffff\",\"fontcolor\":\"#444444\",\"questionbackgroundcolor\":\"#ffffff\",\"questionborder\":\"on\",\"questioncontainershadow\":\"on\",\"checkicon\":\"f00c\",\"animatecheckbox\":\"on\",\"checkboxanimation\":\"rubberBand\",\"checkboxanimationduration\":\"500\",\"animateradio\":\"on\",\"radioanimation\":\"zoomIn\",\"radioanimationduration\":\"500\",\"zebrastriping\":\"off\",\"stickymatrixheaders\":\"off\",\"greyoutselected\":\"off\",\"hideprivacyinfo\":\"off\",\"crosshover\":\"off\",\"showpopups\":\"1\",\"fixnumauto\":\"off\"}', 'bootstrap', '{}', '[]', '{\"add\":[\"pjax\",\"moment\",\"font-noto\"]}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jds_tutorials`
--

CREATE TABLE `jds_tutorials` (
  `tid` int(11) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `active` int(11) DEFAULT '0',
  `settings` text COLLATE utf8mb4_unicode_ci,
  `permission` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_grade` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_tutorial_entries`
--

CREATE TABLE `jds_tutorial_entries` (
  `teid` int(11) NOT NULL,
  `ordering` int(11) DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `settings` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_tutorial_entry_relation`
--

CREATE TABLE `jds_tutorial_entry_relation` (
  `teid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_users`
--

CREATE TABLE `jds_users` (
  `uid` int(11) NOT NULL,
  `users_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lang` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `htmleditormode` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `templateeditormode` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `questionselectormode` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `one_time_pw` text COLLATE utf8mb4_unicode_ci,
  `dateformat` int(11) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jds_users`
--

INSERT INTO `jds_users` (`uid`, `users_name`, `password`, `full_name`, `parent_id`, `lang`, `email`, `htmleditormode`, `templateeditormode`, `questionselectormode`, `one_time_pw`, `dateformat`, `created`, `modified`) VALUES
(1, 'admin', '$2y$10$L7ASptkjvxrjTCarfeYbo.wm9VjLH9nwlE/V.CLwCpEuEkPMVwyfe', 'Administrator', 0, 'en', 'sandisunandar99@gmail.com', 'default', 'default', 'default', NULL, 1, '2019-11-12 09:25:31', '2019-11-12 09:55:33'),
(2, 'user', '$2y$10$b28Ikv7xfFHoqWIEAcScze4TvXvsXy0neRQyXZKICcLZQT3Jk6wUm', 'user sample', 1, 'id', 'user@sample.com', 'default', 'default', 'default', NULL, 1, '2019-11-12 09:27:53', '2019-11-15 02:10:21'),
(4, 'root', '$2y$10$Y0VgACH7Vg4.AdjUGirDuuhedCp2cwt/1X97oq3yYd5Rt6sB8SWSO', 'admin', 1, 'auto', 'root@admin.com', 'default', 'default', 'default', NULL, 1, '2019-11-15 02:18:51', '2019-11-15 02:20:23');

-- --------------------------------------------------------

--
-- Table structure for table `jds_user_groups`
--

CREATE TABLE `jds_user_groups` (
  `ugid` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jds_user_in_groups`
--

CREATE TABLE `jds_user_in_groups` (
  `ugid` int(11) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jds_answers`
--
ALTER TABLE `jds_answers`
  ADD PRIMARY KEY (`qid`,`code`,`language`,`scale_id`),
  ADD KEY `jds_answers_idx2` (`sortorder`);

--
-- Indexes for table `jds_assessments`
--
ALTER TABLE `jds_assessments`
  ADD PRIMARY KEY (`id`,`language`),
  ADD KEY `jds_assessments_idx2` (`sid`),
  ADD KEY `jds_assessments_idx3` (`gid`);

--
-- Indexes for table `jds_asset_version`
--
ALTER TABLE `jds_asset_version`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jds_boxes`
--
ALTER TABLE `jds_boxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jds_conditions`
--
ALTER TABLE `jds_conditions`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `jds_conditions_idx` (`qid`),
  ADD KEY `jds_conditions_idx3` (`cqid`);

--
-- Indexes for table `jds_defaultvalues`
--
ALTER TABLE `jds_defaultvalues`
  ADD PRIMARY KEY (`qid`,`specialtype`,`language`,`scale_id`,`sqid`);

--
-- Indexes for table `jds_expression_errors`
--
ALTER TABLE `jds_expression_errors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jds_failed_login_attempts`
--
ALTER TABLE `jds_failed_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jds_groups`
--
ALTER TABLE `jds_groups`
  ADD PRIMARY KEY (`gid`,`language`),
  ADD KEY `jds_idx1_groups` (`sid`),
  ADD KEY `jds_idx2_groups` (`group_name`),
  ADD KEY `jds_idx3_groups` (`language`);

--
-- Indexes for table `jds_labels`
--
ALTER TABLE `jds_labels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jds_idx1_labels` (`code`),
  ADD KEY `jds_idx2_labels` (`sortorder`),
  ADD KEY `jds_idx3_labels` (`language`),
  ADD KEY `jds_idx4_labels` (`lid`,`sortorder`,`language`);

--
-- Indexes for table `jds_labelsets`
--
ALTER TABLE `jds_labelsets`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `jds_map_tutorial_users`
--
ALTER TABLE `jds_map_tutorial_users`
  ADD PRIMARY KEY (`uid`,`tid`);

--
-- Indexes for table `jds_notifications`
--
ALTER TABLE `jds_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jds_notifications_pk` (`entity`,`entity_id`,`status`),
  ADD KEY `jds_idx1_notifications` (`hash`);

--
-- Indexes for table `jds_participants`
--
ALTER TABLE `jds_participants`
  ADD PRIMARY KEY (`participant_id`),
  ADD KEY `jds_idx1_participants` (`firstname`),
  ADD KEY `jds_idx2_participants` (`lastname`),
  ADD KEY `jds_idx3_participants` (`language`);

--
-- Indexes for table `jds_participant_attribute`
--
ALTER TABLE `jds_participant_attribute`
  ADD PRIMARY KEY (`participant_id`,`attribute_id`);

--
-- Indexes for table `jds_participant_attribute_names`
--
ALTER TABLE `jds_participant_attribute_names`
  ADD PRIMARY KEY (`attribute_id`,`attribute_type`),
  ADD KEY `jds_idx_participant_attribute_names` (`attribute_id`,`attribute_type`);

--
-- Indexes for table `jds_participant_attribute_names_lang`
--
ALTER TABLE `jds_participant_attribute_names_lang`
  ADD PRIMARY KEY (`attribute_id`,`lang`);

--
-- Indexes for table `jds_participant_attribute_values`
--
ALTER TABLE `jds_participant_attribute_values`
  ADD PRIMARY KEY (`value_id`);

--
-- Indexes for table `jds_participant_shares`
--
ALTER TABLE `jds_participant_shares`
  ADD PRIMARY KEY (`participant_id`,`share_uid`);

--
-- Indexes for table `jds_permissions`
--
ALTER TABLE `jds_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jds_idx1_permissions` (`entity_id`,`entity`,`permission`,`uid`);

--
-- Indexes for table `jds_plugins`
--
ALTER TABLE `jds_plugins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jds_plugin_settings`
--
ALTER TABLE `jds_plugin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jds_questions`
--
ALTER TABLE `jds_questions`
  ADD PRIMARY KEY (`qid`,`language`),
  ADD KEY `jds_idx1_questions` (`sid`),
  ADD KEY `jds_idx2_questions` (`gid`),
  ADD KEY `jds_idx3_questions` (`type`),
  ADD KEY `jds_idx4_questions` (`title`),
  ADD KEY `jds_idx5_questions` (`parent_qid`);

--
-- Indexes for table `jds_question_attributes`
--
ALTER TABLE `jds_question_attributes`
  ADD PRIMARY KEY (`qaid`),
  ADD KEY `jds_idx1_question_attributes` (`qid`),
  ADD KEY `jds_idx2_question_attributes` (`attribute`);

--
-- Indexes for table `jds_quota`
--
ALTER TABLE `jds_quota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jds_idx1_quota` (`sid`);

--
-- Indexes for table `jds_quota_languagesettings`
--
ALTER TABLE `jds_quota_languagesettings`
  ADD PRIMARY KEY (`quotals_id`);

--
-- Indexes for table `jds_quota_members`
--
ALTER TABLE `jds_quota_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jds_idx1_quota_members` (`sid`,`qid`,`quota_id`,`code`);

--
-- Indexes for table `jds_saved_control`
--
ALTER TABLE `jds_saved_control`
  ADD PRIMARY KEY (`scid`),
  ADD KEY `jds_idx1_saved_control` (`sid`),
  ADD KEY `jds_idx2_saved_control` (`srid`);

--
-- Indexes for table `jds_sessions`
--
ALTER TABLE `jds_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jds_settings_global`
--
ALTER TABLE `jds_settings_global`
  ADD PRIMARY KEY (`stg_name`);

--
-- Indexes for table `jds_settings_user`
--
ALTER TABLE `jds_settings_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jds_idx1_settings_user` (`uid`),
  ADD KEY `jds_idx2_settings_user` (`entity`),
  ADD KEY `jds_idx3_settings_user` (`entity_id`),
  ADD KEY `jds_idx4_settings_user` (`stg_name`);

--
-- Indexes for table `jds_surveymenu`
--
ALTER TABLE `jds_surveymenu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jds_surveymenu_name` (`name`),
  ADD KEY `jds_idx2_surveymenu` (`title`);

--
-- Indexes for table `jds_surveymenu_entries`
--
ALTER TABLE `jds_surveymenu_entries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jds_surveymenu_entries_name` (`name`),
  ADD KEY `jds_idx1_surveymenu_entries` (`menu_id`),
  ADD KEY `jds_idx5_surveymenu_entries` (`menu_title`);

--
-- Indexes for table `jds_surveys`
--
ALTER TABLE `jds_surveys`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `jds_idx1_surveys` (`owner_id`),
  ADD KEY `jds_idx2_surveys` (`gsid`);

--
-- Indexes for table `jds_surveys_groups`
--
ALTER TABLE `jds_surveys_groups`
  ADD PRIMARY KEY (`gsid`),
  ADD KEY `jds_idx1_surveys_groups` (`name`),
  ADD KEY `jds_idx2_surveys_groups` (`title`);

--
-- Indexes for table `jds_surveys_languagesettings`
--
ALTER TABLE `jds_surveys_languagesettings`
  ADD PRIMARY KEY (`surveyls_survey_id`,`surveyls_language`),
  ADD KEY `jds_idx1_surveys_languagesettings` (`surveyls_title`);

--
-- Indexes for table `jds_survey_links`
--
ALTER TABLE `jds_survey_links`
  ADD PRIMARY KEY (`participant_id`,`token_id`,`survey_id`);

--
-- Indexes for table `jds_survey_url_parameters`
--
ALTER TABLE `jds_survey_url_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jds_templates`
--
ALTER TABLE `jds_templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jds_idx1_templates` (`name`),
  ADD KEY `jds_idx2_templates` (`title`),
  ADD KEY `jds_idx3_templates` (`owner_id`),
  ADD KEY `jds_idx4_templates` (`extends`);

--
-- Indexes for table `jds_template_configuration`
--
ALTER TABLE `jds_template_configuration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jds_idx1_template_configuration` (`template_name`),
  ADD KEY `jds_idx2_template_configuration` (`sid`),
  ADD KEY `jds_idx3_template_configuration` (`gsid`),
  ADD KEY `jds_idx4_template_configuration` (`uid`);

--
-- Indexes for table `jds_tutorials`
--
ALTER TABLE `jds_tutorials`
  ADD PRIMARY KEY (`tid`),
  ADD UNIQUE KEY `jds_idx1_tutorials` (`name`);

--
-- Indexes for table `jds_tutorial_entries`
--
ALTER TABLE `jds_tutorial_entries`
  ADD PRIMARY KEY (`teid`);

--
-- Indexes for table `jds_tutorial_entry_relation`
--
ALTER TABLE `jds_tutorial_entry_relation`
  ADD PRIMARY KEY (`teid`,`tid`),
  ADD KEY `jds_idx1_tutorial_entry_relation` (`uid`),
  ADD KEY `jds_idx2_tutorial_entry_relation` (`sid`);

--
-- Indexes for table `jds_users`
--
ALTER TABLE `jds_users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `jds_idx1_users` (`users_name`),
  ADD KEY `jds_idx2_users` (`email`);

--
-- Indexes for table `jds_user_groups`
--
ALTER TABLE `jds_user_groups`
  ADD PRIMARY KEY (`ugid`),
  ADD UNIQUE KEY `jds_idx1_user_groups` (`name`);

--
-- Indexes for table `jds_user_in_groups`
--
ALTER TABLE `jds_user_in_groups`
  ADD PRIMARY KEY (`ugid`,`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jds_assessments`
--
ALTER TABLE `jds_assessments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_asset_version`
--
ALTER TABLE `jds_asset_version`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_boxes`
--
ALTER TABLE `jds_boxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jds_conditions`
--
ALTER TABLE `jds_conditions`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `jds_expression_errors`
--
ALTER TABLE `jds_expression_errors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_failed_login_attempts`
--
ALTER TABLE `jds_failed_login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jds_groups`
--
ALTER TABLE `jds_groups`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jds_labels`
--
ALTER TABLE `jds_labels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_labelsets`
--
ALTER TABLE `jds_labelsets`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_notifications`
--
ALTER TABLE `jds_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jds_participant_attribute_names`
--
ALTER TABLE `jds_participant_attribute_names`
  MODIFY `attribute_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_participant_attribute_values`
--
ALTER TABLE `jds_participant_attribute_values`
  MODIFY `value_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_permissions`
--
ALTER TABLE `jds_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `jds_plugins`
--
ALTER TABLE `jds_plugins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jds_plugin_settings`
--
ALTER TABLE `jds_plugin_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jds_questions`
--
ALTER TABLE `jds_questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- AUTO_INCREMENT for table `jds_question_attributes`
--
ALTER TABLE `jds_question_attributes`
  MODIFY `qaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=733;

--
-- AUTO_INCREMENT for table `jds_quota`
--
ALTER TABLE `jds_quota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_quota_languagesettings`
--
ALTER TABLE `jds_quota_languagesettings`
  MODIFY `quotals_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_quota_members`
--
ALTER TABLE `jds_quota_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_saved_control`
--
ALTER TABLE `jds_saved_control`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_settings_user`
--
ALTER TABLE `jds_settings_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jds_surveymenu`
--
ALTER TABLE `jds_surveymenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jds_surveymenu_entries`
--
ALTER TABLE `jds_surveymenu_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `jds_surveys_groups`
--
ALTER TABLE `jds_surveys_groups`
  MODIFY `gsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jds_survey_url_parameters`
--
ALTER TABLE `jds_survey_url_parameters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_templates`
--
ALTER TABLE `jds_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jds_template_configuration`
--
ALTER TABLE `jds_template_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jds_tutorials`
--
ALTER TABLE `jds_tutorials`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_tutorial_entries`
--
ALTER TABLE `jds_tutorial_entries`
  MODIFY `teid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jds_users`
--
ALTER TABLE `jds_users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jds_user_groups`
--
ALTER TABLE `jds_user_groups`
  MODIFY `ugid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
