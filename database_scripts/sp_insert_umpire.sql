CREATE PROCEDURE sp_insert_umpire (IN umpire_name varchar(50))
BEGIN
DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;

	INSERT INTO match_umpire (umpire_name) VALUES (umpire_name);

END
