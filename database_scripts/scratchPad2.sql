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

call sp_getAllPlayer();

select umpire_id,concat(first_name,' ',last_name) as uname from match_umpire;

select * from venue;

select * from match_master;

call sp_searchPlayerName('john');

select * from player_master where player_name like'%99%';
call sp_searchPlayerName('99');

select player_id,player_name,Player_dob,TIMESTAMPDIFF(YEAR, Player_dob, CURDATE()) as age,
    player_nationality, tm.team_name as teamName,tm.team_id as team_id
    from player_master as pm join team_master tm on pm.team_id_fk = tm.team_id
        WHERE  pm.player_name LIKE '%99%';
        
select player_id,player_name,Player_dob,TIMESTAMPDIFF(YEAR, Player_dob, CURDATE()) as age,
    player_nationality, tm.team_name as teamName,tm.team_id as team_id
    from player_master as pm join team_master tm on pm.team_id_fk = tm.team_id
        WHERE pm.player_name LIKE '%99%';
        
select player_id,player_name,Player_dob,TIMESTAMPDIFF(YEAR, Player_dob, CURDATE()) as age, player_nationality, tm.team_name as teamName,tm.team_id as team_id from player_master as pm join team_master tm on pm.team_id_fk = tm.team_id WHERE pm.player_name LIKE '%99%';