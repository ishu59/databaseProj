CREATE PROCEDURE `sp_insert_user` (in user_name varchar(20), in user_access int(11))
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;
    insert into user_master (user_name,user_access) values (user_name,user_access);
END
