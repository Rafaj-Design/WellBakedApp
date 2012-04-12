-- phpMyAdmin SQL Dump
-- version 2.11.11.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Čtvrtek 12. dubna 2012, 17:12
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
-- Struktura tabulky `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) collate utf8_bin NOT NULL,
  `archived` tinyint(4) NOT NULL,
  `last_update` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `company_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Vypisuji data pro tabulku `projects`
--


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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Vypisuji data pro tabulku `rc_modules`
--


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

