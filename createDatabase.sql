# Create the TestKit user. If you changed the username or password in
# config.php then they must also be updated here! Make sure that 'localhost'
# is replaced with the hostname of your MySQL server (or leave it as localhost
# if that is where MySQL is running, which is often the case).
CREATE USER 'testkit'@'localhost' IDENTIFIED BY 'password';

# Create the database.
CREATE DATABASE testkit_db;

# Grant privileges to the user. If you changed the username in config.php
# then it must also be updated here. Also update 'localhost' here if you need to.
GRANT ALL ON testkit_db.* TO 'testkit'@'localhost';
FLUSH PRIVILEGES;
USE testkit_db;

# testers table.
CREATE TABLE testers (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, email varchar(255) NOT NULL);

# devices table stores known device types.
CREATE TABLE devices (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, os_type enum('ios', 'android') NOT NULL, model varchar(255) NOT NULL);

# tester_devices table stores all devices that testers have registered.
CREATE TABLE tester_devices (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, tester_id int REFERENCES testers(id), udid varchar(255) NOT NULL, device_id int REFERENCES devices (id));

# apps table stores all applications.
CREATE TABLE apps (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, name varchar(255) NOT NULL, last_updated date, latest_build int REFERENCES builds(id));

# tester_apps stores all apps that testers are assigned to.
CREATE TABLE tester_apps (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, tester_id int NOT NULL REFERENCES testers(id), app_id int NOT NULL REFERENCES apps(id));

# builds table stores all build versions.
CREATE TABLE builds (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, version varchar(255) NOT NULL, app_id int NOT NULL REFERENCES apps(id), filename varchar(255) NOT NULL);

# tester_builds table stores the builds that testers have installed for a particular device.
CREATE TABLE tester_builds (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, tester_id int NOT NULL REFERENCES testers(id), device_id int NOT NULL REFERENCES devices(id), build_id int NOT NULL REFERENCES builds(id), status enum('installed', 'email_opened', 'email_sent', 'link_clicked') NOT NULL);

