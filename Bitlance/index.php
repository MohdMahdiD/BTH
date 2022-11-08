<?php
    include 'config.php';
    $msg = "";

    if(isset($_POST['insert']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO register(username, email, phone, password) values('$username', '$email', '$phone', '$password')";

        if(mysqli_query($conn, $sql))
        {
            $msg = "<script>alert('new record inserted')</script>";
        }else
        {
            $msg = "Try after some time!";
        }
        mysqli_close($conn);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">

    <title>Insert data in DB using PHP & MYSQL</title>
</head>
<body>
    <div class="container">
        <h1>Insert Data</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="Post">
            <input type="text" name="username" placeholder="Enter your full name*" required>

            <input type="email" name="email" placeholder="Enter your email address*" maxlength="55" required>

            <input type="tel" name="phone" placeholder="Enter your phone number*" minlength="10" required>

            <input type="password" name="password" placeholder="Enter your password*" min="8" required>

            <input type="submit" name="insert" value="Insert Data" class="btn">
            <input type="reset" value="Clear Data" class="btn">
        
            <?php 
            if(isset($_POST['insert']))
            {
                echo <<<xyz
                <input type="button" class="btn1" onClick="parent.location='display.php'" value="Display Data">
                xyz;
                echo $msg; 
            }
            ?>
        </form>
    </div>
</body>
</html>
