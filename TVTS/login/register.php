<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
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
    </style>
</head>
<body>

<div class="main">
    <div class="container">
        <div class="signup-content">
            <form method="post" id="signup-form" class="signup-form" action="register.php">
                <h2>Sign up</h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="pname" id="pname" placeholder="Your Name" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="uname" id="uname" placeholder="Username" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="post" id="post" placeholder="Your Post" required />
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="pid" id="pid" placeholder="Your Id" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="pno" id="phone" placeholder="Phone" required/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="psw" id="password" placeholder="Password" required/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up" />
                    <a href="login.php" class="submit-link submit">Log IN</a>
                </div>
            </form>
            <?php
            include 'config.php';
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                $uname = $_POST['uname'];
                $pname = $_POST['pname'];
                $post = $_POST['post'];
                $post_id = $_POST['pid'];
                $pno = $_POST['pno'];
                $email = $_POST['email'];
                $psw = $_POST['psw'];
                $sql = $conn->prepare("INSERT INTO p_info (username,policename,phoneno,email,password) VALUES(?,?,?,?,?)");
                if ($sql->execute([$uname, $pname, $pno, $email, $psw]))
                echo "<div class='success-message'>Signup Successful, Click on Login</div>";
                $conn->close();
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>