# LogIn And SignUp using PHP and MySQL
A simple LogIn and SignUp system made using PHP on the server side and MySQL for storing client's database consisting of their username, email and passoword using password_hash() function using a strong one-way hashing algorithm.

## Setup
- Start the Apache and MySQL server from the XAMPP control panel.
- Extract the downloaded git project folder in the htdocs folder(present in the XAMPP folder). Generally during installation the XAMPP is installed in the C: Drive of your computer.
- A common file structure might looks like this:

```
C:
|----XAMPP
     |----htdocs
          |----login-signup-php-mysql-main
               |----styles
                    |----index.css
               |----database.php
               |----login.php
               |----logout.php
               |----signup.php
               |----process_signup.php
               |----signup_success.php
               |----index.php
```

- To create client's database go to: <http://localhost/phpmyadmin>

- Start by creating a new database from the left sidebar named as 'login_db' with the default server connection collation settings.

- After creating the database create a table named as 'user' with 4 columns for id, username, email and password_hash.

- The first column is 'id' which is an integer. Check the Auto Increment checkbox which will also make this field the primary key.

- The next column will be for the 'username' and we'll make this a 128 character VARCHAR.

- The next column is for the 'email' which we'll make a 255 character VARCHAR. We will also specify a unique index on this column which will ensure no two field can have same values.

- The next column will be of 'password_hash' which we'll make a 255 character VARCHAR.

**_NOTE:_** It is recommended to store the password_hash in a 255 character VARCHAR as the one-way hashing algorithm is designed to change over time as new and stronger algorithms are added to PHP. For that reason, the length of the result from using this identifier can change over time. Therefore, it is recommended to store the result in a database column that can expand beyond 60 characters.

- For more information refer to the PHP password_hash documentation: <https://www.php.net/manual/en/function.password-hash.php>

- After creating the database table you may test it by visiting this link in your browser: <http://localhost/login-signup-using-php-mysql-main/>

## Features
- The password is stored as a password hash instead of clear text. This is because if the attacker gets hold of the database they then have a list of login emails and passowords which they can use to login into the site. Also some people use the same password for different sites which will allow attacker to gain access to other sites. The password\_hash() function uses various different algorithms but its simplest just to use the default. For more information refer to PHP password_hash() function docs: <https://www.php.net/manual/en/function.password-hash.php>

- To avoid an SQL injection attack the value received from the login form is being escaped by using the real\_escape\_string method of the mysqli object(refer to the login.php file for more clarity). For more information visit: <https://www.php.net/manual/en/mysqli.real-escape-string.php>

- As we are starting the secession at the top of the index page, when the login page is being loaded the secession will already be started. This will make the code vulnerable to a session fixation attack. To avoid this once we have logged in successfully we regenerate the id by calling the session\_regenerate\_id() function. For more information visit: <https://www.php.net/manual/en/function.session-regenerate-id.php>

## Screenshots
![login-signup-php-mysql-screenshot-mobile](https://github.com/kshitizrohilla/login-signup-using-php-mysql/blob/main/media/login-signup-using-php-mysql-screenshot-mobile.jpg?raw=true)
![login-signup-php-mysql-screenshot-mobile](https://github.com/kshitizrohilla/login-signup-using-php-mysql/blob/main/media/login-signup-using-php-mysql-screenshot-desktop-1.png?raw=true)
![login-signup-php-mysql-screenshot-mobile](https://github.com/kshitizrohilla/login-signup-using-php-mysql/blob/main/media/login-signup-using-php-mysql-screenshot-desktop-2.png?raw=true)
![login-signup-php-mysql-screenshot-mobile](https://github.com/kshitizrohilla/login-signup-using-php-mysql/blob/main/media/login-signup-using-php-mysql-screenshot-desktop-3.png?raw=true)