## Informations about the database and the application:
The application is linked to the school's database.
User permissions depend on their status in the school database.



## Requirements:

- Wamp or Xampp

- Mysql

- Php 8

## :warning: Attention

:computer: You need Php 8 or uper to run this project. So if you're using Wamp or Xampp, please tutorials  for:

:small_red_triangle: Wamp: <https://www.myonlineedu.com/blog/view/16/how-to-update-to-php-8-in-wamp-server-localhost>

:small_red_triangle: Xampp: <https://php.tutorials24x7.com/blog/update-php-version-to-php-8-in-xampp-on-windows>



## Rendered:

- Create a new database as mentioned in env.local.php
- Import ePatriote-Dev-High-School-Project.sql into a newest database
- Insert into the database the shool actor informations in the tables:
    *student
    *parents
    *teacher
    *censor
    *informatic
- Run in the project dir:
-Create an acount whith the mail that you use to register in the school

```bash
php -S localhost:9000 -t public 
``` 

- Checkout your browser at <http://localhost:9000> and view page
- NB: You can encounter some error base on your environnment

