CREATE DATABASE blog_ipb23;

USE blog_ipb23;

CREATE TABLE post (
id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content VARCHAR (1000)
);

INSERT INTO post (content)
VALUES 
("Pirmais bloga ieraksts"),
("Otrais bloga ieraksts"),
("kā pagatavot piccu");

SELECT * FROM posts;