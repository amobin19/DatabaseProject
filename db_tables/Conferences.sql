CREATE TABLE ACC(
   Rk      INTEGER  NOT NULL
  ,School  VARCHAR(20) NOT NULL PRIMARY KEY
  ,Con_W   INTEGER  NOT NULL
  ,Con_L   INTEGER  NOT NULL
  ,Con_WL  NUMERIC(4,3) NOT NULL
  ,W       INTEGER  NOT NULL
  ,L       INTEGER  NOT NULL
  ,WL      NUMERIC(4,3) NOT NULL
  ,Own     NUMERIC(4,1) NOT NULL
  ,Opp     NUMERIC(4,1) NOT NULL
  ,SRS     NUMERIC(4,1)
  ,SOS     NUMERIC(4,1)
  ,Notes   VARCHAR(30)
);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (1,'North Carolina',13,2,.867,23,5,.821,87.3,73.1);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (2,'Virginia',12,2,.857,24,2,.923,71.5,54.5);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (3,'Duke',12,3,.800,24,4,.857,85.0,67.3);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (4,'Virginia Tech',11,5,.688,22,6,.786,74.5,61.5);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (5,'Florida State',10,5,.667,22,6,.786,76.2,67.6);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (6,'Louisville',9,6,.600,18,10,.643,75.5,67.9);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (6,'Syracuse',9,6,.600,18,10,.643,70.3,65.2);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (8,'North Carolina State',8,7,.533,20,8,.714,82.3,71.3);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (9,'Clemson',6,8,.429,16,11,.593,69.6,64.3);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (10,'Boston College',4,10,.286,13,13,.500,71.9,72.5);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (11,'Miami (FL)',4,11,.267,12,15,.444,72.6,70.3);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (11,'Georgia Tech',4,11,.267,12,16,.429,65.2,65.4);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (11,'Wake Forest',4,11,.267,11,16,.407,69.1,75.9);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (14,'Notre Dame',3,12,.200,13,15,.464,70.0,69.1);
INSERT INTO ACC(Rk,School,Con_W,Con_L,Con_WL,W,L,WL,Own,Opp) VALUES (15,'Pittsburgh',2,12,.143,12,15,.444,72.3,68.9);
