<?php
session_start();
include 'config.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    $sql = $conn->query("SELECT * FROM `p_info` WHERE username = '$username' AND password = '$password'");

    if ($sql->num_rows > 0) {
        $row = $sql->fetch_assoc();
        $police_id = $row['police_id'];
        $message = "<div class='success-message'> Login successful! </div>";
        $_SESSION['police_id'] = $police_id;
        $_SESSION['username'] = $username;
        $_SESSION['login_time'] = time();
        header("Refresh: 1; url=home.php");
    } else {
        $message = "<div class='error-message'>Invalid username or password. Please <a href='login.php'>try again</a></div>";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <style>
        .success-message {
            margin-top: 20px;
            padding: 18px;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            display: block;
            font-size: 20px;
        }

        .error-message {
            margin-top: 20px;
            padding: 18px;
            border-radius: 5px;
            background-color: #FF0000;
            color: white;
            text-align: center;
            display: block;
            font-size: 20px;
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="main">
    <div class="container">
        <div class="signup-content">
            <form method="post" id="signup-form" class="signup-form" action="login.php">
                <h2>Log In</h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="uname" id="name" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" name="psw" id="password" placeholder="Password"/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" id="submit" class="form-submit submit" value="Log In"/>
                    <a href="register.php" class="submit-link submit">Sign Up</a>
                </div>
                <?php echo $message; ?>
            </form>
        </div>
    </div>
</div>

</body>
</html>
