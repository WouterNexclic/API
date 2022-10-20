<?php
session_start();

if(!isset($_SESSION["loggedin"])){
header("Location: ../login.php");
exit;
}
?>

<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>admin-panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../app/css/admin-style.css">
</head>
<header>
    <div class="flex-apart">
        <img src="../app/img/logo.png" style="height: 100px; width: auto">
        <button class="max-width" onclick="location.href='/admin/admin-panel.php'">panel</button>
        <button class="max-width" onclick="location.href=''">filtering</button>
        <form id="login-form" action="http://api.test/php/admin-API.php" method="post" style="margin: 0">
            <input type="hidden" id="type" name="type" value="logout">
            <p style="margin: 0">
                <input type="submit" id="logout" value="logout" >
            </p>
        </form>
    </div>
</header>