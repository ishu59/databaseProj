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


END