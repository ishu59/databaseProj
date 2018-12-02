CREATE PROCEDURE `sp_insert_venue` (
in v_name varchar(50),
in city varchar(50),
in cap int
)
BEGIN
	DECLARE EXIT HANDLER FOR SQLEXCEPTION
	BEGIN
		ROLLBACK;
		SELECT 'An error has occurred, operation rollbacked and the stored procedure was terminated';
	END;

INSERT INTO venue (venue_name,venue_city,venue_capacity) VALUES(
v_name,city,cap
);
 
 
END