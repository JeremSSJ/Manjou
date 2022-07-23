drop database if exists Manjou;
create database if not exists Manjou character set='utf8';
use Manjou;

create table if not exists utilisateur 
(
    adrss_mail varchar(100) NOT NULL,
    nom_util varchar(50) NOT NULL,
    hash_mdp varchar(255) NOT NULL,
    annonceur boolean NOT NULL,
    gestion boolean NOT NULL,
    date_creation date NOT NULL,

    primary key(adrss_mail)
) engine=innodb;

create table if not exists annonce 
(
    id_annonce int unsigned NOT NULL auto_increment,
    adrss_mail varchar(100) NOT NULL,
    nom_restau varchar(100) NOT NULL,
    type_restau varchar(50) NOT NULL,
    descript varchar(500) NOT NULL,
    rue varchar(50) NOT NULL,
    ville varchar(50) NOT NULL,
    c_postal varchar(10) NOT NULL,
    pays varchar(50) NOT NULL,
    num_tel varchar(20) NOT NULL,
    url_site varchar(100),
    
    primary key(id_annonce)
) engine=innodb;

alter table annonce add constraint fk_mailutil foreign key(adrss_mail) references utilisateur(adrss_mail) ON DELETE CASCADE ON UPDATE CASCADE;

create table if not exists images_annonce 
(
    nom_image varchar(255) NOT NULL,
    id_annonce int unsigned NOT NULL,

    primary key(nom_image)
) engine=innodb;

alter table images_annonce add constraint fk_idannonce foreign key(id_annonce) references annonce(id_annonce) ON DELETE CASCADE ON UPDATE CASCADE;

create table if not exists favorites 
(
    id_annonce int unsigned NOT NULL,
    adrss_mail varchar(100) NOT NULL,

    primary key(id_annonce, adrss_mail),
	key(adrss_mail)
) engine=innodb;

alter table favorites add constraint fk_id_annonce foreign key(id_annonce) references annonce(id_annonce) ON DELETE CASCADE ON UPDATE CASCADE, 
add constraint fk_mail_util foreign key(adrss_mail) references utilisateur(adrss_mail) ON DELETE CASCADE ON UPDATE CASCADE;