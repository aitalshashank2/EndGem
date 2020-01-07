# EndGem
Website for IMG Recruitment


Please visit http://ec2-54-146-236-179.compute-1.amazonaws.com/EndGem/php/index.php







There are two icons on the top right part of the homepage. The icon to the left is specially made for the admins whereas the one on the right is made for EndGem users. Registration to the website can be done by the 'sign up' option in user login (the button on the right).

*Please note that account validation e-mail drops in your spam folder and the website can be accessed only with a valid and working IIT-R G-Suite ID!

The website has been hosted using Amazon Web Services on Amazon Linux 2 AMI (HVM) - [ami-00068cd7555f543d5] with Instance type t2.micro


The source files for the same are available in this repository
In order to run the website using the source code, please follow the given instructions:

1. Enter the password of local mysql server in php/config.php file
2. The configuration of the mysql database is as follows:
    Database name : FilesDatabase
    Tables inside the database : AdminInfo; Course1; Course2; Course3; Course4; UserInfo
    
3. The configuration of tables is as follows:
    AdminInfo : UserName - VARCHAR(255);
                Password - VARCHAR(255).
    
    Course1, Course2, Course3, Course4 - All have the same table structure as given below:
    ```
        id                      -INT               -NOT NULL               -PRIMARY KEY             -AUTO INCREMENT
        displayName             -VARCHAR(255)      -NOT NULL
        Date                    -VARCHAR(15)       -NOT NULL
        downloads               -INT(15)           -NOT NULL
        size                    -INT(31)
        pdfName                 -VARCHAR(255)      -NOT NULL
        path                    -VARCHAR(1023)     -NOT NULL
        Course                  -VARCHAR(255)      -NOT NULL
     ```
        
     UserInfo : 
     ```
                UserName - VARCHAR(255);
                Password - VARCHAR(255);
                Email    - VARCHAR(511);
                hash     - VARCHAR(511);
                status   - INT(1).
      ```  
   
Functionality of the website:

Files can be added by anyone who has a valid g-suite id. The website is designed to display the documents which would play a vital role in the elevnth hour preparation of the various courses.
It displays top 6 documents of each course (soul, time, mind, power, reality and space) in a local leaderboard and also has a global leaderboard
For the management of documents and to prevent spam attacks, a functionality of admin login has been provided.
The admin has the ability of deleting contents.

The login status of the user is preserved using cookies. Any internal webpage of the website cannot be accessed without adequate authorization.

Account verification functionality is added due to which invalid email ids wont work. This is done by assigning and sending an md5 hash of a random number from 1 to 1000 to the email id.

*Mobile version of the website is under development. The mobile website under construction is a whole website, not screen-size dependent css.

**Here are the codes to put into mysql console-

Create Database:
```
CREATE DATABASE FilesDatabase;
```
Use Database:
```
USE FilesDatabase;
```
Create table 'Admin Info':
```
CREATE TABLE AdminInfo (UserName VARCHAR(255), Password VARCHAR(255));
```
Create table 'Course1'
```
CREATE TABLE Course1 (id INT NOT NULL AUTO INCREMENT, PRIMARY KEY(id), displayName VARCHAR(255) NOT NULL, Date VARCHAR(15) NOT NULL, downloads INT(15) NOT NULL, size INT(31), pdfName VARCHAR(255) NOT NULL, path VARCHAR(1023) NOT NULL, Course VARCHAR(255) NOT NULL);
```
Create table 'Course2'
```
CREATE TABLE Course2 (id INT NOT NULL AUTO INCREMENT, PRIMARY KEY(id), displayName VARCHAR(255) NOT NULL, Date VARCHAR(15) NOT NULL, downloads INT(15) NOT NULL, size INT(31), pdfName VARCHAR(255) NOT NULL, path VARCHAR(1023) NOT NULL, Course VARCHAR(255) NOT NULL);
```
Create table 'Course3'
```
CREATE TABLE Course3 (id INT NOT NULL AUTO INCREMENT, PRIMARY KEY(id), displayName VARCHAR(255) NOT NULL, Date VARCHAR(15) NOT NULL, downloads INT(15) NOT NULL, size INT(31), pdfName VARCHAR(255) NOT NULL, path VARCHAR(1023) NOT NULL, Course VARCHAR(255) NOT NULL);
```
Create table 'Course4'
```
CREATE TABLE Course4 (id INT NOT NULL AUTO INCREMENT, PRIMARY KEY(id), displayName VARCHAR(255) NOT NULL, Date VARCHAR(15) NOT NULL, downloads INT(15) NOT NULL, size INT(31), pdfName VARCHAR(255) NOT NULL, path VARCHAR(1023) NOT NULL, Course VARCHAR(255) NOT NULL);
```
Create table 'UserInfo'
```
CREATE TABLE UserInfo (UserName VARCHAR(255) NOT NULL, Password VARCHAR(255), Email VARCHAR(511) NOT NULL, hash VARCHAR(511), status INT(1));
```
