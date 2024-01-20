CREATE TABLE users (
    id INT(20) NOT NULL AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    pwd VARCHAR(225) NOT NULL,
    email VARCHAR(225) NOT NULL,
    about TEXT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
)

-- DUMP DATA
INSERT INTO users (username, pwd, email) VALUES ('admin', 'admin', 'admin@mail.com');