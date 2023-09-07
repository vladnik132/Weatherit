<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <!-- Background -->
    <div class="app-wrap">
    <?php
        require('db.php');
        // When the form is submitted, check and create user session.
        if (isset($_REQUEST['username'])) {
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            $create_datetime = date("Y-m-d H:i:s");
            // Insert user in the database
            $query    = "INSERT into `users` (username, password, create_datetime)
                        VALUES ('$username', '" . md5($password) . "', '$create_datetime')";
            $result   = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='form'>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
            } else {
                echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='registration.php'>register</a> again.</p>
                    </div>";
            }
        } else {
    ?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Register</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
    </div>
    <?php
        }
    ?>
    <!-- Scripts -->
    <script src="style.js"></script>
</body>
</html>
