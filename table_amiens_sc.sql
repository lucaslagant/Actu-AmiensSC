DROP DATABASE IF EXISTS amiens_sc;
create database amiens_sc;

use amiens_sc;

--ensemble du calendrier 2022/2023 de l'equipe et les resultat des match--

create table `calendrier`(
    journee int primary key,
    stade varchar(50),
    lieu varchar(25),
    `date` varchar(50),
    equipe varchar(25),
    img varchar(60),
    score varchar(5) null,
    localisation varchar(15)
);

insert into `calendrier` (journee, stade, lieu, `date`, equipe, img, score, localisation) values
    (1, 'Stade Saint-Symphorien', 'Metz', '30 juillet 2022', 'FC Metz', 'Metz-min.png', '3-0', 'exterieur'),
    (2, 'Stade de la Licorne', 'Amiens', '06 août 2022', 'FC Annecy', 'Annecy-min.png', '1-0', 'domicile'),
    (3, 'Stade Auguste-Bonal', 'Sochaux', '13 août 2022', 'FC Sochaux', 'Sochaux-min.png', '0-1', 'exterieur'),
    (4, 'Stade de la Licorne', 'Amiens', '20 août 2022', 'SC Bastia', 'Bastia-min.png', '3-1', 'domicile'),
    (5, 'Stade Océane', 'Le Havre', '27 août 2022', 'Havre AC', 'Le_Havre-min.png', '1-1', 'exterieur'),
    (6, 'Stade de la Licorne', 'Amiens', '30 août 2022', 'Paris FC', 'Paris-min.png', '1-1', 'domicile'),
    (7, 'Stade de la Licorne', 'Amiens', '02 septembre 2022', 'Grenoble Foot 38', 'Grenoble-min.png', '1-0', 'domicile'),
    (8, 'Stade Michel-d Ornano', 'Caen', '10 septembre 2022', 'SM Caen', 'Caen-min.png', '3-1', 'exterieur'),
    (9, 'Stade de la Licorne', 'Amiens', '17 septembre 2022', 'Niort', 'Niort-min.png', '3-0', 'domicile'),
    (10, 'Stade Paul-Lignon', 'Rodez', '01 octobre 2022', 'Rodez AF', 'Rodez-min.png', '0-1', 'exterieur'),
    (11, 'Stade de la Licorne', 'Amiens', '08 octobre 2022', 'Dijon FCO', 'Dijon-min.png', '2-1', 'domicile'),
    (12, 'Stade des Costières', 'Nîmes', '15 octobre 2022', 'Nîmes', 'Nimes-min.png', '2-0', 'exterieur'),
    (13, 'Stade de la Licorne', 'Amiens', '22 octobre 2022', 'AS Saint-Etienne', 'Saint_Etienne-min.png', '0-1', 'domicile'),
    (14, 'Nouste Camp', 'Pau', '05 novembre 2022', 'Pau FC', 'Pau-min.png', '2-1', 'exterieur'),
    (15, 'Stade de la Licorne', 'Amiens', '12 novembre 2022', 'Quevilly-Rouen', 'QRM-min.png','0-2', 'domicile'),
    (16, 'Stade du Hainaut', 'Valenciennes', '26 décembre 2022', 'Valenciennes FC', 'Valenciennes-min.png', '1-1', 'exterieur'),
    (17, 'Stade Francis Le Basser', 'Laval', ' 30 décembre 2022', 'Laval', 'Laval-min.png', '0-3', 'exterieur'),
    (18, 'Stade de la Licorne', 'Amiens', '10 janvier 2023', 'EA Guingamp', 'Guingamp-min.png', '1-1', 'domicile'),
    (19, 'Matmut Atlantique', 'Bordeaux', '13 janvier 2023', 'Girondins de Bordeaux', 'Bordeaux-min.png', '1-1','exterieur'),
    (20, 'Stade de la Licorne', 'Amiens', '28 janvier 2023', 'Havre AC', 'Le_Havre-min.png', '', 'domicile'),
    (21, 'Stade René Gaillard', 'Niort', '31 Janvier 2023', 'Niort', 'Niort-min.png', '','exterieur'),
    (22, 'Stade de la licorne', 'Amiens', '03 février 2023', 'FC Metz', 'Metz-min.png', '', 'domicile'),
    (23, 'Stade Sébastien Charléty', 'Paris', '11 février 2023', 'Paris FC', 'Paris-min.png', '','exterieur'),
    (24, 'Parc des Sports', 'Annecy', '18 février 2023', 'FC Annecy', 'Annecy-min.png', '','exterieur'),
    (25, 'Stade de la licorne', 'Amiens', '25 Février 2023', 'Girondins de Bordeaux', 'Bordeaux-min.png', '', 'domicile'),
    (26, 'Stade de la licorne', 'Amiens', '04 mars 2023', 'Pau FC', 'Pau-min.png', '', 'domicile'),
    (27, 'Stade Geoffroy-Guichard', 'Saint-Etienne', '11 mars 2023', 'AS Saint-Etienne', 'Saint_Etienne-min.png', '','exterieur'),
    (28, 'Stade de la licorne', 'Amiens', '18 mars 2023', 'Rodez AF', 'Rodez-min.png', '', 'domicile'),
    (29, 'Stade des Alpes', 'Grenoble', '01 avril 2023', 'Grenoble Foot 38', 'Grenoble-min.png', '','exterieur'),
    (30, 'Stade de la licorne', 'Amiens', '08 avril 2023', 'Nîmes', 'Nimes-min.png', '', 'domicile'),
    (31, 'Stade de Roudourou', 'Guingamp', '15 avril 2023', 'EA Guinganp', 'Guingamp-min.png', '','exterieur'),
    (32, 'Stade de la licorne', 'Amiens', '22 avril 2023', 'Valenciennes FC', 'Valenciennes-min.png', '', 'domicile'),
    (33, 'Stade Armand-Cesari', 'Bastia', '29 avril 2023', 'FC Bastia', 'Bastia-min.png', '','exterieur'),
    (34, 'Stade de la licorne', 'Amiens', '06 mai 2023', 'FC Sochaux', 'Sochaux-min.png', '', 'domicile'),
    (35, 'Stade Gaston Gérard', 'Dijon', '13 mai 2023', 'Dijon FCO', 'Dijon-min.png', '','exterieur'),
    (36, 'Stade de la licorne', 'Amiens', '20 mai 2023', 'SM Cean', 'Caen-min.png', '', 'domicile'),
    (37, 'Stade Robert-Diochon', 'Rouen', '26 mai 2023', 'Quevilly-Rouen', 'QRM-min.png', '','exterieur'),
    (38, 'Stade de la licorne', 'Amiens', '02 juin 2023', 'Laval', 'Laval-min.png', '', 'domicile');



