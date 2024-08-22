CREATE DATABASE timetable_db;

USE timetable_db;

-- Table for branches
CREATE TABLE branches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    branch_name VARCHAR(100) NOT NULL
);

-- Table for divisions
CREATE TABLE divisions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    branch_id INT,
    division_name VARCHAR(100) NOT NULL,
    FOREIGN KEY (branch_id) REFERENCES branches(id)
);

-- Table for timetable
CREATE TABLE timetable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    branch_id INT,
    division_id INT,
    year INT,
    period_number INT,
    status VARCHAR(50),
    FOREIGN KEY (branch_id) REFERENCES branches(id),
    FOREIGN KEY (division_id) REFERENCES divisions(id)
);

-- Insert sample data for branches
INSERT INTO branches (branch_name) VALUES ('CSE'), ('RNA'), ('AIML'), ('MECH'), ('CIVIL'), ('ENTC');

-- Insert sample data for divisions (example)
INSERT INTO divisions (branch_id, division_name) VALUES 
(1, 'A'), (1, 'B'), (1, 'C'), 
(2, 'A'), (2, 'B'), 
(3, 'A'), 
(4, 'A'), 
(5, 'A'), 
(6, 'A');
