CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllPlayer`()
BEGIN
	select player_id,player_name,Player_dob,TIMESTAMPDIFF(YEAR, Player_dob, CURDATE()) as age,player_nationality from player_master;

END