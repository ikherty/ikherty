<?php
$dsn="mysql:host=localhost; dbname=ikherty";
$username = "qq";
$password = "1";
try{
    $db = new PDO($dsn, $username, $password);
    echo 'success!';
    echo    get_user();
    new_user("qq",$email,$password);
} catch (PDOException $e) {
    $error_message=$e->getMessage();
    echo $error_message;
//    exit();
}
//$id='ikherty'
function get_user() {
    global $db;
    $id='1';
    $users = $db->query("SELECT * FROM users WHERE id=$id");
    foreach ($users as $user) {
        return $user;
}

    }
function new_user($login,$email,$password) {
        $sql = "INSERT INTO users VALUES (NULL, '$login', '$password', '$email')";
        $stm = $db->prepare($sql);
        $stm->execute();
        echo 'юзверь добавлен';
}
?>
