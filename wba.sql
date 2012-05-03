-- phpMyAdmin SQL Dump
-- version 2.11.11.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Čtvrtek 03. května 2012, 09:14
-- Verze MySQL: 5.0.77
-- Verze PHP: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `wba`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) collate utf8_bin NOT NULL,
  `url` varchar(128) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Vypisuji data pro tabulku `companies`
--

INSERT INTO `companies` (`id`, `name`, `url`) VALUES
(1, 'Fuerte', 'fuerte');

-- --------------------------------------------------------

--
-- Struktura tabulky `lang_categories`
--

CREATE TABLE IF NOT EXISTS `lang_categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) collate utf8_bin NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Vypisuji data pro tabulku `lang_categories`
--

INSERT INTO `lang_categories` (`id`, `name`, `project_id`) VALUES
(1, 'Default', 34),
(15, 'new category 1', 34),
(13, 'Default', 0),
(12, 'News', 34);

-- --------------------------------------------------------

--
-- Struktura tabulky `lang_categories_vers`
--

CREATE TABLE IF NOT EXISTS `lang_categories_vers` (
  `id` int(11) NOT NULL auto_increment,
  `category_id` int(11) NOT NULL,
  `maj_ver` int(11) NOT NULL,
  `min_ver` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL default '0' COMMENT 'nothing (0), staging (1), live (2)',
  `archived` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Vypisuji data pro tabulku `lang_categories_vers`
--

INSERT INTO `lang_categories_vers` (`id`, `category_id`, `maj_ver`, `min_ver`, `status`, `archived`) VALUES
(1, 1, 0, 1, 0, 1),
(2, 1, 0, 2, 0, 0),
(3, 1, 1, 0, 0, 0),
(4, 1, 1, 1, 1, 0),
(5, 1, 1, 2, 2, 0),
(6, 15, 1, 0, 0, 0),
(7, 12, 0, 1, 0, 0),
(8, 12, 1, 0, 0, 0),
(9, 12, 1, 1, 2, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `lang_def_lang_set`
--

CREATE TABLE IF NOT EXISTS `lang_def_lang_set` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) collate utf8_bin NOT NULL,
  `lang_id` varchar(16) collate utf8_bin NOT NULL,
  `default_lang` int(11) NOT NULL default '0',
  `project_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `lang_def_lang_set`
--

INSERT INTO `lang_def_lang_set` (`id`, `name`, `lang_id`, `default_lang`, `project_id`) VALUES
(1, 'English', 'en', 1, 34),
(3, 'Czech', 'cz', 0, 34),
(4, 'Spanish', 'sp', 0, 34);

-- --------------------------------------------------------

--
-- Struktura tabulky `lang_other_lang`
--

CREATE TABLE IF NOT EXISTS `lang_other_lang` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(64) collate utf8_bin NOT NULL,
  `lang_id` varchar(8) collate utf8_bin NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Vypisuji data pro tabulku `lang_other_lang`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `lang_ver_jsons`
--

