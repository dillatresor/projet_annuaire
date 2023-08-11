



/*==============================================================*/
/* Table : apprenants                                           */
/*==============================================================*/
create table apprenants
(
   id_apprenants        int not null  comment '',
   id_tuteurs           int not null  comment '',
   nom                  varchar(254)  comment '',
   prenom               varchar(254)  comment '',
   adresse              varchar(254)  comment '',
   age                  int  comment '',
   telephone            int  comment '',
   email                varchar(254)  comment '',
   primary key (id_apprenants)
);

/*==============================================================*/
/* Table : tuteurs                                              */
/*==============================================================*/
create table tuteurs
(
   id_tuteurs           int not null  comment '',
   nom                  varchar(254)  comment '',
   prenom               varchar(254)  comment '',
   adresse              varchar(254)  comment '',
   telephone            int  comment '',
   email                varchar(254)  comment '',
   fonction             varchar(254)  comment '',
   sexe                 varchar(254)  comment '',
   primary key (id_tuteurs)
);

alter table apprenants add constraint FK_APPRENAN_ASSOCIATI_TUTEURS foreign key (id_tuteurs)
      references tuteurs (id_tuteurs) on delete restrict on update restrict;

