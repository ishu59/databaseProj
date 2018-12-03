SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `cricket_analytics` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cricket_analytics`;

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_matchDetailsbyID_teamId`(in m_id int,in t_id int)
BEGIN
#call get_matchDetailsbyID_teamId(1,1);
select
match_detail_id, 
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


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_match`(
in  m_id int)
BEGIN

DELETE FROM match_details
WHERE match_id_fk = m_id;


DELETE FROM match_master
WHERE match_id = m_id;


END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllMatches`()
BEGIN
SELECT match_id,
    team_id_1_fk,
    t1.team_name as team_name_1,
    team_id_2_fk,
    t2.team_name as team_name_2,
    venue_id_fk,
    v.venue_name as venue_name,
    score_team_1,
    score_team_2,
    wicket_team_1,
    wicket_team_2,
    match_result,
    umpire_id_fk,
    concat(mu.first_name,' ' ,mu.last_name) as umpire_name,
    match_date,
    is_active
FROM match_master mm join match_umpire mu on mm.umpire_id_fk =  mu.umpire_id 
join team_master t1 on mm.team_id_1_fk = t1.team_id 
join team_master t2 on mm.team_id_2_fk = t2.team_id
join venue as v on mm.venue_id_fk = v.venue_id 
where is_active > 0;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllPlayer`()
BEGIN
	select player_id,player_name,Player_dob,TIMESTAMPDIFF(YEAR, Player_dob, CURDATE()) as age,
    player_nationality, tm.team_name as teamName,tm.team_id as team_id
    from player_master as pm join team_master tm on pm.team_id_fk = tm.team_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllTeams`()
BEGIN
select team_id,team_name, COALESCE(team_ranking,'NA') as team_ranking from team_master order by team_ranking;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllVenue`()
BEGIN
select venue_id,venue_name,venue_city,venue_capacity from venue;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getMatchByID`(in m_id int)
BEGIN
SELECT match_id,
    team_id_1_fk,
    t1.team_name as team_name_1,
    team_id_2_fk,
    t2.team_name as team_name_2,
    venue_id_fk,
    v.venue_name as venue_name,
    score_team_1,
    score_team_2,
    wicket_team_1,
    wicket_team_2,
    match_result,
    umpire_id_fk,
    concat(mu.first_name,' ' ,mu.last_name) as umpire_name,
    match_date,
    is_active
