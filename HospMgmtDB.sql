CREATE DATABASE IF NOT EXISTS HospMgmt;
USE HospMgmt;

DROP TABLE IF EXISTS doctor;

CREATE TABLE doctor (
	 doctorId int(15) NOT NULL AUTO_INCREMENT,
	 name varchar(60) NOT NULL,
	 phone varchar(15) NOT NULL,
	 email varchar(60) NOT NULL,
	 specialty varchar(30) NOT NULL,
	 password varchar(255) NOT NULL,

	PRIMARY KEY(doctorId)
);

ALTER TABLE doctor AUTO_INCREMENT=1001;

INSERT INTO doctor(name, phone, email, specialty, password) VALUES('James D', '0406550001', 'jamesD@gmail.com', 'Orthopedics',MD5('password'));
INSERT INTO doctor(name, phone, email, specialty, password) VALUES('Sue T', '0406550002', 'sueT@gmail.com', 'Internal Medicine',MD5('password'));
INSERT INTO doctor(name, phone, email, specialty, password) VALUES('Brandon F', '0406550003', 'brandonF@gmail.com', 'Pediatrics',MD5('password'));
INSERT INTO doctor(name, phone, email, specialty, password) VALUES('Adam M', '0406550004', 'AdamM@gmail.com', 'Ophtalmology',MD5('password'));
INSERT INTO doctor(name, phone, email, specialty, password) VALUES('Bob P', '0406550005', 'BobP@gmail.com', 'Dentistry',MD5('password'));
INSERT INTO doctor(name, phone, email, specialty, password) VALUES('Jenny R', '0406550006', 'JennyR@gmail.com', 'Orthopedics',MD5('password'));
INSERT INTO doctor(name, phone, email, specialty, password) VALUES('Ming H', '0406550007', 'MingH@gmail.com', 'Internal Medicine',MD5('password'));
INSERT INTO doctor(name, phone, email, specialty, password) VALUES('Yin J', '0406550008', 'YinJ@gmail.com', 'Pediatrics',MD5('password'));
INSERT INTO doctor(name, phone, email, specialty, password) VALUES('Cathy C', '0406550009', 'CathyC@gmail.com', 'Ophtalmology',MD5('password'));
INSERT INTO doctor(name, phone, email, specialty, password) VALUES('Ray M', '0406550010', 'RayM@gmail.com', 'Dentistry',MD5('password'));

DROP TABLE IF EXISTS patient;

CREATE TABLE patient (
	 patientId int(5) NOT NULL AUTO_INCREMENT,
	 name varchar(60) NOT NULL,
	 phone varchar(15) NOT NULL,
	 email varchar(60) NOT NULL,
	 age int(3),
	 gender varchar(3),
	 password varchar(255) NOT NULL,

	PRIMARY KEY(patientId)
);

ALTER TABLE patient AUTO_INCREMENT=2001;

INSERT INTO patient(name, phone, email, age, gender, password) VALUES('Daniel R', '0406550011', 'DanielR@gmail.com', 24,'M', MD5('password'));
INSERT INTO patient(name, phone, email, age, gender, password) VALUES('Samuel D', '0406550012', 'SamuelD@gmail.com', 53,'M', MD5('password'));
INSERT INTO patient(name, phone, email, age, gender, password) VALUES('Hao Z', '0406550013', 'HaoZ@gmail.com', 41,'M', MD5('password'));
INSERT INTO patient(name, phone, email, age, gender, password) VALUES('Steve S', '0406550014', 'SteveS@gmail.com', 23,'M', MD5('password'));
INSERT INTO patient(name, phone, email, age, gender, password) VALUES('Zoe I', '0406550015', 'ZoeI@gmail.com', 31,'F', MD5('password'));
INSERT INTO patient(name, phone, email, age, gender, password) VALUES('Lin Y', '0406550016', 'LinY@gmail.com', 58,'F', MD5('password'));
INSERT INTO patient(name, phone, email, age, gender, password) VALUES('David L', '0406550017', 'DavidL@gmail.com', 32,'M', MD5('password'));
INSERT INTO patient(name, phone, email, age, gender, password) VALUES('John L', '0406550018', 'JohnL@gmail.com', 19,'M', MD5('password'));
INSERT INTO patient(name, phone, email, age, gender, password) VALUES('Paul M', '0406550019', 'PaulM@gmail.com', 41,'M', MD5('password'));
INSERT INTO patient(name, phone, email, age, gender, password) VALUES('Yoko O', '0406550110', 'YokoO@gmail.com', 29,'M', MD5('password'));


DROP TABLE IF EXISTS appointment;

CREATE TABLE appointment (
	 appointmentId int(5) NOT NULL AUTO_INCREMENT,
	 doctorId int(5) NOT NULL,
	 patientId int(5) NOT NULL,
	 appointmentDate datetime NOT NULL,
	 room varchar(255),
	 
	PRIMARY KEY(appointmentId)
);

ALTER TABLE appointment AUTO_INCREMENT=15001;

INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1001, 2001, '2018-09-28 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1001, 2001, '2018-09-21 10:00:00', 'A55');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1001, 2001, '2018-09-14 09:30:00', 'A60');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1001, 2001, '2018-10-07 09:30:00', 'B50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1001, 2001, '2018-10-28 09:30:00', 'S4');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1001, 2001, '2018-10-29 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1001, 2001, '2018-10-29 09:35:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1001, 2001, '2018-10-29 19:40:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1002, 2001, '2018-09-28 09:30:00', 'S1');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1002, 2001, '2018-11-07 09:30:00', 'C502');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1003, 2002, '2018-09-28 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1003, 2003, '2018-09-28 09:30:00', 'B80');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1004, 2004, '2018-09-28 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1004, 2005, '2018-09-28 09:30:00', 'S2');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1005, 2006, '2018-09-28 09:30:00', 'B70');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1005, 2007, '2018-09-28 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1006, 2008, '2018-09-28 09:30:00', 'C20');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1006, 2009, '2018-09-28 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1007, 2010, '2018-09-28 09:30:00', 'A65');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1007, 2002, '2018-09-28 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1008, 2003, '2018-09-28 09:30:00', 'A102');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1008, 2004, '2018-09-28 09:30:00', 'A102');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1009, 2005, '2018-09-28 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1009, 2006, '2018-09-28 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1010, 2007, '2018-09-28 09:30:00', 'A50');
INSERT INTO appointment(doctorId, patientId, appointmentDate, room) VALUES(1010, 2009, '2018-09-28 09:30:00', 'S2');