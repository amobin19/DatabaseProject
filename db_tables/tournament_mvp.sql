CREATE TABLE IF NOT EXISTS tournament_mvp(
   Season INTEGER  NOT NULL PRIMARY KEY 
  ,Player VARCHAR(41) NOT NULL
  ,School VARCHAR(24) NOT NULL
  ,G      INTEGER  NOT NULL
  ,GS     INTEGER 
  ,PTS    INTEGER  NOT NULL
  ,TRB    INTEGER 
  ,AST    INTEGER 
  ,STL    INTEGER 
  ,BLK    INTEGER 
  ,FG     NUMERIC(4,3)
  ,2P     NUMERIC(4,3)
  ,3P     NUMERIC(4,3)
  ,FT     NUMERIC(5,3) NOT NULL
  ,PTS    NUMERIC(4,1) NOT NULL
  ,TRB    NUMERIC(4,1)
  ,AST    NUMERIC(4,1)
  ,STL    NUMERIC(3,1)
  ,BLK    NUMERIC(3,1)
);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2019,'Kyle Guy','Virginia',6,6,86,31,9,3,1,.349,.500,.264,.824,14.3,5.2,1.5,0.5,0.2);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2018,'Donte DiVincenzo','Villanova',6,0,90,33,22,2,3,.547,.632,.500,.714,15.0,5.5,3.7,0.3,0.5);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2017,'Joel Berry','North Carolina',6,6,83,14,19,8,1,.304,.375,.255,.622,13.8,2.3,3.2,1.3,0.2);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2016,'Ryan Arcidiacono','Villanova',6,6,95,13,18,7,0,.660,.714,.615,.944,15.8,2.2,3.0,1.2,0.0);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2015,'Tyus Jones','Duke',6,6,78,19,27,10,1,.424,.452,.353,.917,13.0,3.2,4.5,1.7,0.2);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2014,'Shabazz Napier','Connecticut',6,6,127,33,27,15,0,.463,.462,.465,.939,21.2,5.5,4.5,2.5,0.0);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2013,'Luke Hancock','Louisville',6,0,69,10,9,6,2,.633,.727,.579,.769,11.5,1.7,1.5,1.0,0.3);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2012,'Anthony Davis','Kentucky',6,6,82,74,18,7,29,.510,.532,.000,.744,13.7,12.3,3.0,1.2,4.8);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2011,'Kemba Walker','Connecticut',6,6,141,36,34,9,1,.402,.464,.289,.898,23.5,6.0,5.7,1.5,0.2);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2010,'Kyle Singler','Duke',6,6,108,44,16,5,4,.443,.457,.424,.800,18.0,7.3,2.7,0.8,0.7);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2009,'Wayne Ellington','North Carolina',6,6,115,34,16,2,2,.550,.563,.531,.769,19.2,5.7,2.7,0.3,0.3);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2008,'Mario Chalmers','Kansas',6,6,89,19,18,17,2,.492,.567,.419,.762,14.8,3.2,3.0,2.8,0.3);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2007,'Corey Brewer','Florida',6,6,95,33,13,10,6,.448,.538,.375,.816,15.8,5.5,2.2,1.7,1.0);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2006,'Joakim Noah','Florida',6,6,97,57,19,8,29,.550,.559,.000,.838,16.2,9.5,3.2,1.3,4.8);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2005,'Sean May','North Carolina',6,6,134,64,11,5,5,.667,.667,NULL,.769,22.3,10.7,1.8,0.8,0.8);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2004,'Emeka Okafor','Connecticut',6,6,81,68,9,5,13,.571,.571,NULL,.567,13.5,11.3,1.5,0.8,2.2);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2003,'Carmelo Anthony','Syracuse',6,6,121,59,15,11,4,.475,.474,.476,.630,20.2,9.8,2.5,1.8,0.7);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2002,'Juan Dixon','Maryland',6,6,155,23,19,12,0,.542,.566,.512,.879,25.8,3.8,3.2,2.0,0.0);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2001,'Shane Battier','Duke',6,6,135,61,14,12,16,.477,.591,.357,.844,22.5,10.2,2.3,2.0,2.7);
INSERT INTO tournament_mvp(Season,Player,School,G,GS,PTS,TRB,AST,STL,BLK,FG,2P,3P,FT,PTS,TRB,AST,STL,BLK) VALUES (2000,'Mateen Cleaves','Michigan State',6,6,85,12,27,7,2,.418,.400,.444,.810,14.2,2.0,4.5,1.2,0.3);
