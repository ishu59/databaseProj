CREATE PROCEDURE sp_getAllMatches ()
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

END


