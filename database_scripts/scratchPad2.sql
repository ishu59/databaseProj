SET FOREIGN_KEY_CHECKS=0;
SET FOREIGN_KEY_CHECKS=1;

select * from venue;
select * from team_master;
select * from match_umpire;
INSERT INTO venue (venue_name,venue_city,venue_capacity) VALUES('name2','city2',10000);

call sp_insert_venue('name3','city3',10000);
call sp_insert_umpire('fname1','lname1');
call sp_insert_match_master(1,2,1,1,Now(),111,222,1,3,'1won');
 use cricket_analytics;
select * from match_master mm join match_umpire mu on mm.umpire_id_fk =  mu.umpire_id join team_master t1 on mm.team_id_1_fk = t1.team_id join team_master t2 on mm.team_id_2_fk = t2.team_id;

call sp_insert_match_master(1,3,1,1,cast( now() as char),100,101,1,2,'test');

in  team1_id int,
in team2_id int,
in venue_id int,
in ump_id int,
in m_date varchar(50),
in score_t1 int,
in score_t2 int,
in wicket_1 int,
in wicket_2 int,
in m_result varchar(100)

INSERT INTO `cricket_analytics`.`match_master`
(
`team_id_1_fk`,
`team_id_2_fk`,
`venue_id_fk`,
`score_team_1`,
`score_team_2`,
`wicket_team_1`,
`wicket_team_2`,
`match_result`,
`umpire_id_fk`,
`match_date`,
`created_date`,

`is_active`)
VALUES
(1,2,1,111,222,1,3,'1won',1,now(),now(),-1);