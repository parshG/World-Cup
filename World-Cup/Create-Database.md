This file has instructions on how to create a database for this website, if using xammp.

1. Open the file explorer on your desktop and go to the config.inc.php in the phpmyadmin folder in the xammp folder
2. Find the lines about the username and password and make sure they match the $dbuser and $dbpass variables in connection.php in the website folder
          The username and password files will be like this near lines 20 and 21 in the file
          $cfg['Servers'][$i]['user'] = 'root';
          $cfg['Servers'][$i]['password'] = '';
3. Next open the xaamp control panel and make sure Apache and MySQL are running
4. Once these are running open the php dashboard by going to localhost/phpmyadmin
5. In the dashboard create a new database named "login_sample_db"
6. In this database create a new table called users with 6 columns
7. Add 6 columns to the table
    The first column has id of type bigint with length 20 and make sure to click A_I button
    The second column has user_id of type bigint with length 20
    The third column has user_name of type varchar with length 100
    The fourth column has password of type varchar with length 100
    The fifth column has date of type timestamp
    The sixth column has fav_team of type varchar with length 100
8. Save the table and make sure it works by signing up and checking if the user has showed up in the table in the browse tab
    The user should have an id, user_id, user_name, password, date, and fav_team associated iwth it in the same row
9. Now login with that user and the website should run 
