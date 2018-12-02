CREATE PROCEDURE `sp_insert_venue` (IN venue_name varchar(50),IN venue_city varchar(50),IN venue_capacity int(11))
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;

	insert into venue (venue_name,venue_city,venue_capacity) values (v_name,venue_city,venue_capacity);
END
