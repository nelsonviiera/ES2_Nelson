-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: memorial
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `FormacaoAcademica`
--

DROP TABLE IF EXISTS `FormacaoAcademica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FormacaoAcademica` (
  `idFormacao` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idFormacao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FormacaoAcademica`
--

LOCK TABLES `FormacaoAcademica` WRITE;
/*!40000 ALTER TABLE `FormacaoAcademica` DISABLE KEYS */;
/*!40000 ALTER TABLE `FormacaoAcademica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Memorial`
--

DROP TABLE IF EXISTS `Memorial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Memorial` (
  `idMemorial` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `atvProfissionais` varchar(45) DEFAULT NULL,
  `participacao` varchar(45) DEFAULT NULL,
  `cargos` varchar(45) DEFAULT NULL,
  `atvDocentes` varchar(45) DEFAULT NULL,
  `atvAssistenciais` varchar(45) DEFAULT NULL,
  `atvDidaticas` varchar(45) DEFAULT NULL,
  `banca` varchar(45) DEFAULT NULL,
  `estagio` varchar(45) DEFAULT NULL,
  `atvExtensao` varchar(45) DEFAULT NULL,
  `publicacoes` varchar(45) DEFAULT NULL,
  `filiacoes` varchar(45) DEFAULT NULL,
  `titulos` varchar(45) DEFAULT NULL,
  `idFormacao` int(11) DEFAULT NULL,
  `idParticipacaoEventos` int(11) DEFAULT NULL,
  `idOrientacoesCl` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMemorial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Memorial`
--

LOCK TABLES `Memorial` WRITE;
/*!40000 ALTER TABLE `Memorial` DISABLE KEYS */;
/*!40000 ALTER TABLE `Memorial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `OrientacoesConcluidas`
--

DROP TABLE IF EXISTS `OrientacoesConcluidas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `OrientacoesConcluidas` (
  `idOrientacoesCl` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idOrientacoesCl`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `OrientacoesConcluidas`
--

LOCK TABLES `OrientacoesConcluidas` WRITE;
/*!40000 ALTER TABLE `OrientacoesConcluidas` DISABLE KEYS */;
/*!40000 ALTER TABLE `OrientacoesConcluidas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ParticipacaoEventos`
--

DROP TABLE IF EXISTS `ParticipacaoEventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ParticipacaoEventos` (
  `idParticipacaoEventos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipoParticipacao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idParticipacaoEventos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ParticipacaoEventos`
--

LOCK TABLES `ParticipacaoEventos` WRITE;
/*!40000 ALTER TABLE `ParticipacaoEventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `ParticipacaoEventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
  `idUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `dataNasc` varchar(45) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `rg` varchar(45) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `idMemorial` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-08 15:44:05
