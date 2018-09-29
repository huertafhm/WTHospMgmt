DROP table doctor;


CREATE TABLE doctor (
	 doctorID	CHAR(10),
	 doctorname	char(10),
	 phone	char(10),
	 email		VARCHAR(20),
	 age		char(10),
	 gender     char(10),

	PRIMARY KEY(doctorID)
);


INSERT INTO doctor VALUES('00001', 'James', '0406550001', '000001@gmail.com', '30','M');
INSERT INTO doctor VALUES('00002', 'Tea', '0406550002', '000002@gmail.com', '31','F');
INSERT INTO doctor VALUES('00003', 'Buddy', '0406550003', '000003@gmail.com', '42','M');
INSERT INTO doctor VALUES('00004', 'Adam', '0406550004', '000004@gmail.com', '44','M');
INSERT INTO doctor VALUES('00005', 'Bob', '0406550005', '000005@gmail.com', '46','M');
INSERT INTO doctor VALUES('00006', 'Jenny', '0406550006', '000006@gmail.com', '51','F');
INSERT INTO doctor VALUES('00007', 'Ming', '0406550007', '000007@gmail.com', '33','M');
INSERT INTO doctor VALUES('00008', 'Yin', '0406550008', '000008@gmail.com', '31','F');
INSERT INTO doctor VALUES('00009', 'Cathy', '0406550009', '000009@gmail.com', '55','F');
INSERT INTO doctor VALUES('00010', 'Ray', '0406550010', '000010@gmail.com', '29','M');