--le classement des club de ligue 2--

create table `classement`(
    num int,
    equipe varchar(30),
    img varchar(60),
    journee int ,
    point int,
    gagne int,
    `null` int,
    perdu int,
    diff int,
    FOREIGN KEY (journee) REFERENCES calendrier(journee)
);

insert into `classement`(num, equipe, img, journee, point, gagne, `null`, perdu, diff) values
    (1, 'Havre AC', 'Le_Havre-min.png', 19,42, 12, 6, 1, 22),
    (2, 'Girondins de Bordeaux', 'Bordeaux-min.png', 19, 33, 9, 6, 4, 11),
    (4, 'FC Sochaux', 'Sochaux-min.png', 18, 30, 9, 3, 6, 11),
    (6, 'Amiens SC', 'Logo_Amiens_SC_3-min.png',19, 29, 8, 5, 6, 2),
    (5, 'Grenoble Foot 38', 'Grenoble-min.png',19, 30, 8, 6, 5, 3),
    (3, 'FC Metz', 'Metz-min.png', 19, 31, 9, 4, 6, 9),
    (9, 'SM Cean', 'Caen-min.png', 18, 25, 6, 7, 5, 2),
    (10, 'Quevilly-Rouen', 'QRM-min.png', 19, 25, 6, 7, 6, -1),
    (11, 'Valenciennes FC', 'Valenciennes-min.png', 19, 25, 6, 7, 6, -1),
    (8, 'Paris FC', 'Paris-min.png', 19, 27, 7, 6, 6, -2),
    (7, 'SC Bastia', 'Bastia-min.png', 19, 28, 8, 4, 7, -3),
    (13, 'EA Guinganp', 'Guingamp-min.png', 19, 24, 6, 6, 7, -3),
    (15, 'Pau FC', 'Pau-min.png', 19, 22, 5, 7, 7, -6),
    (12, 'FC Annecy', 'Annecy-min.png', 19, 24, 6, 6, 7, 1),
    (14, 'Laval', 'Laval-min.png', 19, 23, 7, 2, 10, -6),
    (16, 'Dijon FCO', 'Dijon-min.png', 19, 21, 5, 6, 8, -1),
    (17, 'Rodez AF', 'Rodez-min.png', 19, 19, 4, 7, 8, -8),
    (19, 'Nîmes', 'Nimes-min.png', 19, 16, 4, 4, 11, -11),
    (18, 'Niort', 'Niort-min.png', 18, 17, 4, 5, 9, -13),
    (20, 'AS Saint-Etienne', 'Saint_Etienne-min.png',18, 15, 4, 6, 8, -6);


