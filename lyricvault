-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para lyricvault_db
CREATE DATABASE IF NOT EXISTS `lyricvault_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `lyricvault_db`;

-- Volcando estructura para tabla lyricvault_db.albums
CREATE TABLE IF NOT EXISTS `albums` (
  `ID_Album` int(11) NOT NULL,
  `ID_Artista` int(11) DEFAULT NULL,
  `Titol_Album` varchar(100) NOT NULL,
  `Data_Llançament` date DEFAULT NULL,
  `Genere_Album` varchar(100) DEFAULT NULL,
  `Productor` varchar(100) DEFAULT NULL,
  `Durada_Total` int(11) DEFAULT NULL,
  `Portada_Album` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Album`),
  KEY `ID_Artista` (`ID_Artista`),
  CONSTRAINT `albums_ibfk_1` FOREIGN KEY (`ID_Artista`) REFERENCES `artistes` (`ID_Artista`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla lyricvault_db.albums: ~35 rows (aproximadamente)
DELETE FROM `albums`;
INSERT INTO `albums` (`ID_Album`, `ID_Artista`, `Titol_Album`, `Data_Llançament`, `Genere_Album`, `Productor`, `Durada_Total`, `Portada_Album`) VALUES
	(1, 1, 'Un Verano Sin Ti', '2022-05-06', 'Reguetón', 'Bad Bunny', 3200, '/img/BadBunny'),
	(2, 2, 'Colores', '2020-03-20', 'Reguetón', 'J Balvin', 3150, 'https://example.com/colores.jpg'),
	(3, 3, 'Nibiru', '2019-11-15', 'Reguetón', 'Ozuna', 3100, 'https://example.com/nibiru.jpg'),
	(4, 4, 'KG0516', '2021-03-26', 'Reguetón', 'Karol G', 3250, 'https://example.com/kg0516.jpg'),
	(5, 5, 'Emmanuel', '2020-05-29', 'Reguetón', 'Anuel AA', 3400, 'https://example.com/emmanuel.jpg'),
	(6, 6, 'Íntimo', '2021-01-08', 'Reguetón', 'Nicky Jam', 3000, 'https://example.com/intimo.jpg'),
	(7, 7, 'Legendaddy', '2022-03-24', 'Reguetón', 'Daddy Yankee', 3350, 'https://example.com/legendaddy.jpg'),
	(8, 8, 'Papi Juancho', '2020-08-21', 'Reguetón', 'Maluma', 3300, 'https://example.com/papijuancho.jpg'),
	(9, 9, 'Sueño', '2021-11-05', 'Reguetón', 'Sech', 3100, 'https://example.com/sueno.jpg'),
	(10, 10, 'Timelezz', '2021-09-24', 'Reguetón', 'Jhay Cortez', 3200, 'https://example.com/timelezz.jpg'),
	(11, 11, 'Vida', '2019-02-01', 'Pop', 'Luis Fonsi', 3050, 'https://example.com/vida.jpg'),
	(12, 12, 'El Dorado', '2017-05-26', 'Pop', 'Shakira', 3100, 'https://example.com/eldorado.jpg'),
	(13, 13, 'Anti', '2016-01-29', 'Pop', 'Rihanna', 3250, 'https://example.com/anti.jpg'),
	(14, 14, 'Divide', '2017-03-03', 'Pop', 'Ed Sheeran', 3150, 'https://example.com/divide.jpg'),
	(15, 15, 'Thank U, Next', '2019-02-08', 'Pop', 'Ariana Grande', 3100, 'https://example.com/thankunext.jpg'),
	(16, 16, 'When We All Fall Asleep, Where Do We Go?', '2019-03-29', 'Pop', 'Billie Eilish', 3250, 'https://example.com/whenweallfallasleep.jpg'),
	(17, 17, 'Certified Lover Boy', '2021-09-03', 'Rap', 'Drake', 3400, 'https://example.com/certifiedloverboy.jpg'),
	(18, 18, 'DAMN.', '2017-04-14', 'Rap', 'Kendrick Lamar', 3150, 'https://example.com/damn.jpg'),
	(19, 19, 'Hollywood Bleeding', '2019-09-06', 'Rap', 'Post Malone', 3300, 'https://example.com/hollywoodsbleeding.jpg'),
	(20, 20, 'Astroworld', '2018-08-03', 'Rap', 'Travis Scott', 3350, 'https://example.com/astroworld.jpg'),
	(21, 21, 'After Hours', '2020-03-20', 'R&B', 'The Weeknd', 3200, 'https://example.com/afterhours.jpg'),
	(22, 22, '24K Magic', '2016-11-18', 'R&B', 'Bruno Mars', 3050, 'https://example.com/24kmagic.jpg'),
	(23, 23, 'Lemonade', '2016-04-23', 'R&B', 'Beyoncé', 3250, 'https://example.com/lemonade.jpg'),
	(24, 24, 'Darkness and Light', '2016-12-02', 'R&B', 'John Legend', 3100, 'https://example.com/darknessandlight.jpg'),
	(25, 25, 'Here', '2015-11-06', 'R&B', 'Alicia Keys', 3300, 'https://example.com/here.jpg'),
	(26, 26, 'Elvis', '1956-03-23', 'Rock', 'Elvis Presley', 2950, 'https://example.com/elvis.jpg'),
	(27, 27, 'Sticky Fingers', '1971-04-23', 'Rock', 'The Rolling Stones', 3100, 'https://example.com/stickyfingers.jpg'),
	(28, 28, 'IV', '1971-11-08', 'Rock', 'Led Zeppelin', 3250, 'https://example.com/iv.jpg'),
	(29, 29, 'A Night at the Opera', '1975-11-21', 'Rock', 'Queen', 3400, 'https://example.com/nightattheopera.jpg'),
	(30, 30, 'Nevermind', '1991-09-24', 'Grunge', 'Nirvana', 3200, 'https://example.com/nevermind.jpg'),
	(31, 31, 'Vs.', '1993-10-19', 'Grunge', 'Pearl Jam', 3300, 'https://example.com/vs.jpg'),
	(32, 32, 'OK Computer', '1997-05-21', 'Alternative', 'Radiohead', 3350, 'https://example.com/okcomputer.jpg'),
	(33, 33, 'Californication', '1999-06-08', 'Alternative', 'Red Hot Chili Peppers', 3400, 'https://example.com/californication.jpg'),
	(34, 34, 'Discovery', '2001-03-12', 'Electrònica', 'Daft Punk', 3300, 'https://example.com/discovery.jpg'),
	(35, 35, '18 Months', '2012-10-26', 'Electrònica', 'Calvin Harris', 3400, 'https://example.com/18months.jpg');

-- Volcando estructura para tabla lyricvault_db.artistes
CREATE TABLE IF NOT EXISTS `artistes` (
  `ID_Artista` int(11) NOT NULL,
  `Nom_Artista` varchar(100) NOT NULL,
  `Genere` varchar(100) DEFAULT NULL,
  `Nacionalitat` varchar(100) DEFAULT NULL,
  `Biografia` text DEFAULT NULL,
  `Lloc_Web` varchar(255) DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_Artista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla lyricvault_db.artistes: ~55 rows (aproximadamente)
DELETE FROM `artistes`;
INSERT INTO `artistes` (`ID_Artista`, `Nom_Artista`, `Genere`, `Nacionalitat`, `Biografia`, `Lloc_Web`, `Foto`) VALUES
	(1, 'Bad Bunny', 'Reguetón', 'Puerto Rico', 'Cantante y rapero.', 'https://example.com/badbunny.jpg', 'https://i.imgur.com/BN93PyH.jpeg'),
	(2, 'J Balvin', 'Reguetón', 'Colombia', 'Cantante y compositor.', 'https://example.com/jbalvin.jpg', 'https://i.imgur.com/VOdtNwE.jpeg'),
	(3, 'Ozuna', 'Reguetón', 'Puerto Rico', 'Cantante y compositor.', 'https://example.com/ozuna.jpg', 'https://i.imgur.com/tTeTzE0.jpeg'),
	(4, 'Karol G', 'Reguetón', 'Colombia', 'Cantante y compositora.', 'https://example.com/karolg.jpg', 'https://i.imgur.com/xO5EdCQ.jpeg'),
	(5, 'Anuel AA', 'Reguetón', 'Puerto Rico', 'Rapper y cantante.', 'https://example.com/anuel.jpg', 'https://i.imgur.com/CuMGPbp.jpeg'),
	(6, 'Nicky Jam', 'Reguetón', 'Puerto Rico', 'Cantante y compositor.', 'https://example.com/nickyjam.jpg', 'https://i.imgur.com/ldwS7av.jpeg'),
	(7, 'Daddy Yankee', 'Reguetón', 'Puerto Rico', 'Cantante y compositor.', 'https://example.com/daddyyankee.jpg', 'https://i.imgur.com/EbbgSHE.jpeg'),
	(8, 'Maluma', 'Reguetón', 'Colombia', 'Cantante y compositor.', 'https://example.com/maluma.jpg', 'https://i.imgur.com/JA97SbE.jpeg'),
	(9, 'Sech', 'Reguetón', 'Panamá', 'Cantante y compositor.', 'https://example.com/sech.jpg', 'https://i.imgur.com/SGdQ15m.jpeg'),
	(10, 'Jhay Cortez', 'Reguetón', 'Puerto Rico', 'Cantante y productor.', 'https://example.com/jhaycortez.jpg', 'https://i.imgur.com/wrMpLjB.jpeg'),
	(11, 'Luis Fonsi', 'Pop', 'Puerto Rico', 'Cantante conocido por el hit "Despacito".', 'https://example.com/luisfonsi.jpg', 'https://i.imgur.com/lWZI4uO.jpeg'),
	(12, 'Shakira', 'Pop', 'Colombia', 'Cantante y compositora.', 'https://example.com/shakira.jpg', 'https://i.imgur.com/qiqfjEg.jpeg'),
	(13, 'Rihanna', 'Pop', 'Barbados', 'Cantante y actriz.', 'https://example.com/rihanna.jpg', 'https://i.imgur.com/cbohAAl.jpeg'),
	(14, 'Ed Sheeran', 'Pop', 'Reino Unido', 'Cantante y compositor.', 'https://example.com/edsheeran.jpg', 'https://i.imgur.com/BNOoxyN.jpeg'),
	(15, 'Ariana Grande', 'Pop', 'EE.UU.', 'Cantante y actriz.', 'https://example.com/arianagrande.jpg', 'https://i.imgur.com/yTw4csj.jpeg'),
	(16, 'Billie Eilish', 'Pop', 'EE.UU.', 'Cantante y compositora.', 'https://example.com/billieeilish.jpg', 'https://i.imgur.com/02jCdwR.jpeg'),
	(17, 'Drake', 'Rap', 'Canadá', 'Rapper y cantante.', 'https://example.com/drake.jpg', 'https://i.imgur.com/A0AWifr.jpeg'),
	(18, 'Kendrick Lamar', 'Rap', 'EE.UU.', 'Rapper y compositor.', 'https://example.com/kendricklamar.jpg', 'https://i.imgur.com/4NfZ8dZ.jpeg'),
	(19, 'Post Malone', 'Rap', 'EE.UU.', 'Rapper y cantante.', 'https://example.com/postmalone.jpg', 'https://i.imgur.com/6vHBhYX.jpeg'),
	(20, 'Travis Scott', 'Rap', 'EE.UU.', 'Rapper y productor.', 'https://example.com/travisscott.jpg', 'https://i.imgur.com/EVrKz9X.jpeg'),
	(21, 'The Weeknd', 'R&B', 'Canadá', 'Cantante y compositor.', 'https://example.com/theweeknd.jpg', 'https://i.imgur.com/dgxeuhk.jpeg'),
	(22, 'Bruno Mars', 'R&B', 'EE.UU.', 'Cantante y productor.', 'https://example.com/brunomars.jpg', 'https://i.imgur.com/O6b1voe.jpeg'),
	(23, 'Beyoncé', 'R&B', 'EE.UU.', 'Cantante y actriz.', 'https://example.com/beyonce.jpg', 'https://i.imgur.com/xlMeZno.jpeg'),
	(24, 'John Legend', 'R&B', 'EE.UU.', 'Cantante y compositor.', 'https://example.com/johnlegend.jpg', 'https://i.imgur.com/TF4PMss.jpeg'),
	(25, 'Alicia Keys', 'R&B', 'EE.UU.', 'Cantante y compositora.', 'https://example.com/aliciakeys.jpg', 'https://i.imgur.com/7OczMK8.jpeg'),
	(26, 'Elvis Presley', 'Rock', 'EE.UU.', 'Cantante y actor.', 'https://example.com/elvispresley.jpg', 'https://i.imgur.com/8e4DtoP.jpeg'),
	(27, 'The Rolling Stones', 'Rock', 'Reino Unido', 'Banda de rock.', 'https://example.com/rollingstones.jpg', 'https://i.imgur.com/HO0GE0j.jpeg'),
	(28, 'Led Zeppelin', 'Rock', 'Reino Unido', 'Banda de rock.', 'https://example.com/ledzeppelin.jpg', 'https://i.imgur.com/7kLwrgg.jpeg'),
	(29, 'Queen', 'Rock', 'Reino Unido', 'Banda de rock.', 'https://example.com/queen.jpg', 'https://i.imgur.com/1OS0nBN.jpeg'),
	(30, 'Nirvana', 'Grunge', 'EE.UU.', 'Banda de grunge.', 'https://example.com/nirvana.jpg', 'https://i.imgur.com/Xis9o7E.jpeg'),
	(31, 'Pearl Jam', 'Grunge', 'EE.UU.', 'Banda de grunge.', 'https://example.com/pearljam.jpg', 'https://i.imgur.com/RB4vzyN.jpeg'),
	(32, 'Radiohead', 'Alternative', 'Reino Unido', 'Banda de rock alternativo.', 'https://example.com/radiohead.jpg', 'https://i.imgur.com/lYdmdth.jpeg'),
	(33, 'Red Hot Chili Peppers', 'Alternative', 'EE.UU.', 'Banda de rock alternativo.', 'https://example.com/rhcp.jpg', 'https://i.imgur.com/Q7LhPYL.jpeg'),
	(34, 'Daft Punk', 'Electrònica', 'Francia', 'Dúo de música electrónica.', 'https://example.com/daftpunk.jpg', 'https://i.imgur.com/UQOw5BO.jpeg'),
	(35, 'Calvin Harris', 'Electrònica', 'Escòcia', 'DJ y productor.', 'https://example.com/calvinharris.jpg', 'https://i.imgur.com/yzoqwe0.jpeg'),
	(36, 'Rosalía', 'Pop', 'España', 'Cantante y compositora conocida por su fusión de flamenco y pop.', 'https://example.com/rosalia.jpg', 'https://i.imgur.com/yCZUy4C.jpeg'),
	(37, 'Alejandro Sanz', 'Pop', 'España', 'Cantante y compositor reconocido a nivel internacional.', 'https://example.com/alejandrosanz.jpg', 'https://i.imgur.com/mx6vDs9.jpeg'),
	(38, 'Pablo Alborán', 'Pop', 'España', 'Cantante y compositor de baladas.', 'https://example.com/pabloalboran.jpg', 'https://i.imgur.com/prazFeN.jpeg'),
	(39, 'Aitana', 'Pop', 'España', 'Cantante de pop y ex-participante de Operación Triunfo.', 'https://example.com/aitana.jpg', 'https://i.imgur.com/tfcAsg4.jpeg'),
	(40, 'C. Tangana', 'Hip-Hop', 'España', 'Rapper y productor que mezcla géneros variados.', 'https://example.com/ctangana.jpg', 'https://i.imgur.com/GIxa6SW.jpeg'),
	(41, 'Melendi', 'Pop', 'España', 'Cantante de pop y rock.', 'https://example.com/melendi.jpg', 'https://i.imgur.com/fNRpJIk.jpeg'),
	(42, 'Dani Martín', 'Pop Rock', 'España', 'Cantante y ex-líder de la banda El Canto del Loco.', 'https://example.com/danimartin.jpg', 'https://i.imgur.com/pmRultX.jpeg'),
	(43, 'Lola Índigo', 'Pop', 'España', 'Cantante y bailarina, conocida por sus temas de pop urbano.', 'https://example.com/lolaindigo.jpg', 'https://i.imgur.com/lNM5rsb.jpeg'),
	(44, 'Estopa', 'Rock', 'España', 'Dúo de rock y rumba catalana.', 'https://example.com/estopa.jpg', 'https://i.imgur.com/nA2gpe5.jpeg'),
	(45, 'Niña Pastori', 'Flamenco', 'España', 'Cantante de flamenco-pop.', 'https://example.com/ninapastori.jpg', 'https://i.imgur.com/m6zFfF1.jpeg'),
	(46, 'Raphael', 'Pop', 'España', 'Cantante de baladas y pop clásico.', 'https://example.com/raphael.jpg', 'https://i.imgur.com/aZ14YyD.jpeg'),
	(47, 'Miguel Bosé', 'Pop', 'España', 'Cantante y actor con una larga trayectoria.', 'https://example.com/miguelbose.jpg', 'https://i.imgur.com/fMh7in8.jpeg'),
	(48, 'David Bisbal', 'Pop', 'España', 'Cantante conocido por su energía en el escenario.', 'https://example.com/davidbisbal.jpg', 'https://i.imgur.com/iXMu0ji.jpeg'),
	(49, 'Manuel Carrasco', 'Pop', 'España', 'Cantante y compositor de pop y baladas.', 'https://example.com/manuelcarrasco.jpg', 'https://i.imgur.com/1HeiWjj.jpeg'),
	(50, 'Kase.O', 'Hip-Hop', 'España', 'Rapper y uno de los pioneros del hip-hop español.', 'https://example.com/kaseo.jpg', 'https://i.imgur.com/xoyBVdG.jpeg'),
	(51, 'Omar Montes', 'Reguetón', 'España', 'Cantante de reguetón y música urbana.', 'https://example.com/omarmontes.jpg', 'https://i.imgur.com/6A1PmBu.jpeg'),
	(52, 'Beatriz Luengo', 'Pop', 'España', 'Cantante, actriz y compositora.', 'https://example.com/beatrizluengo.jpg', 'https://i.imgur.com/kgWDCif.jpeg'),
	(53, 'Bebe', 'Pop', 'España', 'Cantautora de pop y temas de protesta.', 'https://example.com/bebe.jpg', 'https://i.imgur.com/YLcMvvi.jpeg'),
	(54, 'Vetusta Morla', 'Rock', 'España', 'Banda de rock alternativo.', 'https://example.com/vetustamorla.jpg', 'https://i.imgur.com/xwMyf4J.jpeg'),
	(55, 'Amaral', 'Rock', 'España', 'Dúo de pop-rock con una amplia trayectoria.', 'https://example.com/amaral.jpg', 'https://i.imgur.com/07dAKmC.jpeg');

-- Volcando estructura para tabla lyricvault_db.cancons
CREATE TABLE IF NOT EXISTS `cancons` (
  `ID_Canco` int(11) NOT NULL,
  `ID_Album` int(11) DEFAULT NULL,
  `ID_Artista` int(11) DEFAULT NULL,
  `Titol_Canco` varchar(100) NOT NULL,
  `Durada` time DEFAULT NULL,
  `Genere_Canco` varchar(100) DEFAULT NULL,
  `Compositor` varchar(255) DEFAULT NULL,
  `Productor_Canco` varchar(100) DEFAULT NULL,
  `Data_Llançament_Canco` date DEFAULT NULL,
  PRIMARY KEY (`ID_Canco`),
  KEY `ID_Album` (`ID_Album`),
  KEY `ID_Artista` (`ID_Artista`),
  CONSTRAINT `cancons_ibfk_1` FOREIGN KEY (`ID_Album`) REFERENCES `albums` (`ID_Album`) ON DELETE CASCADE,
  CONSTRAINT `cancons_ibfk_2` FOREIGN KEY (`ID_Artista`) REFERENCES `artistes` (`ID_Artista`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla lyricvault_db.cancons: ~50 rows (aproximadamente)
DELETE FROM `cancons`;
INSERT INTO `cancons` (`ID_Canco`, `ID_Album`, `ID_Artista`, `Titol_Canco`, `Durada`, `Genere_Canco`, `Compositor`, `Productor_Canco`, `Data_Llançament_Canco`) VALUES
	(1, 1, 1, 'Tití Me Preguntó', '03:24:00', 'Reguetón', 'Bad Bunny', 'Bad Bunny', '2022-05-06'),
	(2, 1, 1, 'Moscow Mule', '02:54:00', 'Reguetón', 'Bad Bunny', 'Bad Bunny', '2022-05-06'),
	(3, 2, 2, 'Loco Contigo', '03:19:00', 'Reguetón', 'J Balvin, DJ Snake', 'DJ Snake', '2019-07-09'),
	(4, 2, 2, 'Ritmo', '03:11:00', 'Reguetón', 'J Balvin, Black Eyed Peas', 'Black Eyed Peas', '2020-09-11'),
	(5, 3, 3, 'Baila Baila Baila', '03:54:00', 'Reguetón', 'Ozuna', 'Ozuna', '2019-05-10'),
	(6, 3, 3, 'Vaina Loca', '03:21:00', 'Reguetón', 'Ozuna', 'Ozuna', '2019-11-15'),
	(7, 4, 4, 'Tusa', '03:20:00', 'Reguetón', 'Karol G, Nicki Minaj', 'Karol G', '2020-11-13'),
	(8, 4, 4, 'Bichota', '03:46:00', 'Reguetón', 'Karol G', 'Karol G', '2020-10-23'),
	(9, 5, 5, 'China', '03:05:00', 'Reguetón', 'Anuel AA, Daddy Yankee', 'Anuel AA', '2020-07-10'),
	(10, 5, 5, 'Sola', '02:50:00', 'Reguetón', 'Anuel AA', 'Anuel AA', '2020-05-29'),
	(11, 6, 6, 'Otra Noche en Miami', '03:21:00', 'Reguetón', 'Nicky Jam', 'Nicky Jam', '2021-01-08'),
	(12, 6, 6, 'El Perdón', '03:24:00', 'Reguetón', 'Nicky Jam', 'Nicky Jam', '2021-01-08'),
	(13, 7, 7, 'Dura', '03:25:00', 'Reguetón', 'Daddy Yankee', 'Daddy Yankee', '2018-01-17'),
	(14, 7, 7, 'Con Calma', '03:11:00', 'Reguetón', 'Daddy Yankee, Snow', 'Daddy Yankee', '2019-01-24'),
	(15, 8, 8, 'Hawái', '03:38:00', 'Reguetón', 'Maluma', 'Maluma', '2020-07-22'),
	(16, 8, 8, 'Felices los 4', '03:20:00', 'Reguetón', 'Maluma', 'Maluma', '2018-04-06'),
	(17, 9, 9, 'Relación', '03:25:00', 'Reguetón', 'Sech', 'Sech', '2020-08-21'),
	(18, 9, 9, 'Otro Trago', '03:16:00', 'Reguetón', 'Sech', 'Sech', '2020-05-15'),
	(19, 10, 10, 'Medallo', '03:03:00', 'Reguetón', 'Jhay Cortez', 'Jhay Cortez', '2021-07-09'),
	(20, 10, 10, 'No Me Conoce', '03:24:00', 'Reguetón', 'Jhay Cortez', 'Jhay Cortez', '2021-09-24'),
	(21, 11, 11, 'Despacito', '03:47:00', 'Pop', 'Luis Fonsi, Daddy Yankee', 'Luis Fonsi', '2017-01-13'),
	(22, 11, 11, 'Échame la Culpa', '03:04:00', 'Pop', 'Luis Fonsi, Demi Lovato', 'Luis Fonsi', '2017-11-17'),
	(23, 12, 12, 'Chantaje', '03:16:00', 'Pop', 'Shakira, Maluma', 'Shakira', '2016-10-28'),
	(24, 12, 12, 'Perro Fiel', '03:15:00', 'Pop', 'Shakira, Nicky Jam', 'Shakira', '2017-05-26'),
	(25, 13, 13, 'Work', '03:39:00', 'Pop', 'Rihanna, Drake', 'Rihanna', '2016-02-22'),
	(26, 13, 13, 'Needed Me', '03:10:00', 'Pop', 'Rihanna', 'Rihanna', '2016-04-28'),
	(27, 14, 14, 'Shape of You', '03:53:00', 'Pop', 'Ed Sheeran', 'Ed Sheeran', '2017-01-06'),
	(28, 14, 14, 'Castle on the Hill', '03:37:00', 'Pop', 'Ed Sheeran', 'Ed Sheeran', '2017-01-06'),
	(29, 15, 15, '7 Rings', '02:58:00', 'Pop', 'Ariana Grande', 'Ariana Grande', '2019-01-18'),
	(30, 15, 15, 'Break Up with Your Girlfriend, I’m Bored', '03:10:00', 'Pop', 'Ariana Grande', 'Ariana Grande', '2019-02-08'),
	(31, 16, 16, 'Bad Guy', '03:14:00', 'Pop', 'Billie Eilish', 'Billie Eilish', '2019-03-29'),
	(32, 16, 16, 'Everything I Wanted', '03:05:00', 'Pop', 'Billie Eilish', 'Billie Eilish', '2019-11-13'),
	(33, 17, 17, 'God’s Plan', '03:19:00', 'Rap', 'Drake', 'Drake', '2018-01-19'),
	(34, 17, 17, 'In My Feelings', '03:37:00', 'Rap', 'Drake', 'Drake', '2018-07-20'),
	(35, 18, 18, 'HUMBLE.', '02:57:00', 'Rap', 'Kendrick Lamar', 'Kendrick Lamar', '2017-03-30'),
	(36, 18, 18, 'DNA.', '03:05:00', 'Rap', 'Kendrick Lamar', 'Kendrick Lamar', '2017-04-14'),
	(37, 19, 19, 'Circles', '03:35:00', 'Rap', 'Post Malone', 'Post Malone', '2019-08-30'),
	(38, 19, 19, 'Sunflower', '02:58:00', 'Rap', 'Post Malone', 'Post Malone', '2019-10-04'),
	(39, 20, 20, 'Sicko Mode', '05:12:00', 'Rap', 'Travis Scott', 'Travis Scott', '2018-08-03'),
	(40, 20, 20, 'Butterfly Effect', '02:50:00', 'Rap', 'Travis Scott', 'Travis Scott', '2018-05-15'),
	(41, 21, 21, 'Blinding Lights', '03:20:00', 'R&B', 'The Weeknd', 'The Weeknd', '2020-03-20'),
	(42, 21, 21, 'Save Your Tears', '03:35:00', 'R&B', 'The Weeknd', 'The Weeknd', '2021-01-05'),
	(43, 22, 22, '24K Magic', '03:46:00', 'R&B', 'Bruno Mars', 'Bruno Mars', '2016-11-18'),
	(44, 22, 22, 'Versace on the Floor', '03:55:00', 'R&B', 'Bruno Mars', 'Bruno Mars', '2016-11-18'),
	(45, 23, 23, 'Formation', '03:26:00', 'R&B', 'Beyoncé', 'Beyoncé', '2016-02-06'),
	(46, 23, 23, 'Sorry', '03:45:00', 'R&B', 'Beyoncé', 'Beyoncé', '2016-04-23'),
	(47, 24, 24, 'Love Me Now', '03:31:00', 'R&B', 'John Legend', 'John Legend', '2016-12-02'),
	(48, 24, 24, 'Surefire', '03:45:00', 'R&B', 'John Legend', 'John Legend', '2016-12-02'),
	(49, 25, 25, 'In Common', '03:33:00', 'R&B', 'Alicia Keys', 'Alicia Keys', '2016-05-13'),
	(50, 25, 25, 'Blended Family', '03:31:00', 'R&B', 'Alicia Keys', 'Alicia Keys', '2016-11-04');

-- Volcando estructura para tabla lyricvault_db.gires_concerts
CREATE TABLE IF NOT EXISTS `gires_concerts` (
  `ID_Concert` int(11) NOT NULL,
  `ID_Artista` int(11) DEFAULT NULL,
  `Data_Concert` date DEFAULT NULL,
  `Ubicacio_Concert` varchar(255) DEFAULT NULL,
  `Ciutat` varchar(100) DEFAULT NULL,
  `Pais` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_Concert`),
  KEY `ID_Artista` (`ID_Artista`),
  CONSTRAINT `gires_concerts_ibfk_1` FOREIGN KEY (`ID_Artista`) REFERENCES `artistes` (`ID_Artista`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla lyricvault_db.gires_concerts: ~35 rows (aproximadamente)
DELETE FROM `gires_concerts`;
INSERT INTO `gires_concerts` (`ID_Concert`, `ID_Artista`, `Data_Concert`, `Ubicacio_Concert`, `Ciutat`, `Pais`) VALUES
	(1, 1, '2024-06-15', 'Estadi Olímpic', 'Barcelona', 'Espanya'),
	(2, 2, '2024-06-20', 'Santiago Bernabéu', 'Madrid', 'Espanya'),
	(3, 3, '2024-07-05', 'Palau Sant Jordi', 'Barcelona', 'Espanya'),
	(4, 4, '2024-07-15', 'WiZink Center', 'Madrid', 'Espanya'),
	(5, 5, '2024-08-01', 'Fòrum', 'Barcelona', 'Espanya'),
	(6, 6, '2024-08-10', 'Palacio de Deportes', 'Madrid', 'Espanya'),
	(7, 7, '2024-08-25', 'Gran Teatre del Liceu', 'Barcelona', 'Espanya'),
	(8, 8, '2024-09-05', 'Teatro Barceló', 'Madrid', 'Espanya'),
	(9, 9, '2024-09-20', 'Estadi Olímpic', 'Barcelona', 'Espanya'),
	(10, 10, '2024-10-01', 'Mad Cool Festival', 'Madrid', 'Espanya'),
	(11, 11, '2024-10-15', 'Palau Sant Jordi', 'Barcelona', 'Espanya'),
	(12, 12, '2024-10-25', 'WiZink Center', 'Madrid', 'Espanya'),
	(13, 13, '2024-11-05', 'Palacio de Deportes', 'Barcelona', 'Espanya'),
	(14, 14, '2024-11-15', 'Fòrum', 'Madrid', 'Espanya'),
	(15, 15, '2024-12-01', 'Teatro Barceló', 'Barcelona', 'Espanya'),
	(16, 16, '2024-12-10', 'Gran Teatre del Liceu', 'Madrid', 'Espanya'),
	(17, 17, '2024-12-20', 'Estadi Olímpic', 'Barcelona', 'Espanya'),
	(18, 18, '2025-01-10', 'Palacio de Deportes', 'Madrid', 'Espanya'),
	(19, 19, '2025-01-25', 'Mad Cool Festival', 'Barcelona', 'Espanya'),
	(20, 20, '2025-02-05', 'Teatro Barceló', 'Madrid', 'Espanya'),
	(21, 21, '2025-02-20', 'WiZink Center', 'Barcelona', 'Espanya'),
	(22, 22, '2025-03-01', 'Palau Sant Jordi', 'Madrid', 'Espanya'),
	(23, 23, '2025-03-15', 'Fòrum', 'Barcelona', 'Espanya'),
	(24, 24, '2025-04-01', 'Gran Teatre del Liceu', 'Madrid', 'Espanya'),
	(25, 25, '2025-04-15', 'Palacio de Deportes', 'Barcelona', 'Espanya'),
	(26, 26, '2025-05-01', 'Estadi Olímpic', 'Madrid', 'Espanya'),
	(27, 27, '2025-05-15', 'WiZink Center', 'Barcelona', 'Espanya'),
	(28, 28, '2025-06-01', 'Palau Sant Jordi', 'Madrid', 'Espanya'),
	(29, 29, '2025-06-15', 'Gran Teatre del Liceu', 'Barcelona', 'Espanya'),
	(30, 30, '2025-07-01', 'Fòrum', 'Madrid', 'Espanya'),
	(31, 31, '2025-07-15', 'Teatro Barceló', 'Barcelona', 'Espanya'),
	(32, 32, '2025-08-01', 'Mad Cool Festival', 'Madrid', 'Espanya'),
	(33, 33, '2025-08-15', 'Estadi Olímpic', 'Barcelona', 'Espanya'),
	(34, 34, '2025-09-01', 'Palacio de Deportes', 'Madrid', 'Espanya'),
	(35, 35, '2025-09-15', 'WiZink Center', 'Barcelona', 'Espanya');

-- Volcando estructura para tabla lyricvault_db.premis
CREATE TABLE IF NOT EXISTS `premis` (
  `ID_Premi` int(11) NOT NULL,
  `ID_Artista` int(11) DEFAULT NULL,
  `ID_Canco` int(11) DEFAULT NULL,
  `Nom_Premi` varchar(100) NOT NULL,
  `Any_Premi` year(4) NOT NULL,
  `Categoria` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_Premi`,`Any_Premi`),
  KEY `ID_Artista` (`ID_Artista`),
  KEY `ID_Canco` (`ID_Canco`),
  CONSTRAINT `premis_ibfk_1` FOREIGN KEY (`ID_Artista`) REFERENCES `artistes` (`ID_Artista`) ON DELETE CASCADE,
  CONSTRAINT `premis_ibfk_2` FOREIGN KEY (`ID_Canco`) REFERENCES `cancons` (`ID_Canco`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla lyricvault_db.premis: ~50 rows (aproximadamente)
DELETE FROM `premis`;
INSERT INTO `premis` (`ID_Premi`, `ID_Artista`, `ID_Canco`, `Nom_Premi`, `Any_Premi`, `Categoria`) VALUES
	(1, 1, 1, 'Premi Billboard', '2022', 'Millor Artista de Reguetón'),
	(2, 1, 2, 'Premi Billboard', '2022', 'Millor Àlbum de Reguetón'),
	(3, 2, 3, 'Premi Grammy', '2020', 'Millor Col·laboració de Reguetón'),
	(4, 2, 4, 'Premi Grammy', '2021', 'Millor Video Musical'),
	(5, 3, 5, 'Premi Billboard', '2020', 'Millor Artista de Reguetón'),
	(6, 3, 6, 'Premi Billboard', '2021', 'Millor Àlbum de Reguetón'),
	(7, 4, 7, 'Premi Latin Grammy', '2020', 'Millor Artista de Reguetón'),
	(8, 4, 8, 'Premi Latin Grammy', '2021', 'Millor Cançó de Reguetón'),
	(9, 5, 9, 'Premi Billboard', '2021', 'Millor Artista de Reguetón'),
	(10, 5, 10, 'Premi Latin Grammy', '2022', 'Millor Àlbum de Reguetón'),
	(11, 6, 11, 'Premi Latin Grammy', '2021', 'Millor Artista de Reguetón'),
	(12, 6, 12, 'Premi Billboard', '2022', 'Millor Cançó de Reguetón'),
	(13, 7, 13, 'Premi Latin Grammy', '2020', 'Millor Artista de Reguetón'),
	(14, 7, 14, 'Premi Billboard', '2021', 'Millor Cançó de Reguetón'),
	(15, 8, 15, 'Premi Latin Grammy', '2020', 'Millor Artista de Reguetón'),
	(16, 8, 16, 'Premi Billboard', '2021', 'Millor Àlbum de Reguetón'),
	(17, 9, 17, 'Premi Billboard', '2021', 'Millor Artista de Reguetón'),
	(18, 9, 18, 'Premi Latin Grammy', '2022', 'Millor Cançó de Reguetón'),
	(19, 10, 19, 'Premi Billboard', '2022', 'Millor Artista de Reguetón'),
	(20, 10, 20, 'Premi Latin Grammy', '2023', 'Millor Àlbum de Reguetón'),
	(21, 11, 21, 'Premi Grammy', '2018', 'Millor Artista de Pop'),
	(22, 11, 22, 'Premi Billboard', '2018', 'Millor Cançó de Pop'),
	(23, 12, 23, 'Premi Grammy', '2017', 'Millor Artista de Pop'),
	(24, 12, 24, 'Premi Billboard', '2017', 'Millor Àlbum de Pop'),
	(25, 13, 25, 'Premi Grammy', '2016', 'Millor Artista de Pop'),
	(26, 13, 26, 'Premi Billboard', '2016', 'Millor Cançó de Pop'),
	(27, 14, 27, 'Premi Grammy', '2018', 'Millor Artista de Pop'),
	(28, 14, 28, 'Premi Billboard', '2017', 'Millor Cançó de Pop'),
	(29, 15, 29, 'Premi Billboard', '2020', 'Millor Artista de Pop'),
	(30, 15, 30, 'Premi Grammy', '2019', 'Millor Àlbum de Pop'),
	(31, 16, 31, 'Premi Grammy', '2020', 'Millor Artista de Pop'),
	(32, 16, 32, 'Premi Billboard', '2020', 'Millor Cançó de Pop'),
	(33, 17, 33, 'Premi Grammy', '2018', 'Millor Artista de Rap'),
	(34, 17, 34, 'Premi Billboard', '2018', 'Millor Cançó de Rap'),
	(35, 18, 35, 'Premi Grammy', '2017', 'Millor Artista de Rap'),
	(36, 18, 36, 'Premi Billboard', '2017', 'Millor Àlbum de Rap'),
	(37, 19, 37, 'Premi Billboard', '2019', 'Millor Artista de Rap'),
	(38, 19, 38, 'Premi Grammy', '2020', 'Millor Cançó de Rap'),
	(39, 20, 39, 'Premi Billboard', '2018', 'Millor Artista de Rap'),
	(40, 20, 40, 'Premi Grammy', '2019', 'Millor Àlbum de Rap'),
	(41, 21, 41, 'Premi Grammy', '2020', 'Millor Artista de R&B'),
	(42, 21, 42, 'Premi Billboard', '2020', 'Millor Cançó de R&B'),
	(43, 22, 43, 'Premi Grammy', '2017', 'Millor Artista de R&B'),
	(44, 22, 44, 'Premi Billboard', '2017', 'Millor Àlbum de R&B'),
	(45, 23, 45, 'Premi Grammy', '2016', 'Millor Artista de R&B'),
	(46, 23, 46, 'Premi Billboard', '2016', 'Millor Cançó de R&B'),
	(47, 24, 47, 'Premi Grammy', '2016', 'Millor Artista de R&B'),
	(48, 24, 48, 'Premi Billboard', '2016', 'Millor Àlbum de R&B'),
	(49, 25, 49, 'Premi Grammy', '2016', 'Millor Artista de R&B'),
	(50, 25, 50, 'Premi Billboard', '2016', 'Millor Cançó de R&B');

-- Volcando estructura para tabla lyricvault_db.usuaris
CREATE TABLE IF NOT EXISTS `usuaris` (
  `DNI` varchar(20) NOT NULL,
  `Nom_Usuari` varchar(100) NOT NULL,
  `Cognom_Usuari` varchar(255) NOT NULL,
  `Correu_Electronic` varchar(255) NOT NULL,
  `Contrasenya` varchar(255) NOT NULL,
  `Data_Alta` date NOT NULL,
  `Rols` varchar(50) DEFAULT NULL,
  `Numero_Telefon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla lyricvault_db.usuaris: ~39 rows (aproximadamente)
DELETE FROM `usuaris`;
INSERT INTO `usuaris` (`DNI`, `Nom_Usuari`, `Cognom_Usuari`, `Correu_Electronic`, `Contrasenya`, `Data_Alta`, `Rols`, `Numero_Telefon`) VALUES
	('00112233D', 'Biel', 'Marti', 'bielmartillorens4@gmail.com', 'marti', '2025-06-15', 'admin', '642531590'),
	('00112233T', 'Alba', 'Ayala', 'albaayvi4@gmail.com', '12345', '2025-01-05', 'admin', '780210987'),
	('01234567J', 'Eric', 'SUpremSalvador', 'ramon.salvador@gmail.com', 'ramon707hash', '2024-08-05', 'usuari', '680210987'),
	('11223344E', 'Sergio', 'García', 'sergio.garcia@hotmail.com', 'sergio898hash', '2025-06-30', 'usuari', '890321098'),
	('11223344K', 'Marcelo', 'Gonzalez', 'marcelo.gonzalez@gmail.com', 'marcelo808hash', '2024-08-20', 'usuari', '690321098'),
	('11223344U', 'Pablo', 'Ruiz', 'pablo.ruiz@yahoo.com', 'pablo898hash', '2025-01-20', 'usuari', '790321098'),
	('12345678A', 'Joan', 'Garcia', 'joan.garcia@gmail.com', 'joan123hash', '2023-01-10', 'usuari', '600123456'),
	('21780623Z', 'Sailok', 'Kitham', 'albaav4@gmail.com', '$2y$10$PTEYPm/br3/HoWusVsFC9urPqNx/LFUZiCGoAo/guYGGlT8QnMMCi', '2024-10-15', NULL, '640636004'),
	('22334455F', 'Ana', 'Sánchez', 'ana.sanchez@gmail.com', 'ana909hash', '2025-07-10', 'admin', '900432109'),
	('22334455L', 'Sofia', 'Ruiz', 'sofia.ruiz@yahoo.com', 'sofia909hash', '2024-09-10', 'admin', '700432109'),
	('22334455V', 'Sara', 'Vázquez', 'sara.vazquez@hotmail.com', 'sara909hash', '2025-02-10', 'usuari', '800432109'),
	('23456789B', 'Maria', 'Lopez', 'maria.lopez@yahoo.com', 'maria456hash', '2022-11-05', 'admin', '670987654'),
	('33445566G', 'Juan', 'Pérez', 'juan.perez@yahoo.com', 'juan010hash', '2025-07-25', 'moderador', '910543210'),
	('33445566M', 'Javier', 'Moreno', 'javier.moreno@hotmail.com', 'javier010hash', '2024-09-25', 'moderador', '710543210'),
	('33445566W', 'Raúl', 'Martínez', 'raul.martinez@gmail.com', 'raul010hash', '2025-02-25', 'usuari', '810543210'),
	('34567890C', 'Laura', 'Martínez', 'laura.martinez@hotmail.com', 'laura789hash', '2024-05-22', 'usuari', '610543210'),
	('44556677H', 'María', 'Torres', 'maria.torres@hotmail.com', 'maria123HasH', '2025-08-15', 'usuari', '920654321'),
	('44556677N', 'Laura', 'Fernandez', 'laura.fernandez@gmail.com', 'Laura1234', '2024-10-10', 'usuari', '720654321'),
	('44556677X', 'Victoria', 'Molina', 'victoria.molina@yahoo.com', 'victoria121hash', '2025-03-10', 'admin', '820654321'),
	('45678901D', 'Marc', 'Alonso', 'marc.alonso@gmail.com', 'marc101hash', '2023-03-15', 'moderador', '620654321'),
	('55667788I', 'David', 'Gómez', 'david.gomez@gmail.com', 'david232hash', '2025-08-30', 'usuari', '930765432'),
	('55667788O', 'Fernando', 'Jiménez', 'fernando.jimenez@yahoo.com', 'fernando232hash', '2024-10-20', 'usuari', '730765432'),
	('55667788Y', 'Antonio', 'García', 'antonio.garcia@hotmail.com', 'antonio232hash', '2025-03-20', 'moderador', '830765432'),
	('56789012E', 'Anna', 'Rovira', 'anna.rovira@yahoo.com', 'anna202hash', '2023-04-25', 'usuari', '630765432'),
	('657865675W', 'pablo', 'si', 'pablosi@gmail.com', 'si', '0000-00-00', NULL, '767535987'),
	('66778899J', 'Elena', 'Ruiz', 'elena.ruiz@yahoo.com', 'elena343hash', '2025-09-15', 'admin', '940876543'),
	('66778899P', 'Elena', 'Sánchez', 'elena.sanchez@hotmail.com', 'elena343hash', '2024-11-05', 'admin', '740876543'),
	('66778899Z', 'Olga', 'Moreno', 'olga.moreno@gmail.com', 'olga343hash', '2025-04-05', 'usuari', '840876543'),
	('67890123F', 'Jordi', 'Serrano', 'jordi.serrano@hotmail.com', 'jordi303hash', '2023-06-30', 'usuari', '640876543'),
	('77889900A', 'Diego', 'Vázquez', 'diego.vazquez@yahoo.com', 'diego454hash', '2025-04-20', 'usuari', '850987654'),
	('77889900K', 'Luis', 'Vázquez', 'luis.vazquez@hotmail.com', 'luis454hash', '2025-09-30', 'moderador', '950987654'),
	('77889900Q', 'Carlos', 'García', 'carlos.garcia@gmail.com', 'carlos454hash', '2024-11-15', 'moderador', '750987654'),
	('78901234G', 'Cristina', 'Morales', 'cristina.morales@gmail.com', 'cristina404hash', '2024-01-18', 'usuari', '650987654'),
	('88990011B', 'Gabriela', 'López', 'gabriela.lopez@hotmail.com', 'gabriela565hash', '2025-05-10', 'admin', '860098765'),
	('88990011R', 'Isabel', 'Jiménez', 'isabel.jimenez@yahoo.com', 'isabel565hash', '2024-12-01', 'usuari', '760098765'),
	('89012345H', 'Pau', 'Martí', 'pau.marti@yahoo.com', 'pau505hash', '2024-03-10', 'admin', '660098765'),
	('90123456I', 'Silvia', 'Vilà', 'silvia.vila@hotmail.com', 'silvia606hash', '2024-07-20', 'moderador', '670109876'),
	('99001122C', 'Alberto', 'Fernández', 'alberto.fernandez@gmail.com', 'alberto676hash', '2025-05-25', 'moderador', '870109876'),
	('99001122S', 'Luis', 'Martínez', 'luis.martinez@hotmail.com', 'luis67', '2024-12-15', 'admin', '770109876');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
