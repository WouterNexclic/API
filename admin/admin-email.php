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
        <button class="max-width" onclick="location.href='/admin/admin-panel.php'">Quick vieuw</button>
        <button class="max-width" onclick="location.href='/admin/admin-filter.php'">filtering</button>
        <button class="max-width" onclick="location.href=''">mailing</button>
        <form id="login-form" action="http://api.test/php/admin-API.php" method="post" style="margin: 0">
            <input type="hidden" id="type" name="type" value="logout">
            <p style="margin: 0">
                <input type="submit" id="logout" value="logout" >
            </p>
        </form>
    </div>
</header>
<body style="background: white">

<div class="contained">
    <div class="middle">
        <h1>Mailing</h1>
        <h3>(Leave fields empty if you dont want to filter with them)</h3>
    </div>
    <form>
        <div class="row">
            <p>Gender:</p>
            <select id="Gender" name="Gender">
                <option value="no" selected>no</option>
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
        </div>
        <div class="row">
            <p>Looking for:</p>
            <select id="Gender" name="Gender">
                <option value="no" selected>no</option>
                <option value="male">male</option>
                <option value="female">female</option>
            </select>
        </div>
        <div class="row">
            <p>Country:</p>
            <input type="text" id="country">
        </div>
        <div class="row">
            <p>City:</p>
            <input type="text" id="City">
        </div>
        <div class="row">
            <p>From the age of (min 18):</p>
            <input type="number" id="from_age" min="18" max="99">
        </div>
        <div class="row">
            <p>To the age of:</p>
            <input type="number" id="to_age" min="18" max="100">
        </div>
        <div class="row">
            <p>Who joined from:</p>
            <input type="date" id="from_join">
        </div>
        <div class="row">
            <p>Untill:</p>
            <input type="date" id="to_join">
        </div>
        <input type="submit" value="get mailing list">
    </form>
</div>
</body>