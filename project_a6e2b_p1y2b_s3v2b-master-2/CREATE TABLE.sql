CREATE TABLE GraduatedStudent (
    User No          	Char(10) PRIMARY KEY,
    Name              	Char(20),
    Age                 Integer,
    Employment Status 	Boolean,
    Contact Information	Char (20));
 
CREATE TABLE TranscriptID (
    Transcript ID  		Char(10) PRIMARY KEY,
    Average          	Integer,
    FOREIGN KEY (User No) REFERENCES Graduated Student);
 
CREATE TABLE Clubs (
    Club ID           	Char(10) PRIMARY KEY,
    Club Name           Char(20),
    Club Type	        Char (20));
 
CREATE TABLE ParticipatedIn (
    PRIMARY KEY (Club ID, User No),
    FOREIGN KEY (Club ID) REFERENCES Clubs,
    FOREIGN KEY (User No) REFERENCES Graduated Student);
 
CREATE TABLE Country (
    Country   Char(20) PRIMARY KEY);
 
CREATE TABLE LivesIn (
    PRIMARY KEY (Country , User No),
    FOREIGN KEY (Country ) REFERENCES Country,
    FOREIGN KEY (User No) REFERENCES Graduated Student);
 
CREATE TABLE CertificationofSkills (
    Certification ID            Char(20) PRIMARY KEY,
    Certificate Name         	Char(20),
    FOREIGN KEY (Skill Name) REFERENCES Skills);
 
CREATE TGMAIABLE Skills(
    Skill Name      	Char(20) PRIMARY KEY);
 
CREATE TABLE HasGraduatedStudentSkills(
    PRIMARY KEY (Skill name, User No),
    FOREIGN KEY (Skill name) REFERENCES Skills,
    FOREIGN KEY (User No) REFERENCES Graduated Student);
 
 
CREATE TABLE Employment Preference(
    Preference Rank		    Integer,
    Industry Preference		Char(20),
    PRIMARY KEY (User No, Preference Rank),
    FOREIGN KEY (User No) REFERENCES Graduated Student);
 
CREATE TABLE University(
    Institution Number      Char (20) PRIMARY KEY,
    Name                    Char (20));
 
CREATE TABLE WentTo (
    Student No    		CHAR (10),
    PRIMARY KEY (User No, Institution No),
    FOREIGN KEY (User No) REFERENCES Graduated Student,
    FOREIGN KEY (Institution No) REFERENCES University);
 
CREATE TABLE Degree(
    Degree code                 CHAR(10) PRIMARY KEY,
    Degree Name              	CHAR(20))
 
CREATE TABLE GraduatedWith(
    PRIMARY KEY (User No, Institution No, Degree code),
    FOREIGN KEY (User No) REFERENCES Graduated Student,
    FOREIGN KEY (Insitution No) REFERENCES University,
    FOREIGN KEY (Degree Code) REFERENCES Degree);
 
CREATE TABLE Postgraduate degree(
    Research focus area          CHAR (20),
    PRIMARY KEY (Degree Code),
    FOREIGN KEY (Degree code) REFERENCES Degree);

CREATE TABLE Undergraduate degree(
    Specialization              CHAR (20),
    Concentration             	CHAR (20),
    Minor                       CHAR (20),
    PRIMARY KEY (Degree Code),
    FOREIGN KEY (Degree code) REFERENCES Degree);
