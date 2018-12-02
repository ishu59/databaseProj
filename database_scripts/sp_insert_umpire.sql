CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_umpire`(IN f_name varchar(50),IN l_name varchar(50))
BEGIN
DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;

	INSERT INTO match_umpire (first_name,last_name) VALUES (f_name,l_name);

END