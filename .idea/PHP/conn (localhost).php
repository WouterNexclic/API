<?php
$dbHost = 'localhost';
$dbName = 'snap_bang';
$dbUser = 'root';
$dbPass = '';

$conn=new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
