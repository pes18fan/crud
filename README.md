# crud

A CRUD app in PHP that uses the Apache HTTP server and SQL for storing data entered through a HTML form.

Written as part of a college project.

# development

- Install [XAMPP](https://www.apachefriends.org/index.html).
- Start up the server and the MySQL database.
- Go to https://localhost/phpmyadmin, and create a new schema with the name `comp_proj`.
- Inside `comp_proj`, create a new table called `my_table` with 4 rows, all `VARCHAR`s, named `id`, `firstname`, `lastname` and `mnumber` respectively.
- Clone this repo and move it into `htdocs` folder in the directory where you installed XAMPP, so that the repo folder is located at `<XAMPP_INSTALL_PATH>/htdocs/crud`.
- Open your browser and visit https://localhost/crud/ to check it out!