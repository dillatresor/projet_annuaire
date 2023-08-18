
drop table if exists Apprenant;

drop table if exists Tuteur;


create table tuteur
(
   id_tuteur            int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   date_de_naissance    datetime,
   ville                varchar(254),
   contact              int,
   primary key (id_tuteur),
   
);

INSERT INTO tuteur (nom, prenom, date_de_naissance, ville, contact)
VALUES ('AGBANOU','Vital','2003-07-12','Nantes',0022996547895),
       ('BABOLO','Aristide','1960-05-09','Bouar',0023766253805),
       ('SANOU','Prisca','2000-06-11','Kaya',00022679023456),
       ('OUEDRAGO','Jean','1995-02-05','Bobo',0022678336021),
       ('SAMDOGO','Ilifou','1987-01-10','Dori',0022660251245),
       ('KEREGOULE','Martina','2005-06-12','ouaga',0022675201605)
       

create table apprenant
(
   id_apprenant         int not null primary key AUTO_INCREMENT,
   id_tuteur            int not null,
   nom                  varchar(254),
   prenom               varchar(254),
   date_de_naissance    datetime,
   ville                varchar(254),
   contact              int,
   foreign key(id_tuteur) references tuteur(id_tuteur)
 
);

