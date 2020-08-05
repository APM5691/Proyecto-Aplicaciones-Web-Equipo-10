-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: aplicaciones_web
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (17,'Angel','Palacios','Mirafuentes','$2y$12$JKs8GBXBoT07l/CW/2de4.PjWSYz3.6tmQYHcSzuPJDeHeenZPLV6','angel_palacios5691@outlook.com','7191001069','Hombre','Administrador','Activo'),(18,'Angel','Palacios','Mirafuentes','$2y$12$rUyHTUeEpmwOsPPCSamnReIJHy3kz0dyDxYxi4R17gZ9HjcKFDYxu','angel_palacios5691@outlook.com','7191001069','Hombre','Administrador','Activo');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_material`
--

DROP TABLE IF EXISTS `detalle_material`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_material` (
  `id_detalle_material` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `material_principal` enum('Oro_amarillo','Oro_blanco',' plata','chapa_de_oro') DEFAULT NULL,
  `material_secundario` varchar(45) DEFAULT NULL,
  `material_id` int(10) unsigned NOT NULL,
  `producto_id` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_material`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_material`
--

LOCK TABLES `detalle_material` WRITE;
/*!40000 ALTER TABLE `detalle_material` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_material` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_venta`
--

DROP TABLE IF EXISTS `detalle_venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_venta` (
  `id_detalle_venta` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ventas_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `sub_total` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_venta`
--

LOCK TABLES `detalle_venta` WRITE;
/*!40000 ALTER TABLE `detalle_venta` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_venta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direccion`
--

DROP TABLE IF EXISTS `direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direccion`
--

LOCK TABLES `direccion` WRITE;
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materiales`
--

DROP TABLE IF EXISTS `materiales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materiales` (
  `id_material` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `tipo_material` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_material`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materiales`
--

LOCK TABLES `materiales` WRITE;
/*!40000 ALTER TABLE `materiales` DISABLE KEYS */;
/*!40000 ALTER TABLE `materiales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_de_joya`
--

DROP TABLE IF EXISTS `tipo_de_joya`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_de_joya` (
  `id_tipo_de_joya` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_joya` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_de_joya`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_de_joya`
--

LOCK TABLES `tipo_de_joya` WRITE;
/*!40000 ALTER TABLE `tipo_de_joya` DISABLE KEYS */;
INSERT INTO `tipo_de_joya` VALUES (10,'Pulsera'),(11,'Arete');
/*!40000 ALTER TABLE `tipo_de_joya` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `monto_total` float NOT NULL,
  `direcciones_id` int(11) NOT NULL,
  `clientes_id1` int(11) NOT NULL,
  PRIMARY KEY (`id_venta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venta`
--

LOCK TABLES `venta` WRITE;
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` VALUES (1,234,2,2);
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-05 15:59:50