CREATE TABLE IF NOT EXISTS `lang_ver_jsons` (
  `id` int(11) NOT NULL auto_increment,
  `lang_id` varchar(8) collate utf8_bin NOT NULL,
  `name` varchar(128) collate utf8_bin NOT NULL,
  `translation` varchar(128) collate utf8_bin NOT NULL,
  `dictionary` tinyint(4) NOT NULL,
  `ver_id` int(11) NOT NULL,
  `parent` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=44 ;

--
-- Vypisuji data pro tabulku `lang_ver_jsons`
--

INSERT INTO `lang_ver_jsons` (`id`, `lang_id`, `name`, `translation`, `dictionary`, `ver_id`, `parent`) VALUES
(14, 'en', 'OK', '', 1, 5, 0),
(15, 'en', 'Cancel', '', 1, 5, 0),
(16, 'en', 'aha', '', 1, 4, 0),
(17, 'en', 'haha', '', 1, 4, 0),
(18, 'en', 'hoho', '', 1, 1, 0),
(19, 'en', 'ohohoho', '', 1, 1, 0),
(20, 'en', 'neeeew', '', 1, 9, 0),
(25, 'cz', 'hoho', '', 0, 1, 18),
(26, 'sp', 'hoho', '', 0, 1, 18),
(27, 'cz', 'ohohoho', '', 0, 1, 19),
(28, 'sp', 'ohohoho', '', 0, 1, 19),
(29, 'cz', 'aha', '', 0, 4, 16),
(30, 'sp', 'aha', '', 0, 4, 16),
(31, 'cz', 'haha', '', 0, 4, 17),
(32, 'sp', 'haha', '', 0, 4, 17),
(33, 'cz', 'OK', 'OK', 0, 5, 14),
(34, 'sp', 'OK', '', 0, 5, 14),
(35, 'cz', 'Cancel', 'Zrušit', 0, 5, 15),
(36, 'sp', 'Cancel', '', 0, 5, 15),
(40, 'cz', 'neeeew', 'Novinka', 0, 9, 20),
(39, 'en', 'Date', '', 1, 9, 0),
(41, 'sp', 'neeeew', '', 0, 9, 20),
(42, 'cz', 'Date', 'Datum', 0, 9, 39),
(43, 'sp', 'Date', '', 0, 9, 39);

-- --------------------------------------------------------

--
-- Struktura tabulky `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL auto_increment,
  `parent` int(11) NOT NULL,
  `content` text collate utf8_bin NOT NULL,
  `ext_script` varchar(256) collate utf8_bin NOT NULL,
  `name` varchar(256) collate utf8_bin NOT NULL,
  `url` varchar(256) collate utf8_bin NOT NULL,
  `menu` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Vypisuji data pro tabulku `pages`
--

INSERT INTO `pages` (`id`, `parent`, `content`, `ext_script`, `name`, `url`, `menu`) VALUES
(1, 0, '', '', 'Administration', 'administration', 1),
(2, 0, '', 'script.php', 'Projects', 'projects', 1),
(3, 0, '', '', 'Settings', 'settings', 1),
(4, 0, '', '', 'Logout', 'logout', 1),
(5, 2, '', '', 'Projects', 'projects', 1),
(6, 5, '', '', 'Remote Control', 'remote-control', 1),
(7, 5, '', '', 'Translations', 'translations', 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `php_confirm`
--

CREATE TABLE IF NOT EXISTS `php_confirm` (
  `id` int(11) NOT NULL auto_increment,
  `action` varchar(32) collate utf8_bin NOT NULL,
  `message` text collate utf8_bin NOT NULL,
  `confirm` tinyint(4) NOT NULL,
  `alert` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `php_confirm`
--

INSERT INTO `php_confirm` (`id`, `action`, `message`, `confirm`, `alert`) VALUES
(1, 'delete', 0x3c63656e7465723e41726520796f752073757265207468617420796f752077616e742064656c657465207468697320656e7472793f3c6272202f3e3c6272202f3e3c7374726f6e673e40236e616d6523403c2f7374726f6e673e3c2f63656e7465723e, 1, 0),
(2, 'alert', 0x50726f6a6563742077617320737563636566756c792064656c657465642e, 0, 1),
(3, 'alert', 0x4552524f523a20536f7272792c206e6f20726573706f6e73652066726f6d206461746162617365213c6272202f3e3c6272202f3e506c656173652074727920616761696e206c617465722e2e2e, 0, 1),
(4, 'alert', 0x4e65772076657273696f6e20776173207375636365737366756c792061646465642e, 0, 1),
(5, 'alert', 0x5472616e736c6174696f6e73207765726520737563636566756c792073617665642e, 0, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) collate utf8_bin NOT NULL,
  `archived` tinyint(4) NOT NULL,
  `last_update` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `company_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=39 ;

--
-- Vypisuji data pro tabulku `projects`
--

INSERT INTO `projects` (`id`, `name`, `archived`, `last_update`, `company_id`) VALUES
(34, 'Project 1', 0, '2012-04-24 10:40:58', 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `rc`
--

CREATE TABLE IF NOT EXISTS `rc` (
  `id` int(11) NOT NULL auto_increment,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Vypisuji data pro tabulku `rc`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `rc_modules`
--

CREATE TABLE IF NOT EXISTS `rc_modules` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) collate utf8_bin NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

--
-- Vypisuji data pro tabulku `rc_modules`
--

INSERT INTO `rc_modules` (`id`, `name`, `project_id`) VALUES
(20, 'Weather', 34),
(19, 'RSS feed', 34),
(21, 'Tracks', 34),
(22, 'Results', 34);

-- --------------------------------------------------------

--
-- Struktura tabulky `rc_modules_vers`
--

CREATE TABLE IF NOT EXISTS `rc_modules_vers` (
  `id` int(11) NOT NULL auto_increment,
  `module_id` int(11) NOT NULL,
  `maj_ver` int(11) NOT NULL,
  `min_ver` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL default '0' COMMENT 'nothing (0), staging (1), live (2)',
  `archived` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- Vypisuji data pro tabulku `rc_modules_vers`
--

INSERT INTO `rc_modules_vers` (`id`, `module_id`, `maj_ver`, `min_ver`, `status`, `archived`) VALUES
(1, 19, 0, 1, 0, 1),
(2, 19, 0, 2, 0, 1),
(3, 19, 0, 3, 0, 0),
(4, 19, 1, 3, 0, 0),
(5, 19, 1, 4, 2, 0),
(6, 19, 2, 0, 0, 0),
(7, 19, 2, 1, 0, 0),
(8, 19, 3, 0, 0, 0),
(9, 19, 3, 1, 1, 0),
(10, 19, 3, 2, 0, 0),
(11, 19, 4, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `rc_modules_vers_jsons`
--

CREATE TABLE IF NOT EXISTS `rc_modules_vers_jsons` (
  `id` int(11) NOT NULL auto_increment,
  `version_id` int(11) NOT NULL,
  `name` varchar(128) collate utf8_bin NOT NULL,
  `value` text collate utf8_bin NOT NULL,
  `parent` int(11) NOT NULL default '0',
  `type` int(11) NOT NULL default '0' COMMENT '1:object, 2:array, 3:string',
  `order` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Vypisuji data pro tabulku `rc_modules_vers_jsons`
--

INSERT INTO `rc_modules_vers_jsons` (`id`, `version_id`, `name`, `value`, `parent`, `type`, `order`) VALUES
(1, 5, 'test', '', 0, 1, 1),
(2, 5, 'hello', 0x776f726c64, 1, 3, 1),
(3, 5, 'abeceda', '', 1, 2, 2),
(4, 5, 'pismena1', 0x61, 3, 3, 1),
(5, 5, 'pismena2', 0x62, 3, 3, 2),
(6, 5, 'pismena3', 0x63, 3, 3, 3);
