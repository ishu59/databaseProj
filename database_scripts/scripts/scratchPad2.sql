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
call sp_insert_match_master(2,1,1,1,cast( now() as char),100,101,1,2,'test X');

select * from match_details where match_id_fk = 4;
select * from match_master mm join match_umpire mu on mm.umpire_id_fk =  mu.umpire_id join team_master t1 on mm.team_id_1_fk = t1.team_id join team_master t2 on mm.team_id_2_fk = t2.team_id;
SELECT match_id,
    team_id_1_fk,
    t1.team_name as team_name_1,
    team_id_2_fk,
    t2.team_name as team_name_2,
    venue_id_fk,
    v.venue_name,
    score_team_1,
    score_team_2,
    wicket_team_1,
    wicket_team_2,
    match_result,
    umpire_id_fk,
    concat(mu.first_name,' ' ,mu.last_name) as umpire_name,
    match_date,
    is_active
FROM match_master mm join match_umpire mu on mm.umpire_id_fk =  mu.umpire_id 
join team_master t1 on mm.team_id_1_fk = t1.team_id 
join team_master t2 on mm.team_id_2_fk = t2.team_id
join venue as v on mm.venue_id_fk = v.venue_id 
where is_active > 0;

call sp_getAllMatches();

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

call sp_getAllVenue();

call sp_insert_match_master(2,1,1,1,cast(now() as char),100,101,1,2,'test X');
Insert into venue (venue_name,venue_city,venue_capacity) values ('Venue1','Pitt',100000);

call sp_getMatchByID(19);
call sp_update_venue(5,'Pitt ven 1','Pittsburgh',15232);

call sp_update_venue(1,'2Pitt ven 1','Pittsburgh',15232);

call sp_insert_match_master(4,3,4,1,'2018-11-27',100,200,1,2,' USA won');

CALL `cricket_analytics`.`sp_insert_umpire`('Steve','buckner');
CALL `cricket_analytics`.`sp_insert_umpire`('Tom','Hardy');
CALL `cricket_analytics`.`sp_insert_umpire`('Jon','Snow');
CALL `cricket_analytics`.`sp_insert_umpire`('Michaal','Jackson');
