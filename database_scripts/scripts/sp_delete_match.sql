CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_delete_match`(
in  m_id int)
BEGIN

DELETE FROM match_details
WHERE match_id_fk = m_id;


DELETE FROM match_master
WHERE match_id = m_id;


END