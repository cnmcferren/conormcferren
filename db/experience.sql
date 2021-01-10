CREATE TABLE experience (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    link TEXT
);

CREATE TABLE skills (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title TEXT,
    rating INT
);

CREATE TABLE tools (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title TEXT,
    rating INT
);

CREATE TABLE languages (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title TEXT,
    rating INT
);

INSERT INTO experience(link) VALUES ("ssrl.php");
INSERT INTO experience(link) VALUES ("lockheedmartin.php");
INSERT INTO experience(link) VALUES ("astrophysics-researcher.php");
INSERT INTO experience(link) VALUES ("onecardoffice.php");

INSERT INTO skills(title, rating) VALUES ("C++", 5);
INSERT INTO skills(title, rating) VALUES ("C", 5);
INSERT INTO skills(title, rating) VALUES ("Java", 3);
INSERT INTO skills(title, rating) VALUES ("Python", 5);
INSERT INTO skills(title, rating) VALUES ("Fortran", 3);
INSERT INTO skills(title, rating) VALUES ("Javascript", 3);
INSERT INTO skills(title, rating) VALUES ("HTML", 4);
INSERT INTO skills(title, rating) VALUES ("CSS", 4);
INSERT INTO skills(title, rating) VALUES ("MySQL", 3);
INSERT INTO skills(title, rating) VALUES ("CUDA C++", 4);
INSERT INTO skills(title, rating) VALUES ("VBA", 3);
INSERT INTO skills(title, rating) VALUES ("Swift", 3);
INSERT INTO skills(title, rating) VALUES ("MIPS", 3);
INSERT INTO skills(title, rating) VALUES ("Bash", 5);
INSERT INTO skills(title, rating) VALUES ("GPU Programming",4);
INSERT INTO skills(title, rating) VALUES ("Object Oriented Programming", 5);
INSERT INTO skills(title, rating) VALUES ("Ham Radio", 5);
INSERT INTO skills(title, rating) VALUES ("DMR", 4);
INSERT INTO skills(title, rating) VALUES ("Web Development", 3);
INSERT INTO skills(title, rating) VALUES ("Ground Station Software", 4);
INSERT INTO skills(title, rating) VALUES ("Ground Station Hardware", 4);
INSERT INTO skills(title, rating) VALUES ("Electronics", 3);
INSERT INTO skills(title, rating) VALUES ("Photography", 5);

INSERT INTO tools(title, rating) VALUES ("MacOS", 5);
INSERT INTO tools(title, rating) VALUES ("Windows", 5);
INSERT INTO tools(title, rating) VALUES ("Linux", 5);
INSERT INTO tools(title, rating) VALUES ("Ubuntu", 5);
INSERT INTO tools(title, rating) VALUES ("AGI's Systems Tool Kit", 5);
INSERT INTO tools(title, rating) VALUES ("PyPI", 5);
INSERT INTO tools(title, rating) VALUES ("Git", 4);
INSERT INTO tools(title, rating) VALUES ("GNURadio", 4);
INSERT INTO tools(title, rating) VALUES ("Microsoft Excel", 4);
INSERT INTO tools(title, rating) VALUES ("Visual Studio", 4);
INSERT INTO tools(title, rating) VALUES ("CMake", 4);
INSERT INTO tools(title, rating) VALUES ("Adobe Photoshop", 4);
INSERT INTO tools(title, rating) VALUES ("Autodesk Maya", 4);
INSERT INTO tools(title, rating) VALUES ("Blender", 5);
INSERT INTO tools(title, rating) VALUES ("XCode", 3);
INSERT INTO tools(title, rating) VALUES ("Ham Radio", 5);
INSERT INTO tools(title, rating) VALUES ("Yamcs", 4);
INSERT INTO tools(title, rating) VALUES ("Ball Aerosapce COSMOS", 4);
INSERT INTO tools(title, rating) VALUES ("Gpredict", 4);

INSERT INTO languages(title, rating) VALUES ("English", 5);
INSERT INTO languages(title, rating) VALUES ("German (Elementary)", 3);