--table utilisateur--

create table `user`(
    nom varchar(25),
    prenom varchar(30),
    email varchar(60),
    mdp varchar(60)
);


CREATE TABLE joueurs (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nom VARCHAR(255) NOT NULL,
  prenom VARCHAR(255) NOT NULL,
  numero_maillot INT,
  date_anniversaire DATE,
  date_arrivee DATE,
  -- date_depart DATE,
  nationalite VARCHAR(255),
  poste VARCHAR(255),
  age INT,
  taille INT,
  matchs_joues INT,
--   matchs_remplacants INTEGER,
--   matchs_titulaires INTEGER,
  -- photo_joueur VARCHAR(255),
  temps_de_jeu INT,
  cartons_jaunes INT,
  cartons_rouges INT,
  buts_marques INT,
  passes_decisives INT,
  joueurs_type INT
);




INSERT INTO joueurs (id, nom, prenom, numero_maillot, date_anniversaire,
 date_arrivee, nationalite, poste, age, taille, matchs_joues,
 temps_de_jeu, cartons_jaunes, cartons_rouges, buts_marques, passes_decisives,  joueurs_type)
VALUES 

-- Type 1 - Attaquant
-- Type 2 - Défenseur
-- Type 3 - Milieu
-- Type 4 - Gardien

