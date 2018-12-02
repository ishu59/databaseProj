select * from team_master;
/*
in team1_id int,
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
*/

select * from venue;

INSERT INTO venue (venue_name,venue_city,venue_capacity) VALUES('name2','city2',10000);

call sp_insert_venue('name3','city3',10000);
call sp_insert_umpire('fname1','lname1');
select * from venue;