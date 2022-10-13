<?php


$Gender = $_POST['gender'];
$Looking_for = $_POST['looking_for'];
$Username = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Date = $_POST['date'];
$Month = $_POST['month'];
$Year = $_POST['year'];
$Country = $_POST['country'];
$City = $_POST['city'];
$Terms_accepted = $_POST['terms_accepted'];

$str ="$Date$Month$Year";

$Birthday = date_create_from_format('dmy', '$str');

if (isset($Username)) {
    if(empty($Username)){
        $msg_name = "You must supply your name";
        header("location: ../index.php?msg=$msg_name");}
    $name_subject = $Username;
    $name_pattern = '/^[a-zA-Z ]*$/';
    preg_match($name_pattern, $name_subject, $name_matches);
    if(!$name_matches[0]){
        $msg2_name = "Only alphabets and white space allowed";
        header("location: ../index.php?msg=$msg_name");
    }
}

require_once 'conn.php';

$var = EXISTS (("SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'users' AND TABLE_SCHEMA = 'snap-bang'"));

if ( $var == 1){
    $query = "INSERT INTO users (Gender, Looking_for, Username, Email, Password, Birthday, Country, City, Terms_accepted) VALUES(:Gender, :Looking_for, :Username, :Email, :Password, :Birthday, :Country, :City, :Terms_accepted)";

    $statement = $conn->prepare($query);

    if($statement == false){
        die("incorrect query");
    }

    $statement->execute([
        ":Gender" => $Gender,
        ":Looking_for"=>$Looking_for,
        ":Username"=>$Username,
        ":Email"=>$Email,
        ":Password"=>$Password,
        ":Birthday"=>$Birthday,
        ":Country"=>$Country,
        ":City"=>$City,
        ":Terms_accepted"=>$Terms_accepted
    ]);

    die("it worked");

    header("location: ../index.php?msg=Melding opgeslagen");
}
else {
    $table = "CREATE TABLE users (Id int NOT NULL AUTO_INCREMENT, Gender varchar(255), Looking_for varchar(255), Username varchar(255), Email varchar(255), Password varchar(255), Birthday date, Country varchar(255), City varchar(255), Terms_accepted tinyint(1),PRIMARY KEY (Id))";

    $table_statement = $conn->prepare($table);

    $table_statement->execute();

    $query = "INSERT INTO users (Gender, Looking_for, Username, Email, Password, Birthday, Country, City, Terms_accepted) VALUES(:Gender, :Looking_for, :Username, :Email, :Password, :Birthday, :Country, :City, :Terms_accepted)";

    $statement = $conn->prepare($query);

    if($statement == false){
        die("incorrect query");
    }

    $statement->execute([
        ":Gender" => $Gender,
        ":Looking_for"=>$Looking_for,
        ":Username"=>$Username,
        ":Email"=>$Email,
        ":Password"=>$Password,
        ":Birthday"=>$Birthday,
        ":Country"=>$Country,
        ":City"=>$City,
        ":Terms_accepted"=>$Terms_accepted
    ]);

    die("it didnt work");

    header("location: ../index.php?msg=Melding opgeslagen");
}


?>