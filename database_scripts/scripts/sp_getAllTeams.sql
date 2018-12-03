CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getAllTeams`()
BEGIN
select team_id,team_name, COALESCE(team_ranking,'NA') as team_ranking from team_master order by team_ranking;
END