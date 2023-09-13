CREATE TABLE IF NOT EXISTS `paises` (
  `id` int(11) NOT NULL auto_increment,
  `paises` varchar(60) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
 
--
-- Volcar la base de datos para la tabla `Paises`
--
 
INSERT INTO `Paises` (`id`, `paises`) VALUES
(1, 'Ecuador'),
(2, 'Chile'),
(3, 'Peru'),
(4, 'Argentina'),
(5, 'Colombia');