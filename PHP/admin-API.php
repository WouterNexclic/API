<?php
session_start();

require_once "conn.php";

$Type = $_POST['type'];

if ($Type == "login") {

    $Username = $_POST['username'];
    $Password = $_POST['password'];

    $query = "SELECT * FROM admins WHERE username = :username";

    $statement = $conn->prepare($query);

    $statement->execute([
        ':username' => $Username
    ]);
    $user=$statement->fetch(PDO::FETCH_ASSOC);

    if($statement->rowCount()<1){
        header("location: ../login.php?msg=no account");
        exit;
    }
    if(!password_verify($Password,$user['password']) != true){
        header("location: ../login.php?msg=wrong password");
        exit;
    }

    $_SESSION["ID"] = $user['ID'];
    $_SESSION["username"] = $user['username'];
    $_SESSION["verified"] = $user['verified'];
    header("location: ../verify.php");
    exit;

} elseif ($Type == "logout") {

    $_SESSION = array();

    session_destroy();

    header("location: ../login.php?msg=your logged out");
    exit;
}
