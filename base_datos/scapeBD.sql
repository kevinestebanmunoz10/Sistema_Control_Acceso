-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: scape
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `acceso_equi`
--

DROP TABLE IF EXISTS `acceso_equi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acceso_equi` (
  `id_regi_equip` int(11) NOT NULL AUTO_INCREMENT,
  `f_entrada` datetime NOT NULL,
  `f_salida` datetime DEFAULT NULL,
  `serial_equi` varchar(50) NOT NULL,
  `Documento` varchar(20) NOT NULL,
  PRIMARY KEY (`id_regi_equip`),
  KEY `serial_equi` (`serial_equi`),
  KEY `Documento` (`Documento`),
  CONSTRAINT `acceso_equi_ibfk_1` FOREIGN KEY (`serial_equi`) REFERENCES `equipo` (`serial_equi`),
  CONSTRAINT `acceso_equi_ibfk_2` FOREIGN KEY (`Documento`) REFERENCES `usuario` (`Documento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acceso_equi`
--

LOCK TABLES `acceso_equi` WRITE;
/*!40000 ALTER TABLE `acceso_equi` DISABLE KEYS */;
INSERT INTO `acceso_equi` VALUES (1,'2025-06-01 08:00:00','2025-06-01 12:00:00','SN-HP-001','1003456793'),(2,'2025-06-01 08:30:00','2025-06-01 13:00:00','SN-DELL-002','1003456792'),(3,'2025-06-01 09:00:00',NULL,'SN-LEN-003','1003456791'),(4,'2025-06-01 10:00:00','2025-06-01 11:30:00','SN-SAM-004','1003456790'),(5,'2025-06-01 11:00:00',NULL,'SN-APP-005','1003456789');
/*!40000 ALTER TABLE `acceso_equi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acceso_pers`
--

DROP TABLE IF EXISTS `acceso_pers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acceso_pers` (
  `id_acces` int(11) NOT NULL AUTO_INCREMENT,
  `f_ingreso` datetime NOT NULL,
  `f_salida` datetime DEFAULT NULL,
  `Documento` varchar(20) DEFAULT NULL,
  `Docu_visi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_acces`),
  KEY `Documento` (`Documento`),
  KEY `Docu_visi` (`Docu_visi`),
  CONSTRAINT `acceso_pers_ibfk_1` FOREIGN KEY (`Documento`) REFERENCES `usuario` (`Documento`),
  CONSTRAINT `acceso_pers_ibfk_2` FOREIGN KEY (`Docu_visi`) REFERENCES `visitantes` (`Docu_visi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acceso_pers`
--

LOCK TABLES `acceso_pers` WRITE;
/*!40000 ALTER TABLE `acceso_pers` DISABLE KEYS */;
INSERT INTO `acceso_pers` VALUES (1,'2025-06-01 07:30:00','2025-06-01 17:00:00','1003456789',NULL),(2,'2025-06-01 07:45:00','2025-06-01 17:00:00','1003456790',NULL),(3,'2025-06-01 08:00:00',NULL,'1003456791',NULL),(4,'2025-06-01 09:00:00','2025-06-01 10:30:00',NULL,'80123456'),(5,'2025-06-01 10:00:00',NULL,NULL,'80123457');
/*!40000 ALTER TABLE `acceso_pers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `acudiente`
--

DROP TABLE IF EXISTS `acudiente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acudiente` (
  `Documento_acud` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tel_acu` varchar(20) NOT NULL,
  `tel_acu2` varchar(20) DEFAULT NULL,
  `Direcccion_acu` varchar(150) DEFAULT NULL,
  `Correo_acud` varchar(100) NOT NULL,
  PRIMARY KEY (`Documento_acud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acudiente`
--

LOCK TABLES `acudiente` WRITE;
/*!40000 ALTER TABLE `acudiente` DISABLE KEYS */;
INSERT INTO `acudiente` VALUES ('52345678','Mar?a L?pez','3156789012','3167890123','Cra 5 #10-20','maria@gmail.com'),('52345679','Jorge Ram?rez','3178901234',NULL,'Cll 8 #15-30','jorge@gmail.com'),('52345680','Ana Torres','3189012345','3190123456','Av 3 #20-40','ana@gmail.com'),('52345681','Luis Herrera','3201234567',NULL,'Cra 9 #5-15','luis@gmail.com'),('52345682','Rosa D?az','3212345678','3223456789','Cll 12 #8-25','rosa@gmail.com');
/*!40000 ALTER TABLE `acudiente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `cod_Postal` int(11) NOT NULL,
  `Ciudad` varchar(100) NOT NULL,
  `Codi_Departa` int(11) NOT NULL,
  PRIMARY KEY (`cod_Postal`),
  KEY `Codi_Departa` (`Codi_Departa`),
  CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`Codi_Departa`) REFERENCES `departamento` (`Codi_Departa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` VALUES (50001,'Medell?n',5),(80001,'Barranquilla',8),(110001,'Bogot?',11),(730001,'Ibagu?',73),(760001,'Cali',76);
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamento`
--

DROP TABLE IF EXISTS `departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamento` (
  `Codi_Departa` int(11) NOT NULL,
  `Departamento` varchar(100) NOT NULL,
  PRIMARY KEY (`Codi_Departa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamento`
--

LOCK TABLES `departamento` WRITE;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` VALUES (5,'Antioquia'),(8,'Atl?ntico'),(11,'Cundinamarca'),(73,'Tolima'),(76,'Valle del Cauca');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipo`
--

DROP TABLE IF EXISTS `equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipo` (
  `serial_equi` varchar(50) NOT NULL,
  `id_t_equip` int(11) NOT NULL,
  `id_Marca` int(11) NOT NULL,
  `Color` varchar(30) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`serial_equi`),
  KEY `id_t_equip` (`id_t_equip`),
  KEY `id_Marca` (`id_Marca`),
  CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`id_t_equip`) REFERENCES `tipo_equipo` (`id_t_equip`),
  CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`id_Marca`) REFERENCES `marca` (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipo`
--

LOCK TABLES `equipo` WRITE;
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
INSERT INTO `equipo` VALUES ('SN-APP-005',2,5,'Plateado','app005.jpg'),('SN-DELL-002',1,2,'Negro','dell002.jpg'),('SN-HP-001',1,1,'Gris','hp001.jpg'),('SN-LEN-003',3,3,'Negro','len003.jpg'),('SN-SAM-004',2,4,'Blanco','sam004.jpg');
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,1),(2,1),(3,0),(4,1),(5,0);
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiante_acudiente`
--

DROP TABLE IF EXISTS `estudiante_acudiente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiante_acudiente` (
  `id_estu_acud` int(11) NOT NULL AUTO_INCREMENT,
  `parentesco` varchar(50) DEFAULT NULL,
  `Autorizado` varchar(10) DEFAULT NULL,
  `Documento_acud` varchar(20) NOT NULL,
  `Documento` varchar(20) NOT NULL,
  PRIMARY KEY (`id_estu_acud`),
  KEY `Documento_acud` (`Documento_acud`),
  KEY `Documento` (`Documento`),
  CONSTRAINT `estudiante_acudiente_ibfk_1` FOREIGN KEY (`Documento_acud`) REFERENCES `acudiente` (`Documento_acud`),
  CONSTRAINT `estudiante_acudiente_ibfk_2` FOREIGN KEY (`Documento`) REFERENCES `usuario` (`Documento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante_acudiente`
--

LOCK TABLES `estudiante_acudiente` WRITE;
/*!40000 ALTER TABLE `estudiante_acudiente` DISABLE KEYS */;
INSERT INTO `estudiante_acudiente` VALUES (1,'Madre','Si','52345678','1003456789'),(2,'Padre','Si','52345679','1003456790'),(3,'Madre','Si','52345680','1003456791'),(4,'Padre','No','52345681','1003456792'),(5,'Abuela','Si','52345682','1003456793');
/*!40000 ALTER TABLE `estudiante_acudiente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jornada`
--

DROP TABLE IF EXISTS `jornada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jornada` (
  `id_Jornada` int(11) NOT NULL AUTO_INCREMENT,
  `Jornada` varchar(20) NOT NULL,
  PRIMARY KEY (`id_Jornada`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jornada`
--

LOCK TABLES `jornada` WRITE;
/*!40000 ALTER TABLE `jornada` DISABLE KEYS */;
INSERT INTO `jornada` VALUES (1,'Ma?ana'),(2,'Tarde'),(3,'Noche'),(4,'Completa'),(5,'Sabatina');
/*!40000 ALTER TABLE `jornada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `marca` varchar(50) NOT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` VALUES (1,'HP'),(2,'Dell'),(3,'Lenovo'),(4,'Samsung'),(5,'Apple');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matricula`
--

DROP TABLE IF EXISTS `matricula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matricula` (
  `numero_matri` int(11) NOT NULL AUTO_INCREMENT,
  `grado` varchar(20) NOT NULL,
  `fecha_matri` date NOT NULL,
  `id_Salon` int(11) NOT NULL,
  `Documento` varchar(20) NOT NULL,
  PRIMARY KEY (`numero_matri`),
  KEY `id_Salon` (`id_Salon`),
  KEY `Documento` (`Documento`),
  CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`id_Salon`) REFERENCES `salon` (`id_Salon`),
  CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`Documento`) REFERENCES `usuario` (`Documento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matricula`
--

LOCK TABLES `matricula` WRITE;
/*!40000 ALTER TABLE `matricula` DISABLE KEYS */;
INSERT INTO `matricula` VALUES (1,'6?','2025-01-15',1,'1003456789'),(2,'7?','2025-01-15',2,'1003456790'),(3,'8?','2025-01-16',1,'1003456791'),(4,'9?','2025-01-16',3,'1003456792'),(5,'10?','2025-01-17',2,'1003456793');
/*!40000 ALTER TABLE `matricula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permiso`
--

DROP TABLE IF EXISTS `permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permiso` (
  `id_Permi` int(11) NOT NULL AUTO_INCREMENT,
  `nom_permis` varchar(100) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `id_estu_acud` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Permi`),
  KEY `id_estu_acud` (`id_estu_acud`),
  CONSTRAINT `permiso_ibfk_1` FOREIGN KEY (`id_estu_acud`) REFERENCES `estudiante_acudiente` (`id_estu_acud`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permiso`
--

LOCK TABLES `permiso` WRITE;
/*!40000 ALTER TABLE `permiso` DISABLE KEYS */;
INSERT INTO `permiso` VALUES (1,'Ver reportes','Permite ver reportes del sistema',5),(2,'Crear usuario','Permite crear nuevos usuarios',4),(3,'Gestionar equipos','Permite registrar y editar equipos',3),(4,'Ver accesos','Permite ver el historial de accesos',2),(5,'Autorizar salida','Permite autorizar salida de estudiantes',1);
/*!40000 ALTER TABLE `permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestamo_equipo`
--

DROP TABLE IF EXISTS `prestamo_equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestamo_equipo` (
  `id_Prestamo_equi` int(11) NOT NULL AUTO_INCREMENT,
  `f_Prestamo` datetime NOT NULL,
  `f_devolucion` datetime DEFAULT NULL,
  `motivo` varchar(255) DEFAULT NULL,
  `Documento` varchar(20) NOT NULL,
  `serial_equi` varchar(50) NOT NULL,
  `id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_Prestamo_equi`),
  KEY `Documento` (`Documento`),
  KEY `serial_equi` (`serial_equi`),
  KEY `id_estado` (`id_estado`),
  CONSTRAINT `prestamo_equipo_ibfk_1` FOREIGN KEY (`Documento`) REFERENCES `usuario` (`Documento`),
  CONSTRAINT `prestamo_equipo_ibfk_2` FOREIGN KEY (`serial_equi`) REFERENCES `equipo` (`serial_equi`),
  CONSTRAINT `prestamo_equipo_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamo_equipo`
--

LOCK TABLES `prestamo_equipo` WRITE;
/*!40000 ALTER TABLE `prestamo_equipo` DISABLE KEYS */;
INSERT INTO `prestamo_equipo` VALUES (1,'2025-06-01 08:00:00','2025-06-01 12:00:00','Clase de informatica','1003456789','SN-HP-001',1),(2,'2025-06-02 08:30:00','2025-06-02 13:00:00','Exposicion de proyecto','1003456790','SN-DELL-002',1),(3,'2025-06-03 09:00:00',NULL,'Tarea en casa','1003456791','SN-LEN-003',2),(4,'2025-06-04 10:00:00','2025-06-04 16:00:00','Practica de laboratorio','1003456792','SN-SAM-004',1),(5,'2025-06-05 11:00:00',NULL,'Proyecto final','1003456793','SN-APP-005',2);
/*!40000 ALTER TABLE `prestamo_equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'Administrador'),(2,'Vigilante'),(3,'Coordinador'),(4,'Rector'),(5,'Estudiante');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol_permiso`
--

DROP TABLE IF EXISTS `rol_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rol_permiso` (
  `id_rol_permi` int(11) NOT NULL AUTO_INCREMENT,
  `id_permi` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_rol_permi`),
  KEY `id_permi` (`id_permi`),
  KEY `id_rol` (`id_rol`),
  CONSTRAINT `rol_permiso_ibfk_1` FOREIGN KEY (`id_permi`) REFERENCES `permiso` (`id_Permi`),
  CONSTRAINT `rol_permiso_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol_permiso`
--

LOCK TABLES `rol_permiso` WRITE;
/*!40000 ALTER TABLE `rol_permiso` DISABLE KEYS */;
INSERT INTO `rol_permiso` VALUES (1,1,1),(2,2,1),(3,3,1),(4,4,2),(5,5,3);
/*!40000 ALTER TABLE `rol_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salon`
--

DROP TABLE IF EXISTS `salon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salon` (
  `id_Salon` int(11) NOT NULL AUTO_INCREMENT,
  `salon` varchar(50) NOT NULL,
  `id_Jornada` int(11) NOT NULL,
  `Nit` int(11) NOT NULL,
  PRIMARY KEY (`id_Salon`),
  KEY `id_Jornada` (`id_Jornada`),
  KEY `Nit` (`Nit`),
  CONSTRAINT `salon_ibfk_1` FOREIGN KEY (`id_Jornada`) REFERENCES `jornada` (`id_Jornada`),
  CONSTRAINT `salon_ibfk_2` FOREIGN KEY (`Nit`) REFERENCES `sede` (`Nit`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salon`
--

LOCK TABLES `salon` WRITE;
/*!40000 ALTER TABLE `salon` DISABLE KEYS */;
INSERT INTO `salon` VALUES (1,'Salon 101',1,900123456),(2,'Salon 102',2,900123456),(3,'Lab Sistemas',1,900123456),(4,'Salon 201',3,900234567),(5,'Auditorio',4,900234567);
/*!40000 ALTER TABLE `salon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sede`
--

DROP TABLE IF EXISTS `sede`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sede` (
  `Nit` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `cod_postal` int(11) NOT NULL,
  PRIMARY KEY (`Nit`),
  KEY `cod_postal` (`cod_postal`),
  CONSTRAINT `sede_ibfk_1` FOREIGN KEY (`cod_postal`) REFERENCES `ciudad` (`cod_Postal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sede`
--

LOCK TABLES `sede` WRITE;
/*!40000 ALTER TABLE `sede` DISABLE KEYS */;
INSERT INTO `sede` VALUES (900123456,'Sede Principal Ibagu?',730001),(900234567,'Sede Norte Bogot?',110001),(900345678,'Sede Laureles Medell?n',50001),(900456789,'Sede Sur Cali',760001),(900567890,'Sede Centro Barranquilla',80001);
/*!40000 ALTER TABLE `sede` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_equipo`
--

DROP TABLE IF EXISTS `tipo_equipo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_equipo` (
  `id_t_equip` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_t_equip`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_equipo`
--

LOCK TABLES `tipo_equipo` WRITE;
/*!40000 ALTER TABLE `tipo_equipo` DISABLE KEYS */;
INSERT INTO `tipo_equipo` VALUES (1,'Port?til'),(2,'Tablet'),(3,'Proyector'),(4,'Desktop'),(5,'Impresora');
/*!40000 ALTER TABLE `tipo_equipo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `Documento` varchar(20) NOT NULL,
  `Nom_usua` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `QR` varchar(255) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_Estado` int(11) NOT NULL,
  `cod_postal` int(11) NOT NULL,
  PRIMARY KEY (`Documento`),
  KEY `id_rol` (`id_rol`),
  KEY `id_Estado` (`id_Estado`),
  KEY `cod_postal` (`cod_postal`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`),
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_Estado`) REFERENCES `estado` (`id_estado`),
  CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`cod_postal`) REFERENCES `ciudad` (`cod_Postal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('1003456789','Kevin Mu?oz','kevin@gmail.com','3101234567','QR-001','1234',5,1,730001),('1003456790','Angel Montealegre','angel@gmail.com','3112345678','QR-002','1234',3,1,730001),('1003456791','Zahegh Murillo','zahegh@gmail.com','3123456789','QR-003','1234',2,1,730001),('1003456792','Laura G?mez','laura@gmail.com','3134567890','QR-004','1234',4,1,110001),('1003456793','Carlos P?rez','carlos@gmail.com','3145678901','QR-005','1234',1,1,730001);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitantes`
--

DROP TABLE IF EXISTS `visitantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitantes` (
  `Docu_visi` varchar(20) NOT NULL,
  `Nom_visi` varchar(100) NOT NULL,
  `tel_visi` varchar(20) NOT NULL,
  `correo_visi` varchar(100) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `Documento` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Docu_visi`),
  KEY `id_estado` (`id_estado`),
  KEY `Documento` (`Documento`),
  CONSTRAINT `visitantes_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  CONSTRAINT `visitantes_ibfk_2` FOREIGN KEY (`Documento`) REFERENCES `usuario` (`Documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitantes`
--

LOCK TABLES `visitantes` WRITE;
/*!40000 ALTER TABLE `visitantes` DISABLE KEYS */;
INSERT INTO `visitantes` VALUES ('80123456','Pedro Vargas','3234567890','pedro@gmail.com',1,NULL),('80123457','Sof?a Castro','3245678901','sofia@gmail.com',1,NULL),('80123458','Andr?s Mora','3256789012','andres@gmail.com',1,NULL),('80123459','Paola Jim?nez','3267890123','paola@gmail.com',2,NULL),('80123460','Diego Salcedo','3278901234','diego@gmail.com',2,NULL);
/*!40000 ALTER TABLE `visitantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-06-05  9:37:19
