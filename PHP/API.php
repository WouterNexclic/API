<?php


function getIPAddress() {
    //whether ip is from the share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from the proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
//whether ip is from the remote address
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$IP = getIPAddress();

$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
    $Device = "mobile";
    $OS = PHP_OS_FAMILY;
}
else{
    $Device = "desktop";
    $OS = PHP_OS_FAMILY;
}

function getUserBrowser(){
    $fullUserBrowser = (!empty($_SERVER['HTTP_USER_AGENT'])?
        $_SERVER['HTTP_USER_AGENT']:getenv('HTTP_USER_AGENT'));
    $userBrowser = explode(')', $fullUserBrowser);
    $userBrowser = $userBrowser[count($userBrowser)-1];

    if((!$userBrowser || $userBrowser === '' || $userBrowser === ' ' || strpos($userBrowser, 'like Gecko') === 1) && strpos($fullUserBrowser, 'Windows') !== false){
        return 'Internet-Explorer';
    }else if((strpos($userBrowser, 'Edge/') !== false || strpos($userBrowser, 'Edg/') !== false) && strpos($fullUserBrowser, 'Windows') !== false){
        return 'Microsoft-Edge';
    }else if(strpos($userBrowser, 'Chrome/') === 1 || strpos($userBrowser, 'CriOS/') === 1){
        return 'Google-Chrome';
    }else if(strpos($userBrowser, 'Firefox/') !== false || strpos($userBrowser, 'FxiOS/') !== false){
        return 'Mozilla-Firefox';
    }else if(strpos($userBrowser, 'Safari/') !== false && strpos($fullUserBrowser, 'Mac') !== false){
        return 'Safari';
    }else if(strpos($userBrowser, 'OPR/') !== false && strpos($fullUserBrowser, 'Opera Mini') !== false){
        return 'Opera-Mini';
    }else if(strpos($userBrowser, 'OPR/') !== false){
        return 'Opera';
    }
    return 'obscure browser / secured http user agent';
}

$Browser = getUserBrowser();

if(empty($_SERVER['HTTP_REFERER'])){
    $Reffer = "empty";
}
else{
    $Reffer = $_SERVER['HTTP_REFERER'];
}

$Domain = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}";

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

$header = "location: ../index.php?start_date=$Start_date&end_date=$End_date&api_key=$Api_key&format=$Format&fields=id,date,type,cost,status,confirms,site,currency,commissions,campaign";

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

    $datetime = new DateTime($Birthday);

    $today = new DateTime();
    $today->setTimestamp(date('Y-m-d'));

    $diff = date_diff($datetime, $today);

    $Age = $diff->format('%y');
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

$table = "CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Gender` varchar(255) DEFAULT NULL,
  `Looking_for` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `IP` varchar(15) DEFAULT NULL,
  `Device` varchar(255) DEFAULT NULL,
  `OS` varchar(255) DEFAULT NULL,
  `Browser` varchar(255) DEFAULT NULL,
  `Domain` varchar(255) DEFAULT NULL,
  `Referal` varchar(255) DEFAULT NULL,
  `Reffer` varchar(255) DEFAULT NULL,
  `Terms_accepted` tinyint(1) DEFAULT NULL,
  `Add_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;";

$table_statement = $conn->prepare($table);

$table_statement->execute();

$query = "INSERT INTO users (Gender, Looking_for, Username, Email, Birthday, Age, Country, City, IP, Device, OS, Browser, Domain, Referal, Reffer, Terms_accepted) VALUES(:Gender, :Looking_for, :Username, :Email, :Birthday, :Age, :Country, :City, :IP, :Device, :OS, :Browser, :Domain, :Referal, :Reffer, :Terms_accepted)";

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
    ":Age" => $Age,
    ":Country" => $Country,
    ":City" => $City,
    ":IP" => $IP,
    ":Device" => $Device,
    ":OS" => $OS,
    ":Browser" => $Browser,
    ":Domain" => $Domain,
    ":Referal" => $header,
    ":Reffer" => $Reffer,
    ":Terms_accepted" => $Terms_accepted
]);

header($header);