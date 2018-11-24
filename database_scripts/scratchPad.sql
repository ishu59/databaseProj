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