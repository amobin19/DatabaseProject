CREATE TABLE teams(
   Rank       NUMERIC(5,0) NOT NULL
  ,Team       VARCHAR(20) NOT NULL PRIMARY KEY
  ,W          NUMERIC(5,0) NOT NULL
  ,L          NUMERIC(5,0) NOT NULL
  ,Per        NUMERIC(5,3) NOT NULL
  ,Ovr_W      NUMERIC(5,0) NOT NULL
  ,Ovr_L      NUMERIC(5,0) NOT NULL
  ,Ovr_Per    NUMERIC(5,3) NOT NULL
  ,PPG        NUMERIC(5,1) NOT NULL
  ,Opp_PPG    NUMERIC(5,1) NOT NULL
  ,Rating     NUMERIC(5,1) NOT NULL
  ,Sched      NUMERIC(5,1) NOT NULL
);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (1,'Virginia',13,2,.867,25,2,.926,71.8,54.3,26.5,9.0);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (1,'North Carolina',13,2,.867,23,5,.821,87.3,73.1,25.3,11.1);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (3,'Duke',12,3,.800,24,4,.857,85.0,67.3,29.6,11.9);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (4,'Virginia Tech',11,5,.688,22,6,.786,74.5,61.5,20.1,7.1);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (5,'Florida State',10,5,.667,22,6,.786,76.2,67.6,17.5,8.9);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (6,'Syracuse',9,6,.600,18,10,.643,70.3,65.2,15.0,9.8);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (7,'Louisville',9,7,.563,18,11,.621,74.9,67.9,18.0,11.0);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (8,'North Carolina State',8,7,.533,20,8,.714,82.3,71.3,16.8,5.8);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (9,'Clemson',7,8,.467,17,11,.607,69.3,63.8,14.6,9.1);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (10,'Boston College',5,10,.333,14,13,.519,71.7,72.0,7.3,7.6);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (11,'Miami (FL)',4,11,.267,12,15,.444,72.6,70.3,10.5,8.3);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (11,'Wake Forest',4,11,.267,11,16,.407,69.1,75.9,1.1,7.9);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (13,'Georgia Tech',4,12,.250,12,17,.414,64.7,66.0,7.3,8.6);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (14,'Notre Dame',3,12,.200,13,15,.464,70.0,69.1,9.1,8.2);
INSERT INTO teams(Rank,Team,W,L,Per,Ovr_W,Ovr_L,Ovr_Per,PPG,Opp_PPG,Rating,Sched) VALUES (15,'Pittsburgh',2,13,.133,12,16,.429,71.4,68.6,9.0,6.3);
