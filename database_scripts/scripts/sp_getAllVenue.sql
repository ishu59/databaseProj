CREATE PROCEDURE `sp_getAllVenue` ()
BEGIN
select venue_id,venue_name,venue_city,venue_capacity from venue;

END
