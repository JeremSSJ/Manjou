insert ignore into utilisateur values('jeremie283@hotmail.com', 'Jerem', '$2y$10$K2jX0sigbxrru6ea899Q3OXQAOOIhZ6UvJlxIFp8kf7HdpspsuWwi', 1, 1, date(now()));

select * from utilisateur;


insert ignore into annonce values(NULL, 'jeremie283@hotmail.com', 't', 't', 't', 't', '7000', 't', '065566989', 'urldemonsite');

select * from annonce;


DELETE FROM utilisateur where adrss_mail like 'jeremie283@hotmail.com';



UPDATE utilisateur SET adrss_mail = 'guigui@gmail.com' where adrss_mail like 'jeremie283@hotmail.com';

select * from utilisateur;
select * from annonce;