#SET FOREIGN_KEY_CHECKS=0;
#truncate table team_master;


INSERT INTO `team_master` 
(
`team_name`,
`team_mascot`,
`team_desc`,
`team_ranking`
)
 VALUES ('Senegal','iusto','Programmable real-time toolset',3),
('Tanzania','et','Customer-focused mobile matrices',7),
('Namibia','dicta','Fully-configurable 3rdgeneration function',5),
('Dominica','veniam','Vision-oriented needs-based initiative',8),
('Paraguay','aut','Devolved regional help-desk',9),
('Saint Kitts and Nevis','delectus','Customizable value-added policy',1); 


select * from team_master;


select * from player_master;

#truncate table player_master;
#truncate table match_umpire;
select * from match_umpire;
insert into match_umpire (first_name, last_name) values ('Valle', 'Hayesman');
insert into match_umpire (first_name, last_name) values ('Nelia', 'Inglese');
insert into match_umpire (first_name, last_name) values ('Miles', 'McShee');
insert into match_umpire (first_name, last_name) values ('Ashlan', 'Oldnall');
insert into match_umpire (first_name, last_name) values ('Britta', 'Furzey');


select * from venue;
#truncate table venue;
insert into venue (venue_name, venue_city, venue_capacity) values ('Summer Ridge', 'London', 13078);
insert into venue (venue_name, venue_city, venue_capacity) values ('Hoard', 'Mumbai', 11352);
insert into venue (venue_name, venue_city, venue_capacity) values ('Chinook', 'Wojaszówka', 16495);
insert into venue (venue_name, venue_city, venue_capacity) values ('Del Mar', 'Zhoujiang', 13746);
insert into venue (venue_name, venue_city, venue_capacity) values ('Corry', 'Pittsburgh', 12027);
