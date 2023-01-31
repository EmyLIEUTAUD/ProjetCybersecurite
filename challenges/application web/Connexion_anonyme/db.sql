DROP DATABASE IF EXISTS `inject`;
CREATE DATABASE IF NOT EXISTS inject;
USE inject;
DROP TABLE IF EXISTS `users`;
CREATE TABLE users (
id int(11) NOT NULL AUTO_INCREMENT,
username varchar(64) NOT NULL,
password varchar(64) NOT NULL,
email varchar(64) NOT NULL,
PRIMARY KEY (id),
UNIQUE KEY username (username)
);
INSERT INTO inject.users (username,password,email)
VALUES('tarena',md5('admin'),'tarena@admin.com');