FROM match_master mm join match_umpire mu on mm.umpire_id_fk =  mu.umpire_id 
join team_master t1 on mm.team_id_1_fk = t1.team_id 
join team_master t2 on mm.team_id_2_fk = t2.team_id
join venue as v on mm.venue_id_fk = v.venue_id 
where match_id = m_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_match_details`(
in m_id int,

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

in t1_p4_id int,
in t1_p4_score int,
in t1_p4_wickets int,
in t1_p4_balls_bowled int,
in t1_p4_balls_faced int,

in t1_p5_id int,
in t1_p5_score int,
in t1_p5_wickets int,
in t1_p5_balls_bowled int,
in t1_p5_balls_faced int,

in t1_p6_id int,
in t1_p6_score int,
in t1_p6_wickets int,
in t1_p6_balls_bowled int,
in t1_p6_balls_faced int,

in t1_p7_id int,
in t1_p7_score int,
in t1_p7_wickets int,
in t1_p7_balls_bowled int,
in t1_p7_balls_faced int,

in t1_p8_id int,
in t1_p8_score int,
in t1_p8_wickets int,
in t1_p8_balls_bowled int,
in t1_p8_balls_faced int,

in t1_p9_id int,
in t1_p9_score int,
in t1_p9_wickets int,
in t1_p9_balls_bowled int,
in t1_p9_balls_faced int,

in t1_p10_id int,
in t1_p10_score int,
in t1_p10_wickets int,
in t1_p10_balls_bowled int,
in t1_p10_balls_faced int,

in t1_p11_id int,
in t1_p11_score int,
in t1_p11_wickets int,
in t1_p11_balls_bowled int,
in t1_p11_balls_faced int,

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
in t2_p3_balls_faced int,

in t2_p4_id int,
in t2_p4_score int,
in t2_p4_wickets int,
in t2_p4_balls_bowled int,
in t2_p4_balls_faced int,

in t2_p5_id int,
in t2_p5_score int,
in t2_p5_wickets int,
in t2_p5_balls_bowled int,
in t2_p5_balls_faced int,

in t2_p6_id int,
in t2_p6_score int,
in t2_p6_wickets int,
in t2_p6_balls_bowled int,
in t2_p6_balls_faced int,

in t2_p7_id int,
in t2_p7_score int,
in t2_p7_wickets int,
in t2_p7_balls_bowled int,
in t2_p7_balls_faced int,

in t2_p8_id int,
in t2_p8_score int,
in t2_p8_wickets int,
in t2_p8_balls_bowled int,
in t2_p8_balls_faced int,

in t2_p9_id int,
in t2_p9_score int,
in t2_p9_wickets int,
in t2_p9_balls_bowled int,
in t2_p9_balls_faced int,

in t2_p10_id int,
in t2_p10_score int,
in t2_p10_wickets int,
in t2_p10_balls_bowled int,
in t2_p10_balls_faced int,

in t2_p11_id int,
in t2_p11_score int,
in t2_p11_wickets int,
in t2_p11_balls_bowled int,
in t2_p11_balls_faced int

)
BEGIN

insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p1_id,t1_p1_score,t1_p1_wickets,t1_p1_balls_bowled,t1_p1_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p2_id,t1_p2_score,t1_p2_wickets,t1_p2_balls_bowled,t1_p2_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p3_id,t1_p3_score,t1_p3_wickets,t1_p3_balls_bowled,t1_p3_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p4_id,t1_p4_score,t1_p4_wickets,t1_p4_balls_bowled,t1_p4_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p5_id,t1_p5_score,t1_p5_wickets,t1_p5_balls_bowled,t1_p5_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p6_id,t1_p6_score,t1_p6_wickets,t1_p6_balls_bowled,t1_p6_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p7_id,t1_p7_score,t1_p7_wickets,t1_p7_balls_bowled,t1_p7_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p8_id,t1_p8_score,t1_p8_wickets,t1_p8_balls_bowled,t1_p8_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p9_id,t1_p9_score,t1_p9_wickets,t1_p9_balls_bowled,t1_p9_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p10_id,t1_p10_score,t1_p10_wickets,t1_p10_balls_bowled,t1_p10_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t1_p11_id,t1_p11_score,t1_p11_wickets,t1_p11_balls_bowled,t1_p11_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p1_id,t2_p1_score,t2_p1_wickets,t2_p1_balls_bowled,t2_p1_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p2_id,t2_p2_score,t2_p2_wickets,t2_p2_balls_bowled,t2_p2_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p3_id,t2_p3_score,t2_p3_wickets,t2_p3_balls_bowled,t2_p3_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p4_id,t2_p4_score,t2_p4_wickets,t2_p4_balls_bowled,t2_p4_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p5_id,t2_p5_score,t2_p5_wickets,t2_p5_balls_bowled,t2_p5_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p6_id,t2_p6_score,t2_p6_wickets,t2_p6_balls_bowled,t2_p6_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p7_id,t2_p7_score,t2_p7_wickets,t2_p7_balls_bowled,t2_p7_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p8_id,t2_p8_score,t2_p8_wickets,t2_p8_balls_bowled,t2_p8_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p9_id,t2_p9_score,t2_p9_wickets,t2_p9_balls_bowled,t2_p9_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p10_id,t2_p10_score,t2_p10_wickets,t2_p10_balls_bowled,t2_p10_balls_faced,m_id);
insert into match_details ( player_id_fk, player_score, player_wickets, player_balls_bowled, player_balls_faced, match_id_fk ) values (t2_p11_id,t2_p11_score,t2_p11_wickets,t2_p11_balls_bowled,t2_p11_balls_faced,m_id);

update match_master set `is_active` = 2
WHERE `match_id` = m_id;

select m_id;
END$$

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
END$$

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


select match_id from `cricket_analytics`.`match_master` order by match_id desc limit 1;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_team`(in team_name varchar(100), in team_mascot varchar(100), in team_desc varchar(100))
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;
    insert into team_master (team_name,team_mascot,team_desc) values (team_name,team_mascot,team_desc);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_umpire`(IN f_name varchar(50),IN l_name varchar(50))
BEGIN
DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;

	INSERT INTO match_umpire (first_name,last_name) VALUES (f_name,l_name);

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_venue`(
in v_name varchar(50),
in city varchar(50),
in cap int
)
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;

