
#!/bin/bash
mysql -u root <<CREATE_TEST_DB
CREATE USER 'admin'@'localhost' IDENTIFIED BY '123456789';
CREATE DATABASE `wordpress-db`;
GRANT ALL PRIVILEGES ON `wordpress-db`.* TO "admin"@"localhost";
FLUSH PRIVILEGES;
CREATE_TEST_DB

