CREATE TABLE venue(
   Name        VARCHAR(30) NOT NULL PRIMARY KEY
  ,City        VARCHAR(15) NOT NULL
  ,State		   VARCHAR(2) NOT NULL
  ,Team        VARCHAR(20) NOT NULL
  ,Capacity    INTEGER 
  ,Year_Opened INTEGER
);

INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('John Paul Jones Arena', 'Charlottesville', 'VA', 'University of Virginia', 14593, 2008);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Dean Smith Center', 'Chapel Hill', 'NC', 'University of North Carolina', 21750, 1986);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Cameron Indoor Stadium', 'Durham', 'NC', 'Duke University', 9314, 1940);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Cassell Coliseum', 'Blacksburg', 'VA', 'Virginia Tech', 10052, 1962);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Donald L. Tucker Civic Center', 'Tallahassee', 'Fl', 'Florida State University', 12041, 1981);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Carrier Dome', 'Syracuse', 'NY', 'Syracuse University', 49250, 1980);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('KFC Yum! Center', 'Louisville', 'KY', 'University of Louisville', 22090, 2010);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('PNC Arena', 'Raleigh', 'NC', 'North Carolina State University', 19722, 1999);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Littlejohn Coliseum', 'Clemson', 'SC', 'Clemson University', 10325, 1968);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Silvio O. Conte Forum', 'Chestnut Hil', 'MA', 'Boston College', 8606, 1988);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Watsco Center', 'Coral Gables', 'FL', 'University of Miami', 7972, 2003);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Lawrence Joel Veterans Memorial Coliseum', 'Winston-Salem', 'NC', 'Wake Forest University', 14665, 1989);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Hank McCamish Pavilion', 'Atlanta', 'GA', 'Georgia Tech', 8600, 1956);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Edmund P. Joyce Center', 'Notre Dame', 'IN', 'University of Notre Dame', 9149, 1968);
INSERT INTO venue(Name,City,State,Team,Capacity,Year_Opened) VALUES ('Petersen Events Center', 'Pittsburgh', 'PA', 'University of Pittsburgh', 12508, 2002);
