

<?php 
//--------------------------------------------------------------Header-------------------------------------------------------
include_once 'Header.php';
?>

<section>
    <!--------------------------------------------------Login form and Signup form------------------------------------------------>
<div class="wrapper">
    <div class="login-form" id="loginForm"> 
         <h1>Login</h1>
    <form action="index.html" method="get" id="login">
        <div class="inputbox"> 
            <input type="text/email" name="name / Email" id="name" placeholder="Username / Email" required  pattern="Admin">  <i class="fa-solid fa-user"></i>
    </div><br>
    
    <div class="inputbox">
       <input type="password" name="password" id="password" placeholder="Password" required minlength="5" pattern="Admin12" title="Letters, Numbers and signs are all allowed">  <i class="fa-solid fa-lock"></i> <br>
        <input type="checkbox" id="checkbox"> 
        <label for="checkbox"> <b class="b"> Show Pasword </b></label>
    </div><br>
    <div class="remember-me">
    
    <a class="Link" href="https://griffin250.github.io/griffin-tech-solutions/Reset_form.html"> Forgot Password / Username?</a>
    </div><br>
    <div>
    <div class="buttons"> 
            <span id="createAccount" class="create-account" onclick="opensignupForm()">  CREATE ACCOUNT </span>
            <a href=""><button class="login" type="submit"> LOGIN</button></a> 
    </div>         
    </div>  <br>  
    <h4> &UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;Or
        &UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;&UnderBar;</h4><br>
    <a class="facebook" href="https://www.facebook.com" title="Facebook"> <i class="fa-brands fa-facebook" style="color: #0659ea;"></i> Log in with Facebook</a>
    <a class="twitter" href="https://www.twitter.com" title="Twitter">  <i class="fa-brands fa-square-x-twitter" style="color: #0a5ef0;"></i> Log in with Twitter </a>
    </form></div>
    
    <!-------------------------------------------signup form---------------------------------->
   <div class="signup-form" id="signupForm">
    <h1>Register</h1>
    <form action="Account.html"> 
    <div class="inputbox">
        <input type="text" name="name" id="name" placeholder="Full Name" required>
        <span>Name required *</span>
    </div>
    <div class="inputbox"> 
        <input type="text" name="Username" id="Username" placeholder="Username" required title="Letters and Numbers are Required*"> 
        <span> Invalid Username *</span>
    </div>
    <div class="inputbox"> 
        <input type="email" name="email" id="email" placeholder="E-mail" required > 
        <span>Invalid Email*</span>
    </div>
    <div class="inputbox">
        <input type="password" name="password" id="password2" placeholder="Password" required minlength="5">  
        <span>Check Password Length*</span><br>
        <input type="checkbox" id="checkbox2"> 
        <label for="checkbox" id="checkbox"> <span> Show Pasword </span></label>
    </div><br>
    <button type="submit" class="create-account">Create Account</button>
    <div class="privacy-terms">
      <label> <p> By registering , you agree with our <a href="Privacy policy.html"> Privacy Policy</a></p></label>  
    </div>
  
    <p> Already have an Account? <span class="login-btn" id="loginButton" onclick="showLoginForm()"> Login here </span> </p>
</form>
   </div>
</div>
</section>
<!--------------------------------------------------------------Footer------------------------------->
<?php 
include_once 'Footer.php';
?>
<script src="index.js"></script>