(1, 'FOFANA', 'Ibrahim', 43, '1994-09-13', '2022-01-01', "France", 'Attaquant', 28, 180, 30, 2700, 1, 0, 15, 10, 1),
(2, 'DIABATÉ', 'Diriky', 41, '2002-10-06', '2021-07-01', "Côte d'ivoire", 'Défenseur', 20, 194, 3, 2700, 0, 0, 0, 0, 2),
-- ///////////////////////// -- Gardien -- /////////////////////////////// --
(3, 'GURTNER', 'Régis', 1, '1986-12-08', '2015-07-01', 'France', 'Gardien', 36, 182, 17, 1530, 0, 0, 0, 0, 4),
(4, 'CHARRUAU', 'Paul', 16, '1993-07-12', '2022-07-01', 'France', 'Gardien', 29, 187, 2, 180, 0, 0, 0, 0, 4),
(5, 'RONGIER', 'Matthieu',30, '2002-04-10', '2022-07-01', 'France', 'Gardien', 20, 176, 7, 585, 0, 0, 0, 0, 4),
-- ///////////////////////// -- Défenseurs -- /////////////////////////////// --
(6, 'OPOKU', 'Nicholas', 4, '1997-08-11', '2021-07-01', 'Ghana', 'Défenseur central', 25, 190, 14, 1176, 4, 1, 0, 0, 2),
(7, 'BARRY', 'Abdourahmane', 23, '2000-02-21', '2022-07-01', 'France', 'Défenseur central', 22, 185, 11, 773, 1, 0, 0, 0, 2),
(8, 'FOFANA', 'Mamadou', 2, '1998-01-21', '2021-08-12', 'Sénégal', 'Défenseur central', 24, 186, 19, 1665, 6, 0, 2, 0, 2),
(9, 'MENDY', 'Formose', 5, '2000-01-02', '2021-07-01', 'Senegal', 'Défenseur central', 22, 191, 17, 1371, 2, 0, 1, 0, 2),
(10, 'GÉLIN', 'Jérémy', 24, '1997-04-24', '2022-07-07', 'France', 'Défenseur central droit', 25, 183, 17, 1363, 4, 0, 0, 0, 2),
(11, 'ASSOGBA', 'Youssouf', 15, '2001-08-21', '2022-07-31', 'France', 'Défenseur latéral droit', 22, 173, 6, 468, 1, 0, 0, 0, 2),
(12, 'DEGRUMELLLE', 'Matéo', 45, '2003-08-22', '2021-07-01', 'France', 'Défenseur latéral droit', 20, 173, 10, 900, 1, 0, 0, 0, 2),
(13, 'RING', 'Sebastian', 3, '1995-04-18', '2022-07-01', 'Suède', 'Défenseur latéral gauche', 27, 178, 15, 545, 1, 0, 0, 0, 2),
(14, 'XANTIPPE', 'Matthéo', 26, '2002-04-11', '2021-07-01', 'France', 'Défenseur latéral gauche', 20, 183, 19, 1109, 4, 0, 1, 1, 2),
(15, 'OUATTARA', 'Kassoum', 44, '2004-10-14', '2022-07-01', 'France', 'Défenseur latéral gauche', 18, 176, 5, 366, 1, 0, 0, 0, 2),
(16, 'SY', 'Harouna', 18, '1996-03-30', '2021-07-29', 'France', 'Défenseur latéral gauche', 26, 170, 0, 0, 0, 0, 0, 0, 2),
-- ///////////////////////// -- Mileux de terrain -- /////////////////////////////// --
(17, 'FOFANA', 'Mamadou', 6, '2000-09-17', '2021-07-01', 'France', 'Milieu centre', 22, 177, 17, 987, 3, 0, 3, 0, 3),
(18, 'GOMIS', 'Iron', 29, '1999-11-08', '2020-07-01', 'France', 'Milieu centre', 23, 182, 17, 1183, 2, 0, 0, 3, 3),
(19, 'LACHUER', 'Mathis', 20, '2000-08-31', '2021-02-01', 'France', 'Milieu', 22, 170, 11, 363, 2, 0, 0, 0, 3),
(20, 'GENE', 'Owen', 25, '2003-03-19', '2021-11-01', 'France', 'Milieu Offensif', 19, 185, 9, 275, 0, 0, 0, 3, 3),
(21, 'BARIKI', 'Mehdi', 11, '2000-03-20', '2022-07-01', 'France', 'Milieu Offensif droit', 23, 180, 1, 0, 0, 0, 1, 0, 3),
(22, 'BENET', 'Jessy', 21, '1995-06-24', '2021-09-07', 'France', 'Meneur de jeu', 27, 186, 17, 1091, 1, 0, 3, 1, 3),
(23, 'KAKUTA', 'Gaël', 96, '1991-06-21', '2022-10-05', 'France', 'Meneur de jeu', 31, 173, 9, 534, 1, 0, 5, 0, 3),
-- ///////////////////////// -- Attaquant -- /////////////////////////////// --
(24, 'CISSÉ', 'Papiss', 18, '1985-06-03', '2022-09-01', 'France', 'Attaquant pivot', 37, 180, 12, 699, 0, 0, 6, 1, 1),
(25, 'LEAUTEY', 'Antoine', 7, '1996-04-14', '2022-07-01', 'France', 'Ailier gauche', 26, 172, 17, 1401, 2, 0, 2, 2, 1),
(26, 'BANDÉ', 'Hassane', 11, '1998-10-30', '2022-08-25', 'Burkina Faso', 'Ailier gauche', 24, 178, 11, 213, 0, 0, 1, 0, 1),
(27, 'AROKODARE', 'Toluwalase', 9, '2000-11-23', '2021-07-01', 'Nigeria', 'Attaquant pivot', 22, 197, 19, 1363, 2, 0, 7, 0, 1),
(28, 'GOMEZ', 'Charbel', 31, '2001-01-27', '2021-07-01', 'Bénin', 'Attaquant', 21, 184, 0, 0, 0, 0, 0, 0, 1),
(29, 'CHIBOZO', 'Ange', 10, '2003-07-01', '2022-07-01', 'Bénin', 'Attaquant', 19, 176, 17, 459, 0, 0, 0, 3, 1),
(30, 'ILENIKHENA', 'George', 9, '2006-08-16', '2022-07-01', 'France', 'Attaquant', 16, 185, 1, 19, 0, 0, 0, 0, 1),
-- ///////////////////////// -- Transferts -- /////////////////////////// --
(31, 'BADJI','Aliou',  null, '1997-10-10', null, 'France', 'Attaquant - Avant-centre', 25, 189 , null, null , null, null, null, null, 1),
(32, 'DEGRUMELLE','Matéo', null, '2003-08-22', null, 'France', 'Défenseur - Arrière droit', 19, 176, null,  null, null, null, null, null, 2),
(33, 'DUPAYS','Henri', null, '2004-01-22', null, 'France', 'Milieu défensif', 18, null, null, null, null, null, null, null, 3),
(34, 'CISS','Amadou', null, '1999-04-10', null, 'Sénégal', 'Ailier gauche', 23, 1.86, null, null, null, null, null, null, 1),
(35, 'LAHNE','Jack', null, '2001-10-24', null, 'Suède', 'Attaquant - Avant-centre', 21, 174, null, null,  null, null, null, null, 1),
(36, 'BIANCHINI','Florian', null, '2001-06-25', null, 'France', 'Attaquant - Avant-centre', 21, 182, null, null, null, null, null, null, 1),
(37, 'TOKPA', 'Darell', null, '2001-06-02', null, 'France', 'Attaquant - Avant-centre', 21, 184, null, null,  null, null, null, null, 1),
(38, 'OUHATTI', 'Ayman', null, '2001-01-15', null, 'Maroc', 'Milieu défensif', 22, 180, null, null, null, null,  null, null, 3),
(39, 'LUSAMBA', 'Arnaud', null, '1997-01-04', null, 'France', 'Milieu centre', 26, 180, null, null, null, null,  null, null, 3),
(40, 'ZUNGU', 'Bongani', null, '1992-10-09', null, 'Afrique du Sud', 'Milieu centre', 30, 184, null, null, null, null, null, null, 3),
(41, 'THURAM', 'Yohann', null, '1988-10-31', null, 'Guadeloupe', 'Gardien', 34, 188, null, null, null, null, null, null, 4),
(42, 'AKOLO', 'Chadrac', null, '1995-04-01', null, 'RD Congo', 'Ailier droit', 27, 172, null, null, null, null, null, null, 1),
(43, 'PAVLOVIC', 'Mateo', null, '1990-06-09', null, 'Croatie', 'Défenseur central', 32, 198, null, null, null, null, null, null, 2),
(44, 'GNAHORÉ', 'Eddy', null, '1993-11-14', null, 'France', 'Milieu centre', 29, 188, null, null, null, null, null, null, 3),
(45, 'LOMOTEY', 'Emmanuel', null, '1997-12-19', null, 'Ghana', 'Milieu défensif', 25, 190, null, null, null, null, null, null, 3),
(46, 'MONZANGO', 'Nathan', null, '2001-04-18', null, 'France', 'Défenseur central', 21, 184, null, null, null, null, null, null, 2),
(48, 'TRAORÉ', 'Gaoussou',  null, '1999-12-04', null, 'France', 'Milieu défensif', 23, 178, null, null, null, null, null, null, 3),
(49, 'DIAKHABY', 'Adama', null, '1996-07-05', null, 'France', 'Ailier gauche', 26, 184, null, null, null, null, null, null, 1),
(50, 'DOSSEVI', 'Mathieu', null, '1988-02-12', null, 'France', 'Ailier droit', 34, 174, null, null, null, null, null,null, 1),
(51, 'SANGARÉ', 'Mustapha',null, '1998-12-24', null, 'France', 'Avant-centre', 24, 195, null, null, null, null, null, null, 1),
(52, 'BAMBA', 'Abdoul Kader', null, '1994-05-25', null, 'France', 'Ailier droit', 28, 177, null, null, null, null, null, null, 1),
(53, 'KHALID', 'Driss', null, '1999-02-07', null, 'France', 'Milieu offensif', 23, 180, null, null, null, null, null, null, 3),
(54, 'BLIN', 'Alexis', null, '1996-09-16', null, 'France', 'Milieu défensif', 26, 184, null, null, null, null, null, null, 3),
(55, 'GENDREY', 'Valentin', null, '2000-06-21', null, 'France', 'Arrière droit', 22, 179, null, null, null, null, null, null, 2),
(56, 'TIMITE', 'Cheick', null, '1997-10-20', null, "Côte d'Ivoire", 'Ailier droit', 25, 180, null, null, null, null, null, null, 1),
(57, 'COUDRET', 'Grégoire', null, '1999-04-03', null, 'France', 'Gardien de but', 23, 188, null, null, null, null, null, null, 4),
(58, 'ALPHONSE', 'Mickaël', null, '1989-07-12', null, 'France', 'Arrière droit', 33, 182, null, null, null, null, null, null, 2),
(59, 'PAPEAU', 'Jayson', null, '1996-06-30', null, 'France', 'Ailier gauche', 26, 179, null, null, null, null, null, null, 1),
(60, 'YATABARÉ', 'Sambou', null, '1989-03-02', null, 'France', 'Milieu centre', 33, 190, null, null, null, null, null, null, 3),
(61, 'GOUANO', 'Prince', null, '1993-12-24', null, 'France', 'Défenseur central', 29, 186, null, null, null, null, null, null, 2),
(62, 'ODEY', 'Stephen', null, '1998-01-15', null, 'Nigeria', 'Avant-centre', 25, 182, null, null, null, null, null, null, 1),
(63, 'COLY', 'Racine', null, '1995-12-08', null, 'Sénégal', 'Arrière gauche', 27, 185, null, null, null, null, null, null, 2),
(64, 'WAGUÉ', 'Molla', null, '1991-02-21', null, 'France', 'Défenseur central', 31, 191, null, null, null, null, null, null, 2);

