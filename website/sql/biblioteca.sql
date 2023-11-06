# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2022-08-07 14:11:25
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "autores"
#

DROP TABLE IF EXISTS `autores`;
CREATE TABLE `autores` (
  `autorId` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `nacionalidad` varchar(255) DEFAULT NULL,
  `fechaNacimiento` varchar(255) DEFAULT NULL,
  `profilePic` varchar(255) DEFAULT 'https://cdn.discordapp.com/attachments/874108766436597760/1003989723909476373/unknown.png',
  PRIMARY KEY (`autorId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

#
# Data for table "autores"
#

INSERT INTO `autores` VALUES (1,'Juan','Perez','Uruguayo','1659440158','https://cdn.discordapp.com/attachments/874108766436597760/1003989723909476373/unknown.png'),(2,'Agustin','6666','Uruguayo','1659440158','https://cdn.discordapp.com/attachments/874108766436597760/1003989723909476373/unknown.png'),(3,'Agustin','3','Uruguayo','1659440158','https://cdn.discordapp.com/attachments/874108766436597760/1003989723909476373/unknown.png'),(4,'Agustin','4','Uruguayo','1659440158','https://cdn.discordapp.com/attachments/874108766436597760/1003989723909476373/unknown.png'),(5,'Agustin','5','Uruguayo','1659440158','https://cdn.discordapp.com/attachments/874108766436597760/1003989723909476373/unknown.png'),(6,'Agustin','6','Uruguayo','1659440158','https://cdn.discordapp.com/attachments/874108766436597760/1003989723909476373/unknown.png'),(8,'Agustin','8','Uruguayo','1659440158','https://cdn.discordapp.com/attachments/874108766436597760/1003989723909476373/unknown.png');

#
# Structure for table "clubes"
#

DROP TABLE IF EXISTS `clubes`;
CREATE TABLE `clubes` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `genero` varchar(255) DEFAULT NULL,
  `createdBy` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "clubes"
#

INSERT INTO `clubes` VALUES (1,'Lorem bla bla bla','1659301082',5,'Agras','Drama','1','https://img.freepik.com/vector-gratis/concepto-ilustracion-terapia-grupo_52683-45774.jpg?w=2000');

#
# Structure for table "libros"
#

DROP TABLE IF EXISTS `libros`;
CREATE TABLE `libros` (
  `codigoLibro` int(11) NOT NULL AUTO_INCREMENT,
  `rating` varchar(255) NOT NULL DEFAULT '',
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `descripcion` varchar(250) NOT NULL DEFAULT '',
  `genero` varchar(255) NOT NULL DEFAULT '',
  `fecha` varchar(255) DEFAULT NULL,
  `costo` varchar(255) DEFAULT NULL,
  `ownedBy` varchar(255) DEFAULT NULL,
  `expiration_date` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `pubBy` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT 'No encontrado',
  PRIMARY KEY (`codigoLibro`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=utf8mb4;

#
# Data for table "libros"
#

INSERT INTO `libros` VALUES (1,'1','Las aventuuuuuuuuras','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec nisi non arcu sagittis luctus vitae vel urna. Curabitur a vehicula metus. Suspendisse quam massa, vulputate sed nisi vitae, molestie efficitur turpis. Aliquam vitae congue metu','Drama','1659218400','25','1','0','https://cdn.discordapp.com/attachments/874108766436597760/1002188532233797712/unknown.png','1','1'),(2,'3','nuevocambio','kjdaskjjasjk','kdasjkakj','1659218400','10',NULL,NULL,'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg','1','1'),(3,'3','nuevo','kjdaskjjasjk','kdasjkakj','1659218400','10',NULL,NULL,'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg','1','3'),(4,'1','fassafasfsafsfafsasafsaffsaasf','dsada','dasdadas','1659218400','55',NULL,NULL,'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg','1','1'),(5,'1','a','a','a','1659236400','11',NULL,NULL,'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg','1','5'),(6,'1','Nuevo libroaa','a','a','1659236400','11',NULL,NULL,'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg','1','1'),(9,'1','Cambio 3','asdsasadsda','sdasadsdasad','1659236400','1',NULL,NULL,'https://edit.org/images/cat/portadas-libros-big-2019101610.jpg','1','No encontrado'),(120,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(122,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(123,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(124,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(125,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(126,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(127,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(128,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(129,'','a','a','a','1546138800','a','a','a','https://edit.org/images/cat/portadas-libros-big-2019101610.jpg','a','No encontrado'),(130,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(131,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(132,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(133,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(134,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(135,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(136,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(137,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(138,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(139,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(140,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(141,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(142,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado'),(143,'','a','','',NULL,NULL,NULL,NULL,NULL,NULL,'No encontrado');

#
# Structure for table "libros_adquiridos"
#

DROP TABLE IF EXISTS `libros_adquiridos`;
CREATE TABLE `libros_adquiridos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ownedBy` varchar(255) DEFAULT NULL,
  `idLibro` varchar(255) DEFAULT NULL,
  `buyDate` varchar(255) DEFAULT NULL,
  `expDate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

#
# Data for table "libros_adquiridos"
#

INSERT INTO `libros_adquiridos` VALUES (1,'1','3','1659295610','2020-05-02'),(2,'1','2','1659295610','2020-02-20'),(3,'1','1','1659295610','2020-01-01'),(4,'1','116','1659295610','1659295610');

#
# Structure for table "rangos"
#

DROP TABLE IF EXISTS `rangos`;
CREATE TABLE `rangos` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `rango` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

#
# Data for table "rangos"
#

INSERT INTO `rangos` VALUES (1,'Visitante'),(2,'Usuario'),(3,'Administrador');

#
# Structure for table "redessociales"
#

DROP TABLE IF EXISTS `redessociales`;
CREATE TABLE `redessociales` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idAutor` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "redessociales"
#


#
# Structure for table "users_accounts"
#

DROP TABLE IF EXISTS `users_accounts`;
CREATE TABLE `users_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perms_level` varchar(255) DEFAULT NULL,
  `acc_status` varchar(255) DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `password` varbinary(150) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `creditos` varchar(255) DEFAULT '0',
  `createdAt` varchar(255) DEFAULT '',
  `lastLogin` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `totalBooks` varchar(255) DEFAULT NULL,
  `profilePic` varchar(255) DEFAULT NULL,
  `can_edit` varchar(255) DEFAULT NULL,
  `can_comment` varchar(255) DEFAULT NULL,
  `origen` varchar(255) NOT NULL DEFAULT '',
  `clubId` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pkUsername` (`username`),
  UNIQUE KEY `emailPk` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;

#
# Data for table "users_accounts"
#

INSERT INTO `users_accounts` VALUES (1,'1','1','admin',X'61646D696E','fasfasfas','fasfas','cambio2dasdsad@gmail.coma','2121','1500','1643654064','1659826110','::1','4','fotosPerfil/1-c5c362c-Figma.png',NULL,NULL,'Uruguay','0'),(2,'0','1','user',X'75736572','Rodrigo','Sanchez','prueba@agus.com','2121','15','1643654064','1659737226','::1','7','fotosPerfil/2-eeb6892-1c27f0fd-e7f1-4b15-bf30-5ee6e3ed8f37.png',NULL,NULL,'Uruguay','0');

#
# Structure for table "users_logs"
#

DROP TABLE IF EXISTS `users_logs`;
CREATE TABLE `users_logs` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '0',
  `info` varchar(255) NOT NULL DEFAULT '',
  `date` varchar(255) NOT NULL DEFAULT '0000-00-00',
  `level` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `asddsa` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=184 DEFAULT CHARSET=utf8mb4;

#
# Data for table "users_logs"
#

INSERT INTO `users_logs` VALUES (168,'1','admin','::1','1','Inicio de sesion exitoso','1659629454',NULL),(169,'1','admin','::1','2','Eliminó al usuario  16','1659629541',NULL),(170,'1','admin','::1','1','Inicio de sesion exitoso','1659658685',NULL),(171,'2','user','::1','1','Inicio de sesion exitoso','1659703439',NULL),(172,'1','admin','::1','1','Inicio de sesion exitoso','1659736181',NULL),(173,'1','admin','::1','2','Eliminó el libro  118','1659736999',NULL),(174,'2','user','::1','1','Inicio de sesion exitoso','1659737226',NULL),(175,'2','user','::1','3','Cambio de celular','1659737444',NULL),(176,'2','user','::1','3','Cambio de nombre','1659737461',NULL),(177,'1','admin','::1','2','Eliminó al usuario # 29','1659738284',NULL),(178,'1','admin','::1','2','Eliminó el libro # 8','1659738287',NULL),(179,'1','admin','::1','2','Eliminó al autor # 7','1659738289',NULL),(180,'1','admin','::1','2','Eliminación de libro 119','1659738543',NULL),(181,'1','admin','::1','2','Eliminación de libro # 121','1659738551',NULL),(182,'1','admin','::1','2','Eliminó el libro # 7','1659738594',NULL),(183,'1','admin','::1','1','Inicio de sesion exitoso','1659826110',NULL);
