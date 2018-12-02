select * from team_master;
/*
in team1_id int,
in team2_id int,
in venue_id int,
in ump_id int,
in m_date varchar(50),
in score_t1 int,
in score_t2 int,
in wicket_1 int,
in wicket_2 int,
in m_result varchar(100),
in m_extas int
*/

select * from venue;

INSERT INTO venue (venue_name,venue_city,venue_capacity) VALUES('name2','city2',10000);

call sp_insert_venue('name3','city3',10000);
call sp_insert_umpire('fname1','lname1');
call sp_insert_match_master(1,2,1,1,Now(),111,222,1,3,'1won');
 use cricket_analytics;
select * from match_master;


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