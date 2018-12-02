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

END