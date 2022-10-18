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

$str = $Date . "/" . $Month . "/" . $Year;

$Birthday_time = strtotime($str);

$Birthday = date('Y-m-d',$Birthday_time);

if (isset($Username)) {
    if(empty($Username)){
        $msg_name = "You must supply your name";
        header("location: ../index.php?msg=$msg_name");}
    $name_subject = $Username;
    $name_pattern = '/^[a-zA-Z1-9 ]*$/';
    preg_match($name_pattern, $name_subject, $name_matches);
    if(!$name_matches[0]){
        $msg_name = "Only alphabets and white space allowed";
        header("location: ../index.php?msg=$msg_name");
    }
}

$email_subject = $Email;
$email_pattern = '/[A-Za-z1-9]*[@]{1}[A-Za-z1-9]*[.]{1}[a-z]*$/';
preg_match($email_pattern, $email_subject, $email_matches);
if(!$email_matches[0]){
    $msg_name = "oops something went wrong";
    header("location: ../index.php?msg=$msg_name");
}

if(isset($Terms_accepted) &&
    $Terms_accepted == 'Yes')
{
    $Terms_accepted = 1;
}
else
{
    $Terms_accepted = 0;
}

require_once 'conn.php';


$table = "CREATE TABLE IF NOT EXISTS snap_bang.users (Id int NOT NULL AUTO_INCREMENT, Gender varchar(255), Looking_for varchar(255), Username varchar(255), Email varchar(255), Password varchar(255), Birthday date, Country varchar(255), City varchar(255), Terms_accepted tinyint(1),PRIMARY KEY (Id))";

$table_statement = $conn->prepare($table);

$table_statement->execute();

$query = "INSERT INTO users (Gender, Looking_for, Username, Email, Password, Birthday, Country, City, Terms_accepted) VALUES(:Gender, :Looking_for, :Username, :Email, :Password, :Birthday, :Country, :City, :Terms_accepted)";

$statement = $conn->prepare($query);

if ($statement == false) {
    die("incorrect query");
}

$statement->execute([
    ":Gender" => $Gender,
    ":Looking_for" => $Looking_for,
    ":Username" => $Username,
    ":Email" => $Email,
    ":Password" => $Password,
    ":Birthday" => $Birthday,
    ":Country" => $Country,
    ":City" => $City,
    ":Terms_accepted" => $Terms_accepted
]);

header("location: ../index.php?msg=Melding opgeslagen nd");

?>