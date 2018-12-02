CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_match_master`(
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
)
BEGIN

Declare l_active  int default -1;
set l_active = -1;

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
(team1_id,team2_id,venue_id,score_t1,score_t2,wicket_1,wicket_2,m_result,ump_id,cast(m_date as date),now(),l_active
);


select match_id from `cricket_analytics`.`match_master` order by match_id desc;

END