CREATE TABLE staff (
  id INT PRIMARY KEY,
  nom VARCHAR(255) NOT NULL,
  prenom VARCHAR(255) NOT NULL,
  fonction VARCHAR(255) NOT NULL,
  date_arrivee DATE,
  -- date_depart DATE,
  nationalite VARCHAR(255),
  age INT,
  staff_type INT
);

INSERT INTO staff (id, nom, prenom, fonction, date_arrivee, nationalite, age, staff_type)
VALUES

-- Type 1 -- Président/Directeur
-- Type 2 -- Entraineur
-- Type 3 -- Médecin/Santé
-- Type 4 -- Autres
(1, 'HINSCHBERGER', 'Philippe', 'Entraîneur', '2021-06-17', 'France', 63, 2),
(2, 'JOANNIN', 'Bernard', 'Président', '2011-07-01', 'France', 73, 1),
(3, 'DE PERCIN', 'Francis', 'Entraîneur adjoint', '2021-06-17', 'France', 53, 2),
(4, 'DESCAMPS', 'Patrice', 'Directeur de la formation', '2019-01-01', 'France', 48, 1),
(5, 'POITRINAL', 'Xavier', 'Entraîneur des gardiens', '2021-07-18', 'France', 52, 2),
(6, 'KOMBOUARÉ', 'Yann', 'Secrétaire', '2014-01-10', 'France', 38, 4),
(7, 'WILLIAMS', 'John', 'Directeur sportif', '2015-01-01', 'Angleterre', 54, 1),
(8, 'KWINTA', 'Thomas', 'Entraîneur des jeunes', '2018-08-01', 'France', 27, 2),
(9, 'CARPENTIER', 'Christophe', 'Médecin', null, 'France', null, 3),
(10, 'DIABY', 'Bakasso', 'Kinésithérapeutes', null, 'France', null, 3),
(11, 'LEMAIRE', 'Antoine', 'Kinésithérapeutes', null, 'France', null, 3),
(12, 'METAIS', 'Hugo', 'Podologue', null, 'France', null, 3),
(13, 'GALAND', 'Martin', 'Ostéopathes', null, 'France', null, 3);


