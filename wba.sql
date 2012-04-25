-- phpMyAdmin SQL Dump
-- version 2.11.11.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Středa 18. dubna 2012, 10:20
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Vypisuji data pro tabulku `php_confirm`
--

INSERT INTO `php_confirm` (`id`, `action`, `message`, `confirm`, `alert`) VALUES
(1, 'delete', 0x3c63656e7465723e41726520796f752073757265207468617420796f752077616e742064656c657465207468697320656e7472793f3c6272202f3e3c6272202f3e3c7374726f6e673e40236e616d6523403c2f7374726f6e673e3c2f63656e7465723e, 1, 0),
(2, 'alert', 0x50726f6a6563742077617320737563636566756c792064656c657465642e, 0, 1);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=35 ;

--
-- Vypisuji data pro tabulku `projects`
--

INSERT INTO `projects` (`id`, `name`, `archived`, `last_update`, `company_id`) VALUES
(34, 'Project 1', 0, '2012-04-17 16:29:15', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=24 ;

--
-- Vypisuji data pro tabulku `rc_modules`
--

INSERT INTO `rc_modules` (`id`, `name`, `project_id`) VALUES
(6, 'sdasd', 1),
(7, 'asdfsd', 1),
(4, 'test', 22),
(8, 'dsfd', 1),
(9, 'asdfsd', 1),
(11, 'sdfsdf', 10),
(12, 'rdff', 10),
(13, 'rdff', 10),
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
  `status` tinyint(4) NOT NULL COMMENT 'nothing (0), staging (1), live (2)',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Vypisuji data pro tabulku `rc_modules_vers`
--


-- --------------------------------------------------------

--
-- Struktura tabulky `rc_modules_vers_jsons`
--

CREATE TABLE IF NOT EXISTS `rc_modules_vers_jsons` (
  `id` int(11) NOT NULL auto_increment,
  `version_id` int(11) NOT NULL,
  `var` varchar(128) collate utf8_bin NOT NULL,
  `value` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Vypisuji data pro tabulku `rc_modules_vers_jsons`
--