INSERT INTO venue (venue_name,venue_city,venue_capacity) VALUES(
v_name,city,cap
);
 
 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_searchPlayerName`(in stext varchar(100))
BEGIN
select player_id,player_name,Player_dob,TIMESTAMPDIFF(YEAR, Player_dob, CURDATE()) as age,
    player_nationality, tm.team_name as teamName,tm.team_id as team_id
    from player_master as pm join team_master tm on pm.team_id_fk = tm.team_id
        WHERE pm.player_name LIKE '%stext%';
END$$

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

END$$

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

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_player`(in p_id int,in pname varchar(100), 
in p_dob date, in nat varchar(100))
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;
    
UPDATE `cricket_analytics`.`player_master` 
SET 
    `player_name` = pname,
    `Player_dob` = p_dob,
    `player_nationality` = nat
WHERE
    `player_id` = p_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_venue`(in vid int, in vname varchar(100), in city varchar(100), in cap int)
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;
    
UPDATE `cricket_analytics`.`venue`
SET
`venue_name` = vname,
`venue_city` = city,
`venue_capacity` = cap
WHERE `venue_id` = vid;

END$$

DELIMITER ;

CREATE TABLE IF NOT EXISTS `fixture_master` (
  `fixture_id` int(11) NOT NULL,
  `series_name` varchar(50) NOT NULL,
  `match_date` datetime DEFAULT NULL,
  `venue_id_fk` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `fixture_master` (`fixture_id`, `series_name`, `match_date`, `venue_id_fk`) VALUES
(1, 'New Series', '2018-12-04 00:00:00', 1),
(2, 'world cup', '2019-01-09 00:00:00', 2),
(3, 'ipl', '2019-07-17 00:00:00', 1),
(5, 'premier league', '2019-11-13 00:00:00', 4),
(6, 'asia cup', '2020-05-13 00:00:00', 3);

CREATE TABLE IF NOT EXISTS `match_details` (
  `match_detail_id` int(11) NOT NULL,
  `match_id_fk` int(11) NOT NULL,
  `player_id_fk` int(11) NOT NULL,
  `player_score` int(11) NOT NULL,
  `player_wickets` int(11) NOT NULL,
  `player_balls_bowled` int(11) NOT NULL,
  `player_balls_faced` int(11) NOT NULL,
  `team_id_fk` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

INSERT INTO `match_details` (`match_detail_id`, `match_id_fk`, `player_id_fk`, `player_score`, `player_wickets`, `player_balls_bowled`, `player_balls_faced`, `team_id_fk`) VALUES
(1, 1, 9, 99, 99, 99, 99, 1),
(2, 1, 11, 99, 99, 99, 99, 1),
(3, 1, 16, 1, 2, 2, 3, 1),
(4, 1, 3, 77, 77, 77, 77, 3),
(5, 1, 10, 77, 77, 77, 77, 3),
(6, 1, 54, 88, 8, 88, 8, 3),
(7, 2, 15, 99, 9, 99, 9, 5),
(8, 2, 15, 99, 99, 99, 99, 5),
(9, 2, 1, 99, 999, 99, 9, 5),
(10, 2, 39, 88, 8, 88, 88, 2),
(11, 2, 32, 88, 88, 88, 88, 2),
(12, 2, 2, 66, 66, 66, 66, 2),
(31, 6, 4, 11, 99, 9, 9, 1),
(32, 6, 46, 9, 9, 99, 9, 1),
(33, 6, 30, 9, 9, 9, 9, 1),
(34, 6, 2, 200, 1, 1, 1, 2),
(35, 6, 20, 1, 1, 1, 1, 2),
(36, 6, 37, 1, 1, 1, 1, 2);

CREATE TABLE IF NOT EXISTS `match_master` (
  `match_id` int(11) NOT NULL,
  `team_id_1_fk` int(11) NOT NULL,
  `team_id_2_fk` int(11) NOT NULL,
  `venue_id_fk` int(11) NOT NULL,
  `score_team_1` int(11) NOT NULL,
  `score_team_2` int(11) NOT NULL,
  `wicket_team_1` int(11) NOT NULL,
  `wicket_team_2` int(11) NOT NULL,
  `match_result` varchar(100) NOT NULL,
  `umpire_id_fk` int(11) NOT NULL,
  `match_date` datetime NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime DEFAULT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO `match_master` (`match_id`, `team_id_1_fk`, `team_id_2_fk`, `venue_id_fk`, `score_team_1`, `score_team_2`, `wicket_team_1`, `wicket_team_2`, `match_result`, `umpire_id_fk`, `match_date`, `created_date`, `update_date`, `is_active`) VALUES
(1, 1, 3, 3, 195, 397, 200, 397, 'Senegal Won', 1, '0000-00-00 00:00:00', '2018-12-03 07:37:14', '2018-12-03 17:28:55', 2),
(2, 5, 2, 3, 100, 101, 1, 2, 'Tanzania Won', 5, '2018-12-01 00:00:00', '2018-12-03 13:00:58', NULL, 2),
(5, 4, 2, 5, 45, 78, 1, 2, 'Tanzania Won', 3, '2018-12-21 00:00:00', '2018-12-03 17:30:40', NULL, -1),
(6, 1, 2, 5, 29, 202, 117, 3, 'Senegal Won', 2, '2018-12-22 00:00:00', '2018-12-03 17:31:29', NULL, 2);

CREATE TABLE IF NOT EXISTS `match_umpire` (
  `umpire_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `match_umpire` (`umpire_id`, `first_name`, `last_name`) VALUES
