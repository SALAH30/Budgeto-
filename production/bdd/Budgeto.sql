/* Nom: Budgeto
   Auteur: Tetti 
   Desc: TP 2016*/

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
DROP DATABASE Budgeto;
CREATE DATABASE IF NOT EXISTS Budgeto DEFAULT CHARACTER SET utf8 ;
Use Budgeto;

CREATE TABLE Colloque(
	idCol integer AUTO_INCREMENT Primary key,
	
	nomCol varchar(60) Not NULL,
	dateColDebut date not null,
	dateColFin date not null,
	lieuCol varchar(100) not null,
	descCol varchar(200),
	nbParticipants integer,
	droitCol integer default 0)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;
	
CREATE TABLE Publicite(
	typePub varchar(100) PRIMARY key)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;
	
CREATE TABLE Publier(
	idCol integer,
	typePub varchar(60),
	coutPub integer default 0,
	PRIMARY key (idCol,typePub),
	FOREIGN key (idCol) references Colloque(idCol)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (typePub) references Publicite(typePub)
	ON UPDATE CASCADE
	ON DELETE CASCADE)
	ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;
    
CREATE TABLE Goodies(
	idGoo INTEGER ,
	nomGoo varchar(60) ,
	coutGoo integer default 0)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;
    
CREATE TABLE Distribuer(
	idCol integer,
	nomGoo varchar(60),
	coutGoo integer default 0,
	PRIMARY key (idCol,nomGoo),
	FOREIGN key (idCol) references Colloque(idCol)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (nomGoo) references Goodies(nomGoo)
	ON UPDATE CASCADE
	ON DELETE CASCADE
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Repas(
	nomRepas varchar(60) PRIMARY key,
	nombre integer,
	coutRepas integer default 0
);

CREATE TABLE Servir(
	idCol integer,
	nomRepas varchar(60),
	dateR date not null,
	menu varchar(500),
	concernes varchar(100),
	PRIMARY key (idCol,nomRepas,dateR),
	FOREIGN key (idCol) references Colloque(idCol)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (nomRepas) references Repas(nomRepas)
	ON UPDATE CASCADE
	ON DELETE CASCADE
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE CategoriePersonnel(
	nomCategorie varchar(60) PRIMARY key
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Travailler(
	idCol integer,
	nomCategorie varchar(60),
	nbrCategorie integer,
	remuneration integer default 0,
	PRIMARY key (idCol,nomCategorie),
	FOREIGN key (idCol) references Colloque(idCol)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (nomCategorie) references CategoriePersonnel(nomCategorie)
	ON UPDATE CASCADE
	ON DELETE CASCADE
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Distinction(
	nomDistinct varchar(60) PRIMARY key
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Distinguer(
	nomCategorie varchar(60),
	nomDistinct varchar(60),
	PRIMARY key (nomCategorie,nomDistinct),
	FOREIGN key (nomCategorie) references CategoriePersonnel(nomCategorie)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (nomDistinct) references Distinction(nomDistinct)
	ON UPDATE CASCADE
	ON DELETE CASCADE
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Salle(
	nomSalle varchar(60) PRIMARY key,
	adresse varchar(100),
	tarif integer default 0,
	capacite integer not null,
	typeSalle varchar(60),
	surface INTEGER NOT NULL
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;
	
CREATE TABLE Location(
	idCol integer,
	nomSalle varchar(60),
	dateS date,
	duree tinyint,
	PRIMARY key(idCol,nomSalle,dateS),

	FOREIGN key (idCol) references Colloque(idCol)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (nomSalle) references Salle(nomSalle)
	ON UPDATE CASCADE
	ON DELETE CASCADE
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Equipement(
	nomEquipement varchar(60) PRIMARY key
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Equiper(
	idCol integer,
	nomEquipement varchar(60),
	nbexemplaire int,
	coutUnite int default 0,
	PRIMARY key(idCol,nomEquipement),

	FOREIGN key (idCol) references Colloque(idCol)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (nomEquipement) references Equipement(nomEquipement)
	ON UPDATE CASCADE
	ON DELETE CASCADE
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Intervenant(
	idIntervenant int auto_increment PRIMARY key,
	nom varchar(60),
	prenome varchar(60),
	remuneration int default 0	
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Intervenir(
	idCol integer,
	idIntervenant int,
	nomSalle varchar(200),
	dateDebut date,
	dateFin date,
	PRIMARY key(idCol,nomSalle,dateDebut),

	FOREIGN key (idCol) references Colloque(idCol)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (idIntervenant) references Intervenant(idIntervenant)
	ON UPDATE CASCADE
	ON DELETE CASCADE
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Hebergement(
	idH int auto_increment PRIMARY key,
	nomH varchar(60),
	tarifH integer default 0,
	classe varchar(60),
	adresse varchar(100),
	formule varchar(60),
	duree INTEGER
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Heberger(
	idIntervenant int,
	idH int,
	dateDebut date,

	PRIMARY key(idIntervenant,idH,dateDebut),

	FOREIGN key (idIntervenant) references Intervenant(idIntervenant)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (idH) references Hebergement(idH)
	ON UPDATE CASCADE
	ON DELETE CASCADE
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Transport(
	idTransport int auto_increment PRIMARY key,
	classe VARCHAR(32),
	cout INTEGER,
	lieuDepart varchar(60),
	lieuArrivee varchar(60),
	typeTransport varchar(60),
	dateDepart date,
	dateArrivee date
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;

CREATE TABLE Voyager(
	idIntervenant int,
	idTransport int,
	PRIMARY key(idIntervenant,idTransport),
	FOREIGN key (idIntervenant) references Intervenant(idIntervenant)
	ON UPDATE CASCADE
	ON DELETE CASCADE,

	FOREIGN key (idTransport) references Transport(idTransport)
	ON UPDATe CASCADE
	ON DELETE CASCADE
	)
    ENGINE = InnoDB
	DEFAULT CHARACTER SET = utf8;