CREATE TABLE transferts_2022_2023 (
  id INT PRIMARY KEY,
  -- prenom_joueur VARCHAR(255) NOT NULL,
  -- nom_joueur VARCHAR(255) NOT NULL,
  valeur_joueur VARCHAR(255) NOT NULL,
  club_depart VARCHAR(255) NOT NULL,
  club_arrivee VARCHAR(255) NOT NULL,
  montant VARCHAR(255),
  joueurs_id INT,
  `date` VARCHAR(255),
  FOREIGN key joueurs_id REFERENCES joueurs(id),
);

INSERT INTO transferts_2022_2023 (id, valeur_joueur, club_depart, club_arrivee, montant, `date`, joueurs_id)
VALUES 
-- ///////////////////////////////// Arrivées 22/23 /////////////////////////// --
(1, '1,80 M€', 'El ahly', 'Amiens SC', '1,8M€', null, 31),
(2, '4,50 M€', 'RC Lens', 'Amiens SC', 'Transfert libre', null, 23),
(3, '2,50 M€', 'Rennes', 'Amiens SC', 'Transfert libre', null, 10),
(4,  '1,00 M€', 'Gil Vicente', 'Amiens SC', 'Transfert libre', null, 25),
(5,  '300 K€', 'Greuther Fürth', 'Amiens SC', 'Transfert libre', null, 7),
(6,  '250 K€', 'C.Rizespor', 'Amiens SC', 'Transfert libre', null, 24),
(7,  '250 K€', 'Wisla Cracovie', 'Amiens SC', 'Transfert libre', null, 13),
(8,  '200 K€', 'Red Star FC', 'Amiens SC', 'Transfert libre', null, 4),
(9,  '1,00 M€', 'Ajax U21', 'Amiens SC', '?', null, 26),
(10, '800 K€', 'Juventus U19', 'Amiens SC', 'Prêt', null, 29),
(11, '50K€', 'Amiens SC B', 'Amiens SC', '', null, 5),
(12, '-', 'Amiens SC B', 'Amiens SC', '', null, 2),
(13, '-', 'Amiens SC U19', 'Amiens SC', '', null, 32),
(14, '-', 'Amiens SC B', 'Amiens SC', '', null, 1),
(15, '-', 'Amiens SC U19', 'Amiens SC', '', null, 33),
(16, '-', 'Amiens SC B', 'Amiens SC', '', null, 15),
(17, '900 K€', 'USL Dunkerque', 'Amiens SC', 'Fin du prêt', '30 juin 2022', 18),
(18, '700 K€', 'Adanaspor', 'Amiens SC', 'Fin du prêt', '30 juin 2022', 34),
(19, '650 K€', 'Botev Plovdiv', 'Amiens SC', 'Fin du prêt', '30 juin 2022', 35),
(20, '500 K€', 'US Avranches', 'Amiens SC', 'Fin du prêt', '30 juin 2022', 36),
(21, '300 K€', 'J-Södra IF', 'Amiens SC', 'Fin du prêt', '30 juin 2022', 11),
(22, '150 K€', 'Red Star FC', 'Amiens SC', 'Fin du prêt', '30 juin 2022', 37),
(23, '25 K€', 'US Orléans', 'Amiens SC', 'Fin du prêt', '30 juin 2022', 38),

