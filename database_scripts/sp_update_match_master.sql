CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_match_master`(
in m_id int,
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

UPDATE `cricket_analytics`.`match_master`
SET

`team_id_1_fk` = team1_id,
`team_id_2_fk` = team2_id,
`venue_id_fk` = venue_id,
`score_team_1` = score_t1,
`score_team_2` = score_t2,
`wicket_team_1` = wicket_1,
`wicket_team_2` = wicket_2,
`match_result` = m_result,
`umpire_id_fk` = ump_id,
`match_date` = cast(m_date as date),
`update_date` = now()
WHERE `match_id` = m_id;

select m_id;

END