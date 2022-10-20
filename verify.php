<?php
declare(strict_types=1);
session_start();


if(isset($_SESSION["loggedin"])){
    if($_SESSION["loggedin"]){
        header("location: admin/admin-panel.php");
        exit;
    }
}
elseif (empty($_SESSION["ID"])){
    header("location: login.php");
    exit;
}

require "vendor/autoload.php";
$secret = 'XVQ2UIGO75XRUKJO';
$link = \Sonata\GoogleAuthenticator\GoogleQrUrl::generate($_SESSION["username"], $secret, 'Admin-panel nexclic');
$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();

if(isset($_POST['submit'])){
    $code = $_POST['passcode'];

    if ($g->checkCode($secret, $code)) {
        $verified = $_SESSION["verified"];
        if($verified == 0){
            $update = 1;
            require_once "PHP/conn.php";
            $query = "UPDATE admins SET verified = :verified WHERE id = :id";
            $statement = $conn->prepare($query);

            $statement->execute([
                ':verified' => $update,
                ':id' => $_SESSION["ID"]
            ]);
        }

        $_SESSION["loggedin"] = true;
        header("location: admin/admin-panel.php");
        exit;
    } else {
        session_destroy();
        header("location: login.php?msg=incorrect code");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Validation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="app/css/admin-style.css">
</head>
<body oncontextmenu="return false;">
<input type="hidden" id="verified" value="">
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
    <h2>verify</h2>
    <center id="qrCenter" style="display: block"><img src="<?php echo $link?>" id="qrcode" style="width: 200px; height: 200px; display: block;"></center>
    <form id="login-form" method="post">
        <p>Please install <strong>Google authenticator</strong> App on your phone, open it up and then scan the above car code to add this application. afterwards you should see a code in the app. fill it in the below box and click on verify</p>
        <p>
            <input type="text" id="passcode" name="passcode" placeholder="Passcode" required><i class="validation"><span></span><span></span></i>
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="verify">
        </p>
    </form>
    <div id="create-account-wrap"></div>
</div>
</body>
</html>
<script>
    window.onload = function(){
        verified = <?php echo $_SESSION["verified"] ?>;

        if (verified === 1){
            document.getElementById('qrcode').style.display = 'none';
            document.getElementById('qrCenter').style.display = 'none';
        }
    }
</script>