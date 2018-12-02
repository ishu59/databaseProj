use cricket_analytics;
SET FOREIGN_KEY_CHECKS=0;
SET FOREIGN_KEY_CHECKS=1;

select * from venue;
select * from team_master;
select * from match_umpire;
INSERT INTO venue (venue_name,venue_city,venue_capacity) VALUES('name2','city2',10000);

call sp_insert_venue('name3','city3',10000);
call sp_insert_umpire('fname1','lname1');
call sp_insert_match_master(1,2,1,1,Now(),111,222,1,3,'1won');
call sp_insert_match_master(1,3,1,1,cast( now() as char),100,101,1,2,'test');

select * from match_master mm join match_umpire mu on mm.umpire_id_fk =  mu.umpire_id join team_master t1 on mm.team_id_1_fk = t1.team_id join team_master t2 on mm.team_id_2_fk = t2.team_id;

select * from player_master;


call sp_insert_match_details(
1,



