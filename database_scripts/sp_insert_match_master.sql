CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_matchmaster`(
in  team1_id int,
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
)
BEGIN
set @active = -1;
INSERT INTO `cricket_analytics`.`match_master`
(`match_id`,
`team_id_1_fk`,
`team_id_2_fk`,
`venue_id_fk`,
`score_team_1`,
`score_team_2`,
`match_result`,
`match_extras`,
`umpire_id_fk`,
`match_date`,
`created_date`)
VALUES
(team1_id,
team2_id,
venue_id,
score_t1,
score_t2,
wicket_1,
wicket_2,
m_result,
m_extas,
ump_id,
m_date,
NOW(),
 @active);


END