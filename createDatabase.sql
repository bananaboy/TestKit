# Create the TestKit user. If you changed the username or password in
# config.php then they must also be updated here!
CREATE USER 'testkit'@'%' IDENTIFIED BY 'password';

# Create the database.
CREATE DATABASE testkit_db;

# Grant privileges to the user. If you changed the username in config.php
# then it must also be updated here.
GRANT ALL ON testkit_db.* TO 'testkit'@'%';
FLUSH PRIVILEGES;
USE testkit_db;

# users table.
CREATE TABLE users (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, email varchar(255) NOT NULL);

# devices table stores known device types.
CREATE TABLE devices (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, os_type enum('ios', 'android') NOT NULL, model varchar(255) NOT NULL);

# user_devices table stores all devices that users have registered.
CREATE TABLE user_devices (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id int REFERENCES users(id), udid varchar(255) NOT NULL, device_id int REFERENCES devices (id));

# apps table stores all applications.
CREATE TABLE apps (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, name varchar(255) NOT NULL);

# builds table stores all build versions.
CREATE TABLE builds (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, version varchar(255) NOT NULL, app_id int NOT NULL REFERENCES apps(id), filename varchar(255) NOT NULL);

# user_builds table stores the builds that users have installed for a particular device.
CREATE TABLE user_builds (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id int REFERENCES users(id), device_id int REFERENCES devices(id), build_id int REFERENCES builds(id));

