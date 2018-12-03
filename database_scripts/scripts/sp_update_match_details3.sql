CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_match_details3`(
in m_id int,
in t_id int,
in p_id int,
in detail_id int,
in sc int,
in wi int,
in bow int,
in fac int
)
BEGIN

declare  winner varchar(50);
declare winnerId int;
declare  winnerMsg varchar(50);
declare t1_score int;
declare t2_score int;


set winnerId = (select team_id_1_fk from match_master where match_id = m_id);
set winner = (select team_name from team_master where team_id = (select team_id_1_fk from match_master where match_id = m_id));
set winnerMsg = concat(winner,' Won');

UPDATE `cricket_analytics`.`match_details`
SET
`player_score` = sc,
`player_wickets` = wi,
`player_balls_bowled` = bow,
`player_balls_faced` = fac
WHERE `match_detail_id` = detail_id;

if t_id = (select team_id_1_fk from  match_master where match_id = m_id) then 
update match_master
set
	score_team_1 = (select sum(player_score) from match_details where match_id_fk = m_id and team_id_fk = t_id),
	wicket_team_1 = (select sum(player_wickets) from match_details where match_id_fk = m_id and team_id_fk = t_id)
where 
match_id = m_id;
else
update match_master
set
	score_team_2 = (select sum(player_score) from match_details where match_id_fk = m_id and team_id_fk = t_id),
	wicket_team_2 = (select sum(player_wickets) from match_details where match_id_fk = m_id and team_id_fk = t_id)
where 
match_id = m_id;
end if;


set t1_score = (select score_team_1 from match_master where match_id = m_id);
set t2_score = (select score_team_2 from match_master where match_id = m_id);

IF t1_score < t2_score THEN set winner = (select team_name from team_master where team_id = (select team_id_1_fk from match_master where match_id = m_id));

    END IF;
set winnerMsg = concat(winner,' Won');

update match_master
set
match_result = winnerMsg
where
match_id = m_id;

END