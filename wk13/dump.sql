CREATE DATABASE IF NOT EXISTS comp3134_lab13;
USE comp3134_lab13;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  email VARCHAR(100),
  firstname VARCHAR(50),
  lastname VARCHAR(50),
  active TINYINT(1)
);

INSERT INTO users (username, email, firstname, lastname, active) VALUES
('user1', 'user1@example.com', 'Alice', 'Smith', 1),
('user2', 'user2@example.com', 'Bob', 'Jones', 1),
('user3', 'user3@example.com', 'Carol', 'Taylor', 1),
('user4', 'user4@example.com', 'David', 'Brown', 1),
('user5', 'user5@example.com', 'Eve', 'Davis', 1),
('benuser', 'ben@example.com', 'Ben', 'Hacker', 0);
