use cricket_analytics;
insert into match_umpire (umpire_name) values ('Umpire 1');
insert into match_umpire (umpire_name) values ('Umpire 2');
insert into match_umpire (umpire_name) values ('Umpire 3');

select * from match_umpire;
#truncate table team_master;
#delete from team_master where team_id  in (select team_id from team_master);
insert into team_master (team_name,team_mascot,team_desc) values ('name 1','mascot 1', 'desc 1');
insert into team_master (team_name,team_mascot,team_desc) values ('name 2','mascot 2', 'desc 2');
insert into team_master (team_name,team_mascot,team_desc) values ('name 3','mascot 3', 'desc 3');

select * from team_master;

Insert into team_master (team_name,team_mascot,team_desc) values ('ee','rr','ttt');

select team_id,team_name from team_master;

Insert into player_master (player_name,Player_dob,player_nationality) values ('ashish','2017-01-01','india',7);

Insert into player_master (player_name,Player_dob,player_nationality,team_id_fk) values ('ashish','2017-01-01','india',7);

select * from player_master;

select team_id,team_name,team_ranking from team_master order by team_ranking;
select team_id,team_name, COALESCE(team_ranking,'NA') as team_ranking from team_master order by team_ranking;

insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values ();

insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe1','1990-01-01',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe2','1990-01-02',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe3','1990-01-03',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe4','1990-01-04',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe5','1990-01-05',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe6','1990-01-06',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe7','1990-01-07',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe8','1990-01-08',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe9','1990-01-09',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe10','1990-01-10',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe11','1990-01-11',1,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe12','1990-01-12',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe13','1990-01-13',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe14','1990-01-14',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe15','1990-01-15',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe16','1990-01-16',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe17','1990-01-17',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe18','1990-01-18',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe19','1990-01-19',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe20','1990-01-20',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe21','1990-01-21',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe22','1990-01-22',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe23','1990-01-23',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe24','1990-01-24',2,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe25','1990-01-25',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe26','1990-01-26',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe27','1990-01-27',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe28','1990-01-28',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe29','1990-01-29',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe30','1990-01-30',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe31','1990-01-31',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe32','1990-02-01',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe33','1990-02-02',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe34','1990-02-03',3,'hello world'	);
insert into player_master (player_name,Player_dob,team_id_fk,player_nationality) values (	'John Doe35','1990-02-04',3,'hello world'	);
