<?php

$Api_key = "some_api_key";
$Start_date= date('d-m-y');
$End_date= date('d-m-y');
$Format = "json";
$Gender = $_POST['gender'];
$Looking_for = $_POST['looking_for'];
$Username = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Date = $_POST['date'];
$Month = $_POST['month'];
$Year = $_POST['year'];
$Country = "get_geocode";
$City = "get_citycode";
$Terms_accepted = $_POST['terms_accepted'];

if(isset($Terms_accepted) && $Terms_accepted == 'Yes') {
    $Terms_accepted = 1;
}
else
{
    $msg = "You need to accept the terms and conditions & privacy policy";
    header("location: ../index.php?msg=$msg");
    exit;
}

if(isset($Date) && $Date != 'Yes' &&  isset($Month) && $Month != 'Yes' &&  isset($Year) && $Year != 'Yes') {
    $str = $Date . "/" . $Month . "/" . $Year;

    $Birthday_time = strtotime($str);

    $Birthday = date('Y-m-d',$Birthday_time);
}
else
{
    $msg = "You need to put in your birthday";
    header("location: ../index.php?msg=$msg");
    exit;
}

if (isset($Username)  OR empty($Username)) {
    if(empty($Username)){
        $msg = "You must supply your name";
        header("location: ../index.php?msg=$msg");
        exit;}
    $name_subject = $Username;
    $name_pattern = '/^[a-zA-Z ]+$/';
    preg_match($name_pattern, $name_subject, $name_matches);
    if(!$name_matches[0]){
        $msg = "Only alphabets and space are allowed";
        header("location: ../index.php?msg=$msg");
        exit;
    }
}

require_once 'conn.php';

$table = "CREATE TABLE IF NOT EXISTS $dbName.users (Id int NOT NULL AUTO_INCREMENT, Gender varchar(255), Looking_for varchar(255), Username varchar(255), Email varchar(255), Birthday date, Country varchar(255), City varchar(255), Terms_accepted tinyint(1),PRIMARY KEY (Id))";

$table_statement = $conn->prepare($table);

$table_statement->execute();

$query = "INSERT INTO users (Gender, Looking_for, Username, Email, Birthday, Country, City, Terms_accepted) VALUES(:Gender, :Looking_for, :Username, :Email, :Birthday, :Country, :City, :Terms_accepted)";

$statement = $conn->prepare($query);

if ($statement == false) {
    die("incorrect query");
}

$statement->execute([
    ":Gender" => $Gender,
    ":Looking_for" => $Looking_for,
    ":Username" => $Username,
    ":Email" => $Email,
    ":Birthday" => $Birthday,
    ":Country" => $Country,
    ":City" => $City,
    ":Terms_accepted" => $Terms_accepted
]);

header("location: ../index.php?start_date=$Start_date&end_date=$End_date&api_key=$Api_key&format=$Format&fields=id,date,type,cost,status,confirms,site,currency,commissions,campaign");