CREATE TABLE tbl_customer(
    id INT PRIMARY KEY AUTO_INCREMENT,
    CustomerName VARCHAR(100),
    Address VARCHAR(100),
    City VARCHAR(100),
    PostalCode INT(64),
    Country VARCHAR(50)
);

CREATE TABLE rapport_journalie(
    id INT PRIMARY KEY AUTO_INCREMENT,
    Title VARCHAR(255),
    About VARCHAR(255),
    File_docs TEXT,
    Username VARCHAR(255),
    Created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)

CREATE TABLE Task_tbl(
    id INT PRIMARY KEY AUTO_INCREMENT,
    TaskName VARCHAR(255),
    Username VARCHAR(255),
    Created_at DATE
);