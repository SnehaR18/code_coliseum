
<!DOCTYPE html>
<html>
<head>
	<title>CODE COLISEUM</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <form name="login-form" id="login-form" method="post" action="login_valid.php" >  
  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Username or Email</span>
        <input type="text" name="username" id="username"  autocomplete="off">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password" id="password" >
      </label>
      <button class="submit" id="submit"type="submit">Sign In</button>
      <p class="forgot-pass"><a href="forgotpass.php">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><a href="googleLogin.php"><img src="https://www.sofakenews.com/wp-content/uploads/2018/10/5a35540277d9e6.8445514415134443544909.png"></a></li>
          <li><a href="facebooklogin.php"><img src="https://is1-ssl.mzstatic.com/image/thumb/Purple124/v4/9b/72/ff/9b72ff12-abee-c6f3-76de-79fb7db4afcd/Icon-Production-0-0-1x_U007emarketing-0-0-0-7-0-0-sRGB-0-0-0-GLES2_U002c0-512MB-85-220-0-0.png/246x0w.png" ></a></li>
          <li><a href="gitlogin.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Font_Awesome_5_brands_github-square.svg/1200px-Font_Awesome_5_brands_github-square.svg.png"></a></li>
         
        </ul>
      </div>
    </div>
  </form>
    <form name="signup" action="insert.php" method="post">
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already hava an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" class="username" id="username"name="username">
        </label>
        <label>
          <span>Email</span>
          <input type="email" class="email" id="email" name="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password" class="password" id="password"name="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" class="password" id="password"name="password">
        </label>
        <button id="submit"type="submit" class="submit">Sign Up Now</button>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript" src="script.js"></script>
</body>
</html>