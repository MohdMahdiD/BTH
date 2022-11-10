# BTH

# ⚙️ Technology Used
1. HTML5
2. CSS3
3. Core/Procedural PHP programming language
4. MySQL Relational Database

## 📖 How to Download the Project and Run on your PC?

### Pre-Requisites:

1. Download and Install XAMPP

[Click Here to Download](https://www.apachefriends.org/index.html)

2. Install any Text Editor (Sublime Text or Visual Studio Code or Atom or Brackets)

[Click Here to Download](https://code.visualstudio.com/)

### Installation

1. Download as as Zip or Clone this project
2. Move this project to Root Directory
```
Local Disc C: -> xampp -> htdocs -> 'this project'
```
*Local Disk C is the location where xampp was installed*

3. Open XAMPP Control Panel and Start 'Apache' and 'MySQL'

4. Import Database

    - Open 'phpmyadmin' in your browser
    - Create a Database
    - Import the SQL file provided with this project

5. Make Changes to settings

Go to 'config.php' file. Then make changes on following constants
```
<?php
    //Create Constants to Store Non Repeating Values
    //define('SITEURL', 'http://localhost:8080/Bitlance/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'userlogin');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die(mysqli_error()); //Database Connection

    if($conn){
        echo "<script>alert('Connection successfully')</script>";
    }else{
        echo "Error";
    }
?>
```

6. Now, Open the project in your browser. It should run perfectly.
