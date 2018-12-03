CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_match_details3`(
in m_id int,
in t1_id int,
in t2_id int,

in t1_p1_id int,
in t1_p1_score int,
in t1_p1_wickets int,
in t1_p1_balls_bowled int,
in t1_p1_balls_faced int,

in t1_p2_id int,
in t1_p2_score int,
in t1_p2_wickets int,
in t1_p2_balls_bowled int,
in t1_p2_balls_faced int,

in t1_p3_id int,
in t1_p3_score int,
in t1_p3_wickets int,
in t1_p3_balls_bowled int,
in t1_p3_balls_faced int,

in t2_p1_id int,
in t2_p1_score int,
in t2_p1_wickets int,
in t2_p1_balls_bowled int,
in t2_p1_balls_faced int,

in t2_p2_id int,
in t2_p2_score int,
in t2_p2_wickets int,
in t2_p2_balls_bowled int,
in t2_p2_balls_faced int,

in t2_p3_id int,
in t2_p3_score int,
in t2_p3_wickets int,
in t2_p3_balls_bowled int,
in t2_p3_balls_faced int
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

insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ,team_id_fk) values (t1_p1_id,t1_p1_score,t1_p1_wickets,t1_p1_balls_bowled,t1_p1_balls_faced,m_id,t1_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ,team_id_fk) values (t1_p2_id,t1_p2_score,t1_p2_wickets,t1_p2_balls_bowled,t1_p2_balls_faced,m_id,t1_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ,team_id_fk) values (t1_p3_id,t1_p3_score,t1_p3_wickets,t1_p3_balls_bowled,t1_p3_balls_faced,m_id,t1_id);

insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk, team_id_fk) values (t2_p1_id,t2_p1_score,t2_p1_wickets,t2_p1_balls_bowled,t2_p1_balls_faced,m_id,t2_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk, team_id_fk) values (t2_p2_id,t2_p2_score,t2_p2_wickets,t2_p2_balls_bowled,t2_p2_balls_faced,m_id,t2_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk, team_id_fk) values (t2_p3_id,t2_p3_score,t2_p3_wickets,t2_p3_balls_bowled,t2_p3_balls_faced,m_id,t2_id);

update match_master set 
`is_active` = 2,
score_team_1 = t1_p1_score + t1_p2_score + t1_p3_score,
score_team_2 = t2_p1_score + t2_p2_score + t2_p3_score,
wicket_team_1 = t1_p1_wickets + t1_p2_wickets + t1_p3_wickets,
wicket_team_2 = t2_p1_wickets + t2_p2_wickets + t2_p3_wickets
WHERE `match_id` = m_id;

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


select m_id;
END