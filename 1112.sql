DROP table patient;


CREATE TABLE patient (
	 patientID	CHAR(10),
	 patientname	char(10),
	 phone	char(10),
	 email		VARCHAR(20),
	 age		char(10),
	 gender     char(10),

	PRIMARY KEY(patientID)
);


INSERT INTO doctor VALUES('00001', 'Daniel', '0406550011', '000011@gmail.com', '17','M');
INSERT INTO doctor VALUES('00002', 'Siri', '0406550012', '000012@gmail.com', '53','M');
INSERT INTO doctor VALUES('00003', 'Hao', '0406550013', '000013@gmail.com', '14','M');
INSERT INTO doctor VALUES('00004', 'Steven', '0406550014', '000014@gmail.com', '23','M');
INSERT INTO doctor VALUES('00005', 'Zoe', '0406550015', '000015@gmail.com', '31','F');
INSERT INTO doctor VALUES('00006', 'Lin', '0406550016', '000016@gmail.com', '58','F');
INSERT INTO doctor VALUES('00007', 'David', '0406550017', '000017@gmail.com', '32','M');
INSERT INTO doctor VALUES('00008', 'Jhon', '0406550018', '000018@gmail.com', '11','M');
INSERT INTO doctor VALUES('00009', 'Sky', '0406550019', '000019@gmail.com', '9','M');
INSERT INTO doctor VALUES('00010', 'Bear', '0406550110', '000110@gmail.com', '29','M');