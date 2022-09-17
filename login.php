 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="box">
        <div class="inner">
        <div class="head">
   <h1>Login</h1>
    
</div>
<form  method="post" action="checklogin.php">
    <div class="name">
        <label><p class="username">Email</p></label>
        <input type="text" name="email" placeholder="  Type your username" class="input1">
    <!-- &#128274; -->
    <?php
            if(isset($_REQUEST["msg"]))
            {
                echo $_REQUEST["msg"];
            }
            ?>
    <div class="pass">
        <label><p class="password">Password</p></label>
        <input type="password" name="password" placeholder="  Type your password" class="input2">
        <h5 class="forgot">Forgot password?</h5>
    </div>
    </div>
    <div class="big">
    <div class="login">
    <button class="log" type="submit">Login</button>
    </div>
    </div>
</form>
<div class="mid">
<h5 class="or">Or Sign Up Using</h5>
</div>
<div class="logos">
<div class="fb">
    <a href="https://www.facebook.com/">
    <img src="images/download (2).png" alt="facebook" class="facebook">
</a>
</div>
<div class="tw">
    <a href="https://twitter.com/i/flow/login">
    <img src="images/download (7).png" alt="twitter" class="twitter">
</a>
</div>
<div class="gl">
    <a href="https://www.google.com">
<img src="images/download (6).png" alt="google" class="google">
</a>
</div>
</div>
<div class="footer">
<div class="sign2">
    <h5 class="xor">Or Sign Up Using</h5>
<!-- <input type="button" value="SIGN UP" > -->
<a href="signup.php" class="sig">SIGN UP</a>

</div>
</div>
</div>
    </div>
</body>
</html>