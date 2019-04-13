CREATE TABLE ACC(
   Rk     INTEGER  NOT NULL  
  ,School VARCHAR(20) NOT NULL PRIMARY KEY
  ,Con_W  INTEGER  NOT NULL
  ,Con_L  INTEGER  NOT NULL
  ,Con_WL NUMERIC(4,3) NOT NULL
  ,W      INTEGER  NOT NULL
  ,L      INTEGER  NOT NULL
  ,WL     NUMERIC(4,3) NOT NULL
  ,Own    NUMERIC(4,1) NOT NULL
  ,Opp    NUMERIC(4,1) NOT NULL
  ,SRS    NUMERIC(4,1) NOT NULL
  ,SOS    NUMERIC(4,1) NOT NULL
  ,Notes  VARCHAR(61)
);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (1,'Virginia',16,2,.889,35,3,.921,71.4,56.1,25.5,10.1,'NCAA Tournament; Reg. Season Champion; NCAA FF; NCAA Champion');
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (1,'North Carolina',16,2,.889,29,7,.806,85.8,73.2,23.9,11.4,'NCAA Tournament; Reg. Season Champion');
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (3,'Duke',14,4,.778,32,6,.842,82.7,67.8,26.9,12.0,'NCAA Tournament; Conf. Tournament Champion');
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (4,'Florida State',13,5,.722,29,8,.784,74.9,67.2,18.0,10.3,'NCAA Tournament');
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (5,'Virginia Tech',12,6,.667,26,9,.743,73.5,62.1,19.3,7.8,'NCAA Tournament');
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (6,'Louisville',10,8,.556,20,14,.588,74.6,68.4,17.3,11.0,'NCAA Tournament');
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (6,'Syracuse',10,8,.556,20,14,.588,69.7,66.1,13.7,10.1,'NCAA Tournament');
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (8,'North Carolina State',9,9,.500,24,12,.667,80.1,71.3,14.9,6.2,NULL);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (8,'Clemson',9,9,.500,20,14,.588,68.8,63.9,13.8,9.0,NULL);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (10,'Georgia Tech',6,12,.333,14,18,.438,65.3,66.6,6.9,8.1,NULL);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (11,'Boston College',5,13,.278,14,17,.452,70.8,72.8,5.8,7.8,NULL);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (11,'Miami (FL)',5,13,.278,14,18,.438,71.8,71.1,9.4,8.7,NULL);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (13,'Wake Forest',4,14,.222,11,20,.355,68.4,75.6,1.2,8.5,NULL);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (14,'Notre Dame',3,15,.167,14,19,.424,68.7,69.0,8.0,8.3,NULL);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp,SRS,SOS,Notes) VALUES (14,'Pittsburgh',3,15,.167,14,19,.424,69.9,68.7,7.9,6.7,NULL);

