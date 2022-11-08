<?php
    include 'config.php';

    $query = "SELECT * FROM register";
    $connect = mysqli_query($conn, $query);
    $num = mysqli_num_rows($connect); //check in DB any data it have or not
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/display.css">
    <title>Display inserterd data from DB</title>
</head>
<body>
    <div class="container">
        <h1>Display Data</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
            </tr>
            <?php
                if($num>0){
                    while($data = mysqli_fetch_assoc($connect)){
                        echo "
                        <tr>
                            <td>".$data['id']."</td>
                            <td>".$data['username']."</td>
                            <td>".$data['email']."</td>
                            <td>".$data['phone']."</td>
                            <td>".$data['password']."</td>
                        </tr>
                        ";
                    }
                }
            ?>
            </tr>
        </table>
        <br>
        <a class="btn" href="index.php">Insert Data</a>  
        <br>
    </div>
</body>
</html>