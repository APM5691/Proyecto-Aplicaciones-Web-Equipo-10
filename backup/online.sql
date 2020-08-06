/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.11-MariaDB : Database - aplicaciones_web
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

USE `aplicaciones_web`;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(45) NOT NULL,
  `primer_apellido` varchar(45) NOT NULL,
  `segundo_apellido` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `sexo` enum('Hombre','Mujer','Indeterminado') NOT NULL,
  `perfil` enum('Administrador','Técnico','Staff') NOT NULL,
  `estatus` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cliente` */

insert  into `cliente`(`id_cliente`,`nombre_cliente`,`primer_apellido`,`segundo_apellido`,`password`,`correo_electronico`,`telefono`,`sexo`,`perfil`,`estatus`) values (17,'Angel','Palacios','Mirafuentes','$2y$12$JKs8GBXBoT07l/CW/2de4.PjWSYz3.6tmQYHcSzuPJDeHeenZPLV6','angel_palacios5691@outlook.com','7191001069','Hombre','Administrador','Activo'),(18,'Angel','Palacios','Mirafuentes','$2y$12$rUyHTUeEpmwOsPPCSamnReIJHy3kz0dyDxYxi4R17gZ9HjcKFDYxu','angel_palacios5691@outlook.com','7191001069','Hombre','Administrador','Activo');

/*Table structure for table `detalle_material` */

DROP TABLE IF EXISTS `detalle_material`;

CREATE TABLE `detalle_material` (
  `id_detalle_material` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `material_principal` enum('Oro_amarillo','Oro_blanco',' plata','chapa_de_oro') DEFAULT NULL,
  `material_secundario` varchar(45) DEFAULT NULL,
  `material_id` int(10) unsigned NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_material`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalle_material` */

/*Table structure for table `detalle_venta` */

DROP TABLE IF EXISTS `detalle_venta`;

CREATE TABLE `detalle_venta` (
  `id_detalle_venta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ventas_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `sub_total` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detalle_venta` */

/*Table structure for table `direccion` */

DROP TABLE IF EXISTS `direccion`;

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL AUTO_INCREMENT,
  `clientes_id` int(11) NOT NULL,
  `calle` varchar(45) NOT NULL,
  `numero` int(11) NOT NULL,
  `localidad` varchar(45) NOT NULL,
  `municipio` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_direccion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `direccion` */

/*Table structure for table `material` */

DROP TABLE IF EXISTS `material`;

CREATE TABLE `material` (
  `id_material` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo_material` enum('Oro_amarillo','Oro_blanco',' plata','chapa_de_oro') DEFAULT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `material` */

/*Table structure for table `producto` */

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(45) NOT NULL,
  `tipo_de_joya_id` int(11) NOT NULL,
  `no_existencias` int(11) NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `medida` varchar(45) NOT NULL,
  `precio_oferta` decimal(60,0) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `foto_original` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `producto` */

/*Table structure for table `tipo_de_joya` */

DROP TABLE IF EXISTS `tipo_de_joya`;

CREATE TABLE `tipo_de_joya` (
  `id_tipo_de_joya` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_joya` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_de_joya`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_de_joya` */

insert  into `tipo_de_joya`(`id_tipo_de_joya`,`tipo_joya`) values (10,'Pulsera'),(11,'Arete');

/*Table structure for table `venta` */

DROP TABLE IF EXISTS `venta`;

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `monto_total` float NOT NULL,
  `direcciones_id` int(11) NOT NULL,
  `clientes_id1` int(11) NOT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `venta` */

insert  into `venta`(`id_venta`,`monto_total`,`direcciones_id`,`clientes_id1`) values (1,234,2,2);

/* Procedure structure for procedure `act_material` */

/*!50003 DROP PROCEDURE IF EXISTS  `act_material` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `act_material`(in num int,in nom varchar(45), in tipo ENUM('Oro_amarillo', 'Oro_blanco', ' plata', 'chapa_de_oro'))
Begin
update  material set id_material=id_material,nombre=nom,tipo_material=tipo where id_material=num;
End */$$
DELIMITER ;

/* Procedure structure for procedure `alta_material` */

/*!50003 DROP PROCEDURE IF EXISTS  `alta_material` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `alta_material`(in nombre varchar(45),in tipo_material ENUM('Oro_amarillo', 'Oro_blanco', ' plata', 'chapa_de_oro'))
Begin
Declare id int;
set id =(select max(id) from material);
if (id=NUll)then
set id=1;
end if;
if (id=0)then
set id=1;
end if;
insert into material values((id+1),nombre,tipo_material);
End */$$
DELIMITER ;

/* Procedure structure for procedure `baja_material` */

/*!50003 DROP PROCEDURE IF EXISTS  `baja_material` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `baja_material`(in num int)
Begin
delete from material where id_material=num;
End */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
