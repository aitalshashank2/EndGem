# EndGem
Website for IMG Recruitment



Please visit http://ec2-54-146-236-179.compute-1.amazonaws.com/EndGem/php/index.php



The website has been hosted using Amazon Web Services on Amazon Linux 2 AMI (HVM) - [ami-00068cd7555f543d5] with Instance type t2.micro


In order to see the table structure, please select raw mode.

The source files for the same are available in this repository
In order to run the website using the source code, please follow the given instructions:

1. Enter the password of local mysql server in php/config.php file
2. The configuration of the mysql database is as follows:
    Database name : FilesDatabase
    Tables inside the database : AdminInfo; Course1; Course2; Course3; Course4.
    
3. The configuration of tables is as follows:
    AdminInfo : UserName - VARCHAR(255);
                Password - VARCHAR(255).
    
    Course1, Course2, Course3, Course4 - All have the same table structure as given below:
        id                      -INT               -NOT NULL               -PRIMARY KEY             -AUTO INCREMENT
        displayName             -VARCHAR(255)      -NOT NULL
        Date                    -VARCHAR(15)       -NOT NULL
        downloads               -INT(15)           -NOT NULL
        size                    -INT(31)
        pdfName                 -VARCHAR(255)      -NOT NULL
        path                    -VARCHAR(1023)     -NOT NULL
        Course                  -VARCHAR(255)      -NOT NULL
        
        
        

Functionality of the website:

Files can be added by anyone. The website is designed to display the documents which would play a vital role in the elevnth hour preparation of the various courses.
It displays top 6 documents of each course (soul, time, mind, power, reality and space) and also has a global leaderboard
For the management of documents and to prevent spam attacks, a functionality of admin login has been provided.
The admin has the ability of deleting contents.