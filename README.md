#TestKit

TestKit is a small web application designed for mobile developers to aid in distributing test builds. It allows you to:

- Add testers
- Upload builds
- Assign testers to specific builds
- Email testers when new builds are available and allow them to install builds

TestKit also automatically handles iOS device UDIDs, so you don't have to explain to users how to find it!

Note that TestKit does not provide any sort of mobile SDK. It does not provide crash or log tracking, symbolication,
or any other such features. It is designed purely to aid in distributing builds and in particular getting that pesky
iOS UDID.

## Requirements

* PHP 5.1 or greater
* MySQL 4.1.2 or greater
* The mod_rewrite Apache module

## Installation

* Download TestKit and extract onto your web server.
* Open `application/config/config.php` in a text editor and update any settings (most importantly the passwords).
* If you changed the database username or password then also update them in createDatabase.sql.
* Run the createDatabase.sql script in phpMyAdmin or from the command-line.
* Open `.htaccess` in a text editor and update any settings.
* The system is ready to go!

## License

TestKit is released under the MIT license.


