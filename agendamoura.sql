
CREATE DATABASE IF NOT EXISTS `agendamoura`;
USE `agendamoura`;


CREATE TABLE IF NOT EXISTS `entidade` (
  `id_entidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `numero` int(11) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `bairro` varchar(300) NOT NULL,
  `cidade` varchar(300) NOT NULL,
  PRIMARY KEY (`id_entidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

