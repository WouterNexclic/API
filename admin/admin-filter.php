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
        <button class="max-width" onclick="location.href=''">filtering</button>
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
    <div class="filter-button">
        <button class="max-width" onclick="openFilter()">filter</button>
    </div>
    <div class="filter" id="filter" style="display: none">
        <form action="">
            <div class="row">
                <p>Gender:</p>
                <select id="gender" name="gender">
                    <option value="" selected>no</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="row">
                <p>Looking for:</p>
                <select id="looking_for" name="looking_for">
                    <option value="" selected>no</option>
                    <option value="male">male</option>
                    <option value="female">female</option>
                </select>
            </div>
            <div class="row">
                <p>Country:</p>
                <input type="text" id="country" name="country">
            </div>
            <div class="row">
                <p>City:</p>
                <input type="text" id="City" name="city">
            </div>
            <div class="row">
                <p>From the age of (min 18):</p>
                <input type="number" id="from_age" min="18" max="100" name="from_age">
            </div>
            <div class="row">
                <p>To the age of:</p>
                <input type="number" id="to_age" min="18" max="100" name="to_age">
            </div>
            <div class="row">
                <p>Who joined from:</p>
                <input type="date" id="from_join" name="from_join">
            </div>
            <div class="row">
                <p>Untill:</p>
                <input type="date" id="to_join" name="to_join">
            </div>
            <input type="submit" value="filter">
        </form>
    </div>
    <div id="complete-table" style="display: block">
        <div class="middle">
            <h1>Complete list of users</h1>
        </div>
        <div class="table">
            <?php
            require_once '../PHP/conn.php';
            $query = "SELECT * FROM users ORDER BY id ASC";
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
                <?php foreach($users as $user):?>
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
    </div>
</body>

<script>
    function openFilter(){
        $filter = document.getElementById("filter")

        if ($filter.style.display === "flex"){
            $filter.style.display = "none"
        }
        else{
            $filter.style.display = "flex"
        }

    }
</script>