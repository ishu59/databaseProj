#version 1.0
#Database schema for cricket analytics website
DROP DATABASE IF EXISTS cricket_analytics;
CREATE DATABASE cricket_analytics;
USE cricket_analytics;

CREATE TABLE team_master
(
  team_id INT NOT NULL AUTO_INCREMENT,
  team_name VARCHAR(100) NOT NULL UNIQUE,
  team_mascot VARCHAR(100) NOT NULL,
  team_desc VARCHAR(1000) NOT NULL,
  PRIMARY KEY (team_id)
);

CREATE TABLE venue
(
  venue_id INT NOT NULL AUTO_INCREMENT,
  venue_name VARCHAR(50) NOT NULL UNIQUE,
  venue_city VARCHAR(50) NOT NULL,
  venue_capacity INT NOT NULL,
  PRIMARY KEY (venue_id)
);

CREATE TABLE match_umpire
(
  umpire_id INT NOT NULL AUTO_INCREMENT,
  umpire_name VARCHAR(50) NOT NULL UNIQUE,
  PRIMARY KEY (umpire_id)
);

CREATE TABLE player_master
(
  player_id INT NOT NULL AUTO_INCREMENT,
  player_name VARCHAR(100) NOT NULL UNIQUE,
  Player_dob DATE NOT NULL,
  team_id_fk INT NOT NULL,
  player_nationality VARCHAR(100) NOT NULL,
  PRIMARY KEY (player_id),
  FOREIGN KEY (team_id_fk) REFERENCES team_master(team_id)
);

CREATE TABLE match_master
(
  match_id INT NOT NULL AUTO_INCREMENT,
  team_id_1_fk INT NOT NULL,
  team_id_2_fk INT NOT NULL,
  venue_id_fk INT NOT NULL,
  score_team_1 INT NOT NULL,
  score_team_2 INT NOT NULL,
  wicket_team_1 INT NOT NULL,
  wicket_team_2 INT NOT NULL,
  match_result VARCHAR(100) NOT NULL,
  umpire_id_fk INT NOT NULL,
  match_date DATETIME NOT NULL,
  
  PRIMARY KEY (match_id),
  FOREIGN KEY (umpire_id_fk) REFERENCES match_umpire(umpire_id),
  FOREIGN KEY (team_id_1_fk) REFERENCES team_master(team_id),
  FOREIGN KEY (team_id_2_fk) REFERENCES team_master(team_id),
  FOREIGN KEY (venue_id_fk) REFERENCES venue(venue_id)
);


CREATE TABLE match_details
(
  match_detail_id INT NOT NULL AUTO_INCREMENT,
  match_id_fk INT NOT NULL,
  player_id_fk INT NOT NULL,
  player_score INT NOT NULL,
  player_wickets INT NOT NULL,
  player_balls_bowled INT NOT NULL,
  player_balls_faced INT NOT NULL,
  PRIMARY KEY (match_detail_id),
  FOREIGN KEY (match_id_fk) REFERENCES match_master(match_id),
  FOREIGN KEY (player_id_fk) REFERENCES player_master(player_id)
);

CREATE TABLE user_master
(
  user_id INT NOT NULL AUTO_INCREMENT,
  user_name VARCHAR(20) NOT NULL UNIQUE,
  user_access INT NOT NULL,
  PRIMARY KEY (user_id)
);

select 'Database and required structure Created successfully';


 