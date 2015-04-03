
    CREATE TABLE Users (
    UserID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    user VARCHAR(500),
    passwordhash VARCHAR(500)
    )ENGINE=InnoDB;

    CREATE TABLE Balances (
    userbalanceid INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    cash INT NOT NULL DEFAULT 0,
    userid INT NOT NULL
    )ENGINE=InnoDB;



INSERT INTO Users (user, passwordhash) VALUES ('Jonny Manager','a722c63db8ec8625af6cf71cb8c2d939'); 
INSERT INTO Users (user, passwordhash) VALUES ('Billy Mark','06d80eb0c50b49a509b49f2424e8c805'); 
INSERT INTO Users (user, passwordhash) VALUES ('Katie Cameroon','d077f244def8a70e5ea758bd8352fcd8'); 
INSERT INTO Users (user, passwordhash) VALUES ('James Target','fca3ffea6534176432f58b5a22ed22e1'); 
INSERT INTO Users (user, passwordhash) VALUES ('Annie System','5046a43fd3f8184be864359e3d5c9bda'); 
INSERT INTO Users (user, passwordhash) VALUES ('Danny Blackhat','4f64a8f48c3724c0853d545a741cb963'); 

INSERT INTO Balances (cash, userid) VALUES (10000, 1);
INSERT INTO Balances (cash, userid) VALUES (10000, 2);
INSERT INTO Balances (cash, userid) VALUES (10000, 3);
INSERT INTO Balances (cash, userid) VALUES (10000, 4);
INSERT INTO Balances (cash, userid) VALUES (10000, 5);
INSERT INTO Balances (cash, userid) VALUES (0, 6);


passwords are


pass1

dog

cat

steps

lizard

reptilians