--//////////////////////////////// Départs 22/23 //////////////////////// --
(24, '1,80 M€', 'Amiens SC', 'Alanyaspor', 'Transfert libre', '', 39),
(25, '900 K€', 'Amiens SC', 'Sundowns', 'Transfert libre', '', 40),
(26, '300 K€', 'Amiens SC', 'Quevilly Rouen', 'Transfert libre', '', 41),
(27, '1,00 M€', 'Amiens SC', 'FC St.Gallen', '?', null, 42),
(28, '900 K€', 'Amiens SC', 'HNK Rijeka', '?', null, 43),
(29, '900 K€', 'Amiens SC', 'Ascoli', '?', null, 44),
(30, '700 K€', 'Amiens SC', 'Malmö FF', '?', null, 45),
(31, '400 K€', 'Amiens SC', 'Pau FC', '?', null, 46),
(32, '25 K€', 'Amiens SC', 'Titus Pétange', '?', null, 38),
(33, '1,80 M€', 'Amiens SC', 'G. Bordeaux', 'Prêt', null, 31),
(34, '700 K€', 'Amiens SC', 'AEL Limassol', 'Prêt', null, 34),
(35, '650 K€', 'Amiens SC', 'Újpest FC', 'Prêt', null, 35),
(36, '500 K€', 'Amiens SC', 'LB Châteauroux', 'Prêt', null, 36),
(37, '300 K€', 'Amiens SC', 'Concarneau', 'Prêt', null, 48),
(38, '200 K€', 'Amiens SC', 'Borgo', 'Prêt', null, 51),
(39, '150 K€', 'Amiens SC', 'Stade Briochin', 'Prêt', null, 37),
(40, '-', 'Amiens SC', 'US Boulogne', 'Prêt', null, 33),
(41, '1,00 M€', 'Amiens SC', 'Sans Club', '', null, 49),
(42, '250 K€', 'Amiens SC', 'Sans Club', '', null, 50),
(43, '1,80 M€', 'Amiens SC', 'El Ahly', 'Fin du prêt', '30 juin 2022', 31),
(44, '1,30 M€', 'Amiens SC', 'FC Nantes', 'Fin du prêt', '30 juin 2022', 52),

