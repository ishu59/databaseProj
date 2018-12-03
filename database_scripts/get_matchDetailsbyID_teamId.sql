CREATE DEFINER=`root`@`localhost` PROCEDURE `get_matchDetailsbyID_teamId`(in m_id int,in t_id int)
BEGIN
#call get_matchDetailsbyID_teamId(1,1);
select 
match_id_fk, 
player_id_fk,
player_score,
player_wickets,
player_balls_bowled,
player_balls_faced,
md.team_id_fk as team_id,
tm.team_name as team_name,
pm.player_name as player_name
from match_details as md 
join team_master as tm on md.team_id_fk = tm.team_id
join player_master as pm on md.player_id_fk = pm.player_id
where match_id_fk = m_id and md.team_id_fk =t_id;


END