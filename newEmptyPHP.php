
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ikherty</title>
</head>

<body>
    <?php
        $servername = "localhost";
//        $dbname = "ikherty";
        $username = "qq";
        $password = "1";

//        $db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $userpassword);
        $conn=new mysqli($servername, $username, $password);
        if($conn->connect_error)
        {die('connection error '.$conn->connect_error);}
        echo 'success!'
                
    ?>

</body>

</html>