CREATE TABLE `animais` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `raca` varchar(45) DEFAULT NULL,
  `dono` varchar(45) DEFAULT NULL,
  `data_nascimento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `animais` (`id`,`nome`,`raca`,`dono`,`data_nascimento`) VALUES (1,'Nina','Boxer','Nivaldo','23/06/2011');
INSERT INTO `animais` (`id`,`nome`,`raca`,`dono`,`data_nascimento`) VALUES (2,'Allana','ShihTzu','Amanda','21/07/2013');
INSERT INTO `animais` (`id`,`nome`,`raca`,`dono`,`data_nascimento`) VALUES (3,'Paçoca','ShihTzu','Gilson','25/07/2015');
