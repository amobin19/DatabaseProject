/* Let's split this file up into sections, where each section
is the code designed to create one of our 10 tables. */

/* TODO:
	player(name, height, age, school, school_year, hometown, weight, player_number)
	player_stats(points/game, assists/game, rebounds/game, steals/game, blocks/game, fieldgoal%, 3pt%, TO/game, FreeThrow%)
	head_coach(name, team, conference, games_won, games_lost)
	team(wins, loss, conference, points_for, points_against, head_coach, ap_rank)
	user_roster(teams, players)
	users(name, password, user_id, email, birthday)
	conference(rank, team, conf_wins, conf_losses, win_lost_percentage)
	schedule(game, ...)
*/


/* SECTION X: 20 of the greatest head coaches */

CREATE TABLE headCoach(
   Name        VARCHAR(16) NOT NULL PRIMARY KEY
  ,year_from   INTEGER  NOT NULL
  ,year_to     INTEGER  NOT NULL
  ,Last_School VARCHAR(15) NOT NULL
  ,total_years INTEGER  NOT NULL
  ,Games       INTEGER  NOT NULL
  ,Wins        INTEGER  NOT NULL
  ,Losses      INTEGER  NOT NULL
  ,Ties        INTEGER  NOT NULL
  ,Percent     NUMERIC(4,3) NOT NULL
);

INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Dino Babers',2014,2018,'Syracuse',5,64,36,28,0,.563);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Joe Bach',1934,1934,'Duquesne',1,10,8,2,0,.800);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Charlie Bachman',1919,1946,'Michigan State',27,234,132,80,22,.611);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Walter Bachman',1905,1906,'Texas A&M',2,16,13,3,0,.813);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('A.H. Badenoch',1918,1918,'Stanford',1,4,0,4,0,.000);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Chuck Baer',1945,1950,'Detroit Mercy',6,57,35,21,1,.623);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Kent Baer',2004,2012,'San Jose State',2,2,1,1,0,.500);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Enoch Bagshaw',1921,1929,'Washington',9,91,64,21,6,.736);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Charlie Bailey',1986,1999,'Texas-El Paso',10,106,31,73,2,.302);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('David Bailiff',2007,2017,'Rice',11,137,57,80,0,.416);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('A.G. Baillet',1892,1892,'Tufts',1,10,8,2,0,.800);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Art Baker',1973,1988,'East Carolina',13,143,64,74,5,.465);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Edward Baker',1940,1940,'Carnegie Mellon',1,8,3,5,0,.375);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('John Baker',1942,1952,'Denver',6,61,23,36,2,.393);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Dave Baldwin',1997,2014,'Colorado State',5,46,18,28,0,.391);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('James Baldwin',1922,1927,'Wake Forest',4,38,16,17,5,.487);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Jerry Baldwin',1999,2001,'Louisiana',3,33,6,27,0,.182);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('D.M. Balliet',1893,1901,'Purdue',4,34,22,10,2,.676);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Ted Bank',1935,1940,'Idaho',6,54,18,32,4,.370);
INSERT INTO headCoach(Name,year_from,year_to,Last_School,total_years,Games,Wins,Losses,Ties,Percent) VALUES ('Laurence Bankart',1910,1916,'Colgate',5,38,28,7,3,.776);

/* End head coaches */
