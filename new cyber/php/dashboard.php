<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" href="../image/logo.png">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p><a href="../html/cyber.html">Welcome <?php echo $_SESSION['username']; ?></a> .</p>
        <p><a href="logout.php">Logout</a></p>
        <p><a href="../html/cyber.html">OK</a></p>
    </div>
</body>
</html>
