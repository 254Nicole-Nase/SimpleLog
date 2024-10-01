CREATE TABLE users (
                       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       username VARCHAR(30) NOT NULL UNIQUE,
                       email VARCHAR(50) NOT NULL UNIQUE,
                       password VARCHAR(255) NOT NULL,
                       reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
