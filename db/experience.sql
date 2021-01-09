CREATE TABLE experience (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    title TEXT,
    timePeriod TEXT,
    imageRef TEXT,
    location TEXT,
    description TEXT
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

INSERT INTO experience(title, timePeriod, imageRef, location, description) VALUES ("MOCI Mission Operations Team Lead", "January 2020 - Present", "images/experiences/spoc.JPG", "UGA Small Satellite Research Laboratory", "As the Missions Operations Team Lead for MOCI, a 6U CubeSat at the University of Georgia's Small Satellite Research Laboratory, I get the opportunity to lead ground station software and system testing. Planning out Day-in-the-Life Tests, creating mission schedules, drawing up and maintainging the Concept of Operations document, and satellite communications are just a few of the things that I get the opportunity to do as I lead my team of students toward the desired end goal: mission success.");
INSERT INTO experience(title, timePeriod, imageRef, location, description) VALUES ("Simulation Manager", "April 2018 - January 2020", "images/experiences/stk.jpg", "UGA Small Satellite Research Laboratory", "Before being promoted to Mission Operations Team Lead, I spent my time working as the Small Satellite Research Laboratory's simulation manager. Using <a href='https://www.agi.com/products/stk'>AGI's Systems Tool Kit</a> (STK), I was able to plan orbital paths, run power simulations, and create satellite schedules. Seeing a need for the automation of many of these processes, I began the development of a custom Python Package. STKHelper, as it came to be called, utilizes the STK Python API to create a better user experience. It can be installed from the <a href='https://pypi.org/project/stkhelper/'>PyPi</a> or directly from <a href='https://github.com/cnmcferren/stkhelper'>GitHub.</a>");
INSERT INTO experience(title, timePeriod, imageRef, location, description) VALUES ("Skunk Works Intern in Advanced Algorithms", "May 2020 - August 2020", "images/experiences/f35lightning.jpg", "Lockheed Martin Corporation", "By working in the Skunk Works Advanced Algorithms Department within the Lockheed Martin Corperation, I was able to push my boundaries by diving into optimization of legacy code and GPU programming with Nvidia's CUDA C++ API. Using CUDA C++, I was able to substantially speed up Threat Detection processing times by parellizing the cacluations.");
INSERT INTO experience(title, timePeriod, imageRef, location, description) VALUES ("Researcher in the Department of Physics & Astronomy", "May 2016 - December 2016", "images/experiences/stars.jpg", "University of Georgia", "For two semesters, I worked as a highschool intern in the Department of Physics & Astronomy. Initially starting my work researching debris disk development in binary star systems, we later shifted our focus to age dating stars using Gyrochronology. Through this, I was able to gain experience with research by analyzing observatory images from the University of Hawaii and using Python accompanied with other softwares to estimate stellar rotational periods.");
INSERT INTO experience(title, timePeriod, imageRef, location, description) VALUES ("ID Technician and Lead Photographer", "May 2017 - Present", "images/experiences/uga.jpg", "University of Georgia", "For several years, I have worked as the senior ID technician and Lead Photographer at the University of Georgia OneCard Office. Aided in training new employees and operated as backstage photographer in the Miss University of Georgia Competition.");

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