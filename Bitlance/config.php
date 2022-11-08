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