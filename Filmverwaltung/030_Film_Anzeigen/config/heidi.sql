

CREATE DATABASE IF NOT EXISTS filmverwaltung;
USE filmverwaltung;

CREATE TABLE filme (
	id INT PRIMARY KEY AUTO_INCREMENT,
	titel VARCHAR(255),
	jahr YEAR,
	genre VARCHAR(255),
	vertrieb VARCHAR(255),
	fsk INT,
	budget BIGINT,
	laenge INT,
	cover VARCHAR(255)
	
	);
	
	SHOW COLUMNS FROM filme;
