<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ./admin.php?msg=already logged in");
    exit;
}

require_once "conn.php";

$Type = $_POST['type'];
$Username = $_POST['username'];
$Password = $_POST['password'];
$Admin_ID = $_POST['admin-ID'];

if ($Type == "login") {

    $query = "SELECT id, username, password, admin-ID FROM admins WHERE username = ':username', password = ':password', admin-ID = ':admin-ID'";

    $statement = $conn->prepare($query);

    if ($statement == false) {
        die("incorrect query");
    }

    if ($statement->execute([
        ":Username" => $Username,
        ":password" => $Password,
        ":admin-ID" => $Admin_ID
    ])) {
        mysqli_stmt_store_result($statement);
    }

} elseif ($Type == "logout") {

    $_SESSION = array();

    session_destroy();

    header("location: ./admin.php?msg=your logged out");
    exit;
}
