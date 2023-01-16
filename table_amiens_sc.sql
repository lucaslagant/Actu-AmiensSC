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
