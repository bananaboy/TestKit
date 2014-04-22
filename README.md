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

TestKit itself is released under the MIT license.

TestKit uses Twitter Bootstrap, which is also released under the MIT license. That license is reproduced below:

The MIT License (MIT)

Copyright (c) 2011-2014 Twitter, Inc

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.


