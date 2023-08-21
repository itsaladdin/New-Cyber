<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="../image/logo.png"> 
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style5.css">
    <link rel="stylesheet"href="style.css"/>

</head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log in</button>
    <div id="id01" class="modal">   
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST" class="modal-content animate">  
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="../image/pro.png" alt="Avatar" class="avatar">
              </div>
          
              <div class="container">
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string( $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
       
    <div class="container">
                <label for="uname"><b>Username or Email</b></label>
                <input type="text" placeholder="Enter Username" id ="user" name  = "user" / required>
          
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id ="pass" name  = "pass" / required >
                  
              <a href="home.html" class="a1"><button id="button1" type =  "submit" value = "Login" /> Log in</button></a>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
        </div>
          
          <div class="container" style="background-color:#1B2430">
            <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw"> Forgot password?</a></span>
          </div>
  </form>
  </div>  

<?php
    }
?>
</body>
</html>
