call sp_insert_match_details3(3,4,5, 25, 2, 2, 2, 2, 7,2,2,2,2, 25,2,2,2,2, 1,4,4,4,4, 5,4,4,4,4, 28,4,4,4,4 );

select * from match_master where match_id = 3;

call sp_delete_match(3);

select * from match_master;
select * from match_details where match_id_fk = 3;


CREATE TABLE fixture_master
(
fixture_id INT NOT NULL AUTO_INCREMENT,
series_name VARCHAR(50) NOT NULL UNIQUE,
match_date DATETIME,
venue_id_fk INT NOT NULL,

PRIMARY KEY (fixture_id),
FOREIGN KEY (venue_id_fk) REFERENCES venue (venue_id)
);