(1, 'Valle', 'Hayesman'),
(2, 'Nelia', 'Inglese'),
(3, 'Miles', 'McShee'),
(4, 'Ashlan', 'Oldnall'),
(5, 'Britta', 'Furzey');

CREATE TABLE IF NOT EXISTS `player_master` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(100) NOT NULL,
  `Player_dob` date NOT NULL,
  `team_id_fk` int(11) NOT NULL,
  `player_nationality` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

INSERT INTO `player_master` (`player_id`, `player_name`, `Player_dob`, `team_id_fk`, `player_nationality`) VALUES
(1, 'Maje Dagnan', '1989-08-24', 5, 'Brazil'),
(2, 'Zuzana Crim', '1993-06-13', 2, 'Brazil'),
(3, 'Romola Bettington', '1981-02-21', 3, 'Portugal'),
(4, 'Godard Toppes', '1999-09-18', 1, 'Indonesia'),
(5, 'Kalli Dennistoun', '1995-01-23', 5, 'Russia'),
(6, 'Cirillo Halfhide', '1982-02-17', 2, 'Indonesia'),
(7, 'Mannie Hadenton', '1998-07-28', 4, 'Indonesia'),
(8, 'Wallache Chastanet', '1987-09-13', 3, 'Lithuania'),
(9, 'Ruperta Elloit', '1985-03-09', 1, 'Brazil'),
(10, 'Carolus Lots', '1993-04-28', 3, 'Pakistan'),
(11, 'Zelig McPhater', '1981-03-30', 1, 'China'),
(12, 'Frederick Cooch', '1993-08-23', 3, 'Philippines'),
(13, 'Burgess Whittlesee', '1987-06-14', 4, 'Portugal'),
(14, 'Cammie Churches', '1987-04-16', 2, 'Honduras'),
(15, 'Avis Otham', '1981-08-20', 5, 'Mexico'),
(16, 'Krystal Gowan', '1990-05-28', 1, 'France'),
(17, 'Barde Eynaud', '1997-10-14', 2, 'Colombia'),
(18, 'Aridatha Witterick', '1985-05-14', 1, 'Ecuador'),
(19, 'Hewitt Mistry', '1992-07-12', 4, 'Philippines'),
(20, 'Edsel Glancey', '1995-03-27', 2, 'China'),
(21, 'Pearla Sweetnam', '1988-12-15', 5, 'Sweden'),
(22, 'Ailsun Benedicto', '1993-03-14', 3, 'Argentina'),
(23, 'Valene McFadzean', '1997-01-23', 6, 'Poland'),
(24, 'Camala Dunderdale', '1984-02-29', 3, 'China'),
(25, 'Victor Vannozzii', '1999-09-25', 4, 'Ethiopia'),
(26, 'Bertrando Clews', '1988-06-24', 5, 'Tajikistan'),
(27, 'Cale Zanussii', '1988-06-15', 4, 'Iran'),
(28, 'Barton Morforth', '1989-11-26', 5, 'Sierra Leone'),
(29, 'Laureen Hullock', '1981-10-23', 1, 'Philippines'),
(30, 'Reggi Lowton', '2000-01-24', 1, 'Syria'),
(31, 'Elli Dougharty', '1983-02-24', 6, 'Indonesia'),
(32, 'Emlynne Haugeh', '1982-10-03', 2, 'Pakistan'),
(33, 'Rosita Obington', '1993-03-23', 3, 'China'),
(34, 'Randi Brattan', '1990-02-20', 6, 'China'),
(35, 'Sebastiano Dagnan', '1983-12-18', 6, 'Indonesia'),
(36, 'Shandeigh Greenmon', '1984-09-27', 2, 'Peru'),
(37, 'Cindelyn Pallister', '1986-07-25', 2, 'Poland'),
(38, 'Gustaf Ryal', '1985-12-16', 4, 'China'),
(39, 'Fabian Navan', '1992-02-14', 2, 'China'),
(40, 'Robbi Dunsford', '1998-08-20', 1, 'China'),
(41, 'Hamish Behrend', '1985-06-30', 3, 'China'),
(42, 'Max Clipson', '1991-02-08', 5, 'Russia'),
(43, 'Koressa Swadlinge', '1992-11-27', 6, 'Colombia'),
(44, 'Raddie Snelson', '1986-02-02', 6, 'Poland'),
(45, 'Valene Pocklington', '1987-01-02', 3, 'France'),
(46, 'Kania Layman', '1999-07-14', 1, 'Philippines'),
(47, 'Kirbee Shearn', '1997-03-19', 4, 'China'),
(48, 'Benoite Dover', '1991-10-14', 1, 'China'),
(49, 'Loella Cicconettii', '1992-12-07', 6, 'Brazil'),
(50, 'Emogene Pratchett', '1997-07-26', 4, 'Serbia'),
(51, 'Merline Swate', '1988-10-28', 6, 'Sweden'),
(52, 'Mariquilla Charity', '1991-01-05', 6, 'Portugal'),
(53, 'Emmeline Franzotto', '1999-01-30', 4, 'Russia'),
(54, 'Tim Tripean', '1995-12-19', 3, 'Portugal'),
(55, 'Concettina De Roberto', '1992-04-15', 6, 'China'),
(56, 'Sheffy Kennermann', '1982-04-25', 1, 'Russia'),
(57, 'Granny Learoid', '1982-03-21', 6, 'Philippines'),
(58, 'Tracee Galilee', '1994-04-15', 6, 'Netherlands'),
(59, 'Jimmie Graveson', '1999-07-26', 5, 'China'),
(60, 'Whitney Goodfield', '1999-08-30', 3, 'Japan'),
(61, 'Risa Lott', '1992-05-23', 2, 'Russia'),
(62, 'Cassi Silbert', '1985-07-18', 2, 'Nigeria'),
(63, 'Danila Sharvill', '1997-06-02', 4, 'Russia'),
(64, 'Druci Reddecliffe', '1991-05-19', 6, 'China'),
(65, 'Ynez Tillot', '1997-05-16', 3, 'Poland'),
(66, 'Gerrilee Ricca', '1994-04-05', 6, 'France'),
(67, 'Tana Sabbatier', '1985-04-07', 5, 'South Korea'),
(68, 'Consuela Kiellor', '1997-09-09', 4, 'Russia'),
(69, 'Doralyn Lehrer', '1986-12-29', 3, 'Afghanistan'),
(70, 'Katerina Thurlow', '1993-09-17', 6, 'Peru'),
(71, 'Suzy Ygou', '1985-12-24', 4, 'China'),
(72, 'Lexi Eilert', '1989-10-15', 5, 'China'),
(73, 'Rafaelita Purveys', '1990-04-11', 2, 'Indonesia'),
(74, 'Amye Scardifield', '1986-11-15', 2, 'Brazil'),
(75, 'Delmore Chstney', '1996-04-10', 5, 'China'),
(76, 'Maribel Stuchbury', '1989-08-22', 4, 'Czech Republic'),
(77, 'Yasmin Feavyour', '1982-02-19', 4, 'Peru'),
(78, 'Jackie Mustarde', '1990-04-15', 3, 'Sweden'),
(79, 'Bearnard Allebone', '1990-07-14', 3, 'China'),
(80, 'llll', '2018-12-03', 5, 'india');

