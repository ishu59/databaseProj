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

END