CREATE DATABASE IF NOT EXISTS `stages_projet` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `stages_projet`;


CREATE TABLE `stage` (
	`id_stage` int(20) unsigned NOT NULL AUTO_INCREMENT,
	`entreprise` int(20) unsigned NOT NULL,
	`date_debut_stage` DATE NOT NULL,
	`date_fin_stage` DATE NOT NULL,
	`adresse` varchar(70) NOT NULL,
	`mission` TEXT NOT NULL,
	`code_postal` numeric(5,0),
	`ville` varchar(30) NOT NULL,
	`pays` varchar(30) NOT NULL,
	`validation` BOOLEAN NOT NULL DEFAULT '0',
	`auteur` int(20) unsigned NOT NULL,
	`postuler` int(20) unsigned,
	`sauvegarder_offre` int(20) unsigned,
	PRIMARY KEY (`id_stage`)
	
)ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;


CREATE TABLE `entreprise` (
	`id_entreprise` int(20) unsigned NOT NULL AUTO_INCREMENT,
	`nom_entreprise` varchar(25) NOT NULL,
	`effectif` integer NOT NULL,
	`tel` numeric(10,0) NOT NULL,
	`mail` varchar(150) NOT NULL,
	`adresse` varchar(100) NOT NULL,
	`complement` varchar(150) NOT NULL,
	`code_postal` numeric(5,0),
	`activite` varchar(100) NOT NULL,
	`ville` varchar(20) NOT NULL,
	`pays` varchar(20) NOT NULL,
	`tuteur` int(20) unsigned NOT NULL,
	PRIMARY KEY (`id_entreprise`)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;



CREATE TABLE `Personne` (
	`id_personne` int(20) unsigned NOT NULL AUTO_INCREMENT,
	`statut` varchar(40) NOT NULL,
	`fonction_pro` varchar(25) ,
	`civilite` varchar(30) NOT NULL,
	`prenom` varchar(30) NOT NULL,
	`nom` varchar(30) NOT NULL,
	`mail` varchar(50) NOT NULL,
	`adresse` varchar(150) NOT NULL,
	`complement` varchar(150) NOT NULL,
	`code_postal` varchar(5) NOT NULL,
	`ville` varchar(25) NOT NULL,
	`pays` varchar(25) NOT NULL,
	`tel` varchar(10) NOT NULL,
	`date_naiss` DATE NOT NULL,
	`num_secu` varchar(15) NOT NULL,
	`mutuelle` varchar(30) NOT NULL,
	`objectif_pro` TEXT,
	`motdepasse` varchar(50) NOT NULL,
	PRIMARY KEY (`id_personne`)
	 
)ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE `contenus` (
	`id_auteur` int(20) unsigned NOT NULL,
	`suivi_stage` TEXT NOT NULL,
	`doc_fin_stage` TEXT NOT NULL,
	`rapport_stage` TEXT NOT NULL,
	`soutenance` TEXT NOT NULL,
	`procedure_candidature` TEXT NOT NULL,
	PRIMARY KEY (`id_auteur`)
)ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;




ALTER TABLE `stage` ADD CONSTRAINT `Stage_fk0` FOREIGN KEY (`auteur`) REFERENCES `Personne`(`id_personne`);
ALTER TABLE `stage` ADD CONSTRAINT `Stage_fk1` FOREIGN KEY (`entreprise`) REFERENCES `entreprise`(`id_entreprise`);
ALTER TABLE `stage` ADD CONSTRAINT `Stage_fk2` FOREIGN KEY (`sauvegarder_offre`) REFERENCES `entreprise`(`id_entreprise`);

ALTER TABLE `entreprise` ADD CONSTRAINT `Entreprise_fk0` FOREIGN KEY (`tuteur`) REFERENCES `Personne`(`id_personne`);

ALTER TABLE `stage` ADD CONSTRAINT `Personne_fk0` FOREIGN KEY (`postuler`) REFERENCES `Personne`(`id_personne`);

ALTER TABLE `contenus` ADD CONSTRAINT `auteur_fk0` FOREIGN KEY (`id_auteur`) REFERENCES `Personne`(`id_personne`);


CREATE USER 'user_projet_mvc'@'%' IDENTIFIED BY 'projet_mvc' WITH MAX_QUERIES_PER_HOUR 0
MAX_UPDATES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON stages_projet.* TO 'user_projet_mvc'@'%';