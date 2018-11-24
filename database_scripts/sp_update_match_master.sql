CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_match_master`(
in m_id int,
in m_date varchar(50),
in score_t1 int,
in score_t2 int,
in wicket_1 int,
in wicket_2 int,
in m_result varchar(100),
in m_extas int
)
BEGIN
UPDATE `cricket_analytics`.`match_master`
SET
score_team_1	=	score_t1	,
score_team_2	=	score_t2	,
wicket_team_1	=	wicket_1	,
wicket_team_2	=	wicket_2	,
match_result	=	m_result	,
match_extras	=	m_extas	,
match_date	=	m_date	,
updated_date	=	now()	

WHERE `match_id` = m_id;

END