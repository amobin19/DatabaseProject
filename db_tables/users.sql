--
-- Employees Database for SQL Homework
-- CS 4750: Database Systems
-- 
-- Import into phpMyAdmin in the following way:
--   1. Log into phpMyAdmin
--   2. Click on your database name on the left-hand side
--   3. Go to the "SQL" table
--   4. Copy all of the code in this file, paste it into the SQL tab. Then, click "Go"
--   5. Click back onto your database name and check the three tables were added
--   6. (Sanity check) Execute a simple query in the "SQL" tab to ensure tables are there
--

CREATE TABLE IF NOT EXISTS Users ( 
	userID INT NOT NULL PRIMARY KEY, 
	name VARCHAR(10) NOT NULL,
	password VARCHAR(15) NOT NULL, 
	email VARCHAR (25), 
	birthday DATE NOT NULL,
	adminn BIT NOT NULL 
);


-- Inserting values into the tables 
INSERT INTO Users VALUES (1, 'Smith' ,  'thisissecure'    , "hi@hi.com", '17 DEC 1997',0);
INSERT INTO Users VALUES (2, 'Jones' ,  'p@$$w0rd123'    , "yo@yo.com", '4 FEB 1997',0);
INSERT INTO Users VALUES (3, 'Miller' ,  'p@$$w0rd456'    , "noodle@gmail.com", '3 JUN 1983',0);
INSERT INTO Users VALUES (4, 'Baller' ,  'bigb@ller!'    , "bigballer@bbb.com", '23 NOV 1969',0);
INSERT INTO Users VALUES (5, 'Porter' ,  'iloveotto'    , "porter@otto.com", '1 JAN 1987',0);
INSERT INTO Users VALUES (6, 'Thillairajah' ,  'p@$$w0rd789'    , "bet@hello.com", '9 MAR 1971',0);
INSERT INTO Users VALUES (7, 'Myers' ,  'catzrCOOL'    , "nugget@yahoo.com", '31 OCT 1979',0);
INSERT INTO Users VALUES (8, 'Admin', 'admin', 'admin@admin.com', '30 OCT 1979',1);
