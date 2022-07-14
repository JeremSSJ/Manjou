drop database if exists Manjou;
create database if not exists Manjou character set='utf8';
use Manjou;

create table if not exists user 
(
    adrss_mail varchar(255) NOT NULL,
    nom_util varchar(50) NOT NULL,
    hash_mdp varchar(255) NOT NULL,
    annonceur tinyint NOT NULL,
    gestion tinyint NOT NULL,
    date_creation date NOT NULL,

    primary key(adrss_mail)
) engine=innodb;