SELECT 
    *
FROM `cricket_analytics`.`match_details` as md
join player_master as pm on md.team_id_fk = tm.team_id
join match_master as mm on md.match_id_fk
join team_master as tm on mm.team_id_1_fk = tm.team_id

where match_id_fk = 27 and tm.team_id = 3
;

select * from team_master;

select * from  match_master;

call sp_insert_match_details3(33,2,3, 2,88,88,88,88, 6,99,99,99,99, 20,888,88,88,88, 3,77,77,77,77, 10,66,66,66,66, 33,66,66,66,66 );

SELECT * FROM `cricket_analytics`.`match_details` where match_id_fk = 1 and team_id_fk = 3;

SELECT * FROM `cricket_analytics`.`match_details` order by match_detail_id;

select * from match_master;
select * from match_details;
SET FOREIGN_KEY_CHECKS=0;
truncate table match_master;
truncate table match_details;

select * from match_details where match_id_fk = 1 and team_id_fk =1;

select 
match_id_fk, 
player_id_fk,
player_score,
player_wickets,
player_balls_bowled,
player_balls_faced,
md.team_id_fk,
tm.team_name as team_name

,pm.player_name as player_name
from match_details as md 
join team_master as tm on md.team_id_fk = tm.team_id
join player_master as pm on md.player_id_fk = pm.player_id
where match_id_fk = 1 and md.team_id_fk =1;

call get_matchDetailsbyID_teamId(1,1);

#join player_master as pm on pm.team_id_fk = tm.team_id