CREATE TABLE IF NOT EXISTS `team_master` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `team_mascot` varchar(100) NOT NULL,
  `team_desc` varchar(1000) NOT NULL,
  `team_ranking` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `team_master` (`team_id`, `team_name`, `team_mascot`, `team_desc`, `team_ranking`) VALUES
(1, 'Senegal', 'iusto', 'Programmable real-time toolset', 3),
(2, 'Tanzania', 'et', 'Customer-focused mobile matrices', 7),
(3, 'Namibia', 'dicta', 'Fully-configurable 3rdgeneration function', 5),
(4, 'Dominica', 'veniam', 'Vision-oriented needs-based initiative', 8),
(5, 'Paraguay', 'aut', 'Devolved regional help-desk', 9),
(6, 'Saint Kitts and Nevis', 'delectus', 'Customizable value-added policy', 1),
(7, 'huh', 'kal', 'we', 1);

CREATE TABLE IF NOT EXISTS `venue` (
  `venue_id` int(11) NOT NULL,
  `venue_name` varchar(50) NOT NULL,
  `venue_city` varchar(50) NOT NULL,
  `venue_capacity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO `venue` (`venue_id`, `venue_name`, `venue_city`, `venue_capacity`) VALUES
(1, 'Summer Ridge', 'London', 13078),
(2, 'Hoard', 'Mumbai', 11352),
(3, 'Chinook', 'Wojaszówka', 16495),
(4, 'Del Mar', 'Zhoujiang', 13746),
(5, 'Corry', 'Pittsburgh', 12027);


ALTER TABLE `fixture_master`
  ADD PRIMARY KEY (`fixture_id`),
  ADD UNIQUE KEY `series_name` (`series_name`),
  ADD KEY `venue_id_fk` (`venue_id_fk`);

ALTER TABLE `match_details`
  ADD PRIMARY KEY (`match_detail_id`),
  ADD KEY `match_id_fk` (`match_id_fk`),
  ADD KEY `player_id_fk` (`player_id_fk`),
  ADD KEY `team_id_fk` (`team_id_fk`);

ALTER TABLE `match_master`
  ADD PRIMARY KEY (`match_id`),
  ADD KEY `umpire_id_fk` (`umpire_id_fk`),
  ADD KEY `team_id_1_fk` (`team_id_1_fk`),
  ADD KEY `team_id_2_fk` (`team_id_2_fk`),
  ADD KEY `venue_id_fk` (`venue_id_fk`);

ALTER TABLE `match_umpire`
  ADD PRIMARY KEY (`umpire_id`);

ALTER TABLE `player_master`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `team_id_fk` (`team_id_fk`);

ALTER TABLE `team_master`
  ADD PRIMARY KEY (`team_id`);

ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);


ALTER TABLE `fixture_master`
  MODIFY `fixture_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
ALTER TABLE `match_details`
  MODIFY `match_detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
ALTER TABLE `match_master`
  MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
ALTER TABLE `match_umpire`
  MODIFY `umpire_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
ALTER TABLE `player_master`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
ALTER TABLE `team_master`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
ALTER TABLE `venue`
  MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;

ALTER TABLE `fixture_master`
  ADD CONSTRAINT `fixture_master_ibfk_1` FOREIGN KEY (`venue_id_fk`) REFERENCES `venue` (`venue_id`);

ALTER TABLE `match_details`
  ADD CONSTRAINT `match_details_ibfk_1` FOREIGN KEY (`match_id_fk`) REFERENCES `match_master` (`match_id`),
  ADD CONSTRAINT `match_details_ibfk_2` FOREIGN KEY (`player_id_fk`) REFERENCES `player_master` (`player_id`),
  ADD CONSTRAINT `match_details_ibfk_3` FOREIGN KEY (`team_id_fk`) REFERENCES `team_master` (`team_id`);

ALTER TABLE `match_master`
  ADD CONSTRAINT `match_master_ibfk_1` FOREIGN KEY (`umpire_id_fk`) REFERENCES `match_umpire` (`umpire_id`),
  ADD CONSTRAINT `match_master_ibfk_2` FOREIGN KEY (`team_id_1_fk`) REFERENCES `team_master` (`team_id`),
  ADD CONSTRAINT `match_master_ibfk_3` FOREIGN KEY (`team_id_2_fk`) REFERENCES `team_master` (`team_id`),
  ADD CONSTRAINT `match_master_ibfk_4` FOREIGN KEY (`venue_id_fk`) REFERENCES `venue` (`venue_id`);

ALTER TABLE `player_master`
  ADD CONSTRAINT `player_master_ibfk_1` FOREIGN KEY (`team_id_fk`) REFERENCES `team_master` (`team_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
