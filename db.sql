Create database project1;

use project1;

CREATE TABLE student(
	roll int(5) PRIMARY KEY auto_increment,
	name varchar(30) NOT null,
	dob date,
	mobile bigint(10) NOT NULL unique
);

INSERT INTO student(roll, name, dob, mobile) VALUES
(101, 'Aditya', '1998-11-27', 9876543254), 
(102, 'Shubham', '1997-10-30', 8793469472);