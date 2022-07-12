DROP DATABASE IF EXISTS tranotsika;
CREATE DATABASE tranotsika;
CREATE ROLE tranotsika LOGIN PASSWORD 'tranotsika';
ALTER DATABASE tranotsika OWNER to tranotsika; 
\c tranotsika

CREATE TABLE Tag (
    id_tag serial,
    nom_tag varchar(50) not null,
    PRIMARY KEY (id_tag)
);

CREATE TABLE Client (
    id_client serial,
    first_name varchar(50),
    last_name varchar(50),
    email varchar(60) unique not null,
    photo_profile varchar(50),
	password varchar(60) not null,
	date_naissance date,
	phone_number varchar(15) not null,
    PRIMARY KEY (id_client)
);

CREATE TABLE Tag_client (
    id_tag_client serial,
    id_client int not null references Client (id_client),
    id_tag int not null references Tag (id_tag),
    PRIMARY KEY (id_tag_client)
);

CREATE TABLE Abonnement (
    id_abonnement serial,
    id_client int not null references Client (id_client),
	date_abonnement timestamp not null default now(),
    PRIMARY KEY (id_abonnement)
);

CREATE TABLE Parametre (
    id_parametre serial,
    designation varchar(50) not null,
	valeur text,
    PRIMARY KEY (id_parametre)
);

CREATE TABLE Localisation (
    id_localisation serial,
    nom_lieu varchar(75),
    PRIMARY KEY (id_localisation)
);

CREATE TABLE Publication (
    id_publication serial,
    id_client int not null references Client (id_client),
    id_localisation int not null references Localisation (id_localisation),
	titre varchar(100),
	description text,
	prix int not null,
	lieu varchar(50),
	date_publication timestamp default now(),
    longitude float,
    latitude float,
    surface float,
    nombre_piece int,
    PRIMARY KEY (id_publication)
);

CREATE TABLE Message (
    id_message serial,
    id_publication int not null references Publication (id_publication),
    id_client_sender int not null references Client (id_client),
    id_client_receiver int not null references Client (id_client),
	date_envoye timestamp default now(),
	message_texte text,
    vu boolean default false,
    PRIMARY KEY (id_message)
);

CREATE TABLE Photo (
    id_photo serial,
    lien_photo varchar(50) not null,
	id_publication int not null references Publication (id_publication),
    PRIMARY KEY (id_photo)
);

CREATE TABLE Utilite (
    id_utilite serial,
    nom_utilite varchar(50) not null,
    PRIMARY KEY (id_utilite)
);

CREATE TABLE Detail_utilite (
    id_detail_utilite serial,
	id_utilite int not null references Utilite (id_utilite),
	id_publication int not null references Publication (id_publication),
    PRIMARY KEY (id_detail_utilite)
);

CREATE TABLE Detail_tags (
    id_detail_tag serial,
    id_publication int not null references Publication (id_publication),
	id_tag int not null references Tag (id_tag),
    PRIMARY KEY (id_detail_tag)
);

CREATE TABLE Commentaire (
    id_commentaire serial,
    id_publication int not null references Publication (id_publication),
    id_client int not null references Client (id_client),
	date_commentaire timestamp default now(),
	texte_commentaire text,
    vu boolean default false,
    PRIMARY KEY (id_commentaire)
);

CREATE TABLE Boost (
    id_boost serial,
    id_publication int not null references Publication (id_publication),
	date_debut timestamp default now(),
    date_fin timestamp,
    PRIMARY KEY (id_boost)
);

CREATE TABLE Reaction_item (
    id_reaction_item serial,
    nom_point varchar(50) not null,
    PRIMARY KEY (id_reaction_item)
);

CREATE TABLE Reaction (
    id_reaction serial,
    id_publication int not null references Publication (id_publication),
    id_client int not null references Client (id_client),
    id_reaction_item int not null references Reaction_item (id_reaction_item),
    PRIMARY KEY (id_reaction)
);

CREATE TABLE Classement_point (
    id_classement_point serial,
    intitule_point varchar(50) not null,
	valeur_point int not null,
    PRIMARY KEY (id_classement_point)
);

CREATE TABLE Question (
    id_question serial,
    intitule text not null,
    multi_res boolean,
    PRIMARY KEY (id_question)
);

CREATE TABLE Reponse (
    id_reponse serial,
    id_question int not null references Question (id_question),
    intitule text not null,
    id_tag int references Tag (id_tag),
    PRIMARY KEY (id_reponse)
);

CREATE TABLE Reponse_client (
    id_reponse_client serial,
    id_client int not null references Client (id_client),
    id_question int not null references Question (id_question),
    PRIMARY KEY (id_reponse_client)
);

CREATE TABLE Publicite (
    id_publicite serial,
    lien varchar(250) not null,
    image varchar(100) not null,
    PRIMARY KEY (id_publicite)
);

alter table publication
drop lieu;

ALTER TABLE Tag_client
ADD CONSTRAINT client_tag UNIQUE (id_client,id_tag);

ALTER TABLE Detail_tags
ADD CONSTRAINT publication_tag UNIQUE (id_publication,id_tag);

ALTER TABLE Detail_utilite
ADD CONSTRAINT publication_utilite UNIQUE (id_utilite,id_publication);

ALTER TABLE Reaction
ADD CONSTRAINT publication_client UNIQUE (id_publication,id_client);