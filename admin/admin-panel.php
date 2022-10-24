<?php
session_start();

if(!isset($_SESSION["loggedin"])){
    header("Location: ../login.php");
    exit;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin-panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../app/css/admin-style.css">
</head>
<header>
    <div class="flex-apart">
        <img src="../app/img/logo.png" style="height: 100px; width: auto">
        <button class="max-width" onclick="location.href=''">Quick vieuw</button>
        <button class="max-width" onclick="location.href='/admin/admin-filter.php'">filtering</button>
        <button class="max-width" onclick="location.href='/admin/admin-email.php'">mailing</button>
        <form id="login-form" action="http://api.test/php/admin-API.php" method="post" style="margin: 0">
            <input type="hidden" id="type" name="type" value="logout">
            <p style="margin: 0">
                <input type="submit" id="logout" value="logout" >
            </p>
        </form>
    </div>
</header>
<body style="background: white">
    <div class="middle">
        <h1>Top 10 newest users</h1>
    </div>
    <div class="table">
        <?php
        require_once '../PHP/conn.php';
        $query = "SELECT * FROM users ORDER BY add_date DESC";
        $statement = $conn->prepare($query);
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Gender</th>
                <th>Looking for</th>
                <th>Username</th>
                <th>Email</th>
                <th>Country</th>
                <th>city</th>
                <th>Birthday</th>
                <th>Date Added</th>
            </tr>
            <?php $i = 0;
            foreach($users as $user):
                if($i++ > 9) break;?>
                <tr>
                    <td><?php echo $user['Id']?></td>
                    <td><?php echo $user['Gender']?></td>
                    <td><?php echo $user['Looking_for']?></td>
                    <td><?php echo $user['Username']?></td>
                    <td><?php echo $user['Email']?></td>
                    <td><?php echo $user['Country']?></td>
                    <td><?php echo $user['City']?></td>
                    <td><?php echo $user['Birthday']?></td>
                    <td><?php echo $user['Add_date']?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
