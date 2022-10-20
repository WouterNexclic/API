<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION["ID"])){
    if(!isset($_SESSION["loggedin"])){
        header("location: verify.php");
        exit;
    }
    elseif ($_SESSION["loggedin"]){
        header("location: admin/admin-panel.php");
        exit;
    }
}
?>

<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="app/css/admin-style.css">

</head>
<body oncontextmenu="return false;">
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
    <h2>Login</h2>
    <form id="login-form" action="http://api.test/php/admin-API.php" method="post">
        <input type="hidden" id="type" name="type" value="login">
        <p>
            <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i>
        </p>
        <p>
            <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"><span></span><span></span></i>
        </p>
        <p>
            <input type="submit" id="login" value="Login">
        </p>
    </form>
    <div id="create-account-wrap"></div>
</div>
</body>
</html>