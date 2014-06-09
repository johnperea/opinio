/*
SQLyog Ultimate v9.50 
MySQL - 5.5.16 : Database - opinio
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`opinio` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `opinio`;

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `categorias` */

/*Table structure for table `preguntas` */

DROP TABLE IF EXISTS `preguntas`;

CREATE TABLE `preguntas` (
  `id` int(5) NOT NULL,
  `texto` varchar(50) NOT NULL,
  `id_categoria` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_preguntas` (`id_categoria`),
  CONSTRAINT `FK_preguntas` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `preguntas` */

/*Table structure for table `puntos` */

DROP TABLE IF EXISTS `puntos`;

CREATE TABLE `puntos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `puntos` */

/*Table structure for table `respuestas` */

DROP TABLE IF EXISTS `respuestas`;

CREATE TABLE `respuestas` (
  `id` int(5) NOT NULL,
  `fecha` datetime NOT NULL,
  `respuesta` varchar(50) NOT NULL,
  `id_punto` int(5) NOT NULL,
  `id_pregunta` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_respuestas-punto` (`id_punto`),
  KEY `FK_respuestas-preguntas` (`id_pregunta`),
  CONSTRAINT `FK_respuestas-preguntas` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id`),
  CONSTRAINT `FK_respuestas-punto` FOREIGN KEY (`id_punto`) REFERENCES `puntos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `respuestas` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varbinary(50) NOT NULL,
  `id_rol` int(5) NOT NULL,
  `id_punto` int(5) DEFAULT NULL,
  PRIMARY KEY (`correo`),
  KEY `FK_usuarios-roles` (`id_rol`),
  KEY `FK_usuarios-puntos` (`id_punto`),
  CONSTRAINT `FK_usuarios-puntos` FOREIGN KEY (`id_punto`) REFERENCES `puntos` (`id`),
  CONSTRAINT `FK_usuarios-roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
