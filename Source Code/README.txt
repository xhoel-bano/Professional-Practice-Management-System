* Installation Manual
In order to make use of our software there are a few steps to be followed. 
1) Make sure to have XAMPP installed on your computer.
1) Clone the GitHub repository from this URL: https://github.com/xhoel-bano/Professional-Practice-Management-System/tree/main/Source%20Code
and extract ppms.rar folder,
or directly download the project files in the disc (in the directory /Source Code).
1) Make sure to clone/move inside the htdocs folder under the XAMPP directory structure.
1) Open XAMPP and start MySQL and Apache server. When running, they will be listening on specific ports.
1) Go to localhost/phpMyAdmin or any database design tool (such as MySQL Workbench if already installed), and run the SQL dump that can be found under 
   the directory /Database/“id19031652_ppms_db.sql”. The database, together with all the tables and inserted records will be created.

----------------------------------------------------------------------------------------------------------------------------------------------------------------

* Configuration Manual
Before accessing the system, some development variables need to be configured based on your environment.
The file for the database configuration can be found under /model directory and is named db_conn.php. Inside this file, these constants are defined to acquire 
the connection:
    HOST – “localhost”
    USER – “root”
    PASS – “”
    DB – “id19031652_ppms_db”
If the database schema name provided was not modified, change only the USER and the PASS fields, providing your phpmydadmin credentials.

----------------------------------------------------------------------------------------------------------------------------------------------------------------

* User  Manual
This system is intended to be used by the following types of users: Administrator, Student, PP Professor, University, Business, Career Office. To enter the system 
as one of the users, you can use the following pre-defined credentials:
    Admin – username: admin@gmail.com, password: test123
    Student– username: student@gmail.com, password: test123
    PP Professor– username: professor@gmail.com, password: test123
    University– username: staff@epoka.edu.al, password: test123
    Business – username: business@gmail.com, password: test123
    Career Office – username: careeroffice@gmail.com, password: test123

You can also enter the system as a guest and you will have access only to the public pages.