--//////////////////////////////// Départs 21/22 //////////////////////// --
(45, '8,00 M€', 'Amiens SC', 'RC Lens', '5,00 M€', '1 juil. 2021', 23),
(46, '2,50 M€', 'Amiens SC', 'Lecce', '600 K€', '1 juil. 2021', 54),
(47, '500 K€', 'Amiens SC', 'Lecce', '300 K€', '29 juil. 2021', 55),
(48, '1,00 M€', 'Amiens SC', 'CF Fuenlabrada', 'Transfert libre', '31 août 2021', 56),
(49, '200 K€', 'Amiens SC', 'Stade Brestois', 'Transfert libre', '5 juil. 2021', 57),
(50, '200 K€', 'Amiens SC', 'Moulins-Yzeure', 'Transfert libre', '26 juil. 2021', 53),
(51, '650 K€', 'Amiens SC', 'Maccabi Haifa', '?', '3 février 2022', 58),
(52, '600 K€', 'Amiens SC', 'Warta Poznań', '?', '31 août 2021', 59),
(53, '350 K€', 'Amiens SC', 'Valenciennes FC', '?', '29 juil. 2021', 60),
(54, '1,00 M€', 'Amiens SC', 'USL Dunkerque', 'Prêt', '31 janvier 2022', 18),
(55, '800 K€', 'Amiens SC', 'Adanaspor', 'Prêt', '8 Février 2022', 34),
(56, '800 K€', 'Amiens SC', 'C. Rizespor', 'Prêt', '8 sept. 2021', 46),
(57, '700 K€', 'Amiens SC', 'Botev Plovdiv', 'Prêt', '25 févr. 2022', 35),
(58, '500 K€', 'Amiens SC', 'US Avranches', 'Prêt', '1 juil. 2021', 36),
(59, '350 K€', 'Amiens SC', 'US Boulogne', 'Prêt', '11 sept. 2021', 37),
(60, '300 K€', 'Amiens SC', 'Red Star FC', 'Prêt', '13 juil. 2021', 52),
(61, '300 K€', 'Amiens SC', 'Red Star FC', 'Prêt', '30 mars 2022', 11),
(62, '-', 'Amiens SC', 'US Orléans', 'Prêt', '13 juil. 2022', 38),
(63, '1,00 M€', 'Amiens SC', 'Sans club', 'Fin du prêt', null, 61),
(64, '1,60 M€', 'Amiens SC', 'KRC Genk', 'Fin du prêt', '30 juin 2021', 62),
(65, '1,30 M€', 'Amiens SC', 'OGC Nice', 'Fin du prêt', '30 juin 2021', 63),
(66, '1,00 M€', 'Amiens SC', 'Udinese', 'Fin du prêt', '30 juin 2021', 6),
(67, '800 K€', 'Amiens SC', 'FC Nantes', 'Fin du prêt', '30 juin 2021', 64),
(68, '800 K€', 'Amiens SC', 'LOSC Lille B', 'Fin du prêt', '30 juin 2021', 15),

-- ///////////////////////////////// Arrivées 23/24 /////////////////////////// --
(69, '1,50 M€', 'G. Bordeaux', 'Amiens SC', 'Fin du prêt', '30 juin 2023', 31),
(70, '600 K€', 'AEL Limassol', 'Amiens SC', 'Fin du prêt', '30 juin 2023', 34),
(71, '450 K€', 'Concarneau', 'Amiens SC', 'Fin du prêt', '30 juin 2023', 48),
(72, '400 K€', 'LB Châteauroux', 'Amiens SC', 'Fin du prêt', '30 juin 2023', 36),
(73, '350 K€', 'Újpest FC', 'Amiens SC', 'Fin du prêt', '30 juin 2023', 35),
(74, '200 K€', 'Borgo', 'Amiens SC', 'Fin du prêt', '30 juin 2023', 51),
(75, '200 K€', 'Stade Briochin', 'Amiens SC', 'Fin du prêt', '30 juin 2023', 37),
(76, '-', 'US Boulogne', 'Amiens SC', 'Fin du prêt', '30 juin 2023', 33);



-- (1, '', '', 'Amiens SC', '', '', '')
-- (1, '', '', 'Amiens SC', '', '', '')
