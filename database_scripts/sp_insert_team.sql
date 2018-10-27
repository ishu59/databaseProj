CREATE PROCEDURE `sp_insert_team` (in team_name varchar(100), in team_mascot varchar(100), in team_desc varchar(100))
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;
    insert into team_master (team_name,team_mascot,team_desc) values (team_name,team_mascot,team_desc);
END
