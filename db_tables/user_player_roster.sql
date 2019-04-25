CREATE TABLE user_player_roster(
	userID			INT NOT NULL PRIMARY KEY AUTO_INCREMENT
	,Player1      	VARCHAR(30)
	,Player2     	VARCHAR(30) 
	,Player3     	VARCHAR(30) 
	,Player4     	VARCHAR(30) 
	,Player5     	VARCHAR(30) 
);

INSERT INTO user_player_roster VALUES (1, 'Kyle Guy', 'Jack Salt', 'Kody Stattmann', 'Ty Jerome', 'Jayden Nixon');
INSERT INTO user_player_roster VALUES (2, 'Jack Salt', 'Kody Stattmann', NULL, NULL, NULL);
INSERT INTO user_player_roster VALUES (3, 'Jayden Nixon', NULL, NULL, NULL, NULL);
INSERT INTO user_player_roster VALUES (4, 'Ty Jerome', 'Jayden Nixon', 'Mamadi Diakite', 'Jack Salt', NULL);
INSERT INTO user_player_roster VALUES (5, 'Ty Jerome', 'Mamadi Diakite', 'Jack Salt', NULL, NULL);
INSERT INTO user_player_roster VALUES (6, 'Jayden Nixon', 'Jay Huff', 'Marco Anthony', 'Francesco Badocchi', NULL);
INSERT INTO user_player_roster VALUES (7, 'Jayden Nixon', NULL, NULL, NULL, NULL);